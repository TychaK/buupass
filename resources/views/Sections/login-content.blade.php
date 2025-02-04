<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="theme-login">
                    <div class="theme-login-header">
                        <h1 class="theme-login-title">Sign In</h1>
                        <p class="theme-login-subtitle">Login into your Bookify account</p>
                    </div>
                    <div class="theme-login-box">
                        @if(Session::has('alert'))
                            <div class="alert alert-danger text-center">
                                {{Session::get('alert')}}
                            </div>
                        @endif
                        <div class="theme-login-box-inner">
                            {{Form::open(['action'=>'UsersController@login','class'=>'theme-login-form','method'=>'POST'])}}
                            <div class="form-group theme-login-form-group">
                                {{Form::text('email','',['required','class'=>'form-control','placeholder'=>'Email Address','autocomplete'=>'off'])}}
                            </div>
                            <div class="form-group theme-login-form-group">
                                {{Form::text('password','',['required','class'=>'form-control','placeholder'=>'Password','autocomplete'=>'off'])}}
                                <p class="help-block">
                                    <a href="pwd-reset.html">Forgot password?</a>
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="theme-login-checkbox">
                                    <label class="icheck-label">
                                        <input class="icheck" type="checkbox"/>
                                        <span class="icheck-title">Keep me logged in</span>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-uc btn-dark btn-block btn-lg" type="submit" href="#">Sign In</button>
                            {{Form::close()}}
                            <div class="theme-login-social-separator">
                                <p>or sign in with social media</p>
                            </div>
                            <div class="theme-login-social-login">
                                <div class="row" data-gutter="10">
                                    <div class="col-xs-6">
                                        <a class="theme-login-social-login-facebook" href="#">
                                            <i class="fa fa-facebook-square"></i>
                                            <span>Sign in with
                            <br/>
                            <b>Facebook</b>
                          </span>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a class="theme-login-social-login-google" href="#">
                                            <i class="fa fa-google-plus-circle"></i>
                                            <span>Sign in with
                            <br/>
                            <b>Google</b>
                          </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-login-box-alt">
                            <p>Don't have an account? &nbsp;
                                <a href="/signup">Sign up.</a>
                            </p>
                        </div>
                    </div>
                    <p class="theme-login-terms">By logging in you accept our
                        <a href="#">terms of use</a>
                        <br/>and
                        <a href="#">privacy policy</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
