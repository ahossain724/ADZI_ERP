@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Purchase Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Purchase</a></li>
                        <li class="breadcrumb-item active">Purchase Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Purchase Order-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Purchase Order</h3>


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
            <form action="{{ route('storepurchaseorder') }}" method="POST" id="purchaseorder_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>PO Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">PO--</option>
                                                <option>PO-</option>
                                                <option>WALK</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="po_number" name="po_number" class="form-control" type="text">
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
                                <label style="color: red">Warehouse</label>
                            </div>
                            <div class="col">
                                <select id="warehouse" name="warehouse" class="form-control select2bs4">
                                    <option selected="selected">AIMS Store</option>
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
                                <label style="color: red">Supplier Code</label>
                            </div>
                            <div class="col">
                                <input id="supplier_code" name="supplier_code" class="form-control" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">Currency</label>
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
                                <label style="color: red">Gross Amount</label>
                            </div>
                            <div class="col">
                                <label>0.00</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">Net Amount</label>
                            </div>
                            <div class="col">
                                <label>0.00</label>
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
                            <div class="col">
                                <label>Requisition No</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Purchase Type</label>
                            </div>
                            <div class="col">
                                <select id="purchase_type" name="purchase_type" class="form-control select2bs4">
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
                                <label>Supplier Company</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Exchange Rate</label>
                            </div>
                            <div class="col">
                                <label>1.00000</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Discount Amount</label>
                            </div>
                            <div class="col">
                                <input id="discount_account" name="discount_amount" class="form-control" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Tax Amount</label>
                            </div>
                            <div class="col">
                                <label>0.00000</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Notes</label>
                                </div>
                                <div class="col">
                                    <textarea id="notes" name="notes" rows="3" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Terms and Conditions</label>
                                </div>
                                <div class="col">
                                    <textarea id="terms_and_conditions" name="terms_and_conditions" rows="7" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>LC Number</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>PI No TO Commercial</label>
                                </div>
                                <div class="col">
                                    <input id="pi_no_to" name="pi_no_to" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>PO Status</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Entry Created By</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Submitted By</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Approved/Returned By</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Approval Undone By</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Locked By</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Back to Back L/C No</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>PI Date</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="pi_date" name="pi_date" type="text" class="form-control datetimepicker-input"
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
                                    <label>	Entry-Type (System)</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>	Entry-Type (System)</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Last Updated-By</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Submitted-On</label>
                                </div>
                                <div class="col">
                                    <label>[Unknown]</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Approved/Returned On</label>
                                </div>
                                <div class="col">
                                    <label>[Unknown]</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Approval Undone-On</label>
                                </div>
                                <div class="col">
                                    <label>[Unknown]</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Locked-On</label>
                                </div>
                                <div class="col">
                                    <label>[Unknown]</label>
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