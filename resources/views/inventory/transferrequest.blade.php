@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transfer Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                        <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
                        <li class="breadcrumb-item active">Transfer Request</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Transfer Request</h3>


            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>

        </div>
        <!-- Card Header -->
        <div class="card-body">
            <form action="{{ route('storetransferrequest') }}" method="POST" id="transferrequest_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Transfer Request Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">ATRE</option>
                                                <option>BTRE</option>
                                                <option>TREQ</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="transfer_request_number" name="transfer_request_number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Date Sent</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="date_sent" name="date_sent" type="text" class="form-control datetimepicker-input"
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
                                <label>From Warehouse</label>
                            </div>
                            <div class="col">
                                <select id="from_warehouse" name="from_warehouse" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                            <div class="col">
                                <label>To Warehouse</label>
                            </div>
                            <div class="col">
                                <select id="to_warehouse" name="to_warehouse" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Order Date</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="order_date" name="order_date" type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Date Approved</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="date_approved" name="date_approved" type="text" class="form-control datetimepicker-input"
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
                                <label>From Division</label>
                            </div>
                            <div class="col">
                                <select id="from_division" name="from_division" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                            <div class="col">
                                <label>To Division</label>
                            </div>
                            <div class="col">
                                <select id="to_division" name="to_division" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Requested Date</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="requested_date" name="requested_date" type="text" class="form-control datetimepicker-input"
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
                                <label>Reference</label>
                            </div>
                            <div class="col">
                                <input id="reference" name="reference" class="form-control" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>From Section</label>
                            </div>
                            <div class="col">
                                <select id="from_section" name="from_section" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                            <div class="col">
                                <label>To Section</label>
                            </div>
                            <div class="col">
                                <select id="to_section" name="to_section" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label></label>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Transfer Request Status</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>From Project</label>
                            </div>
                            <div class="col">
                                <select id="from_project" name="from_project" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                            <div class="col">
                                <label>To Project</label>
                            </div>
                            <div class="col">
                                <select id="to_project" name="to_project" class="form-control select2bs4">
                                    <option selected="selected">[Select]</option>
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
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Header Message</label>
                                </div>
                                <div class="col">
                                    <textarea id="header_message" name="header_message" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Footer Message</label>
                                </div>
                                <div class="col">
                                    <textarea id="footer_message" name="footer_message" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Notes</label>
                                </div>
                                <div class="col">
                                    <textarea id="notes" name="notes" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Team</label>
                                </div>
                                <div class="col">
                                    <select id="team" name="team" class="form-control select2bs4">
                                        <option selected="selected">[Select]</option>
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
                                <div class="col">
                                    <label>Location</label>
                                </div>
                                <div class="col">
                                    <select id="location" name="location" class="form-control select2bs4">
                                        <option selected="selected">[Select]</option>
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
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Team Member</label>
                                </div>
                                <div class="col">
                                    <select id="team_member" name="team_member" class="form-control select2bs4">
                                        <option selected="selected">[Select]</option>
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
                                <div class="col">
                                    <label>Transfer Request Flag</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>    
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Manager</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>    
                            <div class="row mt-2">
                                <div class="col">
                                    <label>TOs</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row h-10"></div>
                <!-- /.row -->
                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="card-footer">

        </div>
    </div>
    </section>
    

@endsection