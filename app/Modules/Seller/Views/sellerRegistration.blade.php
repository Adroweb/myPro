
@extends('User/Layouts/indexLayout')

@section('content')
    <section class="mysignup">

        <div class="container signup">
            <div class="row">

                <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

                    <form name="contactForm" id='contact_form' method="post" action='/newSeller'>

                        <div class="row">

                            {{--{{ Form::hidden('id', $client->id) }}--}}


                            <div class="col-lg-12 col-md-12 form_section">
                                <h3>Seller Registration</h3>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Full Name">
                                </div>

                                <div class="alert-danger" style="margin-top: -18px;"><?php  echo isset($errors) ? $errors->first('name') : 'Default Message';  ?></div>

                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Email-Id">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('email') : 'Default' ?> </div>
                                <div>
                                    <input type='text' name='mobile' id='mobile' class="form-control" placeholder="Mobile Number">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('mobile') : 'Default' ?></div>


                                <div>
                                    <input type='text' name='aadharno' id='aadharno' class="form-control" placeholder="Aadhar Number">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('aadharno') : 'Default' ?></div>


                                <div>
                                    <input type='text' name='whatsappno' id='whatsaappno' class="form-control" placeholder="Whatsapp No.">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('whatsaappno') : 'Default' ?></div>


                                <div>
                                    <input type='text' name='address' id='address' class="form-control" placeholder="Address">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('address') : 'Default' ?></div>

                                <div>
                                    <input type='text' name='pincode' id='pincode' class="form-control" placeholder="Pincode">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('pincode') : 'Default' ?></div>



                                <div>
                                    <input type='password' name='password' id='password' class="form-control" placeholder="Password">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('password') : 'Default' ?> </div>

                                <div>
                                    <input type='password' name='confirmpassword' id='repassword' class="form-control" placeholder="Confirm-Password">
                                </div>

                                <div class="alert-danger" style="margin-top: -18px;"><?php echo isset($errors) ? $errors->first('confirmpassword') : 'Default' ?> </div>



                            </div>


                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='START' class="btn btn-line"><br>
                                    Already Have An Account? Please <a href="/sellerlogin">Sign In</a>
                                </p>

                            </div>
                        </div>
                    </form>
                    <div class="form-group">
                        <h5 class="text-center">OR Login With</h5>
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 social-icons text-center">
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-primary" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="{{ url('/auth/google') }}" class="btn btn-primary" data-toggle="tooltip" title="Google"><i class="fa fa-google"></i></a>
                            <a href="{{ url('/auth/linkedin') }}" class="btn btn-primary" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="{{ url('/auth/instagram') }}" class="btn btn-primary" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        $('title').html('Shoplife :: Seller Registration');

    </script>
@endsection