@extends('pages.home')
@section('content')
    <section class="content-header"style="padding-top: 60px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.deliveryorders') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Order Processing</a></li>
                        <li class="breadcrumb-item active"><a href="#">Delivery/Invoices/Returns</a></li>
                        <li class="breadcrumb-item active">Delivery Orders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.deliveryorders') }}</h3>


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
            <form action="{{ route('storedeliveryorder') }}" method="POST" id="deliveryorders_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.deliveryordernumber') }}</label>
                            </div>
                            <div class="col">
                                <input id="delivery_order_number" name="delivery_order_number" class="form-control" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.name') }}</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.customerorder') }}</label>
                            </div>
                            <div class="col">
                                <label></label>
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
                                <label>{{ __('translate.glvoucher') }}</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.customernumber') }}</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.invoices') }}</label>
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
                                    <label>{{ __('translate.headermessage') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="header_message" name="header_message" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.footermessage') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="footer_message" name="footer_message" rows="2" class="form-control h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.notes') }}</label>
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
                                    <label>{{ __('translate.vehicletype') }}</label>
                                </div>
                                <div class="col">
                                    <select id="vehicle_type" name="vehicle_type" class="form-control select2bs4">
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
                                    <label>{{ __('translate.vatchallanno') }}</label>
                                </div>
                                <div class="col">
                                    <input id="vat_challan" name="vat_challan" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.totalnetweight') }}</label>
                                </div>
                                <div class="col">
                                    <input id="total_net_weight" name="total_net_weight" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.deliveryflag') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.lastconfirmedby') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.vehicleno') }}</label>
                                </div>
                                <div class="col">
                                    <input id="vehicle" name="vehicle" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.vatchallandate') }}</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="vat_challan_date" name="vat_challan_date" type="text" class="form-control datetimepicker-input"
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
                                    <label>{{ __('translate.totalgrossweight') }}</label>
                                </div>
                                <div class="col">
                                    <input id="total_gross_weight" name="total_gross_weight" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.deliverystatus') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.team') }}</label>
                                </div>
                                <div class="col">
                                    <select id="team" name="team" class="form-control select2bs4">
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
                                    <label>{{ __('translate.teammember') }}</label>
                                </div>
                                <div class="col">
                                    <select id="team_member" name="team_member" class="form-control select2bs4">
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
                                    <label>{{ __('translate.manager') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.driverresponsibleperson') }}</label>
                                </div>
                                <div class="col">
                                    <input id="driver_responsible_person" name="driver_responsible_person" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.time') }}</label>
                                </div>
                                <div class="col">
                                    <input id="time" name="time" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.totalnumberofcartons') }}</label>
                                </div>
                                <div class="col">
                                    <input id="total_cartons" name="total_cartons" class="form-control" tabindex="4" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.invoicingrule') }}</label>
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