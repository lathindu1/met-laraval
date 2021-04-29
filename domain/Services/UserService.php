<?php
namespace domain\Services;

use App\Models\User;
class UserService
{
    protected $users;
    public function __construct()
    {
        $this->users = new User();
    }
    /**
     * Get all Users
     * @return User
     */
    public function all()
    {
        return $this->users->all();
    }
    /**
     * Create users
     * @param  Array $request
     */
    public function create(array $data)
    {
        return $this->users->create($data);
    }
    /**
     * Get users Data
     * @param  $id
     * @return User
     */
    public function get($id)
    {
        return $this->users->find($id);
    }
    /**
     * Get users By Address
     * @param  String $address
     * @return User
     */
    public function getByAddress($address)
    {
        return $this->users->getByAddress($address);
    }
    /**
     * Update users Data
     * @param  $id
     * @return User
     */
    public function update(User $user, array $data)
    {
        $user->update($this->edit($user, $data));
    }
    /**
     * Edit users Data
     * @param User $users,$data
     */
    public function edit(User $user, $data)
    {
        return array_merge($user->toArray(), $data);
    }
}
