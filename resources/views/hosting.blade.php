<!DOCTYPE html>
<!-- saved from url=(0056)http://themes.semicolonweb.com/html/canvas/services.html -->
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
        rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Hosting | BD Soft IT</title>
    <link rel="shortcut icon" href="{{asset('/images/logo/bdsoftit_logo.png')}}" />
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <style id="fit-vids-style">
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe,
        .fluid-width-video-wrapper object,
        .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="stretched device-xl" cz-shortcut-listen="true">

    <div id="wrapper" class="clearfix" style="opacity: 1; animation-duration: 1500ms;">

        @include('header')

        <section id="page-title">
            <div class="container clearfix">
                <h1>Web Hosting</h1>
            </div>
        </section>

        <section id="content" style="margin-bottom: 0px;">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="250" width="300" src="{{asset('images/shop/lu.png')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Level up!</h3>
                                <p style="text-align: justify;">We have resources – CPU, memory, entry processes, I/O – at the ready for when you need them (we'll alert you when you're close.) Or you can really stay on top of things through our robust stats dashboard. Either way, leveling up is a one-click affair./p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media"> 
                                <img  src="{{asset('images/shop/aw.png')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Award-winning security</h3>
                                <p style="text-align: justify;">It’s hard to believe anyone would want to harm your website, but they do. Thankfully, our security team is on the job 24/7 to meticulously monitor, thwart suspicious activity and deflect DDoS attacks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="300" width="250" src="{{asset('images/shop/ht.png')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>What is hosting?</h3>
                                <p style="text-align: justify;">Without hosting, no one can see your website. To get your website online, you need to marry up your GoDaddy hosting with a domain name and then upload your content. Easy, right? Right, thanks to: 1-click setup, generous storage & bandwidth, easy, on-the-fly resource upgrades and 24/7 security monitoring.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container clearfix">
            <div class="heading-block center">
                <h2>Pricing.</h2>
                <span>We believe in Flexible Costing.</span>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <select class="form-control form-control-lg" id="currency" name="currency" onchange="currency();">
                        <option disabled selected>Select Currency</option>
                         @foreach($currency as $currency)
                        <option data-name="{{$currency->name}}" value="{{$currency->rate}}">{{$currency->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-4"></div>
            </div>
                
            <div class="row pricing bottommargin clearfix">
            @foreach($pakage as $index=> $pakage)
                <div class="col-lg-3">
                    <div class="pricing-box">
                        <div class="pricing-title">
                            <h3>{{$pakage->title}}</h3>
                        </div>
                        <div class="pricing-price">
                            <span id="currencyNameChangeble{{$index}}" class="price-unit">BDT</span><span id="balance{{$index}}" style="color: #1abc9c;">{{$pakage->cost}}</span><span class="price-tenure">/{{$pakage->details_one}}</span>
                            <input type="hidden"  id="price{{$index}}" value="{{$pakage->cost}}">
                        
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li>{{$pakage->details_two}}</li>
                                <li>{{$pakage->details_three}}</li>
                                <li>{{$pakage->details_four}}</li>
                                <li>{{$pakage->details_five}}</li>
                                <li>{{$pakage->details_six}}</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="{{url('contact')}}" class="btn btn-success btn-block btn-lg">Contact US</a>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
        </div>
        @include('footer')
    </div>

    <div id="gotoTop" class="icon-angle-up" style="display: none;"></div>

    <script>
        $.Velocity.RegisterUI("callout.twirl", {
            defaultDuration: 3000,
            calls: [
                [{
                    rotateZ: 1080
                }, 0.50],
                [{
                    scaleX: 0.5
                }, 0.25, {
                    easing: "spring"
                }],
                [{
                    scaleX: 1
                }, 0.25, {
                    easing: "spring"
                }]
            ]
        });

        $("#roll").velocity("callout.twirl");
    </script>

    <script data-cfasync="false" src="http://themes.semicolonweb.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <script src="{{asset('js/functions.js')}}"></script>

    <script>
        function currency(){
             var currency=document.getElementById("currency").value;
             var pak1=document.getElementById("price0").value;
             var pak2=document.getElementById("price1").value;
             var pak3=document.getElementById("price2").value;
             var pak4=document.getElementById("price3").value;
             
             document.getElementById("balance0").innerText = Math.round(pak1/currency);
             document.getElementById("balance1").innerText = Math.round(pak2/currency);
             document.getElementById("balance2").innerText = Math.round(pak3/currency);
             document.getElementById("balance3").innerText = Math.round(pak4/currency);
             
             if (document.getElementById("price4").value) {
                var pak5=document.getElementById("price4").value;
                document.getElementById("balance4").innerText = Math.round(pak5/currency);
             }
             if (document.getElementById("price5").value) {
                var pak6=document.getElementById("price5").value;
                document.getElementById("balance5").innerText = Math.round(pak6/currency);
             }
        }

        $("#currency").change(function () {
             document.getElementById("currencyNameChangeble0").innerText = $(this).find(':selected').data('name');
             document.getElementById("currencyNameChangeble1").innerText = $(this).find(':selected').data('name');
             document.getElementById("currencyNameChangeble2").innerText = $(this).find(':selected').data('name');
             document.getElementById("currencyNameChangeble3").innerText = $(this).find(':selected').data('name');

             if (document.getElementById("currencyNameChangeble4").value) {
                document.getElementById("currencyNameChangeble4").innerText = $(this).find(':selected').data('name');
             }
             if (document.getElementById("currencyNameChangeble5").value) {
                document.getElementById("currencyNameChangeble6").innerText = $(this).find(':selected').data('name');
             }
        });

    </script>

    <script>
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Red",
                    "Orange",
                    "Yellow",
                    "Green",
                    "Blue"
                ]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Doughnut Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };


        // Radar Chart

        var color = Chart.helpers.color;
        var configRadar = {
            type: 'radar',
            data: {
                labels: [
                    ["Eating", "Dinner"],
                    ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling",
                    "Running"
                ],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.red,
                    pointBackgroundColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, {
                    label: "My Second dataset",
                    backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.blue,
                    pointBackgroundColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, ]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                },
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        };

        window.onload = function () {
            var ctx = document.getElementById("chart-doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx, config);
            window.myRadar = new Chart(document.getElementById("chart-radar"), configRadar);
        };
    </script>

</body>

</html>