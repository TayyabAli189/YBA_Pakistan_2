@extends('backend.index')
@section('content')
    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a class="btn btn-primary" href="{{route('create.event')}}">Add Event</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Event</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="example1_length"><label>Show
                                                <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 80px;">Created Date
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Event Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 160px;">Event Description
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Images
                                                </th>
                                                {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Status
                                                </th>--}}
                                                <th style="width: 70px;">Edit</th>
                                                <th style="width: 70px;">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($events as $event)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{date('d-M-Y', strtotime($event->created_at))}}</td>
                                                    <td>{{$event->event_name}}</td>
                                                    <td>{{$event->discription}}</td>
                                                    <td><img height="100px" src="{{asset('images/'.$event->image)}}"></td>
                                                  {{--  <td><a href="" class="{{($event->status == 'true') ? 'btn btn-danger' : 'btn btn-success'}}">{{($event->status == 'true') ? 'De-Active' : 'Active'}}</a>
                                                    </td>--}}
                                                    <td><a href="{{route('edit.event',$event->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
                                                    <td> <a href="{{route('delete.event',$event->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                               <li class="paginate_button page-Actionsitem active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">{{$events->links()}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
    <style>
        .w-5{
            display: none;
        }
    </style>
@endsection
