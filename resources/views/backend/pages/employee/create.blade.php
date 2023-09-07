@extends('backend.master')
@section('title')
    Tambah Karyawan
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pickers</a></li>
            </ol>
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
                                    <input type="text" class="form-control" value="13:14">
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
                                    <input size="16" type="text" value="2012-06-15" readonly
                                        class="form-control form_datetime solid">
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
