@extends('pages.home')
@section('content')
    <section class="content-header">
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
                            <select class="duallistbox w-100" multiple="multiple">
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
                            <select id="code_type" name="code_type" class="form-control select2bs4 w-100">
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
                            <input id="code" name="code" class="form-control w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.detaileddescription') }}</label>
                            <input id="detailed_description" name="detailed_description" class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.alternatecode') }}</label>
                            <input id="alternate_code" name="alternate_code" class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input id="active" name="active" class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label>{{ __('translate.team') }}</label>
                                <select id="team" name="team" multiple="multiple" class="w-100">
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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.transactiontype') }}</label>
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

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.code') }}</label>
                            <input class="form-control w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.description') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.starting') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.increment') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.prefix') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.suffix') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label>{{ __('translate.team') }}</label>
                                <select multiple="multiple" class="w-100">
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
                                <textarea rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    </br>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.currency') }}</label>
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

                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.shortname') }}</label>
                            <input class="form-control w-100" data-placeholder="Enter a Code">
                        </div>

                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.name') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.cent') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.cents') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.decimalplaces') }}</label>
                            <input class="form-control w-100" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>{{ __('translate.exchangerate') }}</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.exchangeratesell') }}</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.exchangeratebuy') }}</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.wordformula') }}</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ __('translate.effectivitydate') }}</label>
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
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label>{{ __('translate.active') }}</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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
            <!-- /.card-body -->
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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.glinterfacetype') }}</label>
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

                    <!-- /.col -->
                    <div class="col">
                        <div>
                            <label>{{ __('translate.itemgroup') }}</label>
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
                    <div class="col">
                        <div>
                            <label style="font-size: 0.8em">{{ __('translate.customersupplieragentgroup') }}</label>
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.warehouse') }}</label>
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.account') }}</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
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
                <!-- /.card-body -->
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
                
                    
                    <div class="row">
                        <div class="col">
                            <div>
                                <label>{{ __('translate.code') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.col -->
                        <div class="col">
                            <div>
                                <label>{{ __('translate.format') }}</label>
                                <textarea rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label>{{ __('translate.messagetype') }}</label>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.depotrow') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" tabindex="1" />
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
                                <label>{{ __('translate.taxscope') }}</label>
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
                                <label>{{ __('translate.portofdischarge') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.remarks') }}</label>
                            </div>
                            <div class="col">
                                <textarea rows="3" class="form-control h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Id</label>
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" />
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
                                <label>{{ __('translate.zippostalcode') }}</label>
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
                                <label>{{ __('translate.alternatecode') }}</label>
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
                                <label>{{ __('translate.url') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">{{ __('translate.warehouse') }}</label>
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
                                <label>{{ __('translate.shortname') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.depottype') }}</label>
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
                                <input type="text" class="form-control">
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
                <!-- /.card-body -->
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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.location') }}</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.region') }}</label>
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.country') }}</label>
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.effectivitydate') }}</label>
                            <div class="input-group date" id="locationeffectivitydate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
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
                                <input type="text" class="form-control datetimepicker-input"
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
                        <div class="col">
                            <div>
                                <label>{{ __('translate.defaultpaymentcode') }}</label>
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
                        <div class="col">
                            <div>
                                <label>{{ __('translate.timeslots') }}</label>
                                <select multiple="multiple" class="w-100">
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
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ __('translate.titleimageurl') }}</label>
                                <input class="form-control w-100" />
                            </div>
                        </div>
                        <div class="col">
                            <label>{{ __('translate.backgroundimageurl') }}</label>
                            <input class="form-control w-100" />
                        </div>

                    </div>
                </div>

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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.paymentcode') }}</label>
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
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.account') }}</label>
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.transactioncode') }}</label>
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
                </div>
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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.locale') }}</label>
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
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.date') }}</label>
                            <div class="input-group date" id="holidaysdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
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
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.notes') }}</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.vehicle') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('translate.description') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.vehicletype') }}</label>
                            <select class="form-control select2bs4 w-100">
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
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.width') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.height') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.ctsize') }}</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.lulabelno') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.owner') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.mlwkg') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.uwkg') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.tonnage') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.budcapacity') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.cttype') }}</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div>
                                <label>{{ __('translate.deliveryzone') }}</label>
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">{{ __('translate.select') }}</option>
                                    <option>Delivery Zone A</option>
                                    <option>Delivery Zone B</option>
                                    <option>Delivery Zone C</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label>{{ __('translate.remarks') }}</label>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
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
                    <div class="row mt-2">
                        <hr style="border: 2px solid black;" />
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label style="font-size: 2em">{{ __('translate.teamassignmentto') }}</label>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>{{ __('translate.effectivitydate') }} ⇑</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>{{ __('translate.team') }}</label>
                            <select class="form-control select2bs4 w-100">
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
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>{{ __('translate.documenttypedocumentnumber') }}</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>{{ __('translate.dateissuedexpirationdate') }}</label>
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
                        <div class="col">
                            <input type="text" class="form-control" />
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
                <div class="row">
                    <div class="col">
                        <div>
                            <label>{{ __('translate.documentname') }}</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <label>{{ __('translate.title') }}</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col">
                        <div>
                            <label>{{ __('translate.sourcedocuments') }}</label>
                            <select class="form-control select2bs4 w-100">
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
                    <div class="col">
                        <div>
                            <label>{{ __('translate.referencefield') }}</label>
                            <select class="form-control select2bs4 w-100">
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
                        <select multiple="multiple" class="w-100">
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
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>

                    <div class="col">
                        <label>{{ __('translate.printorgaddresss') }}</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printlogo') }}</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printcustomerdetails') }}</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printdeliverydetails') }}</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.printstandardfooter') }}</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>{{ __('translate.active') }}</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>{{ __('translate.header') }}</label>
                        <textarea rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>{{ __('translate.footer') }}</label>
                        <textarea rows="3" class="form-control"></textarea>
                    </div>
                </div>
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
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.sitename') }}</label>
                            </div>
                            <div class="col-sm-4">
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
                                <label>{{ __('translate.object') }}</label>
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
                                <label>{{ __('translate.discount%') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">{{ __('translate.warehouse') }}</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.shippingproduct') }}</label>
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
                                <label>{{ __('translate.section') }}</label>
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
                            <div class="col">
                                <label>{{ __('translate.dropship?') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.printtax?') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.email-success') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.bankcode') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.paypaluserid') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.itemgroup') }}</label>
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
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>{{ __('translate.customerprefix') }}</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <select class="form-control select2bs4 w-100">
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
                                <select class="form-control select2bs4 w-100">
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
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.market') }}</label>
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
                                <label>{{ __('translate.projectmanager') }}</label>
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
                            <div class="col">
                                <label>{{ __('translate.residence?') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
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
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.active') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.timecutoff') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.email-failure') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.accountnumber') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.taxcode') }}</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                            <input type="radio" name="optradio" checked>{{ __('translate.auto') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em;margin-left:10px">
                                            <input type="radio" name="optradio">{{ __('translate.manufacture') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.7em">
                                            <input type="radio" name="optradio" checked>{{ __('translate.rework') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input type="radio" name="optradio">{{ __('translate.exstock') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.6em">
                                            <input type="radio" name="optradio" checked>{{ __('translate.purchase') }}
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input type="radio" name="optradio">{{ __('translate.transfer') }}

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
                                <select class="form-control select2bs4 w-100">
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
                                <select class="form-control select2bs4 w-100" tabindex="6">
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
                                <select class="form-control select2bs4 w-100">
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
                                <label>{{ __('translate.region') }}</label>
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
                                <label>{{ __('translate.paymentcode') }}</label>
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
                            <div class="col">
                                <label>{{ __('translate.saturdaydelivery?') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.codebasis') }}</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.daystodeliver') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.bank') }}</label>
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
                                <label>{{ __('translate.accountname') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.taxscope') }}</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <input class="form-check-input" type="checkbox" value=""
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
                                <select class="form-control select2bs4 w-100">
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
                                <select class="form-control select2bs4 w-100" tabindex="6">
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
                                <select class="form-control select2bs4 w-100">
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
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label style="color: red">{{ __('translate.currency') }}</label>
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
                                <label>{{ __('translate.territory') }}</label>
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
                                <label>{{ __('translate.shippingcode') }}</label>
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
                                <label>{{ __('translate.division') }}</label>
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
                                <label>{{ __('translate.backordertype') }}</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
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
                                <select class="form-control select2bs4 w-100">
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
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.branch') }}</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.paymentcodes') }}</label>
                            </div>
                            <div class="col">
                                <select multiple="multiple" class="w-100">
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
                                <select class="form-control select2bs4 w-100">
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
