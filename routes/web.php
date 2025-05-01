<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\RequisitionEntryController;
use App\Http\Controllers\QuotationsController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\DeliveryOrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TransferRequestController;
use App\Http\Controllers\ReceiptOrderController;
use App\Http\Controllers\IssueOrderController;


/*
Route::get('/', function () {
    return view('pages.home');
});
*/
Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('pages.home');
Route::get('/home1', [App\Http\Controllers\HomeController::class, 'home1'])
    ->name('pages.home1');
    //->middleware('auth');
//Cross Application Routes
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])
    ->name('crossapplication.settings');
Route::get('/customers', [App\Http\Controllers\HomeController::class, 'customers'])
    ->name('crossapplication.customers');
Route::get('/supplier', [App\Http\Controllers\HomeController::class, 'supplier'])
    ->name('crossapplication.supplier');
Route::get('/items', [App\Http\Controllers\HomeController::class, 'items'])
    ->name('crossapplication.items');
//Purchase Routes
Route::get('/purchaseorder', [App\Http\Controllers\HomeController::class, 'purchaseorder'])
    ->name('purchase.purchaseorder');
Route::get('/requisitionentry', [App\Http\Controllers\HomeController::class, 'requisitionentry'])
    ->name('purchase.requisitionentry');
//Order Processing Routes
Route::get('/quotations', [App\Http\Controllers\HomeController::class, 'quotations'])
    ->name('orderprocessing.quotations');
Route::get('/customerorders', [App\Http\Controllers\HomeController::class, 'customerorders'])
    ->name('orderprocessing.customerorders');
Route::get('/deliveryorders', [App\Http\Controllers\HomeController::class, 'deliveryorders'])
    ->name('orderprocessing.deliveryorders');
Route::get('/invoices', [App\Http\Controllers\HomeController::class, 'invoices'])
    ->name('orderprocessing.invoices');

//inventory Routes
Route::get('/transferrequest', [App\Http\Controllers\HomeController::class, 'transferrequest'])
    ->name('inventory.transferrequest');
Route::get('/receiptorder', [App\Http\Controllers\HomeController::class, 'receiptorder'])
    ->name('inventory.receiptorder');
Route::get('/issueorder', [App\Http\Controllers\HomeController::class, 'issueorder'])
    ->name('inventory.issueorder');
    //General Ledger Routes
Route::get('/glvoucher', [App\Http\Controllers\HomeController::class, 'glvoucher'])
    ->name('generalledger.glvoucher');

Route::post('/store', [CodesController::class, 'store'])->name('store');
Route::get('/getall', [CodesController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [CodesController::class, 'edit'])->name('edit');
Route::post('/codes/update', [CodesController::class, 'update'])->name('update');
Route::delete('/codes/delete', [CodesController::class, 'delete'])->name('delete');

Route::post('/storecustomer', [CustomerController::class, 'storecustomer'])->name('storecustomer');
Route::get('/getall', [CustomerController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [CustomerController::class, 'edit'])->name('edit');
Route::post('/codes/update', [CustomerController::class, 'update'])->name('update');
Route::delete('/codes/delete', [CustomerController::class, 'delete'])->name('delete');

Route::post('/storesupplier', [SupplierController::class, 'storesupplier'])->name('storesupplier');
Route::get('/getall', [SupplierController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [SupplierController::class, 'edit'])->name('edit');
Route::post('/codes/update', [SupplierController::class, 'update'])->name('update');
Route::delete('/codes/delete', [SupplierController::class, 'delete'])->name('delete');

Route::post('/storeitems', [ItemsController::class, 'storeitems'])->name('storeitems');
Route::get('/getall', [ItemsController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ItemsController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ItemsController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ItemsController::class, 'delete'])->name('delete');

Route::post('/storepurchaseorder', [PurchaseOrderController::class, 'storepurchaseorder'])->name('storepurchaseorder');
Route::get('/getall', [PurchaseOrderController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [PurchaseOrderController::class, 'edit'])->name('edit');
Route::post('/codes/update', [PurchaseOrderController::class, 'update'])->name('update');
Route::delete('/codes/delete', [PurchaseOrderController::class, 'delete'])->name('delete');

Route::post('/storerequisitionentry', [RequisitionEntryController::class, 'storerequisitionentry'])->name('storerequisitionentry');
Route::get('/getall', [RequisitionEntryController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [RequisitionEntryController::class, 'edit'])->name('edit');
Route::post('/codes/update', [RequisitionEntryController::class, 'update'])->name('update');
Route::delete('/codes/delete', [RequisitionEntryController::class, 'delete'])->name('delete');

Route::post('/storequotation', [QuotationsController::class, 'storequotation'])->name('storequotation');
Route::get('/getall', [QuotationsController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [QuotationsController::class, 'edit'])->name('edit');
Route::post('/codes/update', [QuotationsController::class, 'update'])->name('update');
Route::delete('/codes/delete', [QuotationsController::class, 'delete'])->name('delete');

Route::post('/storecustomerorder', [CustomerOrderController::class, 'storecustomerorder'])->name('storecustomerorder');
Route::get('/getall', [CustomerOrderController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [CustomerOrderController::class, 'edit'])->name('edit');
Route::post('/codes/update', [CustomerOrderController::class, 'update'])->name('update');
Route::delete('/codes/delete', [CustomerOrderController::class, 'delete'])->name('delete');

Route::post('/storedeliveryorder', [DeliveryOrderController::class, 'storedeliveryorder'])->name('storedeliveryorder');
Route::get('/getall', [DeliveryOrderController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [DeliveryOrderController::class, 'edit'])->name('edit');
Route::post('/codes/update', [DeliveryOrderController::class, 'update'])->name('update');
Route::delete('/codes/delete', [DeliveryOrderController::class, 'delete'])->name('delete');

Route::post('/storeinvoice', [InvoiceController::class, 'storeinvoice'])->name('storeinvoice');
Route::get('/getall', [InvoiceController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [InvoiceController::class, 'edit'])->name('edit');
Route::post('/codes/update', [InvoiceController::class, 'update'])->name('update');
Route::delete('/codes/delete', [InvoiceController::class, 'delete'])->name('delete');


Route::post('/storetransferrequest', [TransferRequestController::class, 'storetransferrequest'])->name('storetransferrequest');
Route::get('/getall', [TransferRequestController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [TransferRequestController::class, 'edit'])->name('edit');
Route::post('/codes/update', [TransferRequestController::class, 'update'])->name('update');
Route::delete('/codes/delete', [TransferRequestController::class, 'delete'])->name('delete');

Route::post('/storereceiptorder', [ReceiptOrderController::class, 'storereceiptorder'])->name('storereceiptorder');
Route::get('/getall', [ReceiptOrderController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ReceiptOrderController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ReceiptOrderController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ReceiptOrderController::class, 'delete'])->name('delete');

Route::post('/storeissueorder', [IssueOrderController::class, 'storeissueorder'])->name('storeissueorder');
Route::get('/getall', [IssueOrderController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [IssueOrderController::class, 'edit'])->name('edit');
Route::post('/codes/update', [IssueOrderController::class, 'update'])->name('update');
Route::delete('/codes/delete', [IssueOrderController::class, 'delete'])->name('delete');




/*
Route::get('/', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('pages.home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

//require __DIR__.'/auth.php';