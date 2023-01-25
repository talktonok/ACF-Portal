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
                                    <th>Name</th>
                                    <th>Chapter</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Address</th>
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
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Aaliyah</a>
                                        </h2>
                                    </td>
                                    <td>10 A</td>
                                    <td>2 Feb 2002</td>
                                    <td>097 3584 5870</td>
                                    <td>911 Deer Ridge Drive,USA</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-03.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Malynne</a>
                                        </h2>
                                    </td>
                                    <td>8 A</td>
                                    <td>3 June 2010</td>
                                    <td>242 362 3100</td>
                                    <td>Bacardi Rd P.O. Box N-4880, New Providence</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Levell Scott</a>
                                        </h2>
                                    </td>
                                    <td>10 A</td>
                                    <td>12 Apr 2002</td>
                                    <td>026 7318 4366</td>
                                    <td>P.O. Box: 41, Gaborone</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-03.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Minnie</a>
                                        </h2>
                                    </td>
                                    <td>11 C</td>
                                    <td>24 Feb 2000</td>
                                    <td>952 512 4909</td>
                                    <td>4771 Oral Lake Road, Golden Valley</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-04.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Lois A</a>
                                        </h2>
                                    </td>
                                    <td>10 A</td>
                                    <td>22 Jul 2006</td>
                                    <td>413 289 1314</td>
                                    <td>2844 Leverton Cove Road, Palmer</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-05.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Calvin</a>
                                        </h2>
                                    </td>
                                    <td>9 B</td>
                                    <td>8 Dec 2003</td>
                                    <td>701 753 3810</td>
                                    <td>1900 Hidden Meadow Drive, Crete</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-06.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Joe Kelley</a>
                                        </h2>
                                    </td>
                                    <td>11 C</td>
                                    <td>7 Oct 2000</td>
                                    <td>402 221 7523</td>
                                    <td>3979 Ashwood Drive, Omaha</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-07.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Vincent</a>
                                        </h2>
                                    </td>
                                    <td>10 A</td>
                                    <td>4 Jan 2002</td>
                                    <td>402 221 7523</td>
                                    <td>3979 Ashwood Drive, Omaha</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-08.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Kozma  Tatari</a>
                                        </h2>
                                    </td>
                                    <td>9 A</td>
                                    <td>1 Feb 2006</td>
                                    <td>04 2239 968</td>
                                    <td>Rruga E Kavajes, Condor Center, Tirana</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-09.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">John Chambers</a>
                                        </h2>
                                    </td>
                                    <td>11 B</td>
                                    <td>13 Sept 2003</td>
                                    <td>870 663 2334</td>
                                    <td>4667 Sunset Drive, Pine Bluff</td>
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
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/img/profiles/avatar-10.jpg') }}" alt="User Image"></a>
                                            <a href="student-details.html">Nathan Humphries</a>
                                        </h2>
                                    </td>
                                    <td>10 B</td>
                                    <td>26 Apr 1994</td>
                                    <td>077 3499 9959</td>
                                    <td>86 Lamphey Road, Thelnetham</td>
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