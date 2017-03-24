
@extends('User/Layouts/homeLayout',['messages'=>$messages])
@section('content')

    @foreach($wallet as $walletdata)
    @endforeach

    @foreach($address as $useraddress)
    @endforeach


    <div class="main-container">
        <div class="container-fluid" style="overflow-y:scroll; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
            <div class="row" style="padding-top: 60px;">
                @if (session('alert-success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
                    </div>

                @endif
                <div class=" col-md-12 col-sm-12 col-xs-12 container side-collapse-container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <!--LEFT MENU-->
                            <ul class="nav nav-pills nav-stacked admin-menu">
                                <li class="active"><a href="#" data-target-id="wallet"><i class="fa-3x fa fa-cogs fa-fw"></i><b style="font-size: large"> Settings</b></a></li>
                                <li ><a href="Wallet"  data-target-id="wallet">&nbsp;<img class="fa-fw" src="/assets/images/icons/wallet_R.png" style="padding-bottom: 10px;width :20px;"/> &nbsp;Wallet <small style="color: #000000;"> ₹ {{$walletdata->green_amount}}</small></a></li>
                                <li><a href="Transaction" data-target-id="transactions"><i class="fa fa-exchange fa-fw"></i> Transactions</a></li>
                                <li><a href="UpadateAddress" data-target-id="address"><i class="fa fa-map-marker fa-fw"></i> Update Address</a></li>
                                <li><a href="Changepassword" id="changepasswordactive" data-target-id="changepassword"><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                                <li><a href="About" data-toggle="about" data-target-id="about"><i class="fa fa-info fa-fw"></i> About & Help</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-6 well admin-content" id="wallet">
                            <h2>My Wallet</h2>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><h5 class="text-success text-center">Green Amount</h5><h4 class="text-success text-center"><b>₹ {{$walletdata->green_amount}}</b></h4></div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="border-left: 1px solid #444;"><h5 class="text-danger text-center">Red Amount</h5><h4 class="text-danger text-center"><b> ₹ {{$walletdata->red_amount}}</b></h4></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                                <small><b style="float: left">Note:</b><i style="float: left;">&nbsp;You can Send or Withdraw only Green Amount. Red Amount can only be used in orders.</i></small>
                            </div>

                            <button class="btn btn-primary" style="margin-left: 10px;float: right;" data-toggle="modal" data-target="#myModalsend">Send Money</button>
                            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModaladd">Add Money</button>
                        </div>

                        <div class="col-md-9 col-sm-6 col-xs-6 well admin-content" id="transactions" >
                            @foreach($transation as $sucsesstransation)
                                <div class="notice notice-success">
                                    <strong>Notice</strong> {{$sucsesstransation->status}}
                                </div>
                            @endforeach
                            <div class="notice notice-danger">
                                <strong>Notice</strong> Transactions-cancel - Null
                            </div>
                            <div class="notice notice-info">
                                <strong>Notice</strong> Transactions-under process- Null
                            </div>
                            <div class="notice notice-warning">
                                <strong>Notice</strong> Transactions-waiting- Null
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-6  well admin-content" id="address">
                            <form id="" action="/updateaddress/{{$user->id}}" method="post">
                            <h4>Billing Addresses:</h4>
                                <textarea type="text" id="billingaddress" name="billingaddress" value="{{$useraddress->bill_address}}" class="addclass" placeholder="Enter Your Billing Address">{{$useraddress->bill_address}}</textarea>
                            <br><br>
                            <label style="font-size: 17px;font-weight: bold;margin-left: 25%;"><input type="checkbox"  id="same_as_billing"/> Same as billing</label>

                            <h4>Shipping Addresses:</h4>
                            <textarea type="text" id="shippingddress" name="shippingddress" class="addclass"  placeholder="Enter Your Shipping Address">{{$useraddress->ship_address}}</textarea><br><br>


                            <button class="btn btn-primary " style="width: 20%;margin-left: 23px">Save</button>

                        </form>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-6  well admin-content" id="changepassword">
                            @if (session('alert-danger'))
                                <div class="alert alert-danger sahu" style="width: 80%;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-danger') }}
                                </div>
                            @endif

                            <h4>Change Your Password:_</h4><br>
                            <form id="changepassform" action="/changepassword/{{$user->id}}" method="post">
                                <div>
                                    <input type='password' name='oldpass' id='oldpass' class="form-control" placeholder="Enter Current Password" style="width: 80%;"><br></div>
                                    <div class="alert-danger" style="width: 80%;"></div>
                                <div>
                                    <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('password'); ?> </div>
                                    <input type='password' name='password' id='password' class="form-control" placeholder="Enter New Password" style="width: 80%;"><br>
                                </div>


                                <div>
                                    <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('confirmpassword'); ?> </div>
                                    <input type='password' name='confirmpassword' id='repassword' class="form-control" placeholder="Confirm Password" style="width: 80%;"><br>
                                </div>

                                <span style=" margin-top: -15px;"><button class="btn btn-primary"   style="height: 40px; width: 200px;">Change Password</button></span><br>
                            </form>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-6  well admin-content" id="about">
                            <h2>About Something</h2><br>
                            About Help
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--Wallet Model Add MOney And Send Maney Model--}}
    <div class="modal fade" id="myModaladd" role="dialog">
        <div class="modal-dialog" >

            <!— Modal content-->
            <div class="modal-content">
                <form id="" action="/updateuserwallet/{{$user->id}}" method="post">
                <div class="modal-header" style="background-color:#5bc0de;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Founds To Your Wallet</h4>
                </div>
                <div class="modal-body">
                        <div style="padding: 15px 10px 0px 10px;">
                            <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('addmoneytext'); ?> </div>
                            <input type='text' min="10" required name='addmoneytext' class="form-control" placeholder="Enter Amount" style="width: 100%;"><br>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Money</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--- SEND MODEL--->
    <div class="modal fade" id="myModalsend" role="dialog">
        <div class="modal-dialog">

            <!— Modal content-->
            <div class="modal-content">
                <form action="/sendmoneytowallet/{{$user->id}}" method="post">
                <div class="modal-header" style="background-color:#5bc0de;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Send Founds To Your Friends</h4>
                </div>

                <div class="modal-body">
                        <div style="padding:15px 10px 0 10px">
                        <div>
                            <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('txtmoney'); ?> </div>
                            <input type='text' required name='txtmoney' min="10" id='money' class="form-control" placeholder="Enter Amount" style="width: 100%;"><br>
                        </div>
                        <div>
                            <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('txtemail'); ?> </div>
                            <input type='email' required name='txtemail' id='addmoney' class="form-control" placeholder="Enter Valid Email" style="width: 100%;"><br>
                        </div>
                        </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Send Money</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{--Wallet Model Add MOney And Send Maney Model--}}


    <script>
        $('title').html('Shoplife :: Settings');

        $(document).ready(function()
        {
            var navItems = $('.admin-menu li > a');
            var navListItems = $('.admin-menu li');
            var allWells = $('.admin-content');
            var allWellsExceptFirst = $('.admin-content:not(:first)');

            allWellsExceptFirst.hide();
            navItems.click(function(e)
            {
                e.preventDefault();
                navListItems.removeClass('active');
                $(this).closest('li').addClass('active');

                allWells.hide();
                var target = $(this).attr('data-target-id');
                $('#' + target).show();
            });
        });

//        *********auto closable messages*************
        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

        window.setTimeout(function() {
            $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 20000);

        $('#edit_address').on('click', function(e) {
            e.preventDefault();
            $('input').attr('disabled', false);
            $('#email').prop('disabled', true);
        });
        $("#same_as_billing").on("change", function(){
            if (this.checked) {
                $("[name='shippingddress']").val($("[name='billingaddress']").val());
                $('#shippingddress').prop('disabled', true);
            }
            else
            {
                $('#shippingddress').prop('disabled', false);
            }
        });

    </script>
    @if (session('alert-danger'))
        <script>
            $(document).ready(function(){
                $('#changepasswordactive').click();
            });

        </script>
    @endif
@endsection