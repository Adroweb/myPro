
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



                <div class="container-fluid" style="overflow-y:scroll; padding-bottom:15vh; height:80vh;overflow-x: hidden;margin-right: 0px;margin-top: 50px">
                    <div class="panel panel-default col-md-8 col-md-offset-3">

                        @foreach($postdata as $post)

                        <div class="panel-body">
                            <section class="post-heading">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object photo-profile" src="assets/seller/images/avatar/allisongrayce.jpg" width="40" height="40" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="" class="anchor-username"><h4 class="media-heading" style="color: #444444;">{{ Session::get('username') }}</h4></a>
                                                <a href="" class="time">{{$post->post_date}}</a><br>
                                                <a href="" class="anchor-status" style="color: #999999;">{{$post->post_desc}}</a><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="pull-right" style="margin-top: 10px;">
                                            <a href="#" data-toggle="dropdown"> <i class="fa-lg fa fa-angle-down" style="font-size: 20px;"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><span class="fa fa-user fa-fw"></span>Hide post</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"> <span class="fa fa-edit fa-fw"></span>Edit</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span class="fa fa-trash fa-fw"></span>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </section>
                            <section class="media-body">
                                <a href="#" class="">
                                    <img src="assets/user/images/uploads/products/p1.jpg" style="width: 100%">
                                </a>
                            </section>

                                <div class="post-footer-option container col-md-12" style="padding: 20px 2px 0 5px;">
                                    <ul class="list-unstyled">
                                        <li><a href="#" id="like" class="btn-link inactive"><i class="fa fa-thumbs-o-up"></i> <u class="like">Like</u> <span class="label label-info" id="likecount" style="border-radius: 50px; color: #000000;"> {{$post->like_ids}} </span></a></li>
                                        <li><a href="#" id="comment" class="btn-link" data-toggle="modal" data-target="#mycommentModal"><i class="fa fa-comment-o"></i> Comment <span class="label label-info" id="commentcount" style="border-radius: 50px; color: #000000;"> {{$post->comment_ids}}</span></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myshareModal" class="btn-link"><i class="fa fa-share-square-o"></i> Share <span class="label label-info" id="likecount" style="border-radius: 50px; color: #000000;"> {{$post->share_count}}</span></a></li>
                                    </ul>
                                </div>

                                {{--/* Comment */--}}
                                <div class="pull-left col-md-12 text-left comm">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" >
                                        <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user"></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px">
                                        <a href="#" style="font-weight: normal"> James</a><span class="commentx">comment... :)</span><br   >
                                    </div>
                                </div>
                                {{--/* Comment End*/--}}

                                <div class="modal-footer">
                                    <div class="col-lg-12">
                                        <div class="form-group" >
                                            <div class="input-group col-md-12" style="padding-top: 10px">
                                                <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"><a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" class="img-comm-user" alt="user" style=""></a></div>
                                                <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10">
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
                            </section>
                        </div>

                    @endforeach

                    </div>
                </div>


            <!-- Modal Share -->
            <div class="modal fade" id="myshareModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="padding-left: 5px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <i class="fa fa-share-alt"></i> Sharesocialnetwork

                            <ul class="socialnetwork socialcircle">

                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.adroweb.com/&picture=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg&title=Parker+Black+Ink+Pen&description=Product+description" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                                <li><a target="_blank" href="https://plus.google.com/share?url=http://officesupplygeek.com/wp-content/uploads/2011/07/Visconti-Michelangelo-EF-Nib.jpg" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>

                                <li><a target="_blank" href="https://www.instagram.com/accounts/login/?=" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            </h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-11" style="padding-top: 10px;padding-bottom: 10px;">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object photo-profile" src="assets/seller/images/avatar/allisongrayce.jpg" width="40" height="40" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="anchor-username"><h4 class="media-heading">User Name</h4></a>
                                        <a href="#" class="time">January 26, 2017</a><br>
                                        <input type="text" name="txtshare" id="share" class="textshare" placeholder="Enter Some Text"/>
                                    </div>
                                </div>
                            </div>

                            <a href="#" style="padding: 25px;" class="col-md-offset-1">
                                <img src="assets/user/images/uploads/products/p1.jpg">
                            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" value="sub" name="sub" class="btn btn-primary"><i class="fa fa-share"></i> Share Shoplife</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Comments -->
            <div class="modal fade" id="mycommentModal" role="dialog">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <span ><b style="font-size: 18px;color: #1aa7ad"><i class="fa fa-comment-o"></i> Comments</b></span>
                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>

    <script>
        $('title').html('Shoplife :: My Shoplife');

        $(document).ready(function($) {

            $('.card__share > a').on('click', function(e){
                e.preventDefault() // prevent default action - hash doesn't appear in url
                $(this).parent().find( 'div' ).toggleClass( 'card__social--active' );
                $(this).toggleClass('share-expanded');
            });
        });

//        var counter = 15;
//
//        $("#like").click(function(){
//            counter++;
//            $("#likecount").text(counter);
//        });

        $('.btn-link').on('click',function () {
            if($(this).hasClass('active')){
                $(this).find('i').removeClass('fa-thumbs-o-down');
                $(this).find('.like').html('Like');
                $(this).find('i').addClass('fa-thumbs-o-up');
                $(this).removeClass('active');
                $(this).addClass('inactive');
            }
            else if($(this).hasClass('inactive')){
                $(this).find('i').removeClass('fa-thumbs-o-up');
                $(this).find('i').addClass('fa-thumbs-o-down');
                $(this).find('.like').html('Unlike');
                $(this).removeClass('inactive');
                $(this).addClass('active');
            }
        });
    </script>
@endsection