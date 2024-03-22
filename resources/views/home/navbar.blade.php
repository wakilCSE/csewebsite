<div class="header clearfix">
    <nav class="navbar navbar-main navbar-default fixed-nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-11">
                    <div class="header_inner">
                        <!-- Brand and toggle get grouped for better mobile display -->

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#main-nav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="hidden-lg hidden-md hidden-sm navbar-brand clearfix" href=""><img
                                    class="img-responsive_old " style="height:50px; width:50px"
                                    src=""> </a>
                            <span class="hidden-lg hidden-md hidden-sm" style=""><span
                                    style="color:#a8207d">Department of Computer Science and
                                    Engineering|Faculty of Computer Science and Engineering</span> |<a
                                    href="https://hstu.ac.bd/">BSFMSTU</a> </span>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav navbar-right" id="top-menu">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="active"><a href="{{ url('/mission & vision') }}">Vision &amp;
                                        Mission</a></li>
                                <li class="active"> <a href="{{ url('/faculty') }}">Faculty</a></li>
                                
                                <li class="active"> <a href="{{ url('/offices & stuff') }}">Officer &amp;
                                        Staff</a></li>
                                <li class="active"> <a href="{{url('/curriculum')}}">Curriculum</a></li>
                                <li class="active"> <a href="{{url('/research')}}">Research</a></li>
                                <li class="active"> <a href="#notice">Notice</a></li>
                                <li class="active"> <a href="{{ route('login') }}">Login</a></li>
                                {{-- <li class="active"> <a href="{{url('/news')}}">News &amp; Events</a></li>  --}}
                                <li class="active"> <a href="{{url('/gallery')}}">Gallery</a></li>
                                <li class="active"> <a href="{{ route('register') }}">Register</a></li>

                            </ul>
                        </div><!-- navbar-collapse -->
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </nav><!-- navbar -->
</div>