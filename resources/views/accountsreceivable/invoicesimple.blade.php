@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.invoicesimple') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="#">Accounts Receivable</a></li>
                        <li class="breadcrumb-item active">Invoice-Simple</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.customerinvoice') }}</h3>


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
            <form action="{{ route('storeinvoicesimple') }}" method="POST" id="invoicesimple_form">
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
                                                <option selected="selected">JV--</option>
                                                <option>BTRE</option>
                                                <option>TREQ</option>
                                            </select>
                                        </span>
                                    </div>
                                    <input id="voucher_number" name="voucher_number" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red">{{ __('translate.control') }}</label>
                            </div>
                            <div class="col">
                                <select id="control" name="control" class="form-control border border-success select2bs4">
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
                                <label style="color: red">{{ __('translate.salesac') }}</label>
                            </div>
                            <div class="col">
                                <select id="sales" name="sales" class="form-control border border-success select2bs4">
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
                                <label style="color: red" class="text-md-end">{{ __('translate.customerpayer') }}</label>
                            </div>
                            <div class="col">
                                <input id="customer_payer" name="customer_payer" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>{{ __('translate.narration') }}</label>
                            </div>
                            <div class="col">
                                <textarea id="narration" name="narration" rows="2" class="form-control border border-success h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.division') }}</label>
                            </div>
                            <div class="col">
                                <select id="division" name="division" class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.select') }}</option>
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
                                <label>{{ __('translate.section') }}</label>
                            </div>
                            <div class="col">
                                <select id="section" name="section" class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.select') }}</option>
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
                                <label>{{ __('translate.project') }}</label>
                            </div>
                            <div class="col">
                                <select id="project" name="project" class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.select') }}</option>
                                    <option>2025</option>
                                    <option>2024</option>
                                    <option>2023</option>
                                    <option>2004</option>
                                    <option>1971</option>
                                    <option>1945</option>
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
                                <div class="input-group date border border-success" id="reservationdate" data-target-input="nearest">
                                    <input id="date" name="date" type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append border border-success" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label style="color: red" class="text-md-end">{{ __('translate.invoicenumber') }}</label>
                            </div>
                            <div class="col">
                                <input id="invoice_number" name="invoice_number" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="text-md-end">{{ __('translate.taxrate') }}</label>
                            </div>
                            <div class="col">
                                <input id="tax_rate" name="tax_rate" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                                <div class="col">
                                    <label style="color: red">{{ __('translate.currency') }}</label>
                                </div>
                                <div class="col">
                                    <select id="currency" name="currency" class="form-control select2bs4">
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
                                <label class="text-md-end">{{ __('translate.amountreceived') }}</label>
                            </div>
                            <div class="col">
                                <input id="amount_received" name="amount_received" class="form-control border border-success" tabindex="4" />
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