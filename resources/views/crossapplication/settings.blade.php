@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Cross Application</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default w-100">
                <div class="card-header">
                    <h3 class="card-title">Defaults</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize">
                            <i class="fas fa-expand"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Multiple</label>
                                <select class="duallistbox w-100" multiple="multiple">
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>

            </div>
            <!-- /.card-header -->
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>

        <!-- /.card -->

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Codes</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Code Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Code</label>
                            <input class="form-control w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>Detailed Description</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Alternate Code</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>Active</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label>Team</label>
                                <select multiple="multiple" class="w-100">
                                    <option></option>
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>Property List</label>
                                <textarea rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
        </div>
        <!-- Transaction Codes-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Transaction Codes</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Transaction Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Code</label>
                            <input class="form-control w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>Description</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Starting</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Increment</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Prefix</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Suffix</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>Active</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label>Team</label>
                                <select multiple="multiple" class="w-100">
                                    <option></option>
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>Format</label>
                                <textarea rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
        </div>
        <!--Currencies-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Currencies</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Currency</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Short Name</label>
                            <input class="form-control w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>Name</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Cent</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Cents</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Decimal Places</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>Active</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>Exchange Rate</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>Exchange Rate(Sell)</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>Exchange Rate(Buy)</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>Word Formula</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Effectivity Date</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label>Active</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>


        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">GL Interface</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>GL Interface Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div>
                            <label>Item Group</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label style="font-size: 0.8em">Customer/Supplier/Agent Group</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Warehouse</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Account</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row h-10"></div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Delete</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Messages</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div>
                            <label>Format</label>
                            <textarea rows="3" class="form-control h-100 w-100"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Message Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="row h-10"></div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Delete</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Depots</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Depot Row</label>
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" tabindex="1" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Address 1</label>
                            </div>
                            <div class="col">
                                <input class="form-control" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>State/Province</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Salutation</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Last Name</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Phone</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Tax Scope</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Port of Discharge</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Remarks</label>
                            </div>
                            <div class="col">
                                <textarea rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Id</label>
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Depot Name</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" class="form-control" tabindex="2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Address 2</label>
                            </div>
                            <div class="col">
                                <input class="form-control" tabindex="5" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Zip/Postal Code</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>First Name</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Title</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Fax</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Tax Number</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Alternate Code</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Name</label>
                            </div>
                            <div class="col">
                                <input class="form-control" tabindex="3" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>City</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100" tabindex="6">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Country</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Middle Name</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Email</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>URL</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Warehouse</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Short Name</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Depot Type</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row h-10"></div>
                <!-- /.row -->
                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Tax Table</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Tax Code</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">GST</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Tax Scope</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">01. Local-Registered</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Tax Category</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">Exempted</label>

                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <label>Tax Rate</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0.0000</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label style="font-size: 0.6em;">Tax Rate-InterState</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0.0000</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label style="font-size: 0.6em;">Tax Rate-Concessional</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0.0000</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Account</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Alternate Code</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">EP</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Blocked?</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0</label>
                        </div>
                    </div>
                    <div class="row h-10"></div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Delete</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
        </div>


        <!--Locations-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Locations</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Location</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Location Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>Region</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Country</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Effectivity Date</label>
                            <div class="input-group date" id="locationeffectivitydate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#locationeffectivitydate" />
                                <div class="input-group-append" data-target="#locationeffectivitydate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Expiration Date</label>
                            <div class="input-group date" id="locationexpirydate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#locationexpirydate" />
                                <div class="input-group-append" data-target="#locationexpirydate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>Depot Name</label>
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>Default Payment Code</label>
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>Time Slots</label>
                                <select multiple="multiple" class="w-100">
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>IP Address</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Title Image URL</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <label>Background Image URL</label>
                            <input class="form-control w-100" />
                        </div>

                    </div>
                </div>

                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>

        <!--Receipts-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Receipts</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Payment Code</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Account</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Transaction Code</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>

        <!--Holidays-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Holidays</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Locale</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="input-group date" id="holidaysdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#holidaysdate" />
                                <div class="input-group-append" data-target="#holidaysdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Available %</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Notes</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Vehicles</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div>
                            <label>Vehicle</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Vehicle Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Car</option>
                                <option>Two wheeler/Bike</option>
                                <option>Truck</option>
                                <option>Bus</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Length</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Width</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Height</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>CT Size</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Placeholder</option>
                                <option>Placeholder2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>TG</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label>IU Label No</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Owner</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>MLW/Kg</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>UW/Kg</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Tonnage</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>Bud Capacity</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>CT Type</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Placeholder</option>
                                <option>Placeholder2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>DG</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div>
                                <label>Delivery Zone</label>
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">[Select]</option>
                                    <option>Delivery Zone A</option>
                                    <option>Delivery Zone B</option>
                                    <option>Delivery Zone C</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label>Remarks</label>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <hr style="border: 2px solid black;" />
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label style="font-size: 2em">Team Assignment to</label>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Effectivity Date ⇑</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>Team</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <hr style="border: 2px solid black;" />
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label style="font-size: 2em">Admin Info</label>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Document Type ⇑ Document Number</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Date Issued Expiration Date</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col">
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                  <div class="col-md-2">
                      <button type="button" class="btn btn-block btn-primary">Save</button>
                  </div>
                  <div class="col-md-2">
                      <button type="button" class="btn btn-block btn-primary">Delete</button>
                  </div>
                  <div class="col-md-2">
                      <button type="button" class="btn btn-block btn-primary">Refresh</button>
                  </div>
              </div>
            </div>
            </br>

            
            <div class="card-footer">

            </div>
        </div>
        <!-- /.card-body -->

        <!-- /.container-fluid -->
    </section>

    
@endsection
