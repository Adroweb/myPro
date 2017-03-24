
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

        <div class="container-fluid" style="overflow-y:scroll;background-color:#fff;padding-top: 20px; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="head">
                        <figure class="profile-banner">
                            <img src="assets/img/brand/1.jpg" width="975px" height="300px" alt="Profile banner" />
                        </figure>
                        <figure class="profile-picture" style="background-image: url('assets/images/uploads/userprofile.jpg')">
                            <span  style="margin-left: 45%;"><a href="#" ><i style="color:#000" class="fa fa-camera"></i></a></span>
                        </figure>
                        <div class="profile-stats">
                            <ul class="tabs">
                                <a href="#view" class="active" data-toggle="tab"><li style="border-radius: 10px;" class="contentspan fontcolor btn-primary">31,000<span><i class="fa fa-eye" aria-hidden="true"></i> View</span></li></a>
                                <a href="#likes" data-toggle="tab"><li style="border-radius: 10px;" class="contentspan fontcolor btn-primary">13,000<span><i class="fa fa-thumbs-up" aria-hidden="true"></i> Likes</span></li></a>
                                <a href="#comments" data-toggle="tab"><li style="border-radius: 10px;" class="contentspan fontcolor btn-primary">1,354 <span><i class="fa fa-comment" aria-hidden="true"></i> Comments</span></li></a>
                                <a href="#following" data-toggle="tab"><li style="border-radius: 10px;" class="contentspan fontcolor btn-primary">320   <span><i class="fa fa-users" aria-hidden="true"></i> Following</span></li></a>
                                <a href="#followers" data-toggle="tab"><li style="border-radius: 10px;" class="contentspan fontcolor btn-primary">3240  <span><i class="fa fa-users" aria-hidden="true"></i> Followers</span></li></a>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="view" align="center">
                                <h3 align="center">People Views</h3>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="likes" align="center">
                                <h3 align="center">People Who Likes</h3>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="comments" align="center">
                                <h3 align="center">People Who Comments</h3>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="following" align="center">
                                <h3 align="center">Following List</h3>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="followers" align="center">
                                <h3 align="center">Followers List</h3>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="well well-sm">
                                        <div class="media">
                                            <div class="col-md-3">
                                                <a class="thumbnail pull-left" style="background-color: transparent;" href="#">
                                                    <img class="sprofile" src="assets/seller/images/avatar/jaman.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="media-body">
                                                        <span>
                                                            <a href="#"><h4 class="med-head">John Doe</h4></a>
                                                            <h5 class="med-head">Location</h5>
                                                        </span>

                                                    <div>
                                                        <a href="#" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Followers <span class="label label-warning">10</span></a>

                                                        <a href="#" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Following <span class="label label-warning">10</span></a>
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
            </div>
        </div>

    </div>
    <script>
        $('title').html('Shoplife :: Profile');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);



    </script>



@endsection

