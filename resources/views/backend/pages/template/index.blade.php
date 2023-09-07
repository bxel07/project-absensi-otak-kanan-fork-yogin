@extends('backend.master')
@section('title')
    Karyawan
@endsection
@section('content')
    <div class="container-fluid">

        <div class="d-flex align-items-center mb-4 flex-wrap">
            <h3 class="me-auto">Job Application</h3>

            <div>
                <a href="new-job.html" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New Job</a>
                <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"> <i class="fas fa-envelope"></i></a>
                <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
                <a href="javascript:void(0);" class="btn btn-secondary btn-sm"><i class="fas fa-info"></i></a>

            </div>
        </div>
        <div class="filter cm-content-box box-primary">
            <div class="content-title">
                <div class="cpa">
                    <i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
                </div>
                <div class="tools">
                    <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                </div>
            </div>
            <div class="cm-content-body form excerpt">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <input type="text" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1"
                                placeholder="Title">
                        </div>
                        <div class="col-xl-3  col-sm-6 mb-3 mb-xl-0">
                            <select class="form-control default-select dashboard-select-2 h-auto wide"
                                aria-label="Default select example">
                                <option selected>Select Status</option>
                                <option value="1">Published</option>
                                <option value="2">Draft</option>
                                <option value="3">Trash</option>
                                <option value="4">Private</option>
                                <option value="5">Pending</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <input type="date" name="datepicker" class=" form-control mb-xl-0 mb-3">
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <button class="btn btn-info" title="Click here to Search" type="button"><i
                                    class="fa fa-search me-1"></i>Filter</button>
                            <button class="btn btn-light" title="Click here to remove filter" type="button">Remove
                                Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Position</th>
                                        <th>Type</th>
                                        <th>Posted Date</th>
                                        <th>Last Date To Apply</th>
                                        <th>Close Date</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                        <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Network Engineer</td>
                                        <td class="wspace-no">Full-Time</td>
                                        <td>12-01-2023</td>
                                        <td>24-01-2023</td>
                                        <td>25-01-2023</td>
                                        <td class="wspace-no">
                                            <span class="text-secoundry fs-14 font-w600">
                                                <i class="fas fa-phone-alt me-2"></i>
                                                012 3123412 441
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-buttons d-flex justify-content-end">
                                                <a href="javascript:void(0);" class="btn btn-success light mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon"
                                                        width="24px" height="24px" viewBox="0 0 32 32" x="0px"
                                                        y="0px">
                                                        <g data-name="Layer 21">
                                                            <path
                                                                d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <circle cx="16" cy="16" r="3"
                                                                fill="#000000" fill-rule="nonzero"></circle>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-danger btn-sm content-icon me-0">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown text-end">
                                                <div class="dropdown ms-auto">
                                                    <a href="#" class="btn btn-primary light sharp"
                                                        data-bs-toggle="dropdown" aria-expanded="true"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                            height="18px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24"
                                                                    height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12"
                                                                    r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12"
                                                                    r="2"></circle>
                                                            </g>
                                                        </svg></a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li class="dropdown-item"><i
                                                                class="fa fa-user-circle text-primary me-2"></i> View
                                                            profile</li>
                                                        <li class="dropdown-item"><i
                                                                class="fa fa-users text-primary me-2"></i> Add to close
                                                            friends</li>
                                                        <li class="dropdown-item"><i
                                                                class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                                        <li class="dropdown-item"><i
                                                                class="fa fa-ban text-primary me-2"></i> Block</li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-black" href="javascript:void(0);"><i
                                                            class="far fa-check-circle me-1 text-success"></i>Accept
                                                        order</a>
                                                    <a class="dropdown-item text-black" href="javascript:void(0);"><i
                                                            class="far fa-times-circle me-1 text-danger"></i>Reject
                                                        order</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Position</th>
                                        <th>Type</th>
                                        <th>Posted Date</th>
                                        <th>Last Date To Apply</th>
                                        <th>Close Date</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
