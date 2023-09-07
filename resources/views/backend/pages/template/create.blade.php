@extends('backend.master')
@section('title')
    Tambah Karyawan
@endsection
@section('content')
    <div class="container-fluid">
        <div class="alert alert-warning solid alert-end-icon alert-dismissible fade show">
            <span><i class="mdi mdi-alert"></i></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Date picker</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label class="form-label font-w600">Company Name<span
                                        class="text-danger scale5 ms-2">*</span></label>
                                <input type="text" class="form-control solid" placeholder="Name" aria-label="name">
                            </div>
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label class="form-label">Auto btn-close Clock Picker</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autobtn-close="true">
                                    <input class="form-control" id="timepicker" placeholder="Check time">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                <label class="form-label font-w600">Job Category<span
                                        class="text-danger scale5 ms-2">*</span></label>
                                <select class="nice-select default-select wide form-control solid">
                                    <option selected>Choose...</option>
                                    <option>QA Analyst</option>
                                    <option>IT Manager</option>
                                    <option>Systems Analyst</option>
                                </select>
                            </div>
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label font-w600">Posted Date<span
                                        class="text-danger scale5 ms-2">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                </div>
                            </div>
                            <div class="col-xl-12 mb-4">
                                <label class="form-label font-w600">Description:<span
                                        class="text-danger scale5 ms-2">*</span></label>
                                <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
                            </div>
                            <div>
                                <span>Status:<label class="radio-inline mx-3"><input type="radio" name="optradio"
                                            class="form-check-input"> Active</label></span>
                                <span><label class="radio-inline me-3"><input type="radio" name="optradio"
                                            class="form-check-input"> In Active</label></span>
                            </div>
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label font-w600">Posted Date<span
                                        class="text-danger scale5 ms-2">*</span></label>
                                <div class="input-group">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="col-xl-6  col-md-6 mb-4">
                                <label class="form-label font-w600">Username<span
                                        class="text-danger scale5 ms-2">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control border-left-end" id="username"
                                        placeholder="Username" required="">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div>
                                    <a href="javascript:void(0);" class="btn btn-danger light me-3">Close</a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
