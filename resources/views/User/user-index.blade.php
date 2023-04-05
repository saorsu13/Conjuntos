@extends('layouts.app')

@section('page-title','Iso One - Usuario')

<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css')}}" />
 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{ asset('assets/vendor/js/template-customizer.js')}}"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js')}}"></script>
@section('page-content')
 <!-- Content wrapper -->
 <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">User Profile /</span> Profile
              </h4>

              <!-- Header -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="user-profile-header-banner">
                      <img src="assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                      <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img
                          src="assets/img/avatars/1.png"
                          alt="user image"
                          class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img"
                        />
                      </div>
                      <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                          class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4"
                        >
                          <div class="user-profile-info">
                            <h4>John Doe</h4>
                            <ul
                              class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2"
                            >
                              <li class="list-inline-item fw-semibold"><i class="bx bx-pen"></i> UX Designer</li>
                              <li class="list-inline-item fw-semibold"><i class="bx bx-map"></i> Vatican City</li>
                              <li class="list-inline-item fw-semibold">
                                <i class="bx bx-calendar-alt"></i> Joined April 2021
                              </li>
                            </ul>
                          </div>
                          <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
                            <i class="bx bx-user-check me-1"></i>Connected
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Header -->


              <!-- User Profile Content -->
              <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                  <!-- About User -->
                  <div class="card mb-4">
                    <div class="card-body">
                      <small class="text-muted text-uppercase">About</small>
                      <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span>
                          <span>John Doe</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>Developer</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span>USA</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-detail"></i><span class="fw-semibold mx-2">Languages:</span>
                          <span>English</span>
                        </li>
                      </ul>
                      <small class="text-muted text-uppercase">Contacts</small>
                      <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span>
                          <span>(123) 456-7890</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-chat"></i><span class="fw-semibold mx-2">Skype:</span> <span>john.doe</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span>
                          <span>john.doe@example.com</span>
                        </li>
                      </ul>
                      <small class="text-muted text-uppercase">Teams</small>
                      <ul class="list-unstyled mt-3 mb-0">
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bxl-github text-primary me-2"></i>
                          <div class="d-flex flex-wrap">
                            <span class="fw-semibold me-2">Backend Developer</span><span>(126 Members)</span>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bx bxl-react text-info me-2"></i>
                          <div class="d-flex flex-wrap">
                            <span class="fw-semibold me-2">React Developer</span><span>(98 Members)</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--/ About User -->
                  <!-- Profile Overview -->
                  <div class="card mb-4">
                    <div class="card-body">
                      <small class="text-muted text-uppercase">Overview</small>
                      <ul class="list-unstyled mt-3 mb-0">
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-check"></i><span class="fw-semibold mx-2">Task Compiled:</span>
                          <span>13.5k</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-customize"></i><span class="fw-semibold mx-2">Projects Compiled:</span>
                          <span>146</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="bx bx-user"></i><span class="fw-semibold mx-2">Connections:</span> <span>897</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--/ Profile Overview -->
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                  <!-- Activity Timeline -->
                  <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                      <h5 class="card-action-title mb-0"><i class="bx bx-list-ul bx-sm me-2"></i>Activity Timeline</h5>
                      <div class="card-action-element btn-pinned">
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn dropdown-toggle hide-arrow p-0"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="timeline ms-2">
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-warning"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Client Meeting</h6>
                              <small class="text-muted">Today</small>
                            </div>
                            <p class="mb-2">Project meeting with john @10:15am</p>
                            <div class="d-flex flex-wrap">
                              <div class="avatar me-3">
                                <img src="assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                <span>CEO of Infibeam</span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Create a new project for client</h6>
                              <small class="text-muted">2 Day Ago</small>
                            </div>
                            <p class="mb-0">Add files to new design folder</p>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Shared 2 New Project Files</h6>
                              <small class="text-muted">6 Day Ago</small>
                            </div>
                            <p class="mb-2">
                              Sent by Mollie Dixon
                              <img
                                src="assets/img/avatars/4.png"
                                class="rounded-circle ms-3"
                                alt="avatar"
                                height="20"
                                width="20"
                              />
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                              <a href="javascript:void(0)" class="me-3">
                                <img
                                  src="assets/img/icons/misc/pdf.png"
                                  alt="Document image"
                                  width="20"
                                  class="me-2"
                                />
                                <span class="h6">App Guidelines</span>
                              </a>
                              <a href="javascript:void(0)">
                                <img
                                  src="assets/img/icons/misc/doc.png"
                                  alt="Excel image"
                                  width="20"
                                  class="me-2"
                                />
                                <span class="h6">Testing Results</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-success"></span>
                          <div class="timeline-event pb-0">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Project status updated</h6>
                              <small class="text-muted">10 Day Ago</small>
                            </div>
                            <p class="mb-0">Woocommerce iOS App Completed</p>
                          </div>
                        </li>
                        <li class="timeline-end-indicator">
                          <i class="bx bx-check-circle"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--/ Activity Timeline -->
                  <div class="row">
                    <!-- Connections -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="card card-action mb-4">
                        <div class="card-header align-items-center">
                          <h5 class="card-action-title mb-0">Connections</h5>
                          <div class="card-action-element btn-pinned">
                            <div class="dropdown">
                              <button
                                type="button"
                                class="btn dropdown-toggle hide-arrow p-0"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                <li>
                                  <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                              <div class="d-flex align-items-start">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img src="assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Cecilia Payne</h6>
                                    <small class="text-muted">45 Connections</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <button class="btn btn-label-primary p-1 btn-sm"><i class="bx bx-user"></i></button>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-start">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img src="assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Curtis Fletcher</h6>
                                    <small class="text-muted">1.32k Connections</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <button class="btn btn-primary p-1 btn-sm"><i class="bx bx-user"></i></button>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-start">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img src="assets/img/avatars/10.png" alt="Avatar" class="rounded-circle" />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Alice Stone</h6>
                                    <small class="text-muted">125 Connections</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <button class="btn btn-primary p-1 btn-sm"><i class="bx bx-user"></i></button>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-start">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img src="assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Darrell Barnes</h6>
                                    <small class="text-muted">456 Connections</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <button class="btn btn-label-primary p-1 btn-sm"><i class="bx bx-user"></i></button>
                                </div>
                              </div>
                            </li>

                            <li class="mb-3">
                              <div class="d-flex align-items-start">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img src="assets/img/avatars/12.png" alt="Avatar" class="rounded-circle" />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Eugenia Moore</h6>
                                    <small class="text-muted">1.2k Connections</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <button class="btn btn-label-primary p-1 btn-sm"><i class="bx bx-user"></i></button>
                                </div>
                              </div>
                            </li>
                            <li class="text-center">
                              <a href="javascript:;">View all connections</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Connections -->
                    <!-- Teams -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="card card-action mb-4">
                        <div class="card-header align-items-center">
                          <h5 class="card-action-title mb-0">Teams</h5>
                          <div class="card-action-element btn-pinned">
                            <div class="dropdown">
                              <button
                                type="button"
                                class="btn dropdown-toggle hide-arrow p-0"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                <li>
                                  <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img
                                      src="assets/img/icons/brands/react-label.png"
                                      alt="Avatar"
                                      class="rounded-circle"
                                    />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">React Developers</h6>
                                    <small class="text-muted">72 Members</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img
                                      src="assets/img/icons/brands/support-label.png"
                                      alt="Avatar"
                                      class="rounded-circle"
                                    />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Support Team</h6>
                                    <small class="text-muted">122 Members</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <a href="javascript:;"><span class="badge bg-label-primary">Support</span></a>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img
                                      src="assets/img/icons/brands/figma-label.png"
                                      alt="Avatar"
                                      class="rounded-circle"
                                    />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">UI Designers</h6>
                                    <small class="text-muted">7 Members</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <a href="javascript:;"><span class="badge bg-label-info">Designer</span></a>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img
                                      src="assets/img/icons/brands/vue-label.png"
                                      alt="Avatar"
                                      class="rounded-circle"
                                    />
                                  </div>
                                  <div class="me-2">
                                    <h6 class="mb-0">Vue.js Developers</h6>
                                    <small class="text-muted">289 Members</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                                </div>
                              </div>
                            </li>
                            <li class="mb-3">
                              <div class="d-flex align-items-center">
                                <div class="d-flex align-items-start">
                                  <div class="avatar me-3">
                                    <img
                                      src="assets/img/icons/brands/twitter-label.png"
                                      alt="Avatar"
                                      class="rounded-circle"
                                    />
                                  </div>
                                  <div class="me-w">
                                    <h6 class="mb-0">Digital Marketing</h6>
                                    <small class="text-muted">24 Members</small>
                                  </div>
                                </div>
                                <div class="ms-auto">
                                  <a href="javascript:;"><span class="badge bg-label-secondary">Marketing</span></a>
                                </div>
                              </div>
                            </li>
                            <li class="text-center">
                              <a href="javascript:;">View all teams</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Teams -->
                  </div>
                   <!-- Users List Table -->
            <div class="card">
              <div class="card-header border-bottom">
                <h5 class="card-title">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                  <div class="col-md-4 user_role"></div>
                  <div class="col-md-4 user_plan"></div>
                  <div class="col-md-4 user_status"></div>
                </div>
              </div>
              <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                  <thead>
                    <tr>
                      <th></th>
                      <th>User</th>
                      <th>email</th>
                      <th>role</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->email}}</td>
                      <td>{{$usuario->role}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- Offcanvas to add new user -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header border-bottom">
                  <h6 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h6>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0">
                  <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                    <div class="mb-3">
                      <label class="form-label" for="add-user-fullname">Full Name</label>
                      <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                        name="userFullname" aria-label="John Doe" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="add-user-email">Email</label>
                      <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com"
                        aria-label="john.doe@example.com" name="userEmail" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="add-user-contact">Contact</label>
                      <input type="text" id="add-user-contact" class="form-control phone-mask"
                        placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="add-user-company">Company</label>
                      <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer"
                        aria-label="jdoe1" name="companyName" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="country">Country</label>
                      <select id="country" class="select2 form-select">
                        <option value="">Select</option>
                        <option value="Australia">Australia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Korea">Korea, Republic of</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Russia">Russian Federation</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="user-role">User Role</label>
                      <select id="user-role" class="form-select">
                        <option value="subscriber">Subscriber</option>
                        <option value="editor">Editor</option>
                        <option value="maintainer">Maintainer</option>
                        <option value="author">Author</option>
                        <option value="admin">Admin</option>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="user-plan">Select Plan</label>
                      <select id="user-plan" class="form-select">
                        <option value="basic">Basic</option>
                        <option value="enterprise">Enterprise</option>
                        <option value="company">Company</option>
                        <option value="team">Team</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
                </div>
              </div>
              <!--/ User Profile Content -->
              
            </div>
            <!-- / Content -->
           
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

  <script src="{{ asset('assets/vendor/libs/hammer/hammer.js')}}"></script>

  <script src="{{ asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

  <script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('assets/vendor/libs/moment/moment.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/js/app-user-list.js')}}"></script>
            @endsection
