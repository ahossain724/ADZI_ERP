@extends('pages.home')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ __('translate.suppliermaster') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Cross Application</a></li>
                    <li class="breadcrumb-item active">Supplier</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <!--Supplier-->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.supplier') }}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <!-- Supplier -->
        <div class="card-body">
            <form action="{{ route('storesupplier') }}" method="POST" id="supplier_form">
                @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>{{ __('translate.suppliernumber') }}</label>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <select class="form-control select2bs4 w-10" style="height: 10px">
                                        <option selected="selected">SUP-</option>
                                        <option>MEMB</option>
                                        <option>WALK</option>
                                        
                                    </select> 
                                  </span>
                                </div>
                                <input id="supplier_number" name="supplier_number" type="text" class="form-control">
                              </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.address1') }}</label>
                        </div>
                        <div class="col">
                            <input id="address" name="address" class="form-control" tabindex="4" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.stateprovince') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.salutation') }}</label>
                        </div>
                        <div class="col">
                            <select id="salutation" name="salutation" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.lastname') }}</label>
                        </div>
                        <div class="col">
                            <input id="last_name" name="last_namr" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.phone') }}</label>
                        </div>
                        <div class="col">
                            <input id="phone" name="phone" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.url') }}</label>
                        </div>
                        <div class="col">
                            <input id="url" name="url" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label style="color: red">{{ __('translate.controlaccountap') }}</label>
                        </div>
                        <div class="col">
                            <select id="control_account_ap" name="control_account_ap" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.suppliertype') }}</label>
                        </div>
                        <div class="col">
                            <select id="supplier_type" name="supplier_type" class="form-control select2bs4 w-100">
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
                            <label style="color: red">{{ __('translate.taxsscope') }}</label>
                        </div>
                        <div class="col">
                            <select id="tax_scope" name="tax_scope" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.creditavailable') }}</label>
                        </div>
                        <div class="col">
                            <label>0.00</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.agent') }}</label>
                        </div>
                        <div class="col">
                            <input id="agent" name="agent" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.location') }}</label>
                        </div>
                        <div class="col">
                            <select id="location" name="location" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.permitapproval') }}</label>
                        </div>
                        <div class="col">
                            <label class="radio-inline">
                                <input id="permit_approval" name="permit_approval" type="radio" name="optradio" checked>{{ __('translate.automatic') }}
                            </label>
                            <label class="radio-inline">
                                <input id="permit_approval" name="permit_approval" type="radio" name="optradio">{{ __('translate.manuel') }}
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.timeslot') }}</label>
                        </div>
                        <div class="col">
                            <select id="time_slot" name="time_slot" class="form-control select2bs4 w-100">
                                <option selected="selected">NONE</option>
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
                            <label>{{ __('translate.paymentinstructions') }}s</label>
                        </div>
                        <div class="col">
                            <textarea id="payment_instructions" name="payment_instructions" rows="2" class="form-control h-100 w-100"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>{{ __('translate.shortname') }}</label>
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
                            <label>{{ __('translate.address2') }}</label>
                        </div>
                        <div class="col">
                            <input id="address2" name="address2" class="form-control" tabindex="5" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.zippostalcode') }}</label>
                        </div>
                        <div class="col">
                            <input id="zip_postal_code" name="zip_postal_code" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.firstname') }}</label>
                        </div>
                        <div class="col">
                            <input id="first_name" name="first_name" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.title') }}</label>
                        </div>
                        <div class="col">
                            <input id="title" name="title" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.mobilephonenumber') }}</label>
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
                            <label>{{ __('translate.controlaccountgit') }}</label>
                        </div>
                        <div class="col">
                            <select id="control_account_git" name="control_account_git" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.pricegroup') }}</label>
                        </div>
                        <div class="col">
                            <select id="price_group" name="price_group" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.supplierstatus') }}</label>
                        </div>
                        <div class="col">
                            <label class="radio-inline">
                                <input id="supplier_status" name="supplier_status" type="radio" name="optradio" checked>{{ __('translate.held') }}
                            </label>
                            <label class="radio-inline">
                                <input id="supplier_status" name="supplier_status" type="radio" name="optradio">{{ __('translate.legal') }}
                            </label>
                            <label class="radio-inline">
                                <input id="supplier_status" name="supplier_status" type="radio" name="optradio" checked>{{ __('translate.open') }}
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.creditterms') }}</label>
                        </div>
                        <div class="col">
                            <input id="credit_terms" name="credit_terms" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.comission%') }}</label>
                        </div>
                        <div class="col">
                            <input id="commission_percent" name="commission_percent" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.bin') }}</label>
                        </div>
                        <div class="col">
                            <input id="bin" name="bin" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.buyer') }}</label>
                        </div>
                        <div class="col">
                            <input id="buyer" name="buyer" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>{{ __('translate.name') }}</label>
                        </div>
                        <div class="col">
                            <input id="name" name="name" class="form-control" tabindex="3" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.city') }}</label>
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
                            <label style="color: red">{{ __('translate.country') }}</label>
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
                            <label>{{ __('translate.middlename') }}</label>
                        </div>
                        <div class="col">
                            <input id="middle_name" name="middle_name" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.email') }}</label>
                        </div>
                        <div class="col">
                            <input id="email" name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.fax') }}</label>
                        </div>
                        <div class="col">
                            <input id="fax" name="fax" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.taxnumber') }}</label>
                        </div>
                        <div class="col">
                            <input id="tax_number" name="tax_number" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label style="color: red">{{ __('translate.suppliergroup') }}</label>
                        </div>
                        <div class="col">
                            <select id="supplier_group" name="supplier_group" class="form-control select2bs4 w-100" tabindex="6">
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
                            <label>{{ __('translate.siccode') }}</label>
                        </div>
                        <div class="col">
                            <select id="sic_code" name="sic_code" class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.creditlimit') }}</label>
                        </div>
                        <div class="col">
                            <input id="credit_limit" name="credit_limit" class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.discount%') }}</label>
                        </div>
                        <div class="col">
                            <input id="discount_percent" name="discount_percent" class="form-control"/>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label style="color: red">{{ __('translate.currency') }}</label>
                        </div>
                        <div class="col">
                            <select id="currency" name="currency" class="form-control select2bs4 w-100" tabindex="6">
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
                        <div class="col-sm-5">
                            <label>{{ __('translate.expirationdate') }}</label>
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
                            <label>{{ __('translate.deliveryzone') }}</label>
                        </div>
                        <div class="col">
                            <select id="delivery_zone" name="delivery_zone" class="form-control select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Zone A</option>
                                <option>Zone B</option>
                                <option>Zone C</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    {{ __('translate.supplierlist') }}
                    <div>
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                              <th>{{ __('translate.suppliernumber') }}</th>
                              <th>{{ __('translate.name') }}</th>
                              
                              
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
    <!--Prices-->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.prices') }}</h3>
            

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
                            <label style="color: red">{{ __('translate.itemcode') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-sm-5">
                        <label style="color: red">{{ __('translate.purchaseunit') }}</label>
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
                            <label>{{ __('translate.project') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                        <label style="color: red">{{ __('translate.currency') }}</label>
                    </div>
                    <div class="col">
                        <select class="form-control select2bs4 w-100">
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
                </div>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.unitprice') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.effectivitydate') }}</label>
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
                            <label>{{ __('translate.expirationdate') }}</label>
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
                            <label>{{ __('translate.convfactorpurchase') }}</label>
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
                              <th>{{ __('translate.itemcode') }}</th>
                              <th>{{ __('translate.purchaseunit') }}</th>
                              <th>{{ __('translate.project') }}</th>
                              <th>{{ __('translate.currency') }}</th>
                              <th>{{ __('translate.unitprice') }}</th>
                              <th>{{ __('translate.effectivitydate') }}</th>
                              <th>{{ __('translate.expirationdate') }}</th>
                              <th>{{ __('translate.convfactorpurchase') }}</th>
                              
                              
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
            <h3 class="card-title">{{ __('translate.discounts') }}</h3>
            

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
                            <label style="color: red">{{ __('translate.itemcode') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-sm-5">
                        <label style="color: red">{{ __('translate.purchaseunit') }}</label>
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
                            <label>{{ __('translate.project') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.quantity') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.discount%') }}</label>
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
                              <th>{{ __('translate.itemcode') }}</th>
                              <th>{{ __('translate.purchaseunit') }}</th>
                              <th>{{ __('translate.project') }}</th>
                              <th>{{ __('translate.quantity') }}</th>
                              <th>{{ __('translate.discount%') }}</th>
                              
                              
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>10</td>
                              <td>Ms Lily Sun</td>
                              <td>11.Local Supply</td>
                              <td>059818</td>
                              <td>Singapore</td>
                              
                              
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
    <!--Contacts-->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.contacts') }}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <!-- Contacts -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>{{ __('translate.suppliernumber') }}</label>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <select class="form-control select2bs4 w-10" style="height: 10px">
                                        <option selected="selected">SUP-</option>
                                        <option>MEMB</option>
                                        <option>WALK</option>
                                        
                                    </select> 
                                  </span>
                                </div>
                                <input type="text" class="form-control">
                              </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.address1') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" tabindex="4" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.stateprovince') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.salutation') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.lastname') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.phone') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.url') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label style="color: red">{{ __('translate.controlaccountar') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.suppliertype') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label style="color: red">{{ __('translate.taxsscope') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.creditavailable') }}</label>
                        </div>
                        <div class="col">
                            <label>0.00</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.agent') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.location') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.permitapproval') }}</label>
                        </div>
                        <div class="col">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" checked>{{ __('translate.automatic') }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">{{ __('translate.manuel') }}
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.timeslot') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">NONE</option>
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
                            <label>{{ __('translate.paymentinstructions') }}</label>
                        </div>
                        <div class="col">
                            <textarea rows="2" class="form-control h-100 w-100"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>{{ __('translate.shortname') }}</label>
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
                            <label>{{ __('translate.address2') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" tabindex="5" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.zippostalcode') }} </label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.firstname') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.title') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.mobilephonenumber') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
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
                            <label>{{ __('translate.controlaccountgit') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.pricegroup') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.supplierstatus') }}</label>
                        </div>
                        <div class="col">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" checked>{{ __('translate.held') }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">{{ __('translate.legal') }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio" checked>{{ __('translate.open') }}
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.creditterms') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.comission%') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.bin') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.buyer') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <label>{{ __('translate.name') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" tabindex="3" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.city') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100" tabindex="6">
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
                            <label style="color: red">{{ __('translate.country') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.middlename') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.email') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.fax') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.taxnumber') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label style="color: red">{{ __('translate.suppliergroup') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100" tabindex="6">
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
                            <label>{{ __('translate.siccode') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
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
                            <label>{{ __('translate.creditlimit') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.discount%') }}</label>
                        </div>
                        <div class="col">
                            <input class="form-control" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label style="color: red">{{ __('translate.currency') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100" tabindex="6">
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
                        <div class="col-sm-5">
                            <label>{{ __('translate.expirationdate') }}</label>
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
                    <div class="row mt-2">
                        <div class="col-sm-5">
                            <label>{{ __('translate.deliveryzone') }}</label>
                        </div>
                        <div class="col">
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Zone A</option>
                                <option>Zone B</option>
                                <option>Zone C</option>
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
</section>
@endsection