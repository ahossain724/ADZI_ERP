@extends('pages.home')
@section('content')
    <section class="content-header"style="padding-top: 56px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Issue Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                        <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
                        <li class="breadcrumb-item active">Issue Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Issue Order</h3>


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
            <form action="{{ route('storeissueorder') }}" method="POST" id="issueorder_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Transfer Order Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">TISS</option>
                                                <option>BTRE</option>
                                                <option>TREQ</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="transfer_order_number" name="transfer_order_number" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Confirm Date</label>
                            </div>
                            <div class="col">
                                <label>[Unknown]</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Order Number</label>
                            </div>
                            <div class="col">
                                <input id="order_number" name="order_number" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>To Warehouse</label>
                            </div>
                            <div class="col">
                                <select id="to_warehouse" name="to_warehouse" class="form-control border border-success select2bs4">
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
                                <div class="input-group date border border-success" id="reservationdate" data-target-input="nearest">
                                    <input id="order_date" name="order_date" type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append border border-success" data-target="#reservationdate"
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
                                <input id="reference" name="reference" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>To Division</label>
                            </div>
                            <div class="col">
                                <select id="to_division" name="to_division" class="form-control border border-success select2bs4">
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
                                <label>Release Date</label>
                            </div>
                            <div class="col">
                                <label>[Unknown]</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>TO Status</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>To Section</label>
                            </div>
                            <div class="col">
                                <select id="to_section" name="to_section" class="form-control border border-success select2bs4">
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
                                <label>To Project</label>
                            </div>
                            <div class="col">
                                <select id="to_project" name="to_project" class="form-control border border-success select2bs4">
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
                                    <textarea id="header_message" name="header_message" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Footer Message</label>
                                </div>
                                <div class="col">
                                    <textarea id="footer_message" name="footer_message" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Notes</label>
                                </div>
                                <div class="col">
                                    <textarea id="notes" name="notes" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Action</label>
                                </div>
                                <div class="col">
                                    <label>Issue</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Team</label>
                                </div>
                                <div class="col">
                                    <select id="team" name="team" class="form-control border border-success select2bs4">
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
                                    <label>GL Voucher</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Location</label>
                                </div>
                                <div class="col">
                                    <select id="location" name="location" class="form-control border border-success select2bs4">
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
                                    <label>Customer Number</label>
                                </div>
                                <div class="col">
                                    <input id="customer_number" name="customer_number" class="form-control border border-success" tabindex="4" />
                                </div>
                            </div>
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
                                    <label>Work Order Number</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>    
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Supplier Number</label>
                                </div>
                                <div class="col">
                                    <input id="supplier_number" name="supplier_number" class="form-control border border-success" tabindex="4" />
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
                                    <label>Transfer Request Number</label>
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