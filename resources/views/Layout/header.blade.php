<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/niceselectpicker/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick/slick-theme.css')}}">
    <!-- icon css-->
    <link rel="stylesheet" href="{{asset('assets/elagent-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/animation/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <title>TheAnswerExpert</title>
</head>


<body data-scroll-animation="true">
    <!--<div id="preloader">-->
    <!--    <div id="ctn-preloader" class="ctn-preloader">-->
    <!--        <div class="round_spinner">-->
    <!--            <div class="spinner"></div>-->
    <!--            <div class="text">-->
    <!--                <img src="img/spinner_logo.png" alt="">-->
    <!--                <h4><span>TheAnswerExpert</span></h4>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <h2 class="head">Did You Know?</h2>-->
    <!--        <p></p>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="body_wrapper">
        <div class="click_capture"></div>
        <nav class="navbar navbar-expand-lg menu_one sticky-nav d-lg-block d-none">
            <div class="container">
                <a class="navbar-brand header_logo" href="index.html">
                    <img class="first_logo sticky_logo" src="{{asset('assets/img/logo.png')}}" srcset="img/logo-2x.png 2x" alt="logo" />
                    <img class="white_logo main_logo" src="{{asset('assets/img/logo-w.png')}}" srcset="img/logo-w2x.png 2x" alt="logo" />
                </a>
               <!--  <div class="search-input">
                    <ion-icon class="search-icon" name="search-outline"></ion-icon>
                    <input type="text" placeholder="Search..." value="" class="">
                </div> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ms-auto">

                        <li class="nav-item dropdown submenu ">
                            <a href="#" class="nav-link dropdown-toggle">Aboutus</a>
                            <!-- <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-bs-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item "><a href="index.html" class="nav-link">Demo 01</a></li>
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Demo 02</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Demo 03</a></li>
                                <li class="nav-item "><a href="index-4.html" class="nav-link">Demo 04</a></li>
                                <li class="nav-item "><a href="index-5.html" class="nav-link">Demo 05</a></li>

                            </ul> -->
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Contactus
                            </a>
                            
                        </li>
                     
                    </ul>
                    <!-- <div class="right-nav">
                        <a class="action_btn btn_small_two btn-text-medium" href="#">Sign In</a>
                        <a class="px-2 ms-3" href="#" title="Subscribe to the newsletter">
                            <ion-icon name="mail"></ion-icon>
                        </a>
                        <a class="px-2" href="#" title="RSS feed">
                            <ion-icon name="logo-rss"></ion-icon>
                        </a>
                        <div class="px-2 js-darkmode-btn ms-0" title="Toggle dark mode">
                            <label for="something" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something"></label>
                            <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                        </div>
                    </div> -->
                </div>
            </div>
        </nav>

        <div class="mobile_main_menu  sticky-nav menu_one">
            <div class="container">
                <div class="mobile_menu_left">
                    <button type="button" class="navbar-toggler mobile_menu_btn">
                        <span class="menu_toggle ">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <a class="navbar-brand header_logo" href="index.html">
                        <img class="sticky_logo  " src="{{asset('img/logo.png')}}" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="white_logo main_logo" src="{{asset('img/logo-w.png')}}" srcset="img/logo-w2x.png 2x" alt="logo">
                    </a>
                </div>
                <div class="mobile_menu_right">
                    <div class="right-nav">
                        <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                            <label for="something2" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something2" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something2"></label>
                            <input type="checkbox" name="something2" id="something2" class="dark_mode_switcher">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="side_menu">
            <div class="mobile_menu_header">
                <div class="close_nav">
                    <i class="icon_close"></i>
                </div>
                <div class="mobile_logo">
                    <a class="navbar-brand header_logo me-0" href="index.html">
                        <img class="sticky_logo main_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="white_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                    </a>
                </div>
            </div>
           <!--  <div class="mobile_nav_wrapper">
                <nav class="mobile_nav_top">
                    <ul class="navbar-nav menu ms-auto">
                        <li class="nav-item dropdown submenu ">
                            <a href="index.html" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item "><a href="index.html" class="nav-link">Demo 01</a></li>
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Demo 02</a></li>
                                <li class="nav-item "><a href="index-3.html" class="nav-link">Demo 03</a></li>
                                <li class="nav-item "><a href="index-4.html" class="nav-link">Demo 04</a></li>
                                <li class="nav-item "><a href="index-5.html" class="nav-link">Demo 05</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="Layout_Header-Search-1.html" class="nav-link">Header
                                        Layout 01</a></li>
                                <li class="nav-item"><a href="Layout_Header-Search-2.html" class="nav-link">Header
                                        Layout 02</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                                <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link dropdown-toggle" href="forums.html">
                                Forum
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item "><a href="forums.html" class="nav-link">Forums Root</a></li>
                                <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                                <li class="nav-item"><a href="forum-topics-2.html" class="nav-link">Forum Topics Two</a>
                                </li>
                                <li class="nav-item active"><a href="forum-single.html" class="nav-link">Topic
                                        Details</a></li>
                                <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                                <li class="nav-item "><a href="add-question.html" class="nav-link">Add Question</a></li>
                                <li class="nav-item"><a href="user-list.html" class="nav-link">User List</a></li>
                                <li class="nav-item"><a href="user-details.html" class="nav-link">User Details</a></li>
                                <li class="nav-item"><a href="badges.html" class="nav-link">User Badges</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#">
                                Blog
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> -->
        </div>
        <!--================Forum Breadcrumb Area =================-->
        <section class="banner-area-7 pt-60 pb-80 has_search">
           <!--  <div class="banner-shapes">
                <div class="shape">
                    <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-1.png"
                        alt="shape" />
                </div>
                <div class="shape">
                    <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-2.png"
                        alt="shape" />
                </div>
                <div class="shape">
                    <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-3.png"
                        alt="shape" />
                </div>
                <div class="shape">
                    <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-4.png"
                        alt="shape" />
                </div>
            </div> -->
          <!--   <div class="container">
                <div class="row pt-120 pb-30">
                    <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto ">
                        <form action="#" class="header_search_form-5 mx-auto">
                            <div class="header_search_form_info">
                                <div class="form-group">
                                    <div class="input-wrapper d-flex flex-row">
                                        <input type="search" id="searchbox" autocomplete="off" name="search"
                                            placeholder="Search for topics, posts, users or categories" />
                                        <button type="submit"><i class="icon_search"></i></button>
                                        <div class="header_search_form_panel">
                                            <ul class="list-unstyled">
                                                <li>
                                                    Help Desk
                                                    <ul class="list-unstyled search_item">
                                                        <li>
                                                            <span>Configuration</span><a href="#">How to edit host and
                                                                port?</a>
                                                        </li>
                                                        <li>
                                                            <span>Configuration</span><a href="#">The dev Property</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Support
                                                    <ul class="list-unstyled search_item">
                                                        <li>
                                                            <span>Pages</span><a href="#">The asyncData Method</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Documentation
                                                    <ul class="list-unstyled search_item">
                                                        <li>
                                                            <span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                        <li>
                                                            <span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                        <li>
                                                            <span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header_search_keyword search-white mt-3">
                                <span class="header-search-form__keywords-label">Popular topics:</span>
                                <ul class="list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay="0.2s">
                                        <a href="#">Forums</a>,
                                    </li>
                                    <li></li>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s">
                                        <a href="#">Getting stated</a>,
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s">
                                        <a href="#">Introduction</a>,
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="0.4s">
                                        <a href="#">Payment</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </section>
       <!--  <section class="page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Foram WordPress Theme</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section> -->