<!DOCTYPE html>
<!-- saved from url=(0057)http://themes.semicolonweb.com/html/canvas/contact-2.html -->
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }
    </style>
    <style type="text/css">
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3) {
            display: block
        }
    </style>
    <link type="text/css" rel="stylesheet" href="./Contact - Layout 2 _ Canvas_files/css">
    <style type="text/css">
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style type="text/css">
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }
    </style>
    <style type="text/css">
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style type="text/css">
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
        rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link rel="shortcut icon" href="{{asset('/images/logo/bdsoftit_logo.png')}}" />
    <title>Contact - BD Soft IT</title>
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
    <style type="text/css">
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }

        .gm-style img {
            max-width: none;
        }
    </style>
</head>

<body class="stretched device-xl" cz-shortcut-listen="true">

    <div id="wrapper" class="clearfix" style="opacity: 1; animation-duration: 1500ms;">

        @include('header')
		<br>
        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        		@if (Session::has('message'))
				   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif
        	</div>
        	<div class="col-md-4"></div>
        </div>




        <section id="content" style="margin-bottom: 0px;">
            <div class="content-wrap">
                <div class="container clearfix">

					<div class="row">
						<div class="col-md-6">
							<h2 style="background-color: #1abc9c;color: white; text-align: center;">Email US</h2>
							<form action="{{route('sendemail')}}" action="get">
							  <div class="form-row">
							    <div class="form-group col-md-6">
							      <label for="inputEmail4">Name</label>
							      <input name="name" type="text" class="form-control" id="inputEmail4" >
							    </div>
							    <div class="form-group col-md-6">
							      <label for="inputPassword4">Phone</label>
							      <input name="phone" type="text" class="form-control" id="inputPassword4" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputAddress">E-mail</label>
							    <input name="email" type="email" class="form-control" id="inputAddress" >
							  </div>
							  <div class="form-group">
							    <label for="inputAddress2">Massage</label>
							    <textarea name="massage" rows="4" class="form-control" id="inputAddress2"></textarea>
							  </div>
							  <div class="form-row">
							    
							    <div class="form-group col-md-6">
							      <label for="inputZip">Subject</label>
							      <input name="subject" type="text" class="form-control" id="inputZip">
							    </div>
							    <div class="form-group col-md-6">
							      <label for="inputState">Service</label>
							      <select name="service" id="inputState" class="form-control">
							        <option selected>Choose...</option>
							        <option value="Web Design">Web Design</option>
							        <option value="Web Application">Web Application</option>
							        <option value="Hosting">Hosting</option>
							      </select>
							    </div>
							  </div>
							  <button style="background-color: #1abc9c;border-color: #1abc9c;color: white;" type="submit" class="btn btn-block">Submit</button>
							</form>
						</div>
						<div class="col-md-6">
							<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mohammad%20pur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
						</div>
					</div>
                    <div class="clear"></div>

                    <div class="row clear-bottommargin">
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <i class="icon-map-marker2"></i>
                                </div>
                                <h3>Our Headquarters<span class="subtitle">Mohammad pur, Dhaka, Bangladesh</span></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <i class="icon-phone3"></i>
                                </div>
                                <h3>Speak to Us<span class="subtitle">(+88) 01400883400</span></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="https://www.facebook.com/bdsoftitcom"><i class="icon-facebook"></i></a>
                                </div>
                                <h3>Follow on facebook<span class="subtitle">BDSoftIT</span></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="https://twitter.com/bdsoftit"><i class="icon-twitter2"></i></a>
                                </div>
                                <h3>Follow on Twitter<span class="subtitle">BD Soft IT</span></h3>
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
        

</body>

</html>