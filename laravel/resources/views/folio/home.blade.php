<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav-icon.jpg" type="image/x-icon"/>
        <title>Folio Home</title>

        <!-- Icon css link -->
        <link href="../../../main/web/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../main/web/vendors/linear-icon/style.css">
        <!-- Bootstrap -->
        <link href="../../../main/web/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../main/web/vendors/animate-css/animate.css">
        <!-- Extra plugin css -->
        <link href="../../../main/web/vendors/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../../../main/web/css/style.css" rel="stylesheet">
        <!-- Responsive css-->
        <link href="../../../main/web/css/responsive.css" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- Start Pre-Loader Area-->
        <div class="loader-container circle-pulse-multiple">
			<div class="loader">
				<div id="loading-center-absolute">
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_one"></div>
                </div>
                <h2 class="l-text">B</h2>
			</div>
		</div>
        <!--End Pre-Loader Area-->
        <!--Start Search Form -->
        <div class="searchForm">
            <span class="cross-btn form_hide"><i class="lnr lnr-cross"></i></span>
           <div class="container">
                <form action="#" class="row search_row m0">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    </div>
                    <p>Input your search keywords and press Enter.</p>
                </form>
           </div>
        </div>
        <!-- End Search Form -->
        <!--======Start Off Canvas Menu =======-->
        <div class="offcanvas_menu_click">
            <div class="off_menu_inner">
                <span class="cross-btn cross"><i class="lnr lnr-cross"></i></span>
                <div class="off_menu_relative">
                    <ul>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="#">Journal</a></li>
                       <li><a href="#">in the press</a></li>
                       <li><a href="#">locations</a></li>
                       <li><a href="#">weddings</a></li>
                       <li><a href="#">portraits</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--======End Off Canvas Menu =======-->
        <!--================ First Header Area =================-->
        <header class="main_menu_area full_pad">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav menu">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-sidebar.html">Blog Left sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_dropdown"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>
        <!--================ End First Header Area =================-->
  
        <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="width:360px;">
                    <!-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-auto h-16 text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <text>Kaska</text>
                        </g>
                    </svg> -->
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                      <!-- to hide the path, it is usually wrapped in a <defs> element -->
                      <!-- <defs> -->
                      <g color="green">
                      <path id="placeholder" fill="none" stroke="red"
                            d="M10,90 Q90,90 90,45 Q90,10 50,10 Q10,10 10,40 Q10,70 45,70 Q70,70 75,50" />
                      <!-- </defs> -->
                      <text>
                        <textPath href="#placeholder">
                          Seek justice. Love mercy. Walk humbly with your G'd.
                        </textPath>
                      </text>
                     </g>
                    </svg>
                </div>

                <!--================ Start Slider Area =================-->
                <section class="main_slider nav-space">
                    <div class="slider_bg_inner">
                        <div class="slider_bg owl-carousel">
                            <div class="item">
                                <img src="img/home-slider/slider-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/home-slider/slider-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="text_slider_area">
                        <div class="container">
                            <div class="text_slider_inner">
                                <div class="text_slider owl-carousel">
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                    <div class="item">
                                        <h2><span>Fashion Piszmog</span>Megszentségteleníthetetlenségeskedéseitekért.</h2>
                                    </div>
                                </div>
                                <div class="home_screen_nav">
                                    <i class="fa fa-angle-left testi_prev" aria-hidden="true"></i>
                                    <i class="fa fa-angle-right testi_next" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvus_menu">
                        <div class="lang-n">
                            <a href="#" class="active">EN</a>
                            <a href="#">RO</a>
                        </div>
                        <div class="nav-button">
                            <div class="nav_inner">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-official"></i></a></li>
                        </ul>
                    </div>
                </section>
                <!--================End Slider Header Area =================-->
                
                <div class="mt-8 overflow-hidden bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg font-semibold leading-7"><a href="https://laravel-news.com/" class="text-gray-900 underline dark:text-white">Folio </a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg font-semibold leading-7"><a href="../folio/main" class="text-gray-900 underline dark:text-white">Folio </a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-sm text-center text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 -mt-px text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 ml-4 -mt-px text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-sm text-center text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>

                <!--================Footer Area =================-->
                <footer class="footer_area full_pad">
                    <div class="footer_bg footer-padtop">
                        <div class="container">
                            <!-- <div class="footer_instagram_area">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="instagram_list" id="instafeed"></ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="follow_me_inner">
                                            <h3>Follow Me On <br /> Instagram</h3>
                                            <div class="instagram_box">
                                                <div class="instagram_box_inner">
                                                    <h4>@Stddef.</h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <ul class="instagram_list" id="instafeed2"></ul>
                                    </div>
                                </div>
                            </div> -->
                            <div class="footer_copyright">
                                <h6>Copyright © 2015-2021 <a href="#">Miskolczi</a></h6>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--================End Footer Area =================-->
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../../main/web/js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../../main/web/js/bootstrap.min.js"></script>
        <!-- Extra Plugin js -->
        <script src="../../../main/web/vendors/owlcarousel/owl.carousel.min.js"></script>
        <script src="../../../main/web/vendors/scroll-bar/smooth-scroll.min.js"></script>
        <!-- Instafeed -->
        <script src="../../../main/web/vendors/instafeed/instafeed.min.js"></script>
        <script src="../../../main/web/vendors/instafeed/script.js"></script>
        
        <script src="../../../main/web/js/theme.js"></script>
    </body>
</html>
