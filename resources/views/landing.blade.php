<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jan 2019 06:13:45 GMT -->

<head>
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

    <style>
        .content-wrap {
            padding: 0 80px 80px;
        }
    </style>

    <title>A Creative Software Company | BD Soft IT</title>
    <link rel="shortcut icon" href="{{asset('/images/logo/bdsoftit_logo.png')}}" />
</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">
        <section id="slider" class="slider-element slider-parallax full-screen with-header force-full-screen clearfix">
            <div class="slider-parallax-inner">
                <div class="full-screen force-full-screen" style="background: url('images/parallax/home/ab3.png') center center no-repeat; background-size: cover;">
                    <div class="container clearfix">
                        <div class="emphasis-title vertical-middle center">
                            <h1 data-animate="fadeInUp">Welcome to <strong>BD Soft IT</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <header id="header" class="transparent-header">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <div id="logo">
                        <a href="{{url('/')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo/bdsoftit_logo.png"
                                alt="Canvas Logo"></a>
                        <a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo%402x.png"
                                alt="Canvas Logo"></a>
                    </div>

                    <nav id="primary-menu">
                        <ul>
                            <li class="current"><a href="{{url('/')}}">
                                    <div>Home</div>
                                </a>
                            </li>
                            <li><a href="#">
                                    <div>Software</div>
                                </a>
                                <ul style="width: 400px;" class="dropdown-menu" role="menu">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <li><a href="{{url('/web-application')}}">Web Application</a>
                                            </li>
                                            <li><a href="{{url('/web-design')}}">Website Design</a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                                <img height="200" width="300" src="{{asset('images/wd.jpg')}}" class="navimg">
                                        </div>
                                    </div>          
                                </ul>                            
                            </li>
                            <li><a href="#">
                                    <div>Web Hosting</div>
                                </a>
                                <ul style="width: 351px; margin-right: 11px;" class="dropdown-menu" role="menu">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <li><a href="{{url('/hosting')}}">Web Hosting</a>
                                            </li>
                                            <li><a href="{{url('/hosting/email')}}">E-mail Hosting</a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                                <img height="200" width="300" src="{{asset('images/wd.jpg')}}" class="navimg">
                                        </div>
                                    </div>            
                                </ul>                            
                            </li>
                            <li><a href="#">
                                    <div>About us</div>
                                </a>
                            </li>
                        </ul>

                        <div style="display: none;" id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Blue Round-Neck Tshirt</a>
                                            <span class="top-cart-item-price">$19.99</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price">$24.99</span>
                                            <span class="top-cart-item-quantity">x 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">$114.95</span>
                                    <button class="button button-3d button-small nomargin fright">View Cart</button>
                                </div>
                            </div>
                        </div>

                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="{{url('/')}}" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <div class="clear"></div>

        <section id="content">
            <div class="content-wrap nopadding">
                <div class="section parallax full-screen dark nomargin noborder" style="background-image: url('images/parallax/1.jpg');"
                    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                    <div class="vertical-middle">
                        <div class="container clearfix">
                            <div class="row">
                                <div class="col-lg-3 bottommargin-sm center" data-animate="bounceIn">
                                    <i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>
                                    <div class="counter counter-large counter-lined"><span data-from="100" data-to="846"
                                            data-refresh-interval="50" data-speed="2000"></span>K+</div>
                                    <h5>Lines of Codes</h5>
                                </div>
                                <div class="col-lg-3 bottommargin-sm center" data-animate="bounceIn" data-delay="200">
                                    <i class="i-plain i-xlarge divcenter nobottommargin icon-magic"></i>
                                    <div class="counter counter-large counter-lined"><span data-from="3000" data-to="15360"
                                            data-refresh-interval="100" data-speed="2500"></span>+</div>
                                    <h5>KBs of HTML Files</h5>
                                </div>
                                <div class="col-lg-3 bottommargin-sm center" data-animate="bounceIn" data-delay="400">
                                    <i class="i-plain i-xlarge divcenter nobottommargin icon-file-text"></i>
                                    <div class="counter counter-large counter-lined"><span data-from="10" data-to="386"
                                            data-refresh-interval="25" data-speed="3500"></span>*</div>
                                    <h5>No. of Templates</h5>
                                </div>
                                <div class="col-lg-3 bottommargin-sm center" data-animate="bounceIn" data-delay="600">
                                    <i class="i-plain i-xlarge divcenter nobottommargin icon-time"></i>
                                    <div class="counter counter-large counter-lined"><span data-from="60" data-to="1200"
                                            data-refresh-interval="30" data-speed="2700"></span>+</div>
                                    <h5>Hours of Coding</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section parallax full-screen nomargin noborder" style="background-image: url('images/parallax/home/wd5.jpg');"
                    data-bottom-top="background-position:-300px -200px;" data-top-bottom="background-position:-200px -400px;">
                    <div class="vertical-middle">
                        <div class="container clearfix">
                            <div class="col_three_fifth nobottommargin">
                                <div class="emphasis-title">
                                    <h2 style="text-align: center;">We Help You Look Good!</h2>
                                    <p class="lead topmargin-sm">Create beautiful unlimited full-screen Whether you are an experienced web manager or a new lead for your company's website, we will help you figure it out and make you look good in the process ;-) <a style="color: #1abc9c;" href="{{url('/contact')}}"><u><b>Give us a call now!</b></u></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row nopadding common-height">
                    <div class="col-lg-4 dark col-padding ohidden bounce" data-animate="bounceIn" style="background-color: #1abc9c;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;text-align: center;">Why choose Us</h3>
                            <p style="line-height: 1.8;text-align: center;">Through custom web apps,web design, we’ve helped businesses make more informed decisions thanks to intelligent data driven systems, collaborate better as teams through synchronized platforms, streamline operations with internal process management tools, and engage their audience in a more meaningful way with digital campaigns. Through it all, we measure key performance indicators to determine ROI and inform future iterations.</p>
                            
                            <i class="icon-bulb bgicon"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 dark col-padding ohidden" data-animate="bounceIn" style="background-color: #34495e;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;text-align: center;">Our Mission</h3>
                            <p style="line-height: 1.8;text-align: center;">We absorb your requirements and build a trusted, visually rich user-product relationship to boost adoption and satisfaction. Our  team takes it from there to nail that ultimate user journey in code.Let BD Soft IT's architects and senior engineers get to design and build the core of your application — with an eye for availability, robustness, and great new features.</p>
                            
                            <i class="icon-cog bgicon"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 dark col-padding ohidden" data-animate="bounceIn" style="background-color: #e74c3c;">
                        <div>
                            <h3 class="uppercase" style="font-weight: 600;text-align: center;">What you get</h3>
                            <p style="line-height: 1.8;text-align: center;">We assist organizations to achieve total operational efficiency and independence through our intuitive custom web applications. Our technology stack includes the newest technologies such as PHP, MySql, MongoDB, Angular, React, Node.js, etc.We strive for efficiency in our custom web applications by subjecting them to accepted design standards and testing. In this way, we deliver our clients dependable web applications that can be up and running from day one of implementation.</p>
                            
                            <i class="icon-thumbs-up bgicon"></i>
                        </div>
                    </div>
                </div>


                <section id="page-title" class="page-title-center">
                    <div class="container clearfix">
                        <h1>Our Work's</h1>
                        <span>We build products and services that create great value</span>
                    </div>
                </section>


                <div class="content-wrap">
                    <div class="container clearfix">
                        <div class="clear"></div>

                        <div id="portfolio" class="portfolio grid-container portfolio-3 clearfix" style="position: relative; height: 1108.5px;">
                            
                            <article class="portfolio-item pf-illustrations pf-icons" data-animate="bounceInRight" style="position: absolute; left: 770px; top: 739px;">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider" style="height: 277.5px;">
                                            <div class="slider-wrap">
                                                <div class="slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                                                    data-thumb-alt=""><a href="images/websites/hiddenchef1.png"><img
                                                            src="images/websites/hiddenchef1.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a
                                                        href="images/websites/hiddenchef2.png"><img
                                                            src="images/websites/hiddenchef2.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a
                                                        href="images/websites/hiddenchef3.png"><img
                                                            src="images/websites/hiddenchef3.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                            </div>
                                            <ol class="flex-control-nav flex-control-paging">
                                                <li><a href="images/websites/hiddenchef1.png"
                                                        class="">1</a></li>
                                                <li><a href="images/websites/hiddenchef2.png"
                                                        class="">2</a></li>
                                                <li><a href="images/websites/hiddenchef3.png"
                                                        class="flex-active">3</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/websites/hiddenchef1.png"
                                            class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/websites/hiddenchef2.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/hiddenchef3.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/hiddenchef1.png"
                                            class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('single.portfolio',5)}}">Hidden Chef</a></h3>
                                    <span>Food | Resturant
                                        </span>
                                </div>
                            </article>

                            <article data-animate="bounceInLeft" id="roll" class="portfolio-item pf-illustrations pf-icons" style="position: absolute; left: 770px; top: 739px;">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider" style="height: 277.5px;">
                                            <div class="slider-wrap">
                                                <div class="slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                                                    data-thumb-alt=""><a href="images/websites/realstate1.png"><img
                                                            src="images/websites/realstate1.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/realstate2.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/realstate3.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                            </div>
                                            <ol class="flex-control-nav flex-control-paging">
                                                <li><a href="images/websites/realstate1.png"
                                                        class="">1</a></li>
                                                <li><a href="images/websites/realstate2.png"
                                                        class="">2</a></li>
                                                <li><a href="images/websites/realstate3.png"
                                                        class="flex-active">3</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/websites/realstate1.png"
                                            class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/websites/realstate2.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/realstate3.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/realstate1.png"
                                            class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('single.portfolio',1)}}">Orchid Design & Development</a></h3>
                                    <span>Real State | Builder
                                        </span>
                                </div>
                            </article>
                            <article data-animate="bounceInDown" class="portfolio-item pf-illustrations pf-icons" style="position: absolute; left: 770px; top: 739px;">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider" style="height: 277.5px;">
                                            <div class="slider-wrap">
                                                <div class="slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                                                    data-thumb-alt=""><a href="images/websites/cms4.png"><img
                                                            src="images/websites/cms4.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/cms5.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/cms6.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                            </div>
                                            <ol class="flex-control-nav flex-control-paging">
                                                <li><a href="images/websites/cms4.png"
                                                        class="">1</a></li>
                                                <li><a href="images/websites/cms5.png"
                                                        class="">2</a></li>
                                                <li><a href="images/websites/cms6.png"
                                                        class="flex-active">3</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/websites/cms4.png"
                                            class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/websites/cms5.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/cms6.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/realstate1.png"
                                            class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('single.portfolio',2)}}">Community Management</a></h3>
                                    <span>Somobay Somity | Shareholder Management</a>,
                                        </span>
                                </div>
                            </article>
                            <article class="portfolio-item pf-illustrations pf-icons" data-animate="bounceInRight" style="position: absolute; left: 770px; top: 739px;">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider" style="height: 277.5px;">
                                            <div class="slider-wrap">
                                                <div class="slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                                                    data-thumb-alt=""><a href="images/websites/bdtech1.png"><img
                                                            src="images/websites/bdtech1.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a
                                                        href="images/websites/bdtech2.png"><img
                                                            src="images/websites/bdtech2.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/bdtech3.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                            </div>
                                            <ol class="flex-control-nav flex-control-paging">
                                                <li><a href="images/websites/bdtech1.png.png"
                                                        class="">1</a></li>
                                                <li><a href="images/websites/bdtech2.png"
                                                        class="">2</a></li>
                                                <li><a href="images/websites/bdtech3.png"
                                                        class="flex-active">3</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/websites/bdtech1.png"
                                            class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/websites/bdtech2.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/bdtech3.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/realstate1.png"
                                            class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('single.portfolio',3)}}">BD Technology</a></h3>
                                    <span>Technology Services
                                        </span>
                                </div>
                            </article>
                            <article class="portfolio-item pf-illustrations pf-icons" data-animate="bounceInRight" style="position: absolute; left: 770px; top: 739px;">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider" style="height: 277.5px;">
                                            <div class="slider-wrap">
                                                <div class="slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                                                    data-thumb-alt=""><a href="images/websites/cargopoint1.png"><img
                                                            src="images/websites/cargopoint1.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a
                                                        href="images/websites/cargopoint2.png"><img
                                                            src="images/websites/cargopoint2.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a
                                                        href="images/websites/cargopoint3.png"><img
                                                            src="images/websites/cargopoint3.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                            </div>
                                            <ol class="flex-control-nav flex-control-paging">
                                                <li><a href="images/websites/cargopoint1.png"
                                                        class="">1</a></li>
                                                <li><a href="images/websites/cargopoint2.png"
                                                        class="">2</a></li>
                                                <li><a href="images/websites/cargopoint3.png"
                                                        class="flex-active">3</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/websites/cargopoint1.png"
                                            class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/websites/cargopoint2.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/bdtech3.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/cargopoint1.png"
                                            class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('single.portfolio',4)}}">Cargo Point BD</a></h3>
                                    <span>Cargo Services
                                        </span>
                                </div>
                            </article>
                            <article data-animate="bounceInLeft" id="roll" class="portfolio-item pf-illustrations pf-icons" style="position: absolute; left: 770px; top: 739px;">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider" style="height: 277.5px;">
                                            <div class="slider-wrap">
                                                <div class="slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                                                    data-thumb-alt=""><a href="images/websites/realstate1.png"><img
                                                            src="images/websites/realstate1.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/realstate2.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                                <div class="slide flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><a
                                                        href="images/websites/realstate1.png"><img
                                                            src="images/websites/realstate3.png" alt="Bridge Side"
                                                            draggable="false"></a></div>
                                            </div>
                                            <ol class="flex-control-nav flex-control-paging">
                                                <li><a href="images/websites/realstate1.png"
                                                        class="">1</a></li>
                                                <li><a href="images/websites/realstate2.png"
                                                        class="">2</a></li>
                                                <li><a href="images/websites/realstate3.png"
                                                        class="flex-active">3</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="images/websites/realstate1.png"
                                            class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/websites/realstate2.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/realstate3.png"
                                            class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="images/websites/realstate1.png"
                                            class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{route('single.portfolio',1)}}">Orchid Design & Development</a></h3>
                                    <span>Real State | Builder
                                        </span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

            <div class="clear"></div>

                <div class="section nomargin noborder" style="background-image: url('images/parallax/3.jpg');">
                    <div class="heading-block center nobottomborder nobottommargin">
                        <h2>"Everything is designed, but some things are designed well."</h2>
                    </div>
                </div>
                {{-- <div class="section parallax full-screen dark nomargin noborder" style="background-image: url('images/parallax/home/10.jpg');"
                    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                    <div class="vertical-middle">
                        <div class="container clearfix">
                            <div class="col_three_fifth nobottommargin">
                                <iframe src="http://player.vimeo.com/video/101666580" width="500" height="281"
                                    frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <div class="col_two_fifth col_last nobottommargin">
                                <div class="emphasis-title">
                                    <h2>Embedded Videos</h2>
                                    <p class="lead topmargin-sm">Show off your Vimeo &amp; Videos in style and with a
                                        perfect aspect ratio.</p>
                                </div>
                                <a href="#" class="button button-border button-rounded button-light button-large">Go to
                                    Vimeo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section parallax dark nomargin noborder" style="padding: 150px 0; background-image: url('images/parallax/home/5.jpg');"
                    data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                    <div class="container center clearfix">
                        <div class="emphasis-title">
                            <h2>Perfect tool for Customization</h2>
                            <p class="lead topmargin-sm">Create as much unique content as you want with this Template
                                which has powerful &amp; optimized code.</p>
                        </div>
                        <a href="#" class="button button-border button-rounded button-light button-large">Start
                            Browsing</a>
                        <a href="#" class="button button-rounded button-white button-light button-large">Buy Now</a>
                    </div>
                </div> --}}
            </div>
        </section>

    @include('footer')
    </div>

    <div id="gotoTop" class="icon-angle-up"></div>

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
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <script src="js/functions.js"></script>
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jan 2019 06:14:27 GMT -->

</html>