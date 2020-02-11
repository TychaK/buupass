<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="theme-login">
                    <div class="theme-login-header">
                        <h1 class="theme-login-title">Sign Up</h1>
                        <p class="theme-login-subtitle">Login into your Bookify account</p>
                    </div>
                    <div class="theme-login-box">
                        <div class="theme-login-box-inner">
                            {{Form::open(['action'=>'UsersController@sign_up','class'=>'theme-login-form','method'=>'POST'])}}
                            <div class="form-group theme-login-form-group">
                                {{Form::text('full_name','',['required','class'=>'form-control','placeholder'=>'Full Name','autocomplete'=>'off'])}}
                            </div>
                            <div class="form-group theme-login-form-group">
                                {{Form::text('email','',['required','class'=>'form-control','placeholder'=>'Email Address','autocomplete'=>'off'])}}
                            </div>
                            <div class="form-group theme-login-form-group">
                                {{Form::text('password','',['required','class'=>'form-control','placeholder'=>'Password','autocomplete'=>'off'])}}
                            </div>
                            <div class="form-group theme-login-form-group">
                                {{Form::text('password_confirmation','',['required','class'=>'form-control','placeholder'=>'Confirm Password','autocomplete'=>'off'])}}
                            </div>
                            <button class="btn btn-uc btn-dark btn-block btn-lg" type="submit" href="#">Sign Up</button>
                            {{Form::close()}}
                            <div class="theme-login-social-separator">
                                <p>or Sign Up with social media</p>
                            </div>
                            <div class="theme-login-social-login">
                                <div class="row" data-gutter="10">
                                    <div class="col-xs-6">
                                        <a class="theme-login-social-login-facebook" href="#">
                                            <i class="fa fa-facebook-square"></i>
                                            <span>Sign Up with
                            <br/>
                            <b>Facebook</b>
                          </span></a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a class="theme-login-social-login-google" href="#">
                                            <i class="fa fa-google-plus-circle"></i>
                                            <span>Sign up with
                            <br/>
                            <b>Google</b>
                          </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-login-box-alt">
                            <p>Already have an account? &nbsp;
                                <a href="/login">Login.</a>
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
