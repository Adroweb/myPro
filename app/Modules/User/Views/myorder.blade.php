
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

        <div class="container-fluid" style="overflow-y:scroll; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
            <div class="row" style="padding-top: 60Px;">

                @foreach($order as $orderdetails)

                    <div class="col-md-4">
                        <div class="panel panel-default panel--styled" style="width: 100%">
                            <div class="panel-body">
                                <div class="col-md-12 panelTop">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href=""><img class="img-responsive" src="assets/img/products/car.jpg" style="width: 100%;"/></a><br>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>Tansaction_Id: {{$orderdetails->trans_id}}</p>
                                        <h4>{{$orderdetails->p_ids}}</h4>
                                        <p>Product Description</p>
                                        <h4>Shop Name</h4>
                                        <p>Shop Description</p>
                                        <h5 style="color: green">Price <span class="itemPrice"> ₹ {{$orderdetails->p_prices}}</span></h5>
                                    </div>
                                </div>
                                <div class="row bs-wizard" style="border-bottom:0;">

                                    <div class="col-xs-3 bs-wizard-step complete">
                                        <div class="text-center bs-wizard-stepnum">Step 1</div>
                                        <div class="progress"><div class="progress-bar"></div></div>
                                        <a href="#" class="bs-wizard-dot"></a>
                                        <div class="bs-wizard-info text-center">Order Placed</div>
                                    </div>

                                    <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
                                        <div class="text-center bs-wizard-stepnum">Step 2</div>
                                        <div class="progress"><div class="progress-bar"></div></div>
                                        <a href="#" class="bs-wizard-dot"></a>
                                        <div class="bs-wizard-info text-center">Processing</div>
                                    </div>

                                    <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                                        <div class="text-center bs-wizard-stepnum">Step 3</div>
                                        <div class="progress" style="background-color: #c0c0c0;"><div class="progress-bar"></div></div>
                                        <a href="#" class="bs-wizard-dot"></a>
                                        <div class="bs-wizard-info text-center">Shipping</div>
                                    </div>

                                    <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                                        <div class="text-center bs-wizard-stepnum">Step 4</div>
                                        <div class="progress" style="background-color: #c0c0c0;"><div class="progress-bar" ></div></div>
                                        <a href="#" class="bs-wizard-dot"></a>
                                        <div class="bs-wizard-info text-center">Complete</div>
                                    </div>
                                </div>
                                <div class="text-center pull-left"><h4>Current Status:<b style="color: #00c853;"> {{$orderdetails->status}}</b></h4></div>
                                <div class="pull-right">
                                    <a href=""><button class=" btn btn-primary  fa fa-search"> Track Order</button></a>
                                    <a href=""><button class=" btn btn-danger fa fa-trash"> Cancel Order</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                @endforeach
            </div>

        </div>
    </div>

    <script>
        $('title').html('Shoplife :: My Order');

    </script>
@endsection