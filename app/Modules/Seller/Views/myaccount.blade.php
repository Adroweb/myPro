
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

        <div class="container-fluid" style="overflow-y:scroll;background-color:#fff;padding-top: 20px; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked admin-menu">
                            <li class="active"><a href="#" data-target-id="personalinformation"><i class="fa fa-user fa-fw"></i> Personal Informationl</a></li>
                            <li><a href="#" data-target-id="securityprivacy"><i class="fa fa-lock fa-fw"></i> Security & Privacy</a></li>
                            <li><a href="#" data-target-id="shop"><i class="fa fa-university fa-fw"></i> My Shop</a></li>
                            <li><a href="#" data-target-id="mobilenumber"><i class="fa fa-mobile fa-fw"></i> Mobile Number</a></li>
                            <li><a href="#" data-target-id="order"><i class="fa fa-shopping-cart fa-fw"></i> My Order</a></li>
                            <li><a href="#" data-target-id="location"><i class="fa fa-location-arrow fa-fw"></i> My Location</a></li>
                            <li><a href="#" data-target-id="notification"><i class="fa fa-bell fa-fw"></i> Notification</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 well admin-content" id="personalinformation">
                        <h2 align="center">User Information</h2>
                        <h3>Name: {{ Session::get('name') }}</h3>
                        <h4>Mobile Number: 9993796620</h4>
                        <h4>Locality: Raipur</h4>
                        <h4>Status: Status</h4>
                    </div>
                    <div class="col-md-9 well admin-content" id="securityprivacy">
                        <h2 align="center">Security & Privacy</h2>
                        <h4>Shop Security:secure</h4>
                        <h4>Account Security:secure</h4>
                        <h4>Profile Privacy:invisible</h4>
                        <h4>Profile Who Can see: Evry One</h4>

                    </div>
                    <div class="col-md-9 well admin-content" id="shop">
                        <h2 align="center">My Shop</h2>
                        <h3>Shop Name: Puma</h3>
                        <h4>Shop Description: Here Shop Description</h4>
                        <h4>Shop Type:type</h4>
                        <h4>Shop Follower: 10</h4>
                    </div>
                    <div class="col-md-9 well admin-content" id="mobilenumber">
                        <h2 align="center">Mobile Number & Messages</h2>
                        <h3>mobile Number:9993796620</h3>
                        <h4>verify:Verified</h4>
                        <h4>message:active</h4>
                        <h4>Change Your Mobile Number:change</h4>
                    </div>
                    <div class="col-md-9 well admin-content" id="order">
                        <h2 align="center">My Order</h2>
                        <h3>Customer List:...</h3>
                        <h4>Product Order:...</h4>
                        <h4>Deliver Status:...</h4>
                    </div>
                    <div class="col-md-9 well admin-content" id="location">
                        <h2 align="center">My Location</h2>
                        <h3>Current Location:Raipur</h3>
                        <h4>Home Town:Delhi</h4>
                        <h4>Official Address:Pachpedinaka</h4>
                    </div>
                    <div class="col-md-9 well admin-content" id="notification">
                        <h2 align="center">Notification</h2>
                        <h3>Shop Notification:Active</h3>
                        <h4>Shoplife Notification:Active</h4>
                        <h4>Stop All Notification:In-Active</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('title').html('Shoplife :: My Account');

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

