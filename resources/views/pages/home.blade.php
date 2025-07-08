<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADZI | ERP</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
              
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                  <li class="nav-item d-none d-sm-inline-block">
                     <select class="form-control changeLang text-center">
                    <option value="en" {{ session()->get('language') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="bn" {{ session()->get('language') == 'bn' ? 'selected' : '' }}>Bangla</option>
                </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ADZI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Ashek</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active"
                                onclick="document.getElementById('logout-form').submit()">
                                <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                                <p>
                                    Log Out
                                    <form action="{{ route('logout') }}" method="POST" id='logout-form'>
                                        @csrf
                                    </form>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa-brands fa-slack"></i>
                                <p>
                                    Cross Application
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/settings') }}"
                                        class="nav-link 
                @if (app('request')->route()->uri == 'settings') active @endif
                ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/customers') }}"
                                        class="nav-link 
                @if (app('request')->route()->uri == 'customers') active @endif
                ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Customers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/supplier') }}"
                                        class="nav-link 
                @if (app('request')->route()->uri == 'supplier') active @endif
                ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Suppliers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/items') }}"
                                        class="nav-link 
                @if (app('request')->route()->uri == 'items') active @endif
                ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Items</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Packing Configuration</p>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item">
                              <a href="#" class="nav-link active">
                                <i class="fa-solid fa-cash-register"></i>
                                  <p>
                                      Purchase
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/purchaseorder') }}"
                                        class="nav-link 
                @if (app('request')->route()->uri == 'purchaseorder') active @endif
                ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Purchase Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/requisitionentry') }}"
                                        class="nav-link 
                @if (app('request')->route()->uri == 'requisitionentry') active @endif
                ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Requisition Entry - General Items</p>
                                    </a>
                                </li>
                                
                            </ul>
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                 <i class="fa-solid fa-weight-scale"></i>
                                    <p>
                                        Order Processing
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                              
                              <ul class="nav nav-treeview">
                                  
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              Qoutations & Orders
                                              <i class="right fas fa-angle-left"></i>
                                          </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                            <a href="{{ url('/quotations') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'quotations') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Quotations</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/customerorders') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'customerorders') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Customer Orders</p>
                                              </a>
                                          </li>
                                          
                                      </ul>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Delivery/Invoices/<br>Returns
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                          <a href="{{ url('/deliveryorders') }}"
                                          class="nav-link 
                  @if (app('request')->route()->uri == 'deliveryorders') active @endif
                  ">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Delivery Orders</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{ url('/invoices') }}"
                                          class="nav-link 
                  @if (app('request')->route()->uri == 'invoices') active @endif
                  ">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Invoices</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              </ul>
                              <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="fa-solid fa-warehouse"></i>
                                    <p>
                                        Inventory
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                              
                              <ul class="nav nav-treeview">
                                  
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              Transactions
                                              <i class="right fas fa-angle-left"></i>
                                          </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                            <a href="{{ url('/transferrequest') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'transferrequest') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Transfer Request</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/receiptorder') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'receiptorder') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Receipt Order</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/classesdimensions') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'classesdimensions') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Classes and Dimensions</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/issueorder') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'issueorder') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Issue Order</p>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                </ul>
                              <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="fa-solid fa-sheet-plastic"></i>
                                    <p>
                                        Accounts
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                              
                              <ul class="nav nav-treeview">
                                  
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              General Ledger
                                              <i class="right fas fa-angle-left"></i>
                                          </p>
                                      </a>
                                      <ul class="nav nav-treeview">
                                  
                                  <li class="nav-item">
                                      <a href="#" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>
                                              Transactions
                                              <i class="right fas fa-angle-left"></i>
                                          </p>
                                      </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                          <a href="{{ url('/glvoucher') }}"
                                          class="nav-link 
                  @if (app('request')->route()->uri == 'glvoucher') active @endif
                  ">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Gl Voucher</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                          <a href="{{ url('/yearendprocessing') }}"
                                          class="nav-link 
                  @if (app('request')->route()->uri == 'yearendprocessing') active @endif
                  ">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Year End Processing</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/iouvoucherentry') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'iouvoucherentry') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>IOU Voucher Entry</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/iouadjustment') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'iouadjustment') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>IOU Adjustment</p>
                                              </a>
                                          </li>
                                    </ul>
                                          </li>
                                        </ul> 
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                  
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Accounts Receivable
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                      <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                            <a href="{{ url('/receipt') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'receipt') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Receipts</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/invoicesimple') }}"
                                            class="nav-link 
                    @if (app('request')->route()->uri == 'invoicesimple') active @endif
                    ">
                                                  <i class="far fa-dot-circle nav-icon"></i>
                                                  <p>Invoice-Simple</p>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="{{ url('/complex') }}"
                                              class="nav-link 
                      @if (app('request')->route()->uri == 'complex') active @endif
                      ">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>Complex</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                              <a href="{{ url('/allocation') }}"
                                              class="nav-link 
                      @if (app('request')->route()->uri == 'allocation') active @endif
                      ">
                                                    <i class="far fa-dot-circle nav-icon"></i>
                                                    <p>Allocations</p>
                                                </a>
                                            </li>
                                      </ul> 
                                      </li>
                                  </ul>  
                            
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation + Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boxed</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Collapsed Sidebar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ChartJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/uplot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>uPlot</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/UI/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/icons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Icons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/modals.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Modals & Alerts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/navbar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Navbar & Tabs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/timeline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Timeline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/ribbons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ribbons</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Advanced Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Editors</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Validation</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Calendar
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/kanban.html" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Kanban Board
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/e-commerce.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>E-commerce</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/projects.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-add.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-edit.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-detail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Detail</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/contacts.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/faq.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>FAQ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/contact-us.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact us</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Extras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Login & Register v1
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/examples/login.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Login v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/register.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Register v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/forgot-password.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Forgot Password v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/recover-password.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Recover Password v1</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Login & Register v2
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/examples/login-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Login v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/register-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Register v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Forgot Password v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/examples/recover-password-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Recover Password v2</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/lockscreen.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lockscreen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Legacy User Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/language-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Language Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/404.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/500.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/pace.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pace</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/blank.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blank Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="starter.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Starter Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    Search
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/search/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Search</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/search/enhanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Enhanced</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">MISCELLANEOUS</li>
                        <li class="nav-item">
                            <a href="iframe.html" class="nav-link">
                                <i class="nav-icon fas fa-ellipsis-h"></i>
                                <p>Tabbed IFrame Plugin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Documentation</p>
                            </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Important</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a href="#">AIMS</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="plugins/dropzone/min/dropzone.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
    <script> 
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url = "{{ route('langChange') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
     });
        toastr.options = {
            "progressBar":true,
            "closeButton":true,
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('form#codes_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }

                }



            });
        });
        //Customer code insert
        $('form#customer_form').on('submit', function(e) {
            e.preventDefault();

            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }

                }



            });
        });
        //Supplier code insert
        $('form#supplier_form').on('submit', function(e) {
            e.preventDefault();

            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,

                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Items code insert
        $('form#items_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }
                }

            });
        });
         //Purchase Order code insert
         $('form#purchaseorder_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Requisition Entry code insert
         $('form#requisitionentry_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Quotations code insert
         $('form#quotations_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                   if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //CustomerOrder code insert
         $('form#customerorders_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                   if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //DeliveryOrder code insert
         $('form#deliveryorders_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Invoices code insert
         $('form#invoices_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
            //TransferRequest code insert
            $('form#transferrequest_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //ReceiptOrder code insert
         $('form#receiptorder_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //IssueOrder code insert
        $('form#issueorder_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //GLVoucher code insert
        $('form#glvoucher_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Year End code insert
        $('form#yearend_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //IOU voucher code insert
        $('form#iouvoucher_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //IOU Adjustment code insert
        $('form#iouadjustment_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Receipt code insert
        $('form#receipt_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Invoice Simple insert
         $('form#invoicesimple_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Complex insert
         $('form#complex_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Allocation insert
         $('form#allocation_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });

    //TransactionCode insert
         $('form#transactioncode_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Currency insert
         $('form#currency_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //GLInterface insert
         $('form#glinterface_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Message insert
         $('form#message_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Depot insert
         $('form#depot_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
          //TaxTable insert
         $('form#taxtable_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Location insert
         $('form#location_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Settings Receipt insert
         $('form#settingsreceipt_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Holiday insert
         $('form#holiday_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Vehicle insert
         $('form#vehicle_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //UserDoc insert
         $('form#userdoc_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Site Defaults insert
         $('form#sitedefault_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //RBO insert
         $('form#rbo_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
         //Reference insert
         $('form#reference_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        
         //Classes insert
         $('form#class_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        
         //Dimensions insert
         $('form#dimension_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //PDs insert
         $('form#pd_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        //Brand insert
         $('form#brand_form').on('submit', function(e) {
            e.preventDefault();
            let form = this;
            let formdata = new FormData(form);
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formdata,
                processData: false,
                dataType: 'json',
                contentType: false,

                success: function(data) {
                    if (data.status == 1) {
                        toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                        //alert(data.message);
                        $(form)[0].reset();
                    }
                }
            });
        });
        
       
            // This event fires just before the modal is shown
            $('#modal-rbo').on('show.bs.modal', function (event) {
                var customerSelect2 = $('#customer_id').select2({
                placeholder: "Select Customer",
                theme: 'bootstrap4',
                dropdownParent: $('#modal-rbo') // This is crucial for Select2 to display correctly within Bootstrap modals
            });

                var button = $(event.relatedTarget);
                var customerListData = button.data('customer-list');
                var customerList = customerListData; // Assuming jQuery's .data() auto-parses JSON

                // Transform your customer list into the format Select2 expects: { id: ..., text: ... }
                var formattedCustomers = customerList.map(function(customer) {
                    return {
                        id: customer.id,
                        text: customer.name // Or any other property you want to display
                    };
                });

                // Set the data for the Select2 dropdown
                customerSelect2.select2('destroy'); // Destroy previous instance to re-init with new data
                customerSelect2 = $('#customer_id').select2({
                    placeholder: "Select Customer",
                    data: formattedCustomers, // Provide the formatted data
                    theme: 'bootstrap4',
                    dropdownParent: $('#modal-rbo')
                });

                // Optionally, clear any previous selection
                customerSelect2.val(null).trigger('change');
            });

            // Reference
            $('#modal-reference').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);

                // Initialize Select2 for rbo_id - without data initially
                var rboSelect = $('#rbos_id').select2({
                    placeholder: "Select RBO",
                    theme: 'bootstrap4',
                    dropdownParent: $('#modal-reference'),
                    // No 'data' property here yet, as we'll fetch it via Ajax
                });

                // Optionally, clear any previous selection or data
                rboSelect.val(null).trigger('change');
                rboSelect.empty(); // Clear existing options if any

                // Make an Ajax call to fetch RBO data
                $.ajax({
                    url: '{{ route('api.rbos.list') }}', // Use Laravel's route helper
                    method: 'GET',
                    dataType: 'json', // Expect JSON response
                    success: function(rboListData) {
                        // Transform your RBO list into the format Select2 expects: { id: ..., text: ... }
                        var formattedRbos = rboListData.map(function(rbo) {
                            return {
                                id: rbo.id,
                                text: rbo.rbo_name
                            };
                        });

                        // Destroy and re-initialize Select2 with the fetched data
                        // It's often better to just update the data if Select2 supports it,
                        // but destroying and re-initializing is a common robust method.
                        rboSelect.select2('destroy'); // Destroy previous instance
                        rboSelect = $('#rbos_id').select2({
                            placeholder: "Select RBO",
                            data: formattedRbos, // Provide the fetched formatted data
                            theme: 'bootstrap4',
                            dropdownParent: $('#modal-reference')
                        });

                        // If there's a pre-selected value you want to set, do it here
                        // var preselectedValue = button.data('preselected-rbo-id'); // Example
                        // if (preselectedValue) {
                        //     rboSelect.val(preselectedValue).trigger('change');
                        // }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error fetching RBO list:", textStatus, errorThrown);
                        // Handle error, e.g., display a message to the user
                        alert("Failed to load RBO list. Please try again.");
                    }
                });
            });

            //Brand Populate
             $('#modal-brand').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);

                // Initialize Select2 for rbo_id
                var rboSelect = $('#brbo_id').select2({ 
                    placeholder: "Select RBO",
                    theme: 'bootstrap4',
                    dropdownParent: $('#modal-brand')
                });

                // Get RBO list data from the button's data attribute
                var rboListData = button.data('rbo-list');
                var rboList = rboListData; // Assuming jQuery's .data() auto-parses JSON

                // Transform your RBO list into the format Select2 expects: { id: ..., text: ... }
                var formattedRbos = rboList.map(function(rbo) { // Changed 'rbos' to 'rbo' here
                    return {
                        id: rbo.id,   // Corrected: using 'rbo'
                        text: rbo.rbo_name // Corrected: using 'rbo'
                    };
                });

                // Set the data for the Select2 dropdown
                rboSelect.select2('destroy'); // Destroy previous instance to re-init with new data
                rboSelect = $('#brbo_id').select2({
                    placeholder: "Select RBO",
                    data: formattedRbos, // Provide the formatted data
                    theme: 'bootstrap4',
                    dropdownParent: $('#modal-brand')
                });

                // Optionally, clear any previous selection
                rboSelect.val(null).trigger('change');
            });
           

    // Handle the submission of the form that creates a new RBO
    $('#rbo_form').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        const form = $(this);
        const url = form.attr('action') || '{{ route('rbos.store') }}'; // Get action URL from form or use named route
        const formData = form.serialize(); // Serialize form data

        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // CSRF token
                'X-Requested-With': 'XMLHttpRequest' // Inform Laravel it's an Ajax request
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    const newRbo = response.rbo; // The newly created RBO object
                    const rboSelect = $('#rbo'); // Your main RBO dropdown

                    // Create a new option element
                    const newOption = new Option(newRbo.rbo_name, newRbo.id, false, false); // text, value, defaultSelected, selected

                    // Append the new option to the Select2 dropdown
                    rboSelect.append(newOption).trigger('change'); // Append and trigger change to update Select2's display

                    // Optionally, select the newly added RBO
                    // rboSelect.val(newRbo.id).trigger('change');

                    // Close the modal where the form is (if applicable)
                    // $('#createRBOModal').modal('hide');

                    // Clear the form
                    form[0].reset();
                    toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                } else {
                    alert('Error: ' + response.message);
                    // Handle specific errors if your backend sends more details
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error adding RBO:", textStatus, errorThrown, jqXHR.responseText);
                let errorMessage = "An error occurred while adding the RBO.";

                if (jqXHR.status === 422 && jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                    // Validation errors
                    errorMessage = "Validation Error:\n";
                    for (const field in jqXHR.responseJSON.errors) {
                        errorMessage += `- ${jqXHR.responseJSON.errors[field].join(', ')}\n`;
                    }
                } else if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message;
                }

                //alert(errorMessage);
            }
        });
    });

        
            /*$('#rbo').on('change', function() {
            // Get the selected option element
            var selectedOption = $(this).find('option:selected');
            // Get the rbo_name from the text of the selected option
            var rboName = selectedOption.text();
            // Get the rbo_id from the value of the selected option (if you still need it for other purposes, though the prompt specifies rbo_name)
            var rboId = selectedOption.val();


            if (rboName && rboName !== '-- Select RBO --') { // Assuming '-- Select RBO --' is your default option text
                $.ajax({
                    url: '/get-customers-by-rbo/' + encodeURIComponent(rboName), // Changed URL to use rboName
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        alert(data);
                        $('#customer_name').empty();
                        $('#customer_name').append('<option value="">-- Select Customer --</option>');
                        $.each(data, function(key, customer) {
                            $('#customer_name').append('<option value="' + customer.id + '">' + customer.name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + error);
                    }
                });
            } else {
                $('#customer_name').empty();
                $('#customer_name').append('<option value="">-- Select Customer --</option>');
            }
        });*/

        //Reference Filter
        /*$('#rbo').on('change', function() {
    // Get the selected option element
    var selectedOption = $(this).find('option:selected');
    // Get the rbo_name from the text of the selected option
    var rboName = selectedOption.text();
    // Get the rbo_id from the value of the selected option (if you still need it for other purposes, though the prompt specifies rbo_name)
    var rboId = selectedOption.val();

    alert(rboName);

    if (rboName && rboName !== '-- Select RBO --') { // Assuming '-- Select RBO --' or the translated 'select' is your default option text
        $.ajax({
            url: '/get-references-by-rbo/' + encodeURIComponent(rboName), // Changed URL to use rboName and match your controller route
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                alert(data);
                $('#reference').empty(); // <--- CHANGED THIS ID
                $('#reference').append('<option value="">-- Select Reference --</option>'); // <--- CHANGED THIS TEXT
                $.each(data, function(key, reference) {
                    $('#reference').append('<option value="' + reference.id + '">' + reference.reference + '</option>'); // <--- CHANGED THIS ID
                });
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + status + error);
                // Optionally, re-populate with default if an error occurs
                $('#reference').empty();
                $('#reference').append('<option value="">-- Select Reference --</option>');
            }
        });
    } else {
        $('#reference').empty(); // <--- CHANGED THIS ID
        $('#reference').append('<option value="">-- Select Reference --</option>'); // <--- CHANGED THIS TEXT
    }
});*/

//Create Dimension Grid
// Get a reference to the form
const itemForm = document.forms.item_form;

// Function to enforce 3 decimal places for specific numeric inputs
function enforceThreeDecimalPlaces(event) {
    let value = event.target.value;
    
    // Allow an empty string
    if (value === '') {
        return;
    }

    // This regex allows digits and a single decimal point, and nothing else.
    // It also prevents more than 3 digits after the decimal point.
    const regex = /^(\d*\.?\d{0,3})$/;

    if (!regex.test(value)) {
        // If the current value doesn't match the regex,
        // revert to the last valid state or try to trim it.
        // A simpler approach is to prevent the invalid character from being typed.
        // For 'input' event, it's often easier to just remove invalid parts.

        // Remove any characters that are not digits or a single dot
       /* value = value.replace(/[^0-9.]/g, '');*/

        // Ensure only one dot
        const parts = value.split('.');
        if (parts.length > 2) {
            value = parts[0] + '.' + parts.slice(1).join('');
        }

        // Limit to 3 decimal places after the dot if a dot exists
        if (parts[1] && parts[1].length > 3) {
            value = parts[0] + '.' + parts[1].substring(0, 3);
        }
    }
    
    event.target.value = value;
}

// Attach the event listener to the save button within the form
itemForm.showButton.addEventListener('click', function(event) {
    // Prevent form from submitting
    event.preventDefault();

    // Get selected values using form elements by their 'name'
    const item = itemForm.display.value;
    const rate = itemForm.rate.value;
    const rowCount = parseInt(itemForm.row.value, 10);
    const dimensionSelect = itemForm.dimension
    const selectedDimensions = Array.from(dimensionSelect.selectedOptions).map(option => option.value);
    
    // Basic validation
    if (item === '[Select]' || !rate || isNaN(rowCount) || rowCount <= 0) {
        toastr.warning("Please enter all fields",'Fail!',{timeOut:12000});
        return;
    }

    // Create the grid structure
    let gridHTML = '<table class="table table-bordered editable-grid"><thead><tr><th>Item</th><th>Rate</th><th>Quantity</th><th>Unit</th><th>ERD</th>'; // Added ERD column header
    selectedDimensions.forEach(dim => {
        gridHTML += `<th>${dim}</th>`;
    });
    gridHTML += '</tr></thead><tbody>';

    // Create the specified number of rows
    for (let i = 0; i < rowCount; i++) {
        gridHTML += '<tr>';
        gridHTML += `<td><input type="text" class="form-control" value="${item}" readonly></td>`;
        // Apply decimal enforcement only to Rate and Quantity
        gridHTML += `<td><input type="text" class="form-control numeric-input" value="${rate}"></td>`; // numeric-input for Rate
        gridHTML += '<td><input type="text" class="form-control numeric-input" required></td>'; // numeric-input for Quantity
        // Unit Dropdown
        gridHTML += '<td><select class="form-control select2bs4" required><option value="">Select</option><option value="KG">KG</option><option value="Pcs">Pcs</option><option value="Meters">Meters</option><option value="Litres">Litres</option></select></td>';
        // ERD Textbox - NO numeric-input class
        gridHTML += '<td><input type="text" class="form-control" required></td>'; // ERD input field now accepts any characters
        selectedDimensions.forEach(dim => {
            gridHTML += `<td><input type="text" class="form-control"></td>`; // Dynamic dimensions also accept any characters
        });
        gridHTML += '</tr>';
    }

    gridHTML += '</tbody></table>';

    // Find the grid container, which is the next element sibling of the form
    const gridContainer = itemForm.nextElementSibling;
    
    // Display the grid
    if (gridContainer) {
        gridContainer.innerHTML = gridHTML;

        // Attach the event listener ONLY to elements with the 'numeric-input' class
        const numericInputs = gridContainer.querySelectorAll('.numeric-input');
        numericInputs.forEach(input => {
            input.addEventListener('input', enforceThreeDecimalPlaces);
        });
    }
});
    document.addEventListener('DOMContentLoaded', function() {
    // Get a reference to the form using its name attribute
    const itemForm = document.forms.item_form;

    // Get the grid container, which is the next element sibling of the form
    const gridContainer = itemForm.nextElementSibling; // Assuming div.grid-container is directly after the form

    // Function to collect data from the grid
function collectGridData() {
    // Find the table within the grid container
    const gridContainer = document.forms.item_form.nextElementSibling;
    const table = gridContainer.querySelector('.editable-grid');
    if (!table) {
        return []; // No grid table found
    }

    const rows = table.querySelectorAll('tbody tr');
    const data = [];
    const headers = Array.from(table.querySelectorAll('thead th')).map(th => th.textContent.trim());

    rows.forEach(row => {
        const rowData = {};
        const inputs = row.querySelectorAll('input[type="text"]');
        const unitSelect = row.querySelector('select');

        // Assign static fields
        rowData['item'] = inputs[0] ? inputs[0].value : '';
        rowData['rate'] = inputs[1] ? parseFloat(inputs[1].value) : 0;
        rowData['quantity'] = inputs[2] ? parseInt(inputs[2].value, 10) : 0;
        rowData['unit'] = unitSelect ? unitSelect.value : '';
        rowData['erd'] = inputs[3] ? inputs[3].value : '';

        // --- FIX STARTS HERE ---

        const dimensions = {};

 // Start inputs from index 4 (after Item, Rate, Quantity, Unit)

 // Start headers from index 4 to get dimension headers

 headers.slice(4).forEach((header, index) => {

const input = inputs[index + 3]; // Adjust input index to match dimension fields

if (input) {





// OPTION 2: If using a JSON 'dimensions' column in DB
 // This is more flexible. The header name becomes the key in the JSON object.

 dimensions[header] = input.value;

}

 });



 // If using a JSON 'dimensions' column, add the dimensions object to rowData

 // If you choose OPTION 1, you would NOT include this line.

 if (Object.keys(dimensions).length > 0) {

rowData['dimensions'] = dimensions;

 }



 data.push(rowData);

 });

 return data;

}


    // Attach the event listener to the save button within the form
    // Using event delegation on the form for the generate button
    itemForm.addEventListener('click', function(event) {
        // Check if the clicked element is the saveButton by its name attribute
        if (event.target.name === 'saveButton') {
            event.preventDefault(); // Prevent form from submitting

            // Get selected values using form elements by their 'name'
            const item = itemForm.elements.display.value; // Access by elements collection
            const rate = itemForm.elements.rate.value;
            const rowCount = parseInt(itemForm.elements.row.value, 10);
            const dimensionSelect = itemForm.elements.dimension; // Reference to the select element
            const selectedDimensions = Array.from(dimensionSelect.selectedOptions).map(option => option.value);

            // Basic validation
            if (item === '[Select]' || !rate || isNaN(rowCount) || rowCount <= 0) {
                alert('Please fill out all fields correctly.');
                return;
            }

            // Create the grid structure
            let gridHTML = '<table class="table table-bordered editable-grid"><thead><tr><th>Item</th><th>Rate</th><th><th>Quantity</th><th>Unit</th>';
            selectedDimensions.forEach(dim => {
                gridHTML += `<th>${dim}</th>`; // Use original dimension name for header
            });
            gridHTML += '</tr></thead><tbody>';

            for (let i = 0; i < rowCount; i++) {
                gridHTML += '<tr>';
                gridHTML += `<td><input type="text" class="form-control border border-success" value="${item}" readonly></td>`;
                gridHTML += `<td><input type="text" class="form-control border border-success" value="${rate}"></td>`;
                gridHTML += '<td><input type="text" class="form-control border border-success" required></td>';
                gridHTML += '<td><input type="text" class="form-control border border-success" required></td>';
                selectedDimensions.forEach(() => {
                    // No need for explicit `id` or `name` if collecting by index/traversal
                    gridHTML += `<td><input type="text" class="form-control border border-success"></td>`;
                });
                gridHTML += '</tr>';
            }

            gridHTML += '</tbody></table>';

            // Display the grid
            if (gridContainer) {
                gridContainer.innerHTML = gridHTML;
            }
        }
    });

    // Attach event listener to the "Save Grid Data to Database" button
    // Using querySelector with a class name instead of an ID
    const sGridDataButton = document.querySelector('.js-save-grid-data');
    if (saveGrid) {
        saveGrid.addEventListener('click', function() {
            const gridData = collectGridData();
            if (gridData.length === 0) {
                alert('No data in the grid to save.');
                return;
            }

            // Get CSRF token from the meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Send the data to the Laravel API endpoint
            fetch('/item-dimensiondetails', { // Matches the route in routes/api.php
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken // Laravel CSRF protection
                },
                body: JSON.stringify(gridData)
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        let errorMessage = 'Error saving data.';
                        if (errorData.message) {
                            errorMessage += ' ' + errorData.message;
                        }
                        if (errorData.errors) {
                            for (const key in errorData.errors) {
                                errorMessage += '\n- ' + errorData.errors[key].join(', ');
                            }
                        }
                        throw new Error(errorMessage);
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    toastr.success("Data Saved Successfully",'Success!',{timeOut:12000});
                    // Optionally clear the grid or refresh the page
                    
                } else {
                    alert('Error saving data: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                alert('An error occurred while trying to save data: ' + error.message);
            });
        });
    } else {
        console.warn("Save Grid Data button with class 'js-save-grid-data' not found.");
    }
});
$('#rbo').on('change', function() {
        // Get the selected option element
        var selectedOption = $(this).find('option:selected');
        // Get the rbo_name from the text of the selected option
        var rboName = selectedOption.text();
        // Get the rbo_id from the value of the selected option (if needed, though rbo_name is used in URLs)
        var rboId = selectedOption.val(); // Keep this if you need it for other purposes, otherwise it can be removed

        // Clear both dropdowns immediately to provide visual feedback
        // and prevent old data from lingering if no RBO is selected
        $('#customer_name').empty().append('<option value="">-- Select Customer --</option>');
        $('#references').empty().append('<option value="">--Select Reference--</option>');
        
        // Proceed with AJAX calls only if a valid RBO is selected
        if (rboName && rboName !== '-- Select RBO --') { 
           // alert(rboId);
            // Assuming '-- Select RBO --' is your default option text
            // AJAX Call 1: Get Customers by RBO
            $.ajax({
                url: '/get-customers-by-rbo/' + encodeURIComponent(rboName), // Use rboName
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // console.log("Customers data:", data); // Use console.log for debugging instead of alert
                    $('#customer_name').empty().append('<option value="">-- Select Customer --</option>');
                    $.each(data, function(key, customer) {
                        $('#customer_name').append('<option value="' + customer.id + '">' + customer.name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error (Customers): " + status + " - " + error);
                    // Optionally re-populate with default if an error occurs
                    $('#customer_name').empty().append('<option value="">-- Select Customer --</option>');
                }
            });

            // AJAX Call 2: Get References by RBO
            $.ajax({
                url: '/get-by-rbo/' + encodeURIComponent(rboName), // Use rboName
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    //alert(data);
                    console.log("References data:", data); // Use console.log for debugging instead of alert
                    $('#references').empty().append('<option value="">--Select Reference--</option>');
                    $.each(data, function(key, reference) {
                        $('#references').append('<option value="' + reference.id + '">' + reference.reference + '</option>');
                    });
                }
                
            });
        }
        // The 'else' block for clearing is now handled before the 'if' condition
        // so it applies both when no valid RBO is selected and initially.
    });
       

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            $('#reservationdate').datepicker({
                format: 'dd/mm/yyyy'
            });
            $('#locationeffectivitydate').datepicker({
                format: 'dd/mm/yyyy'
            });
            $('#locationexpirydate').datepicker({
                format: 'dd/mm/yyyy'
            });
            $('#holidaysdate').datepicker({
                format: 'dd/mm/yyyy'
            });
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            $('#locationeffectivitydate').datetimepicker({
                format: 'L'
            });
            $('#locationexpirydate').datetimepicker({
                format: 'L'
            });
            $('#holidaysdate').datetimepicker({
                format: 'L'
            });
            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });
 
                    //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "searching": false,
                "buttons": ["print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $("#exampledelivery").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["print"]
            }).buttons().container().appendTo('#exampledelivery_wrapper .col-md-6:eq(0)');
             $("#dimensiongrid").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["print"]
            }).buttons().container().appendTo('#dimensiongrid_wrapper .col-md-6:eq(0)');


            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })
            
        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>
