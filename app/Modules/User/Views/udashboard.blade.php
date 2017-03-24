
@extends('User/Layouts/homeLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

            @foreach($wallet as $walletdata)
            @endforeach

        <div class="container-fluid" style="overflow-y:scroll; padding-bottom:15vh; height:80vh;overflow-x: hidden;margin-right: 0px;">
            <div class="row" style="background-color: #ffffff; margin-bottom: 20px;padding-left: 20px; padding-right: 20px">

                <h2 class="col-md-4">Discover Stores</h2>
                <div class="col-md-8 pull-right text-right" style="padding: 15px 0 0 0;">
                    <span style=" width: 15px;background-color: transparent;float: right;padding-top: 12px"><a href="#"><i class="fa fa-2x fa-angle-right"></i></a></span>
                    <div class="w-user-thumbnail pull-right" style="margin-right: 10px;">
                        <a href="#" style="border-radius: 100%;"><img src="assets/seller/images/avatar/allisongrayce.jpg" alt="user">
                        </a>
                    </div>

                    <div class="w-user-thumbnail pull-right" style="margin-right: 10px">
                        <a href="#"><img src="assets/seller/images/avatar/bobbyjkane.jpg" alt="user">
                        </a>
                    </div>

                    <div class="w-user-thumbnail pull-right" style="margin-right: 10px">
                        <a href="#"><img src="assets/seller/images/avatar/coreyweb.jpg" alt="user">
                        </a>
                    </div>

                    <div class="w-user-thumbnail pull-right" style="margin-right: 10px">
                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" alt="user">
                        </a>
                    </div>

                </div>
                <p class="col-md-4" >
                    Follow stores to see their updates.
                </p>

            </div>

            <div class="row">
                <div class="col-md-12">
                    @foreach($shops as $shop)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail storetext" >
                                <div class="w-user-thumbnail pull-left" style="margin-right: 25px;margin-top:5px;">
                                    <a href="#" style="border-radius: 5px;"><img src="images/shop/{{$shop->shop_logo}}" style="width:65px; height: 65px;"  alt="user"></a>
                                </div>
                                <div>
                                    <h4 class="text-center"><span class="pull-left">{{$shop->shop_name}}</span></h4><br>
                                    <h5 class="text-center"><span class="pull-left">{{$shop->shop_desc}}</span></h5>

                                    <div class="pull-right" style="margin-top: -30px;margin-right: 5px;">
                                        <a href="#" data-toggle="dropdown"> <i class="fa  fa-share-alt" style="font-size: 20px;"></i></a>
                                        <ul class="dropdown-menu" style="background-color: transparent;top:27px;">
                                            <li>
                                                <a data-original-title="Facebook" rel="tooltip" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description" class="btn btn-facebook" data-placement="left">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-original-title="Google+" rel="tooltip" target="_blank" href="https://plus.google.com/share?url=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description"  href="#" class="btn btn-google" data-placement="left">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-original-title="Instagram" rel="tooltip" target="_blank" href="https://www.instagram.com/accounts/login/?=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description"   href="#" class="btn btn-instagram" data-placement="left">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <img src="images/shop/{{$shop->cover_pic}}" class="img-responsive">
                                <div class="caption">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 price">
                                            <h4>
                                                <label>Offers Offers</label>
                                            </h4>

                                            <h4>
                                                <label>available here</label>
                                                <h5>32GB, 2GB Ram, 1080HD, 5.1 inches, Android</h5>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 btncontent">
                                            <a href="#dd" class="btn btn-primary btn-product"><i class="fa fa-thumbs-o-up"></i> Like <span class="label label-info" id="likecount" style="border-radius: 5px; color: #FFF;"> 0 </span></a>
                                        </div>
                                        <div class="col-md-4 btncontent">
                                            <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-product"><i class="fa fa-comments-o"></i> Comments <span class="label label-info" id="likecount" style="border-radius: 5px; color: #FFF;"> 0 </span></a>
                                        </div>

                                        <div class="col-md-4 btncontent">
                                            <a href="#ddd" class="btn btn-primary btn-product"><i class="fa fa-sign-in"></i> Visite Store</a>
                                        </div>
                                    </div>

                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-item" >
                                <div class="pi-img-wrapper img-fix">
                                    <a href="#" data-toggle="modal" data-target="#lightbox">
                                        <img src="images/shop/{{$product->product_pic}}" class="img-responsive" alt="">
                                    </a>
                                    <div>
                                        <a href="#" class="btn btnview" style="margin-left: 40%;">View</a>
                                    </div>
                                </div>

                                <div class="sticker sticker-new"></div>
                                <h4>{{$product->prod_name}}</h4>
                                <p>{{$product->prod_desc}}</p>
                                <a target="_blank" href="#">10 reviews</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                                    @if($product->special_price == "0.00")
                                        <p class="price">₹{{$product->price}}</p>
                                        <p class="special_price"><br style="line-height: 28px;"></p>
                                    @elseif($product->special_price != "0.00")
                                        <p class="sprice">₹{{$product->price}}</p>
                                        <p class="special_price">₹{{$product->special_price}}</p>
                                    @endif
                                <hr style="margin-top:5px; margin-bottom:5px;">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary wish inactive" style="text-align: center;"><span><i class="fa fa-plus"></i></span><b class="wish-text"> Add Wishlist</b></button>
                                        <button class="btn btn-info" style="text-align: center;">Buy Now</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{--<div class="col-md-12 row">--}}
                {{--<div class="col-md-3 col-sm-6 col-xs-12 store" style="max-height: 450px;padding-top: 25px;">--}}

                    {{--<div class="w-user-thumbnailx pull-left col-md-1 col-lg-1 col-sm-2 col-xs-2" style="padding: 10px;background-color: #ffffff;">--}}
                        {{--<a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" alt="user" style="width: 44px;height: 44px;"></a>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 pull-right" style="padding-top: 15px">--}}
                        {{--<span>Jain Store<br><small>December 16, 2016</small></span>--}}
                        {{--<div class="pull-right" style="margin-top: -15px;">--}}
                            {{--<a href="#" data-toggle="dropdown"> <i class="fa  fa-share-alt" style="font-size: 20px;"></i></a>--}}
                            {{--<ul class="dropdown-menu" style="background-color: transparent">--}}
                                {{--<li>--}}
                                    {{--<a data-original-title="Facebook" rel="tooltip" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description" class="btn btn-facebook" data-placement="left">--}}
                                        {{--<i class="fa fa-facebook"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-original-title="Google+" rel="tooltip" target="_blank" href="https://plus.google.com/share?url=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description"  href="#" class="btn btn-google" data-placement="left">--}}
                                        {{--<i class="fa fa-google-plus"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-original-title="Instagram" rel="tooltip" target="_blank" href="https://www.instagram.com/accounts/login/?=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description"   href="#" class="btn btn-instagram" data-placement="left">--}}
                                        {{--<i class="fa fa-instagram"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="iconic-w-wrap iconic-w-wrap">--}}
                        {{--<a href="#" class="">--}}
                            {{--<img src="assets/user/images/uploads/products/p1.jpg" style="width: 100%;height: auto;">--}}
                        {{--</a>--}}
                        {{--<div class="w-meta-info">--}}
                            {{--<span class="w-meta-value text-left">Parker Black Ink Pen <br> <b class="old-price">₹ 400.00</b></span>--}}

                            {{--<div class="container">--}}
                            {{--<span class="w-meta-title" style="min-height: 60px;">--}}
                                {{--<span class="comment"><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-comment-o"></i> Comments</a></span>--}}
                                {{--<span class="wishlist inactive" ><i class="fa fa-bookmark-o" id="outchange"></i> Add to Wishlist</span></span>--}}

                                {{----}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="comment-body">
                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm" style="">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 5px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx"> this is comment...</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-lg-12">
                                <div class="form-group" >
                                    <div class="input-group col-md-12" style="padding-top: 20px">
                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"><a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a></div>
                                        <div class="col-md-11 col-sm-11 col-xs-11 col-lg-11">
                                            <div class="form-group">
                                                <div class="input-group">

                                                    <input class="form-control" placeholder="Type Your Comment..." vk_15505="subscribed" type="text">
                                                    <span class="input-group-btn">
                                                                            <button class="btn btn-primary" type="submit" style="height: 38px;"><i class="fa fa-share"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br><br><br><br>
            <br><br><br>
        </div>


    </div>
    </div>
<script>
    $('title').html('Shoplife :: Dashboard');
    $('.wishlist').on('click',function () {
       if($(this).hasClass('active')){
           $(this).find('i').removeClass('fa-check-square');
           $(this).find('i').addClass('fa-bookmark-o');
           $(this).removeClass('active');
           $(this).addClass('inactive');
       }
       else if($(this).hasClass('inactive')){
           $(this).find('i').removeClass('fa-bookmark-o');
           $(this).find('i').addClass('fa-check-square');
           $(this).removeClass('inactive');
           $(this).addClass('active');
       }
    });

    $('.wish').on('click',function () {
        if($(this).hasClass('active')){
            $(this).find('i').removeClass('fa fa-trash');
            $(this).find('.wish-text').html(' Add Wishlist');
            $(this).find('i').addClass('fa fa-plus');
            $(this).removeClass('active');
            $(this).addClass('inactive');
        }
        else if($(this).hasClass('inactive')){
            $(this).find('i').removeClass('fa fa-plus');
            $(this).find('i').addClass('fa fa-trash');
            $(this).find('.wish-text').html(' Remove Wishlist');
            $(this).removeClass('inactive');
            $(this).addClass('active');
        }
    });

    window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 3000);
</script>
@endsection