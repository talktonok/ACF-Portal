@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search by ID ...">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search by Name ...">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search by Phone ...">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="search-student-btn">
                    <button type="btn" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Members</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                <a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download list</a>
                                <a href="{{ url('/dashboard/members/add') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Chapter</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Address</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($users)
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">{{$user->firstName .' '. $user->otherName .' '.$user->lastName .' '}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$user->chapter}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td class="text-end">
                                        <div class="actions ">
                                            <a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="/dashboard/members/edit/{{$user->id}}" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection