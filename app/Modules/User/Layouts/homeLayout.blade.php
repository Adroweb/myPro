<html>
<style>
    html, body{
        height: 100%;
    }
    .custom-icon {
        background:#666;
        cursor:pointer;
        background:rgba(0,0,0,0.4);
        padding:17px;
        -webkit-border-radius:1100%;
        -moz-border-radius:100%;
        -o-border-radius:100%;
        border-radius:100%;
        border:3px solid #fff;
        color:#fff;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.46);
        text-align:center;
        display:table-cell;
        vertical-align:middle;
        width:60px;
        height:60px;
        -moz-transition:.5s;
        -webkit-transition:.5s;
        -o-transition:.5s;
        transition:.5s;
    }
    .custom-icon:hover {
        background:rgba(0,0,0,0.6);
    }
    .fix-editor {
        display:none;
    }
    .icon-wrapper {
        display:inline-block;
    }
    .text{
        display: none;
        position:absolute;
        bottom:0;
        text-align:center;
        padding: 5px 10px 20px 10px;
        top:55px;
        border-radius: 10px;
        color: white;
        width: 17%;
    }
</style>
<!-- alpha 4 bootstrap -->
<!-- Mirrored from lab.westilian.com/matmix-admin/list-view/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 09:11:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
    <meta name="author" content="Westilian">
    <title>Shoplife</title>
    <link rel="stylesheet" href="assets/user/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/animate.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/waves.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/layout.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/components.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/plugins.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/common-styles.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/pages.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="assets/user/css/matmix-iconfont.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="assets/user/js/jquery-1.11.2.min.js"></script>

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

</head>
<body>
<div class="page-container hide-list-menu" id="leftbars">
    <!--Leftbar Start Here -->
    <script>
        function showhide_leftbar()
        {

            $('#leftbars').attr('class','page-container list-menu-view');
            $('#clickbar').attr('onclick','hide_leftbar();');
        }
        function hide_leftbar()
        {
            $('#leftbars').attr('class','page-container hide-list-menu');
            $('#clickbar').attr('onclick','showhide_leftbar();');
        }
    </script>
    <div class="left-aside desktop-view">
        <div class="aside-branding" style="background-image: url('/assets/user/images/uploads/sample.jpg');">
            <span class="user-thumb"><img src="assets/seller/images/avatar/jaman.jpg" alt="image"></span>
            </a><span class="aside-pin waves-effect"><i class="fa fa-thumb-tack"></i></span>
            <span class="aside-close waves-effect"><i class="fa fa-times"></i></span>
            <a class="user-name" href="#">{{ Session::get('username') }}</a>
        </div>
        <div class="left-navigation">
            <ul class="list-accordion">
                <li><a href="/myshoplife" class="waves-effect"><span class="nav-icon"><i class="fa fa-users"></i></span><span class="nav-label">My Shoplife</span> <span class="label label-primary">New</span></a>

                </li>
                <li><a href="/profile" class="waves-effect"><span class="nav-icon"><i class="fa fa-user"></i></span><span class="nav-label">Profile</span></a>
                </li>
                <li><a href="/myorder"><span class="nav-icon"><i class="fa fa-shopping-cart"></i></span><span class="nav-label">My Order</span></a>

                </li>
                <li><a href="/wishlist"><span class="nav-icon"><i class="fa fa-heart"></i></span><span class="nav-label">Wishlist</span></a>
                </li>
                <li><a href="/setting"><span class="nav-icon"><i class="fa fa-cogs"></i></span><span class="nav-label">Setting</span></a>
                </li>
                <li><a href="/userlogout"><span class="nav-icon"><i class="fa fa-lock"></i></span><span class="nav-label">Logout</span></a></li>
            </ul>
        </div>
    </div>




    <div class="page-content">
        <header class="top-bar">
            <div class="container-fluid top-nav">

                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-1">
                        <div class="clearfix top-bar-action">
                            <span class="leftbar-action-mobile waves-effect hidden-lg" id="clickbar"  style="position: absolute;line-height:33px; left: 15px; top: 13px; width: 32px; height: 32px; color:white;  text-align: center; -webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px;background-color: #78909c;">
						<i class="fa fa-bars " style="line-height: 2"></i>
					</span>
                            <span class="leftbar-action desktop waves-effect hidden-xs hidden-sm"><i class="fa fa-bars "></i></span>


                        </div>
                    </div>
                    <br class="hidden-lg hidden-md">
                    <br class="hidden-lg hidden-md">
                    <br class="hidden-lg hidden-md">
                    <div class="col-md-6 col-sm-5 col-xs-12 col-md-offset-2" style="padding-top: 10px">
                        <form action="" method="post" >
                            <div class="form-group" >
                                <div class="input-group">

                                    <input type="search" list="languages" id="default" class="form-control" placeholder="Search products, tags, stores...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" style="height: 38px;"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </form>

                        <datalist id="languages">
                            <option value="Manyavar Vedant Fashions Pvt Ltd">
                            <option value="Louis Philippe Exclusive Stores">
                            <option value="United Colour Of Benetton">
                            <option value="Peter England">
                            <option value="Swag The Men's Store">
                        </datalist>


                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-3 responsive-fix" id="notification-container">
                        <div class="notification-nav ">
                            <ul class="clearfix pull-right">
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="hide-small-device waves-effect"><i class="fa fa-envelope"></i><span class="alert-bubble"> {{count($messages)}} </span></a>
                                    <div role="menu" class="dropdown-menu message-dropdown msg-lists fadeInUp hide-small-device">
                                        <h4>You have {{count($messages)}} new messages</h4>
                                        <div class="message-wrap">
                                            <ul class="clearfix" style="margin: 0 !important;">
                                                @foreach($messages as $message)
                                                <li class="clearfix">
                                                    <a href="#" class="message-thumb"><img src="assets/user/images/avatar/adellecharles.jpg" alt="image">
                                                    </a><a href="#" class="message-intro"><span class="message-meta"><b> {{$message->media_caption}} </b></span> {{$message->msg_text}} <span class="message-time">{{$message->date}}</span></a>
                                                </li>
                                                @endforeach
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/allisongrayce.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/amarkdalen.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/annapickard.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Annapickard </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/bobbyjkane.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/chexee.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/coreyweb.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>--}}
                                                {{--</li>--}}
                                            </ul>
                                            <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="#"><span>View All</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="hide-small-device waves-effect "><i class="fa fa-bell"></i><span class="alert-bubble">{{count($notification)}}</span></a>
                                    <div role="menu" class="dropdown-menu notification-dropdown fadeInUp noty-lists hide-small-device">
                                        <h4>You have {{count($notification)}} new notification.</h4>
                                        <div class="notification-wrap">
                                            <ul style="margin: 0 !important;">
                                                @foreach($notification as $usernotification)
                                                    <li>
                                                        <a href="#" class="clearfix"><span class="ni w-green"><i class="fa fa-bullhorn"></i></span><span class="notification-message">{{$usernotification->not_text}}<span class="notification-time clearfix">{{$usernotification->date}}</span></span></a>
                                                    </li>
                                                @endforeach
                                                {{--<li><a href="#" class="clearfix"><span class="ni w-orange"><i class="fa fa-life-ring"></i></span><span class="notification-message">Nulla commodo sem at purus. <span class="notification-time clearfix">1 Hours Ago</span></span></a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#" class="clearfix"><span class="ni w-bondi-blue"><i class="fa fa-star-o"></i></span><span class="notification-message">Fusce condimentum turpis. <span class="notification-time clearfix">3 Hours Ago</span></span></a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#" class="clearfix"><span class="ni w-blue"><i class="fa fa-trophy"></i></span><span class="notification-message">Pellentesque habitant morbi. <span class="notification-time clearfix">Yesterday</span></span></a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#" class="clearfix"><span class="ni w-brown"><i class="fa fa-bolt"></i></span><span class="notification-message">Fusce bibendum lacus mauris.<span class="notification-time clearfix">1 Month Ago</span></span></a>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="#" class="clearfix"><span class="ni w-dark-yellow"><i class="fa fa-bookmark-o"></i></span><span class="notification-message">Donec id mi placerat, scelerisque.<span class="notification-time clearfix">3 Months Ago</span></span></a>--}}
                                                {{--</li>--}}
                                            </ul>
                                            <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="#"><span>View All</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="hide-small-device waves-effect"><img class="" src="/assets/images/icons/wallet_R.png" width="25px" style="margin-top: 17px;"/></a>
                                    <div role="menu" class="dropdown-menu message-dropdown msg-lists fadeInUp hide-small-device">
                                        <div class="message-wrap">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><h5 class="text-success text-center">Green Amount</h5><h4 class="text-success text-center"><b>₹ {{$walletdata->green_amount}}</b></h4></div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="border-left: 1px solid #444;"><h5 class="text-danger text-center">Red Amount</h5><h4 class="text-danger text-center"><b>₹ {{$walletdata->red_amount}}</b></h4></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                                                <small><b style="float: left">Note:</b><i style="float: left;">&nbsp;You can send or withdraw only Green Amount. <br>Red Amount can only be used in orders.</i></small>
                                            </div>
                                            <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="/setting"><span>View Details</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#" data-toggle="dropdown" class="hide-small-device waves-effect"><i class="fa fa-shopping-cart" style="font-size: 24px;"></i><span class="alert-bubble">0</span></a>
                                    <div role="menu" class="dropdown-menu message-dropdown msg-lists fadeInUp hide-small-device" style="overflow: hidden;">
                                        <h4>You have 0 products in your cart.</h4>
                                        <div class="message-wrap" style="max-height: 230px;overflow-y: auto">

                                            <ul class="clearfix" style="margin: 0 !important;">
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/adellecharles.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Adellecharles </span>Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/allisongrayce.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/amarkdalen.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/annapickard.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Annapickard </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/bobbyjkane.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/chexee.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>--}}
                                                {{--</li>--}}
                                                {{--<li class="clearfix">--}}
                                                    {{--<a href="#" class="message-thumb"><img src="assets/user/images/avatar/coreyweb.jpg" alt="image">--}}
                                                    {{--</a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>--}}
                                                {{--</li>--}}
                                            </ul>

                                        </div>
                                        <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="#"><span>View All</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>



    <section class="content" style="">
        <section class="container" style="width:100%;padding:0;background-color:#f5f5f5; ">

            @yield('content')
        </section>
    </section>

    </div>


    <!--Footer Start Here -->
    <footer class="footer-container" style="width:100%; position:fixed; bottom:0; left:0;background-color: #1aa7ad; height:85px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 hidden-xs hidden-sm" id="offset">
                    <div class="footer-left" id="footer-first" style="">
                        &nbsp;
                    </div>
                </div>
                <div class="col-md-8" id="menu-icons" style="">
                    <div class="footer-left" id="footer-first"  style="width:18%; float:left">

                        <div style="position:relative;">
                            <a href="/udashboard">
                                <i class="fa fa-home custom-icon"   data-tooltip="tooltip" data-placement="top" data-original-title="Home" style="font-size:18px;"><span class="fix-editor">&nbsp;</span></i>
                            </a>

                        </div>
                        <div class="text hidden-sm hidden-xs"  style="text-align:center;margin-left: auto;margin-right: auto; ">Home</div>
                    </div>
                    <div class="footer-left" id="footer-first" style="width:18%; float:left">

                        <div style="position:relative;">
                            <a href="/udashboard">
                            <i class="fa fa-search custom-icon" style="font-size:18px;" data-tooltip="tooltip" data-placement="top" data-original-title="Explore"><span class="fix-editor">&nbsp;</span></i>
                            <!--img class="custom-icon" width="60px" height="60px" src="assets/user/images/social_media1.png" data-tooltip="tooltip" data-placement="top" data-original-title="Social" /><span class="fix-editor">&nbsp;</span-->
                            </a>
                        </div>
                        <div class="text hidden-sm hidden-xs"  style="text-align:center;margin-left: auto;margin-right: auto; ">Search</div>

                    </div>
                    <div class="footer-left" id="footer-first"  style="width:18%; float:left">

                        <div style="position:relative;">
                            <a href="/myorder">
                            <i class="fa fa-shopping-cart custom-icon" data-tooltip="tooltip" data-placement="top" data-original-title="My Orders" style="font-size:18px;"><span class="fix-editor">&nbsp;</span></i>
                            </a>
                        </div>
                        <div class="text hidden-sm hidden-xs"  style="text-align:center;margin-left: auto;margin-right: auto; ">My Orders</div>
                    </div>

                    <div class="footer-left rightbar-action" id="footer-first" style="width:18%; float:left">

                        <div style="position:relative;">
                            <a href="#chatbox">
                            <i class="fa fa-comments custom-icon" data-tooltip="tooltip" data-placement="top" data-original-title="Chat" style="font-size:18px;"><span class="fix-editor">&nbsp;</span></i>
                            </a>
                        </div>
                        <div  class="text hidden-sm hidden-xs" style="text-align:center;margin-left: auto;margin-right: auto;">Chatbox</div>
                    </div>


                    <div class="footer-left" id="footer-first" style="width:18%; float:left">

                        <div style="position:relative;">
                            <a href="/myshoplife">
                            <i class="fa fa-users custom-icon"  data-tooltip="tooltip" data-placement="top" data-original-title="My Shoplife"  style="font-size:18px;"><span class="fix-editor">&nbsp;</span></i>
                            </a>
                        </div>
                        <div class="text hidden-sm hidden-xs"  style="text-align:center;margin-left: auto;margin-right: auto; ">My Shoplife</div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs" style="position:absolute;right:0;bottom:0;">
                    <div class="footer-right">
                        <span class="footer-meta" style="">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://www.adroweb.com">Adroweb</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Rightbar Start Here -->
    <div class="right-aside">
        <div class="aside-branding">
            <div class="aside-tab">
                <ul class="nav nav-tabs pull-left">
                    <li class="active"><a href="#coversetaion" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Chat" class="waves-effect"><i class="fa fa-comments"></i></a>
                    </li>
                    <li><a href="#server-stats" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Stats" class="waves-effect"><i class="fa fa-pie-chart"></i></a>
                    </li>
                    <li><a href="#notifications" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Notifications" class="waves-effect aside-notifications"><i class="fa fa-bell"></i><span class="alert-bubble">10</span></a>
                    </li>
                </ul>
            </div>
            <span class="rightbar-action waves-effect"><i class="fa fa-times"></i></span>
        </div>
        <div class="aside-tab-wigets">
            <div class="tab-content">
                <div class="tab-pane active" id="coversetaion">
                    <div class="chat-search-form">
                        <form>
                            <input name="searchbox" value="" placeholder="Chat With" class="chat-u-search form-control">
                        </form>
                    </div>
                    <div class="block-content chat-user-list">
                        <span class="piechart"></span>
                        <h3 class="clearfix"><span class="pull-left">Friends</span><span class="pull-right online-counter">3 Online</span></h3>
                        <ul class="chat-list">
                            <li>
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/adellecharles.jpg" alt="Avatar"></span><span class="chat-u-info">Adellecharles<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/allisongrayce.jpg" alt="Avatar"></span><span class="chat-u-info">Allisongrayce<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/bobbyjkane.jpg" alt="Avatar"></span><span class="chat-u-info">Bobbyjkane<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/littlenono.jpg" alt="Avatar"></span><span class="chat-u-info">Littlenono<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                        </ul>
                        <h3 class="clearfix"><span class="pull-left">Family</span><span class="pull-right online-counter">1 Online</span></h3>
                        <ul class="chat-list">
                            <li>
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/geeftvorm.jpg" alt="Avatar"></span><span class="chat-u-info">Geeftvorm<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/amarkdalen.jpg" alt="Avatar"></span><span class="chat-u-info">Amarkdalen<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li>
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/mko.jpg" alt="Avatar"></span><span class="chat-u-info">Mko<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li>
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/marktimemedia.jpg" alt="Avatar"></span><span class="chat-u-info">Marktimemedia<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                            <li>
                                <a href="#"><span class="chat-avatar"><img src="images/avatar/oykun.jpg" alt="Avatar"></span><span class="chat-u-info">Oykun<cite>New York</cite></span></a>
                                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="server-stats">
                    <div class="block-content">
                        <div class="server-stats-content">
                            <h3>Work Progress</h3>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Daily Backup</span><span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="80">
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">My Sql Backup</span><span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="60">
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Vps Configure </span><span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="90">
                                    </div>
                                </div>
                            </div>
                            <h3>Usage</h3>
                            <div class="uasge-wrap">
                                <ul>
                                    <li>
                                        <h4>Bandwidth</h4>
                                        <span class="uasge-intro">950GB of 1.95 TB Used</span>
                                    </li>
                                    <li class="usage-chart">
								<span class="epie-chart" data-percent="60" data-barcolor="#e64a19" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
								</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="uasge-wrap">
                                <ul>
                                    <li>
                                        <h4>Memory </h4>
                                        <span class="uasge-intro">3 GB of 6 GB Used</span>
                                    </li>
                                    <li class="usage-chart">
								<span class="epie-chart" data-percent="50" data-barcolor="#00acc1" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
								</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="uasge-wrap">
                                <ul>
                                    <li>
                                        <h4>HDD </h4>
                                        <span class="uasge-intro">18 GB of 30 GB Used </span>
                                    </li>
                                    <li class="usage-chart">
								<span class="epie-chart" data-percent="60" data-barcolor="#43a047" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
								</span>
                                    </li>
                                </ul>
                            </div>
                            <h3>Used Services</h3>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Email</span><span class="pull-right progress-percent-multiple label label-primary">90%</span>
                                </div>
                                <div class="progress multi-progress">
                                    <div class="progress-bar progress-bar-success" data-progress="40">
                                    </div>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="30">
                                    </div>
                                    <div class="progress-bar progress-bar-danger" data-progress="20">
                                    </div>
                                </div>
                                <span class="progress-intro">27 of 30 Email Used</span>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Credits</span><span class="pull-right progress-percent-multiple label label-primary">70%</span>
                                </div>
                                <div class="progress multi-progress">
                                    <div class="progress-bar progress-bar-success" data-progress="40">
                                    </div>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="20">
                                    </div>
                                    <div class="progress-bar progress-bar-danger" data-progress="10">
                                    </div>
                                </div>
                                <span class="progress-intro">700 of 1000 Credits Used</span>
                            </div>
                            <h3>Task Pending</h3>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Tickets</span><span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="60">
                                    </div>
                                </div>
                                <span class="progress-intro">60 of 100 Replied / 40 Pending</span>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Payments</span><span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="90">
                                    </div>
                                </div>
                                <span class="progress-intro">90 of 100 Paid / 10 Unpaid</span>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Review</span><span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="50">
                                    </div>
                                </div>
                                <span class="progress-intro">5 of 10 Reviewed / 5 Pending</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="notifications">
                    <div class="block-content">
                        <div class="aside-notifications-wrap">
                            <div class="message-wrap">
                                <h4>You have 15 new messages</h4>
                                <ul class="clearfix">
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/adellecharles.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Adellecharles </span>Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/allisongrayce.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/amarkdalen.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/annapickard.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Annapickard </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/bobbyjkane.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/chexee.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb"><img src="images/avatar/coreyweb.jpg" alt="image">
                                        </a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-block notification-btn waves-effect clearfix" href="#"><span>View All</span></a>
                            </div>
                            <div class="notification-wrap">
                                <h4>You have 10 new notifications</h4>
                                <ul>
                                    <li><a href="#" class="clearfix"><span class="ni w-green"><i class="fa fa-bullhorn"></i></span><span class="notification-message">Pellentesque semper posuere. <span class="notification-time clearfix">3 Min Ago</span></span></a>
                                    </li>
                                    <li><a href="#" class="clearfix"><span class="ni w-orange"><i class="fa fa-life-ring"></i></span><span class="notification-message">Nulla commodo sem at purus. <span class="notification-time clearfix">1 Hours Ago</span></span></a>
                                    </li>
                                    <li><a href="#" class="clearfix"><span class="ni w-bondi-blue"><i class="fa fa-star-o"></i></span><span class="notification-message">Fusce condimentum turpis. <span class="notification-time clearfix">3 Hours Ago</span></span></a>
                                    </li>
                                    <li><a href="#" class="clearfix"><span class="ni w-blue"><i class="fa fa-trophy"></i></span><span class="notification-message">Pellentesque habitant morbi. <span class="notification-time clearfix">Yesterday</span></span></a>
                                    </li>
                                    <li><a href="#" class="clearfix"><span class="ni w-brown"><i class="fa fa-bolt"></i></span><span class="notification-message">Fusce bibendum lacus mauris.<span class="notification-time clearfix">1 Month Ago</span></span></a>
                                    </li>
                                    <li><a href="#" class="clearfix"><span class="ni w-dark-yellow"><i class="fa fa-bookmark-o"></i></span><span class="notification-message">Donec id mi placerat, scelerisque.<span class="notification-time clearfix">3 Months Ago</span></span></a>
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-block notification-btn clearfix waves-effect " href="#"><span>View All</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conv-container">
            <div class="conv-u-info chat-u-online">
                <ul>
                    <li class="chat-avatar"><img src="images/avatar/adellecharles.jpg" alt="Avatar">
                    </li>
                    <li class="chat-u-info">adellecharles<span>New York</span>
                    </li>
                    <li><span data-tooltip="tooltip" data-placement="bottom" title="Call" class="waves-effect chat-u-call"><i class="fa fa-phone"></i></span>
                    </li>
                    <li><span data-tooltip="tooltip" data-placement="bottom" title="Exit" class="waves-effect chat-close"><i class="fa fa-angle-right"></i></span>
                    </li>
                </ul>
            </div>
            <div class="converstaion-list">
                <div class="conversation-back">
                    <div class="conv-thumb">
                        <img src="images/avatar/uxceo.jpg" alt="user">
                    </div>
                    <div class="conv-text">
                        Hello John, thank you for calling Provide Support. How may I help you?
                    </div>
                </div>
                <div class="conversation-front">
                    <div class="conv-text">
                        Hello Mary. I understand the problem and will be happy to help you. Let’s see what I can do.
                    </div>
                </div>
                <div class="conversation-front">
                    <div class="conv-text">
                        Let me see if I have this correct, you want me to…” or “You would like for me to…?
                    </div>
                </div>
                <div class="conversation-back">
                    <div class="conv-thumb">
                        <img src="images/avatar/uxceo.jpg" alt="user">
                    </div>
                    <div class="conv-text">
                        I’m not sure, but let me find out for you.
                    </div>
                </div>
            </div>
            <div class="chat-input-form">
                <form>
                    <input name="chatbox" value="" class="form-control chat-input">
                </form>
            </div>
        </div>
    </div>
    <!--Compose Form Start Here-->
    <div class="compose-form">
        <div class="compose-form-top clearfix">
            <div class="pull-left">
                <h3>Compose</h3>
            </div>
            <div class="pull-right">
                <span class="compose-form-minimize"><i class="ico-minus"></i></span><span class="compose-form-exit"><i class="ico-cross"></i></span>
            </div>
        </div>
        <form class="compose-form-container">
            <div class="compose-form-wrap">
                <div class="compose-form-header clearfix">
                    <div class="form-group clearfix">
                        <label class="col-sm-2 control-label">To</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="compose-form-body clearfix">
                    <textarea class="form-control compose-message compose-editor"></textarea>
                </div>
            </div>
            <div class="compose-form-bottom">
                <div class="form-group ">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Send</button>
                        <button type="button" class="btn btn-default">Attachment</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="assets/user/js/jquery-1.11.2.min.js"></script>
    <script src="assets/user/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/user/js/jRespond.min.js"></script>
    <script src="assets/user/js/bootstrap.min.js"></script>
    <script src="assets/user/js/nav-accordion.js"></script>
    <script src="assets/user/js/hoverintent.js"></script>
    <script src="assets/user/js/waves.js"></script>
    <script src="assets/user/js/switchery.js"></script>
    <script src="assets/user/js/jquery.loadmask.js"></script>
    <script src="assets/user/js/icheck.js"></script>
    <script src="assets/user/js/select2.js"></script>
    <script src="assets/user/js/bootstrap-filestyle.js"></script>
    <script src="assets/user/js/bootbox.js"></script>
    <script src="assets/user/js/animation.js"></script>
    <script src="assets/user/js/colorpicker.js"></script>
    <script src="assets/user/js/bootstrap-datepicker.js"></script>
    <script src="assets/user/js/sweetalert.js"></script>
    <script src="assets/user/js/moment.js"></script>
    <script src="assets/user/js/calendar/fullcalendar.js"></script>
    <!--CHARTS-->
    <script src="assets/user/js/chart/sparkline/jquery.sparkline.js"></script>
    <script src="assets/user/js/chart/easypie/jquery.easypiechart.min.js"></script>
    <script src="assets/user/js/chart/flot/excanvas.min.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.min.js"></script>
    <script src="assets/user/js/chart/flot/curvedLines.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.time.min.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.stack.min.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.axislabels.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.resize.min.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.spline.js"></script>
    <script src="assets/user/js/chart/flot/jquery.flot.pie.min.js"></script>
    <script src="assets/user/js/chart.init.js"></script>
    <script src="assets/user/js/smart-resize.js"></script>
    <script src="assets/user/js/layout.init.js"></script>
    <script src="assets/user/js/matmix.init.js"></script>
    <script src="assets/user/js/retina.min.js"></script>
<script>
    var headerOrgOffset;
    $(function(){

        var previousScroll = 0;
        headerOrgOffset = $('.top-bar').height()

        $('.top-nav').height($('.top-bar').height());

    });

    $('.container-fluid').scroll(function () {

        var currentScroll = $(this).scrollTop();
        if (currentScroll > headerOrgOffset) {
            if (currentScroll > previousScroll) {
                if($(window).width()<= 786){
                    $('header').css("margin-top", "-60px");
                    $('footer').css("margin-bottom", "-85px");
                }
            } else {
                if($(window).width()<= 786){
                    $('header').css("margin-top", "0");
                    $('footer').css("margin-bottom", "0");
                }

            }
        }
        previousScroll = currentScroll;
    });
</script>
</div>


<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


//*****Search script*****
    // Get the <datalist> and <input> elements.
    var dataList = document.getElementById('json-datalist');
    var input = document.getElementById('ajax');

    // Create a new XMLHttpRequest.
    var request = new XMLHttpRequest();

    // Handle state changes for the request.
    request.onreadystatechange = function(response) {
        if (request.readyState === 4) {
            if (request.status === 200) {
                // Parse the JSON
                var jsonOptions = JSON.parse(request.responseText);

                // Loop over the JSON array.
                jsonOptions.forEach(function(item) {
                    // Create a new <option> element.
                    var option = document.createElement('option');
                    // Set the value using the item in the JSON array.
                    option.value = item;
                    // Add the <option> element to the <datalist>.
                    dataList.appendChild(option);
                });

                // Update the placeholder text.
                input.placeholder = "e.g. datalist";
            } else {
                // An error occured :(
                input.placeholder = "Couldn't load datalist options :(";
            }
        }
    };
</script>

<!-- Your share button code -->
<div class="fb-share-button"
     data-href="http://www.your-domain.com/your-page.html"
     data-layout="button_count">
</div>


</body>
</html>