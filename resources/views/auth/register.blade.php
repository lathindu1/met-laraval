@extends('layouts.guest')
@section('title', 'Login | FIN21')
@section('content')
<div class="container" style="padding-top:40px;">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="sub-title">
                <h2>Sign Up</h2>
                <p>Sign up with Fin21 here</p>
            </div>
        </div>
    </div>
    <div class="row feature_items justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 single-wrapper">
            <div class="single-items wow fadeIn text-left " data-wow-duration="2s" data-wow-delay=".3s">
                <form method="POST" action="{{ route('register') }}" id="register-form" class="default-form auth-form ">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Full Name<lable class="text-danger">*</lable></label>
                                <input id="inp_name" type="text" name="name" value="{{old('name')}}" autofocus
                                    autocomplete="name" class="form-control">
                                <span class="help-block ">
                                    <strong class="text-danger" id="inp_name_msg"></strong>
                                </span>
                                @if ($errors->has('name'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Your Email<lable class="text-danger">*</lable></label>
                                <input id="email" type="email" name="email" value="{{old('email')}}" autofocus
                                    autocomplete="username" class="form-control">
                                <span class="help-block ">
                                    <strong class="text-danger" id="email_msg"></strong>
                                </span>
                                @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Password
                                    &nbsp;&nbsp;
                                    <lable class="text-danger">*</lable>
                                    <i id="eye" onclick="showPassword()" class="far fa-eye"></i></label>
                                <input id="password" type="password" class="form-control" name="password"
                                    autocomplete="new-password">
                                <span class="help-block ">
                                    <strong class="text-danger" id="password_msg"></strong>
                                </span>
                                @if ($errors->has('password'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Confirmation Password<lable class="text-danger">*</lable></label>
                                <input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" autocomplete="new-password">
                                <span class="help-block ">
                                    <strong class="text-danger" id="password_confirmation_msg"></strong>
                                </span>
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="form-group checkbox">
                                <input id="agreePolicy" type="checkbox" class="form-checkbox" name="terms">
                                <label class="termpolicy" id="terms">I agree to the <a href="/">TOS</a>
                                    and
                                    <a href="/">Privacy Policy</a>.</label>
                                @if ($errors->has('terms'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('terms') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <button class="btn btn-light" type="submit">
                                    Register
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div>
                                <p class="mr-4 mr-sm-0">Already have an account ?
                                    <a href="{{route('login')}}" class="font-weight-medium text-white"> Login
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
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
