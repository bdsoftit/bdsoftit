        <footer id="footer" class="dark">
            <div class="container">

                <div class="footer-widgets-wrap clearfix">
                    <div class="col_two_third">
                        <div class="col_one_third">
                            <div class="widget clearfix">
                                <img height="50" width="50" src="{{asset('images/logo/bdsoftit_logo.png')}}" alt="" class="footer-logo">
                                <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong>
                                    Design Standards and Development</p>
                                <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Headquarters:</strong><br>
                                        Mohammadpur,Dhaka <br>
                                         Bangladesh<br>
                                    </address>
                                    
                                    <abbr title="Fax"><strong>phone:</strong></abbr>(+88) 01400883400<br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third">

                        </div>
                        <div class="col_one_third col_last">
                            <div class="widget widget_links clearfix">
                                <i class="fa fa-link fa-4x"></i><br><br>
                                <ul>
                                    <li><a href="{{url('/hosting')}}">Web Hosting</a></li>
                                    <li><a href="{{url('/hosting/email')}}">Email Hosting</a></li>
                                    <li><a href="{{url('/hosting/cloud')}}">Cloud Hosting</a></li>
                                    <li><a href="{{url('/contact')}}">Domain Registration</a></li>
                                    <li><a href="{{url('/web-application')}}">Web Application Development</a></li>
                                    <li><a href="{{url('/web-design')}}">Web Design</a></li>
                                    <li><a href="{{url('/contact')}}">Contact With Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                                <div class="col-lg-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="50" data-to="5065421"
                                            data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Total Hits</h5>
                                </div>
                                <div class="col-lg-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="100" data-to="105"
                                            data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Clients</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline" method="get" action="{{route('subscribe')}}">
                                    @csrf
                                  <label class="sr-only" for="inlineFormInputGroupUsername2">E-mail</label>
                                  <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-telegram"></i></div>
                                    </div>
                                    <input name="email" type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="E-mail">
                                  </div>
                                  <button type="submit" class="btn btn-success mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                                <div class="col-lg-6 clearfix bottommargin-sm">
                                    <a href="https://facebook.com/bdsoftitcom" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="https://facebook.com/bdsoftitcom"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                            Facebook</small></a>
                                </div>
                                <div class="col-lg-6 clearfix">
                                    <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-linkedin"></i>
                                        <i class="icon-linkedin"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                            RSS Feeds</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        Copyrights &copy; {{ now()->year }} All Rights Reserved by BD Soft IT<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>
                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="https://facebook.com/bdsoftitcom" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="https://twitter.com/bdsoftit" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>
                        <div class="clear"></div>
                        
                        <span class="middot">&middot;</span> <i class="icon-headphones"></i> (+88) 01400883400 <span
                            class="middot">&middot;</span> <i class="icon-skype2"></i> BD Soft It OnSkype
                    </div>
                </div>
            </div>
        </footer>