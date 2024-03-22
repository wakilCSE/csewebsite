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
        }
        .profile-pic{
            height: 300px;
            weight: 300px;
        }
    </style>
</head>

<body style="padding-top: 0px;">

    <div class="main_wrapper">

        @include('home.topbar')
        @include('home.navbar')
        <div class="container" style="padding: 100px;">
        
            {{-- notice details --}}
            <div class="post recentevent post-3509">
              <div class="recentevent-single-item">
                  <h2>Seminar on 4IR in Research and Education</h2>
                  <div class="recentevent-single-info">
                      <div class="recentevent-date"><span><i class="fa fa-calendar-o"></i> </span></div>
                      <div class="recentevent-time"><span><i class="fa fa-clock-o"></i> </span></div>
                  </div>
                  <div class="recentevent-img">
                      <img width="960" height="500" src="https://bsfmstu.ac.bd/cse/wp-content/uploads/sites/10/2023/03/287767285_1441941386321447_2132304716258681606_n.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://bsfmstu.ac.bd/cse/wp-content/uploads/sites/10/2023/03/287767285_1441941386321447_2132304716258681606_n.jpg 960w, https://bsfmstu.ac.bd/cse/wp-content/uploads/sites/10/2023/03/287767285_1441941386321447_2132304716258681606_n-300x225.jpg 300w, https://bsfmstu.ac.bd/cse/wp-content/uploads/sites/10/2023/03/287767285_1441941386321447_2132304716258681606_n-768x576.jpg 768w" sizes="(max-width: 960px) 100vw, 960px">                        </div>
                  <div class="recentevent-single-content"> 
                     <br>                           
                     <p>The Fourth Industrial Revolution (4IR) marks a pivotal moment in human history, defined by the rapid integration of cutting-edge technologies into our daily lives and industries. At its core, 4IR encompasses the convergence of digital, biological, and physical domains, shaping a new era of innovation and transformation. Artificial Intelligence (AI), Internet of Things (IoT), big data analytics, robotics, and other groundbreaking technologies are driving this revolution, fundamentally altering how we live and work. From smart cities and automated manufacturing processes to personalized healthcare and immersive experiences through augmented reality, 4IR is reshaping the global landscape. While promising unprecedented opportunities for efficiency, connectivity, and progress, it also poses challenges, necessitating careful consideration of ethical, social, and economic implications. As we navigate this era of profound change, stakeholders across sectors are tasked with adapting to and harnessing the potential of the Fourth Industrial Revolution for the benefit of society.





                     </p>
                  </div>                        
              </div>
          </div>
            {{-- notice details end--}}
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