
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

        {{--<div class="container-fluid" style="overflow-y:scroll;background-color:#fff;padding-top: 20px; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">--}}
        <div class="container-fluid" style="overflow-y:scroll;padding-top: 20px; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3">
                        <select name="category" class="form-control">
                            <option disabled selected>Select Category</option>
                                @foreach($categorieslist as $categories)
                                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endforeach
                        </select>
                        <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div>
                    </div>

                    <div class="col-md-3">
                        <select  name="type" class="form-control" >
                            <option disabled selected>Select Shoes Type</option>
                            <option >Sports</option>
                        </select>
                        <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div>
                    </div>

                    <div class="col-md-3">
                        <select name="brand" class="form-control">
                            <option  disabled selected>Select Brand</option>
                            <option >Puma</option>
                        </select>
                        <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div><br>
                    </div>

                    <div class="col-md-3">
                        <select name="brand" class="form-control">
                            <option disabled selected>Select Price</option>
                            <option>Minimum (0 to 1,000)</option>
                            <option>Maximum (1,000 to 10,000)</option>
                        </select>
                        <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div><br>
                    </div>
                </div>

                @foreach($productlist as $product)
                    <div class="col-md-3">
                        <div class="product-item" >
                            <div class="pi-img-wrapper img-fix">
                                <a href="#" data-toggle="modal" data-target="#lightbox">
                                    <img src="assets/img/products/1.jpg" class="img-responsive" alt="">
                                </a>
                                <div>
                                    <a href="#" class="btn">View</a>
                                </div>
                            </div>

                            <div class="sticker sticker-new"></div>
                            <h4>{{$product->prod_name}}</h4>
                            <p>{{$product->prod_desc}}</p>
                            <a target="_blank" href="#">10 reviews</a><a class="pull-right" target="_blank" href="#">{{$product->qty_stock}} product in stock</a>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>

                            <hr style="margin-top:5px; margin-bottom:5px;">
                            <div class="row">
                                <div class="col-md-4">
                                    @if($product->special_price == "0.00")
                                    <p class="price">₹{{$product->price}}</p>
                                        <p class="special_price"><br style="line-height: 28px;"></p>
                                        @elseif($product->special_price != "0.00")
                                        <p class="sprice">₹{{$product->price}}</p>
                                        <p class="special_price">₹{{$product->special_price}}</p>
                                        @endif
                                </div>
                                <div class="col-md-8 ">
                                    <button class="btn btn-warning" style="text-align: center;width: 40%;" onclick="editproduct('{{$product->id}}');" data-toggle="modal" data-target="#editproductmodel"> Edit</button>
                                    <button class="btn btn-info" style="width: 40%;text-align: center;" data-toggle="modal" data-target="#productshare"> Promote</button>

                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>

        </div>

        <div class="modal fade" id="productshare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Share Product</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Share With Social media</h3>

                                <a class="btn btn-block btn-social btn-shoplife" href="" target="_blank">
                                    <i class="fa fa-share-alt fa-2x"></i> Share with Sholife
                                </a>

                                <a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.adroweb.com%2F" target="_blank">
                                    <i class="fa fa-facebook fa-2x"></i> Share with Facebook
                                </a>

                                <a class="btn btn-block btn-social btn-instagram" href="http://instagram.com/accounts/badges/#" target="_blank">
                                    <i class="fa fa-instagram fa-2x"></i> Share with Instagram
                                </a>

                                <a class="btn btn-block btn-social btn-whatsapp" href="whatsapp://send?text=http://www.adroweb.com" target="_blank">
                                <i class="fa fa-whatsapp fa-2x"></i> Share with Whatsapp
                                </a>
                                <a class="btn btn-block btn-social btn-google-plus" href="https://plus.google.com/share?url=http%3A%2F%2Fwww.adroweb.com%2F" target="_blank">
                                    <i class="fa fa-google-plus fa-2x"></i> Share with Google
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


            {{--edit product model code start--}}
            <div class="modal fade" id="editproductmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <p class="modal-content">
                        <p class="ploader"><img src="assets/seller/images/loader.gif"/></p>
                        <p id="pdata">Loading...</p>

                    </div>

                </div>
            </div>
            {{-- Edit Shop model code start--}}

    </div>
    <script>

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);


    </script>
    <script>
        $('title').html('Shoplife :: Products');

        function editproduct(pid) {
            $.ajax({
                type: "post",
                url: "getproduct/"+pid,
                data: "",
                dataType: "JSON",
                beforeSend: function(){

                    $('.ploader').attr('style', 'display: block');
                },
                success: function(data){

                    $('.ploader').attr('style', 'display: none');
                    var htmlx ='<p class="ploader" style="display: none;"><img src="assets/seller/images/loader.gif"/></p><form action="/editproduct/'+data[0].id+'" method="post" enctype="multipart/form-data"><div class="modal-header" id="myModalLabel"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title">Edit Your Product Details</h4></div><div class="modal-body"><a href="#"><center><img src="assets/img/products/1.jpg" class="img-responsive imgview" alt=""></center></a><div class="form-group"><label for="exampleInput">Product Name:</label><input type="type" class="form-control" name="txtproname" value="'+data[0].prod_name+'"></div><div class="form-group"><label for="exampleInput">Product Description</label><input type="type" class="form-control" name="txtprodesc" value="'+data[0].prod_desc+'"></div><div class="form-group"><label for="exampleInput">Product Price</label><input type="type" class="form-control" name="txtproprice" value="'+data[0].price+'"></div><div class="form-group"><label for="exampleInput">Product Special Price</label><input type="type" class="form-control" name="txtprodsprice" value="'+data[0].special_price+'"></div><div class="form-group"><label for="exampleInput">Product Quantity</label><input type="type" class="form-control" name="txtproqty" value="'+data[0].qty_stock+'"></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="Submit" class="btn btn-primary">Save Product</button></div></form>';
                    $('.modal-content').html(htmlx);
                }
            });
        }
    </script>



@endsection

