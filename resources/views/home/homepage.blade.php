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
                                        </div>


                                        <br>
                                    </div>

                                </div><!--end row-->
                            </div><!--end container-->
                        </div>

                       {{-- notice box --}}

                        <div> 
                            
                            <div class="container">
                                <div class="row" id="notice">
                                
                                        <br><br>
                                        <p class="sec-title">
                                            Notice
                                        </p>
                                        <br><br>
                                        
                    
                                    <table class="table table-striped table-bordered border-primary ">
                                        <tbody><tr>
                                            <th style="text-align:center;">Published Date</th>
                                            <th style="text-align:center;">Title</th>
                                            <th style="text-align:center;">Download/View</th>
                                        </tr>
                                
                                        @foreach ($notices as $item)
                                        <tr>
                                            <td><p>{{ $item->date }}</p></td>
                                            <td><a class="notice-title" href=" " style="font-weight: normal; font-size: medium;">{{$item->title}}</a></td>
                                            <td><a class="btn btn-success" 
                                                @if ($item->pdf)
                                                href="{{ asset($item->pdf) }}"
                                                @else
                                                href="{{ route('noticeDetails',$item->id) }}"
                                                @endif
                                                

                                                >Details</a></td>
                                        </tr>	
                                        @endforeach
                                        
                                            
                                           	                        
                                            
                                                        </tbody>
                                                    </table>
                                
                    
                            
                                </div>
                            





                            </div><!--end row-->
                        </div><!--end container-->
                        {{-- end notice box --}}
                    </div>








                    <div class="section-bg">
                        <div class="container">
                            <div class="course-grid">
                                <div class="about_inner clearfix">



                                </div>
                            </div>

                        </div><!--end container-->
                    </div>





                    <div>

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
