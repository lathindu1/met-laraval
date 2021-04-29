<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css"
        integrity="sha512-0V10q+b1Iumz67sVDL8LPFZEEavo6H/nBSyghr7mm9JEQkOAm91HNoZQRvQdjennBb/oEuW+8oZHVpIKq+d25g=="
        crossorigin="anonymous" />
    @livewireStyles
    <style>
        .bo-none {
            border: none;
        }

    </style>
    <title>Metamsk Login!</title>
</head>

<body class="bg-light" style="height:100vh;">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-12 text-center align-self-center">
                <h1><strong>Welcome</strong> To See MetaMask Integration</h1>
                <h6>By Lathindu Pramuditha</h6>
                <h6 style="margin-top:40px;"><strong class="text-muted">Get Start</strong></h6>
                <hr>
            </div>
            <div class="col-lg-3">
                <livewire:metamask-card />
            </div>
            <div class="col-lg-3">
                <div class="card shadow bo-none">
                    <div class="card-body">
                        <h5 class="card-title">Using Standerd Process</h5>
                        <h6 class="mb-4">Click To Login Using Email,Password</h6>
                        <a href="{{ route('login') }}" class="btn btn-dark">Login</a>
                        |
                        <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"
        integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww=="
        crossorigin="anonymous"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @stack('js')
</body>

</html>
