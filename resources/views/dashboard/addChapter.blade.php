@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <form method="POST" action="{{url('/dashboard/chapters/add')}}" enctype="multipart/form-data">
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
                                <label>Chapter Name <span class="login-danger">*</span></label>
                                <input class="form-control" name="chapterName" type="text" placeholder="Chapter Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Chapter state<span class="login-danger">*</span></label>
                                <select name="state" class="form-control select">
                                    <option>Please Select State</option>
                                    <option value="1">Kaduna</option>
                                    <option value="2">Abuja</option>
                                    <option value="3">Lagos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Chapter Address <span class="login-danger">*</span> </label>
                                <input class="form-control" name="address" type="text" placeholder="Enter Address" restrict>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Chapter Status <span class="login-danger">*</span></label>
                                <select name="status" class="form-control select">
                                    <option>Status</option>
                                    <option >Active</option>
                                    <option >Unactive</option>
                                </select>
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