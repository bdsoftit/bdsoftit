<!DOCTYPE html>
<!-- saved from url=(0077)http://themes.semicolonweb.com/html/canvas/portfolio-single-gallery-full.html -->
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
    <title>Portfolio | BD Soft IT</title>
    <link rel="shortcut icon" href="{{asset('/images/logo/bdsoftit_logo.png')}}" />
    <style id="fit-vids-style">
    #page-title {
     padding: 0; 
    background-color: #f5f5f5;
     border-bottom: 0px solid #eee; 
}
        .fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}
    </style>
</head>

<body class="stretched device-xl" cz-shortcut-listen="true">

    <div id="wrapper" class="clearfix" style="opacity: 1; animation-duration: 1500ms;">

    @include('header')

        <section id="page-title">
            <div class="container clearfix">
                <h1 style="text-align: center;">{{$data->name}}</h1>
                
            </div>
        </section>

        <section id="content" style="margin-bottom: 0px;">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div style="bottom: 40px;" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="{{asset('images/websites/').'/'.$image[0]}}" alt="1ST IMG">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('images/websites/').'/'.$image[1]}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('images/websites/').'/'.$image[2]}}" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <div style="" class="col_one_third nobottommargin ">
                    <br><br><br>
                        <div class="card events-meta">
                            <div class="card-body">
                                <ul class="portfolio-meta nobottommargin">
                                    <li><span><i class="icon-user"></i>Created by:</span> BD Soft It</li>
                                    <li><span><i class="icon-calendar3"></i>Time Period:</span> 15 Days</li>
                                    <li><span><i class="icon-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div class="col_two_third portfolio-single-content col_last nobottommargin">

                        <div class="fancy-title title-dotted-border">
                            <h2>{{$data->name}}</h2>
                        </div>
                        <div class="col_half nobottommargin">
                            <p style="text-align: justify;">{{$data->description}}</p>
                        </div>
                        <div class="col_half col_last nobottommargin ">
                            <p class="badge badge-success">{{$data->category}}</p>
                        </div>

                    </div>
                    <div class="clear"></div>
                    <div class="divider divider-center"><i class="icon-circle"></i></div>

                    <section id="page-title">
                        <div class="container clearfix">
                            <h3 class="animated zoomIn" style="text-align: center;color: green;">Feature of This Project</h3>
                            
                        </div>
                    </section><br><br>

                    <div class="row">
                        <div class="col-md-4">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                    <img height="200" width="317" src="{{asset('images/websites/').'/'.$image[3]}}" alt="">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                      DropDown Menu In Admin Panel <span style="margin-left: 60px"><i class="fa fa-chevron-down"></i></span> 
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="card-body">
                                    admin panel is a must have for web applications like e-commerce projects or content management systems, known as CMS, and these beautiful panels are full of features created to make your life easier. 
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <img height="200" width="317" src="{{asset('images/websites/').'/'.$image[4]}}" alt="">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Easy Integrated Action Button <span style="margin-left: 60px"><i class="fa fa-chevron-down"></i></span> 
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="card-body">
                                    Action buttons are built-in shapes you can add to a presentation and set to link to another slide, play a sound, or perform a similar action. When someone clicks or hovers over the button, the selected action will occur. 
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="headingThree">
                                    <img height="200" width="317" src="{{asset('images/websites/').'/'.$image[5]}}" alt="">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      DropDown Admin Profile <span style="margin-left: 60px"><i class="fa fa-chevron-down"></i></span> 
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                  <div class="card-body">
                                    admin panel is a must have for web applications like e-commerce projects or content management systems, known as CMS, and these beautiful panels are full of features created to make your life easier. 
                                  </div>
                                </div>
                              </div>
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