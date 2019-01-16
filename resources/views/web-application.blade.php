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

    <title>Services | BD Soft IT</title>
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
    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>
</head>

<body class="stretched device-xl" cz-shortcut-listen="true">

    <div id="wrapper" class="clearfix" style="opacity: 1; animation-duration: 1500ms;">

        @include('header')

        <section id="page-title">
            <div class="container clearfix">
                <h1>Web-Application</h1>
                <span>We provide Amazing Solutions</span>
            </div>
        </section>

        <section id="content" style="margin-bottom: 0px;">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="250" width="300" src="{{asset('images/shop/oss.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Online sales & services</h3>
                                <p style="text-align: justify;">Feel like using everything the web can offer to develop your business, gain in efficiency, sell more and transform your relationship with customers?</p><p>BD Soft IT will help you go all the way by creating your very own e-commerce solution.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="250px" width="300px" src="{{asset('images/shop/bs.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Business solutions</h3>
                                <p style="text-align: justify;">Are creating your own business software, optimising work processes and easing internal communication on the top of your list?</p><p>We conceive efficient and user-friendly solutions that will transform your in-house communication and management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img height="300" width="250" src="{{asset('images/shop/hs.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Advice & assistance</h3>
                                <p style="text-align: justify;">When we talk about bringing a project together, we mean: analysing your needs, confronting your ideas, sharing our expertise and orienting you throughout the whole process of establishing your very own digital strategy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('footer')
    </div>

    <div id="gotoTop" class="icon-angle-up" style="display: none;"></div>

    <script>
        $.Velocity.RegisterUI("callout.twirl", {
            defaultDuration: 3000,
            calls: [ 
                    [ { rotateZ: 1080 }, 0.50 ],
                    [ { scaleX: 0.5 }, 0.25, { easing: "spring" } ],
                    [ { scaleX: 1 }, 0.25, { easing: "spring" } ]
            ]
        });

        $("#roll").velocity("callout.twirl");
    </script>

    <script data-cfasync="false" src="http://themes.semicolonweb.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <script src="{{asset('js/functions.js')}}"></script>

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