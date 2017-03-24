
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

            <div class="container-fluid" style="overflow-y:scroll;padding-bottom:15vh;padding-top:50px;height:88vh;overflow-x: hidden;background-color: #f5f5f5;">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-xs-12 container side-collapse-container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <!--LEFT MENU-->
                            <ul class="nav nav-pills nav-stacked admin-menu">
                                <li class="active"><a href="#" data-target-id="wallet"><img class="fa-fw" src="/assets/images/icons/wallet_R.png" style="padding-bottom: 10px;width :40px;"/><b style="font-size: large;padding-left: 20px;"> Wallet </b></a></li>
                                <li><a href="#" data-target-id="transactions"><i class="fa fa-exchange fa-fw"></i> Transactions</a></li>
                                <li><a href="#" data-target-id="receive"><i class="fa fa-arrow-right fa-fw"></i> Received Amount</a></li>
                                <li><a href="#" data-toggle="about" data-target-id="about"><i class="fa fa-info fa-fw"></i> About & Help</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-6 well admin-content" id="wallet">
                            <h2>My Wallet</h2>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                                @foreach($walletdata as $wallet)
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><h5 class="text-success text-center">Green Amount</h5><h4 class="text-success text-center"><b> ₹ {{$wallet->green_amount}} </b></h4></div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="border-left: 1px solid #444;"><h5 class="text-danger text-center">Red Amount</h5><h4 class="text-danger text-center"><b> ₹ {{$wallet->red_amount}} </b></h4></div>
                                @endforeach
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                                <small><b style="float: left">Note:</b><i style="float: left;">&nbsp;You can Send or Withdraw only Green Amount. Red Amount can only be used in orders.</i></small>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#addmoney">Add Money To wallet</button>
                                <button class="btn btn-primary" style="margin-left: 10px;" data-toggle="modal" data-target="#sendtobank">Send Money To Bank</button>
                                <button class="btn btn-primary" style="margin-left: 10px;" data-toggle="modal" data-target="#sendtofrnd">Send Money To Friends</button>
                            </div>

                        </div>

                        <div class="col-md-9 col-sm-6 col-xs-6 well admin-content" id="transactions" >
                            @foreach($notification as $noti)
                                <div class="notice notice-success">
                                        <strong>Notice</strong> {{$noti->not_text}}
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

                        <div class="col-md-9 col-sm-6 col-xs-6 well admin-content" id="receive" >
                                <div class="notice notice-success">
                                    <strong>Notice</strong>
                                </div>
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
    <div class="modal fade" id="addmoney" role="dialog">
        <div class="modal-dialog" >



            <!— Modal content-->
            <div class="modal-content">
                <form id="" action="/addmoneytowallet/{{$user}}" method="post">
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

    <!--- SEND TO BANK MODEL--->
    <div class="modal fade" id="sendtobank" role="dialog">
        <div class="modal-dialog">

            <!— Modal content-->
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header" style="background-color:#5bc0de;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Send Money To Bank Account</h4>
                    </div>

                    <div class="modal-body">
                        <div style="padding:15px 10px 0 10px">
                            <div>
                                <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('txtmoney'); ?> </div>
                                <input type='text' required name='txtmoney' min="10" id='money' class="form-control" placeholder="Enter Amount" style="width: 100%;"><br>
                            </div>
                            <div>
                                <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('txtname'); ?> </div>
                                <input type='text' required name='txtmoney' class="form-control" placeholder="Enter Account Holder's Name" style="width: 100%;"><br>
                            </div>
                            <div>
                                <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('txtaccountnumber'); ?> </div>
                                <input type='text' required name='txtmoney'  class="form-control" placeholder="Enter Account Number" style="width: 100%;"><br>
                            </div>
                            <div>
                                <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('txtifsc'); ?> </div>
                                <input type='text' required name='txtmoney' class="form-control" placeholder="Enter IfSC Code" style="width: 100%;"><br>
                            </div>
                            <div>
                                <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('tdescription'); ?> </div>
                                <input type='text' required name='tdescription' class="form-control" placeholder="Enter Transaction Description" style="width: 100%;"><br>
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

    <!--- SEND MONEY TOFRIEND  MODEL--->
    <div class="modal fade" id="sendtofrnd" role="dialog">
        <div class="modal-dialog">

            <!— Modal content-->
            <div class="modal-content">
                <form action="/sendmoneytofrnd/{{$user}}" method="post">
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

    <!--- END SEND MODEL--->

    {{--Wallet Model Add MOney And Send Maney Model--}}



    <script>
        $('title').html('Shoplife :: wallet');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

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
        </script>
@endsection

