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
                <h1>Email Hosting</h1>
            </div>
        </section>

        <section id="content" style="margin-bottom: 0px;">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="250" width="300" src="{{asset('images/shop/email.png')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Email@yourdomain.com</h3>
                                <p style="text-align: justify;">Email communication is one of the most reliable forms of communication. For personal requirements, there might be various tools available for communication. When it comes to communication between different organisations or businesses, the most formal and reliable way is to send emails. To make your email look authentic and reliable, the email should be sent from your business's domain based email address. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media"> 
                                <img  src="{{asset('images/shop/email1.webp')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc"><br><br><br>
                                <h3>Secure, ad-free email with 99.9% uptime guaranteed</h3>
                                <p style="text-align: justify;">FRA Techonology's Mail guarantees you the most wanted availability with the utmost security and privacy to your account via EAR, TLS and TFA authentication. If you are currently maintaining your data on personal computers or your own servers, the odds are that we offer a better level of security than what you currently have in place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="300" width="250" src="{{asset('images/shop/email2.png')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc"><br>
                                <h3>Seamless email migration</h3>
                                <p style="text-align: justify;">Make your switch simple using our Migration tools. Our expert 24x7 technical support will help you make a smooth transition to FRA Techonology's Mail. Manage your business emails from FRA Techonology's Mail powerful Control Panel. Admins can set up individual mailbox quotas and privileges, email policies, group accounts, and more.</p>
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
            @foreach($emailHosting as $index=> $emailHosting)
                <div class="col-lg-3">
                    <div class="pricing-box">
                        <div class="pricing-title">
                            <h3>{{$emailHosting->title}}</h3>
                        </div>
                        <div class="pricing-price">
                            <span id="currencyNameChangeble{{$index}}" class="price-unit">BDT</span><span id="balance{{$index}}" style="color: #1abc9c;">{{$emailHosting->cost}}</span><span class="price-tenure">/{{$emailHosting->details_one}}</span>
                            <input type="hidden"  id="price{{$index}}" value="{{$emailHosting->cost}}">
                        
                        </div>
                        <div class="pricing-features">
                            <ul>
                                <li>{{$emailHosting->details_two}}</li>
                                <li>{{$emailHosting->details_three}}</li>
                                <li>{{$emailHosting->details_four}}</li>
                                <li>{{$emailHosting->details_five}}</li>
                                <li>{{$emailHosting->details_six}}</li>
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
             var pak1=document.getElementById("price0").value/currency;
             var pak2=document.getElementById("price1").value/currency;
             var pak3=document.getElementById("price2").value/currency;
             var pak4=document.getElementById("price3").value/currency;
             
             document.getElementById("balance0").innerText = pak1.toFixed(2);
             document.getElementById("balance1").innerText = pak2.toFixed(2);
             document.getElementById("balance2").innerText = pak3.toFixed(2);
             document.getElementById("balance3").innerText = pak4.toFixed(2);
             
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