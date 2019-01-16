        <header id="header" class="full-header">
            <div id="header-wrap" class="">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <div id="logo">
                        <a href="{{url('/')}}" class="standard-logo"
                            data-dark-logo="images/logo-dark.png"><img src="{{asset('images/logo/bdsoftit_logo_1.gif')}}"
                                alt="Canvas Logo"></a>
                        <a href="http://themes.semicolonweb.com/html/canvas/index.html" class="retina-logo"
                            data-dark-logo="images/logo-dark@2x.png"><img src="./Portfolio Single - Gallery Full Width _ Canvas_files/logo@2x.png"
                                alt="Canvas Logo"></a>
                    </div>

                    <nav id="primary-menu">
                        <ul>
                            <li class="current"><a href="index-2.html">
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
                                                <img src="{{asset('images/wd.jpg')}}" class="navimg">
                                        </div>
                                    </div>          
                                </ul>                            
                            </li>
                            <li><a href="#">
                                    <div>Web Hosting</div>
                                </a>
                                <ul style="width: 400px;" class="dropdown-menu" role="menu">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <li><a href="{{url('/hosting')}}">pakage 1</a>
                                            </li>
                                            <li><a href="{{url('/hosting')}}">pakage 2</a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                                <img src="{{asset('images/wd.jpg')}}">
                                        </div>
                                    </div>            
                                </ul>                            
                            </li>
                            <li><a href="#">
                                    <div>About us</div>
                                </a>
                            </li>
                        </ul>

                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </header>