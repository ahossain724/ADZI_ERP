@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Cross Application</a></li>
                        <li class="breadcrumb-item active">Customers</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <!--Customers-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Customer</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- Customers -->
            <div class="card-body">
                <form action="{{ route('storecustomer') }}" method="POST" id="customer_form">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Customer Number </label>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <select class="form-control select2bs4 w-10" style="height: 10px">
                                                    <option selected="selected">CUS-</option>
                                                    <option>MEMB</option>
                                                    <option>WALK</option>

                                                </select>
                                            </span>
                                        </div>
                                        <input id="customer_number" name="customer_number" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Address 1</label>
                                </div>
                                <div class="col">
                                    <input id="address" name="address" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>State/Province</label>
                                </div>
                                <div class="col">
                                    <input id="state_province" name="state_province" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Salutation</label>
                                </div>
                                <div class="col">
                                    <select id="salutation" name="salutation" class="form-control select2bs4 w-100">
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
                                    <label>Last Name</label>
                                </div>
                                <div class="col">
                                    <input id="last_name" name="last_name" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Phone</label>
                                </div>
                                <div class="col">
                                    <input id="phone" name="phone" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>URL</label>
                                </div>
                                <div class="col">
                                    <input id="url" name="url" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label style="color: red">Control Account-AR</label>
                                </div>
                                <div class="col">
                                    <select id="control_account_ar" name="control_account_ar" class="form-control select2bs4 w-100">
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
                                    <label>Price Group</label>
                                </div>
                                <div class="col">
                                    <select id="price_group" name="price_group" class="form-control select2bs4 w-100">
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
                                    <label>Industry Segment</label>
                                </div>
                                <div class="col">
                                    <select id="industry_segment" name="industry_segment" class="form-control select2bs4 w-100">
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
                                    <label>Commission %</label>
                                </div>
                                <div class="col">
                                    <input id="comission_percent" name="comission_percent" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Credit Limit</label>
                                </div>
                                <div class="col">
                                    <input id="credit_limit" name="credit_limit" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Credit Terms</label>
                                </div>
                                <div class="col">
                                    <input id="credit_terms" name="credit_terms" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Expiration Date</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="expiration_date" name="expiration_date" type="text" class="form-control datetimepicker-input"
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
                                    <label>Date of Financial Statements</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="date_of_financial_statement" name="date_of_financial_statement" type="text" class="form-control datetimepicker-input"
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
                                    <label>Average Payment Days</label>
                                </div>
                                <div class="col">
                                    <label> 0</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Bin</label>
                                </div>
                                <div class="col">
                                    <input id="bin" name="bin" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Points OB</label>
                                </div>
                                <div class="col">
                                    <input id="points_ob" name="points_ob" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Short Name</label>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input id="short_name" name="short_name" type="text" class="form-control" tabindex="2">
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
                                    <input id="address2" name="address2" class="form-control" tabindex="5" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Zip/Postal Code</label>
                                </div>
                                <div class="col">
                                    <input id="zip_postal_code" name="zip_postal_code" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>First Name</label>
                                </div>
                                <div class="col">
                                    <input id="first_name" name="first_name" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Title</label>
                                </div>
                                <div class="col">
                                    <input id="title" name="title" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Mobile Phone Number</label>
                                </div>
                                <div class="col">
                                    <input id="mobile_phone_number" name="mobile_phone_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>ID</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label style="color: red">Customer Group</label>
                                </div>
                                <div class="col">
                                    <select id="customer_group" name="customer_group" class="form-control select2bs4 w-100">
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
                                    <label>SIC Code</label>
                                </div>
                                <div class="col">
                                    <select id="sic_code" name="sic_code" class="form-control select2bs4 w-100">
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
                                    <label>Discount %</label>
                                </div>
                                <div class="col">
                                    <input id="discount_percent" name="discount_percent" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Billing Address</label>
                                </div>
                                <div class="col">
                                    <input id="billing_address" name="billing_address" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Credit Available</label>
                                </div>
                                <div class="col">
                                    <label> 0.00</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Date of Credit Application</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="date_of_credit_application" name="date_of_credit_application" type="text" class="form-control datetimepicker-input"
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
                                    <label>Date Incorporated</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="date_incorporated" name="date_incorporated" type="text" class="form-control datetimepicker-input"
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
                                    <label>Payment Instructions</label>
                                </div>
                                <div class="col">
                                    <textarea id="payment_instructions" name="payment_instructions" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Remarks</label>
                                </div>
                                <div class="col">
                                    <textarea id="remarks" name="remarks" rows="4" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Backorder Type</label>
                                </div>
                                <div class="col">
                                    <select id="backorder_type" name="backorder_type" class="form-control select2bs4 w-100">
                                        <option selected="selected">None</option>
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
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Name</label>
                                </div>
                                <div class="col">
                                    <input id="name" name="name" class="form-control" tabindex="3" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>City</label>
                                </div>
                                <div class="col">
                                    <select id="city" name="city" class="form-control select2bs4 w-100" tabindex="6">
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
                                    <select id="country" name="country" class="form-control select2bs4 w-100">
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
                                    <input id="middle_name" name="middle_name" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Email</label>
                                </div>
                                <div class="col">
                                    <input id="email" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Fax</label>
                                </div>
                                <div class="col">
                                    <input id="fax" name="fax" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Tax Number</label>
                                </div>
                                <div class="col">
                                    <input id="tax_number" name="tax_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Customer Type</label>
                                </div>
                                <div class="col">
                                    <select id="customer_type" name="customer_type" class="form-control select2bs4 w-100" tabindex="6">
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
                                    <label style="color: red">Tax Scope</label>
                                </div>
                                <div class="col">
                                    <select id="tax_scope" name="tax_scope" class="form-control select2bs4 w-100">
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
                                    <label>Agent</label>
                                </div>
                                <div class="col">
                                    <input id="agent" name="agent" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Customer Status</label>
                                </div>
                                <div class="col">
                                    <label class="radio-inline">
                                        <input id="customer_status" name="customer_status" type="radio" name="optradio" checked>Held
                                    </label>
                                    <label class="radio-inline">
                                        <input id="customer_status" name="customer_status" type="radio" name="optradio">Legal
                                    </label>
                                    <label class="radio-inline">
                                        <input id="customer_status" name="customer_status" type="radio" name="optradio" checked>Open
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Credit Rating</label>
                                </div>
                                <div class="col">
                                    <select id="credit_rating" name="credit_rating" class="form-control select2bs4 w-100" tabindex="6">
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
                                <div class="col-sm-5">
                                    <label>Date of Credit Evaluation</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="date_of_credit_evaluation" name="date_of_credit_evaluation" type="text" class="form-control datetimepicker-input"
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
                                    <label>Payment Method</label>
                                </div>
                                <div class="col">
                                    <select id="payment_method" name="payment_method" class="form-control select2bs4 w-100" tabindex="6">
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
                        <div class="col-md-3">
                            Customer List
                            <div>
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer Id</th>
                                            <th>Customer</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet

                                            </td>


                                        </tr>

                                </table>
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
        <!--Delivery Address-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Delivery Address</h3>


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
                <div class="row">
                    <div>
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Delivery Address Row</th>
                                    <th>Name</th>
                                    <th>Tax Scope</th>
                                    <th>Zip/Postal Code</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Currency</th>
                                    <th>Warehouse</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>Ms Lily Sun</td>
                                    <td>11.Local Supply</td>
                                    <td>059818</td>
                                    <td>Singapore</td>
                                    <td>63361234</td>
                                    <td></td>
                                    <td></td>
                                    <td>SGD</td>
                                    <td>Centre Point</td>


                                </tr>

                        </table>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Delivery Address Row</label>
                            </div>
                            <div class="col">
                                <input class="form-control" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Address 2</label>
                            </div>
                            <div class="col">
                                <input class="form-control" tabindex="4" />
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
                                <label>Phone Number</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Currency</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">SGD</option>
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
                                <label>Region</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Project Manager</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Credit Card No</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Bank Routing No</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Shipping Product</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Tax Scope</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">11.Local Suppy</option>
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
                                <label>Time Slot</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">None</option>
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
                                <label>Floor</label>
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
                                <label>City</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected"></option>
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
                                <label>Country</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Singapore</option>
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
                                <label>Fax</label>
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
                                    <option selected="selected">Centre Point</option>
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
                                <label>Territory</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Payment Code</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Expiry Month(MM)</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Bank Account No</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Residence?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
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
                                <label>Property Type</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Remarks</label>
                            </div>
                            <div class="col">
                                <textarea rows="4" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Address 1</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
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
                                <label>URL</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Market</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100" tabindex="6">
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
                                <label>Salesperson</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Account Name</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Expiry Year (YYYY)</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Shipping Code</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100" tabindex="6">
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
                                <label>Saturday Delivery?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Delivery Zone</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100" tabindex="6">
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
                                <label>Life Availbility</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100" tabindex="6">
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
        <!--Milestones-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Milestones</h3>


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


                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Milestone Row</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Project Milestone</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Percentage</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <hr>
                        <div>
                            <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Milestone Row</th>
                                        <th>Name</th>
                                        <th>Tax Scope</th>
                                        <th>Zip/Postal Code</th>
                                        <th>Country</th>
                                        <th>Phone</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Currency</th>
                                        <th>Warehouse</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10</td>
                                        <td>Ms Lily Sun</td>
                                        <td>11.Local Supply</td>
                                        <td>059818</td>
                                        <td>Singapore</td>
                                        <td>63361234</td>
                                        <td></td>
                                        <td></td>
                                        <td>SGD</td>
                                        <td>Centre Point</td>


                                    </tr>

                            </table>
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
        <!--Prices-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Prices</h3>


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


                <div class="row mt-2">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Item Code</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Selling Unit</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">pc(s)</option>
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
                                <label>Project</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label style="color: red">Currency</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Unit Price</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Effectivity Date</label>
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
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Expiration Date</label>
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
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Cov Factor-Selling</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <hr>
                        <div>
                            <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Selling Unit</th>
                                        <th>Project</th>
                                        <th>Currecy</th>
                                        <th>Unit Price</th>
                                        <th>Effectivity Date</th>
                                        <th>Expiration Date</th>
                                        <th>Conv Factor-Selling</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10</td>
                                        <td>Ms Lily Sun</td>
                                        <td>11.Local Supply</td>
                                        <td>059818</td>
                                        <td>Singapore</td>
                                        <td>63361234</td>
                                        <td></td>
                                        <td></td>


                                    </tr>

                            </table>
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
        <!--Discounts-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Discounts</h3>


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


                <div class="row mt-2">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Item Code</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">Selling Unit</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">pc(s)</option>
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
                                <label>Project</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>Quantity</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Discount %</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Discount1 %</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Discount-Fixed</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Margin %</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Commission %</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <hr>
                        <div>
                            <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Selling Unit</th>
                                        <th>Project</th>
                                        <th>Quantity</th>
                                        <th>Discount%</th>
                                        <th>Discount-Fixed</th>
                                        <th>Margin%</th>
                                        <th>Commission%</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10</td>
                                        <td>Ms Lily Sun</td>
                                        <td>11.Local Supply</td>
                                        <td>059818</td>
                                        <td>Singapore</td>
                                        <td>63361234</td>
                                        <td></td>
                                        <td></td>


                                    </tr>

                            </table>
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
        <!--Payment Method-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Payment Methods</h3>


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


                <div class="row mt-2">
                    <div class="row mt-2">
                        <hr>
                        <div>
                            <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Selling Unit</th>
                                        <th>Project</th>
                                        <th>Quantity</th>
                                        <th>Discount%</th>
                                        <th>Discount-Fixed</th>
                                        <th>Margin%</th>
                                        <th>Commission%</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10</td>
                                        <td>Ms Lily Sun</td>
                                        <td>11.Local Supply</td>
                                        <td>059818</td>
                                        <td>Singapore</td>
                                        <td>63361234</td>
                                        <td></td>
                                        <td></td>


                                    </tr>

                            </table>
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
        <!--Shipping Method-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Shipping Methods</h3>


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


                <div class="row mt-2">
                    <div class="row mt-2">
                        <hr>
                        <div>
                            <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Selling Unit</th>
                                        <th>Project</th>
                                        <th>Quantity</th>
                                        <th>Discount%</th>
                                        <th>Discount-Fixed</th>
                                        <th>Margin%</th>
                                        <th>Commission%</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10</td>
                                        <td>Ms Lily Sun</td>
                                        <td>11.Local Supply</td>
                                        <td>059818</td>
                                        <td>Singapore</td>
                                        <td>63361234</td>
                                        <td></td>
                                        <td></td>


                                    </tr>

                            </table>
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


    </section>
@endsection
