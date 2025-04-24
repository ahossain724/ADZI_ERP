@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Order Processing</a></li>
                        <li class="breadcrumb-item active"><a href="#">Quotations & Orders</a></li>
                        <li class="breadcrumb-item active">Customer Orders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Customer Orders</h3>


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
            <form action="{{ route('storecustomerorder') }}" method="POST" id="customerorders_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Order Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">ACO-</option>
                                                <option>PO-</option>
                                                <option>WALK</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="order_number" name="order_number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Customer PO</label>
                            </div>
                            <div class="col">
                                <input id="customer_po" name="customer_po" class="form-control" tabindex="4" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Date</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="date" name="date" type="text" class="form-control datetimepicker-input"
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
                                <label>Customer PO Date</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="customer_po_date" name="customer_po_date" type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">Customer Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">CUS-</option>
                                                <option>PO-</option>
                                                <option>WALK</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="customer_number" name="customer_number" class="form-control" type="text">
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
                                    <label style="color: red">Project</label>
                                </div>
                                <div class="col">
                                    <select id="project" name="project" class="form-control select2bs4">
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
                                <div class="col-sm-5">
                                    <label>Print Tax?</label>
                                </div>
                                <div class="col">
                                    <input id="print_tax" name="print_tax" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked"checked />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Total Amount</label>
                                </div>
                                <div class="col">
                                    <label>0.00</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Quote By</label>
                                </div>
                                <div class="col">
                                    <label class="radio-inline">
                                        <input id="quote_by" name="quote_by" type="radio" name="optradio" checked>1. Selling Unit
                                    </label>
                                    <label class="radio-inline">
                                        <input id="quote_by" name="quote_by" type="radio" name="optradio">2. Weight
                                    </label>
                                </div>
                            </div>
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
                                    <label>Last Approved By</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Source</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Division</label>
                                </div>
                                <div class="col">
                                    <select id="division" name="division" class="form-control select2bs4">
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
                                    <label style="color: red'">Currency</label>
                                </div>
                                <div class="col">
                                    <select id="currency" name="currency" class="form-control select2bs4">
                                        <option selected="selected">BDT</option>
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
                                    <label>Amt Rounded Off</label>
                                </div>
                                <div class="col">
                                    <label>0.0000</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Quotation Number</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Team Member</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label style="color: red">Payment Confirmation</label>
                                </div>
                                <div class="col">
                                    <select id="payment_confirmation" name="payment_confirmation" class="form-control select2bs4">
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
                                    <label>Periods</label>
                                </div>
                                <div class="col">
                                    <input id="periods" name="periods" class="form-control" tabindex="4" />
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Invoicing Rule</label>
                                </div>
                                <div class="col">
                                    <select id="invoicing_rule" name="invoicing_rule" class="form-control select2bs4">
                                        <option selected="selected">1-From DO after Confirmation</option>
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
                                    <label>Partial Delivery?</label>
                                </div>
                                <div class="col">
                                    <input id="partial_delivery" name="partial_delivery" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked"checked />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Restrict DOs to Items Scheduled on</label>
                                </div>
                                <div class="col">
                                    <select id="restrict_dos" name="restrict_dos" class="form-control select2bs4">
                                        <option selected="selected">[Unknown]</option>
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
                                    <label>Section</label>
                                </div>
                                <div class="col">
                                    <select id="section" name="section" class="form-control select2bs4">
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
                                    <label style="color: red">Exchange Rate</label>
                                </div>
                                <div class="col">
                                    <input id="exchange_rate" name="exchange_rate" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Approved Amount</label>
                                </div>
                                <div class="col">
                                    <label>0.00</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Order Flag</label>
                                </div>
                                <div class="col">
                                    <label>Open</label>
                                </div>
                            </div>
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
                                    <label>Location of Installation</label>
                                </div>
                                <div class="col">
                                    <input id="location_of_installation" name="location_of_installation" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Issue Date</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="issue_date" name="issue_date" type="text" class="form-control datetimepicker-input"
                                            data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
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