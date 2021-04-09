@extends('backend.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> Edit Advertisement</h1>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissable fade in ">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{Session('message')}}
                            @endif
                            <form method="post" action="{{url('updateadv')}}/{{$data->aid}}" enctype="multipart/form-data">
                        </div>
                        {{csrf_field()}}
                        <input type="hidden" name="tbl" value="{{encrypt('advertisements')}}">
                        <input type="hidden" name="aid" value="{{$data->aid}}">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Enter title here">
                            </div>
                            <div class="form-group">
                                <input type="text" name="url" value="{{$data->url}}" class="form-control" placeholder="url here">
                            </div>
                            <div class="form-group content featured-image">
                                <h4>Advertisement Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
                                @if($data->image !='')
                                <p><img src="{{url('public/advertisements')}}/{{$data->image}}" id="output" style="max-width: 100%"/></p>
                                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                <p><label for="file" style="cursor: pointer;">Replace Image</label></p>
                                @else
                                    <p><img id="output" style="max-width: 100%"/></p>
                                    <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <select name="location" class="form-control">
                                    <option>{{$data->location}}</option>
                                    @if($data->location !='Leaderboard')
                                        <option>Leaderboard</option>
                                    @endif
                                    @if($data->location !='Sidebar-top')
                                    <option>Sidebar-top</option>
                                    @endif
                                    @if($data->location !='Sidebar-bottom')
                                    <option>Sidebar-bottom</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>{{$data->status}}</option>
                                    @if($data->status =='Hide')
                                    <option>Display</option>
                                    @else
                                    <option>Hide</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Update Advertisement</button>
                            </div>

                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection
