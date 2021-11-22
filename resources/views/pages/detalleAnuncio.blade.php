<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>Pasionreal</title>
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="images/logo/logoPassionReal.jpeg" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/et-line-fonts.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/forest-menu.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css">
    <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
    <link href="{{asset('css/nouislider.min.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
    <link href="{{asset('css/slider.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="skins/minimal/minimal.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
    <link href="{{asset('css/responsive-media.css')}}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="color" href="{{asset('css/colors/defualt.css')}}">
    <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
    <!-- JavaScripts -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
    {{-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> --}}
    <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
    {{-- <div class="color-switcher" id="choose_color">
        <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
        <h5>STYLE SWITCHER</h5>
        <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
                <li>
                    <a href="#." class="defualt" id="defualt"></a>
                </li>
                <li>
                    <a href="#." class="green" id="green"></a>
                </li>
                <li>
                    <a href="#." class="blue" id="blue"></a>
                </li>
                <li>
                    <a href="#." class="red" id="red"></a>
                </li>

                <li>
                    <a href="#." class="sea-green" id="sea-green"></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"> </div>
    </div> --}}
    <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
    {{-- <div class="colored-header">
        <!-- Top Bar -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Top Left -->
                    <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                        <ul class="listnone">
                            <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                            <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"
                                        aria-hidden="true"></i> Language <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Swedish</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Russian</a></li>
                                    <li><a href="#">chinese</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Top Right Social -->
                    <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                        <div class="pull-right">
                            <ul class="listnone">
                                <li><a href="login.html"><i class="fa fa-sign-in"></i> Log in</a></li>
                                <li><a href="register.html"><i class="fa fa-unlock" aria-hidden="true"></i>
                                        Register</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male"
                                            aria-hidden="true"></i> Umair <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.html">User Profile</a></li>
                                        <li><a href="profile-2.html">User Profile 2</a></li>
                                        <li><a href="archives.html">Archives</a></li>
                                        <li><a href="active-ads.html">Active Ads</a></li>
                                        <li><a href="pending-ads.html">Pending Ads</a></li>
                                        <li><a href="favourite.html">Favourite Ads</a></li>
                                        <li><a href="messages.html">Message Panel</a></li>
                                        <li><a href="deactive.html">Account Deactivation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- Navigation Menu -->
        <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="index.html"><img src="{{asset('images/logo.png" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li>
                                    <a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <div class="drop-down grid-col-8">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="index.html">Home 1 - Default </a></li>
                                                    <li><a href="index-transparent.html">Home 2 (Transparent)</a></li>
                                                    <li><a href="index-2.html">Home 3 (Variation)</a></li>
                                                    <li><a href="index-3.html">Home 4 (Master Slider)</a></li>
                                                </ul>
                                            </div>
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="index-4.html">Home 5 (With Map Listing)</a></li>
                                                    <li><a href="index-5.html">Home 6 (Modern Style)</a></li>
                                                    <li><a href="index-6.html">Home 7 (Variation)</a></li>
                                                    <li><a href="index-7.html">Home 8 (Category Slider)</a></li>
                                                </ul>
                                            </div>
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="index-10.html">Home 11 (Modern Home)</a></li>
                                                    <li><a href="index-8.html">Home 9 (Landing Page)</a></li>
                                                    <li><a href="index-9.html">Home 10 (Variation)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Listing <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li>
                                            <a href="javascript:void(0)">Grid Style<i
                                                    class="fa fa-angle-right fa-indicator"></i> <span
                                                    class="label label-info">New</span></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="listing.html">Listing Grid 1</a></li>
                                                <li><a href="listing-1.html">Listing Grid 2</a></li>
                                                <li><a href="listing-2.html">Listing Grid 3</a></li>
                                                <li><a href="listing-7.html">Listing Featured <span
                                                            class="label label-info">New</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">List Style<i
                                                    class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="listing-3.html">List View 1</a></li>
                                                <li><a href="listing-4.html">List View 2</a></li>
                                                <li><a href="listing-5.html">List View 3</a></li>
                                                <li><a href="listing-6.html">List View 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Single Ad<i
                                                    class="fa fa-angle-right fa-indicator"></i> <span
                                                    class="label label-info">New</span></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                                <li><a href="single-page-listing-featured.html">Ad (Featured) <span
                                                            class="label label-info">New</span></a></li>
                                                <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                                <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                                <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="icons.html">Classified Icons </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Categories <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">

                                        <li><a href="category-2.html">Modern Variation</a></li>
                                        <li><a href="category-3.html">Minimal Variation</a></li>
                                        <li><a href="category-4.html">Fancy Variation</a></li>

                                        <li><a href="category-6.html">Flat Variation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Dashboard <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="profile.html">User Profile</a></li>
                                        <li><a href="profile-2.html">User Profile 2</a></li>
                                        <li><a href="archives.html">Archives</a></li>
                                        <li><a href="active-ads.html">Active Ads</a></li>
                                        <li><a href="pending-ads.html">Pending Ads</a></li>
                                        <li><a href="favourite.html">Favourite Ads</a></li>
                                        <li><a href="messages.html">Message Panel</a></li>
                                        <li><a href="deactive.html">Account Deactivation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down full width -->
                                    <div class="drop-down grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 2-->
                                            <div class="grid-col-3">
                                                <h4>Blog</h4>
                                                <ul>
                                                    <li><a href="blog.html">Blog With Right Sidebar</a></li>
                                                    <li><a href="blog-1.html">Blog With Masonry Style</a></li>
                                                    <li><a href="blog-2.html">Blog Without Sidebar</a></li>
                                                    <li><a href="blog-details.html">Single Blog </a></li>
                                                    <li><a href="blog-details-1.html">Single Blog (Adsense) </a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->
                                            <div class="grid-col-3">
                                                <h4>Miscellaneous</h4>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="cooming-soon.html">Comming Soon</a></li>
                                                    <li><a href="elements.html">Shortcodes</a></li>
                                                    <li><a href="error.html">404 Page</a></li>
                                                    <li><a href="faqs.html">FAQS</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->

                                            <div class="grid-col-3">
                                                <h4>Others</h4>
                                                <ul>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="site-map.html">Site Map</a></li>
                                                    <li><a href="post-ad-1.html">Post Ad</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->
                                            <div class="grid-col-3">
                                                <h4>Detail Page</h4>
                                                <ul>
                                                    <li><a href="post-ad-2.html">Post Ad 2</a></li>
                                                    <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                                    <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                                    <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a>
                                                    </li>
                                                    <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 2-->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Drop Down <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="#">Item one</a></li>
                                        <li>
                                            <a href="javascript:void(0)">Items Right Side <i
                                                    class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-buysellads"></i> Level
                                                        2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-dashcube"></i> Level 2
                                                        <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level
                                                        2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-medium"></i> Level 2
                                                        <i class="fa fa-angle-right fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-leanpub"></i> Level 2
                                                        <i class="fa fa-angle-right fa-indicator"></i> </a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Item 2</a></li>
                                        <li>
                                            <a href="javascript:void(0)">Items Left Side <i
                                                    class="fa fa-angle-left fa-indicator"></i> </a>
                                            <!-- add class left-side -->
                                            <ul class="drop-down-multilevel left-side">
                                                <li>
                                                    <a href="#"> <i class="fa fa-forumbee"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-hotel"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-automobile"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level
                                                        2 <i class="fa fa-plus fa-indicator"></i> </a>
                                                    <!--drop down second level-->
                                                    <ul class="drop-down-multilevel">
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-bookmark"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-bell"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-life-ring"></i> Level 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Item 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact </a></li>
                            </ul>
                            <ul class="menu-search-bar">
                                <li>
                                    <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus"
                                            aria-hidden="true"></i> Post Free Ad</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div> --}}
    @include('templates.header2')
    <!-- Navigation Menu End -->
    <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page">
                        <h1>Detalle del anuncio</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Small Breadcrumb -->
    <div class="small-breadcrumb">
        <div class="container">
            <div class=" breadcrumb-link">
                <ul>
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><a href="{{url('/detalle/'.$anuncio->id)}}">Detalles de anuncio</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Small Breadcrumb -->
    <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
        <section class="section-padding error-page pattern-bgs gray ">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-8 col-xs-12 col-sm-12">
                        <!-- Single Ad -->
                        <div class="single-ad">
                            <!-- Ad Slider -->
                            <div class="owl-carousel owl-theme single-details">
                                <!-- Slide -->
                                <div class="item"><img src="{{asset('storage/'.$anuncio->foto)}}" alt=""></div>
                                <!-- Slide -->
                                <div class="item"><img src="{{asset('storage/'.$anuncio->foto)}}" alt=""></div>
                                <!-- Slide -->
                                <div class="item"><img src="{{asset('storage/'.$anuncio->foto)}}" alt=""></div>
                                <!-- Slide -->
                                <div class="item"><img src="{{asset('storage/'.$anuncio->foto)}}" alt=""></div>
                            </div>
                            <!-- Short Description  -->
                            <div class="ad-box">
                                <div class="ad-title clearfix">
                                    <h2><a href="#"> {{$anuncio->titulo}} </a> </h2>
                                </div>
                                <div class="short-features">
                                    <!-- Heading Area -->
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            Información del anuncio
                                        </h3>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Nombre:</strong> :</span> {{$anuncio->user->name}}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Ciudad:</strong> :</span> {{$anuncio->ciudad}}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Edad:</strong> :</span> {{$anuncio->edad}}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Tlfn:</strong>:</span> {{$anuncio->telefono}}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Fecha:</strong> :</span> {{$anuncio->created_at}}
                                    </div>
                                </div>
                                <!-- Short Features  -->
                               {{--  <div class="desc-points">
                                    <ul>
                                        <li>
                                            Premium Alloy Choke (Reduces 70% core loss compared to iron powder choke).
                                        </li>
                                        <li>
                                            Supports 5th Generation Intel Core i7/i5/i3.
                                        </li>
                                        <li>
                                            Solid Capacitor design, Digi Power .
                                        </li>
                                        <li>
                                            Supports Dual Channel DDR3/DDR3L 1600.
                                        </li>
                                        <li>
                                            1 PCIe 3.0 x16, 1 PCIe 2.0 x16, 2 PCI .
                                        </li>
                                        <li>
                                            Supports AMD Quad CrossFireX and CrossFireX.
                                        </li>
                                        <li>
                                            Graphics Output Options: D-Sub, DVI-D, HDMI.
                                        </li>
                                        <li>
                                            Supports Triple Monitor.
                                        </li>
                                        <li>
                                            7.1 CH HD Audio with Content Protection (Realtek ALC892 Audio Codec), ELNA
                                            Audio Caps.
                                        </li>
                                    </ul>
                                </div> --}}
                                <!-- Related Image  -->
                              {{--   <div class="ad-related-img">
                                    <img src="{{asset('images/asrock-diagram.jpg')}}" alt="" class="img-responsive center-block">
                                </div> --}}
                                <!-- Ad Specifications -->
                                <div class="specification">
                                    <!-- Heading Area -->
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                           Descripción
                                        </h3>
                                    </div>
                                    <p>

                                        {{$anuncio->descripcion}}
                                          </p>
                                 


                                </div>
                                <div class="clearfix"></div>
                                <!-- Heading Area -->
                              {{--   <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        Location
                                    </h3>
                                </div>
                                <div id="itemMap"></div> --}}
                                <div class="clearfix"></div>
                            </div>
                            <!-- Share Ad  -->
                            <div class="ad-share text-center">
                                <div data-toggle="modal" data-target=".share-ad"
                                    class="ad-box col-md-4 col-sm-4 col-xs-12">
                                    <i class="fa fa-whatsapp"></i> <span class="hidetext">Compartir</span>
                                </div>
                                <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="#"><i
                                        class="fa fa-phone active"></i> <span class="hidetext">Compartir</span></a>
                                <div data-target=".report-quote" data-toggle="modal"
                                    class="ad-box col-md-4 col-sm-4 col-xs-12">
                                    <i class="fa fa-warning"></i> <span class="hidetext">Reportar</span>
                                </div>
                            </div>
                           {{--  <div class="clearfix"></div> --}}
                            <!-- Price Alert -->
                            {{-- <div class="alert-box-container  margin-top-30">
                                <div class="well">
                                    <h3>Create Alert</h3>
                                    <p>Receive emails for the latest ads matching your search criteria</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 col-xs-12 col-sm-12">
                                                <input placeholder="Enter Your Email " type="text"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <select class="alerts">
                                                    <option value="1">Daily</option>
                                                    <option value="7">Weekly</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                <input class="btn btn-theme btn-block" value="Submit" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <!-- Price Alert End -->
                            <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                            {{-- <div class="grid-panel margin-top-30">
                                <div class="heading-panel">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <h3 class="main-title text-left">
                                            Related Ads
                                        </h3>
                                    </div>
                                </div>
                                <!-- Ads Archive -->
                                <div class="posts-masonry">
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <!-- Ads Listing -->
                                        <div class="ads-list-archive">
                                            <!-- Image Block -->
                                            <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                                <!-- Img Block -->
                                                <div class="ad-archive-img">
                                                    <a href="#">
                                                        <div class="ribbon popular"></div>
                                                        <img class="img-responsive" src="{{asset('images/posting/10.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <!-- Img Block -->
                                            </div>
                                            <!-- Ads Listing -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <!-- Content Block -->
                                            <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                                <!-- Ad Desc -->
                                                <div class="ad-archive-desc">
                                                    <!-- Price -->
                                                    <div class="ad-price">$38,000</div>
                                                    <!-- Title -->
                                                    <h3>2013 BMW M3 GTR </h3>
                                                    <!-- Category -->
                                                    <div class="category-title"> <span><a href="#">Car &
                                                                Bikes</a></span> </div>
                                                    <!-- Short Description -->
                                                    <div class="clearfix visible-xs-block"></div>
                                                    <p class="hidden-sm">Lorem ipsum dolor sit amet, quem
                                                        convenire interesset ut vix, maiestatis inciderint no, eos in
                                                        elit dicat.....</p>
                                                    <!-- Ad Features -->
                                                    <ul class="add_info">
                                                        <!-- Contact Details -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Call Timings</h4>
                                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Address -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-map-marker"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Address</h4>
                                                                    Musee du Louvre, 75058 Paris - France
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-cog"></i></span>
                                                                <div class="tooltip-content">
                                                                    <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span> </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                                <div class="tooltip-content"> <strong>Warrinty</strong>
                                                                    <span class="label label-danger">No </span> </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- Ad History -->
                                                    <div class="clearfix archive-history">
                                                        <div class="last-updated">Last Updated: 1 day ago</div>
                                                        <div class="ad-meta"> <a class="btn save-ad"><i
                                                                    class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                                class="btn btn-success"><i class="fa fa-phone"></i>
                                                                View Details.</a> </div>
                                                    </div>
                                                </div>
                                                <!-- Ad Desc End -->
                                            </div>
                                            <!-- Content Block End -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="ads-list-archive">
                                            <!-- Image Block -->
                                            <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                                <!-- Img Block -->
                                                <div class="ad-archive-img">
                                                    <a href="#">
                                                        <div class="ribbon popular"></div>
                                                        <img class="img-responsive" src="{{asset('images/posting/9.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <!-- Img Block -->
                                            </div>
                                            <!-- Ads Listing -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <!-- Content Block -->
                                            <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                                <!-- Ad Desc -->
                                                <div class="ad-archive-desc">
                                                    <!-- Price -->
                                                    <div class="ad-price">$500</div>
                                                    <!-- Title -->
                                                    <h3>Honda Civic 2017 Sports Edition</h3>
                                                    <!-- Category -->
                                                    <div class="category-title"> <span><a href="#">Car &
                                                                Bikes</a></span> </div>
                                                    <!-- Short Description -->
                                                    <div class="clearfix visible-xs-block"></div>
                                                    <p class="hidden-sm">Lorem ipsum dolor sit amet, quem
                                                        convenire interesset ut vix, maiestatis inciderint no, eos in
                                                        elit dicat.....</p>
                                                    <!-- Ad Features -->
                                                    <ul class="add_info">
                                                        <!-- Contact Details -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Call Timings</h4>
                                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Address -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-map-marker"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Address</h4>
                                                                    Musee du Louvre, 75058 Paris - France
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-cog"></i></span>
                                                                <div class="tooltip-content">
                                                                    <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span> </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                                <div class="tooltip-content"> <strong>Warrinty</strong>
                                                                    <span class="label label-danger">No </span> </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- Ad History -->
                                                    <div class="clearfix archive-history">
                                                        <div class="last-updated">Last Updated: 1 day ago</div>
                                                        <div class="ad-meta"> <a class="btn save-ad"><i
                                                                    class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                                class="btn btn-success"><i class="fa fa-phone"></i>
                                                                View Details.</a> </div>
                                                    </div>
                                                </div>
                                                <!-- Ad Desc End -->
                                            </div>
                                            <!-- Content Block End -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="ads-list-archive">
                                            <!-- Image Block -->
                                            <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                                <!-- Img Block -->
                                                <div class="ad-archive-img">
                                                    <a href="#">
                                                        <div class="ribbon popular"></div>
                                                        <img class="img-responsive" src="{{asset('images/posting/2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <!-- Img Block -->
                                            </div>
                                            <!-- Ads Listing -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <!-- Content Block -->
                                            <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                                <!-- Ad Desc -->
                                                <div class="ad-archive-desc">
                                                    <!-- Price -->
                                                    <div class="ad-price">$449</div>
                                                    <!-- Title -->
                                                    <h3>Sony Cyber-shot 20.2-Megapixel</h3>
                                                    <!-- Category -->
                                                    <div class="category-title"> <span><a href="#">Art & Toys
                                                            </a></span> </div>
                                                    <!-- Short Description -->
                                                    <div class="clearfix visible-xs-block"></div>
                                                    <p class="hidden-sm">Lorem ipsum dolor sit amet, quem
                                                        convenire interesset ut vix, maiestatis inciderint no, eos in
                                                        elit dicat.....</p>
                                                    <!-- Ad Features -->
                                                    <ul class="add_info">
                                                        <!-- Contact Details -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Call Timings</h4>
                                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Address -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-map-marker"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Address</h4>
                                                                    Musee du Louvre, 75058 Paris - France
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-cog"></i></span>
                                                                <div class="tooltip-content">
                                                                    <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span> </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                                <div class="tooltip-content"> <strong>Warrinty</strong>
                                                                    <span class="label label-danger">No </span> </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- Ad History -->
                                                    <div class="clearfix archive-history">
                                                        <div class="last-updated">Last Updated: 1 day ago</div>
                                                        <div class="ad-meta"> <a class="btn save-ad"><i
                                                                    class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                                class="btn btn-success"><i class="fa fa-phone"></i>
                                                                View Details.</a> </div>
                                                    </div>
                                                </div>
                                                <!-- Ad Desc End -->
                                            </div>
                                            <!-- Content Block End -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="ads-list-archive">
                                            <!-- Image Block -->
                                            <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                                <!-- Img Block -->
                                                <div class="ad-archive-img">
                                                    <a href="#"> <img class="img-responsive" src="{{asset('images/posting/1.jpg')}}"
                                                            alt=""> </a>
                                                </div>
                                                <!-- Img Block -->
                                            </div>
                                            <!-- Ads Listing -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <!-- Content Block -->
                                            <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                                <!-- Ad Desc -->
                                                <div class="ad-archive-desc">
                                                    <!-- Price -->
                                                    <div class="ad-price">$350</div>
                                                    <!-- Title -->
                                                    <h3>Sony Xperia Z5 Waterproof</h3>
                                                    <!-- Category -->
                                                    <div class="category-title"> <span><a href="#">Mobiles</a></span>
                                                    </div>
                                                    <!-- Short Description -->
                                                    <div class="clearfix visible-xs-block"></div>
                                                    <p class="hidden-sm">Lorem ipsum dolor sit amet, quem
                                                        convenire interesset ut vix, maiestatis inciderint no, eos in
                                                        elit dicat.....</p>
                                                    <!-- Ad Features -->
                                                    <ul class="add_info">
                                                        <!-- Contact Details -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-phone"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Call Timings</h4>
                                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                                    <br> <strong>Sunday</strong> <span
                                                                        class="label label-success">+92-123-4567</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Address -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-map-marker"></i></span>
                                                                <div class="tooltip-content">
                                                                    <h4>Address</h4>
                                                                    Musee du Louvre, 75058 Paris - France
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-cog"></i></span>
                                                                <div class="tooltip-content">
                                                                    <strong>Condition</strong> <span
                                                                        class="label label-danger">Used</span> </div>
                                                            </div>
                                                        </li>
                                                        <!-- Ad Type -->
                                                        <li>
                                                            <div class="custom-tooltip tooltip-effect-4">
                                                                <span class="tooltip-item"><i
                                                                        class="fa fa-check-square-o"></i></span>
                                                                <div class="tooltip-content"> <strong>Warrinty</strong>
                                                                    <span class="label label-danger">No </span> </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- Ad History -->
                                                    <div class="clearfix archive-history">
                                                        <div class="last-updated">Last Updated: 1 day ago</div>
                                                        <div class="ad-meta"> <a class="btn save-ad"><i
                                                                    class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                                class="btn btn-success"><i class="fa fa-phone"></i>
                                                                View Details.</a> </div>
                                                    </div>
                                                </div>
                                                <!-- Ad Desc End -->
                                            </div>
                                            <!-- Content Block End -->
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->

                            <!-- =-=-=-=-=-=-= Comments Section =-=-=-=-=-=-= -->
                            {{-- <div class="comment-section ad-box">
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        Comments (20)
                                    </h3>
                                </div>
                                <ol class="comment-list">
                                    <!-- comment-list    -->
                                    <li class="comment">
                                        <div class="comment-info">
                                            <img class="pull-left hidden-xs img-circle" src="{{asset('images/blog/c1.png')}}"
                                                alt="author">
                                            <div class="author-desc">
                                                <div class="author-title">
                                                    <strong>Curt Alex</strong>
                                                    <ul class="list-inline pull-right">
                                                        <li><a href="#">22 Feb 2017</a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>You wanna be where everyboody knows Your name. And a we knooow
                                                    Flipper lives in a world full of wonder flying there-under under the
                                                    sea creepy and kooky</p>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="comment">
                                                <div class="comment-info">
                                                    <img class="pull-left hidden-xs img-circle"
                                                        src="{{asset('images/blog/c2.png')}}" alt="author">
                                                    <div class="author-desc">
                                                        <div class="author-title">
                                                            <strong>Emilly Copper</strong>
                                                            <ul class="list-inline pull-right">
                                                                <li><a href="#">22 Feb 2017</a>
                                                                </li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>
                                                                        Reply</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p>The first mate and his Skipper too this is will do their very
                                                            best to make the most others comfortable in their tropic
                                                            lives in a world of wonder.</p>
                                                    </div>
                                                </div>
                                                <!-- .comment-info -->
                                            </li>
                                        </ol>
                                        <!-- .children -->
                                    </li>
                                    <!-- comment -->
                                    <li class="comment">
                                        <div class="comment-info">
                                            <img class="pull-left hidden-xs img-circle" src="{{asset('images/blog/c3.png')}}"
                                                alt="author">
                                            <div class="author-desc">
                                                <div class="author-title">
                                                    <strong>Ricky John</strong>
                                                    <ul class="list-inline pull-right">
                                                        <li><a href="#">18 Jan 2017</a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>You wanna be where everyboody knows Your name. And a we knooow
                                                    Flipper lives in a world full of wonder flying there-under under the
                                                    sea creepy and kooky</p>
                                            </div>
                                        </div>
                                        <!-- .comment-info -->
                                    </li>
                                    <!-- .comment -->
                                </ol>
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        leave your comment
                                    </h3>
                                </div>
                                <div class="commentform">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Name <span class="required">*</span>
                                                    </label>
                                                    <input class="form-control" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Email <span class="required">*</span>
                                                    </label>
                                                    <input class="form-control" placeholder="" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Comment <span class="required">*</span>
                                                    </label>
                                                    <textarea class="form-control" placeholder="" rows="8"
                                                        cols="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 margin-top-20 clearfix">
                                                <button type="submit" class="btn btn-theme">Post Your Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <!-- =-=-=-=-=-=-= Comments Section End =-=-=-=-=-=-= -->
                        </div>
                        <!-- Single Ad End -->
                    </div>
                    <!-- Right Sidebar -->
                    <div class="col-md-4 col-xs-12 col-sm-12">
                        <!-- Sidebar Widgets -->
                        <div class="sidebar">
                            <!-- Contact info -->
                            <div class="contact white-bg">
                                <!-- Email Button trigger modal -->
                              {{--   <button class="btn-block btn-contact contactEmail" data-toggle="modal"
                                    data-target=".price-quote">Contact Seller Via Email</button> --}}
                                <!-- Email Modal -->
                                <button class="btn-block btn-contact contactPhone number"
                                    data-last="111111X">098<span>8703020</span></button>
                            </div>
                            <!-- Price info block -->
                            {{-- <div class="ad-listing-price">
                                <p>Rs. 22,000</p>
                            </div> --}}
                            <!-- User Info -->
                            <div class="white-bg user-contact-info">
                                <div class="user-info-card">
                                    {{-- <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                        <img src="{{asset('images/users/3.jpg')}}" alt="">
                                    </div> --}}
                                    <div class="user-information no-padding col-md-8 col-sm-9 col-xs-8">
                                        {{-- <span class="user-name"><a class="hover-color"
                                                href="profile.html">Sonu Monu</a></span> --}}
                                       {{--  <div class="item-date">
                                            <span class="ad-pub">Publicado: 13 agosto 2021</span><br>
                                            <a href="#" class="link"></a>
                                        </div> --}}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ad-listing-meta">
                                    <ul>
                                        <li>Id de anuncio: <span class="color">{{$anuncio->id}}</span></li>
                                        <li>Categoría: <span class="color">{{$anuncio->categoria->nombre}}</span></li>
                                        <li>Visitas: <span class="color">10</span></li>
                                        <li>Ubicación: <span class="color">{{$anuncio->ciudad}}, {{$anuncio->direccion}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Featured Ads -->
                           {{--  <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Featured Ads</a></h4>
                                </div>
                                <div class="widget-content">
                                    <div class="featured-slider-3">
                                        <!-- Featured Ads -->
                                        <div class="item">
                                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                <!-- Ad Box -->
                                                <div class="category-grid-box">
                                                    <!-- Ad Img -->
                                                    <div class="category-grid-img">
                                                        <img class="img-responsive" alt=""
                                                            src="{{asset('images/posting/car-3.jpg')}}">
                                                        <!-- Ad Status -->
                                                        <!-- User Review -->
                                                        <div class="user-preview">
                                                            <a href="#"> <img src="{{asset('images/users/2.jpg')}}"
                                                                    class="avatar avatar-small" alt=""> </a>
                                                        </div>
                                                        <!-- View Details --><a href="" class="view-details">View
                                                            Details</a>
                                                    </div>
                                                    <!-- Ad Img End -->
                                                    <div class="short-description">
                                                        <!-- Ad Category -->
                                                        <div class="category-title"> <span><a href="#">Cars</a></span>
                                                        </div>
                                                        <!-- Ad Title -->
                                                        <h3><a title="" href="single-page-listing.html">2017 Honda Civic
                                                                EX</a></h3>
                                                        <!-- Price -->
                                                        <div class="price">$18,200 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                    </div>
                                                    <!-- Addition Info -->
                                                    <div class="ad-info">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>London</li>
                                                            <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Ad Box End -->
                                            </div>
                                        </div>
                                        <!-- Featured Ads -->
                                        <div class="item">
                                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                <!-- Ad Box -->
                                                <div class="category-grid-box">
                                                    <!-- Ad Img -->
                                                    <div class="category-grid-img">
                                                        <img class="img-responsive" alt=""
                                                            src="images/posting/fur-3.jpg">
                                                        <!-- Ad Status -->
                                                        <!-- User Review -->
                                                        <div class="user-preview">
                                                            <a href="#"> <img src="images/users/2.jpg"
                                                                    class="avatar avatar-small" alt=""> </a>
                                                        </div>
                                                        <!-- View Details --><a href="" class="view-details">View
                                                            Details</a>
                                                    </div>
                                                    <!-- Ad Img End -->
                                                    <div class="short-description">
                                                        <!-- Ad Category -->
                                                        <div class="category-title"> <span><a href="#">Cameras &
                                                                    Accessories</a></span> </div>
                                                        <!-- Ad Title -->
                                                        <h3><a title="" href="single-page-listing.html">Office Furniture
                                                                For Sale </a></h3>
                                                        <!-- Price -->
                                                        <div class="price">$250 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                    </div>
                                                    <!-- Addition Info -->
                                                    <div class="ad-info">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>London</li>
                                                            <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Ad Box End -->
                                            </div>
                                        </div>
                                        <!-- Featured Ads -->
                                        <div class="item">
                                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                <!-- Ad Box -->
                                                <div class="category-grid-box">
                                                    <!-- Ad Img -->
                                                    <div class="category-grid-img">
                                                        <img class="img-responsive" alt=""
                                                            src="{{asset('images/posting/mob-6.jpg')}}">
                                                        <!-- Ad Status -->
                                                        <!-- User Review -->
                                                        <div class="user-preview">
                                                            <a href="#"> <img src="{{asset('images/users/2.jpg')}}"
                                                                    class="avatar avatar-small" alt=""> </a>
                                                        </div>
                                                        <!-- View Details --><a href="" class="view-details">View
                                                            Details</a>
                                                    </div>
                                                    <!-- Ad Img End -->
                                                    <div class="short-description">
                                                        <!-- Ad Category -->
                                                        <div class="category-title"> <span><a href="#">Cameras &
                                                                    Accessories</a></span> </div>
                                                        <!-- Ad Title -->
                                                        <h3><a title="" href="single-page-listing.html">Sony Xperia Z5
                                                            </a></h3>
                                                        <!-- Price -->
                                                        <div class="price">$250 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                    </div>
                                                    <!-- Addition Info -->
                                                    <div class="ad-info">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>London</li>
                                                            <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Ad Box End -->
                                            </div>
                                        </div>
                                        <!-- Featured Ads -->
                                        <div class="item">
                                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                <!-- Ad Box -->
                                                <div class="category-grid-box">
                                                    <!-- Ad Img -->
                                                    <div class="category-grid-img">
                                                        <img class="img-responsive" alt=""
                                                            src="{{asset('images/posting/cam-2.jpg')}}">
                                                        <!-- Ad Status -->
                                                        <!-- User Review -->
                                                        <div class="user-preview">
                                                            <a href="#"> <img src="{{asset('images/users/2.jpg')}}"
                                                                    class="avatar avatar-small" alt=""> </a>
                                                        </div>
                                                        <!-- View Details --><a href="" class="view-details">View
                                                            Details</a>
                                                    </div>
                                                    <!-- Ad Img End -->
                                                    <div class="short-description">
                                                        <!-- Ad Category -->
                                                        <div class="category-title"> <span><a href="#">Cameras &
                                                                    Accessories</a></span> </div>
                                                        <!-- Ad Title -->
                                                        <h3><a title="" href="single-page-listing.html">Sony Xperia Z5
                                                            </a></h3>
                                                        <!-- Price -->
                                                        <div class="price">$250 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                    </div>
                                                    <!-- Addition Info -->
                                                    <div class="ad-info">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>London</li>
                                                            <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Ad Box End -->
                                            </div>
                                        </div>
                                        <!-- Featured Ads -->
                                        <div class="item">
                                            <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                <!-- Ad Box -->
                                                <div class="category-grid-box">
                                                    <!-- Ad Img -->
                                                    <div class="category-grid-img">
                                                        <img class="img-responsive" alt=""
                                                            src="{{asset('images/posting/cam-2.jpg')}}">
                                                        <!-- Ad Status -->
                                                        <!-- User Review -->
                                                        <div class="user-preview">
                                                            <a href="#"> <img src="{{asset('images/users/2.jpg')}}"
                                                                    class="avatar avatar-small" alt=""> </a>
                                                        </div>
                                                        <!-- View Details --><a href="" class="view-details">View
                                                            Details</a>
                                                    </div>
                                                    <!-- Ad Img End -->
                                                    <div class="short-description">
                                                        <!-- Ad Category -->
                                                        <div class="category-title"> <span><a href="#">Cameras &
                                                                    Accessories</a></span> </div>
                                                        <!-- Ad Title -->
                                                        <h3><a title="" href="single-page-listing.html">Sony Xperia Z5
                                                            </a></h3>
                                                        <!-- Price -->
                                                        <div class="price">$250 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                    </div>
                                                    <!-- Addition Info -->
                                                    <div class="ad-info">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>London</li>
                                                            <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Ad Box End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Recent Ads -->
                           {{--  <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Recent Ads</a></h4>
                                </div>
                                <div class="widget-content recent-ads">
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="{{asset('images/posting/thumb-1.jpg')}}" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Sony Xperia Z1</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 17,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="{{asset('images/posting/thumb-2.jpg')}}" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">2017 BMW i8</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 66,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="{{asset('images/posting/thumb-3.jpg')}}" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Dell Latitude e7440</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 37,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="{{asset('images/posting/thumb-4.jpg')}}" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Sport Stylish Steering</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 11,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="{{asset('images/posting/thumb-5.jpg')}}" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Apple Wrist Watches</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 20,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Saftey Tips  -->
                            {{-- <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Safety tips for deal</a></h4>
                                </div>
                                <div class="widget-content saftey">
                                    <ol>
                                        <li>Use a safe location to meet seller</li>
                                        <li>Avoid cash transactions</li>
                                        <li>Beware of unrealistic offers</li>
                                    </ol>
                                </div>
                            </div> --}}
                        </div>
                        <!-- Sidebar Widgets End -->
                    </div>
                    <!-- Middle Content Area  End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
        <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
        {{-- <footer>
            <!-- Footer Content -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3  col-sm-6 col-xs-12">
                            <!-- Info Widget -->
                            <div class="widget">
                                <div class="logo"> <img alt="" src="{{asset('images/logo-1.png')}}"> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat
                                    fringilla port.</p>
                                <ul>
                                    <li><img src="{{asset('images/appstore.png')}}" alt=""></li>
                                    <li><img src="{{asset('images/googleplay.png')}}" alt=""></li>
                                </ul>
                            </div>
                            <!-- Info Widget Exit -->
                        </div>
                        <div class="col-md-3  col-sm-6 col-xs-12">
                            <!-- Follow Us -->
                            <div class="widget socail-icons">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a class="fb" href=""><i
                                                class="fa fa-facebook"></i></a><span>Facebook</span></li>
                                    <li><a class="twitter" href=""><i
                                                class="fa fa-twitter"></i></a><span>Twitter</span></li>
                                    <li><a class="linkedin" href=""><i
                                                class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                                    <li><a class="googleplus" href=""><i
                                                class="fa fa-google-plus"></i></a><span>Google+</span></li>
                                </ul>
                            </div>
                            <!-- Follow Us End -->
                        </div>
                        <div class="col-md-6  col-sm-6 col-xs-12">
                            <!-- Newslatter -->
                            <div class="widget widget-newsletter">
                                <h5>Singup for Weekly Newsletter</h5>
                                <div class="fieldset">
                                    <p>We may send you information about related events, webinars, products and services
                                        which we believe.</p>
                                    <form>
                                        <input class="" value="Enter your email address" type="text">
                                        <input class="submit-btn" name="submit" value="Submit" type="submit">
                                    </form>
                                </div>
                            </div>
                            <!-- Newslatter -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyrights -->
            <div class="copyrights">
                <div class="container">
                    <div class="copyright-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p>© 2017 AForest All rights reserved. Design by <a
                                        href="http://themeforest.net/user/scriptsbundle/portfolio"
                                        target="_blank">Scriptsbundle</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        @include('templates.footer')
        <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
    </div>
    <!-- Main Content Area End -->
    <!-- Post Ad Sticky -->
    <a href="#" class="sticky-post-button hidden-xs">
        <span class="sell-icons">
            <i class="flaticon-photo"></i>
        </span>
        <h4>Publicar</h4>
    </a>
    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>
    <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
    <div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="{{asset('storage/'.$anuncio->foto)}}" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <!-- content goes here -->
                    <form>
                        <div class="form-group  col-md-6  col-sm-6">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group  col-md-6  col-sm-6">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group  col-md-12  col-sm-12">
                            <label>Contact No</label>
                            <input type="text" class="form-control" placeholder="Contact No">
                        </div>
                        <div class="form-group  col-md-12  col-sm-12">
                            <label>Comments</label>
                            <textarea
                                placeholder="What is the price of the Honda Civic 2017 you have in your inventory?"
                                rows="3"
                                class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                        </div>
                        <div class="col-md-12  col-sm-12"> <img src="{{asset('storage/'.$anuncio->foto)}}" alt=""
                                class="img-responsive"> </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
    <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Compartir</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="{{asset('storage/'.$anuncio->foto)}}" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <h3>Key Features</h3>
                    <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone
                        Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise
                        Control, Driver Information System</p>
                    <h3>Link</h3>
                    <p><a
                            href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
    <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">Why are you reporting this ad?</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <form>
                        <div class="skin-minimal">
                            <div class="form-group col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="spam" name="minimal-radio">
                                        <label for="spam">Spam</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="duplicated" name="minimal-radio">
                                        <label for="duplicated">Duplicated</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group  col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="offensive" name="minimal-radio">
                                        <label for="offensive">Offensive</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="expired" name="minimal-radio" checked>
                                        <label for="expired">Expired</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group  col-md-12 col-sm-12">
                            <label>Comments</label>
                            <textarea placeholder="This ad not belong to me" rows="3"
                                class="form-control">This ad not belong to me</textarea>
                        </div>
                        <div class="col-md-12 col-sm-12"> <img src="{{asset('storage/'.$anuncio->foto)}}" alt="" class="img-responsive">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Ad Detail Modal =-=-=-=-=-=-= -->
    {{-- <div class="sticky-ad-detail">
        <div class="container">
            <div class="col-md-7 col-sm-12 col-xs-12 no-padding">
                <div class="">
                    <h3>ASRock H97M PRO4 LGA1150 Quad CrossFireX Motherboard</h3>
                    <div class="short-history">
                        <ul>
                            <li>Published on: <b>07 Oct 2017</b></li>
                            <li>Location: <b>London</b></li>
                            <li>Category: <b><a href="#">Used Cars</a></b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5  col-sm-12 col-xs-12 no-padding">
                <div class="pull-left row">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number "
                            data-last="111111X"><i class="fa fa-phone"></i> 0320<span>XXXXXXX</span></a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a data-toggle="modal" data-target=".price-quote" href="javascript:void(0)"
                            class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> Message
                            Seller</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Css  -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Jquery Easing -->
    <script src="{{asset('js/easing.js')}}"></script>
    <!-- Menu Hover  -->
    <script src="{{asset('js/forest-megamenu.js')}}"></script>
    <!-- Jquery Appear Plugin -->
    <script src="{{asset('js/jquery.appear.min.js')}}"></script>
    <!-- Numbers Animation   -->
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <!-- Jquery Smooth Scroll  -->
    <script src="{{asset('js/jquery.smoothscroll.js')}}"></script>
    <!-- Jquery Select Options  -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <!-- noUiSlider -->
    <script src="{{asset('js/nouislider.all.min.js')}}"></script>
    <!-- Carousel Slider  -->
    <script src="{{asset('js/carousel.min.js')}}"></script>
    <script src="{{asset('js/slide.js')}}"></script>
    <!-- Image Loaded  -->
    <script src="{{asset('js/imagesloaded.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <!-- CheckBoxes  -->
    <script src="{{asset('js/icheck.min.js')}}"></script>
    <!-- Jquery Migration  -->
    <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
    <!-- Sticky Bar  -->
    <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>
    <!-- Style Switcher -->
    <script src="{{asset('js/color-switcher.js')}}"></script>
    <!-- Template Core JS -->
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- For This Page Only -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVj6yChAfe1ilA4YrZgn_UCAnei8AhQxQ&sensor=false"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            /* ======= Show Number ======= */
            $('.number').click(function() {
                $(this).find('span').text($(this).data('last'));
            });

            /* ======= Ad Location ======= */
            var map = "";
            var latlng = new google.maps.LatLng(47.550259, -122.264847);
            var myOptions = {
                zoom: 13,
                center: latlng,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                size: new google.maps.Size(480, 240)
            }
            map = new google.maps.Map(document.getElementById("itemMap"), myOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: latlng
            });
            /* ======= Ad Detail On Scroll ======= */
            //caches a jQuery object containing the header element
            var header = $(".sticky-ad-detail");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 500) {
                    header.addClass("show-sticky-ad-detail");
                } else {
                    header.removeClass("show-sticky-ad-detail");
                }
            });
        })(jQuery);
    </script>
</body>

</html>