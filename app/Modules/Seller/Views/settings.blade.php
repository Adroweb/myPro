
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif


        <div class="container-fluid" style="overflow-y:scroll;padding-top:20px;padding-bottom:15vh; height:88vh;overflow-x: hidden;background-color: #f5f5f5;">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-xs-12 container side-collapse-container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <!--LEFT MENU-->
                            <ul class="nav nav-pills nav-stacked admin-menu">
                                <li><a href="#" data-target-id="address"><i class="fa-3x fa fa-cogs fa-fw"></i><b style="font-size: large"> Settings</b></a></li>
                                <li class="active"><a href="UpadateAddress" data-target-id="address"><i class="fa fa-map-marker fa-fw"></i> Update Address</a></li>
                                <li><a href="Changepassword" id="changepasswordactive" data-target-id="changepassword"><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                                <li><a href="About" data-toggle="about" data-target-id="about"><i class="fa fa-info fa-fw"></i> About & Help</a></li>
                            </ul>
                        </div>

                        <div class="col-md-9 col-sm-6 col-xs-6  well admin-content" id="address">
                            <form id="" action="/editaddress/{{$user}}" method="post">
                                <h4>Billing Addresses:</h4>
                                <textarea type="text" id="billingaddress" name="billingaddress" value="" class="addclass" placeholder="Enter Your Billing Address">{{$address}}</textarea>
                                <br><br>
                                <label style="font-size: 17px;font-weight: bold;margin-left: 25%;"><input type="checkbox"  id="same_as_billing"/> Same as billing</label>

                                <h4>Shipping Addresses:</h4>
                                <textarea type="text" id="shippingddress" name="shippingddress" class="addclass"  placeholder="Enter Your Shipping Address">{{$address}}</textarea><br><br>


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
                            <form id="changepassform" action="/changesellerpassword/{{$user}}" method="post">
                                <div>
                                    <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('oldpass'); ?> </div>
                                    <input type='password' name='oldpass' id='oldpass' class="form-control" placeholder="Enter Current Password" style="width: 80%;"><br></div>
                                <div>
                                    <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('password'); ?> </div>
                                    <input type='password' name='password' id='password' class="form-control" placeholder="Enter New Password" style="width: 80%;"><br>
                                </div>


                                <div>
                                    <div class="alert-danger" style="width: 100%;"><?php echo $errors->first('confirmpassword'); ?> </div>
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

    <script>
        $('title').html('Shoplife :: Settings');

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