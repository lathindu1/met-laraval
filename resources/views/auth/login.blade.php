@extends('layouts.guest')
@section('title', 'Login | FIN21')
@section('content')
<div class="container" style="padding-top:40px;">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="sub-title">
                <h2>Sign In</h2>
                <p>Login to your dashboard here</p>
            </div>
        </div>
    </div>
    <div class="row feature_items justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 single-wrapper">
            <div class="single-items wow fadeIn text-left " data-wow-duration="2s" data-wow-delay=".3s">
                <form method="POST" action="{{ route('login') }}" id="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="">Your Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" required
                            autofocus id="email" aria-describedby="helpId" placeholder="">

                        @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}" required
                            autofocus id="password" aria-describedby="helpId">

                        @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-check ">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-lg-4">
                            <div class="form-group">
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                                <button class="btn btn-light btn-block style-one g-recaptcha" type="submit">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-4 mb-4">
            <h6 class="text-white wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">Or</h6>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-5 single-wrapper">
            <div class="single-items wow fadeIn text-left " data-wow-duration="2s" data-wow-delay=".3s">
                <livewire:metamask-card />
            </div>
        </div>
        <div class="col-lg-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">
            <div class="mt-2 mb-2 text-center">
                <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock"></i>
                    Forgot your password?</a>
            </div>
            <div class="mb-4 text-center">
                <p>Don't have an account ? <a href="{{route('register')}}" class="font-weight-medium text-primary">
                        Signup now </a> </p>
            </div>
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
