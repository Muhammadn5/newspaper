@extends('backend.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> All Advertisements
                    <a  href="{{url('add-adv')}}" class="btn btn-sm btn-default">Add New</a>
                </h1>
            </div>
            <div class="col-sm-12">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable fade in ">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{Session('message')}}
                        @endif
            </div>
            <form method="post" action="{{url('multipledelete')}}">
                {{csrf_field()}}
                <input type="hidden" name="tbl" value="{{encrypt('advertisements')}}">
                <input type="hidden" name="tblid" value="{{encrypt('aid')}}">
            <div class="filter-div">
                    <div class="col-sm-2">
                        <select name="bulk-action" class="form-control">
                            <option value="0">Bulk Action</option>
                            <option value="1">Move to Trash</option>
                        </select>
                    </div>

                    <div class="col-sm-7">
                        <div class="row">
                            <button class="btn btn-default">Apply</button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12">
                <div class="content">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all"> Title</th>
                            <th>Link</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($data)>0)
                            @foreach($data as $d)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select-data[]" value="{{$d->aid}}">
                                        <a href="{{url('editadv')}}/{{$d->aid}}">{{$d->title}}</a>
                                    </td>
                                    <td>{{$d->url}}</td>
                                    <td>{{$d->location}}</td>
                                    <td><img src="{{ asset('/public/advertisements/'.$d->image) }}" class="img-fluid" width="100" height="100"></td>
                                    <td>{{$d->status}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">No Adv Found</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection
