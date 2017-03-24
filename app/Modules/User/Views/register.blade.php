

@extends('User/Layouts/indexLayout')

@section('content')

    <section class="mysignup">

        <div class="container signup">
            <div class="row">

                <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

                    <form name="contactForm" id='contact_form' method="post" action='/registerUser'>
                        <h3>Customer Registration</h3>

                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <input type='text' name='firstname' id='fname' class="form-control" placeholder="First Name">
                                </div>

                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('firstname'); ?> </div>

                                <div>
                                    <input type='text' name='lastname' id='lname' class="form-control" placeholder="Last Name">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('lastname'); ?> </div>
                                <div>
                                    <input type='text' name='email' id='username' class="form-control" placeholder="Username / Email-Id">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('email'); ?> </div>


                                <div>
                                    <input type='text' name='mobile' id='mobile' class="form-control" placeholder="Mobile Number">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('mobile'); ?> </div>


                                <div>
                                    <input type='password' name='password' id='password' class="form-control" placeholder="Password">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('password'); ?> </div>

                                <div>
                                    <input type='password' name='confirmpassword' id='repassword' class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('confirmpassword'); ?> </div>


                            </div>


                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Register' class="btn btn-line"><br>
                                    Already Have An Account? Please <a href="./signin">Sign In</a>
                                </p>

                            </div>
                        </div>
                    </form>
                    <div class="form-group">
                        <h5 class="text-center">OR Register With</h5>
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 social-icons text-center">
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-primary" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="{{ url('/auth/google') }}" class="btn btn-primary" data-toggle="tooltip" title="Google"><i class="fa fa-google"></i></a>
                            <a href="{{ url('/auth/linkedin') }}" class="btn btn-primary" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="{{ url('/auth/instagram') }}" class="btn btn-primary" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-4">--}}

                    {{--<form name="contactForm" id='contact_form' method="post" action='http://www.themenesia.com/themeforest/archi/email.php'>--}}
                        {{--<div class="row">--}}
                            {{--<div id='name_error' class='error'>Please enter your FirstName.</div>--}}
                            {{--<div>--}}
                                {{--<input type='text' name='fname' id='fname' class="form-control" placeholder="FirstName">--}}
                            {{--</div>--}}

                            {{--<div id='email_error' class='error'>Please enter your LastName.</div>--}}
                            {{--<div>--}}
                                {{--<input type='text' name='lname' id='lname' class="form-control" placeholder="LastName">--}}
                            {{--</div>--}}
                            {{--<div id='name_error' class='error'>Please enter your Username/Email.</div>--}}
                            {{--<div>--}}
                                {{--<input type='text' name='username' id='username' class="form-control" placeholder="Username/Email">--}}
                            {{--</div>--}}


                            {{--<div id='name_error' class='error'>Please enter your Mobile.</div>--}}
                            {{--<div>--}}
                                {{--<input type='text' name='mobile' id='mobile' class="form-control" placeholder="MobileNo">--}}
                            {{--</div>--}}

                            {{--<div id='email_error' class='error'>Please enter your Password.</div>--}}
                            {{--<div>--}}
                                {{--<input type='text' name='password' id='password' class="form-control" placeholder="Password">--}}
                            {{--</div>--}}

                            {{--<div id='email_error' class='error'>Please Confirm your Password.</div>--}}
                            {{--<div>--}}
                                {{--<input type='text' name='repassword' id='repassword' class="form-control" placeholder="Confirm-password">--}}
                            {{--</div>--}}



                            {{--<div class="col-md-12">--}}
                                {{--<p id='submit'>--}}
                                    {{--<input type='submit' id='send_message' value='Register' class="btn btn-line">--}}
                                {{--</p>--}}
                                {{--<div id='mail_success' class='success'>Your message has been sent successfully.</div>--}}
                                {{--<div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection