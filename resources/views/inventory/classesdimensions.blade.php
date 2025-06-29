@extends('pages.home')
@section('content')
    <section class="content-header"style="padding-top: 56px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Classes And Dimensions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="#">Inventory</a></li>
                        <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
                        <li class="breadcrumb-item active">Classes And Dimensions</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     <!--Orders-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Product Data Classes</h3>


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
            <form action="{{ route('storeclass') }}" method="POST" id="class_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>PD Class</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="pd_class" name="pd_class" class="form-control border border-success" type="text">
                                </div>
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
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Detailed Description</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="detailed_description" name="detailed_description" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Team</label>
                            </div>
                            <div class="col">
                                <select id="team" name="team" class="form-control border border-success select2bs4">
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
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Alternate Code</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="alternate_code" name="alternate_code" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div>
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>PD Class</th>
                                    <th>Detailed Description</th>
                                    <th>Alternate Code</th>
                                    <th>Team</th>
                                    <th>Active</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>FINISHED GOODS</td>
                                    <td>FINISHED GOODS</td>
                                    <td></td>
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
    <section class="content">
     <!--Dimensions-->
     <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Dimensions</h3>


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
            <form action="{{ route('storedimension') }}" method="POST" id="dimension_form">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Sequence</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="sequence" name="sequence" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                         <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Display</label>
                            </div>
                            <div class="col">
                                <select id="display" name="display" class="form-control border border-success select2bs4">
                                    <option selected="selected">[Select]</option>
                                    <option>Area</option>
                                    <option>Checkbox</option>
                                    <option>Clicktext</option>
                                    <option>Combo</option>
                                    <option>Const</option>
                                    <option>Date</option>
                                    <option>Datetime</option>
                                    <option>List</option>
                                    <option>Multi-List</option>
                                    <option>Password</option>
                                    <option>Radiobutton</option>
                                    <option>Text</option>
                                    <option>Time</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Detailed Description</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="detailed_description" name="detailed_description" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Default Value</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="default_value" name="default_value" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-2">
                            <div class="col">
                                <label>Max Length</label>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <input id="max_length" name="max_length" class="form-control border border-success" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div>
                        <table id="exampledelivery" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Sequence</th>
                                    <th>Product Dimension</th>
                                    <th>Range</th>
                                    <th>Max Length</th>
                                    <th>Display</th>
                                    <th>Default Value</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Size</td>
                                    <td></td>
                                    <td>15</td>
                                    <td>Text</td>
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