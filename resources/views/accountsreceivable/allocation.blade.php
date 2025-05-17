@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('translate.allocation') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="#">Accounts Receivable</a></li>
                        <li class="breadcrumb-item active">Allocation</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Purchase Order-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ __('translate.allocation') }}</h3>


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
            <form action="{{ route('storeallocation') }}" method="POST" id="allocation_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.alcno') }}</label>
                            </div>
                            <div class="col">
                                    <input id="alc_no" name="alc_no" class="form-control border border-success" type="text">
                            </div>
                        </div>
                         <div class="row mt-2">
                            <div class="col">
                                <label class="text-md-end">{{ __('translate.alcrow') }}</label>
                            </div>
                            <div class="col">
                                <input id="alcrow" name="alcrow" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="text-md-end">{{ __('translate.alcamt') }}</label>
                            </div>
                            <div class="col">
                                <input id="alcamt" name="alcamt" class="form-control border border-success" tabindex="4" />
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
                                <label>{{ __('translate.invcur') }}</label>
                            </div>
                            <div class="col">
                                <select id="invcur" name="invcur" class="form-control border border-success select2bs4">
                                    <option selected="selected">{{ __('translate.bdt') }}</option>
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
                                <label>{{ __('translate.balance') }}</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>{{ __('translate.reccur') }}</label>
                            </div>
                            <div class="col">
                                <label></label>
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
                <div class="row">
                         <hr>
                        
                                            <div>
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('translate.date') }}</th>
                                    <th>{{ __('translate.vouchernumber') }}</th>
                                    <th>{{ __('translate.account') }}</th>
                                    <th>{{ __('translate.project') }}</th>
                                    <th>{{ __('translate.currency') }}</th>

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
            </form>
        </div>
        


        <div class="card-footer">

        </div>
    </div>
    </section>
    

@endsection