@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <form method="POST" action="{{url('/dashboard/add')}}" enctype="multipart/form-data">
    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Members Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                        </div>
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>First Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="firstName" type="text" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Last Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="lastName" type="text" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Other Name <i class="login-danger">optional</i></label>
                                <input class="form-control" name="otherName" type="text" placeholder="Enter Other Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Gender <span class="login-danger">*</span></label>
                                <select name="gender" class="form-control select">
                                    <option>Select Gender</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms calendar-icon">
                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" name="dob" type="text" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Role <span class="login-danger">*</span></label>
                                <select name="role" class="form-control select">
                                    <option>Please Select Role </option>
                                    <option>Admin</option>
                                    <option>Member</option>
                                    <option>exco</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Religion <span class="login-danger">*</span></label>
                                <select name="religion" class="form-control select">
                                    <option>Please Select Religion </option>
                                    <option>Islam</option>
                                    <option>Christian</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control" name="email" type="text" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Chapter <span class="login-danger">*</span></label>
                                <select name="chapter_id" class="form-control select">
                                    <option>Please Select chapter </option>
                                    <option value="1">Kaduna</option>
                                    <option value="2">Abuja</option>
                                    <option value="3">Lagos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Address <span class="login-danger">*</span> </label>
                                <input class="form-control" name="address" type="text" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Membership ID <span class="login-danger">*</span></label>
                                <input class="form-control" name="membershipID" type="text" placeholder="Enter Membership ID">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone <span class="login-danger">*</span></label>
                                <input class="form-control" name="phone" type="text" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group students-up-files">
                                <label>Upload Student Photo (150px X 150px)</label>
                                <div class="uplod">
                                    <label class="file-upload image-upbtn mb-0">
                                        Choose File <input name="image" type="file">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection