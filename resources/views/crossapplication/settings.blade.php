@extends('pages.home')
@section('content')
    <section class="content-header"style="padding-top: 56px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.settings') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Cross Application</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Defaults -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.defaults') }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('translate.multiple') }}</label>
                            <select class="duallistbox border border-success w-100" multiple="multiple">
                                <option selected>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>

            </div>
            <div class="card-footer">

            </div>
        </div>
        <!--Codes-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.codes') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('store')}}" method="POST" id="codes_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.codetype') }}</label>
                            <select id="code_type" name="code_type" class="form-control border border-success select2bs4 w-100">
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

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.code') }}</label>
                            <input id="code" name="code" class="form-control border border-success w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.detaileddescription') }}</label>
                            <input id="detailed_description" name="detailed_description" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.alternatecode') }}</label>
                            <input id="alternate_code" name="alternate_code" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input id="active" name="active" class="form-check-input border border-success" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label>{{ __('translate.team') }}</label>
                                <select id="team" name="team" multiple="multiple" class="border border-success w-100">
                                    <option></option>
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>{{ __('translate.propertylist') }}</label>
                                <textarea id="property_list" name="property_list" rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
              </form>
                <!-- /.card-body -->

            </div>
            <div class="card-footer">

            </div>
        </div>
        <!-- Transaction Codes-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.transactioncodes') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storetransactioncode')}}" method="POST" id="transactioncode_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.transactiontype') }}</label>
                            <select id="transaction_type" name="transaction_type" class="form-control border border-success select2bs4 w-100">
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

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.code') }}</label>
                            <input id="code" name="code" class="form-control border border-success w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.description') }}</label>
                            <input id="description" name="description" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.starting') }}</label>
                            <input id="starting" name="starting" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.increment') }}</label>
                            <input id="increment" name="increment" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.prefix') }}</label>
                            <input id="prefix" name="prefix" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.suffix') }}</label>
                            <input id="suffix" name="suffix" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input id="active" name="active" class="form-check-input border border-success" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label>{{ __('translate.team') }}</label>
                                <select id="team" name="team" multiple="multiple" class=" border border-success w-100">
                                    <option></option>
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>{{ __('translate.format') }}</label>
                                <textarea id="format" name="format" rows="3" class="form-control border border-success h-100 w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                </form>

            </div>
            <div class="card-footer">

            </div>
        </div>
        <!--Currencies-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.currencies') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storecurrency')}}" method="POST" id="currency_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.currency') }}</label>
                            <select id="currency" name="currency" class="form-control border border-success select2bs4 w-100">
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

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.shortname') }}</label>
                            <input id="shortname" name="shortname" class="form-control border border-success w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.name') }}</label>
                            <input name="name" id="name" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.cent') }}</label>
                            <input id="cent" name="cent" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.cents') }}</label>
                            <input id="cents" name="cents" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.decimalplaces') }}</label>
                            <input id="decimal_places" name="decimal_places" class="form-control border border-success w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input id="active" name="active" class="form-check-input border border-success" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>{{ __('translate.exchangerate') }}</label>
                                <input id="exchange_rate" name="exchange_rate" class="form-control border border-success w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.exchangeratesell') }}</label>
                                <input id="exchange_ratesell" name="exchange_ratesell" class="form-control border border-success w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.exchangeratebuy') }}</label>
                                <input id="exchange_ratebuy" name="exchange_ratebuy"  class="form-control border border-success w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.wordformula') }}</label>
                                <input id="wordformula" name="wordformula" class="form-control border border-success w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ __('translate.effectivitydate') }}</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="effectivity_date" name="effectivity_date" type="text" class="form-control border border-success datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label>{{ __('translate.active') }}</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input border border-success" type="checkbox" value="" id="flexCheckChecked"
                                        checked />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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
            </div>
            <!-- /.card-body -->
            </form>
            <div class="card-footer">

            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.glinterface') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                 <form action="{{route('storeglinterface')}}" method="POST" id="glinterface_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.glinterfacetype') }}</label>
                            <select id="glinterfacetype" name="glinterfacetype" class="form-control border border-success select2bs4 w-100">
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

                    <!-- /.col -->
                    <div class="col">
                        <div>
                            <label>{{ __('translate.itemgroup') }}</label>
                            <select id="itemgroup" name="itemgroup" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label style="font-size: 0.8em">{{ __('translate.customersupplieragentgroup') }}</label>
                            <select id="customersupplieragent" name="customersupplieragent" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.warehouse') }}</label>
                            <select id="warehouse" name="warehouse" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.account') }}</label>
                            <div class="input-group">
                                <input id="account" name="account" type="text" class="form-control border border-success">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
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
                </div>
                <!-- /.card-body -->
                 </form>
                <div class="card-footer">

                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.messages') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                 <form action="{{route('storemessage')}}" method="POST" id="message_form">
                @csrf
                    
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>{{ __('translate.code') }}</label>
                                <div class="input-group">
                                    <input id="code" name="code" type="text" class="form-control border border-success">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.col -->
                        <div class="col">
                            <div>
                                <label>{{ __('translate.longdescription') }}</label>
                                <textarea id="format" name="format" rows="3" class="form-control border border-success h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.messagetype') }}</label>
                                <select id="messagetype" name="messagetype" class="form-control border border-success select2bs4 w-100">
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
                    </div>
                
                <!-- /.card-body -->
                 </form>
                <div class="card-footer">

                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.depots') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storedepot')}}" method="POST" id="depot_form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.depotrow') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input id="depotrow" name="depotrow" class="form-control border border-success" tabindex="1" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.address1') }}</label>
                            </div>
                            <div class="col">
                                <input id="address1" name="address1" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.stateprovince') }}</label>
                            </div>
                            <div class="col">
                                <input id="stateprovince" name="stateprovince" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.salutation') }}</label>
                            </div>
                            <div class="col">
                                <select id="salutation" name="salutation" class="form-control border border-success select2bs4 w-100">
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
                                <label>{{ __('translate.lastname') }}</label>
                            </div>
                            <div class="col">
                                <input id="lastname" name="lastname" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.phone') }}</label>
                            </div>
                            <div class="col">
                                <input id="phone" name="phone" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.taxscope') }}</label>
                            </div>
                            <div class="col">
                                <select id="taxscope" name="taxscope" class="form-control border border-success select2bs4 w-100">
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
                                <label>{{ __('translate.portofdischarge') }}</label>
                            </div>
                            <div class="col">
                                <input id="portofdischarge" name="portofdischarge" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.remarks') }}</label>
                            </div>
                            <div class="col">
                                <textarea id="remarks" name="remarks" rows="3" class="form-control border border-success h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Id</label>
                            </div>
                            <div class="col-sm-4">
                                <input id="i_d" class="form-control border border-success" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.depotname') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="depotname" name="depotname" type="text" class="form-control border border-success" tabindex="2">
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
                                <input id="address2" name="address2" class="form-control border border-success" tabindex="5" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.zippostalcode') }}</label>
                            </div>
                            <div class="col">
                                <input id="zippostalcode" name="zippostalcode" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.firstname') }}</label>
                            </div>
                            <div class="col">
                                <input id="firstname" name="firstname" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.title') }}</label>
                            </div>
                            <div class="col">
                                <input id="title" name="title" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.fax') }}</label>
                            </div>
                            <div class="col">
                                <input id="fax" name="fax" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.taxnumber') }}</label>
                            </div>
                            <div class="col">
                                <input id="taxnumber" name="taxnumber" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.alternatecode') }}</label>
                            </div>
                            <div class="col">
                                <input id="alternatecode" name="alternatecode" class="form-control border border-success" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.name') }}</label>
                            </div>
                            <div class="col">
                                <input id="name" name="name" class="form-control border border-success" tabindex="3" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.city') }}</label>
                            </div>
                            <div class="col">
                                <select id="city" name="city" class="form-control border border-success select2bs4 w-100" tabindex="6">
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
                                <select id="country" name="country" class="form-control border border-success select2bs4 w-100">
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
                                <input id="middlename" name="middlename" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.email') }}</label>
                            </div>
                            <div class="col">
                                <input id="email" name="email" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.url') }}</label>
                            </div>
                            <div class="col">
                                <input id="url" name="url" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">{{ __('translate.warehouse') }}</label>
                            </div>
                            <div class="col">
                                <select id="warehouse" name="warehouse" class="form-control border border-success select2bs4 w-100">
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
                                <label>{{ __('translate.shortname') }}</label>
                            </div>
                            <div class="col">
                                <input id="shortname" name="shortname" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.depottype') }}</label>
                            </div>
                            <div class="col">
                                <select id="depottype" name="depottype" class="form-control border border-success select2bs4 w-100">
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
                <h3 class="card-title">{{ __('translate.taxtable') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storetaxtable')}}" method="POST" id="taxtable_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.taxcode') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">GST</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.taxscope') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">01. Local-Registered</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.taxcategory') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">Exempted</label>

                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <label>{{ __('translate.taxrate') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0.0000</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label style="font-size: 0.6em;">{{ __('translate.taxrateinterstate') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0.0000</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label style="font-size: 0.6em;">{{ __('translate.taxrateconcensial') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0.0000</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.account') }}</label>
                            <div class="input-group">
                                <input id="account" name="account" type="text" class="form-control border border-success">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.alternatecode') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">EP</label>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.blocked?') }}</label>
                        </div>
                        <div>
                            <label style="font-size: 0.7em;font-weight:normal;">0</label>
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
                </div>
                <!-- /.card-body -->
                </form>
                <div class="card-footer">
                </div>
            </div>
        </div>


        <!--Locations-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.locations') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storelocation')}}" method="POST" id="location_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.location') }}</label>
                            <div class="input-group">
                                <input id="location" name="location" type="text" class="form-control border border-success">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.locationtype') }}</label>
                            <select id="locationtype" name="locationtype" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.region') }}</label>
                            <select id="region" name="region" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.country') }}</label>
                            <select id="country" name="country" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.effectivitydate') }}</label>
                            <div class="input-group date" id="locationeffectivitydate" data-target-input="nearest">
                                <input id="effectivitydate" name="effectivitydate" type="text" class="form-control border border-success datetimepicker-input"
                                    data-target="#locationeffectivitydate" />
                                <div class="input-group-append" data-target="#locationeffectivitydate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.expirationdate') }}</label>
                            <div class="input-group date" id="locationexpirydate" data-target-input="nearest">
                                <input id="expirationdate" name="expirationdate" type="text" class="form-control border border-success datetimepicker-input"
                                    data-target="#locationexpirydate" />
                                <div class="input-group-append" data-target="#locationexpirydate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>{{ __('translate.depotname') }}</label>
                                <select id="depotname" name="depotname" class="form-control border border-success select2bs4 w-100">
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
                        <div class="col">
                            <div>
                                <label>{{ __('translate.defaultpaymentcode') }}</label>
                                <select id="defaultpaymentcode" name="defaultpaymentcode" class="form-control border border-success select2bs4 w-100">
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
                        <div class="col">
                            <div>
                                <label>{{ __('translate.timeslots') }}</label>
                                <select id="timeslots" name="timeslots" multiple="multiple" class="border border-success w-100">
                                    <option selected>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.ipaddress') }}</label>
                                <input id="ipaddress" name="ipaddress" class="form-control border border-success w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ __('translate.titleimageurl') }}</label>
                                <input id="titleimageurl" name="titleimageurl" class="form-control border border-success w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <label>{{ __('translate.backgroundimageurl') }}</label>
                            <input id="backgroundimageurl" name="backgroundimageurl" class="form-control border border-success w-100" />
                        </div>

                    </div>
                </div>

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
            <!-- /.card-body -->
        
            <div class="card-footer">

            </div>
        </div>

        <!--Receipts-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.receipts') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storesettingsreceipt')}}" method="POST" id="settingsreceipt_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.paymentcode') }}</label>
                            <select id="paymentcode" name="paymentcode" class="form-control border border-success select2bs4 w-100">
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
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.account') }}</label>
                            <select id="account" name="account" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.transactioncode') }}</label>
                            <select id="transactioncode" name="transactioncode" class="form-control border border-success select2bs4 w-100">
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
                </div>
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
            <!-- /.card-body -->
            
            <div class="card-footer">

            </div>
        </div>

        <!--Holidays-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.holidays') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storeholiday')}}" method="POST" id="holiday_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.locale') }}</label>
                            <select id="locale" name="locale" class="form-control border border-success select2bs4 w-100">
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
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.date') }}</label>
                            <div class="input-group date" id="holidaysdate" data-target-input="nearest">
                                <input id="date" name="date" type="text" class="form-control border border-success datetimepicker-input"
                                    data-target="#holidaysdate" />
                                <div class="input-group-append" data-target="#holidaysdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.available%') }}</label>
                            <input id="available" name="available" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.notes') }}</label>
                            <div class="input-group">
                                <input id="notes" name="notes" type="text" class="form-control border border-success">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
        <!--Vehicles-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.vehicles') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <div class="card-body">
                <form action="{{route('storevehicle')}}" method="POST" id="vehicle_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.vehicle') }}</label>
                            <input id="vehicle" name="vehicle" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.description') }}</label>
                            <input id="description" name="description" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.vehicletype') }}</label>
                            <select id="vehicletype" name="vehicletype" class="form-control border border-success select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Car</option>
                                <option>Two wheeler/Bike</option>
                                <option>Truck</option>
                                <option>Bus</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.length') }}</label>
                            <input id="length" name="length" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.width') }}</label>
                            <input id="width" name="width" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.height') }}</label>
                            <input id="height" name="height" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.ctsize') }}</label>
                            <select id="ctsize" name="ctsize" class="form-control border border-success select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Placeholder</option>
                                <option>Placeholder2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.notes') }}</label>
                            </div>
                            <div class="col">
                                <input id="notes" name="notes" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.lulabelno') }}</label>
                            <input id="lulabelno" name="lulabelno" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.owner') }}</label>
                            <input id="owner" name="owner" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.mlwkg') }}</label>
                            <input id="mlwkg" name="mlwkg" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.uwkg') }}</label>
                            <input id="uwkg" name="uwkg" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.tonnage') }}</label>
                            <input id="tonnage" name="tonnage" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.budcapacity') }}</label>
                            <input id="budcapacity" name="budcapacity" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.cttype') }}</label>
                            <select id="cttype" name="cttype" class="form-control border border-success select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Placeholder</option>
                                <option>Placeholder2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.dg') }}</label>
                            </div>
                            <div class="col">
                                <input id="dg" name="dg" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div>
                                <label>{{ __('translate.deliveryzone') }}</label>
                                <select id="deliveryzone" name="deliveryzone" class="form-control border border-success select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.select') }}</option>
                                    <option>Delivery Zone A</option>
                                    <option>Delivery Zone B</option>
                                    <option>Delivery Zone C</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label>{{ __('translate.remarks') }}</label>
                            <textarea id="remarks" name="remarks" rows="3" class="form-control border border-success"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
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
                    <div class="row mt-2">
                        <hr style="border: 2px solid black;" />
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label style="font-size: 2em">{{ __('translate.teamassignmentto') }}</label>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>{{ __('translate.effectivitydate') }} ⇑</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input id="effectivitydate" name="effectivitydate" type="text" class="form-control border border-success datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>{{ __('translate.team') }}</label>
                            <select id="team" name="team" class="form-control border border-success select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <hr style="border: 2px solid black;" />
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label style="font-size: 2em">{{ __('translate.admininfo') }}</label>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>{{ __('translate.documenttypedocumentnumber') }}</label>
                            <select id="documenttypedocumentnumber" class="form-control border border-success select2bs4 w-100">
                                <option selected="selected">{{ __('translate.select') }}</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>{{ __('translate.dateissuedexpirationdate') }}</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input id="expirationdate" name="expirationdate" type="text" class="form-control border border-success datetimepicker-input"
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
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col">
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control border border-success datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </form>

            </div>
            <div class="card-footer">

            </div>
        </div>
        <!-- /.card-header -->

        </br>
        <!--User Docs-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.userdocs') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storeuserdoc')}}" method="POST" id="userdoc_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.documentname') }}</label>
                            <input id="documentname" name="documentname" type="text" class="form-control border border-success" />
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <label>{{ __('translate.title') }}</label>
                        <input id="title" name="title" type="text" class="form-control border border-success" />
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.sourcedocuments') }}</label>
                            <select id="sourcedocuments" name="sourcedocuments" class="form-control border border-success select2bs4 w-100">
                                <option selected="selected">{{ __('translate.customerorder') }}</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.ordertype') }}</label>
                            <select id="ordertype" name="ordertype" class="form-control border border-success select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.referencefield') }}</label>
                            <select id="referencefield" name="referencefield" class="form-control select2bs4 w-100">
                                <option selected="selected">Customer Number</option>
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
                        <label>{{ __('translate.infogroups') }}</label>
                        <select id="infogroups" name="infogroups" multiple="multiple" class="border border-success w-100">
                            <option></option>
                            <option selected>Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>

                    <div class="col">
                        <label>{{ __('translate.printorgname') }}</label>
                    </div>
                    <div class="col">
                        <input id="printorgname" name="printorgname" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>

                    <div class="col">
                        <label>{{ __('translate.printorgaddresss') }}</label>
                    </div>
                    <div class="col">
                        <input id="printorgaddress" name="printorgaddress" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printlogo') }}</label>
                    </div>
                    <div class="col">
                        <input id="printlogo" name="printlogo" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printcustomerdetails') }}</label>
                    </div>
                    <div class="col">
                        <input id="printcustomerdetails" name="printcustomerdetails" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printdeliverydetails') }}</label>
                    </div>
                    <div class="col">
                        <input id="printdeliverydetails" name="printdeliverydetails" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printstandardfooter') }}</label>
                    </div>
                    <div class="col">
                        <input id="printstandardfooter" name="printstandardfooter" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.active') }}</label>
                    </div>
                    <div class="col">
                        <input id="active" name="active" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>{{ __('translate.header') }}</label>
                        <textarea id="header" name="header" rows="3" class="form-control border border-success"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>{{ __('translate.footer') }}</label>
                        <textarea id="footer" name="footer" rows="3" class="form-control border border-success"></textarea>
                    </div>
                </div>
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
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
        <!--Site Defaults-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.sitedefaults') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('storesitedefault')}}" method="POST" id="sitedefault_form">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.sitename') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <select id="sitename" name="sitename" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.object') }}</label>
                            </div>
                            <div class="col">
                                <select id="object" name="object" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.siccode') }}</label>
                            </div>
                            <div class="col">
                                <select id="siccode" name="siccode" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.discount%') }}</label>
                            </div>
                            <div class="col">
                                <input id="discount" name="discount" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">{{ __('translate.warehouse') }}</label>
                            </div>
                            <div class="col">
                                <select id="warehouse" name="warehouse" class="form-control select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.generalstore') }}</option>
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
                                <label>{{ __('translate.salesperson') }}</label>
                            </div>
                            <div class="col">
                                <select id="salesperson" name="salesperson" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.shippingproduct') }}</label>
                            </div>
                            <div class="col">
                                <select id="shippingproduct" name="shippingproduct" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.section') }}</label>
                            </div>
                            <div class="col">
                                <select id="section" name="section" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.dropship?') }}</label>
                            </div>
                            <div class="col">
                                <input id="dropship" name="dropship" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.printtax?') }}</label>
                            </div>
                            <div class="col">
                                <input id="printtax" name="printtax" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.email-success') }}</label>
                            </div>
                            <div class="col">
                                <input id="emailsuccess" name="emailsuccess" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.bankcode') }}</label>
                            </div>
                            <div class="col">
                                <input id="bankcode" name="bankcode" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.paypaluserid') }}</label>
                            </div>
                            <div class="col">
                                <input id="paypaluserid" name="paypaluserid" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.itemgroup') }}</label>
                            </div>
                            <div class="col">
                                <select id="itemgroup" name="itemgroup" class="form-control select2bs4 w-100">
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
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.customerprefix') }}</label>
                            </div>
                            <div class="col">
                                <select id="customerprefix" name="customerprefix" class="form-control select2bs4 w-100">
                                    <option selected="selected">RETA</option>
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
                                <label>{{ __('translate.unitofdistance') }}</label>
                            </div>
                            <div class="col">
                                <select id="unitofdistance" name="unitofdistance" class="form-control select2bs4 w-100">
                                    <option selected="selected">KM</option>
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
                                <label>{{ __('translate.controlaccountar') }}</label>
                            </div>
                            <div class="col">
                                <select id="controlaccountar" name="controlaccountar" class="form-control select2bs4 w-100">
                                    <option selected="selected">3100</option>
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
                                <label>{{ __('translate.customerstatus') }}</label>
                            </div>
                            <div class="col">
                                <label>1-Open</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.agent') }}</label>
                            </div>
                            <div class="col">
                                <input id="agent" name="agent" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.market') }}</label>
                            </div>
                            <div class="col">
                                <select id="market" name="market" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.projectmanager') }}</label>
                            </div>
                            <div class="col">
                                <select id="projectmanager" name="projectmanager" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.residence?') }}</label>
                            </div>
                            <div class="col">
                                <input id="residence" name="residence" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.project') }}</label>
                            </div>
                            <div class="col">
                                <select id="project" name="project" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input id="active" name="active" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.timecutoff') }}</label>
                            </div>
                            <div class="col">
                                <input id="timecutoff" name="timecutoff" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.email-failure') }}</label>
                            </div>
                            <div class="col">
                                <input id="emailfailure" name="emailfailure" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.accountnumber') }}</label>
                            </div>
                            <div class="col">
                                <input id="accountnumber" name="accountnumber" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.taxcode') }}</label>
                            </div>
                            <div class="col">
                                <select id="taxcode" name="taxcode" class="form-control select2bs4 w-100">
                                    <option selected="selected">GST</option>
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
                                <label style="color: red;">{{ __('translate.fulfilmentcategory') }}</label>
                            </div>
                            <div class="col">
                                <div class="row">

                                    <div class="col">
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input id="fulfilmentcategory" name="fulfilmentcategory" type="radio" name="optradio" checked>{{ __('translate.auto') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em;margin-left:10px">
                                            <input id="fulfilmentcategory" name="fulfilmentcategory" type="radio" name="optradio">{{ __('translate.manufacture') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.7em">
                                            <input id="fulfilmentcategory" name="fulfilmentcategory" type="radio" name="optradio" checked>{{ __('translate.rework') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input id="fulfilmentcategory" name="fulfilmentcategory" type="radio" name="optradio">{{ __('translate.exstock') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.6em">
                                            <input id="fulfilmentcategory" name="fulfilmentcategory" type="radio" name="optradio" checked>{{ __('translate.purchase') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input id="fulfilmentcategory" name="fulfilmentcategory" type="radio" name="optradio">{{ __('translate.transfer') }}

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.orderprefix') }}</label>
                            </div>
                            <div class="col">
                                <select id="orderprefix" name="orderprefix" class="form-control select2bs4 w-100">
                                    <option selected="selected">RETA</option>
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
                                <label>{{ __('translate.unitofweight') }}</label>
                            </div>
                            <div class="col">
                                <select id="unitofweight" name="unitofweight" class="form-control select2bs4 w-100" tabindex="6">
                                    <option selected="selected">kg(s)</option>
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
                                <label>{{ __('translate.customergroup') }}</label>
                            </div>
                            <div class="col">
                                <select id="customergroup" name="customergroup" class="form-control select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.retail') }}</option>
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
                                <input id="creditlimit" name="creditlimit" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.comission%') }}</label>
                            </div>
                            <div class="col">
                                <input id="comission" name="comission" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.region') }}</label>
                            </div>
                            <div class="col">
                                <select id="region" name="region" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.paymentcode') }}</label>
                            </div>
                            <div class="col">
                                <select id="paymentcode" name="paymentcode" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.saturdaydelivery?') }}</label>
                            </div>
                            <div class="col">
                                <input id="saturdaydelivery" name="saturdaydelivery" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.codebasis') }}</label>
                            </div>
                            <div class="col">
                                <select id="codebasis" name="codebasis" class="form-control select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.ourcode') }}</option>
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
                                <label>{{ __('translate.pricesincludetaxyes?') }}</label>
                            </div>
                            <div class="col">
                                <input id="priceincludetax" name="priceincludetax" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.daystodeliver') }}</label>
                            </div>
                            <div class="col">
                                <input id="daystodeliver" name="daystodeliver" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.bank') }}</label>
                            </div>
                            <div class="col">
                                <select id="bank" name="bank" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.accountname') }}</label>
                            </div>
                            <div class="col">
                                <input id="accountname" name="accountname" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.taxscope') }}</label>
                            </div>
                            <div class="col">
                                <select id="taxscope" name="taxscope" class="form-control select2bs4 w-100">
                                    <option selected="selected">11.Local Supply</option>
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
                                <label>{{ __('translate.showsupplier?') }}</label>
                            </div>
                            <div class="col">
                                <input id="showsupplier" name="showsupplier" class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.qoutationprefix') }}</label>
                            </div>
                            <div class="col">
                                <select id="qoutationprefix" name="qoutationprefix" class="form-control select2bs4 w-100">
                                    <option selected="selected">QT</option>
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
                                <label>{{ __('translate.city') }}</label>
                            </div>
                            <div class="col">
                                <select id="city" name="city" class="form-control select2bs4 w-100" tabindex="6">
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
                                <label>{{ __('translate.pricegroup') }}</label>
                            </div>
                            <div class="col">
                                <select id="pricegroup" name="pricegroup" class="form-control select2bs4 w-100">
                                    <option selected="selected">End-User</option>
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
                                <label>{{ __('translate.creditterms') }}</label>
                            </div>
                            <div class="col">
                                <input id="creditterms" name="creditterms" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">{{ __('translate.currency') }}</label>
                            </div>
                            <div class="col">
                                <select id="currency" name="currency" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.territory') }}</label>
                            </div>
                            <div class="col">
                                <select id="territory" name="territory" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.shippingcode') }}</label>
                            </div>
                            <div class="col">
                                <select id="shippingcode" name="shippingcode" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.backordertype') }}</label>
                            </div>
                            <div class="col">
                                <select id="backordertype" name="backordertype" class="form-control select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.futurestock') }}</option>
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
                                <label>{{ __('translate.invoicingrule') }}</label>
                            </div>
                            <div class="col">
                                <select id="invoicingrule" name="invoicingrule" class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.email') }}</label>
                            </div>
                            <div class="col">
                                <input id="email" name="email" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.branch') }}</label>
                            </div>
                            <div class="col">
                                <input id="branch" name="branch" class="form-control border border-success" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.paymentcodes') }}</label>
                            </div>
                            <div class="col">
                                <select id="paymentcodes" name="paymentcodes" multiple="multiple" class="border border-success w-100">
                                    <option></option>
                                    <option selected>Alabama</option>
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
                                <label>{{ __('translate.taxcategory') }}</label>
                            </div>
                            <div class="col">
                                <select id="taxcategory" name="taxcategory" class="form-control select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.standardrated') }}</option>
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
        <!--Update Costs-->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ __('translate.updatecosts') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-block btn-primary">{{ __('translate.updatestandardcosts') }}</button>
                    </div>
                    <div class="col-md-1 w-20">
                        <button type="button" class="btn btn-block btn-primary">+</button>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>


        </div>
        <!-- /.card-body -->

        <!-- /.container-fluid -->
    </section>
@endsection
