@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Items</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Cross Application</a></li>
                        <li class="breadcrumb-item active">Items</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <!--Item-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Item</h3>


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
                <form action="{{ route('storeitems') }}" method="POST" id="items_form">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Item Code</label>
                                </div>
                                <div class="col">
                                    <input id="item_code" name="item_code" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Description</label>
                                </div>
                                <div class="col">
                                    <input id="description" name="description" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Links</label>
                                </div>
                                <div class="col">
                                    <textarea id="links" name="links" rows="3" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Stock Type</label>
                                </div>
                                <div class="col">
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>Indent
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio">Manufactured
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>Non-stock
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>Online Service
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>Stock-N-Sell
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Long Description</label>
                                </div>
                                <div class="col">
                                    <textarea id="long_description" name="long_description" rows="3" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
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
                                    <label>Barcode</label>
                                </div>
                                <div class="col">
                                    <input id="barcode" name="barcode" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Alias</label>
                                </div>
                                <div class="col">
                                    <input id="alias" name="alias" class="form-control" tabindex="4" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label style="color: red">Warehouse</label>
                                </div>
                                <div class="col">
                                    <select id="warehouse" name="warehouse" class="form-control select2bs4 w-100">
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
                                <div class="col-sm-5">
                                    <label>Issue Unit</label>
                                </div>
                                <div class="col">
                                    <select id="issue_unit" name="issue_unit" class="form-control select2bs4 w-100">
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
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Conv Factor-Issue</label>
                                </div>
                                <div class="col">
                                    <input id="conv_factor_issue" name="conv_factor_issue" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label style="color: red">Item Group</label>
                                </div>
                                <div class="col">
                                    <select id="item_group" name="item_group" class="form-control select2bs4 w-100">
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
                                    <label>Price Category</label>
                                </div>
                                <div class="col">
                                    <select id="price_category" name="price_category"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Grade</label>
                                </div>
                                <div class="col">
                                    <select id="grade" name="grade" class="form-control select2bs4 w-100">
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
                                    <label>Division</label>
                                </div>
                                <div class="col">
                                    <select id="division" name="division" class="form-control select2bs4 w-100">
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
                                    <label>Net Weight Per Unit</label>
                                </div>
                                <div class="col">
                                    <input id="net_weight_per_unit" name="net_weight_per_unit" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Minimum Order Qty</label>
                                </div>
                                <div class="col">
                                    <input id="minimum_order_qty" name="minimum_order_qty" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Yield %</label>
                                </div>
                                <div class="col">
                                    <input id="yield_percent" name="yield_percent" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Lead Time-Fixed</label>
                                </div>
                                <div class="col">
                                    <input id="lead_time_fixed" name="lead_time_fixed" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Superceded By</label>
                                </div>
                                <div class="col">
                                    <input id="superceded_by" name="superceded_by" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Part No.</label>
                                </div>
                                <div class="col">
                                    <input id="part_no" name="part_no" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Length</label>
                                </div>
                                <div class="col">
                                    <input id="length" name="length" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Brand</label>
                                </div>
                                <div class="col">
                                    <select id="brand" name="brand" class="form-control select2bs4 w-100">
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
                                    <label>Minimum Price</label>
                                </div>
                                <div class="col">
                                    <input id="mininum_price" name="minimum_price" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Effectivity Date</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="effectivity_date" name="effectivity_date" type="text"
                                            class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Bin Locations</label>
                                </div>
                                <div class="col">
                                    <textarea id="bin_locations" name="bin_locations" rows="4" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Stocking Unit</label>
                                </div>
                                <div class="col">
                                    <select id="stocking_unit" name="stocking_unit"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Packing Unit</label>
                                </div>
                                <div class="col">
                                    <select id="packing_unit" name="packing_unit" class="form-control select2bs4 w-100">
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
                                    <label>Conv Factor-Packing</label>
                                </div>
                                <div class="col">
                                    <input id="conv_factor_packing" name="conv_factor_packing" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Item Class</label>
                                </div>
                                <div class="col">
                                    <select id="item_class" name="item_class" class="form-control select2bs4 w-100">
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
                                    <label style="color: red">Tax Category</label>
                                </div>
                                <div class="col">
                                    <select id="tax_category" name="tax_category" class="form-control select2bs4 w-100">
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
                                    <label>Import Duty</label>
                                </div>
                                <div class="col">
                                    <select id="import_duty" name="import_duty" class="form-control select2bs4 w-100">
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
                                    <label>Supplier Number</label>
                                </div>
                                <div class="col">
                                    <input id="supplier_number" name="supplier_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Unit of Weight</label>
                                </div>
                                <div class="col">
                                    <select id="unit_of_weight" name="unit_of_weight"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Minimum Order Value</label>
                                </div>
                                <div class="col">
                                    <input id="minimum_order_value" name="minimum_order_value" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Demand Time Fence</label>
                                </div>
                                <div class="col">
                                    <input id="demand_time_fence" name="demand_time_fence" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Lead Time-Variable</label>
                                </div>
                                <div class="col">
                                    <input id="lead_time_variable" name="lead_time_variable" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Supercedes</label>
                                </div>
                                <div class="col">
                                    <input id="supercedes" name="supercedes" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>H.S Code</label>
                                </div>
                                <div class="col">
                                    <input id="hs_code" name="hs_code" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Width</label>
                                </div>
                                <div class="col">
                                    <input id="width" name="width" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Standard Cost</label>
                                </div>
                                <div class="col">
                                    <input id="standard_cost" name="standard_cost" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Multiplier-Selling</label>
                                </div>
                                <div class="col">
                                    <input id="multiplier_selling" name="multiplier_selling" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Expiration Date</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="expiration_date" name="expiration_date" type="text"
                                            class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Team</label>
                                </div>
                                <div class="col">
                                    <select id="team" name="team" class="form-control select2bs4 w-100">
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
                        <div class="col-md-4">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Alternative Unit</label>
                                </div>
                                <div class="col">
                                    <select id="alternate_unit" name="alternate_unit"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Statistical Unit</label>
                                </div>
                                <div class="col">
                                    <select id="statistical_unit" name="statistical_unit"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Conv Factor-Statistical</label>
                                </div>
                                <div class="col">
                                    <input id="conv_factor_statistical" name="conv_factor_statistical"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Item Catgory</label>
                                </div>
                                <div class="col">
                                    <select id="item_category" name="item_category"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Support Category</label>
                                </div>
                                <div class="col">
                                    <select id="support_category" name="support_category"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Country of Origin</label>
                                </div>
                                <div class="col">
                                    <select id="country_of_origin" name="country_of_origin"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Weight Per Unit</label>
                                </div>
                                <div class="col">
                                    <input id="weight_per_unit" name="weight_per_unit" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Shelf Life</label>
                                </div>
                                <div class="col">
                                    <input id="shelf_life" name="shelf_life" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Order Multiple</label>
                                </div>
                                <div class="col">
                                    <input id="order_multiple" name="order_multiple" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Planning Time Fence</label>
                                </div>
                                <div class="col">
                                    <input id="planning_time_fence" name="planning_time_fence" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Lead Time-Transport</label>
                                </div>
                                <div class="col">
                                    <input id="lead_time_transport" name="lead_time_transport" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Supercession Code</label>
                                </div>
                                <div class="col">
                                    <select id="supercession_code" name="supercession_code"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Unit of Length</label>
                                </div>
                                <div class="col">
                                    <select id="unit_of_length" name="unit_of_length"
                                        class="form-control select2bs4 w-100">
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
                                    <label>Height</label>
                                </div>
                                <div class="col">
                                    <input id="height" name="height" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Standard Price</label>
                                </div>
                                <div class="col">
                                    <input id="standard_price" name="standard_price" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Multiplier-Purchasing</label>
                                </div>
                                <div class="col">
                                    <input id="multiplier_purchasing" name="multiplier_purchasing"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Strip</label>
                                </div>
                                <div class="col">
                                    <input id="strip" name="strip" class="form-control" />
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
        <!--Inventory-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Inventory</h3>


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
                                        <th>Item Extension</th>
                                        <th>Warehouse</th>
                                        <th>Qty Available</th>
                                        <th>Qty in Hand</th>
                                        <th>On Back Order</th>
                                        <th>Allocated to Customer</th>
                                        <th>On Delivery</th>
                                        <th>On Purchase Order</th>
                                        <th>Goods In</th>
                                        <th>On PO Return</th>
                                        <th>On Transfer-In</th>
                                        <th>On Transfer-Out</th>
                                        <th>Allocated to Assembly-Comp</th>
                                        <th>Kitted for WO - Comp</th>
                                        <th>On Work Order-FG</th>
                                        <th>Work-In-Progress - FG</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Aims Store</td>
                                        <td>0.00</td>
                                        <td>6.00</td>
                                        <td>0.00</td>
                                        <td>1.00</td>
                                        <td>5.00</td>
                                        <td>0.00</td>
                                        <td></td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>6.00</td>
                                        <td>0.00</td>
                                        <td>1.00</td>
                                        <td>5.00</td>
                                        <td>0.00</td>


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
