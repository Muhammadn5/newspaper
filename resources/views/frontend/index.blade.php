@extends('frontend.master')

@section('title', 'Laravel News Portal')
@section('content')
    <div class="wrapper">
        @if(count($featured))
            <div class="row">
                @foreach($featured as $key=>$f)
                    @if($key == 0)
                        <div class="col-md-6">
                            <div class="relative">
                                <a href="{{url('article')}}/{{$f->slug}}"><img
                                        src="{{url('public/posts')}}/{{$f->image}}"
                                        width="100%"/>
                                    <span class="caption">{{$f->title}}</span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-6">
                    <div class="row">
                        @foreach($featured as $key=>$f)
                            @if($key >0 && $key <3)
                                <div class="col-md-6">
                                    <div class="relative">
                                        <a href="{{url('article')}}/{{$f->slug}}"><img
                                                src="{{url('public/posts')}}/{{$f->image}}"
                                                width="100%"/>
                                            <span class="caption">{{$f->title}}</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row" style="margin-top:30px;">
                        @foreach($featured as $key=>$f)
                            @if($key >3 && $key <6)
                                <div class="col-md-6">
                                    <div class="relative">
                                        <a href="{{url('article')}}/{{$f->slug}}"><img
                                                src="{{url('public/posts')}}/{{$f->image}}"
                                                width="100%"/>
                                            <span class="caption">{{$f->title}}</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="row" style="margin-top:30px;">
            <div class="col-md-8">
                <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
                    <div class="col-md-12">
                        <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span
                                style="padding:6px 12px; background:#81d742;">News</h3>
                    </div>

                    @foreach($news as $key=>$n)
                        @if($key ==0)
                            <div class="col-md-6">
                                <a href="{{url('article')}}/{{$n->slug}}"><img
                                        src="{{url('public/posts')}}/{{$n->image}}" width="100%"
                                        style="margin-bottom:15px;"/></a>
                                <h3><a href="{{url('article')}}/{{$n->slug}}">{{$n->title}}</a></h3>
                                <p align="justify">{!! substr($n->description,0,300)!!}</p><a
                                    href="{{url('article')}}/{{$n->slug}}">Read
                                    more &raquo;</a>
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                @foreach($news as $key=>$n)
                                    @if($key>0 && $key<6)
                                        <div class="row"
                                             style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <a href="{{url('article')}}/{{$n->slug}}"><img
                                                            src="{{url('public/posts')}}/{{$n->image}}"
                                                            width="100%"/></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <h4><a href="{{url('article')}}/{{$n->slug}}">{{$n->title}}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                </div>

                <div class="col-md-12 image-gallery"
                     style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
                    <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span
                            style="padding:6px 12px; background:#81d742;">Sports</span></h3>
                    <div class="flex">
                        @foreach($sports->take(5) as $key=>$s)
                            <div>
                                <a href="{{url('article')}}/{{$s->slug}}"><img
                                        src="{{url('public/posts')}}/{{$s->image}}" class="img-fluid img-thumbnail"
                                        style="height: 20vh;"/></a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
                            <div class="col-md-12"
                                 style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                                <h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span
                                        style="padding:6px 12px; background:#b952c8;">Business</span></h3>
                                @foreach($business as $key=>$b)
                                    @if($key==0)
                                        <a href="{{url('article')}}/{{$b->slug}}"><img
                                                src="{{url('public/posts')}}/{{$b->image}}" width="100%"
                                                style="margin-bottom:15px;"/></a>
                                        <h3><a href="{{url('article')}}/{{$b->slug}}">{{$b->title}}</a></h3>
                                        <p align="justify">{!! $b->description !!}</p>
                                        <a href="{{url('article')}}/{{$b->slug}}">Read more &raquo;</a>
                                    @endif
                                @endforeach
                            </div>
                            @foreach($business as $key=>$b)
                                @if($key>0)
                                    <div class="col-md-12"
                                         style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                        <div class="col-md-4">
                                            <div class="row fashion">
                                                <a href="{{url('article')}}/{{$b->slug}}"><img
                                                        src="{{url('public/posts')}}/{{$b->image}}" width="100%"/></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <h4><a href="{{url('article')}}/{{$b->slug}}">{{$b->title}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
                            <div class="col-md-12"
                                 style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                                <h3 style="border-bottom:3px solid #d95757; padding-bottom:5px;"><span
                                        style="padding:6px 12px; background:#d95757;">Health</span></h3>

                                @foreach($health as $key=>$h)
                                    @if($key == 0)
                                        <a href="{{url('article')}}/{{$h->slug}}">
                                            <img src="{{url('public/posts')}}/{{$h->image}}" width="100%"
                                                 style="margin-bottom:15px;"/>
                                        </a>
                                        <p align="justify">{!! $h->description !!}</p>
                                        <a href="{{url('article')}}/{{$h->slug}}">Read more &raquo;</a>
                                        {{--                                    <span class="glyphicon glyphicon-chevron-right"></span><span--}}
                                        {{--                                        class="glyphicon glyphicon-chevron-right"></span>--}}

                                    @endif
                                @endforeach
                            </div>
                            @foreach($health as $key=>$h)
                                @if($key >0)
                                    <div class="col-md-12"
                                         style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                        <div class="col-md-4">
                                            <div class="row fashion">
                                                <a href="{{url('article')}}/{{$h->slug}}">
                                                    <img src="{{url('public/posts')}}/{{$h->image}}"
                                                         width="100%"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row" style="padding-left:0px;">
                                                <a href="{{url('article')}}/{{$h->slug}}">
                                                    <h4>{{$h->title}}</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12"
                             style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
                            <div class="col-md-12">
                                <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span
                                        style="padding:6px 12px; background:#81d742;">Politics</span></h3>
                            </div>
                            @foreach($politics as $key=>$p)
                                @if($key == 0)
                                    <div class="col-md-6">
                                        <a href="{{url('article')}}/{{$p->slug}}" height="90%">
                                            <img src="{{url('public/posts')}}/{{$p->image}}" width="100%" height="auto"
                                                 style="margin-bottom:15px;"/>
                                        </a>
                                        <p align="justify">{!! $p->description !!}</p>
                                        <a href="{{url('article')}}/{{$p->slug}}">Read more &raquo;</a>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-md-6">
                                @foreach($politics as $key=>$p)
                                    @if($key >0)
                                        <div class="col-md-12"
                                             style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                            <div class="col-md-4">
                                                <div class="row fashion">
                                                    <a href="{{url('article')}}/{{$p->slug}}">
                                                        <img src="{{url('public/posts')}}/{{$p->image}}"
                                                             width="100%"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row" style="padding-left:0px;">
                                                    <a href="{{url('article')}}/{{$p->slug}}">
                                                        <h4>{{$p->title}}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 image-gallery"
                         style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
                        <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span
                                style="padding:6px 12px; background:#81d742;">Style</span></h3>
                        <div class="flex">
                            @foreach($style->take(5) as $key=>$s)
                                <div>
                                    <a href="{{url('article')}}/{{$s->slug}}"><img
                                            src="{{url('public/posts')}}/{{$s->image}}" class="img-fluid img-thumbnail"
                                            style="height: 20vh;"/></a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12"
                             style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
                            <div class="col-md-12">
                                <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span
                                        style="padding:6px 12px; background:#81d742;">technology</span></h3>
                            </div>
                            @foreach($technology as $key=>$t)
                                @if($key == 0)
                                    <div class="col-md-6">
                                        <a href="{{url('article')}}/{{$t->slug}}" height="90%">
                                            <img src="{{url('public/posts')}}/{{$t->image}}" width="100%" height="auto"
                                                 style="margin-bottom:15px;"/>
                                        </a>
                                        <p align="justify">{!! $t->description !!}</p>
                                        <a href="{{url('article')}}/{{$t->slug}}">Read more &raquo;</a>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-md-6">
                                @foreach($technology as $key=>$t)
                                    @if($key >0)
                                        <div class="col-md-12"
                                             style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                            <div class="col-md-4">
                                                <div class="row fashion">
                                                    <a href="{{url('article')}}/{{$t->slug}}">
                                                        <img src="{{url('public/posts')}}/{{$t->image}}"
                                                             width="100%"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row" style="padding-left:0px;">
                                                    <a href="{{url('article')}}/{{$t->slug}}">
                                                        <h4>{{$t->title}}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
                    <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span
                            style="padding:6px 12px; background:#2b99ca;">Entertainment</span></h3>
                    @foreach($entertainment->take(10) as $key=>$e)
                        @if($key>0)
                            <div class="col-md-12"
                                 style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                <div class="col-md-4">
                                    <div class="row">
                                        <a href="{{url('article')}}/{{$e->slug}}">
                                            <img src="{{url('public/posts')}}/{{$e->image}}" width="100%"
                                                 style="margin-left:-15px;"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row" style="padding-left:10px;">
                                        <a href="{{url('article')}}/{{$e->slug}}">
                                            <h4>{{$e->title}}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                {{--advertrsement--}}
                @if($sidebarTop->image)
                    <div class="col-12 mx-5 advertisement-sidebar">
                        <a href="{{$sidebarTop->url}}">
                            <img src="{{url('public/advertisements')}}/{{$sidebarTop->image}}" width="100%"
                                 alt="{{$sidebarTop->title}}" class="img-circle"/>
                        </a>
                    </div>
                @endif
                {{--End advertrsement--}}

                <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 60px 15px; margin-top:30px;">
                    <div class="col-md-12"
                         style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
                        <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span
                                style="padding:6px 12px; background:#2b99ca;">Travel</span></h3>

                        @foreach($travel as $key=>$tr)
                            @if($key == 0)
                                <a href="{{url('article')}}/{{$tr->slug}}">
                                    <img src="{{url('public/posts')}}/{{$tr->image}}" width="100%"
                                         style="margin-bottom:15px;"/>
                                </a>
                                <p align="justify">{!! $tr->description !!}</p>
                                <a href="{{url('article')}}/{{$tr->slug}}">Read more &raquo;</a>
                            @endif
                        @endforeach
                    </div>
                    @foreach($travel->take(11) as $key=>$tr)
                        @if($key > 0)
                            <div class="col-md-12"
                                 style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                <div class="col-md-4">
                                    <div class="row">
                                        <a href="{{url('article')}}/{{$tr->slug}}">
                                            <img src="{{url('public/posts')}}/{{$tr->image}}" width="100%"
                                                 style="margin-left:-15px;"/>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

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

