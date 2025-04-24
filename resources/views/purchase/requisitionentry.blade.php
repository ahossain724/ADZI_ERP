@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Requisition for General Items</h1>
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
     <!--Requisition-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Requisition</h3>


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
            <form action="{{ route('storerequisitionentry') }}" method="POST" id="requisitionentry_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Requisition Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">GREQ</option>
                                                <option>PO-</option>
                                                <option>WALK</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="requisition_number" name="requisition_number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
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
                                <label>Project</label>
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
                            <div class="col">
                                <label style="color: red">Total Amount</label>
                            </div>
                            <div class="col">
                                <label>0.00</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Status</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Required-By Date</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="required_by_date" name="required_by_date" type="text" class="form-control datetimepicker-input"
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
                                <label>Department</label>
                            </div>
                            <div class="col">
                                <select id="department" name="department" class="form-control select2bs4">
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
                                <label>Entry Type</label>
                            </div>
                            <div class="col">
                                <label></label>
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
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Other Specifications</label>
                                </div>
                                <div class="col">
                                    <textarea id="other_specifications" name="other_specifications" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
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
                        </div>
                        <div class="col">
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