

@extends('User/Layouts/indexLayout')
@section('content')
    <section ng-controller="HomeController">
        <section ui-view="carousel">
            <div class="img-background">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1" >
                    <h3 class="text-center">Search for stores in your location</h3>
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
        <section id="" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action" style="left:0;background-position: 50% -172.8px;width:100%;">
            <div class="col-lg-6 col-md-6 text-right" style="border-right: 1px solid #000"><a href="./signin" class="btn btn-line-black btn-big" style="border:1px solid #000;">Login / Register as Customer <i class="glyphicon glyphicon-chevron-right"></i></a></div>
            <div class="col-lg-6 col-md-6 text-left" style=""><a href="/registerSeller" class="btn btn-line-black btn-big" style="border:1px solid #000;">Login / Register as Seller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"></i></a></div>
        </section>
        <section class="sec-store">

            <div class="col-lg-4 col-md-4 col-md-offset-1 col-sm-8 col-xs-6" style="visibility: visible; animation-name: fadeInUp;color:#000;">
                <h1 style="margin-top:35px;color:#000;text-align:left">Premium Stores</h1>

            </div>
            <div class="col-lg-3 col-md-6 col-lg-offset-3 text-right col-sm-4 col-xs-6" style="visibility: visible; animation-name: fadeInUp;color:#000;">
                <a class="btn btn-line-black btn-small" href="/stores" id="search_btn" style="margin-top:35px;margin-bottom:25px;">See All <i class="glyphicon glyphicon-chevron-right"></i></a>
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
                                                <a href="#userModal" class="aku" data-toggle="modal">
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
        <div id="section-why-choose-us-2" style="padding-bottom:35px" ng-controller="selectBox">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center" style="visibility: visible; animation-name: fadeInUp;">
                        <h1 style="margin-top:35px;">Our Process</h1>
                        <div class="separator"><span><i class="glyphicon glyphicon-asterisk"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12" ng-controller="ourProcess" ng-init="load()">
                        <div class="de_tab tab_steps">
                            <ul class="de_nav">
                                <li class="active" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn; opacity: 1;"><span>Meet &amp; Agree</span><div class="v-border" style="opacity: 0;"></div>
                                </li>
                                <li class="" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn; opacity: 1;"><span>Idea &amp; Concept</span><div class="v-border" style="opacity: 0;"></div>
                                </li>
                                <li class=" " data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn; opacity: 1;"><span>Design &amp; Create</span><div class="v-border" style="opacity: 1;"></div>
                                </li>
                                <li class="" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn; opacity: 1;"><span>Build &amp; Install</span><div class="v-border" style="opacity: 0;"></div>
                                </li>
                            </ul>

                            <div class="de_tab_content">

                                <div id="tab1" style="display: none;">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                </div>

                                <div id="tab2" style="display: none;">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                </div>

                                <div id="tab3" style="display: block;">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                </div>

                                <div id="tab4" style="display: none;">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


@endsection