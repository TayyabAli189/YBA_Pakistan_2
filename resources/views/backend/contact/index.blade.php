@extends('backend.index')
@section('content')
    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                  {{--  <div class="col-sm-6">
                        <a class="btn btn-primary" href="{{route('create.event')}}">Add Event</a>
                    </div>--}}
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;"> Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 120px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 110px;">Subject</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 160px;">Message</th>
                                            </thead>
                                            <tbody>
                                            @foreach($contacts as $contact)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{date('d-M-Y', strtotime($contact->created_at))}}</td>
                                                    <td>{{$contact->name}}</td>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->subject}}</td>
                                                    <td>{{$contact->message}}</td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                     {{--   <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li>{{$contacts->links()}}</li>
                                            </ul>
                                        </div>--}}

                                        <div id="myDIV">
                                            <button class="btn">{{$contacts->links()}}</button>

                                        </div>
                                        <script>
                                            // Add active class to the current button (highlight it)
                                            var header = document.getElementById("myDIV");
                                            var btns = header.getElementsByClassName("btn");
                                            for (var i = 0; i < btns.length; i++) {
                                                btns[i].addEventListener("click", function() {
                                                    var current = document.getElementsByClassName("active");
                                                    current[0].className = current[0].className.replace(" active", "");
                                                    this.className += " active";
                                                });
                                            }
                                        </script>

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



