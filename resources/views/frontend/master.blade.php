<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <link href="{{url('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{url('public/css/bootstrap-theme.min.css')}}" rel="stylesheet"/>
    <link href="{{url('public/css/style.css')}}" rel="stylesheet"/>
    <script src="{{url('public/js/jquery.min.js')}}"></script>
</head>

<body>
<div class="col-md-12 top" id="top">
    <div class="col-md-9 top-left">
        <div class="col-md-3">
            <span class="day">{{date('l, M, d, Y')}}</span>
        </div>
        <div class="col-md-9">
            <span class="latest">Latest: </span> <a
                href="{{url('article')}}/{{$lastnews->slug}}">{{$lastnews->title}}</a>
        </div>
    </div>
    <div class="col-md-3 top-social">
        @foreach($settings->social as $key=>$social)
            <a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach
    </div>
</div>

<div class="col-md-12 brand">
    <div class="col-md-4">
        @if($settings->image)
            <img src="{{url('public/settings')}}/{{$settings->image}}" class="mt-0" width="100%" height="100vh"
                     alt="Newspaper Logo">
        @endif
    </div>
    <div class="col-md-8">
        @if($leaderboard->image)
            <a href="{{$leaderboard->url}}">
                <img src="{{url('public/advertisements')}}/{{$leaderboard->image}}" width="100%" height="100vh"
                     alt="{{$leaderboard->title}}"/>
            </a>
        @endif
    </div>
</div>

<div class="col-md-12 main-menu">
    <div class="col-md-10 menu">
        <nav class="navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand"><font color="#555555">COLOR</font><font color="#2ca0c9">MAG</font></span>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav nav-justified">
                    <li><a href="{{url('/')}}" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
                    @foreach($categories as $cat)
                        <li><a href="{{url('/category')}}/{{$cat->slug}}">{{$cat->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-md-2">
        <div class="search">
            <input type="search" id="search_content" class="form-control"/>
            <span class="glyphicon glyphicon-search search-btn"></span>
            <div id="search-output"></div>
        </div>
    </div>
</div>
{{--end header--}}

@yield('content')

{{--footer start--}}
<div class="col-md-12 bottom">
    <div class="col-md-4">
        <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
        @if($settings->image)
            <img src="{{url('public/settings')}}/{{$settings->image}}" width="100" alt="Newspaper Logo">
        @endif
        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-md-4">
        <div class="col-md-12">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span>
            </h3>
            <ul class="nav">
                @foreach($pages as $page)
                    <li><a href="{{url('page')}}/{{$page->slug}}" class="text-uppercase">{{$page->title}}</a></li>
                @endforeach
                    <li><a href="{{url('contact-us')}}" class="text-uppercase">Contact Us</a></li>
            </ul>
        </div>

    </div>
    <div class="col-md-4">
        <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>
        <span class="name"><font color="#e03521">COLOR</font><font color="#fff">MAG</font></span><br/>
        <p>Follow us at:</p>
        @foreach($settings->social as $key=>$social)
            <a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach
        <a href="#top" class="goto"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
</div>

<div class="col-md-12 text-center copyright">
    Copyright &copy; {{date('Y')}} | Laranews | Powered by: <a href="#">Isaac Productions</a>
</div>

<script src="{{url('public/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        var duration = 500;
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('.goto').fadeIn(duration);
            } else {
                $('.goto').fadeOut(duration);
            }
        });

        $('.goto').click(function (event) {
            event.preventDefault();
            $('html').animate({scrollTop: 0}, duration);
            return false;
        })

        //search code of ajax
        $('#search_content').keyup(function () {
            var text = $('#search_content').val();
            if (text.length < 1) {
                $('#search-output').hide();
                return false;
            } else {
                $.ajax({
                    type: "get",
                    url: "{{url('search-content')}}",
                    data: {text: text},
                    success: function (res) {
                        $('#search-output').show();
                        $('#search-output').html(res);
                    }
                })
            }
        })
    });
</script>
</body>
</html>

