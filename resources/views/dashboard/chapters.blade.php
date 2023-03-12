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
                                <h3 class="page-title">Chapters</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                <a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download list</a>
                                <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>Chapter</th>
                                    <th>State</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>Kaduna</td>
                                    <td>Kaduna</td>
                                    <td>911 Deer Ridge Drive,USA</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <div class="actions ">
                                            <a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="edit-student.html" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection