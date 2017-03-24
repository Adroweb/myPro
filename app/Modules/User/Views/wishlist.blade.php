
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

            <div class="container-fluid" style="padding-top: 60px;overflow-y:scroll; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
                <div class="row" style="">

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="assets/img/products/car.jpg" style="width: 600px;">
                            <h4><b>The Shoe Rack</b></h4>
                            <p><small>Shop Description</small></p>
                            <h4>Fashion Feet</h4>
                            <p><small>Product Description</small></p>
                            <hr class="line">
                            <div class="row">
                                    <span class="col-md-2" style="color: green">₹2000</span>
                                    <div class="col-md-10">
                                        <button class="btn btn-primary wish inactive" style="width: 150px;"><span><i class="fa fa-trash"></i></span><b class="wish-text"> Remove Wishlist</b></button>
                                        <a href="#buy">
                                            <button class="btn btn-success" style="width: 100px;"> Buy</button>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>

    <script>
        $('title').html('Shoplife :: Wishlist');

        $('title').html('Shoplife :: Profile');

        $('.wish').on('click',function () {
            if($(this).hasClass('active')){
                $(this).find('i').removeClass('fa fa-plus');
                $(this).find('.wish-text').html(' Remove Wishlist');
                $(this).find('i').addClass('fa fa-trash');
                $(this).removeClass('active');
                $(this).addClass('inactive');
            }
            else if($(this).hasClass('inactive')){
                $(this).find('i').removeClass('fa fa-trash');
                $(this).find('i').addClass('fa fa-plus');
                $(this).find('.wish-text').html(' Add Wishlist');
                $(this).removeClass('inactive');
                $(this).addClass('active');
            }
        });
    </script>

@endsection