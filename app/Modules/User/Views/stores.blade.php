

@extends('User/Layouts/indexLayout')
@section('content')

<section ng-controller="HomeController">
    <section ui-view="carousel">
        <div class="img-background">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1" >
                <h3 class="text-center" style="color: #FFFFFF;">Search for stores in your location</h3>
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
    <section style="padding-top:30%;" ng-controller="selectBox">
        <div class="col-md-10 col-md-offset-1" style="visibility: visible; animation-name: fadeInUp;color:#000;">
            <h1 style="margin-top:35px;margin-bottom:35px;color:#000;">All Stores</h1>

        </div>

        <div class="by amt">

            <div class="gc">
                @foreach($shops as $shop)
                    <a href="/store/{{$shop->shop_id}}" target="_blank">
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
                    </a>
                @endforeach
            </div>
        </div>
    </section>


</section>
@endsection
