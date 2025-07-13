@extends('pages.home')
@section('content')
<section class="content-header" style="padding-top: 60px; padding-left:90px;">
        <div class="container-fluid">
            <div class="row mb-2">
                
                
            </div>
        </div><!-- /.container-fluid -->
    </section>
  
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col">
        <h2 class="page-header">
    <i class="fas fa-globe"></i> Adzi Trims, ltd.
    <small class="float-right" style="font-size: 0.5em;">
        Address: Dautia, Kalampur, Dhamrai, Dhaka, Bangladesh<br>
        Email: info@adzitrims.com<br>
        Phone: 9345625-8, +8801971069500<br>
        Website: www.adzitrims.com
    </small>
    
</h2>
<div style="margin-left: 42%;"> {!!$barcodeImg !!}</div>

        <button type="button" 
            class="btn btn-primary "
            onclick="window.print()">
        Print
    </button>
      </div>
      <!-- /.col -->
      
    </div>
    <!-- info row -->
    
    <!-- /.row -->
    <div style="text-align: center;">
    <h1 style="font-size: 1.2em;">Order Sheet</h1>
</div>
    <table class="table table-bordered">
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Job Bug Number</td>
            <td></td> 
            <td style="text-align: right;">Order Date</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Retailer Name</td>
            <td></td> 
            <td style="text-align: right;">ERD Date</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Customer Name</td>
            <td></td> 
            <td style="text-align: right;">Label Name</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Bill to Party</td>
            <td></td> 
            <td style="text-align: right;">Quantity</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Ship to Party</td>
            <td></td> 
            <td style="text-align: right;">Entry Person</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Customer Po</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td style="text-align: right;">Customer Reference Number</td>
            <td></td>  
        </tr>
        
    </table>
    <div style="margin-bottom: 40px;"></div>
    <table class="table table-bordered">
        <tr style="border: 1px solid;">
            <td>Product Code</td>
            <td></td> 
            <td>Manufacturing Unit</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td>Brand</td>
            <td></td> 
            <td>Developed By</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td>Uom</td>
            <td></td> 
        </tr>
        <tr style="border: 1px solid;">
            <td>Free of Cost remark</td>
            <td>-</td> 
        </tr>
    </table>
    <div style="margin-bottom: 40px;"></div>
    <label>Product Dimension</label>
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Product Code</th>
            <th>Width</th>
            <th>Total Length</th>
            <th>Finished Length</th>
            <th>Manufacturing Note</th>
            
          </tr>
          </thead>
          <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>-</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- Table row -->
    <div style="margin-bottom: 40px;"></div>
    <label>Order Details For Job Bag: OEAD0000144672</label>
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>serial</th>
            <th>product code</th>
            <th>po</th>
            <th>style</th>
            <th>color</th>
            <th>size</th>
            <th>quantity</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283770</td>
            <td>C:02</td>
            <td>9-12 M</td>
            <td>222</td>
          </tr>
          <tr>
            <td>2</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283774</td>
            <td>C:02</td>
            <td>12-18 M</td>
            <td>348</td>
          </tr>
          <tr>
            <td>3</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283776</td>
            <td>C:02</td>
            <td>18-24M</td>
            <td>441</td>
          </tr>
          <tr>
            <td>4</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283777</td>
            <td>C:02</td>
            <td>2-3</td>
            <td>663</td>
          </tr>
          <tr>
            <td>5</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283778</td>
            <td>C:02</td>
            <td>3-4</td>
            <td>630</td>
          </tr>
          <tr>
            <td>6</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283779</td>
            <td>C:02</td>
            <td>4-5</td>
            <td>567</td>
          </tr>
          <tr>
            <td>7</td>
            <td>GI000YI3</td>
            <td>1284-1202</td>
            <td>844740283771</td>
            <td>C:02</td>
            <td>5-6</td>
            <td>280</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <label>Remarks:-</label>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->

@endsection

