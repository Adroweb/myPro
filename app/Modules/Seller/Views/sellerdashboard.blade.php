
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

            <div class="container-fluid" style="overflow-y:scroll;background-color:#fff;padding-top: 30px; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
                <div class="row">
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
                            <h4>Product Name</h4>
                            <p>Product Description</p>
                            <a target="_blank" href="#">10 reviews</a>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>

                            <hr style="margin-top:5px; margin-bottom:5px;">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p class="price">₹ 5000.00</p>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <button class="btn btn-warning" style="width: 40%;"> Edit</button>
                                    <button class="btn btn-info" style="width: 40%;" data-toggle="modal" data-target="#productshare"> Promote</button>

                                </div>
                            </div>
                        </div>
                    </div>


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
                            <h4>Product Name</h4>
                            <p>Product Description</p>
                            <a target="_blank" href="#">10 reviews</a>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>

                            <hr style="margin-top:5px; margin-bottom:5px;">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <p class="price">₹ 5000.00</p>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <button class="btn btn-warning" style="width: 40%;"> Edit</button>
                                    <button class="btn btn-info" style="width: 40%;" data-toggle="modal" data-target="#productshare"> Promote</button>

                                </div>
                            </div>
                        </div>
                    </div>
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

                            <a class="btn btn-block btn-social btn-whatsapp" href="whatsapp://send?text=http://www.adroweb.com"" target="_blank">
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

    </div>
        <script>
            $('title').html('Shoplife :: Dashboard');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);


        </script>



@endsection

