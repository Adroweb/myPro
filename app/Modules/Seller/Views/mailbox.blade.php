
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
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="col-md-10  col-md-offset-1">
                        <nav class="navbar navbar-default navbar-static-top" role="navigation">
                            <div style="margin-left: 20%;" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="btn-compose pull-left">
                                    <a class="btn btn-danger navbar-btn" href="#compose" role="tab" data-toggle="tab">
                                        <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> Compose</a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="#inbox" style="width: 150px;margin-left: 10px;" class="btn btn-default" role="tab" data-toggle="tab">
                                            <i class="fa fa-inbox fa-fw" aria-hidden="true"></i> Inbox <span class="label label-success">10</span>
                                        </a>
                                    </li>
                                    <li><a href="#sent-mail" style="width: 150px;margin-left: 10px;" class="btn btn-default btnbar" role="tab" data-toggle="tab">
                                            <i class="fa fa-play fa-fw" aria-hidden="true"></i> Sent mail</a>

                                    </li>
                                    <li><a href="#draft" style="width: 150px;margin-left: 10px;" class="btn btn-default" role="tab" data-toggle="tab">
                                            <i class="fa fa-file-o fa-fw" aria-hidden="true"></i> Draft</a>

                                    </li>
                                    <li><a href="#trash" style="width: 150px;margin-left: 10px;" class="btn btn-default" role="tab" data-toggle="tab">
                                            <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> Trash</a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>


                    <div class="col-md-10 col-md-offset-1 tab-content">
                        <div class="tab-pane active" id="inbox">

                            <div class="container">
                                <div class="content-container clearfix">
                                    <div class="col-md-12">
                                        <h1 class="content-title">Inbox</h1>

                                        <input type="search" placeholder="Search Mail" class="form-control mail-search" />

                                        <ul class="mail-list">
                                            <li style="background-color: #ffffb2">
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="compose">

                            <div class="container">
                                <div class="content-container clearfix">
                                    <h1 class="content-title">Compose</h1>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="tokenfield" type="text" class="form-control" placeholder="To" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Cc" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Bcc" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" />
                                        </div>
                                        <textarea class="form-control" placeholder="message"></textarea>
                                        <div class="btn-send">
                                            <button class="btn btn-success btn-lg"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="sent-mail">

                            <div class="container">
                                <div class="content-container clearfix">
                                    <div class="col-md-12">
                                        <h1 class="content-title">Sent Mail</h1>

                                        <input type="search" placeholder="Search Mail" class="form-control mail-search" />

                                        <ul class="mail-list">
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="draft">

                            <div class="container">
                                <div class="content-container clearfix">
                                    <div class="col-md-12">
                                        <h1 class="content-title">Draft</h1>

                                        <input type="search" placeholder="Search Mail" class="form-control mail-search" />

                                        <ul class="mail-list">
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="trash">

                            <div class="container">
                                <div class="content-container clearfix">
                                    <div class="col-md-12">
                                        <h1 class="content-title">Trash</h1>

                                        <input type="search" placeholder="Search Mail" class="form-control mail-search" />

                                        <ul class="mail-list">
                                            <li>
                                                <a href="">
                                                    <span class="mail-sender">Sholife</span>
                                                    <span class="mail-subject">shubhamsahu57@gmail.com</span>
                                                    <span class="mail-message-preview">Sholife Sholife Sholife Sholife Sholife Sholife</span>
                                                </a>
                                            </li>
                                        </ul>
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
        $('title').html('Shoplife :: MailBox');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);


    </script>



@endsection

