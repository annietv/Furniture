 <!-- preloader start -->

 <style>
/*!------------------------------------------------------------------
[MAIN STYLESHEET]

PROJECT:	Project Name
VERSION:	Versoin Number
-------------------------------------------------------------------*/
/*------------------------------------------------------------------
[TABLE OF CONTENTS]
-------------------------------------------------------------------*/
/*  typography */
@import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");

@font-face {
    font-family: 'futura-bold';
    src: url("../fonts/Futura-Bold.woff") format("woff");
    font-weight: normal;
    font-style: normal;
}

body {
    line-height: 1.2;
    font-family: "Poppins", sans-serif;
    -webkit-font-smoothing: antialiased;
    font-size: 15px;
    color: #5c5c77;
}

p,
.paragraph {
    font-weight: 400;
    color: #5c5c77;
    font-size: 15px;
    line-height: 1.9;
    font-family: "Poppins", sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #1e1e4b;
    font-family: "futura-bold";
    font-weight: 700;
    line-height: 1.2;
}

h1,
.h1 {
    font-size: 60px;
}

@media (max-width: 575px) {

    h1,
    .h1 {
        font-size: 45px;
    }
}

h2,
.h2 {
    font-size: 40px;
}

@media (max-width: 575px) {

    h2,
    .h2 {
        font-size: 30px;
    }
}

h3,
.h3 {
    font-size: 25px;
}

@media (max-width: 575px) {

    h3,
    .h3 {
        font-size: 20px;
    }
}

h4,
.h4 {
    font-size: 20px;
}

@media (max-width: 575px) {

    h4,
    .h4 {
        font-size: 18px;
    }
}

h5,
.h5 {
    font-size: 18px;
}

@media (max-width: 575px) {

    h5,
    .h5 {
        font-size: 16px;
    }
}

h6,
.h6 {
    font-size: 16px;
}

@media (max-width: 575px) {

    h6,
    .h6 {
        font-size: 14px;
    }
}

/* Button style */
.btn {
    font-size: 16px;
    font-family: "Poppins", sans-serif;
    text-transform: capitalize;
    padding: 15px 40px;
    border-radius: 0;
    font-weight: 500;
    border: 0;
    position: relative;
    z-index: 1;
    transition: .2s ease;
    overflow: hidden;
}

.btn::before {
    position: absolute;
    content: "";
    height: 80%;
    width: 100%;
    left: 0;
    bottom: 10%;
    z-index: -1;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
    -webkit-transform-origin: top;
    transform-origin: top;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
}

.btn:focus {
    outline: 0;
    box-shadow: none !important;
}

.btn:active {
    box-shadow: none;
}

.btn:hover::before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transform-origin: bottom;
    transform-origin: bottom;
}

.btn-sm {
    font-size: 14px;
    padding: 10px 35px;
}

.btn-xs {
    font-size: 12px;
    padding: 5px 15px;
}

.btn-primary {
    background: #db0007;
    color: #fff;
}

.btn-primary::before {
    background: #fff;
}

.btn-primary:active {
    background: #db0007 !important;
    color: #db0007;
}

.btn-primary:active::before {
    height: 80%;
}

.btn-primary:hover {
    background: #db0007;
    color: #db0007;
}

.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #db0007;
    border-color: #db0007;
}

.btn-secondary {
    background: #fff;
    color: #ffbc3b;
    border: 1px solid #fff;
}

.btn-secondary::before {
    background: #ffbc3b;
}

.btn-secondary:active {
    background: #ffbc3b;
    color: #fff;
    border: 1px solid #fff;
}

.btn-secondary:hover {
    background: #fff;
    color: #fff;
    border: 1px solid #fff;
}

.btn-primary-outline {
    border: 1px solid #db0007;
    color: #db0007;
    background: transparent;
}

.btn-primary-outline::before {
    background: #fff;
}

.btn-primary-outline:hover {
    background: #db0007;
    color: #db0007;
}

.btn-primary-outline:active {
    background: #db0007;
    color: #fff;
}

body {
    background-color: #fff;
    overflow-x: hidden;
}

::-moz-selection {
    background: #ffcd6e;
    color: #fff;
}

::selection {
    background: #ffcd6e;
    color: #fff;
}

/* preloader */
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ffffff;
    z-index: 999999;
    display: flex;
    align-items: center;
    justify-content: center;
}

ol,
ul {
    list-style-type: none;
    margin: 0px;
}

img {
    vertical-align: middle;
    border: 0;
}

a,
a:hover,
a:focus {
    text-decoration: none;
}

a,
button,
select {
    cursor: pointer;
    transition: .2s ease;
}

a:focus,
button:focus,
select:focus {
    outline: 0;
}

a:hover {
    color: #ffbc3b;
}

a.text-primary:hover {
    color: #ffbc3b !important;
}

a.text-light:hover {
    color: #ffbc3b !important;
}

h4 {
    transition: .2s ease;
}

a h4:hover {
    color: #ffbc3b;
}

.slick-slide {
    outline: 0;
}

.section {
    padding-top: 90px;
    padding-bottom: 90px;
}

.section-sm {
    padding-top: 40px;
    padding-bottom: 40px;
}

.section-title {
    margin-bottom: 30px;
}

.bg-cover {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.border-primary {
    border-color: #ededf1 !important;
}

/* overlay */
.overlay {
    position: relative;
}

.overlay::before {
    position: absolute;
    content: '';
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: #1a1a37;
    opacity: .8;
}

.outline-0 {
    outline: 0 !important;
}

.d-unset {
    display: unset !important;
}

.bg-primary {
    background: #ffbc3b !important;
}

.bg-secondary {
    background: #1a1a37 !important;
}

.bg-gray {
    background: #f8f8f8;
}

.text-primary {
    color: #ffbc3b !important;
}

.text-color {
    color: #5c5c77;
}

.text-light {
    color: #8585a4 !important;
}

.text-lighten {
    color: #d6d6e0 !important;
}

.text-muted {
    color: #b5b5b7 !important;
}

.text-dark {
    color: #1e1e4b !important;
}

.font-secondary {
    font-family: "futura-bold";
}

.mb-10 {
    margin-bottom: 10px !important;
}

.mb-20 {
    margin-bottom: 20px !important;
}

.mb-30 {
    margin-bottom: 30px !important;
}

.mb-40 {
    margin-bottom: 40px !important;
}

.mb-50 {
    margin-bottom: 50px !important;
}

.mb-60 {
    margin-bottom: 60px !important;
}

.mb-70 {
    margin-bottom: 70px !important;
}

.mb-80 {
    margin-bottom: 80px !important;
}

.mb-90 {
    margin-bottom: 90px !important;
}

.mb-100 {
    margin-bottom: 100px !important;
}

.pl-150 {
    padding-left: 150px;
}

.zindex-1 {
    z-index: 1;
}

@media (max-width: 991px) {
    .overflow-md-hidden {
        overflow: hidden;
    }
}

.vertical-align-middle {
    vertical-align: middle;
}

.icon-md {
    font-size: 36px;
}

/* page title */
.page-title-section {
    padding: 200px 0 80px;
}

.custom-breadcrumb li.nasted {
    position: relative;
    padding-left: 25px;
}

.custom-breadcrumb li.nasted::before {
    position: absolute;
    font-family: "themify";
    content: "\e649";
    font-size: 20px;
    top: 50%;
    left: -5px;
    color: #fff;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

/* /page title */
.list-styled {
    padding-left: 25px;
}

.list-styled li {
    position: relative;
    margin-bottom: 15px;
}

.list-styled li::before {
    position: absolute;
    content: "";
    height: 10px;
    width: 10px;
    border-radius: 50%;
    background: #ffbc3b;
    left: -25px;
    top: 5px;
}

textarea.form-control {
    height: 200px;
    padding: 20px;
}

#map_canvas {
    height: 500px;
}

.top-header {
    font-size: 12px;
    transition: -webkit-transform .2s ease;
    transition: transform .2s ease;
    transition: transform .2s ease, -webkit-transform .2s ease;
    -webkit-transform-origin: top;
    transform-origin: top;
    font-weight: 600;
}

.top-header.hide {
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: top;
    transform-origin: top;
}

.navigation {
    background: linear-gradient(to right, transparent 50%, #db0007 50%);
    transition: .2s ease;
}

@media (max-width: 991px) {
    .navigation {
        background: #db0007;
    }
}

@media (max-width: 991px) {
    .navbar-collapse {
        background: #db0007;
    }
}

.navbar-nav {
    padding-left: 50px;
    background: #db0007;
}

@media (max-width: 991px) {
    .navbar-nav {
        padding-left: 0;
        background: #db0007;
    }
}

.nav-bg {
    background-color: #db0007;
}

.nav-item {
    margin: 0 15px;
    position: relative;
}

.nav-item .nav-link {
    text-transform: uppercase;
    font-weight: 600;
}

.nav-item::before {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 6px;
    width: 100%;
    content: "";
    background: #fff;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: top;
    transform-origin: top;
    transition: -webkit-transform .3s ease;
    transition: transform .3s ease;
    transition: transform .3s ease, -webkit-transform .3s ease;
}

.nav-item:hover::before,
.nav-item.active::before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transform-origin: bottom;
    transform-origin: bottom;
}

.navbar-dark .navbar-nav .nav-link {
    color: #fff;
}

link:focus,
.navbar-dark .navbar-nav .nav-link:hover {
    color: #fff;
}

.navbar-dark .navbar-nav .active>.nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show>.nav-link {
    color: #fff;
}

.navbar-expand-lg .navbar-nav .nav-link {
    padding: 40px 0px;
}

@media (max-width: 991px) {
    .navbar-expand-lg .navbar-nav .nav-link {
        padding: 20px;
    }
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10;
    background: #fff;
    box-shadow: 0 2px 5px #0000000d;
}

.navbar .dropdown:hover .dropdown-menu {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.navbar .dropdown-menu {
    box-shadow: 0px 3px 9px 0px rgba(0, 0, 0, 0.12);
    border-bottom: 5px solid #ffbc3b;
    padding: 15px;
    top: 60px;
    border-radius: 0;
    display: block;
    visibility: hidden;
    transition: .3s ease;
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    background: #fff;
}

@media (max-width: 991px) {
    .navbar .dropdown-menu {
        display: none;
        opacity: 1;
        visibility: visible;
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-transform-origin: unset;
        transform-origin: unset;
    }
}

.navbar .dropdown-menu.show {
    visibility: hidden;
}

@media (max-width: 991px) {
    .navbar .dropdown-menu.show {
        visibility: visible;
        display: block;
    }
}

.navbar .dropdown-item {
    position: relative;
    color: #1e1e4b;
    transition: .2s ease;
    text-transform: capitalize;
    font-family: "Poppins", sans-serif;
}

@media (max-width: 991px) {
    .navbar .dropdown-item {
        text-align: center;
    }
}

.navbar .dropdown-item:not(:last-child) {
    margin-bottom: 10px;
}

.navbar .dropdown-item:hover {
    color: #ffbc3b;
    background: transparent;
}

.hero-section {
    padding: 250px 0 290px;
}

.hero-slider .prevArrow,
.hero-slider .nextArrow {
    position: absolute;
    bottom: -123px;
    z-index: 9;
    padding: 15px;
    color: rgba(255, 255, 255, 0.5);
    border: 0;
    font-size: 30px;
    transition: all linear .2s;
    background: transparent;
}

.hero-slider .prevArrow:focus,
.hero-slider .nextArrow:focus {
    outline: 0;
}

.hero-slider .prevArrow:hover,
.hero-slider .nextArrow:hover {
    color: #ffbc3b;
}

.hero-slider .prevArrow {
    right: 60px;
}

.hero-slider .nextArrow {
    right: 0;
}

.hero-slider .slick-dots {
    position: absolute;
    left: 0;
    bottom: -100px;
    padding-left: 0;
}

.hero-slider .slick-dots li {
    display: inline-block;
    margin: 0 6px;
}

.hero-slider .slick-dots li.slick-active button {
    background: #ffbc3b;
}

.hero-slider .slick-dots li button {
    color: transparent;
    padding: 0;
    overflow: hidden;
    height: 10px;
    width: 10px;
    background: rgba(255, 255, 255, 0.5);
    border: 0;
    outline: 0;
}

/* banner feature */
.feature-icon {
    font-size: 50px;
    color: #db0007;
    display: inline-block;
}

.feature-blocks {
    margin-top: -100px;
    padding-left: 70px;
    padding-top: 80px;
    padding-right: 30%;
}

@media (max-width: 1400px) {
    .feature-blocks {
        padding-right: 10%;
    }
}

@media (max-width: 1200px) {
    .feature-blocks {
        padding-right: 50px;
        padding-left: 50px;
        padding-top: 30px;
    }

    .feature-blocks h3 {
        font-size: 20px;
    }
}

@media (max-width: 991px) {
    .feature-blocks {
        margin-top: 0;
        padding: 50px;
    }

    .feature-blocks h3 {
        font-size: 25px;
    }
}

/* /banner feature */
/* course */
.card-btn {
    font-size: 12px;
    padding: 5px 10px;
}

.flex-basis-33 {
    flex-basis: 33.3333%;
}

.hover-shadow {
    transition: .3s ease;
}

.hover-shadow:hover {
    box-shadow: 0px 4px 25px 0px rgba(27, 39, 71, 0.15);
}

/* /course */
/* success story */
.success-video {
    min-height: 300px;
}

.success-video .play-btn {
    position: absolute;
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

@media (max-width: 767px) {
    .success-video .play-btn {
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
}

.play-btn {
    display: inline-block;
    height: 80px;
    width: 80px;
    border-radius: 50%;
    background: #ffbc3b;
    color: #fff;
    font-size: 20px;
    text-align: center;
}

.play-btn i {
    line-height: 80px;
}

.play-btn::before {
    position: absolute;
    content: "";
    height: 0;
    width: 0;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background: #fff;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    z-index: -2;
    transition: .3s ease;
    transition-delay: .2s;
}

.play-btn::after {
    position: absolute;
    content: "";
    height: 80%;
    width: 80%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background: #ffbc3b;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    z-index: -1;
    transition: .3s ease;
}

.play-btn:hover::before {
    height: 80%;
    width: 80%;
    transition-delay: 0s;
}

.play-btn:hover::after {
    height: 0;
    width: 0;
    transition: 0s ease;
}

/* /success story */
/* events */
.card-date {
    position: absolute;
    background: #ffbc3b;
    font-family: "futura-bold";
    text-align: center;
    padding: 10px;
    color: #fff;
    top: 0;
    left: 0;
    text-transform: uppercase;
}

.card-date span {
    font-size: 40px;
}

/* /events */
/* teacher */
.teacher-info {
    width: 70%;
    bottom: 0;
    right: 0;
}

/* /teacher */
/* footer */
.newsletter {
    background-image: linear-gradient(to right, transparent 50%, #db0007 50%);
    margin-bottom: -170px;
    position: relative;
    z-index: 1;
}

.newsletter-block {
    padding-left: 50px;
    background-color: #db0007;
}

@media (max-width: 575px) {
    .newsletter-block {
        padding-left: 15px;
    }
}

.input-wrapper {
    position: relative;
}

.input-wrapper button {
    position: absolute;
    right: 25px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.form-control {
    height: 60px;
    background: #fff;
    border-radius: 0;
    padding-left: 25px;
}

.form-control:focus {
    border-color: #ffbc3b;
    box-shadow: none;
}

.newsletter-block .form-control {
    height: 90px;
}

.bg-footer {
    background-color: #000000;
}

.logo-footer {
    margin-top: -20px;
    display: inline-block;
}

.footer {
    border-color: #494a43 !important;
    padding-top: 275px;
}

/* /footer */
.filter-controls li {
    cursor: pointer;
    transition: .1s ease;
}

.filter-controls li.active {
    font-weight: 600;
    color: #ffbc3b;
}

.filter-controls li:hover {
    color: #ffbc3b;
}

/* Point-zoom Container */
.img-hover-zoom--point-zoom img {
    transform-origin: 65% 75%;
    transition: transform 7s, filter .5s ease-out;
}

/* The Transformation */
.img-hover-zoom--point-zoom:hover img {
    transform: scale(2);
}

/*# sourceMappingURL=maps/style.css.map */
 </style>
 <div class="preloader">
     <img src="{{asset('images/o.gif')}}" alt="preloader">
 </div>
 <!-- preloader end -->

 <!-- header -->
 <header class="fixed-top header">
     <!-- top header -->
     <div class="top-header py-2" style="background-color:#000000;">
         <div class="container p-1">
             <div class="row no-gutters">
                 <div class="col-lg-4 text-center text-lg-left">
                     <?php
    $contact_details=DB::table('contact_details')->get();
    ?>
                     @foreach($contact_details as $row)
                     <a class="text-white mr-3" href="callto:{{$row->phoneone}}"><strong>CALL</strong>
                         {{$row->phoneone}}</a>
                     @endforeach
                     <?php
    $social_media=DB::table('social_media')->get();
    ?>
                     @foreach($social_media as $row)
                     <ul class="list-inline d-inline">
                         <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-light"
                                 href="{{$row->facebook}}"><i cl#ass="ti-facebook"></i></a></li>
                         <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-light"
                                 href="{{$row->twitter}}"><i class="ti-twitter-alt"></i></a></li>
                         <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-light"
                                 href="{{$row->linkedin}}"><i class="ti-linkedin"></i></a></li>
                         <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text"
                                 href="{{$row->instagram}}"><i class="ti-instagram"></i></a></li>
                     </ul>
                     @endforeach
                 </div>
                 <div class="col-lg-8 text-center text-lg-right">
                     <ul class="list-inline">
                         <li class="list-inline-item"><a
                                 class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block"
                                 href="{{Route('Mainabout')}}">About</a>
                         </li>
                         <li class="list-inline-item"><a
                                 class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block"
                                 href="{{Route('contact_form')}}">Contact</a>
                         </li>
                         <li class="list-inline-item"><a
                                 class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="#">Login</a>
                         </li>
                         <!-- <li class="list-inline-item"><a class="text-uppercase text p-sm-2 py-2 px-0 d-inline-block"
                                    href="#" data-toggle="modal" data-target="#loginModal">login</a></li> -->
                         <li class="list-inline-item"><a
                                 class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block"
                                 href="app/reg.php">Sign Up</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>