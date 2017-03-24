

@extends('User/Layouts/indexLayout')
@section('content')

<section ng-controller="HomeController">
    @if($single_shop == '0')
    <section ui-view="carousel">
        <div class="img-background">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1" >
                <h3 class="text-center" style="color: #FFFFFF !important;">Search for stores in your location</h3>
                <div id="wrap">
                    <form action="" autocomplete="on">
                        <input id="search" name="search" type="text" placeholder="Type keyword or name of store !"></input>
                        <select style="width:32%" id="search" class="category" name="cat" placeholder="Select Location"><option>All Locations</option><option value="Raipur">Raipur</option></select>
                        <a class="btn btn-line-black btn-big hidden-md hidden-sm hidden-xs" href="#" id="search_btn"><i class="glyphicon glyphicon-search"></i> Search</a>
                        <a class="btn btn-line-black btn-big hidden-lg" href="#" id="search_btn"><i class="glyphicon glyphicon-search"></i></a>
                    </form>
                </div>

            </div>

        </div>

    </section>
    @endif
    @if($single_shop == '0')
    <section style="padding-top:30%;" ng-controller="selectBox">

            <div class="col-md-10 col-md-offset-1" style="visibility: visible; animation-name: fadeInUp;color:#000;">
                <h1 style="margin-top:35px;margin-bottom:35px;color:#000;">Shops Details</h1>
            </div>
        @elseif($single_shop == '1')
            <div class="col-md-12" style="height: 80px; background-color: #0b0b0b;"></div>
            <section style="padding-top:80px;background-color: transparent" ng-controller="selectBox">

        @endif
        @if($single_shop == '0')
        <div class="by amt">
            <div class="gc">
                @foreach($shops as $shop)
                        <div class="gn">
                            <div class="qv rc aog alu">
                                <div class="qx" style="background-image: url('images/shop/{{$shop->cover_pic}}');"></div>
                                <div class="qw dj">
                                    <a href="#">
                                        <img class="aoh" src="images/shop/{{$shop->shop_logo}}">
                                    </a>

                                    <h5 class="qy">
                                        <a class="aku" href="#">{{$shop->shop_name}}</a>
                                    </h5>

                                    <p class="alu">{{$shop->shop_desc}}.</p>

                                    <ul class="aoi">
                                        <li class="aoj">
                                            <a href="#userModal" class="aku" data-toggle="modal">
                                                Visits
                                                <h5 class="ali">12 M</h5>
                                            </a>
                                        </li>

                                        <li class="aoj">
                                            <a href="#" class="aku" data-toggle="modal">
                                                Customers
                                                <h5 class="ali">10 K</h5>
                                            </a>
                                        </li>
                                        <li class="aoj">
                                            <a href="#userModal" class="aku" data-toggle="modal">
                                                Products
                                                <h5 class="ali">1 L</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
        @elseif($single_shop == '1')

            @foreach($shops as $shop)
            <div class="qv rc aog alu single_shop" style="border: none;margin-bottom: 0px !important;">
                <div class="qx" style="background-image: url('images/shop/{{$shop->cover_pic}}');height: 200px"></div>
                <div class="qw dj">
                    <a href="#">
                        <img class="aoh" src="images/shop/{{$shop->shop_logo}}">
                    </a>

                    <h5 class="qy">
                        <b><a class="aku" href="#">{{$shop->shop_name}}</a></b>
                    </h5>

                    <p class="alu">{{$shop->shop_desc}}.</p>
                </div>
            </div>

            @endforeach
        @endif

            <div class="col-md-12" style="background-color: #eee;padding-bottom: 40px;">
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item" >
                            <div class="pi-img-wrapper img-fix">
                                <a href="#" data-toggle="modal" data-target="#lightbox">
                                    <img src="images/shop/{{$product->product_pic}}" class="img-responsive" alt="">
                                </a>
                                <div>
                                    <a href="#" class="btn btnview" style="margin-left: 5%;">View</a>
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
                                <p class="special_price"><br style="line-height: 20px;"></p>
                            @elseif($product->special_price != "0.00")
                                <p class="sprice">₹{{$product->price}}</p>
                                <p class="special_price">₹{{$product->special_price}}</p>
                            @endif
                            <hr style="margin-top:5px; margin-bottom:5px;">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-primary wish inactive" style="text-align: center;"><span><i class="fa fa-plus"></i></span><b class="wish-text"> Add Wishlist</b></button>
                                    <button class="btn btn-info" style="text-align: center;">Buy Now</button>

                                </div>

                        </div>
                    </div>
                @endforeach
            </div>


    </section>


</section>
@endsection
