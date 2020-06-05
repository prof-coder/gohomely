 <footer class="footer">
            <div class="container">
                <!-- Foot Top Starts -->
                <div class="foot-top row">
                    <!-- Foot Block Starts -->
                    <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                        <div>
                            <div class="foot-logo"><img src="{{ Setting::get('site_logo',asset('assets/user/img/logo.png'))}}"></div>
                        </div>
                    </div>
                    <!-- Foot Block Ends -->
                    <!-- Foot Block Starts -->
                    <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                        <h5 class="foot-tit">Quick Links</h5>
                        <div>
                            <a href="{{url('/')}}" class="foot-item">Careers</a>
                            <a href="{{url('/aboutus')}}" class="foot-item">About Us</a>
                            <a href="{{url('/')}}" class="foot-item">goHomely Blog</a>
                             <a href="{{url('/')}}" class="foot-item">FAQ</a>
                            <a href="{{url('terms')}}" class="foot-item">Terms &amp; Conditions</a>
                            <a href="{{url('/privacy')}}" class="foot-item">Privacy Policy</a>
                           
                        </div>
                    </div>
                    <!-- Foot Block Ends -->
                      <!-- Foot Block Starts -->
                    <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                     <a href="{{url('/chef')}}" class="foot-item"> 
                        <h5 class="foot-tit">Chef Login</h5>
                            <div>
                                <img src="{{ asset('assets/user/img/chef.png')}}" >
                            </div>
                        </a>
                    </div>
                    <!-- Foot Block Ends -->
                    <!-- Foot Block Starts -->
                    <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                    <h5 class="foot-tit">Like Us</h5>
                    <div class="fb-like-box fb_iframe_widget"  data-href="https://www.facebook.com/gohomely" data-width="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=350&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgohomely&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=true&amp;stream=false&amp;width=300"><span style="vertical-align: bottom; width: 300px; height: 181px;"><iframe name="f2a77595a625234" width="300px" height="1000px" data-testid="fb:like_box Facebook Social Plugin" title="fb:like_box Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.3/plugins/like_box.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3b59b9211a782%26domain%3Dwww.gohomely.com%26origin%3Dhttp%253A%252F%252Fwww.gohomely.com%252Ff3f1ea77134eb3c%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=350&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgohomely&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=true&amp;stream=false&amp;width=300" style="border: none; visibility: visible; width: 300px; height: 181px;" class=""></iframe></span></div>

                    <!-- <div class="foot-download-img-sec">
                            <a href="{{Setting::get('IOS_APP_LINK')}}" class="foot-download-img"><img src="{{ asset('assets/user/img/ios-app.png')}}"></a>
                        </div>
                        <div class="foot-download-img">
                            <a href="{{Setting::get('ANDROID_APP_LINK')}}" class="foot-download-img"><img src="{{ asset('assets/user/img/android-app-trans.png')}}"></a>
                        </div> -->
                    </div>
                    <!-- Foot Block Ends -->
                  
                </div>
                <!-- Foot Top Ends -->
                <!-- Foot Bottom Starts -->
                <div class="foot-btm row">
                    <div class="col-md-4">
                        <a href="#" class="foot-social-item"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="foot-social-item"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#" class="foot-social-item"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="foot-social-item"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="copy-txt">{{Setting::get('site_copyright')}}</p>
                    </div>
                    <div class="foot-social col-md-4 text-right">
                        <a href="#" class="foot-social-item"><img src="{{ asset('assets/user/img/visa.jpg')}}" ></a>
                        <a href="#" class="foot-social-item"><img src="{{ asset('assets/user/img/master.jpg')}}" ></a>
                        <a href="#" class="foot-social-item"><img src="{{ asset('assets/user/img/discover.jpg')}}" ></a>
                        <a href="#" class="foot-social-item"><img src="{{ asset('assets/user/img/amex.jpg')}}" ></a>
                    </div>
                </div>
                <!-- Foot Bottom Ends -->
            </div>
        </footer>