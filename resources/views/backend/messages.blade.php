@extends('backend.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> All Messages</h1>
            </div>
            <div class="col-sm-12">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable fade in ">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{Session('message')}}
                        @endif
            </div>
            <div class="search-div">
                <div class="col-sm-9">
                    All({{count($data)}})
                </div>

                <div class="col-sm-3">
                    <input type="text" id="search" class="form-control" placeholder="Search Posts">
                </div>
            </div>

            <div class="clearfix"></div>
            <form method="post" action="{{url('multipledelete')}}">
                {{csrf_field()}}
                <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                <input type="hidden" name="tblid" value="{{encrypt('mid')}}">
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
                            <th><input type="checkbox" id="select-all">Sender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($data)>0)
                            @foreach($data as $message)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select-data[]" value="{{$message->mid}}">
                                        {{$message->name}}
                                    </td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->phone}}</td>
                                    <td>{{substr($message->message, 0, 100)}}<a href="#expand({{$message->mid}})" data-toggle="modal">Expand</a></td>
                                    <td>{{$message->created_at}}</td>

                                    <div class="modal" id="expand({{$message->mid}})">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <a href="#" class="close" data-dismiss="modal">&times;</a>
                                                    <h4 class="modal-title">Message Send by: {{$message->name}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    {{$message->message}}
                                                </div>
                                                <div class="modal-footer">
                                                    <p>Send on: {{$message->created_at}}</p>
                                                    <p>Phone: {{$message->phone}}</p>
                                                    <p>Email: {{$message->email}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">No Messages Found</td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

@endsection
