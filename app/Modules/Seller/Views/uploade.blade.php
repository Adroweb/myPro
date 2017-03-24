
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif

            <div class="container-fluid" style="overflow-y:scroll;background-color:#fff;padding-top: 10px; padding-bottom:15vh; height:88vh;overflow-x: hidden;margin-right: -17px;">
                <div class="row">


                </div>

                {{--Here--}}
                <div class="col-md-12">
                    <form id="" action="/Addproduct" method="post" enctype="multipart/form-data">

                        <div class="col-md-12" >
                            <div class="form-group col-md-4">
                                <input id="fileUpload" style="visibility: hidden;" name="image" type="file" class="file" multiple/>
                                <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon"><i class="fa fa-desktop fa-2x"></i></span>
                                    <input type="text" style="font-size: 16px;" class="form-control input-lg"  disabled placeholder="Upload Image From Computer">
                                    <span class="input-group-btn">
                                    <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <input id="fileUpload" name="image1" type="file" class="file" multiple/>
                                <div class="input-group " style="width:100%;">
                                    <span class="input-group-addon"><i class="fa fa-facebook fa-2x"> &nbsp; </i> </span>
                                    <input type="text" style="font-size: 16px;" class="form-control input-lg" disabled placeholder="Upload Image From Facebook">
                                    <span class="input-group-btn">
                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <input id="fileUpload" name="image1" type="file" class="file" multiple/>
                                <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon"><i class="fa fa-instagram fa-2x"></i></span>
                                    <input type="text" style="font-size: 16px;" class="form-control input-lg" disabled placeholder="Upload Image From Instagram">
                                    <span class="input-group-btn">
                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" >
                            <div class="form-grou col-md-4">
                                <input id="fileUpload" name="image1" type="file" class="file" multiple/>
                                <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon">&nbsp;<i class="fa fa-whatsapp fa-2x"></i></span>
                                    <input type="text" style="font-size: 16px;" class="form-control input-lg" disabled placeholder="Upload Image From Whatsapp">
                                    <span class="input-group-btn">
                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <input id="fileUpload" name="image1" type="file" class="file" multiple/>
                                <div class="input-group " style="width:100%;">
                                    <span class="input-group-addon"><i class="fa fa-camera fa-2x"></i></span>
                                    <input type="text" style="font-size: 16px;" class="form-control input-lg" disabled placeholder="Upload Image From Camera"/>
                                    <span class="input-group-btn">
                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                                </div>
                            </div>

                            <div class="form-grou col-md-4">
                                <input id="fileUpload" name="image1" type="file" class="file" multiple/>
                                <div class="input-group" style="width:100%;">
                                    <span class="input-group-addon"> <i class="fa fa-google-plus fa-2x"></i></span>
                                    <input type="text" style="font-size: 16px;" class="form-control input-lg" disabled placeholder="Upload Image From Google">
                                    <span class="input-group-btn">
                                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                                </div>
                            </div>
                        </div>

                        {{ csrf_field() }}
                        <h2 align="center">Enter Your Product Details</h2>

                        <div id="image-holder" class="col-md-10 col-md-offset-2"></div>

                        <div class="col-md-10 col-md-offset-2" style="margin-top: 25px;">
                            <div class="col-md-3">
                                <select name="category" class="form-control">
                                    <option value="" disabled selected>Select Category</option>
                                    <option value="Shoes">Shoes</option>
                                </select>
                                <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div>
                            </div>

                            <div class="col-md-3">
                                <select  name="type" class="form-control" >
                                    <option value="" disabled selected>Select Type</option>
                                    <option value="Sports">Sports</option>
                                </select>
                                <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div>
                            </div>

                            <div class="col-md-3" style="margin-bottom: 20px;">
                                <select name="brand" class="form-control">
                                    <option value="" disabled selected>Select Brand</option>
                                    <option value="Puma">Puma</option>
                                </select>
                                <div class="alert-danger"><?php echo $errors->first('ptitle'); ?> </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-2">
                            <div>
                                <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('image'); ?> </div><br>
                            </div>

                            <div>
                                <input type='text' name='pname' class="form-control" placeholder="Enter Product Name" style="width: 80%;">
                                <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('pname'); ?> </div><br>
                            </div>

                            <div>
                                <input type='text' name='pdescription'  class="form-control" placeholder="Enter Product Description" style="width: 80%;">
                                <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('pdescription'); ?> </div><br>
                            </div>

                            <div>
                                <input type='text' name='pprice' class="form-control" placeholder="Enter Product Price" style="width: 80%;">
                                <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('pprice'); ?> </div><br>
                            </div>

                            <div>
                                <input type='text' name='sprice' class="form-control" placeholder="Enter Product Special Price" style="width: 80%;">
                                <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('sprice'); ?> </div><br>
                            </div>

                            <div>
                                <input type='text' name='pquantity' class="form-control" placeholder="Enter Product Quantity" style="width: 80%;"><br>
                                <div class="alert-danger" style="width: 80%;"><?php echo $errors->first('pquantity'); ?> </div><br>
                            </div>

                            <span style=" margin-top: -15px;"><button type="submit" class="btn btn-primary"   style="height: 40px; width: 200px;">Save Product</button></span>

                        </div>



                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                    </form>
                </div>
        </div>
    </div>

    <script>
        $('title').html('Shoplife :: Upload');

        $("#fileUpload").on('change', function () {

            //Get count of selected files
            var countFiles = $(this)[0].files.length;

            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            var image_holder = $("#image-holder");
            image_holder.empty();

            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if (typeof (FileReader) != "undefined") {

                    //loop for each file selected for uploaded.
                    for (var i = 0; i < countFiles; i++) {

                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<img />", {
                                "src": e.target.result,
                                "class": "imgview col-md-4 col-sm-4 col-xs-4"
                            }).appendTo(image_holder);
                        }

                        image_holder.show();
                        reader.readAsDataURL($(this)[0].files[i]);
                    }

                } else {
                    alert("This browser does not support FileReader.");
                }
            } else {
                alert("Please select only images file");
            }
        });


        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
        $(document).on('click', '.browse', function(){
            var file = $(this).parent().parent().parent().find('.file');
            file.trigger('click');
        });


        </script>

@endsection

