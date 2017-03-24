
@extends('User/Layouts/homeLayout')
@section('content')

    @foreach($wallet as $walletdata)
    @endforeach

    <div class="container-fluid" style="overflow-y:scroll; padding-bottom:15vh; height:80vh;overflow-x: hidden;margin-right: 0px;">
            <div class="profile">
                <div class="card hovercard">
                    <div class="card-background">
                            <div class="useravatar col-md-offset-2">

                                <div id='profile-upload' style="padding-top: 16%; padding-right: 25px">
                                <div class="hvr-profile-img">
                                    <input type="file" name="logo" id='getval'  class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
                                <i class="fa fa-camera"></i>
                                </div>

                            </div>
                        <div class="usertitle">
                            <b>{{$userdata->name}}</b>
                        </div>
                     </div>
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group">
                        <div class="btn-group" role="group">
                            <button type="button" id="favorites" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="fa fa-user" aria-hidden="true"></span>
                                <div>Profile</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="stars" class="btn btn-primary" href="#tab2" data-toggle="tab"><span class="fa fa-users" aria-hidden="true" ></span>
                                <div>Followers <span class="label label-info" style="border-radius: 50px;color: #000000;">{{count($follower)}}</span></div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" id="following" class="btn btn-primary" href="#tab3" data-toggle="tab"><span class="fa fa-users" aria-hidden="true"></span>
                                <div>Following <span class="label label-info" style="border-radius: 50px; color: #000000;">{{count($following)}}</span></div>
                            </button>
                        </div>
                    </div>

                    <div class="well">
                        <div class="tab-content">
                            <div class="tab-pane fade in active " id="tab1" align="center">

                                @if (session('alert-success'))
                                    <div style="width: 80%"; class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
                                    </div>
                                @endif

                                <button id="edit_profile" class=" btn btn-warning fa fa-edit" style="width: 150px;"> Edit User Profile</button><br><br>

                                <form id="formupdate" action="/checkupdate/{{$userdata->id}}" method="post">

                                    <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('username'); ?> </div>
                                <input type="text" class="form-control" disabled="true" id="name" name="username" style="height: 40px; width: 80%;" value="{{$userdata->name}}"/><br>

                                <input type="email" class="form-control" disabled="true" id="email" name="email" style="height: 40px; width: 80%;" value="{{$userdata->email}}" /><br>

                                    <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('mobile'); ?> </div>
                                <input type="text" class="form-control" disabled="true" id="mobile" name="mobile"  style="height: 40px; width: 80%;" value="{{$userdata->mobile }}"/><br>

                                <span class="pull-center" style=" margin-top: -15px;"><button class="btn btn-primary"   style="height: 40px; width: 200px;">Update</button></span><br>
                                </form>
                            </div>
                            <div class="tab-pane fade in " id="tab2">
                                <h3>Follower List.....</h3>

                                <div class="table-container">
                                    <table class="table table-filter">
                                        <tbody>
                                        @foreach($follower as $userfollow)

                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img src="assets/images/uploads/userprofile.jpg" style="width: 100px;height: 100px;" class="media-photo">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="title"><b>{{$userfollow->name}}</b></span><br>
                                                            <span class="media-meta pull-left">User Description,Address</span><br>
                                                            <span class="media-meta pull-left"><small></small></span>
                                                        </div>
                                                        <a href="" ><button class="pull-right btn btn-danger" style="height: 40px; width: 80px;">Block</button></a>
                                                        <a href="" data-toggle="modal" data-target="#squarespaceModal"><button class="pull-right btn btn-primary" style="height: 40px; width: 80px;">View</button></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="tab3">
                                <h3>Following Shop List....</h3>

                                <div class="row">

                                    @foreach($followingdate as $datefollowing)
                                    @endforeach

                                    @foreach($following as $userfolling)
                                        <div class="col-md-3 col-sm-6 col-xs-12 store" style="max-height: 450px">

                                            <div class="w-user-thumbnailx pull-left col-md-1 col-lg-1 col-sm-2 col-xs-2" style="padding: 10px;background-color: #ffffff;">
                                                <a href="#"><img src="assets/seller/images/avatar/allisongrayce.jpg" alt="user" style="width: 44px;height: 44px;"></a>

                                            </div>
                                            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 pull-right" style="padding-top: 15px">
                                                <span><b> {{$userfolling->name}} </b><br><small>{{$datefollowing->date}}</small><br>{{$userfolling->bill_address}}</span>
                                                <div class="pull-right" style="margin-top: -30px;">
                                                    <a href="#" data-toggle="dropdown"><i class="fa  fa-share-alt" style="font-size: 20px;"></i></a>

                                                    <ul class="dropdown-menu" style="background-color: transparent;">
                                                        <li>
                                                            <a data-original-title="Facebook" rel="tooltip"  href="#" class="btn btn-facebook" data-placement="left">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-original-title="Google+" rel="tooltip"  href="#" class="btn btn-google" data-placement="left">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-original-title="Instagram" rel="tooltip"  href="#" class="btn btn-instagram" data-placement="left">
                                                                <i class="fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="iconic-w-wrap iconic-w-wrap">
                                                <a href="#" class="">
                                                    <img src="assets/img/pics/pic_2.jpg" style="width: 100%;height: auto;">
                                                </a>
                                                <div class="w-meta-info">
                                                    <span class="w-meta-value text-left">{{$userfolling->ship_address}} <br></span>

                                                    <div class="" style="height: 60px;width: 100%">
                                                        <span class="w-meta-title" style="min-height: 60px;"></span>
                                                        <span class="comment"><a href="#"><i class="fa fa-eye"></i> View Shop</a></span>
                                                        <span class="wishlist inactive" ><i class="fa fa-check-square-o" id="outchange"></i> <b class="wish-text">Un-Follow</b></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Shoplife User Profile</h3>
                </div>
                <div class="modal-body">

                    <div class="twPc-div">
                        <a class="twPc-bg twPc-block"></a>

                        <div>


                            <a title="Mert Salih Kaplan" href="" class="twPc-avatarLink">
                                <img src="assets/images/uploads/userprofile.jpg" class="twPc-avatarImg">
                            </a>

                            <div class="twPc-divUser">
                                <div class="twPc-divName">
                                    <a href="">Username</a>
                                </div>
                            </div>
                    </div>
                </div>

                    <div class="col-md-12">
                        <!-- Nav tabs --><div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li style="width: 20%; text-align: center;" role="presentation" class="active"><a href="#About" aria-controls="home" role="tab" data-toggle="tab">About</a></li>
                                <li style="width: 20%;text-align: center;" role="presentation"><a href="#Photos" aria-controls="profile" role="tab" data-toggle="tab">Photos</a></li>
                                <li style="width: 20%;text-align: center;" role="presentation"><a href="#Follower" aria-controls="messages" role="tab" data-toggle="tab">Follower</a></li>
                                <li style="width: 20%;text-align: center;" role="presentation"><a href="#Following" aria-controls="settings" role="tab" data-toggle="tab">Following</a></li>
                                <li style="width: 20%;text-align: center;" role="presentation"><a href="#Following" aria-controls="settings" role="tab" data-toggle="tab">Following</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content" style="height:200px">
                                <div role="tabpanel" class="tab-pane active" id="About">
                                    About:-
                                    <h5>Name:User Name</h5>
                                    <h6>Mobile:9993796620</h6>
                                    <h6>Lives in: Raipur</h6>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Photos">
                                    Photos
                                    <div id="images">
                                        <div class="item">
                                            <img src="http://lorempixel.com/425/299/nature" width="100px" height="100px">
                                            <img src="http://lorempixel.com/190/292/nature" width="100px" height="100px">
                                            <img src="http://lorempixel.com/425/299/nature" width="100px" height="100px">
                                            <img src="http://lorempixel.com/190/292/nature" width="100px" height="100px">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Follower">
                                    Follower List
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Following">
                                    Following List
                                </div>
                                <div role="tabpanel" class="tab-pane" id="Following">
                                    Following List
                                </div>
                            </div>
                        </div>

                    </div>

                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" style="width: 25%;margin-left: 20%;" id="Follow" class="btn btn-primary" >Block</button>
                            <button type="button" style="width: 25%;margin-left: 10px;" id="Follow" class="btn btn-primary" >Follow</button>
                            <button type="button" style="width: 25%;margin-left: 10PX;" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <script>
                $('title').html('Shoplife :: Profile');

                $('.wishlist').on('click',function () {
                    if($(this).hasClass('active')){
                        $(this).find('i').removeClass('fa-bookmark');
                        $(this).find('.wish-text').html('Un-Follow');
                        $(this).find('i').addClass('fa-check-square-o');
                        $(this).removeClass('active');
                        $(this).addClass('inactive');
                    }
                    else if($(this).hasClass('inactive')){
                        $(this).find('i').removeClass('fa-check-square-o');
                        $(this).find('i').addClass('fa-bookmark');
                        $(this).find('.wish-text').html('Follow');
                        $(this).removeClass('inactive');
                        $(this).addClass('active');
                    }
                });

                document.getElementById('getval').addEventListener('change', readURL, true);
                function readURL(){
                    var file = document.getElementById("getval").files[0];
                    var reader = new FileReader();
                    reader.onloadend = function(){
                        document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
                    }
                    if(file){
                        reader.readAsDataURL(file);
                    }else{
                    }
                }


                  $('#edit_profile').on('click', function(e) {
                        e.preventDefault();
                    $('input').attr('disabled', false);
                    $('#email').prop('disabled', true);
                });

                $('.useravatar i').on('click', function (e) {
                    e.preventDefault();
                    $('.useravatar input').click();

                })

//      *********auto closable messages*************
                window.setTimeout(function() {
                    $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove();
                    });
                }, 3000);

            </script>

@endsection