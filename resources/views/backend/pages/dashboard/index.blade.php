@extends('backend.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 mt-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row shapreter-row">
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                        <div class="static-icon">
                                            <span>
                                                <i class="fas fa-eye"></i>
                                            </span>
                                            <h3 class="count mb-0">94</h3>
                                            <span class="fs-14">Profile Viewed</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                        <div class="static-icon">
                                            <span>
                                                <i class="far fa-comments"></i>
                                            </span>
                                            <h3 class="count mb-0">261</h3>
                                            <span class="fs-14">Unread Messages</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                        <div class="static-icon">
                                            <span>
                                                <i class="fas fa-suitcase"></i>
                                            </span>
                                            <h3 class="count mb-0">874</h3>
                                            <span class="fs-14">Application Sent</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                        <div class="static-icon">
                                            <span>
                                                <i class="fas fa-suitcase"></i>
                                            </span>
                                            <h3 class="count mb-0">25</h3>
                                            <span class="fs-14">App. Answered</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                        <div class="static-icon">
                                            <span>
                                                <i class="fas fa-calendar"></i>
                                            </span>
                                            <h3 class="count mb-0">221</h3>
                                            <span class="fs-14">Interviewed</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                        <div class="static-icon">
                                            <span>
                                                <i class="fas fa-phone-alt"></i>
                                            </span>
                                            <h3 class="count mb-0">4</h3>
                                            <span class="fs-14">Hired</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="fs-20 mb-0">Profile Stregth</h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-vigit progress-animated"
                                                style="width: 90%; height:13px;" role="progressbar">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Visitor</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>90%</span>
                                        </div>
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-contact progress-animated"
                                                style="width: 68%; height:13px;" role="progressbar">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Contact</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>68%</span>
                                        </div>
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-follow progress-animated"
                                                style="width: 85%; height:13px;" role="progressbar">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Follow</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>85%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div id="pieChart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header border-0 flex-wrap pb-0">
                                <h4 class="fs-20 mb-0">Your Network Summary</h4>
                                <div>
                                    <span>
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                            viewBox="0 0 13 13">
                                            <rect width="13" height="13" fill="#f73a0b" />
                                        </svg>
                                        Following
                                    </span>
                                    <span class="ms-4 fs-16 font-w600">239</span>
                                    <div class="mt-2">
                                        <span>
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13"
                                                height="13" viewBox="0 0 13 13">
                                                <rect width="13" height="13" fill="#01111c" />
                                            </svg>
                                            Followers
                                        </span>
                                        <span class="ms-4 fs-16 font-w600">824</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0 ps-sm-3 ps-0">
                                <div id="chartBar" class="chartBar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card" id="user-activity">
                            <div class="card-header flex-wrap">
                                <h4 class="fs-20  mb-0">Vacancies Start</h4>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-5">
                                        <span class="me-4">
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13"
                                                height="13" viewBox="0 0 13 13">
                                                <rect width="13" height="13" rx="6.5" fill="#35c556" />
                                            </svg>
                                            Application Sent
                                        </span>
                                        <span class="me-4">
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13"
                                                height="13" viewBox="0 0 13 13">
                                                <rect width="13" height="13" rx="6.5" fill="#3f4cfe" />
                                            </svg>
                                            Interviews
                                        </span>
                                        <span>
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13"
                                                height="13" viewBox="0 0 13 13">
                                                <rect width="13" height="13" rx="6.5" fill="#f34040" />
                                            </svg>
                                            Rejected
                                        </span>
                                    </div>
                                    <div class="card-action coin-tabs mt-sm-0 mt-2">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link " data-bs-toggle="tab" href="#Daily"
                                                    role="tab">Daily</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " data-bs-toggle="tab" href="#Daily"
                                                    role="tab">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#Daily"
                                                    role="tab">Monthly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Daily">
                                        <canvas id="activity" height="115"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card" id="user-activity1">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="fs-20 mb-0">Chart</h4>
                                        <div class="card-action coin-tabs">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link " data-bs-toggle="tab" href="#Daily1"
                                                        role="tab">Daily</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " data-bs-toggle="tab" href="#Daily1"
                                                        role="tab">Weekly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#Daily1"
                                                        role="tab">Monthly</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="me-sm-5 me-0 font-w500">
                                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13"
                                                height="13" viewBox="0 0 13 13">
                                                <rect width="13" height="13" fill="#f73a0b" />
                                            </svg>
                                            Delivered
                                        </span>
                                        <span class="fs-16 font-w600 me-5">239 <small
                                                class="text-success fs-12 font-w400">+0.4%</small></span>
                                        <span class="ms-sm-5 ms-0 font-w500">
                                            <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13"
                                                height="13" viewBox="0 0 13 13">
                                                <rect width="13" height="13" fill="#6e6e6e" />
                                            </svg>
                                            Expense
                                        </span>
                                        <span class="fs-16 font-w600">239</span>
                                        <div class="tab-content mt-5" id="myTabContent">
                                            <div class="tab-pane fade show active" id="monthly1">
                                                <canvas id="activity1" class="chartjs"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="fs-20 mb-0">Featured Companies</h4>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                        stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3 loadmore-content  dlab-scroll height370" id="scroll-y">
                                        <div class="row" id="FeaturedCompaniesContent">
                                            <div class="col-xl-6 col-sm-6 mt-4 ">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#2769ee" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Kleon Team</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-4 col-sm-6">
                                                <div class="d-flex">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#7630d2" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="fs-20 mb-1">Ziro Studios Inc.</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6  col-sm-6 mt-4">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#b848ef" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Qerza</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 mt-4">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#7e1d74" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Kripton Studios</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 mt-4">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#0411c2" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Omah Ku Inc.</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 mt-4">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#378a82" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Ventic</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 mt-4">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#175baa" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Sakola</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 mt-4">
                                                <div class="d-flex align-items-center">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="71"
                                                            height="71" viewBox="0 0 71 71">
                                                            <g transform="translate(-457 -443)">
                                                                <rect width="71" height="71" rx="12"
                                                                    transform="translate(457 443)" fill="#c5c5c5" />
                                                                <g transform="translate(457 443)">
                                                                    <rect data-name="placeholder" width="71"
                                                                        height="71" rx="12" fill="#eeb927" />
                                                                    <circle data-name="Ellipse 12" cx="18"
                                                                        cy="18" r="18"
                                                                        transform="translate(15 20)" fill="#fff" />
                                                                    <circle data-name="Ellipse 11" cx="11"
                                                                        cy="11" r="11"
                                                                        transform="translate(36 15)" fill="#ffe70c"
                                                                        style="mix-blend-mode: multiply;isolation: isolate" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <div class="ms-3 featured">
                                                        <h4 class="mb-1">Uena Foods</h4>
                                                        <span>Desgin Team Agency</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 text-center">
                                        <a href="javascript:void(0);"
                                            class="btn btn-outline-primary m-auto dlab-load-more" id="FeaturedCompanies"
                                            rel="ajax/featuredcompanies.html">View
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
