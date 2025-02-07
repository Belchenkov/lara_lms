<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>EduCore - Online Courses & Education HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/scroll_button.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/pointer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/range_slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/startRating.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/video_player.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.simple-bar-graph.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/sticky_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <link rel=" stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>

<body class="home_3">


<!--============ PRELOADER START ===========-->
<div id="preloader">
    <div class="preloader_icon">
        <img src="{{ asset('frontend/assets/images/preloader.png') }}" alt="Preloader" class="img-fluid">
    </div>
</div>
<!--============ PRELOADER START ===========-->


<!--===========================
        HEADER START
    ============================-->
<header class="header_3">
    <div class="row">
        <div class="col-xxl-4 col-lg-7 col-md-8 d-none d-md-block">
            <ul class="wsus__header_left d-flex flex-wrap">
                <li><a href="#"><i class="fab fa-facebook-f"></i> 240k Followers</a></li>
                <li><a href="callto:+8806545643"><i class="fas fa-phone-alt"></i> +880 654 - 5643</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i> 58k Followers</a></li>
            </ul>
        </div>
        <div class="col-xxl-5 col-lg-7 d-none d-xxl-block">
            <div class="wsus__header_center">
                <p> <span>Limited-Time Special</span> Use Code to Get 30% Off Your First Buying EduCore. <a
                        href="#">Find out more!</a></p>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-5 col-md-4">
            <ul class="wsus__header_right d-flex flex-wrap">
                <li>
                    <select class="select_js">
                        <option value="">English </option>
                        <option value="">Japanese</option>
                        <option value="">Korean</option>
                        <option value="">Chinese</option>
                        <option value="">Urdu</option>
                    </select>
                </li>
                <li>
                    <select class="select_js">
                        <option value="">$USD</option>
                        <option value="">₹INR</option>
                        <option value="">¥CNY</option>
                        <option value="">€EUR</option>
                        <option value="">฿THB</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--===========================
        HEADER END
    ============================-->


<!--===========================
        MAIN MENU 3 START
    ============================-->
<nav class="navbar navbar-expand-lg main_menu main_menu_3">
    <a class="navbar-brand" href="index_3.html">
        <img src="images/logo.png" alt="EduCore" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="menu_category">
            <div class="icon">
                <img src="images/grid_icon.png" alt="Category" class="img-fluid">
            </div>
            Category
            <ul>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_1.png" alt="Category" class="img-fluid">
                            </span>
                        Development
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_2.png" alt="Category" class="img-fluid">
                            </span>
                        Business
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_3.png" alt="Category" class="img-fluid">
                            </span>
                        Marketing
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_4.png" alt="Category" class="img-fluid">
                            </span>
                        Lifestyle
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_5.png" alt="Category" class="img-fluid">
                            </span>
                        Health & Fitness
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_6.png" alt="Category" class="img-fluid">
                            </span>
                        Design
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                            <span>
                                <img src="images/menu_category_icon_7.png" alt="Category" class="img-fluid">
                            </span>
                        Academics
                    </a>
                    <ul class="category_sub_menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Courses <i class="far fa-angle-down"></i></a>
                <ul class="droap_menu">
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="courses_details.html">Course details</a></li>
                    <li><a href="course_video.html">Course video</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                <ul class="droap_menu">
                    <li><a href="category.html">Categories</a></li>
                    <li><a href="cart_view.html">cart view</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="payment.html">payment</a></li>
                    <li><a href="pricing.html">pricing</a></li>
                    <li><a href="student_reviews.html">student review</a></li>
                    <li><a href="instructor.html">Instructor</a></li>
                    <li><a href="instructor_details.html">Instructor details</a></li>
                    <li><a href="instructor_finder.html">Instructor finder</a></li>
                    <li><a href="error.html">error</a></li>
                    <li><a href="faq.html">faq</a></li>
                    <li><a href="sign_in.html">sign in</a></li>
                    <li><a href="sign_up.html">sign up</a></li>
                    <li><a href="forum.html">forum</a></li>
                    <li><a href="forum_categories.html">forum Categories</a></li>
                    <li><a href="forum_create_topic.html">forum create topic</a></li>
                    <li><a href="forum_single_topic.html">forum single topic</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">blog <i class="far fa-angle-down"></i></a>
                <ul class="droap_menu">
                    <li><a href="blogs.html">blog grid view</a></li>
                    <li><a href="blog_list.html">blog list view</a></li>
                    <li><a href="blog_details.html">blog details</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">contact us</a>
            </li>
        </ul>

        <div class="right_menu">
            <div class="menu_search_btn">
                <img src="images/search_icon.png" alt="Search" class="img-fluid">
            </div>
            <ul>
                <li>
                    <a class="menu_signin" href="#">
                            <span>
                                <img src="images/cart_icon_black.png" alt="user" class="img-fluid">
                            </span>
                        <b>06</b>
                    </a>
                </li>
                <li>
                    <a class="admin" href="#">
                            <span>
                                <img src="images/user_icon_black.png" alt="user" class="img-fluid">
                            </span>
                        admin
                    </a>
                </li>
                <li>
                    <a class="common_btn" href="#">Sign Up</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class="wsus__menu_3_search_area">
    <form action="#">
        <input type="text" placeholder="Search School, Online.....">
        <button class="common_btn" type="submit">Search</button>
        <span class="close_search"><i class="far fa-times"></i></span>
    </form>
</div>
<!--===========================
        MAIN MENU 3 END
    ============================-->


<!--============================
        STICKY MENU START
    ==============================-->
<div class="mobile_menu_area">
    <div class="mobile_menu_area_top">
        <a class="mobile_menu_logo" href="index.html">
            <img src="images/logo.png" alt="EduCore">
        </a>
        <div class="mobile_menu_icon d-block d-lg-none" data-bs-toggle="offcanvas"
             data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <span class="mobile_menu_icon"><i class="far fa-stream menu_icon_bar"></i></span>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="fal fa-times"></i></button>
        <div class="offcanvas-body">

            <ul class="mobile_menu_header d-flex flex-wrap">
                <li><a href="cart_view.html"><i class="far fa-shopping-basket"></i> <span>2</span></a>
                </li>
                <li><a href="dashboard.html"><i class="far fa-user"></i></a></li>
            </ul>

            <form class="mobile_menu_search">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="far fa-search"></i></button>
            </form>

            <div class="mobile_menu_item_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">menu</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Categories</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                         aria-labelledby="nav-home-tab" tabindex="0">
                        <ul class="main_mobile_menu">
                            <li class="mobile_dropdown">
                                <a href="#">home</a>
                                <ul class="inner_menu">
                                    <li><a class="active" href="index.html">Home style 01</a></li>
                                    <li><a href="index_2.html">Home style 02</a></li>
                                    <li><a href="index_3.html">Home style 03</a></li>
                                    <li><a href="index_4.html">Home style 04</a></li>
                                    <li><a href="index_5_dark.html">Home Dark</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">courses</a>
                                <ul class="inner_menu">
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="courses_details.html">Course details</a></li>
                                    <li><a href="course_video.html">Course video</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">shop</a>
                                <ul class="inner_menu">
                                    <li><a href="products.html">product</a></li>
                                    <li><a href="products_2.html">product 2</a></li>
                                    <li><a href="product_details.html">product details</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">pages</a>
                                <ul class="inner_menu">
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="category.html">Categories</a></li>
                                    <li><a href="cart_view.html">cart view</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="payment.html">payment</a></li>
                                    <li><a href="pricing.html">pricing</a></li>
                                    <li><a href="student_reviews.html">student review</a></li>
                                    <li><a href="instructor.html">Instructor</a></li>
                                    <li><a href="instructor_details.html">Instructor details</a></li>
                                    <li><a href="instructor_finder.html">Instructor finder</a></li>
                                    <li><a href="error.html">error</a></li>
                                    <li><a href="faq.html">faq</a></li>
                                    <li><a href="sign_in.html">sign in</a></li>
                                    <li><a href="sign_up.html">sign up</a></li>
                                    <li><a href="forum.html">forum</a></li>
                                    <li><a href="forum_categories.html">forum Categories</a></li>
                                    <li><a href="forum_create_topic.html">forum create topic</a></li>
                                    <li><a href="forum_single_topic.html">forum single topic</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">blog</a>
                                <ul class="inner_menu">
                                    <li><a href="blogs.html">blog grid view</a></li>
                                    <li><a href="blog_list.html">blog list view</a></li>
                                    <li><a href="blog_details.html">blog details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                         tabindex="0">
                        <ul class="main_mobile_menu">
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_1.png" alt="Category" class="img-fluid">
                                        </span>
                                    Development
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_2.png" alt="Category" class="img-fluid">
                                        </span>
                                    Business
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_3.png" alt="Category" class="img-fluid">
                                        </span>
                                    Marketing
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_4.png" alt="Category" class="img-fluid">
                                        </span>
                                    Lifestyle
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_5.png" alt="Category" class="img-fluid">
                                        </span>
                                    Health & Fitness
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_6.png" alt="Category" class="img-fluid">
                                        </span>
                                    Design
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>
                            <li class="mobile_dropdown">
                                <a href="#">
                                        <span>
                                            <img src="images/menu_category_icon_7.png" alt="Category" class="img-fluid">
                                        </span>
                                    Academics
                                </a>
                                <ul class="inner_menu">
                                    <li><a href="courses_details.html">Web Design</a></li>
                                    <li><a href="courses_details.html">Web Development</a></li>
                                    <li><a href="courses_details.html">UI/UX Design</a></li>
                                    <li><a href="courses_details.html">Graphic Design</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================
        STICKY MENU END
    ==============================-->


<!--===========================
        BANNER 3 START
    ============================-->
<section class="wsus__banner_3" style="background: url(images/banner_3_bg.png);">
    <div class="row justify-content-between">
        <div class="col-xl-6 col-lg-6 wow fadeInUp">
            <div class="wsus__banner_3_text">
                <h5>Show Up For Learning</h5>
                <h1>Premier E-Learning Courses From <span>EduCore</span></h1>
                <p class="description">Nullam tincidunt tortor est, ac maximus justo gravida non phasellus dignissim
                    quam odio ipsum
                    sollicitudin rhoncus venenatis ex metus in turpis.</p>
                <div class="wsus__banner_2_btn_area mt_60">
                    <a class="common_btn" href="#">Start Free Trial <i class="far fa-arrow-right"
                                                                       aria-hidden="true"></i></a>
                    <div class="play_btn_area">
                        <a class="play_btn venobox vbox-item" data-autoplay="true" data-vbtype="video"
                           href="https://youtu.be/sVPYIRF9RCQ?si=labNkx-xlyOWtptr">
                            <img src="images/play_icon.png" alt="Play" class="img-fluid">
                        </a>
                        <h4>See Our Lesson Showcase</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 wow fadeInRight">
            <div class="wsus__banner_3_img">
                <div class="img">
                    <img src="images/banner_3_img_1.png" alt="Banner" class="img-fluid">

                    <div class="text">
                        <h4>250+ Popular Course</h4>
                        <p>Explore a variety of fresh topics</p>
                    </div>

                    <div class="circle_box">
                        <svg viewBox="0 0 100 100">
                            <defs>
                                <path id="circle" d="
                            M 50, 50
                            m -37, 0
                            a 37,37 0 1,1 74,0
                            a 37,37 0 1,1 -74,0"></path>
                            </defs>
                            <text>
                                <textPath xlink:href="#circle">
                                    take the worldwide best online course
                                </textPath>
                            </text>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <ul class="wsus__banner_features d-flex flex-wrap">
        <li class="green wow fadeInRight">
            <div class="icon">
                <img src="images/banner_feature_icon_1.png" alt="Features" class="img-fluid">
            </div>
            <div class="text">
                <h4>Learn From Experts</h4>
                <p>LMS allows users to create organize and manage courses.</p>
            </div>
        </li>
        <li class="pink wow fadeInRight">
            <div class="icon">
                <img src="images/banner_feature_icon_2.png" alt="Features" class="img-fluid">
            </div>
            <div class="text">
                <h4>Earn a Certificate</h4>
                <p>LMS allows users to create organize and manage courses.</p>
            </div>
        </li>
        <li class="sky wow fadeInRight">
            <div class="icon">
                <img src="images/banner_feature_icon_3.png" alt="Features" class="img-fluid">
            </div>
            <div class="text">
                <h4>5400+ Courses</h4>
                <p>LMS allows users to create organize and manage courses.</p>
            </div>
        </li>
    </ul>
</section>
<!--===========================
        BANNER 3 END
    ============================-->


<!--===========================
        CATEGORY 4 START
    ============================-->
<section class="wsus__category_4 mt_190 xs_mt_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_35">
                    <h5>Categories</h5>
                    <h2>Explore Categories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_1.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Business Strategy</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_2.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Digital Marketing</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_3.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Health & Fitness</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_4.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Development</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_5.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Motion Graphics</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_6.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Adobe Illustrator</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_7.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>Mobile App Design</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="images/category_icon_8.png" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>HTML & CSS</h4>
                        <p>15 Course</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt_60 wow fadeInUp">
            <div class="col-12 text-center">
                <a class="common_btn" href="#">View All Categories <i class="far fa-angle-right"
                                                                      aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<!--===========================
        CATEGORY 4 END
    ============================-->


<!--===========================
        ABOUT 3 START
    ============================-->
<section class="wsus__about_3 mt_120 xs_mt_100 ">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="wsus__about_3_img">

                    <img src="images/about_3_img_1.png" alt="About us" class="about_3_large img-fluid w-100">

                    <div class="text">
                        <h4> <span>20K+</span> Enrolled Learners</h4>
                        <img src="images/banner_2_photo_list.png" alt="Photo" class="img-fluid">
                    </div>

                    <div class="circle_box">
                        <svg viewBox="0 0 100 100">
                            <defs>
                                <path id="circle2" d="
                            M 50, 50
                            m -37, 0
                            a 37,37 0 1,1 74,0
                            a 37,37 0 1,1 -74,0"></path>
                            </defs>
                            <text>
                                <textPath xlink:href="#circle">
                                    take the worldwide best online course
                                </textPath>
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="wsus__about_3_text">
                    <div class="wsus__section_heading heading_left mb_15">
                        <h5>Learn More About Us</h5>
                        <h2>Study & Develop Your Skills Regardless of Location.</h2>
                    </div>
                    <p>Nullam tincidunt tortor est, ac maximus justo gravida non phasellus dignissim quam odio ipsum
                        sollicitudin rhoncus venenatis ex metus in turpis.</p>
                    <ul>
                        <li>Expert Trainers</li>
                        <li>Online Remote Learning</li>
                        <li>Lifetime Access</li>
                    </ul>
                    <a class="common_btn" href="#">Start Free Trial</a>
                    <div class="about_video">
                        <img src="images/about_3_img_2.jpg" alt="Video" class="img-fluid w-100">
                        <span>live</span>
                        <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
                           href="https://youtu.be/sVPYIRF9RCQ?si=labNkx-xlyOWtptr">
                            <img src="images/play_icon.png" alt="Play" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        ABOUT 3 END
    ============================-->


<!--===========================
        COUESES 3 START
    ============================-->
<section class="wsus__courses_3 pt_120 xs_pt_100 mt_120 xs_mt_90 pb_120 xs_pb_100">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_45">
                    <h5>Featured Courses</h5>
                    <h2>Latest Bundle Courses.</h2>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-xxl-6 col-xl-8 m-auto">
                <div class="wsus__filter_area mb_15">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">All Courses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Design</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Technology</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-disabled" type="button" role="tab"
                                    aria-controls="pills-disabled" aria-selected="false">Finance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-disabled2" type="button" role="tab"
                                    aria-controls="pills-disabled2" aria-selected="false">Development</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                 tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_4.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_9.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_6.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_7.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_8.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                 tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_4.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_9.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_6.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_7.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_8.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                 tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_4.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_9.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_6.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_7.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_8.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
                 tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_4.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_9.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_6.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_7.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_8.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-disabled2" role="tabpanel" aria-labelledby="pills-disabled-tab2"
                 tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_4.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_9.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_6.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Business</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.9 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">50 Tips For Designing an Exceptional
                                    Online Learning Progress.</a>
                                <ul>
                                    <li>32 Lessons</li>
                                    <li>48 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hugh Millie-Yate</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$239.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_7.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Marketing</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Holistic Internet-Based Instruction
                                    Mastery Program.</a>
                                <ul>
                                    <li>37 Lessons</li>
                                    <li>56 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Dominic L. Ement</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p>$199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_8.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare"
                                                 class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        COUESES 3 END
    ============================-->


<!--===========================
        OFFER START
    ============================-->
<section class="wsus__offer" style="background: url(images/offer_bg.jpg);">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 col-md-6 wow fadeInLeft">
                <div class="wsus__offer_img">
                    <img src="images/offer_img_1.png" alt="Offer" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xl-6 col-md-6 wow fadeInRight">
                <div class="wsus__offer_text">
                    <h2>Eager to Receive Special Offers & Updates on Courses?</h2>
                    <form action="#">
                        <input type="text" placeholder="Your email address...">
                        <button type="submit" class="common_btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        OFFER END
    ============================-->


<!--===========================
        BECOME INSTRUCTOR START
    ============================-->
<section class="wsus__become_instructor mt_120 xs_mt_100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-md-6 wow fadeInLeft">
                <div class="wsus__become_instructor_text">
                    <div class="wsus__section_heading heading_left mb_20">
                        <h5>Become An Instructor</h5>
                        <h2>Be a Member & Share Your Knowledge.</h2>
                    </div>
                    <p>LMS allows administrators and instructors to create, organize, and deliver courses. This
                        includes uploading course content, managing materials, and setting assessments.</p>
                    <a class="common_btn" href="#">Become An Instructor <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 wow fadeInRight">
                <div class="wsus__become_instructor_img">
                    <img src="images/become_instructor_img.png" alt="Instructor" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        BECOME INSTRUCTOR END
    ============================-->


<!--===========================
        VIDEO START
    ============================-->
<section class="wsus__video mt_120 xs_mt_100">
    <img src="images/video_bg.jpg" alt="Video" class="img-fluid w-100">
    <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
       href="https://youtu.be/sVPYIRF9RCQ?si=labNkx-xlyOWtptr">
        <img src="images/play_icon_white.png" alt="Play" class="img-fluid">
    </a>
    <div class="text wow fadeInLeft">
        <p>LMS allows administrators and instructors to create, organize, and deliver courses. This includes
            uploading course content, managing materials, and setting assessments.Cras quis ligula ac felis Donec
            cursus augue quis maximus morbi senectus.</p>
        <a href="#">Free Online Courses <i class="far fa-arrow-right"></i></a>
    </div>
</section>
<!--===========================
        VIDEO END
    ============================-->


<!--===========================
        BRAND START
    ============================-->
<section class="wsus__brand mt_45 pt_120 xs_pt_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wsus__brand_slider_area wow fadeInUp">
                    <h6>Trusted by Over 24,758 Outstanding Teams</h6>
                    <div class="marquee_animi">
                        <ul class="d-flex flex-wrap">
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_1.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_2.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_3.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_4.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_5.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_6.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/brand_icon_7.png" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        BRAND END
    ============================-->


<!--===========================
        QUALITY COURSES START
    ============================-->
<section class="wsus__quality_courses mt_120 xs_mt_100">
    <div class="row quality_course_slider">
        <div class="quality_course_slider_item" style="background: url(images/quality_courses_bg.jpg);">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-4 col-md-6 col-lg-7 wow fadeInLeft">
                        <div class="wsus__quality_courses_text">
                            <div class="wsus__section_heading heading_left mb_30">
                                <h5>100% QUALITY COURSES</h5>
                                <h2>Find Your Match From The Spotlighted Collection</h2>
                            </div>
                            <p>Quisque vitae dignissim nunc, a molestie nisi. Orci varius natoque penatibus
                                parturient
                                nascetu
                                mus.</p>
                            <a class="common_btn" href="#">all Featured Courses <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-lg-6 d-none d-xl-block wow fadeInUp">
                        <div class="wsus__quality_courses_img">
                            <img src="images/quality_courses_img.png" alt="Quality Courses" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-lg-5 wow fadeInUp">
                        <div class="row quality_course_card_slider">
                            <div class="col-12">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/love_icon_black.png" alt="Love"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/compare_icon_black.png" alt="Compare"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cart_icon_black_2.png" alt="Cart"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.8 Rating)</span>
                                            </p>
                                        </div>

                                        <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                        <ul>
                                            <li>24 Lessons</li>
                                            <li>38 Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>Hermann P. Schnitzel</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                        <p><del>$254</del> $156.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/love_icon_black.png" alt="Love"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/compare_icon_black.png" alt="Compare"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cart_icon_black_2.png" alt="Cart"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">

                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.9 Rating)</span>
                                            </p>
                                        </div>

                                        <a class="title" href="#">50 Tips For Designing an Exceptional
                                            Online Learning Progress.</a>
                                        <ul>
                                            <li>32 Lessons</li>
                                            <li>48 Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>Hugh Millie-Yate</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                        <p>$239.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/love_icon_black.png" alt="Love"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/compare_icon_black.png" alt="Compare"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cart_icon_black_2.png" alt="Cart"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">
                                            <!-- <a href="#" class="category">Marketing</a> -->
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.8 Rating)</span>
                                            </p>
                                        </div>

                                        <a class="title" href="#">Holistic Internet-Based Instruction
                                            Mastery Program.</a>
                                        <ul>
                                            <li>37 Lessons</li>
                                            <li>56 Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>Dominic L. Ement</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                        <p>$199.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quality_course_slider_item" style="background: url(images/quality_courses_bg.jpg);">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-4 col-md-6 col-lg-7 wow fadeInLeft">
                        <div class="wsus__quality_courses_text">
                            <div class="wsus__section_heading heading_left mb_30">
                                <h5>100% QUALITY COURSES</h5>
                                <h2>Find Your Match From The Spotlighted Collection</h2>
                            </div>
                            <p>Quisque vitae dignissim nunc, a molestie nisi. Orci varius natoque penatibus
                                parturient
                                nascetu
                                mus.</p>
                            <a class="common_btn" href="#">all Featured Courses <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-lg-6 d-none d-xl-block wow fadeInUp">
                        <div class="wsus__quality_courses_img">
                            <img src="images/quality_courses_img_2.png" alt="Quality Courses"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-lg-5 wow fadeInUp">
                        <div class="row quality_course_card_slider">
                            <div class="col-12">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/love_icon_black.png" alt="Love"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/compare_icon_black.png" alt="Compare"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cart_icon_black_2.png" alt="Cart"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.8 Rating)</span>
                                            </p>
                                        </div>

                                        <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                        <ul>
                                            <li>24 Lessons</li>
                                            <li>38 Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>Hermann P. Schnitzel</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                        <p><del>$254</del> $156.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="images/courses_3_img_2.jpg" alt="Courses" class="img-fluid">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/love_icon_black.png" alt="Love"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/compare_icon_black.png" alt="Compare"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cart_icon_black_2.png" alt="Cart"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="time"><i class="far fa-clock"></i> 24 Hours</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">

                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.9 Rating)</span>
                                            </p>
                                        </div>

                                        <a class="title" href="#">50 Tips For Designing an Exceptional
                                            Online Learning Progress.</a>
                                        <ul>
                                            <li>32 Lessons</li>
                                            <li>48 Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>Hugh Millie-Yate</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                        <p>$239.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="images/courses_3_img_3.jpg" alt="Courses" class="img-fluid">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/love_icon_black.png" alt="Love"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/compare_icon_black.png" alt="Compare"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cart_icon_black_2.png" alt="Cart"
                                                         class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="time"><i class="far fa-clock"></i> 17 Hours</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.8 Rating)</span>
                                            </p>
                                        </div>

                                        <a class="title" href="#">Holistic Internet-Based Instruction
                                            Mastery Program.</a>
                                        <ul>
                                            <li>37 Lessons</li>
                                            <li>56 Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>Dominic L. Ement</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                        <p>$199.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        QUALITY COURSES END
    ============================-->


<!--===========================
        TESTIMONIAL START
    ============================-->
<section class="wsus__testimonial pt_120 xs_pt_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_40">
                    <h5>Testimonial</h5>
                    <h2>Comments From Our Learners</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row testimonial_slider">
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_testimonial">
                <p class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="description">Duis ullamcorper arcu egestas nisl luctus, sit amet lobortis lorem gravida
                    Phasellus u mauris sodales hendre phasellus interdum lacinia diam bibendum nisi elementum
                    urna.Morbi molestie purus egestas aliquam euismod utrum eget dapibus fames ac ante  orci ut
                    lectus.</p>
                <div class="testimonial_logo">
                    <img src="images/testimonial_logo.png" alt="Testimonial" class="img-fluid">
                </div>
                <div class="wsus__testimonial_footer">
                    <div class="img">
                        <img src="images/testimonial_user_1.png" alt="user" class="img-fluid">
                    </div>
                    <h3>
                        Spruce Springclean
                        <span>Computer Engineer</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_testimonial">
                <p class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="description">Duis ullamcorper arcu egestas nisl luctus, sit amet lobortis lorem gravida
                    Phasellus u mauris sodales hendre phasellus interdum lacinia diam bibendum nisi elementum
                    urna.Morbi molestie purus egestas aliquam euismod utrum eget dapibus fames ac ante  orci ut
                    lectus.</p>
                <div class="testimonial_logo">
                    <img src="images/testimonial_logo_2.png" alt="Testimonial" class="img-fluid">
                </div>
                <div class="wsus__testimonial_footer">
                    <div class="img">
                        <img src="images/testimonial_user_2.png" alt="user" class="img-fluid">
                    </div>
                    <h3>
                        Ravi O'Leigh
                        <span>IT Director at Cognizant</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_testimonial">
                <p class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="description">Duis ullamcorper arcu egestas nisl luctus, sit amet lobortis lorem gravida
                    Phasellus u mauris sodales hendre phasellus interdum lacinia diam bibendum nisi elementum
                    urna.Morbi molestie purus egestas aliquam euismod utrum eget dapibus fames ac ante  orci ut
                    lectus.</p>
                <div class="testimonial_logo">
                    <img src="images/testimonial_logo_3.png" alt="Testimonial" class="img-fluid">
                </div>
                <div class="wsus__testimonial_footer">
                    <div class="img">
                        <img src="images/testimonial_user_3.png" alt="user" class="img-fluid">
                    </div>
                    <h3>
                        Hanson Deck
                        <span>UX Design Lead</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_testimonial">
                <p class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p class="description">Duis ullamcorper arcu egestas nisl luctus, sit amet lobortis lorem gravida
                    Phasellus u mauris sodales hendre phasellus interdum lacinia diam bibendum nisi elementum
                    urna.Morbi molestie purus egestas aliquam euismod utrum eget dapibus fames ac ante  orci ut
                    lectus.</p>
                <div class="testimonial_logo">
                    <img src="images/testimonial_logo_2.png" alt="Testimonial" class="img-fluid">
                </div>
                <div class="wsus__testimonial_footer">
                    <div class="img">
                        <img src="images/testimonial_user_2.png" alt="user" class="img-fluid">
                    </div>
                    <h3>
                        Spruce Springclean
                        <span>Computer Engineer</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        TESTIMONIAL END
    ============================-->


<!--===========================
        BLOG 4 START
    ============================-->
<section class="blog_4 mt_110 xs_mt_90 pt_120 xs_pt_100 pb_120 xs_pb_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft">
                <div class="wsus__section_heading heading_left mb_50">
                    <h5>Latest blogs</h5>
                    <h2>Our Latest News Feed.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row blog_4_slider">
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_blog_4">
                <a href="#" class="wsus__single_blog_4_img">
                    <img src="images/blog_4_img_1.jpg" alt="Blog" class="img-fluid">
                    <span class="date">March 23, 2024</span>
                </a>
                <div class="wsus__single_blog_4_text">
                    <ul>
                        <li>
                            <span><img src="images/user_icon_black.png" alt="User" class="img-fluid"></span>
                            By Richard Tea
                        </li>
                        <li>
                            <span><img src="images/comment_icon_black.png" alt="Comment" class="img-fluid"></span>
                            3 Comments
                        </li>
                    </ul>
                    <a href="#" class="title">Exploring Learning Landscapes in Academic.</a>
                    <p>Suspends dictum sed sem allium convallis Proin dictum ipsum.</p>
                    <a href="#" class="common_btn">Read More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_blog_4">
                <a href="#" class="wsus__single_blog_4_img">
                    <img src="images/blog_4_img_2.jpg" alt="Blog" class="img-fluid">
                    <span class="date">April 28, 2024</span>
                </a>
                <div class="wsus__single_blog_4_text">
                    <ul>
                        <li>
                            <span><img src="images/user_icon_black.png" alt="User" class="img-fluid"></span>
                            By Doug Lyphe
                        </li>
                        <li>
                            <span><img src="images/comment_icon_black.png" alt="Comment" class="img-fluid"></span>
                            21 Comments
                        </li>
                    </ul>
                    <a href="#" class="title">Uncovering Learning Opportunities in Academia.</a>
                    <p>Suspends dictum sed sem allium convallis Proin dictum ipsum.</p>
                    <a href="#" class="common_btn">Read More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_blog_4">
                <a href="#" class="wsus__single_blog_4_img">
                    <img src="images/blog_4_img_3.jpg" alt="Blog" class="img-fluid">
                    <span class="date">Jan 12, 2024</span>
                </a>
                <div class="wsus__single_blog_4_text">
                    <ul>
                        <li>
                            <span><img src="images/user_icon_black.png" alt="User" class="img-fluid"></span>
                            By Eleanor Fant
                        </li>
                        <li>
                            <span><img src="images/comment_icon_black.png" alt="Comment" class="img-fluid"></span>
                            48 Comments
                        </li>
                    </ul>
                    <a href="#" class="title">Internationally Distinguished Skillful Educators.</a>
                    <p>Suspends dictum sed sem allium convallis Proin dictum ipsum.</p>
                    <a href="#" class="common_btn">Read More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_blog_4">
                <a href="#" class="wsus__single_blog_4_img">
                    <img src="images/blog_4_img_4.jpg" alt="Blog" class="img-fluid">
                    <span class="date">April 28, 2024</span>
                </a>
                <div class="wsus__single_blog_4_text">
                    <ul>
                        <li>
                            <span><img src="images/user_icon_black.png" alt="User" class="img-fluid"></span>
                            By Doug Lyphe
                        </li>
                        <li>
                            <span><img src="images/comment_icon_black.png" alt="Comment" class="img-fluid"></span>
                            21 Comments
                        </li>
                    </ul>
                    <a href="#" class="title">Uncovering Learning Opportunities in Academia.</a>
                    <p>Suspends dictum sed sem allium convallis Proin dictum ipsum.</p>
                    <a href="#" class="common_btn">Read More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================
        BLOG 4 END
    ============================-->


<!--===========================
        FOOTER 3 START
    ============================-->
<footer class="footer_3" style="background: url(images/footer_3_bg.jpg);">
    <div class="footer_3_overlay pt_120 xs_pt_100">
        <div class="wsus__footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeInUp">
                        <div class="wsus__footer_3_logo_area">
                            <a class="logo" href="index.html">
                                <img src="images/footer_logo.png" alt="EduCore" class="img-fluid">
                            </a>
                            <p>Nunc in sollicitudin diam, ut bibendum malesuada sodales porttitor.</p>
                            <h2>Follow Us On</h2>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3 wow fadeInUp">
                        <div class="wsus__footer_link">
                            <h2>Courses</h2>
                            <ul>
                                <li><a href="#">Life Coach</a></li>
                                <li><a href="#">Business Coach</a></li>
                                <li><a href="#">Health Coach</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">SEO Optimize</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3 wow fadeInUp">
                        <div class="wsus__footer_link">
                            <h2>Programs</h2>
                            <ul>
                                <li><a href="#">The Arts</a></li>
                                <li><a href="#">Human Sciences</a></li>
                                <li><a href="#">Economics</a></li>
                                <li><a href="#">Natural Sciences</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="wsus__footer_3_subscribe">
                            <h3>Subscribe Our Newsletter</h3>
                            <form action="#">
                                <input type="text" placeholder="Enter Your Email">
                                <button type="submit" class="common_btn">Subscribe</button>
                            </form>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="images/call_icon_white.png" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Call us:</h4>
                                        <a href="mailto:example@gmail.com">example@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="images/location_icon_white.png" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Office:</h4>
                                        <p>25-02 44th Queens, NY 3645, United States</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__footer_copyright_area mt_140 xs_mt_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus__footer_copyright_text">
                            <p>Copyright © 2024 All Rights Reserved by EduCore Education</p>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Term of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--===========================
        FOOTER 3 END
    ============================-->


<!--================================
        SCROLL BUTTON START
    =================================-->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!--================================
        SCROLL BUTTON END
    =================================-->


<!--jquery library js-->
<script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
<!--bootstrap js-->
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--font-awesome js-->
<script src="{{ asset('frontend/assets/js/Font-Awesome.js') }}"></script>
<!--marquee js-->
<script src="{{ asset('frontend/assets/js/jquery.marquee.min.js') }}"></script>
<!--slick js-->
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<!--countup js-->
<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.countup.min.js') }}"></script>
<!--venobox js-->
<script src="{{ asset('frontend/assets/js/venobox.min.js') }}"></script>
<!--nice-select js-->
<script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
<!--Scroll Button js-->
<script src="{{ asset('frontend/assets/js/scroll_button.js') }}"></script>
<!--pointer js-->
<script src="{{ asset('frontend/assets/js/pointer.js') }}"></script>
<!--range slider js-->
<script src="{{ asset('frontend/assets/js/range_slider.js') }}"></script>
<!--barfiller js-->
<script src="{{ asset('frontend/assets/js/animated_barfiller.js') }}"></script>
<!--calendar js-->
<script src="{{ asset('frontend/assets/js/jquery.calendar.js') }}"></script>
<!--starRating js-->
<script src="{{ asset('frontend/assets/js/starRating.js') }}"></script>
<!--Bar Graph js-->
<script src="{{ asset('frontend/assets/js/jquery.simple-bar-graph.min.js') }}"></script>
<!--select2 js-->
<script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
<!--Video player js-->
<script src="{{ asset('frontend/assets/js/video_player.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/video_player_youtube.js') }}"></script>
<!--wow js-->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

<!--main/custom js-->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
