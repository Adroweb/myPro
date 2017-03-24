
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif


        <div class="container-fluid" style="overflow-y:scroll;padding-bottom:15vh; height:88vh;overflow-x: hidden;background-color: #f5f5f5;">
            <div class="row">
                <div class="mb_share">

                    <div class="button facebook slide_x">
                        <div class="pos icon"> <i class="fa fa-facebook"></i></div>
                        <div class="slide">
                            <span>Facebook</span>
                        </div>
                        <div class="native_button">
                            <div>Post In Facebook</div>
                        </div>
                    </div>

                    <div class="button whatsapp slide_y">
                        <div class="pos icon"> <i class="fa fa-whatsapp"></i></div>
                        <div class="slide">
                        <span>WhatsApp</span>
                        </div>
                        <div class="native_button">
                            <div>Post In WhatsApp</div>
                        </div>
                    </div>

                    <div class="button instagram slide_nx">
                        <div class="pos icon"> <i class="fa fa-instagram"></i></div>
                        <div class="slide">
                        <span>Instagram</span>
                        </div>
                        <div class="native_button">
                            <div>Post In Instagram</div>
                        </div>
                    </div>

                    <div class="button shoplife slide_y">
                        <div class="pos icon"> <i class="fa fa-users"></i></div>
                        <div class="slide">
                            <span>Shoplife</span>
                        </div>
                        <div class="native_button">
                            <div>Share In Shoplife</div>
                        </div>
                    </div>

                    <div class="button gplus slide_nx">
                        <div class="pos icon"> <i class="fa fa-google-plus"></i></div>
                        <div class="slide">
                            <span>Google+</span>
                        </div>
                        <div class="native_button">
                            <div>Post In Google+</div>
                        </div>
                    </div>


                    <div class="button visitor slide_ny">
                        <div class="pos icon"><i class="fa fa-users"></i></div>
                        <div class="slide">
                        <span>1000 Visitor</span>
                        </div>
                        <div class="native_button">
                            <div>Compagin To Get 1000 Visitors</div>
                        </div>
                    </div>

                    <div class="button instagram slide_y">
                        <div class="pos icon"> <i class="fa fa-instagram"></i></div>
                        <div class="slide">
                        <span>Bulk Post In Instagram</span>
                        </div>
                        <div class="native_button">
                            <div>Bulk Post In Instagram</div>
                        </div>
                    </div>

                    <div class="button whatsapp slide_nx">
                        <div class="pos icon"> <i class="fa fa-whatsapp"></i></div>
                        <div class="slide">
                        <span>WhatsApp Marketing</span>
                        </div>
                        <div class="native_button">
                            <div>Paid WhatsApp Marketing</div>
                        </div>
                    </div>

                    <div class="button sms slide_ny">
                        <div class="pos icon"> <i class="fa fa-comments-o"></i></div>
                        <div class="slide">
                        <span>Messages Marketing</span>
                        </div>
                        <div class="native_button">
                            <div>Paid SMS Marketing</div>
                        </div>
                    </div>

                    <div class="button email slide_x">
                        <div class="pos icon"> <i class="fa fa-envelope"></i></div>
                        <div class="slide">
                        <span>Email Marketing</span>
                        </div>
                        <div class="native_button">
                            <div>Paid Email Marketing</div>
                        </div>
                    </div>

                    <div class="button shoplife slide_x">
                        <div class="pos icon"> <i class="fa fa-users"></i></div>
                        <div class="slide">
                            <span>Shoplife Notification</span>
                        </div>
                        <div class="native_button">
                            <div>Paid Shoplife Notification</div>
                        </div>
                    </div>

                    <div class="button instagram slide_x">
                        <div class="pos icon"> <i class="fa fa-instagram"></i></div>
                        <div class="slide">
                            <span>Instagram Followers</span>
                        </div>
                        <div class="native_button">
                            <div>Paid Instagram Followers</div>
                        </div>
                    </div>

                    <div class="button facebook slide_x">
                        <div class="pos icon"> <i class="fa fa-facebook"></i></div>
                        <div class="slide">
                            <span>Facebook Promotion</span>
                        </div>
                        <div class="native_button">
                            <div>Paid Facebook Promotion</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        $('title').html('Shoplife :: Marketing');
        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

    </script>

@endsection