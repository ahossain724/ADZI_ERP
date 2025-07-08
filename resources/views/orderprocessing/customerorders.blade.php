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
                                        @foreach ($rboList as $item)
                                            <option value="{{$item->id}}">{{$item->rbo_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                                <div class="col">
                                    <label style="color: red">Customer Name</label>
                                </div>
                                <div class="col">
                                    <select  id="customer_name" name="customer_name" class="form-control select2bs4">
                                        <option selected="selected">{{ __('translate.select') }}</option>
                                        @foreach ($customerList as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
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
                                    <label style="color: red">Product Category</label>
                                </div>
                                <div class="col">
                                    <select id="project" name="project" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.accessories') }}</option>
                                        <option>Elastic</option>
                                        <option>Finishing Accessories</option>
                                        <option>Poly</option>
                                        <option>Tape</option>
                                        <option>Loop</option>
                                        <option>Thermal</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">{{ __('translate.reference') }}</label>
                            </div>
                            <div class="col">
                                <select  id="references" name="references" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.select') }}</option>
                                         @foreach ($referencetblList as $item)
                                            <option value="{{$item->id}}">{{$item->reference}}</option>
                                        @endforeach
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
                        <div class="row">
                    <div>
                        <table id="dimensiongrid" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Quotation Number</th>
                                    <th>Notes</th>
                                    <th>Currency</th>
                                    <th>Brand</th>
                                    <th>Product Category</th>
                                    
                                    {{-- Add more headers if you have more columns to display --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Check if $quotations is not empty before looping --}}
                                @if($quotations->isNotEmpty())
                                    {{-- Loop through each quotation --}}
                                    @foreach($quotations as $quotation)
                                        <tr>
                                            {{-- Make sure these match your database column names EXACTLY --}}
                                            <td>{{ $quotation->quotation_number }}</td>
                                            <td>{{ $quotation->notes }}</td> {{-- Assuming 'rbo' column exists --}}
                                            <td>{{ $quotation->currency }}</td> {{-- Assuming 'customer_name' column exists --}}
                                            <td>{{ $quotation->brand }}</td> {{-- Assuming 'brand' column exists --}}
                                            <td>{{ $quotation->product_category }}</td> {{-- Assuming 'product_category' column exists --}}
                                             {{-- Assuming 'reference' column exists --}}
                                            {{-- Add more <td> elements for other columns you want to display --}}
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">No quotations found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                    <div>
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Customer Number</th>
                                    <th>Notes</th>
                                    <th>Currency</th>
                                    <th>Brand</th>
                                    <th>Product Category</th>
                                    
                                    {{-- Add more headers if you have more columns to display --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Check if $quotations is not empty before looping --}}
                                @if($customerorder->isNotEmpty())
                                    {{-- Loop through each quotation --}}
                                    @foreach($customerorder as $customerorder)
                                        <tr>
                                            {{-- Make sure these match your database column names EXACTLY --}}
                                            <td>{{ $customerorder->order_number }}</td>
                                            <td>{{ $customerorder->notes }}</td> {{-- Assuming 'rbo' column exists --}}
                                            <td>{{ $customerorder->currency }}</td> {{-- Assuming 'customer_name' column exists --}}
                                            <td>{{ $customerorder->brand }}</td> {{-- Assuming 'brand' column exists --}}
                                            <td>{{ $customerorder->project }}</td> {{-- Assuming 'product_category' column exists --}}
                                             {{-- Assuming 'reference' column exists --}}
                                            {{-- Add more <td> elements for other columns you want to display --}}
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">No quotations found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

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
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">PD</h3>


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
            <form action="{{ route('storepd') }}" method="POST" id="pd_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>PD Row</label>
                            </div>
                            <div class="col">
                                    <input id="pd_row" name="pd_row" class="form-control border border-success" type="text">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Approved Rate Per Unit</label>
                            </div>
                            <div class="col">
                                    <input id="unit_rate" name="unit_rate" class="form-control border border-success" type="text">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Rate Calculation for Qty:</label>
                            </div>
                            <div class="col" style="background: aqua;">
                                <div class="row">
                                    <input id="rate_qty" name="rate_qty" class="form-control border border-success" type="text">
                                    <div class="col">

                                    <select id="rate_select" name="rate_select" class="form-control border border-success select2bs4">
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
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">Type</label>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <select id="type" name="type" class="form-control border border-success select2bs4">
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
                        <div class="row mt-2">
                                <div class="col">
                                    <label style="color: red">Item</label>
                                </div>
                                <div class="col">
                                    <input id="item" name="item" class="form-control border border-success" type="text">
                                </div>
                            </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>BOM Key</label>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <select id="bom_key" name="bom_key" class="form-control border border-success select2bs4">
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
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Entry Date</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="entry_date" name="entry_date" type="text" class="form-control border border-success datetimepicker-input"
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
                                    <label>Specifications</label>
                                </div>
                                <div class="col">
                                    <textarea id="specifications" name="specifications" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Additional Requirements</label>
                                </div>
                                <div class="col">
                                    <textarea id="additional_requirements" name="additional_requirements" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">Material Warehouse</label>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <select id="material_warehouse" name="material_warehouse" class="form-control border border-success select2bs4">
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
                        </div>
                        <hr>
                    </div>
                    <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>PD Class</th>
                                    <th>Detailed Description</th>
                                    <th>Alternate Code</th>
                                    <th>Team</th>
                                    <th>Active</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>FINISHED GOODS</td>
                                    <td>FINISHED GOODS</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>

                        </table>
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
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Item Info</h3>


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
            <form action="{{ route('storedetails') }}" method="POST" id="item_form">
                @csrf
                <div class="row">
                    <div class="col">
                         <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Item</label>
                            </div>
                            
                                <select id="display" name="display" class="form-control border border-success select2bs4">
                                    <option selected="selected">[Select]</option>
                                    <option>HEAT TRANSFER LABEL</option>
                                    <option value="Loop">LOOP</option>
                                    <option>OFFSET</option>
                                    <option>PRINTED FABRIC LABEL</option>
                                    <option>RAW MATERIAL</option>
                                    <option>RUBBER PATCH</option>
                                    <option>SCREEN PRINT LABEL</option>
                                    <option>SPARE PARTS</option>
                                    <option>STATIONARY</option>
                                    <option>THERMAL</option>
                                    <option>Radiobutton</option>
                                    <option>Woven</option>
                                </select>
                            
                        </div>
                    </div>

                    </div>
                    <div class="col">
                        <div class="row mt-2">
                        <div class="form-group">
                            <label>Dimension</label>
                            <select id="dimension" name="dimension" class="select2bs4" multiple="multiple" data-placeholder="Select Dimensions"   style="width: 100%;">
                                <option value="Size">SIZE</option>
                                <option value="Frontside Colour">FRONTSIDE COLOUR</option>
                                <option value="Backside Colour">BACKSIDE COLOUR</option>
                                <option>WIDTH</option>
                                <option>HEIGHT</option>
                                <option>TOTAL LENGTH</option>
                                <option>MATERIAL</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Row</label>
                            </div>
                            
                                <div class="input-group">
                                    <input id="row" name="row" class="form-control border border-success" type="text" min="1" value="1">
                                </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Rate</label>
                            </div>
                            
                                <div class="input-group">
                                    <input id="rate" name="rate" class="form-control border border-success" type="text" step="0.01">
                                </div>
                            
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-6">
                        <button id="showButton" type="button" class="btn btn-block btn-secondary">Show</button>
                        </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="row h-10"></div>
                <!-- /.row -->
                </br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" id="saveGrid" class="btn btn-block btn-primary">Save</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Delete</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-block btn-primary">Refresh</button>
                    </div>
                </div>
            </form>
            <div id="grid-container" class="mt-4"></div>
        </div>


        <div class="card-footer">

        </div>
    </div>
    
    </section>
    

@endsection