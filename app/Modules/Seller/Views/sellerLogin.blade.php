@extends('User/Layouts/indexLayout')
@section('content')
    <section class="cust_signin">
        <div class="container signin">
            <div class="row">

                <div class="col-lg-4 col-lg-offset-4 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">


                    <form name="contactForm" id='contact_form' method="post" action='/sellerAuth'>
                        <h3>Seller Login</h3>
                        @if (session('status'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                            </div>
                        @endif

                        @if(session('message'))
                            {{session('message')}}
                        @endif


                        {{--@if (count($errors) > 0)--}}
                        {{--<div class="alert alert-danger">--}}
                        {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--@endif--}}



                        <div class="row">
                            <div class="col-md-12">
                                {{--<div id='name_error' class='error'>Please enter your Username.</div>--}}

                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Email-Id">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo $errors->first('email'); ?> </div>





                                <div style="">
                                    <input type='password' name='password' id='password' class="form-control" placeholder="Password">

                                </div>
                                <div class="alert-danger" style=";margin-top: -18px;"><?php echo $errors->first('password'); ?></div>


                            </div>

                            <div class="col-md-12" style="">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Login' class="btn btn-line"><br>
                                    Create An Account? Please <a href="./signup">Register</a>
                                </p>
                                {{--<div id='mail_success' class='success'>Your message has been sent successfully.</div>--}}
                                {{--<div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>--}}
                            </div>
                        </div>
                    </form>
                    <div class="form-group">
                        <h5>OR Login With</h5>
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
                {{--<div class="col-md-12">--}}
                {{--<div id='name_error' class='error'>Please enter your Username.</div>--}}
                {{--<div>--}}
                {{--<input type='text' name='username' id='username' class="form-control" placeholder="Username">--}}
                {{--</div>--}}

                {{--<div id='email_error' class='error'>Please enter your Password.</div>--}}
                {{--<div>--}}
                {{--<input type='text' name='password' id='password' class="form-control" placeholder="Password">--}}
                {{--</div>--}}


                {{--</div>--}}


                {{--<div class="col-md-12">--}}
                {{--<p id='submit'>--}}
                {{--<input type='submit' id='send_message' value='Login' class="btn btn-line">--}}
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
    <script>
        $('title').html('Shoplife :: Login');

    </script>

@endsection