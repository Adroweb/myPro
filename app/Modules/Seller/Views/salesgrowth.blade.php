
@extends('Seller/Layouts/sellerLayout')
@section('content')

    <div class="main-container">
        @if (session('alert-success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('alert-success') }}
            </div>
        @endif


        <div class="container-fluid" style="overflow-y:scroll;padding-bottom:15vh;padding-top:20px; height:88vh;overflow-x: hidden;background-color: #f5f5f5;">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="side col-md-3">
                        <ul class="links">
                            <li><a href="#" class="selected" data-metric="sales">Sales</a></li>
                            <li><a href="#" data-metric="customer_review">Customer Review</a></li>
                            <li><a href="#" data-metric="marketing">Marketing</a></li>
                        </ul>
                        <div class="stats">
                            <ul data-metric="sales">
                                <li>
                                    <div class="key">Total Sales</div>
                                    <div class="val">356</div>
                                </li>
                                <li>
                                    <div class="key">Average</div>
                                    <div class="val">50.9</div>
                                </li>
                                <li>
                                    <div class="key">Change</div>
                                    <div class="val">98.2%</div>
                                </li>
                            </ul>
                            <ul data-metric="customer_review">
                                <li>
                                    <div class="key">Total Customer Review</div>
                                    <div class="val">468</div>
                                </li>
                                <li>
                                    <div class="key">Average</div>
                                    <div class="val">66.9</div>
                                </li>
                                <li>
                                    <div class="key">Change</div>
                                    <div class="val">16.7%</div>
                                </li>
                            </ul>
                            <ul data-metric="marketing">
                                <li>
                                    <div class="key">Total Marketing</div>
                                    <div class="val">456</div>
                                </li>
                                <li>
                                    <div class="key">Average</div>
                                    <div class="val">65.1</div>
                                </li>
                                <li>
                                    <div class="key">Change</div>
                                    <div class="val">47.4%</div>
                                </li>
                            </ul>
                        </div>
                        <ul>
                            <li>
                                <div class="key">Range</div>
                                <div class="val">One Month</div>
                            </li>
                            <li>
                                <div class="key">Timezone</div>
                                <div class="val">PDT</div>
                            </li>
                            <li>
                                <div class="key">Status</div>
                                <div class="val">Normal</div>
                            </li>
                        </ul>
                    </div>

                    <div class="main col-md-8">
                        <ul class="fontinside">
                            <li class="active">
                                <article tabindex="0" data-metric="sales">
                                    <div class="area">
                                        <div class="lines">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>

                                        </div>
                                        <div class="data visits">
                                            <dl>
                                                <dt>January</dt>
                                                <dd>36</dd>
                                            </dl>
                                            <dl>
                                                <dt>February</dt>
                                                <dd>44</dd>
                                            </dl>
                                            <dl>
                                                <dt>March</dt>
                                                <dd>52</dd>
                                            </dl>
                                            <dl>
                                                <dt>April</dt>
                                                <dd>32</dd>
                                            </dl>
                                            <dl>
                                                <dt>May</dt>
                                                <dd>44</dd>
                                            </dl>
                                            <dl>
                                                <dt>June</dt>
                                                <dd>68</dd>
                                            </dl>
                                            <dl>
                                                <dt>July</dt>
                                                <dd>80</dd>
                                            </dl>
                                            <dl>
                                                <dt>August</dt>
                                                <dd>83</dd>
                                            </dl>
                                            <dl>
                                                <dt>September</dt>
                                                <dd>90</dd>
                                            </dl>
                                            <dl>
                                                <dt>October</dt>
                                                <dd>93</dd>
                                            </dl>
                                            <dl>
                                                <dt>November</dt>
                                                <dd>95</dd>
                                            </dl>
                                            <dl>
                                                <dt>December</dt>
                                                <dd>98</dd>
                                            </dl>

                                        </div>
                                    </div>
                                    <h1>Sales Growth</h1>
                                </article>
                            </li>
                            <li>
                                <article tabindex="0" data-metric="customer_review">
                                    <div class="area">
                                        <div class="lines">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="data pageviews">
                                            <dl>
                                                <dt>January</dt>
                                                <dd>72</dd>
                                            </dl>
                                            <dl>
                                                <dt>February</dt>
                                                <dd>57</dd>
                                            </dl>
                                            <dl>
                                                <dt>March</dt>
                                                <dd>63</dd>
                                            </dl>
                                            <dl>
                                                <dt>April</dt>
                                                <dd>50</dd>
                                            </dl>
                                            <dl>
                                                <dt>May</dt>
                                                <dd>64</dd>
                                            </dl>
                                            <dl>
                                                <dt>June</dt>
                                                <dd>80</dd>
                                            </dl>
                                            <dl>
                                                <dt>July</dt>
                                                <dd>85</dd>
                                            </dl>
                                            <dl>
                                                <dt>August</dt>
                                                <dd>52</dd>
                                            </dl>
                                            <dl>
                                                <dt>September</dt>
                                                <dd>58</dd>
                                            </dl>
                                            <dl>
                                                <dt>October</dt>
                                                <dd>62</dd>
                                            </dl>
                                            <dl>
                                                <dt>November</dt>
                                                <dd>70</dd>
                                            </dl>
                                            <dl>
                                                <dt>December</dt>
                                                <dd>90</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <h1>Customer Review</h1>
                                </article>
                            </li>
                            <li>
                                <article tabindex="0" data-metric="marketing">
                                    <div class="area">
                                        <div class="lines">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="data conversions">
                                            <dl>
                                                <dt>January</dt>
                                                <dd>77</dd>
                                            </dl>
                                            <dl>
                                                <dt>February</dt>
                                                <dd>90</dd>
                                            </dl>
                                            <dl>
                                                <dt>March</dt>
                                                <dd>72</dd>
                                            </dl>
                                            <dl>
                                                <dt>April</dt>
                                                <dd>68</dd>
                                            </dl>
                                            <dl>
                                                <dt>May</dt>
                                                <dd>52</dd>
                                            </dl>
                                            <dl>
                                                <dt>June</dt>
                                                <dd>40</dd>
                                            </dl>
                                            <dl>
                                                <dt>July</dt>
                                                <dd>60</dd>
                                            </dl>
                                            <dl>
                                                <dt>August</dt>
                                                <dd>54</dd>
                                            </dl>
                                            <dl>
                                                <dt>September</dt>
                                                <dd>35</dd>
                                            </dl>
                                            <dl>
                                                <dt>October</dt>
                                                <dd>45</dd>
                                            </dl>
                                            <dl>
                                                <dt>November</dt>
                                                <dd>70</dd>
                                            </dl>
                                            <dl>
                                                <dt>December</dt>
                                                <dd>80</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <h1>Marketing</h1>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        $('title').html('Shoplife :: Sales Growth');

        window.setTimeout(function() {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

        function selectMetric(e) {
            e.preventDefault();
            var metric = $(e.currentTarget).attr('data-metric');
            var metricSelector = '[data-metric="' + metric + '"]';

            // set selected link
            $('.side .selected').removeClass('selected');
            $('.side .links a' + metricSelector).addClass('selected');

            // show proper stats
            $('.side .stats ul').hide();
            $('.side .stats ul' + metricSelector).show();

            // activate proper graph
            var $wrapper = $('.main article' + metricSelector).parent();
            var isActive = $wrapper.hasClass('active');
            if (!isActive) {
                $wrapper
                    .addClass('active')
                    .siblings().removeClass('active');
            }
        }

        function checkKey(e) {
            if (e.keyCode === 13) {
                // hit enter
                selectMetric(e);
            }
        }

        $('.side .links a').on('click', selectMetric);
        $('.main article').on({
            'click': selectMetric,
            'keyup': checkKey
        });

    </script>

@endsection