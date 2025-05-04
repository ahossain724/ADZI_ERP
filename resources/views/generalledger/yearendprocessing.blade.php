@extends('pages.home')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Year End Processing</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="#">General Ledger</a></li>
                        <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
                        <li class="breadcrumb-item active">Year End Processing</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Year End Processing</h3>


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
            <form action="{{ route('storeyearendprocessing') }}" method="POST" id="yearend_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label class="text-md-end">Year</label>
                            </div>
                            <div class="col">
                                <input id="year" name="year" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label class="text-md-end">Transfer Amount</label>
                            </div>
                            <div class="col">
                                <input id="transfer_amount" name="transfer_amount" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>GL Voucher Prefix</label>
                            </div>
                            <div class="col">
                                <select id="voucher_prefix" name="voucher_prefix" class="form-control border border-success select2bs4">
                                    <option selected="selected">JV--</option>
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
    </section>
    

@endsection