@extends('Layouts.guest')
@section('title', 'Login | FIN21')
@section('content')
<div class="container" style="padding-top:40px;">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="sub-title">
                <h2>Home Page</h2>
                <h6>You can modify app and continue with other pages</h6>
            </div>
        </div>
        <div class="col-lg-12">
            <h6>
                <a href="{{ route('login') }}" class="btn btn-light">Login</a>
                |
                <a href="{{ route('register') }}" class="btn btn-light">Register</a>
            </h6>
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
    .jconfirm-box {
        color: rgb(46, 46, 46) !important;
    }

</style>
@endpush
@push('js')

@endpush
