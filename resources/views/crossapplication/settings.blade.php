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
                            <label>Bud Capacity</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label>CT Type</label>
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
                                <label>DG</label>
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
                                <label>Delivery Zone</label>
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">[Select]</option>
                                    <option>Delivery Zone A</option>
                                    <option>Delivery Zone B</option>
                                    <option>Delivery Zone C</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label>Remarks</label>
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
                            <label style="font-size: 2em">Team Assignment to</label>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Effectivity Date ⇑</label>
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
                            <label>Team</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
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
                            <label style="font-size: 2em">Admin Info</label>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Document Type ⇑ Document Number</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">[Select]</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                                <option>Undefined</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Date Issued Expiration Date</label>
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
                <h3 class="card-title">User Docs</h3>

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
                            <label>Document Name</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <label>Title</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col">
                        <div>
                            <label>Source Documents</label>
                            <select class="form-control select2bs4 w-100">
                                <option selected="selected">Customer Order</option>
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
                            <label>Order Type</label>
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
                            <label>Reference Field</label>
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
                        <label>Info Groups</label>
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
                        <label>Print Org Name</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>

                    <div class="col">
                        <label>Print Org Address</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>Print Logo</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>Print Customer Details</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>Print Delivery Details</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>Print Standard Footer</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                    <div class="col">
                        <label>Active</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"checked />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Header</label>
                        <textarea rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Footer</label>
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
                <h3 class="card-title">Site Defaults</h3>

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
                                <label>Site Name</label>
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
                                <label>Object</label>
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
                                <label style="color: red">Country</label>
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
                                <label>SIC Code</label>
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
                                <label>Discount %</label>
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
                                    <option selected="selected">General Store</option>
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
                                <label>Sales Person</label>
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
                                <label>Section</label>
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
                            <div class="col">
                                <label>Drop Ship?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Print Tax?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Email-Success</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Bank Code</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>PayPal UserID</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Item Group</label>
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
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Customer Prefix</label>
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
                                <label>Unit of Distance</label>
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
                                <label>Control Account-AR</label>
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
                                <label>Customer Status</label>
                            </div>
                            <div class="col">
                                <label>1-Open</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Agent</label>
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
                            <div class="col">
                                <label>Residence?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
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
                        <div class="row mt-2">
                            <div class="col">
                                <label>Active</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Time Cutoff</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Email-Failure</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Account Number</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Tax Code</label>
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
                                <label style="color: red;">Fulfillment Category</label>
                            </div>
                            <div class="col">
                                <div class="row">

                                    <div class="col">
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input type="radio" name="optradio" checked>Auto
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em;margin-left:10px">
                                            <input type="radio" name="optradio">Manufacture
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.7em">
                                            <input type="radio" name="optradio" checked>Rework
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input type="radio" name="optradio">ExStock
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.6em">
                                            <input type="radio" name="optradio" checked>Purchase
                                        </label>
                                        <label class="radio-inline" style="font-size: 0.8em">
                                            <input type="radio" name="optradio">Transfer

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-5">
                                <label>Order Prefix</label>
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
                                <label>Unit of Weight</label>
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
                                <label>Customer Group</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Retail</option>
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
                                <label>Credit Limit</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Commission %</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
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
                            <div class="col">
                                <label>Saturday Delivery?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Code Basis</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Our Code</option>
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
                                <label>Prices Include Tax?</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked"checked />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Days To Deliver</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Bank</label>
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
                                <label>Tax Scope</label>
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
                                <label>Show Supplier?</label>
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
                                <label>Quotation Prefix</label>
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
                                <label>City</label>
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
                                <label>Price Group</label>
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
                                <label>Credit Terms</label>
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
                                <label>Shipping Code</label>
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
                                <label>Division</label>
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
                                <label>Backorder Type</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Future Stock</option>
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
                                <label>Invoicing Rule</label>
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
                                <label>Email</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Branch</label>
                            </div>
                            <div class="col">
                                <input class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Payment Codes</label>
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
                                <label>Tax Category</label>
                            </div>
                            <div class="col">
                                <select class="form-control select2bs4 w-100">
                                    <option selected="selected">Standard Rated</option>
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
                <h3 class="card-title">Update Costs</h3>

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
                        <button type="button" class="btn btn-block btn-primary">Update Standard Costs</button>
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
