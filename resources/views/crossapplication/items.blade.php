@extends('pages.home')
@section('content')
    <section class="content-header"style="padding-top: 56px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.items') }}</h1>
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
                <h3 class="card-title">{{ __('translate.item') }}</h3>


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
                                    <label>{{ __('translate.itemcode') }}</label>
                                </div>
                                <div class="col">
                                    <input id="item_code" name="item_code" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.description') }}</label>
                                </div>
                                <div class="col">
                                    <input id="description" name="description" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.links') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="links" name="links" rows="3" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.stocktype') }}</label>
                                </div>
                                <div class="col">
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>{{ __('translate.indent') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio">{{ __('translate.manufactured') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>{{ __('translate.nonstock') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>{{ __('translate.onlineservice') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input id="stock_type" name="stock_type" type="radio" name="optradio"
                                            checked>{{ __('translate.stocknsell') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.longdescription') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="long_description" name="long_description" rows="3" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.notes') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="notes" name="notes" rows="3" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.barcode') }}</label>
                                </div>
                                <div class="col">
                                    <input id="barcode" name="barcode" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.alias') }}</label>
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
                                    <label style="color: red">{{ __('translate.warehouse') }}</label>
                                </div>
                                <div class="col">
                                    <select id="warehouse" name="warehouse" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.aimsstore') }}</option>
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
                                    <label>{{ __('translate.issueunit') }}</label>
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
                                    <label>{{ __('translate.convfactorissue') }}</label>
                                </div>
                                <div class="col">
                                    <input id="conv_factor_issue" name="conv_factor_issue" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label style="color: red">{{ __('translate.itemgroup') }}</label>
                                </div>
                                <div class="col">
                                    <select id="item_group" name="item_group" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.pricecategory') }}</label>
                                </div>
                                <div class="col">
                                    <select id="price_category" name="price_category"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.grade') }}</label>
                                </div>
                                <div class="col">
                                    <select id="grade" name="grade" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.division') }}</label>
                                </div>
                                <div class="col">
                                    <select id="division" name="division" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.netweightperunit') }}t</label>
                                </div>
                                <div class="col">
                                    <input id="net_weight_per_unit" name="net_weight_per_unit" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.minimumorderqty') }}</label>
                                </div>
                                <div class="col">
                                    <input id="minimum_order_qty" name="minimum_order_qty" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.yield%') }}</label>
                                </div>
                                <div class="col">
                                    <input id="yield_percent" name="yield_percent" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.leadtimefixed') }}</label>
                                </div>
                                <div class="col">
                                    <input id="lead_time_fixed" name="lead_time_fixed" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.supercededby') }}</label>
                                </div>
                                <div class="col">
                                    <input id="superceded_by" name="superceded_by" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.partno') }}</label>
                                </div>
                                <div class="col">
                                    <input id="part_no" name="part_no" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.length') }}</label>
                                </div>
                                <div class="col">
                                    <input id="length" name="length" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.brand') }}</label>
                                </div>
                                <div class="col">
                                    <select id="brand" name="brand" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.minimumprice') }}</label>
                                </div>
                                <div class="col">
                                    <input id="mininum_price" name="minimum_price" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.effectivitydate') }}</label>
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
                                    <label>{{ __('translate.binlocations') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="bin_locations" name="bin_locations" rows="4" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.stockingunit') }}</label>
                                </div>
                                <div class="col">
                                    <select id="stocking_unit" name="stocking_unit"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.packingunit') }}</label>
                                </div>
                                <div class="col">
                                    <select id="packing_unit" name="packing_unit" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.convfactorpacking') }}</label>
                                </div>
                                <div class="col">
                                    <input id="conv_factor_packing" name="conv_factor_packing" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.itemclass') }}</label>
                                </div>
                                <div class="col">
                                    <select id="item_class" name="item_class" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label style="color: red">{{ __('translate.taxcategory') }}</label>
                                </div>
                                <div class="col">
                                    <select id="tax_category" name="tax_category" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.importduty') }}</label>
                                </div>
                                <div class="col">
                                    <select id="import_duty" name="import_duty" class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.suppliernumber') }}</label>
                                </div>
                                <div class="col">
                                    <input id="supplier_number" name="supplier_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.unitofweight') }}</label>
                                </div>
                                <div class="col">
                                    <select id="unit_of_weight" name="unit_of_weight"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.minimumordervalue') }}</label>
                                </div>
                                <div class="col">
                                    <input id="minimum_order_value" name="minimum_order_value" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.demandtimefence') }}</label>
                                </div>
                                <div class="col">
                                    <input id="demand_time_fence" name="demand_time_fence" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.leadtimevariable') }}</label>
                                </div>
                                <div class="col">
                                    <input id="lead_time_variable" name="lead_time_variable" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.supercedes') }}</label>
                                </div>
                                <div class="col">
                                    <input id="supercedes" name="supercedes" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.hscode') }}</label>
                                </div>
                                <div class="col">
                                    <input id="hs_code" name="hs_code" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.width') }}</label>
                                </div>
                                <div class="col">
                                    <input id="width" name="width" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.standardcost') }}</label>
                                </div>
                                <div class="col">
                                    <input id="standard_cost" name="standard_cost" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.multiplierselling') }}</label>
                                </div>
                                <div class="col">
                                    <input id="multiplier_selling" name="multiplier_selling" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.expirationdate') }}</label>
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
                                    <label>{{ __('translate.team') }}</label>
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
                                    <label>{{ __('translate.alternativeunit') }}t</label>
                                </div>
                                <div class="col">
                                    <select id="alternate_unit" name="alternate_unit"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.statisticalunit') }}</label>
                                </div>
                                <div class="col">
                                    <select id="statistical_unit" name="statistical_unit"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.convfactorstatistical') }}</label>
                                </div>
                                <div class="col">
                                    <input id="conv_factor_statistical" name="conv_factor_statistical"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.itemcategory') }}</label>
                                </div>
                                <div class="col">
                                    <select id="item_category" name="item_category"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.supportcategory') }}</label>
                                </div>
                                <div class="col">
                                    <select id="support_category" name="support_category"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.countryoforigin') }}</label>
                                </div>
                                <div class="col">
                                    <select id="country_of_origin" name="country_of_origin"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.weightperunit') }}</label>
                                </div>
                                <div class="col">
                                    <input id="weight_per_unit" name="weight_per_unit" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.shelflife') }}</label>
                                </div>
                                <div class="col">
                                    <input id="shelf_life" name="shelf_life" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.ordermultiple') }}</label>
                                </div>
                                <div class="col">
                                    <input id="order_multiple" name="order_multiple" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.planningtimefence') }}</label>
                                </div>
                                <div class="col">
                                    <input id="planning_time_fence" name="planning_time_fence" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.leadtimetransport') }}</label>
                                </div>
                                <div class="col">
                                    <input id="lead_time_transport" name="lead_time_transport" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.supercessioncode') }}</label>
                                </div>
                                <div class="col">
                                    <select id="supercession_code" name="supercession_code"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.unitoflength') }}</label>
                                </div>
                                <div class="col">
                                    <select id="unit_of_length" name="unit_of_length"
                                        class="form-control select2bs4 w-100">
                                        <option selected="selected">{{ __('translate.select') }}</option>
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
                                    <label>{{ __('translate.height') }}</label>
                                </div>
                                <div class="col">
                                    <input id="height" name="height" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.standardprice') }}</label>
                                </div>
                                <div class="col">
                                    <input id="standard_price" name="standard_price" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.mutiplierpurchasing') }}</label>
                                </div>
                                <div class="col">
                                    <input id="multiplier_purchasing" name="multiplier_purchasing"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.strip') }}</label>
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
                <h3 class="card-title">{{ __('translate.inventory') }}</h3>


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
                                        <th>{{ __('translate.itemextension') }}</th>
                                        <th>{{ __('translate.warehouse') }}</th>
                                        <th>{{ __('translate.qtyavailable') }}</th>
                                        <th>{{ __('translate.qtyinhand') }}</th>
                                        <th>{{ __('translate.onbackorder') }}</th>
                                        <th>{{ __('translate.allocatedtocustomer') }}</th>
                                        <th>{{ __('translate.ondelivery') }}</th>
                                        <th>{{ __('translate.onpurchaseorder') }}</th>
                                        <th>{{ __('translate.goodsin') }}</th>
                                        <th>{{ __('translate.onporeturn') }}</th>


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
