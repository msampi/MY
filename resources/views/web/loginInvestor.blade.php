@extends('layouts.web')

@section('content')
<section class="textdivider">
    <div class="bg-wallst"></div>
    <div class="container text-center mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="line-height-1 mt-5">You don't have an account yet?</h1>
                <h2><a href="{{ url('register-investor') }}">Go to registration page</a></h2>
            </div>
            <div class="col-md-6">
                @if (session('register'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <strong>Registration succesfully.</strong> For security, the administration will aprove your account and we will let you know by email.
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-12 text-left text-dark">
                            <label for="email" class="control-label-form">E-Mail Address</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" id="email" value="{{ old('email') }}" data-msg-required="You must enter your email" maxlength="100" class="form-control {{ $errors->has('email') ? ' error' : '' }}" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 text-left text-dark">
                            <label for="password" class="control-label-form">Password</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" id="password" data-msg-required="You must enter your password" maxlength="100" class="form-control {{ $errors->has('password') ? ' error' : '' }}" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mt-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary btn-rounded">
                                Login
                            </button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
