<?php

namespace App\Http\Livewire;

use domain\Facades\Keccak\Keccak;
use domain\Facades\UserFacade;
use Elliptic\EC;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class MetamaskCard extends Component
{
    public function render()
    {
        return view('components.metamask-card');
    }
    /**
     * Validate User
     *
     * @param  mixed $address
     *
     * @return void
     */
    public function validateUser($address){
        $user = UserFacade::getByAddress($address[0]);
        if($user){
            $this->loginUser($user);
        }else{
            $this->signupUser($address[0]);
        }

    }
        /**
     * Login User
     *
     * @param  User $user
     *
     * @return void
     */
     public function loginUser($user){
        $this->signMetaMask($user);
    }
    /**
     * Signup User
     *
     * @param  String $address
     *
     * @return void
     */
    public function signupUser($address){
        $user = UserFacade::create(
            [
            "address" => $address,
            "nonce" => uniqid('sip',true),
            ]
        );
        $this->signMetaMask($user);
    }
    /**
     * Sign With MetaMask
     *
     * @param  User $user
     *
     * @return void
     */
    public function signMetaMask($user){
         $this->dispatchBrowserEvent(
             'newNonce',
                [
                    'nonce'=>$this->genMessage($user->nonce),
                    'address'=>$user->address,
                ]
            );
    }
    /**
     * Generate Message
     *
     * @param  String $nonce
     *
     * @return String
     */
    public function genMessage($nonce){
        return "Hi there, Sign this message to prove you have access to this wallet and we’ll log you in."
        ." This won’t cost you any Ether. To stop hackers using your wallet, here’s a unique message ID they can’t guess:".$nonce;
    }
    /**
     * PubKey To Address
     *
     * @param  Mixed $pubkey
     *
     * @return String
     */
    function pubKeyToAddress($pubkey) {
        return "0x" . substr(Keccak::hash(substr(hex2bin($pubkey->encode("hex")), 1), 256), 24);
    }
    /**
     * Validate Sign
     *
     * @param  String $signature
     * @param  String $address
     *
     * @return void
     */
    public function validateSign($signature, $address){

        $user = UserFacade::getByAddress($address);
        $message =$this->genMessage($user->nonce);
        $msglen = strlen($message);
        $hash   = Keccak::hash("\x19Ethereum Signed Message:\n{$msglen}{$message}", 256);

        $sign   = ["r" => substr($signature, 2, 64),
               "s" => substr($signature, 66, 64)];
        $recid  = ord(hex2bin(substr($signature, 130, 2))) - 27;

        if ($recid != ($recid & 1)){
         $this->dispatchBrowserEvent(
             'itsError',
                [
                    'error'=>"Could not validate your account. Please Try Again.",
                ]
            );
        return false;

        }

        $ec = new EC('secp256k1');
        $pubkey = $ec->recoverPubKey($hash, $sign, $recid);

        if($address == $this->pubKeyToAddress($pubkey)){
            $this->userLogged($user);
        }else{
            $this->dispatchBrowserEvent(
             'itsError',
                [
                    'error'=>"Could not validate your account. Please Try Again.",
                ]
            );
        }
    }
    /**
     * User Logged
     *
     * @param  mixed $user
     * @return void
     */
    public function userLogged($user){
        UserFacade::update($user,["nonce" => uniqid('sip',true)]);
           Auth::login($user, true);
           return redirect(route("dashboard"));
    }

}
