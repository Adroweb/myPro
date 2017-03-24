
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif


        <div class="container-fluid" style="overflow-y:scroll;padding-top:20px;padding-bottom:15vh; height:88vh;overflow-x: hidden;background-color: #CCCCCC;">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5" >
                    <div class="panel panel-default">
                        <div class="panel-body" style="height: 600px;background-color: #e0e0eb">
                            <div class="media">
                                <div align="center" style="">
                                    <h3 align="center"><strong>Operation</strong></h3>
                                    <button type="button" data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary btn-cons" style="width: 80%;">Create New Shop</button><br><br>
                                    <button type="button" data-toggle="modal" data-target="#editshopmodel" class="btn btn-primary btn-cons" style="width: 80%;">Edit Shop</button>
                                </div>
                                <div class="media-body">

                                    <hr>
                                        <div align="center">
                                            <h3 align="center"><strong>Theme</strong></h3>

                                            <div class="row">
                                                <ul class="list-inline">
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme1">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #d0d3d4;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme2">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #9B26AF;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme3">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #6e2c00;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme4">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #FF9800;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme5">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #4CAF50;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>

                                                    <br>

                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme6">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #00BCD4;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme7">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #FF5733;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme8">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #ff66ff;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme9">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #ccff33;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="/themecolor/{{$sellerid}}" method="post">
                                                            <input  type="hidden" name="theme1" value="theme10">
                                                            <button type="submit" class="btn btn-circle" style="background-color: #ff1a8c;border-radius: 15px;height: 30px; width: 30px;"></button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                    <hr>
                                    <a href="/products">
                                    <button class="btn btn-primary" type="button" style="width:200px;height: 40px;margin-left: 50px;">
                                        <i class="fa fa-fw fa-th-list" aria-hidden="true"></i> List Of Products...
                                    </button>
                                    </a>
                                    <hr>
                                    <h3><strong>Location</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($shop as $shopdetails)

                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-7" style="">
                    <div class="panel panel-default">
                        <div class="panel-body headerbgcolor" style="height: 600px;">
                            <div class="dropdown pull-right">
                                <button class="btn btn-default" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    <i class="fa fa-fw fa-pencil" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Share To Sholife</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#editshopmodel"><i class="fa fa-fw fa-pencil" aria-hidden="true"></i> Edit Shop</a></li>
                                    <li><a href="/shopdelete/{{$shopdetails->shop_id}}"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete Shop</a></li>
                                </ul>
                            </div>

                            <div class=" col-md-1 pull-left">
                                <img src="images/shop/{{$shopdetails->shop_logo}}" height="80px" width="90px">
                            </div>
                            <div>
                                <span class="mainfont">{{$shopdetails->shop_name}}</span>
                            <br>
                            <span class="bottomfont">{{$shopdetails->shop_desc}}</span>
                            </div>
                                <hr style="margin-top: 5px;margin-bottom: 5px;">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <center><img  src="images/shop/{{$shopdetails->cover_pic}}" width="100%" height="70%"></center>

                                        <div class="carousel-caption">
                                            <h3>Welcome to EShop</h3>
                                        </div>
                                    </div><!-- End Item -->

                                    <div class="item">
                                        <center><img  src="images/shop/{{$shopdetails->cover_pic}}" width="100%" height="70%"></center>
                                        <div class="carousel-caption">
                                            <h3>Forever Faster</h3>
                                        </div>
                                    </div><!-- End Item -->

                                    <div class="item">
                                        <center><img  src="images/shop/{{$shopdetails->cover_pic}}" width="100%" height="70%"></center>
                                        <div class="carousel-caption">
                                            <h3>Products</h3>
                                        </div>
                                    </div><!-- End Item -->
                                </div><!-- End Carousel Inner -->

                                <hr style="margin-top: 5px;margin-bottom: 5px;">
                                <div class="row main-nav footerbgcolor btn-font">
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-default btn-circle"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>
                                        Likes
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-default btn-circle"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></a>
                                        Comments
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-default btn-circle"><i class="fa fa-camera fa-2x" aria-hidden="true"></i></a>
                                        Products Images
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" class="btn btn-default btn-circle"><i class="fa fa-users fa-2x" aria-hidden="true"></i></a>
                                        Followers
                                    </div>
                                </div>
                                <hr>

                            </div><!-- End Carousel -->
                        </div>
                    </div>
                </div>

                    {{--edit Shop model code start--}}
                    <div class="modal fade" id="editshopmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/editshopdetails/{{$shopdetails->shop_id}}" method="post" enctype="multipart/form-data">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabfel">Edit Your Shop Details</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Shop Logo</label>
                                            <center><img src="images/shop/{{$shopdetails->shop_logo}}" height="80px" width="90px"></center>
                                        </div>

                                        <div class="form-group">
                                            <label for="fileupload">Select Shop Logo</label>
                                            <input type="file" class="form-control" id="images" name="logopic">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cover Picture</label>
                                            <center><img  src="images/shop/{{$shopdetails->cover_pic}}" width="300px;" height="150px;"></center>
                                        </div>


                                        <div class="form-group">
                                            <label for="fileupload">Select Cover Picture</label>
                                            <input type="file" class="form-control" id="images" name="coverpic">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Shop Name</label>
                                            <input type="type" class="form-control" name="txtshopname" value="{{$shopdetails->shop_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Shop Description</label>
                                            <input type="type" class="form-control" name="txtshopdesc" value="{{$shopdetails->shop_desc}}">
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="Submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    {{-- Edit Shop model code start--}}

                @endforeach
            </div>
    </div>

{{--create New Shop model code start--}}
            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/createnewshop" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Enter Your Shop Details</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="fileupload">File input</label>
                                    <input type="file" style="display: inline;" class="form-control" id="images" name="logopic">
                                    <div class="row" id="image_preview"></div>
                                </div>

                                <div class="form-group">
                                    <label for="fileupload">File input</label>
                                    <input type="file" class="form-control" id="images2" name="coverpic">
                                    <div class="row" id="image_preview"></div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Shop Name</label>
                                    <input type="type" class="form-control" name="shopname" placeholder="Enter the Shop Name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Shop Description</label>
                                    <input type="type" class="form-control" name="shopdesc" placeholder="Enter the Shop Description">
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create Shop</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    {{--create new Shop model code start--}}
    </div>

    <script>
        $('title').html('Shoplife :: Shop');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

        $(document).ready( function() {
            $('#myCarousel').carousel({
                interval:   5000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function() {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if(!clickEvent) {
                    var count = $('.nav').children().length -1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if(count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });

        </script>
@endsection

