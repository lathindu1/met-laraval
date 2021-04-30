@extends('Layouts.guest')
@section('title', 'Reset Password | APEX')
@section('content')


<!--Page Title-->
<section class="page-title text-center style-two">
    <div class="pattern-layer auth-header"></div>
</section>
<!--End Page Title-->

<!-- contact-section -->
<section class="contact-section alternate-2 pt-0" style=" margin-top: 5vh">
    <div class="pattern-layer auth-form-area"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column" style="margin-top: 10vh">
                <div class="section-title">
                    <h2>Reset Password</h2>
                    <p>Reset your password</p>
                </div>
                <div id="content_block_09">
                    <div class="content-box">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('password.update') }}" id="reset-form"
                            class="default-form  auth-form">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label>Your Email</label><br>
                                <input class="form-control" id="email" type="email" name="email"
                                    value="{{old('email', $request->email)}}" placeholder="Enter email here" readonly>
                                @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password <i id="eye" onclick="showPassword()" class="far fa-eye"></i></label><br>
                                <input class="form-control" id="password" type="password" name="password" autofocus
                                    autocomplete="new-password" placeholder="Password">
                                <span class="help-block">
                                    <strong class="text-danger" id="password"></strong>
                                </span>
                                @if ($errors->has('password'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirmation Password </label><br>
                                <input class="form-control" id="password_confirmation" type="password"
                                    name="password_confirmation" autocomplete="new-password"
                                    placeholder="Password confirmation">
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mt-20 text-center">
                                <button class="btn btn-success" type="submit" name="submit-form">
                                    {{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<style>
    .error {
        color: red !important;
        margin-top: 10px;
    }

</style>

@endpush

@push('js')
@include('auth.Includes.js')
@endpush
