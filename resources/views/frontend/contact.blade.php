@extends('frontend.master')
@section('title', 'Contact Us | Newspaper')
@section('content')

    <div class="wrapper">

        <div class="row" style="margin-top:30px;">
            <div class="col-md-8">
                <div class="col-md-12" style="padding:15px 15px 30px 0px;">
                    <div class="col-md-12">
                        <h3>Contact Us</h3>
                    </div>
                    @if(Session::has('message'))
                        <div class="col-sm-12">
                            <div class="alert alert-success alert-dismissable fade in ">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{Session('message')}}
                            </div>
                        </div>
                            @endif
                    <div class="col-sm-6">
                        <form method="post" action="{{url('sendmessage')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" name="email" class="form-control">
                            </div><div class="form-group">
                                <label>Your Phone</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Send</button>
                            </div>

                        </form>
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
