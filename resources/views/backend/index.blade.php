@extends('backend.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 title">
            <h1><i class="fa fa-bars"></i> DASHBOARD</h1>
        </div>

        <div class="col-sm-12">
            <div class="content">
                <h2>Welcome to Dashboard</h2>
                <p class="welcome-text">We,ve assembled some links for you to get started.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>Get Started</h4><br>
                        <button type="button" class="btn btn-lg btn-primary">Documentation</button>
                    </div>
                    <div class="col-sm-4 quick-links">
                        <h4>View Records</h4>
                        <p><a href="#"><i class="fa fa-bookmark-o"></i> View All Posts</a></p>
                        <p><a href="#"><i class="fa fa-image"></i> View All Images</a></p>
                        <p><a href="#"><i class="fa fa-video-camera"></i> View All Videos</a></p>
                        <p><a href="#"><i class="fa fa-file"></i> View All Pages</a></p>
                        <p><a href="#"><i class="fa fa-bar-chart"></i> View All Reports</a></p>
                        <p><a href="#"><i class="fa fa-users"></i> View All Users</a></p>
                    </div>
                    <div class="col-sm-4 quick-links">
                        <h4>Add Records</h4>
                        <p><a href="#"><i class="fa fa-bookmark-o"></i> Add Posts</a></p>
                        <p><a href="#"><i class="fa fa-image"></i> Add Images</a></p>
                        <p><a href="#"><i class="fa fa-video-camera"></i> Add Videos</a></p>
                        <p><a href="#"><i class="fa fa-file"></i> Add Pages</a></p>
                        <p><a href="#"><i class="fa fa-bar-chart"></i> Add Reports</a></p>
                        <p><a href="#"><i class="fa fa-users"></i> Add Users</a></p>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="col-sm-3">
                    <img src="{{url('public/images/logo-big.png')}}" width="100%">
                </div>
                <div class="col-sm-9">
                    <p><b><a href="http://www.webtrickshome.com" target="_blank">Webtrickshome.com</a></b> The ultimate home for prospective web developers.</p>
                    <div class="row">
                        <ul class="nav navbar-nav">
                            <li><a href="#">photoshop</a></li>
                            <li><a href="#">html</a></li>
                            <li><a href="#">css</a></li>
                            <li><a href="#">jquery</a></li>
                            <li><a href="#">php basics</a></li>
                            <li><a href="#">procedural php</a></li>
                            <li><a href="#">object oriented php</a></li>
                            <li><a href="#">laravel</a></li>
                            <li><a href="#">wordpress</a></li>
                        </ul>
                    </div>
                    <p>
                        <a href="https://www.facebook.com/webtrickshome/" target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCcfzunR364Vv1NUWTKk78QA" target="_blank" class="btn btn-danger"><i class="fa fa-youtube"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
