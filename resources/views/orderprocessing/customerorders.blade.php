@extends('pages.home')
@section('content')
    <section class="content-header" style="padding-top: 60px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.customerorders') }}</h1>
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
            <h3 class="card-title">{{ __('translate.customerorders') }}</h3>


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
                                <label>{{ __('translate.ordernumber') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control border border-success select2bs4 w-10" style="height: 10px">
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
                                <label>{{ __('translate.customerpo') }}</label>
                            </div>
                            <div class="col">
                                <input id="customer_po" name="customer_po" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">{{ __('translate.rbo') }}</label>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <select  id="rbo" name="rbo" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.select') }}</option>
                                        <option>{{ __('translate.aimsstore') }}</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">{{ __('translate.customernumber') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control border border-success select2bs4 w-10" style="height: 10px">
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
                                <label style="color: red">{{ __('translate.reference') }}</label>
                            </div>
                            <div class="col">
                                <select id="reference" name="reference" class="form-control border border-success select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">{{ __('translate.select') }}</option>
                                                <option>PO-</option>
                                                <option>WALK</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">{{ __('translate.brand') }}</label>
                            </div>
                            <div class="col">
                                <select id="brand" name="brand" class="form-control border border-success select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">{{ __('translate.select') }}</option>
                                                <option>PO-</option>
                                                <option>WALK</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                                <div class="col">
                                    <label style="color: red">{{ __('translate.project') }}</label>
                                </div>
                                <div class="col">
                                    <select id="project" name="project" class="form-control border border-success select2bs4">
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
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.date') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="date" name="date" type="text" class="form-control border border-success datetimepicker-input"
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
                                <label>{{ __('translate.customerpodate') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="customer_po_date" name="customer_po_date" type="text" class="form-control border border-success datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.headermessage') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="header_message" name="header_message" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.footermessage') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="footer_message" name="footer_message" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.notes') }}</label>
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
                                <div class="col-sm-5">
                                    <label>{{ __('translate.printtax?') }}</label>
                                </div>
                                <div class="col">
                                    <input id="print_tax" name="print_tax" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked"checked />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.totalamount') }}</label>
                                </div>
                                <div class="col">
                                    <label>0.00</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.qouteby') }}</label>
                                </div>
                                <div class="col">
                                    <label class="radio-inline">
                                        <input id="quote_by" name="quote_by" type="radio" name="optradio" checked>{{ __('translate.sellingunit') }}
                                    </label>
                                    <label class="radio-inline">
                                        <input id="quote_by" name="quote_by" type="radio" name="optradio">{{ __('translate.weight') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.team') }}</label>
                                </div>
                                <div class="col">
                                    <select id="team" name="team" class="form-control border border-success select2bs4">
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
                                <div class="col">
                                    <label>{{ __('translate.lastapprovedby') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.source') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.division') }}</label>
                                </div>
                                <div class="col">
                                    <select id="division" name="division" class="form-control border border-success select2bs4">
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
                                <div class="col">
                                    <label style="color: red'">{{ __('translate.currency') }}</label>
                                </div>
                                <div class="col">
                                    <select id="currency" name="currency" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.bdt') }}</option>
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
                                    <label>{{ __('translate.amtroundedoff') }}</label>
                                </div>
                                <div class="col">
                                    <label>0.0000</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.quotationnumber') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.teammember') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label style="color: red">{{ __('translate.paymentconfirmation') }}</label>
                                </div>
                                <div class="col">
                                    <select id="payment_confirmation" name="payment_confirmation" class="form-control border border-success select2bs4">
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
                                <div class="col">
                                    <label>{{ __('translate.periods') }}</label>
                                </div>
                                <div class="col">
                                    <input id="periods" name="periods" class="form-control border border-success" tabindex="4" />
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.invoicingrule') }}</label>
                                </div>
                                <div class="col">
                                    <select id="invoicing_rule" name="invoicing_rule" class="form-control border border-success select2bs4">
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
                                    <label>{{ __('translate.partialdelivery') }}</label>
                                </div>
                                <div class="col">
                                    <input id="partial_delivery" name="partial_delivery" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked"checked />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.restrictdostoitemsscheduledon') }}</label>
                                </div>
                                <div class="col">
                                    <select id="restrict_dos" name="restrict_dos" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.unknown') }}</option>
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
                                    <label>{{ __('translate.section') }}</label>
                                </div>
                                <div class="col">
                                    <select id="section" name="section" class="form-control border border-success select2bs4">
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
                                <div class="col">
                                    <label style="color: red">{{ __('translate.exchangerate') }}</label>
                                </div>
                                <div class="col">
                                    <input id="exchange_rate" name="exchange_rate" class="form-control border border-success" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.approvedamount') }}</label>
                                </div>
                                <div class="col">
                                    <label>0.00</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.orderflag') }}</label>
                                </div>
                                <div class="col">
                                    <label>{{ __('translate.open') }}</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.manager') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.locationofinstallation') }}</label>
                                </div>
                                <div class="col">
                                    <input id="location_of_installation" name="location_of_installation" class="form-control border border-success" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.issuedate') }}</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="issue_date" name="issue_date" type="text" class="form-control border border-success datetimepicker-input"
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