@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.complex') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="#">Accounts Receivable</a></li>
                        <li class="breadcrumb-item active">Complex</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Purchase Order-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.complex') }}</h3>


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
            <form action="{{ route('storecomplex') }}" method="POST" id="complex_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.vouchernumber') }}</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">SRGL</option>
                                                <option>PO-</option>
                                                <option>WALK</option>

                                            </select>
                                        </span>
                                    </div>
                                    <input id="voucher_number" name="voucher_number" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                         <div class="row mt-2">
                            <div class="col">
                                <label class="text-md-end">{{ __('translate.reference') }}</label>
                            </div>
                            <div class="col">
                                <input id="reference" name="reference" class="form-control border border-success" tabindex="4" />
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
                                <label>{{ __('translate.year') }}</label>
                            </div>
                            <div class="col">
                                <select id="year" name="year" class="form-control border border-success select2bs4">
                                    <option selected="selected">2025</option>
                                    <option>2025</option>
                                    <option>2024</option>
                                    <option>2023</option>
                                    <option>2004</option>
                                    <option>1971</option>
                                    <option>1945</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.period') }}</label>
                            </div>
                            <div class="col">
                                <select id="period" name="period" class="form-control border border-success select2bs4">
                                    <option selected="selected">3</option>
                                    <option>3</option>
                                    <option>930</option>
                                    <option>21</option>
                                    <option>7</option>
                                    <option>2000</option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <label>{{ __('translate.headerdescription') }}</label>
                                </div>
                                <div class="col">
                                    <textarea id="header_description" name="header_description" rows="3" class="form-control border border-success h-100 w-100"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.team') }}</label>
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
                                    <label>{{ __('translate.manager') }}</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.approvalstatus') }}</label>
                                </div>
                                <div class="col">
                                   <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.documenttype') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>{{ __('translate.documentnumber') }}</label>
                                </div>
                                <div class="col">
                                    <label></label>
                                </div>
                            </div>
                           
                        </div>
                         <hr>
                                            <div>
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('translate.voucherrow') }}</th>
                                    <th>{{ __('translate.account') }}</th>
                                    <th>{{ __('translate.description') }}</th>
                                    <th>{{ __('translate.accountusage') }}</th>
                                    <th>{{ __('translate.subaccount') }}</th>

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