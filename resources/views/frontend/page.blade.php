@extends('frontend.master')
@section('title', $data->title.' | Newspaper')
@section('content')

    <div class="wrapper">

        <div class="row" style="margin-top:30px;">
            <div class="col-md-8">
                <div class="col-md-12" style="padding:15px 15px 30px 0px;">
                    <div class="col-md-12">
                        <h3 class="text-uppercase" style="color:black;">{{$data->title}}</h3>
                        <p align="justify">{!! $data->description !!}</p>
                    </div>

                </div>
            </div>

            <!-- right section -->
            <div class="col-md-4">
                <div class="col-md-12" style="padding:15px;">
                    <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span
                            style="padding:6px 12px; background:#2b99ca;">MORE NEWS</span></h3>
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
            </div>
        </div>
    </div>

@endsection
