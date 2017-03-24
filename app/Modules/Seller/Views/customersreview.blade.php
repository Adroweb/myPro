@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif


        <div class="container-fluid" style="overflow-y:scroll;padding-top:20px;padding-bottom:15vh; height:88vh;overflow-x: hidden;background-color: #f5f5f5;">
            <div class="row">

                    <div class="col-md-10 col-md-offset-1 review-block">
                            <div class="col-md-6 text-center">
                                <h1>Overall Customer Rating</h1>
                                <h1 class="rating-num">
                                    4.0</h1>
                                <div class="rating">
                                    <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span>
                                </div>
                                <div>
                                    <span class="glyphicon glyphicon-user"></span>1,050,008 total
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 align="center">Ratings Reviews</h1>
                                <div class="row rating-desc">
                                    <div class="col-md-3 text-right">
                                        <span class="glyphicon glyphicon-star"></span>5
                                    </div>
                                    <div class="col-md-7">
                                        <div class="progress progress-striped set">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right">
                                        <span class="glyphicon glyphicon-star"></span>4
                                    </div>
                                    <div class="col-md-7">
                                        <div class="progress progress-striped set">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right">
                                        <span class="glyphicon glyphicon-star"></span>3
                                    </div>
                                    <div class="col-md-7">
                                        <div class="progress progress-striped set">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right">
                                        <span class="glyphicon glyphicon-star"></span>2
                                    </div>
                                    <div class="col-md-7">
                                        <div class="progress progress-striped set">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-right">
                                        <span class="glyphicon glyphicon-star"></span>1
                                    </div>
                                    <div class="col-md-7">
                                        <div class="progress progress-striped set">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                <span class="sr-only">10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1 review-block">
                    <h1>Customer FeedBack</h1>
                    <hr/>
                        <div class="row">
                            <div class="col-md-2">

                                <div class="review-block-name">
                                    <a href="#"><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"><span style="padding-left: 5px;">Kumar Sahu</span></a>
                                    <div class="review-block-date">January 29, 2017<br><span class="review-block-title">1 day ago</span></div>
                                </div>

                            </div>
                            <div class="col-md-8">
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-grey btn-circle" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-grey btn-circle" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="review-block-title">Title Title Title</div>
                                <div class="review-block-description">Description Description Description Description Description</div>
                            </div>
                        </div>
                    <hr/>

                    <div class="row">
                        <div class="col-md-2">

                            <div class="review-block-name">
                                <a href="#"><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"><span style="padding-left: 5px;">Kumar Sahu</span></a>
                                <div class="review-block-date">January 29, 2017<br><span class="review-block-title">1 day ago</span></div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">Title Title Title</div>
                            <div class="review-block-description">Description Description Description Description Description</div>
                        </div>
                    </div>
                    <hr/>

                    <div class="row">
                        <div class="col-md-2">

                            <div class="review-block-name">
                                <a href="#"><img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"><span style="padding-left: 5px;">Kumar Sahu</span></a>
                                <div class="review-block-date">January 29, 2017<br><span class="review-block-title">1 day ago</span></div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-circle" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">Title Title Title</div>
                            <div class="review-block-description">Description Description Description Description Description</div>
                        </div>
                    </div>
                    <hr/>

                </div>
            </div>
        </div>
    </div>
    <script>
        $('title').html('Shoplife :: Customer Review');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
    </script>
    @endsection