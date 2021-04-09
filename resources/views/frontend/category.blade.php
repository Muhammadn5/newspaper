@extends('frontend.master')
@section('title', $cat->title. ' | ' . 'Newspaper')
@section('content')

<div class="wrapper">

    <div class="row" style="margin-top:30px;">
        <div class="col-md-8">
            <div class="col-md-12" style="padding:15px 15px 30px 0px;">
                <div class="col-md-12">
                    <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span
                            style="padding:6px 12px; background:#81d742;text-transform: uppercase;">{{$cat->title}}</span></h3>
                </div>
                @if(count($posts))
                <div class="col-md-12">

                    @foreach($posts as $key=>$p)
                        @if($key == 0)
                    <a href="{{url('article')}}/{{$p->slug}}">
                        <img src="{{url('public/posts')}}/{{$p->image}}" width="100%" height="500vh" style="margin-bottom:15px;"/>
                    </a>
                    <p align="justify">{!! substr($p->description, 0, 300) !!}</p>
                    <p><a href="{{url('article')}}/{{$p->slug}}">Read
                            more &raquo;</a></p>

                        @endif
                    @endforeach
                </div>
                <div class="row">
                    @foreach($posts as $key=>$p)
                        @if($key>0 && $key<10)
                    <div class="col-md-6">
                        <a href="{{url('article')}}/{{$p->slug}}">
                            <img src="{{url('public/posts')}}/{{$p->image}}" width="100%" height="250vh" style="margin-bottom:15px;"/>
                        </a>
                        <p align="justify">{!! substr($p->description, 0, 100) !!}</p>
                        <p><a href="{{url('article')}}/{{$p->slug}}">Read
                                more &raquo;</a></p>
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>

        <!-- right section -->
        <div class="col-md-4">
            <div class="col-md-12" style="padding:15px;">
                <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span
                        style="padding:6px 12px; background:#2b99ca;">Latest News</span></h3>
                @foreach($latest->take(6) as $l)
                    <div class="col-md-12"
                         style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                        <div class="col-md-4">
                            <div class="row">
                                <a href="{{url('article')}}/{{$l->slug}}">
                                    <img src="{{url('public/posts')}}/{{$l->image}}" width="100%"
                                         style="margin-left:-15px;"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row" style="padding-left:10px;">
                                <a href="{{url('article')}}/{{$l->slug}}">
                                    <h4>{{$l->title}}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--advertrsement--}}
            @if($sidebarTop->image)
                <div class="col-12 mx-5 advertisement-sidebar">
                    <a href="{{$sidebarTop->url}}">
                        <img src="{{url('public/advertisements')}}/{{$sidebarTop->image}}" width="100%"
                             alt="{{$sidebarTop->title}}"/>
                    </a>
                </div>
            @endif
            {{--End advertrsement--}}
            {{--advertrsement--}}
            @if($sidebarBottom->image)
                <div class="col-12 mx-5 advertisement-sidebar">
                    <a href="{{$sidebarBottom->url}}">
                        <img src="{{url('public/advertisements')}}/{{$sidebarBottom->image}}" width="100%"
                             alt="{{$sidebarBottom->title}}"/>
                    </a>
                </div>
            @endif
            {{--End advertrsement--}}
        </div>
    </div>
</div>

@endsection
