@extends('pages.home')

@section('content')
    <section class="content-header" style="padding-top: 60px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.quotations') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Order Processing</a></li>
                        <li class="breadcrumb-item active"><a href="#">Quotations & Orders</a></li>
                        <li class="breadcrumb-item active">Quotations</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Requisition-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.quotations') }}</h3>


            <div class="card-tools">
                
                <button type="button" class="btn btn-secondary" data-customer-list="{{ json_encode($customerList) }}" data-toggle="modal" data-target="#modal-rbo">
                  Create RBO
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-reference">
               Open Reference Modal
               </button>
                <button type="button" class="btn btn-secondary" data-rbo-list="{{ json_encode($rboList) }}" data-toggle="modal" data-target="#modal-brand">
                  Create Brand
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                

            </div>

        </div>
               
        
        <!-- /.Rbo modal -->
        <div class="modal fade" id="modal-rbo">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create RBO</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="card-body">
            <form method="POST" id="rbo_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>RBO Name</label>
                            </div>
                            <div class="col">
                                    <input id="rbo_name" name="rbo_name" class="form-control border border-success" type="text">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Short Name</label>
                            </div>
                            <div class="col">
                                <input id="short_name" name="short_name" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Customer Name</label>
                            </div>
                              <div class="col">
                                    <select  id="customer_id" name="customer_id"  class="form-control" style="height:120%;">
                            
                                    </select>
                             </div>
                        </div>
                       <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>Address</label>
                                </div>
                                <div class="col">
                                    <textarea id="address" name="address" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                         </div>
                         <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                    <div class="col">
                            RBO List
                            <div>
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>RBO Name</th>
                                            <th>Short Name</th>


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
                
              </form>
                </div>
                <!-- /.row -->
                </br>
            </div>
          </div>
        </div>
        </div>
        <!-- /.Reference modal -->
        <div class="modal fade" id="modal-reference">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create Reference</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="card-body">
            <form action="{{ route('storereference') }}" method="POST" id="reference_form">
                @csrf
                <div class="row">
                    <div class="col">
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
                                <label>Rbo Name</label>
                            </div>
                              <div class="col">
                                    <select  id="rbos_id" name="rbos_id"  class="form-control" style="height:120%;">
                                    </select>
                             </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                        <table id="reference" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Reference ID</th>
                                    <th>Reference Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>Ms Lily Sun</td>
                                </tr>

                        </table>
                    </div>
                    </div>
                </div>
              </form>
                </div>
                <!-- /.row -->
                </br>
            </div>
          </div>
        </div>
        </div>
        <div class="modal fade" id="modal-brand">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create Brand</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="card-body">
            <form action="{{ route('storebrand') }}" method="POST" id="brand_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Brand</label>
                            </div>
                            <div class="col">
                                <input id="brand" name="brand" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <!--<div class="row mt-2">
                            <div class="col">
                                <label>Rbo Name</label>
                            </div>
                              <div class="col">
                                    <select  id="brbo_id" name="brbo_id"  class="form-control" style="height:120%;">
                                    </select>
                             </div>
                        </div>-->
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                        <table id="reference" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Reference ID</th>
                                    <th>Reference Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>Ms Lily Sun</td>
                                </tr>

                        </table>
                    </div>
                    </div>
                </div>
              </form>
                </div>
                <!-- /.row -->
                </br>
            </div>
          </div>
        </div>
        </div>

          <!-- /.modal-content -->
        <!-- /.modal-dialog -->
      <!-- /.modal -->

        <!-- Card Header -->
        <div class="card-body">
            <form action="{{ route('storequotation') }}" method="POST" id="quotations_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.quotationnumber') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control border border-success select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">QT-</option>
                                                <option>PO-</option>
                                                <option>WALK</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="quotation_number" name="quotation_number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.deadline') }}</label>
                            </div>
                            <div class="col">
                                <input id="deadline" name="deadline" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.quotationstatus') }}</label>
                            </div>
                            <div class="col">
                                <label>{{ __('translate.expired') }}</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.quotationdeadline') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="quotation_deadline" name="quotation_deadline" type="text" class="form-control border border-success datetimepicker-input"
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
                                    <label style="color: red">RBO</label>
                                </div>
                                <div class="col">
                                    <select  id="rbo" name="rbo" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.select') }}</option>
                                        @foreach ($rboList as $item)
                                            <option value="{{$item->id}}">{{$item->rbo_name}}</option>
                                        @endforeach
                                    </select>
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
                                    <select  id="brand" name="brand" class="form-control border border-success select2bs4">
                                        <option selected="selected">{{ __('translate.select') }}</option>
                                        @foreach ($brandList as $item)
                                            <option value="{{$item->id}}">{{$item->brand}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">Product Category</label>
                            </div>
                            <div class="col">
                                <select id="product_category" name="product_category" class="form-control border border-success select2bs4">
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
                            <div class="col">
                                <label style="color: red">{{ __('translate.exchangerate') }}</label>
                            </div>
                            <div class="col">
                                <input id="exchange_rate" name="exchange_rate" class="form-control border border-success" tabindex="4" />
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
                            <div class="col-sm-5">
                                <label>{{ __('translate.customerenquirydate') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="customer_enquiry_date" name="customer_enquiry_date" type="text" class="form-control border border-success datetimepicker-input"
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
                                    <label>{{ __('translate.partialdelivery') }}</label>
                                </div>
                                <div class="col">
                                    <input id="partial_delivery" name="partial_delivery" class="form-check-input" type="checkbox" value=""
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
                                    <label>{{ __('translate.location') }}</label>
                                </div>
                                <div class="col">
                                    <select id="location" name="location" class="form-control border border-success select2bs4">
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
                                    <label>{{ __('translate.order') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.delivery') }}</label>
                                </div>
                                <div class="col">
                                    <input id="delivery" name="delivery" class="form-control border border-success" tabindex="4" />
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
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.teammember') }}</label>
                                </div>
                                <div class="col">
                                    <select id="team_member" name="team_member" class="form-control border border-success select2bs4">
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
                                    <label>{{ __('translate.startdate') }}</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input id="start_date" name="start_date" type="text" class="form-control border border-success datetimepicker-input"
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
                                    <label>{{ __('translate.printtax?') }}</label>
                                </div>
                                <div class="col">
                                    <input id="print_tax" name="print_tax" class="form-check-input" type="checkbox" value=""
                                        id="flexCheckChecked"checked />
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
                                    <label>{{ __('translate.department') }}</label>
                                </div>
                                <div class="col">
                                    <select id="department" name="department" class="form-control border border-success select2bs4">
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
                                    <label>{{ __('translate.entrytype') }}</label>
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
                        </div>
                        <div class="col">
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
                                    <label>{{ __('translate.quotationflag') }}</label>
                                </div>
                                <div class="col">
                                    <label>{{ __('translate.open') }}</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.internationalcommercialterms') }}</label>
                                </div>
                                <div class="col">
                                    <select id="international_commercial_terms" name="international_commercial_terms" class="form-control border border-success select2bs4">
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
                                <div class="col">
                                    <label>{{ __('translate.checkedby') }}</label>
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
                            <div class="row mt-2">
                            <div class="col">
                                <label>Production Unit</label>
                            </div>
                            <div class="col">
                                <select class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.select') }}</option>
                                    <option>Adzi</option>
                                    <option>Labeledge</option>
                                    <option>Label Makers</option>
                                </select>
                            </div>
                        </div>
                             <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">{{ __('translate.currency') }}</label>
                            </div>
                            <div class="col">
                                <select id="currency" name="currency" class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.bdt') }}</option>
                                    <option>BDT</option>
                                    <option>USD</option>
                                    <option>GBP(Pound)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.division') }}</label>
                            </div>
                            <div class="col">
                                <select id="division" name="division" class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.accessories') }}</option>
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
                                <label>{{ __('translate.customerenquiry') }}</label>
                            </div>
                            <div class="col">
                                <input id="customer_enquiry" name="customer_enquiry" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.validity') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="validity" name="validity" type="text" class="form-control border border-success datetimepicker-input"
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
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
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
                                    <input id="rate" name="rate" class="form-control border border-success" type="number" step="0.012">
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
    </div>
    </section>
    

@endsection