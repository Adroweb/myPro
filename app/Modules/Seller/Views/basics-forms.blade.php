
@extends('Seller/Layouts/dashboardLayout')
@section('content')

    <div class="main-container">
        <div class="container-fluid">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-md-7">
                        <div class="page-breadcrumb-wrap">

                            <div class="page-breadcrumb-info">
                                <h2 class="breadcrumb-titles">Basic Forms <small>All basic forms elements</small></h2>
                                <ul class="list-page-breadcrumb">
                                    <li><a href="#">Home</a>
                                    </li>
                                    <li class="active-page"> Forms</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box-widget widget-module">
                        <div class="widget-head clearfix">
                            <span class="h-icon"><i class="fa fa-bars"></i></span>
                            <h4>Form Elements</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">
                                <div class="page-header">
                                    <h2>Form Heading</h2>
                                    <p>
                                        Quisque at mauris semper sapien varius scelerisque sed quis risus. Nulla rhoncus vel libero at aliquet. Duis id nibh non quam varius accumsan ut ac arcu.
                                    </p>
                                </div>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Text Input</label>
                                        <div class=" col-md-8">
                                            <input type="text" class="form-control" placeholder="Enter text">
                                            <p class="input-instruction">
                                                <i class="fa fa-question-circle"></i> Input Instruction
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Disable Input</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="Disabled Input" class="form-control" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" value="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Select Box</label>
                                        <div class="col-md-8">
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Multiple Select</label>
                                        <div class="col-md-8">
                                            <select class="form-control" multiple="multiple">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">File</label>
                                        <div class="col-md-8">
                                            <input type="file" id="file" name="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Checkbox</label>
                                        <div class="col-md-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Radio</label>
                                        <div class="col-md-8">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option2" checked> Option one is this and that&mdash;be sure to include why it's great </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Inline Checkbox</label>
                                        <div class="col-md-8">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option1"> 1 </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option2"> 2 </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option3"> 3 </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">&nbsp;</label>
                                        <div class="col-md-8">
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box-widget widget-module">
                        <div class="widget-head clearfix">
                            <span class="h-icon"><i class="fa fa-bars"></i></span>
                            <h4>Input Sizing</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">
                                <form role="form">
                                    <div class="controls">
                                        <ul class="input-sizing-list">
                                            <li>
                                                <input type="text" placeholder=".input-lg" class="form-control input-lg">
                                            </li>
                                            <li>
                                                <input type="text" placeholder="Default input" class="form-control">
                                            </li>
                                            <li>
                                                <input type="text" placeholder=".input-sm" class="form-control input-sm">
                                            </li>
                                            <li>
                                                <select class="form-control input-lg">
                                                    <option value="">.input-lg</option>
                                                </select>
                                            </li>
                                            <li>
                                                <select class="form-control">
                                                    <option value="">Default select</option>
                                                </select>
                                            </li>
                                            <li>
                                                <select class="form-control input-sm">
                                                    <option value="">.input-sm</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box-widget widget-module">
                        <div class="widget-head clearfix">
                            <span class="h-icon"><i class="fa fa-bars"></i></span>
                            <h4>Input grid</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" placeholder=".col-xs-12" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <input type="text" placeholder=".col-xs-2" class="form-control">
                                            </div>
                                            <div class="col-xs-10">
                                                <input type="text" placeholder=".col-xs-10" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" placeholder=".col-xs-3" class="form-control">
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="text" placeholder=".col-xs-9" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <input type="text" placeholder=".col-xs-4" class="form-control">
                                            </div>
                                            <div class="col-xs-8">
                                                <input type="text" placeholder=".col-xs-8" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <input type="text" placeholder=".col-xs-5" class="form-control">
                                            </div>
                                            <div class="col-xs-7">
                                                <input type="text" placeholder=".col-xs-7" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="text" placeholder=".col-xs-6" class="form-control">
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" placeholder=".col-xs-6" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-widget widget-module">
                        <div class="widget-head clearfix">
                            <span class="h-icon"><i class="fa fa-bars"></i></span>
                            <h4>Form Elements With Addon</h4>
                        </div>
                        <div class="widget-container">
                            <div class=" widget-block">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Left side input addon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Right side input addon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Both side input addon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Large input addon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Small input addon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
													<span class="input-group-addon">
													<input type="checkbox">
													</span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
													<span class="input-group-addon">
													<input type="radio">
													</span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
													<span class="input-group-btn">
													<button class="btn btn-default" type="button">Go!</button>
													</span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
													<button class="btn btn-default" type="button">Go!</button>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /btn-group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input Label</label>
                                        <div class=" col-md-7">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input with icon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group iconic-input">
													<span class="input-group-addon">
													<span class="input-icon"><i class="fa fa-user"></i></span>
													</span>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input group with icon</label>
                                        <div class=" col-md-7">
                                            <div class="form-group-input">
                                                <div class="input-group iconic-input">
														<span class="input-group-addon">
														<span class="input-icon"><i class="fa fa-envelope-o"></i></span>
														</span>
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="input-group iconic-input">
														<span class="input-group-addon">
														<span class="input-icon"><i class="fa fa-phone"></i></span>
														</span>
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                </div>
                                                <div class="input-group iconic-input">
														<span class="input-group-addon">
														<span class="input-icon"><i class="fa fa-fax"></i></span>
														</span>
                                                    <input type="text" class="form-control" placeholder="Fax">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input group</label>
                                        <div class=" col-md-7">
                                            <div class="form-group-input">
                                                <input type="text" class="form-control" placeholder="First Name">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                                <input type="text" class="form-control" placeholder="Address">
                                                <input type="text" class="form-control" placeholder="Email">
                                                <input type="text" class="form-control" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-5 control-label">Input group right icon</label>
                                        <div class=" col-md-7">
                                            <div class="input-group iconic-input">
                                                <input type="text" class="form-control" placeholder="Topics...">
                                                <span class="input-group-addon">
													<span class="input-icon"><i class="fa fa-search"></i></span>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection