@extends('backend.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> Add New Post</h1>
            </div>
            <div class="col-sm-12">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable fade in ">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{Session('message')}}
                    </div>
                @endif
                <div class="row">
                    <form method="post" action="{{url('updatepost')}}/{{$data->pid}}"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="tbl" value="{{encrypt('posts')}}">
                        <input type="hidden" name="pid" value="{{$data->pid}}">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="text" name="title" id="post_title" class="form-control"
                                       placeholder="Enter title here" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug here"
                                       readonly="" value="{{$data->slug}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" rows="15">{{$data->description}}</textarea>
                                <div class="col-sm-12 word-count">Word count: 0</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="content publish-box">
                                <h4>Publish <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4>
                                <hr>
                                <div class="form-group">
                                    <button class="btn btn-default" name="status" value="draft">Save Draft</button>
                                </div>
                                <p>Status: Draft <a href="#">Edit</a></p>
                                <p>Visibility: Public <a href="#">Edit</a></p>
                                <p>Publish: Immediately <a href="#">Edit</a></p>
                                <div class="row">
                                    <div class="col-sm-12 main-button">
                                        <button class="btn btn-primary pull-right" name="status" value="publish">
                                            Publish
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="content cat-content">
                                <h4>Category <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4>
                                <hr>
                                @foreach($categories as $cat)
                                    <p><label for="{{$cat->cid}}"><input type="checkbox" name="category_id[]"
                                                                         value="{{$cat->cid}}" @if(in_array($cat->cid, $postcat)) checked @endif>{{$cat->title}}</label>
                                    </p>
                                @endforeach
                            </div>
                            <div class="content featured-image">
                                <h4>Featured Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                </h4>
                                <hr>
                                @if($data->image !='')
                                <p><img id="output" style="max-width: 100%" src="{{url('public/posts')}}/{{$data->image}}"/></p>
                                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                          style="display: none;"></p>
                                <p><label for="file" style="cursor: pointer;">Replace Featured Image</label></p>
                                @else
                                    <p><img id="output" style="max-width: 100%"/></p>
                                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)"
                                          style="display: none;"></p>
                                <p><label for="file" style="cursor: pointer;">Set Featured Image</label></p>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>



    {{--<script src="{{url('public/ckeditor/ckeditor.js')}}"></script>--}}
    {{--<script src="{{url('ckfinder/ckfinder.js')}}"></script>--}}
    {{--<script>--}}
    {{--    var editor = CKEDITOR.replace( 'description' );--}}
    {{--    CKFinder.setupCKEditor( editor );--}}
    {{--</script>--}}
@endsection
