
@extends('User/Layouts/indexLayout')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif

    <section class="mysignup">
        <div class="col-lg-12 about"></div>
        <div class="container signup">
            <div class="row">

                <div class="col-lg-4 col-lg-offset-2">

                    <form name="contactForm" id='contact_form' method="post" action='/accountDetailsRegister'>

                        <div class="row">
                            <div class="col-md-12">
                                <input id="invisible_id" name="invisible" type="hidden" value="{{$seller}}">

                                <div>
                                    <input type='text' name='accountHolderName' id='name' class="form-control" placeholder="account holder name">
                                </div>

                                <div class="alert-danger" style="margin-top: -18px;"><?php isset($errors) ? $errors->first('account holder name') : 'Default' ?> </div>

                                <div>
                                    <input type='text' name='accountNumber' id='account number' class="form-control" placeholder="account number">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php isset($errors) ? $errors->first('account number') : 'Default' ?> </div>
                                <div>
                                    <input type='text' name='ifscCode' id='ifsc code' class="form-control" placeholder="ifsc code">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php isset($errors) ? $errors->first('ifsc code') : 'Default' ?></div>


                                <div>
                                    <input type='text' name='panNo' id='panNo' class="form-control" placeholder="panNo">
                                </div>
                                <div class="alert-danger" style="margin-top: -18px;"><?php isset($errors) ? $errors->first('panNo') : 'Default' ?></div>

                            </div>


                            <div class="col-md-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Ready To Go' class="btn btn-line">
                                </p>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection