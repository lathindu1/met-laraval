<script>
    /**
     *
     * Authenticate User
     */
    function authMe() {
        EThAppDeploy.loadWeb3();
    }
    /**
     *
     * Metamask Function
     * **/
    EThAppDeploy = {
        loadWeb3: async () => {

            if (typeof window.ethereum !== 'undefined') {
                EThAppDeploy.runEthereumFunctions();
            } else {
                $.alert({
                    title: 'Oops!',
                    content: 'Please install Metamask to your browser.!',
                });
            }

        },
        runEthereumFunctions: async () => {
            const provider = await detectEthereumProvider();
            provider.autoRefreshOnNetworkChange = false;
            if (provider) {
                ethereum
                    .request({
                        method: 'eth_requestAccounts'
                    })
                    .then((resp) => {
                        @this.validateUser(resp);
                    })
                    .catch((err) => {
                        $.alert({
                            title: 'Oops!',
                            content: 'Please connect your metamsk with us to continue!',
                        });
                    });

            } else {
                // handle no provider
                $.alert({
                    title: 'Oops!',
                    content: 'Please install Metamask to your browser.!',
                });
            }
        },
        /***
         *
         *Deployee new Contract with new customer
         * */
        validatewithSign: async (message, publicAddress) => {
            try {
                const msg = `0x${ethereumjs.Buffer.Buffer.from(message, 'utf8').toString('hex')}`
                const sign = await ethereum.request({
                    method: 'personal_sign',
                    params: [msg, publicAddress, 'Example password'],
                })
                @this.validateSign(sign, publicAddress);
            } catch (err) {
                $.alert({
                    title: 'Oops!',
                    content: "Login declined",
                });
            }
        },
    }


    window.addEventListener('newNonce', event => {
        EThAppDeploy.validatewithSign(event.detail.nonce, event.detail.address);
    })

    window.addEventListener('itsError', event => {
        $.alert({
            title: 'Oops!',
            content: event.detail.error,
        });
    })

</script>
