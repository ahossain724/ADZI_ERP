@extends('pages.home')
@section('content')
    <section class="content-header"style="padding-top: 56px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>IOU Voucher Entry</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="#">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="#">General Ledger</a></li>
                        <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
                        <li class="breadcrumb-item active">IOU Voucher Entry</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">IOU Voucher Entry</h3>


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
            <form action="{{ route('storeiouvoucher') }}" method="POST" id="iouvoucher_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Voucher Number</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <select class="form-control select2bs4 w-10" style="height: 10px">
                                                <option selected="selected">TISS</option>
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
                                <label style="color: red">Advance To:</label>
                            </div>
                            <div class="col">
                                <select id="advance_to" name="advance_to" class="form-control border border-success select2bs4">
                                    <option selected="selected">[Undefined]</option>
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
                                <label class="text-md-end">Amount</label>
                            </div>
                            <div class="col">
                                <input id="amount" name="amount" class="form-control border border-success" tabindex="4" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>GL Posting Flag</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div> 
                        <div class="row mt-2">
                            <div class="col">
                                <label>Entry By</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div>   
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col-sm-5">
                                <label>Date</label>
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
                                <label style="color: red">Paid From Account</label>
                            </div>
                            <div class="col">
                                <select id="paid_from_account" name="paid_from_account" class="form-control border border-success select2bs4">
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
                                <label>Narration</label>
                            </div>
                            <div class="col">
                                <textarea id="narration" name="narration" rows="4" class="form-control border border-success h-100 w-100"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>GL Voucher</label>
                            </div>
                            <div class="col">
                                <label></label>
                            </div>
                        </div> 
                        <div class="row mt-2">
                            <div class="col">
                                <label>Last Updated By</label>
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
            </form>
        </div>


        <div class="card-footer">

        </div>
    </div>
    </section>
    

@endsection