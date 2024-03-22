<!DOCTYPE html>
<!-- saved from url=(0031)https://hstu.ac.bd/cse/dept_cse -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1 ">

    <meta property="og:url" content="https://bsfmstu.ac.bd/admission">
    <meta property="og:type" content="website">
    <meta property="og:title" content="BSFMSTU">
    <meta property="og:description" content="Bangamata Sheikh Fojilatunnessa Mujib Science and Technology University">
    <meta property="og:image" content="https://hstu.ac.bd/img/bsfmstulogo.png">

    <title>BSFMSTU</title>
    <link rel="icon" type="image/png" href="{{ asset('HSTU_files/bsfmstulogo.png') }}">


    <link href="./HSTU_files/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./HSTU_files/select_option1.css">
    <link rel="stylesheet" href="./HSTU_files/font-awesome.min.css">
    <link rel="stylesheet" href="./HSTU_files/flexslider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./HSTU_files/fullcalendar.min.css">
    <link href="./HSTU_files/css(2)" rel="stylesheet" type="text/css">
    <link href="./HSTU_files/css(3)" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./HSTU_files/css2" rel="stylesheet">

    <link rel="stylesheet" href="./HSTU_files/animate.css">
    <link rel="stylesheet" href="./HSTU_files/magnific-popup.css">
    <link rel="stylesheet" href="./HSTU_files/style.css">
    <link rel="stylesheet" href="./HSTU_files/default.css" id="option_color">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
        .section-bg {
            background: #e9ebeee4;

        }

        .title {
            font-size: 16px;
            text-transform: uppercase;
        }

        .sub_title {
            font-size: 22px;
            color: #f7ed8f;
            text-transform: uppercase;
        }


        .list-bg {
            background: #331717;
            padding: 20px;
            color: #fff;
            min-height: 90px;
            box-shadow: 0 0.4px 0.4px 0 rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }

        .min-height {
            min-height: 200px;
        }

        #top-menu li.active {
            background: #440311;
            color: #fff;
            padding: 0 5px 0 5px;
            border-radius: 5px;
        }

        #top-menu li.active a {
            color: #fff;
        }

        .caption_inner {
            background: rgba(59, 4, 7, 0.74) !important;

        }


        .panel-default>.panel-heading {
            color: #333;
            background: #83caea;
            border-color: #ddd;
        }

        .glyphicon {
            margin-right: 17px;
            font-size: 18px;
            color: #87086c;
        }

        @media (min-width: 768px) {
            .navbar {
                border-radius: unset !important;
            }

        }

        @media (max-width: 991px) {
            .container {
                padding-left: 25px !important;
                padding-right: 25px !important;
            }

        }

        .nav.navbar-nav.navbar-right {
            padding: 0px 0 !important;
        }

        .sec-title {
            font-size: 24px;
            text-transform: uppercase;
            text-align: center;
            color: #06467c;
        }

        .sec-title:after {
            content: '';
            position: relative;
            display: block;
            max-width: 100px;
            margin: 10px auto 0;
            /* border-bottom: 2px solid #0a8972; */
        }

        .event-pager {
            list-style: outside none none;
            margin: 15px 0;
            padding-left: 0;
            text-align: center;
        }

        .event-pager li {
            display: inline;
        }

        .event-pager li>a,
        .event-pager li>span {
            background-color: #0060b1;
            border: 1px solid #ddd;
            display: inline-block;
            padding: 5px 14px;
            color: #fff;
        }

        .event-pager li>a:focus,
        .event-pager li>a:hover {
            background-color: #000;
            text-decoration: none;
        }


        .logo {
            background: #fff none repeat scroll 0 0;
            left: 0;
            width: 105px;
            height: 105px;
            margin-top: -11px;
            padding: 0px 5px;
            position: absolute;
            top: 0;
            z-index: 999;
        }

        @media (max-width: 767px) {
            .logo {
                height: unset;
            }

            .banner {
                margin-top: 40px;

            }

            .fixed-nav-bar {

                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999;
                width: 100%;
                height: auto;

            }

            .topbar {
                display: none;
            }
        }



        @media screen and (max-width: 1199px) and (min-width: 768px) {
            .logo {

                width: 85px;
                height: 85px;
            }

            .header {
                margin-left: 60px;
                padding-right: 60px;
            }

        }

        @media screen and (max-width: 1199px) and (min-width: 991px) {

            .header {
                margin-left: 20px;

            }

        }

        @media (min-width: 768px) and (max-width: 1000px) {
            .collapse {
                display: none !important;
            }
        }


        @media (min-width: 1200px) {
            .header .navbar-default .navbar-nav li a {

                padding: 5px 5px !important;

            }

            .header .navbar-default .navbar-nav li {

                margin-top: 6px;

            }
        }


        .header .navbar-brand {

            width: 60px !important;
        }

        .thumbnail {
            box-shadow: 0 0.4px 0.4px 0 rgba(0, 0, 0, 0.5);
            transition: 0.3s;
            min-width: 40%;
            border-radius: 5px;
        }

        .upcoming_events span.date {

            padding: 5px 0;
            background: #83caea;
            border: 1px solid #dce4ea;
        }

        .course-grid span a {
            font-size: 15px !important;
            margin: 20px 0 20px !important;
        }

        .menuFooter {
            background-color: #6b1e1e;
        }

        .head-foot-menu {
            color: #fae4a1;
            text-transform: uppercase;
            font-size: 16px;
        }

        .menuFooter ul li a {
            color: #fff;
            text-transform: capitalize;
            font-size: 13px;
        }

        .downs {
            max-height: 500px;
            overflow-y: scroll;
        }

        .upcoming_events li.related_post_sec.single_post {
            margin-bottom: 8px !important;
        }

        .upcoming_events .btn {
            margin-top: 5px !important;
        }

        .related_post_sec ul li {
            padding: 0 0 18px !important;
    </style>
</head>

<body style="padding-top: 0px;">

    <div class="main_wrapper">

        @include('home.topbar')
        @include('home.navbar')
        @section('content')
        <div class="row">
            <input type="hidden" name="" value="">
            <div class="col-md-12">
                <div class="row">
                    <style>
                        .div-mem {
                            min-height: 395px;
                        }

                        .div-height {
                            height: 170px;
                            text-align: center;
                        }

                        .profile-pic img {
                            border-radius: 50%;
                        }

                        .even {
                            background: #b0c7f9;
                            margin: 0;
                        }

                        .odd {
                            background: #c1dbfe;
                            margin: 0;
                        }

                        @media (min-width: 1200px) {
                            .profile-pic img {
                                height: 160px;
                                width: 160px;
                            }

                        }

                        @media (max-width: 1200px) {

                            .div-height {
                                height: auto;
                            }
                        }

                        @media (max-width: 992px) {
                            .profile-pic img {
                                height: 100px;
                                width: 100px;
                            }

                            .div-height {
                                height: auto;
                            }


                        }

                        @media (max-width: 767px) {

                            .profile-pic img {
                                height: 120px;
                                width: 120px;
                            }

                            .div-height {
                                height: unset !important;
                                text-align: center;
                            }

                        }

                        @media (max-width: 479px) {

                            .div-height {
                                height: unset !important;
                                text-align: center;
                            }



                        }
                    </style>


                    @include('home.banner')


                    <div class="mainContent clearfix">
                        <div>
                            <div class="container">

                                <div class="row">
                                    <div class="col-xs-12" style="padding-bottom:20px;">
                                        <p class="sec-title">
                                            Message from the Chairman
                                        </p>


                                        <div class="pic col-xs-12 col-sm-3">
                                            <figure>
                                                <img class="img-responsive" src="./HSTU_files/chairman_sir.jpg"
                                                    alt=""
                                                    style=" margin-right:10px;  border:1px solid #ddd;margin-left: auto;
                                    margin-right: auto; width:200px; height:200px;border-radius: 50%;">
                                                <figcaption style="text-align: center;"><b>Md. Humaun Kabir <br> <a
                                                            href=" ">View Profile</a> </b><br></figcaption>
                                            </figure>
                                        </div>
                                        <div class="txt col-xs-12 col-sm-9">
                                            <div class="block_quate" style="margin:unset !important">
                                                <p class="text-justify">

                                                    <b> Welcome to the Department of Computer Science and Engineering
                                                        (CSE) at Bangamata Sheikh Fojilatunnesa Mujib Science &
                                                        Technology University (BSFMSTU). I encourage you to browse and
                                                        find detailed information about our undergraduate programs, our
                                                        faculty members, their research interests, and the broad range
                                                        of activities underway in the Department. I believe, the
                                                        department is the most forward-looking, vibrant, and dynamic
                                                        department at BSFMSTU. The CSE Department is committed to
                                                        provide an outstanding educational experience for its students
                                                        and prepare them for the highest personal and professional
                                                        growth. We believe in student-centered and practice-oriented
                                                        education to train the future workforce and meet the challenges
                                                        of existing and emerging technologies of the 21st century. We
                                                        are committed to being an integral part in the struggle of
                                                        Bangladesh for sustainable growth and development. In the
                                                        Department, we have combined teaching excellence,
                                                        industry-oriented research, and development from a global
                                                        perspective. Various kinds of activities, academic and
                                                        extra-curriculum have brought this department to both national
                                                        and international focus. The mission of the Department of
                                                        Computer Science and Engineering (CSE) is to explore new
                                                        frontiers of Science, Engineering, and Technology through
                                                        academic search and development. Our vision is to achieve the
                                                        highest excellency in academic programs in the field of CSE.
                                                        <br>
                                                        <br>
                                                        Thank you for your interest in the Department of CSE at BSFMSTU.
                                                        If you have any query, please do not hesitate to contact me
                                                        through humaun@bsfmstu.ac.bd</b>
                                                    <br>
                                                    <br>
                                                <p><b>Md. Humaun Kabir</b></p>

                                                <p><b>Chairman</b></p>
                                                <p><b>Department of Computer Science and Engineering</b></p>

                                                <p>&nbsp;</p>

                                                <p>&nbsp;</p>





                                                <br>
                                                <p></p>

                                                <p></p>
                                                <p
                                                    style="float: right;  text-align: right;color: #000; font-weight: bold;">
                                                    <br>Chairman, Department of Computer Science and Engineering.
                                                </p>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div><!--end container-->
                        </div>


                        <div class="section-bg" style="padding-bottom:30px;">
                            <div class="container">

                                <div class="row" id="vission">
                                    <div class="col-xs-12">
                                        <br><br>
                                        <p class="sec-title">
                                            Vission &amp; Mission
                                        </p>
                                        <br>
                                    </div>





                                    <div class="col-xs-12 col-sm-6 ">
                                        <p
                                            style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                            <b style="color:#87086c;">!</b><br>No Data Available</p>
                                    </div>

                                    <div id="mission" class="col-xs-12 col-sm-6">
                                        <p
                                            style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                            <b style="color:#87086c;">!</b><br>No Data Available</p>
                                    </div>
                                    <br>


                                </div><!--end row-->

                            </div><!--end container-->
                        </div>

                        <div class="">
                            <div class="container">


                                <div class="row" id="fac_mem">
                                    <div class="col-xs-12">
                                        <br><br>
                                        <p class="sec-title">
                                            Faculty Member
                                        </p>
                                        <br><br>


                                        <div class="row">




                                            <div class="col-sm-6 col-md-3 ">
                                                <div class="thumbnail div-mem">
                                                    <div class="profile-pic div-height">
                                                        <img src="./HSTU_files/mahmudulalam_sir.jpg">
                                                    </div>

                                                    <div class="caption">
                                                        <p class="text-center soc-icon">
                                                            <span style="color:#b02605; font-size:16px">Mahmudul
                                                                Alam</span>
                                                            <br>
                                                            <b><i>ASSISTANT PROFESSOR</i></b>
                                                            <br>

                                                            <b><i> Department of Computer Science & Engineering</i></b>
                                                            <br>
                                                            <b>Email: </b>mahmudul@bsfmstu.ac.bd <br>
                                                            <b>Mobile No: </b>+8801954218742 <br>
                                                            <br>
                                                            <a target="_blank" class="btn btn-primary" role="button"
                                                                href="https://hstu.ac.bd/teacher/mamun">View Profile <i
                                                                    class="fa fa-angle-double-right dept-icon"
                                                                    aria-hidden="true"></i></a>

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-6 col-md-3 ">
                                                <div class="thumbnail div-mem">
                                                    <div class="profile-pic div-height">
                                                        <img src="./HSTU_files/chairman_sir.jpg">
                                                    </div>

                                                    <div class="caption">
                                                        <p class="text-center soc-icon">
                                                            <span style="color:#b02605; font-size:16px">Md. Humaun
                                                                Kabir</span>
                                                            <br>
                                                            <b><i>ASSISTANT PROFESSOR</i></b>
                                                            <br>
                                                            <b><i> Department of Computer Science & Engineering</i></b>
                                                            <br>
                                                            <b>Email: </b>humaun@bsfmstu.ac.bd <br>
                                                            <b>Mobile No: </b>+8801732303155 <br>
                                                            <br>
                                                            <a target="_blank" class="btn btn-primary" role="button"
                                                                href=" ">View Profile <i
                                                                    class="fa fa-angle-double-right dept-icon"
                                                                    aria-hidden="true"></i></a>

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-6 col-md-3 ">
                                                <div class="thumbnail div-mem">
                                                    <div class="profile-pic div-height">
                                                        <img src="./HSTU_files/sujitroy_sir.jpg">
                                                    </div>

                                                    <div class="caption">
                                                        <p class="text-center soc-icon">
                                                            <span style="color:#b02605; font-size:16px">Sujit Roy
                                                            </span>
                                                            <br>
                                                            <b><i>ASSISTANT PROFESSOR</i></b>
                                                            <br>
                                                            <b><i> Department of Computer Science & Engineering</i></b>
                                                            <br>
                                                            <b>Email: </b>sujit@bsfmstu.ac.bd <br>
                                                            <b>Mobile No: </b>+8801712262634 <br>
                                                            <br>
                                                            <a target="_blank" class="btn btn-primary" role="button"
                                                                href=" ">View Profile <i
                                                                    class="fa fa-angle-double-right dept-icon"
                                                                    aria-hidden="true"></i></a>

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-6 col-md-3 ">
                                                <div class="thumbnail div-mem">
                                                    <div class="profile-pic div-height">
                                                        <img src="./HSTU_files/shabbir_sir.jpg">
                                                    </div>

                                                    <div class="caption">
                                                        <p class="text-center soc-icon">
                                                            <span style="color:#b02605; font-size:16px">Shabbir Mahmood

                                                            </span>
                                                            <br>
                                                            <b><i>LECTURER</i></b>
                                                            <br>
                                                            <b><i> Department of Computer Science & Engineering</i></b>
                                                            <br>
                                                            <b>Email: </b>shabbir.cse@bsfmstu.ac.bd <br>
                                                            <b>Mobile No: </b>+8801777291291 <br>
                                                            <br>
                                                            <a target="_blank" class="btn btn-primary" role="button"
                                                                href="">View Profile <i
                                                                    class="fa fa-angle-double-right dept-icon"
                                                                    aria-hidden="true"></i></a>

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-6 col-md-3 ">
                                                <div class="thumbnail div-mem">
                                                    <div class="profile-pic div-height">
                                                        <img src="./HSTU_files/hasan_sir.jpg">
                                                    </div>

                                                    <div class="caption">
                                                        <p class="text-center soc-icon">
                                                            <span style="color:#b02605; font-size:16px">Mohammad Hasan



                                                            </span>
                                                            <br>
                                                            <b><i>LECTURER</i></b>
                                                            <br>
                                                            <b><i> Department of Computer Science & Engineering</i></b>
                                                            <br>
                                                            <b>Email: </b>hasan.cse@bsfmstu.ac.bd <br>
                                                            <b>Mobile No: </b>+8801794193646 <br>
                                                            <br>
                                                            <a target="_blank" class="btn btn-primary" role="button"
                                                                href=" ">View Profile <i
                                                                    class="fa fa-angle-double-right dept-icon"
                                                                    aria-hidden="true"></i></a>

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>













                                        </div>


                                        <br>
                                    </div>

                                </div><!--end row-->
                            </div><!--end container-->
                        </div>



                        <div class="section-bg">
                            <div class="container">


                                <div class="row" id="off_staff">
                                    <div class="col-xs-12">
                                        <br><br>
                                        <p class="sec-title">
                                            Officer &amp; Staff
                                        </p>
                                        <br><br>
                                        <div class="row">
                                            <p
                                                style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                                <b style="color:#87086c;">!</b><br>No Data Available</p>
                                        </div>
                                        <br>
                                    </div>

                                </div><!--end row-->
                            </div><!--end container-->
                        </div>





                        <div>
                            <div class="container">
                                <div class="row" id="curriculam">
                                    <div class="col-xs-12">
                                        <br><br>
                                        <p class="sec-title">
                                            Curriculam
                                        </p>
                                        <br><br>
                                        <p>Courses offered by department of <b>Computer Science and Engineering</b><br>
                                            <a target="_blank"
                                                href="http://www.hstu.ac.bd/uploads/curriculam/Course_%20Offered_by_Dept._of_CSE_Latest.pdf">(click
                                                here to download)<span class="fa fa-download"></span></a>
                                        </p>

                                    </div>

                                </div><!--end row-->
                            </div><!--end container-->
                        </div>
                        <div class="section-bg">
                            <div class="container">
                                <div class="row" id="research">
                                    <div class="col-xs-12">
                                        <br><br>
                                        <p class="sec-title">
                                            Research
                                        </p>
                                        <br>
                                        <p
                                            style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                            <b style="color:#87086c;">!</b><br>No Data Available</p>
                                    </div>

                                </div><!--end row-->
                            </div><!--end container-->
                        </div>

                        <div>
                            <div class="container">
                                <div class="row" id="notice">
                                    <div class="col-xs-12 col-sm-6">

                                        <br><br>
                                        <p class="sec-title">
                                            Notice
                                        </p>
                                        <br><br>
                                        <div class="list_block related_post_sec">
                                            <div class="upcoming_events">
                                                <ul>

                                                    <li class="related_post_sec single_post">
                                                        <span class="date-wrapper">
                                                            <span class="date"><span>07</span>Sept 2023</span>
                                                        </span>
                                                        <div class="rel_right">
                                                            <h6 class="note">
                                                                <a href="">
                                                                    M.Sc. Class Routine Jul-Dec 2023 </a>
                                                            </h6>
                                                            <div class="meta">

                                                                <span class="event-time "><i
                                                                        class="fa fa-clock-o"></i>02:14 PM</span>

                                                                <a href=""
                                                                    class="pull-right button btn btn-xs btn-success"
                                                                    style="color: #fff">Read more</a>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="related_post_sec single_post">
                                                        <span class="date-wrapper">
                                                            <span class="date"><span>06</span>Sept 2023</span>
                                                        </span>
                                                        <div class="rel_right">
                                                            <h6 class="note">
                                                                <a href="">
                                                                    CSE 302 2022 Supervisor Allocation Notice </a>
                                                            </h6>
                                                            <div class="meta">

                                                                <span class="event-time "><i
                                                                        class="fa fa-clock-o"></i>04:15 PM</span>

                                                                <a href=""
                                                                    class="pull-right button btn btn-xs btn-success"
                                                                    style="color: #fff">Read more</a>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="related_post_sec single_post">
                                                        <span class="date-wrapper">
                                                            <span class="date"><span>03</span>Sept 2023</span>
                                                        </span>
                                                        <div class="rel_right">
                                                            <h6 class="note">
                                                                <a href="">
                                                                    CSE 402 2022 Supervisor Allocation Notice </a>
                                                            </h6>
                                                            <div class="meta">

                                                                <span class="event-time "><i
                                                                        class="fa fa-clock-o"></i>04:31 PM</span>

                                                                <a href="h"
                                                                    class="pull-right button btn btn-xs btn-success"
                                                                    style="color: #fff">Read more</a>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="related_post_sec single_post">
                                                        <span class="date-wrapper">
                                                            <span class="date"><span>30</span>Aug 2023</span>
                                                        </span>
                                                        <div class="rel_right">
                                                            <h6 class="note">
                                                                <a href="">
                                                                    CSE 452 2021 Updated Group List </a>
                                                            </h6>
                                                            <div class="meta">

                                                                <span class="event-time "><i
                                                                        class="fa fa-clock-o"></i>10:54 AM</span>

                                                                <a href=""
                                                                    class="pull-right button btn btn-xs btn-success"
                                                                    style="color: #fff">Read more</a>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="related_post_sec single_post">
                                                        <span class="date-wrapper">
                                                            <span class="date"><span>16</span>Sept 2023</span>
                                                        </span>
                                                        <div class="rel_right">
                                                            <h6 class="note">
                                                                <a href="">
                                                                    CSE 402 2022 Proposal Submission Notice </a>
                                                            </h6>
                                                            <div class="meta">

                                                                <span class="event-time "><i
                                                                        class="fa fa-clock-o"></i>10:33 AM</span>

                                                                <a href=""
                                                                    class="pull-right button btn btn-xs btn-success"
                                                                    style="color: #fff">Read more</a>

                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="meta text-center"> <a href=""
                                                class="btn button btn-md btn-success" style="color: #fff"> View all
                                                notices</a>
                                        </div>



                                    </div>

                                    <div class="col-xs-12 col-sm-6">

                                        <br><br>
                                        <p class="sec-title">
                                            Recent Events
                                        </p>
                                        <br><br>
                                        <div class="downs list_block related_post_sec">
                                            <p
                                                style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                                <b style="color:#87086c;">!</b><br>No Data Available</p>
                                        </div>

                                        <div class="upcoming_events">
                                            <ul>

                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>14 </span>July 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a href="">
                                                                Seminar on career Opportunities for CSE Gradutes </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>02:14 PM</span>

                                                            <a href=""
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>06</span>Dec 2022</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a href="">
                                                                Industrial Tour 2022 at Bangladesh Data Center Limited
                                                            </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>04:15 PM</span>

                                                            <a href=""
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>12</span>June 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a href="">
                                                                Seminar on 4IR in Research and Education </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>04:31 PM</span>

                                                            <a href="h"
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>30</span>Jul 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a href="">
                                                                Mr. Md. Humaun Kabir, Asst. Prof. of CSE, Attended 12
                                                                Days Sakura Science Exchange Program in Japan </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>10:54 AM</span>

                                                            <a href=""
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>12</span>June 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a href="">
                                                                Two Days Long Seminar, Dept. of CSE, BSFMSTU </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>10:33 AM</span>

                                                            <a href=""
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>






                            </div><!--end row-->
                        </div><!--end container-->
                    </div>





                    <div>
                        <div class="container">
                            <div class="row" id="notice">
                                <div class="col-xs-12 col-sm-6">

                                    <br><br>
                                    <p class="sec-title">
                                        Notice
                                    </p>
                                    <br><br>
                                    <div class="list_block related_post_sec">
                                        <div class="upcoming_events">
                                            <ul>

                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>07</span>Aug 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a
                                                                href="https://hstu.ac.bd/page/single_notice/type/d/id/158">
                                                                M.Sc. Class Routine Jul-Dec 2023 </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>02:14 PM</span>

                                                            <a href="https://hstu.ac.bd/page/single_notice/type/d/id/158"
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>06</span>Aug 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a
                                                                href="https://hstu.ac.bd/page/single_notice/type/d/id/157">
                                                                CSE 302 2022 Supervisor Allocation Notice </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>04:15 PM</span>

                                                            <a href="https://hstu.ac.bd/page/single_notice/type/d/id/157"
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>03</span>Aug 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a
                                                                href="https://hstu.ac.bd/page/single_notice/type/d/id/156">
                                                                CSE 402 2022 Supervisor Allocation Notice </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>04:31 PM</span>

                                                            <a href="https://hstu.ac.bd/page/single_notice/type/d/id/156"
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>30</span>Jul 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a
                                                                href="https://hstu.ac.bd/page/single_notice/type/d/id/155">
                                                                CSE 452 2021 Updated Group List </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>10:54 AM</span>

                                                            <a href="https://hstu.ac.bd/page/single_notice/type/d/id/155"
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="related_post_sec single_post">
                                                    <span class="date-wrapper">
                                                        <span class="date"><span>16</span>Jul 2023</span>
                                                    </span>
                                                    <div class="rel_right">
                                                        <h6 class="note">
                                                            <a
                                                                href="https://hstu.ac.bd/page/single_notice/type/d/id/154">
                                                                CSE 402 2022 Proposal Submission Notice </a>
                                                        </h6>
                                                        <div class="meta">

                                                            <span class="event-time "><i
                                                                    class="fa fa-clock-o"></i>10:33 AM</span>

                                                            <a href="https://hstu.ac.bd/page/single_notice/type/d/id/154"
                                                                class="pull-right button btn btn-xs btn-success"
                                                                style="color: #fff">Read more</a>

                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="meta text-center"> <a
                                            href="https://hstu.ac.bd/page/all_notice/type/d/id/1"
                                            class="btn button btn-md btn-success" style="color: #fff"> View all
                                            notices</a>
                                    </div>



                                </div>

                                <div class="col-xs-12 col-sm-6">

                                    <br><br>
                                    <p class="sec-title">
                                        Download
                                    </p>
                                    <br><br>
                                    <div class="downs list_block related_post_sec">
                                        <p
                                            style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                            <b style="color:#87086c;">!</b><br>No Data Available</p>
                                    </div>

                                </div>






                            </div><!--end row-->
                        </div><!--end container-->
                    </div>


                    <div class="section-bg">
                        <div class="container">
                            <div class="course-grid">
                                <div class="about_inner clearfix">


                                    <div class="row" id="news">
                                        <div class="col-xs-12">
                                            <br><br>
                                            <p class="sec-title">
                                                News and Events
                                            </p>
                                            <br><br>

                                            <div class="carousel slide media-carousel" id="event">
                                                <div class="carousel-inner">


                                                </div> <!--Corousel Inner-->

                                                <p
                                                    style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                                    <b style="color:#87086c;">!</b><br>No Data Available</p>

                                            </div><!--Media Corousel -->




                                        </div>

                                    </div><!--end row-->
                                </div>
                            </div>

                        </div><!--end container-->
                    </div>


                    <div>
                        <div class="container">

                            <div class="row" id="gallery">
                                <div class="col-xs-12">
                                    <br><br>
                                    <p class="sec-title">
                                        Gallery
                                    </p>
                                    <br><br>


                                    <p
                                        style="padding:10px; text-align:center; line-height:20px; text-transform: uppercase;  font-size:15px; background: #f5f5f5; color:d2d2d2;">
                                        <b style="color:#87086c;">!</b><br>No Data Available</p>
                                </div>

                            </div><!--end row-->
                        </div><!--end container-->
                    </div>


                    <div>
                        <div class="container">
                            <div class="row" id="contact">
                                <div class="col-xs-12">
                                    <br><br>
                                    <p class="sec-title">
                                        Contact
                                    </p>
                                    <br><br>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="sidebar">
                                            <div class="">
                                                <p class="thumbnail"
                                                    style="background:#ebf2fb !important; padding:20px !important; font-size:14px !important; font-family: "
                                                    open="" sans',="" sans-serif;="" '="">1st Floor<br>Dr. M.A. Wazed Building<br><i class="fa fa-map-marker"></i> BSFMSTU<br><br><i class="fa fa-globe" aria-hidden="true"></i> <b>Web: </b>https://bsfmstu.ac.bd/cse/dept_cse<br><br><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;<b>Email:</b> humaun@bsfmstu.ac.bd<br><br><i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;&nbsp;<b>Mobile:</b>  +8801732303155</p>							</div><!--end sidebar item-->
      </div><!--end sidebar-->
     </div>
  
  <div class="col-xs-12 col-sm-6 custom_left">
      <div class="sidebar">
       <div class="list_block custom">
        <div class="location_map">
         <iframe src="./HSTU_files/embed.html" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
       
       </div><!--end sidebar item-->
      </div><!--end sidebar-->
     </div>
  
  
                                        
   </div>
    
   </div><!--end row-->
 
 </div><!--end container-->
 </div>

    </div>

    </div>
    </div>
    </div>
        @endsection

       

   @include('home.footer')

    </div>

    <!-- JQUERY SCRIPTS -->
    <script src="./HSTU_files/jquery.min.js.download"></script>
    <script src="./HSTU_files/bootstrap.min.js.download"></script>
    <script src="./HSTU_files/jquery.flexslider.js.download"></script>
    <script src="./HSTU_files/jquery.selectbox-0.1.3.min.js.download"></script>
    <script src="./HSTU_files/jquery.magnific-popup.js.download"></script>
    <script src="./HSTU_files/waypoints.min.js.download"></script>
    <script src="./HSTU_files/jquery.counterup.js.download"></script>
    <script src="./HSTU_files/wow.min.js.download"></script>
    <script src="./HSTU_files/navbar.js.download"></script>
    <script src="./HSTU_files/moment.min.js.download"></script>
    <script src="./HSTU_files/fullcalendar.min.js.download"></script>
    <script src="./HSTU_files/custom.js.download"></script>
    <script src="./HSTU_files/custom2.js.download"></script>


    <script>
        $('.navbar-collapse a').click(function() {
            $(".navbar-collapse").collapse('hide');
        });
    </script>

    <!---
  <script>
      $(document).ready(function() {
          // Add smooth scrolling to all links
          $("#main-nav ul li a").on('click', function(event) {

              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                      scrollTop: $(hash).offset().top
                  }, 200, function() {

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                  });
              } // End if
          });
      });
  </script>
  --->


</body>

</html>
