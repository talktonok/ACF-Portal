
@extends('layouts.app')

@section('content')

<div class="page-header">
                    <div class="row align-items-center">
                        <div class="col"></div>
                        <div class="col-auto text-end float-end ms-auto">
                            <a href="add-events.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade none-border" id="my_event">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Event</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-success save-event submit-btn">Create
                                    event</button>
                                <button type="button" class="btn btn-danger delete-event submit-btn"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                
    <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
@endsection