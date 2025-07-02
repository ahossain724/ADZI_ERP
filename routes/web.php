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
use App\Http\Controllers\GLVoucherController;
use App\Http\Controllers\YearEndProcessingController;
use App\Http\Controllers\IOUVoucherEntryController;
use App\Http\Controllers\IOUAdjustmentController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\InvoiceSimpleController;
use App\Http\Controllers\ComplexController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\TransactionCodeController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\GLInterfaceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\TaxTableController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SettingsReceiptController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserDocController;
use App\Http\Controllers\SiteDefaultController;
use App\Http\Controllers\RboController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DimensionController;
use App\Http\Controllers\PDController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandDropdownController;
use App\Http\Controllers\ReferenceDropdownController;

















/*
Route::get('/', function () {
    return view('pages.home');
});
*/
Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes();

Route::get('langChange', [LanguageController::class, 'langChange'])->name('langChange');

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

//Dropdown filter
//Route::get('/dropdowns', [DropdownController::class, 'index'])->name('dropdowns.index');
Route::get('/get-customers-by-rbo/{rbo_id}', [DropdownController::class, 'getCustomersByRbo']);
Route::get('/get-by-rbo/{rbo_id}', [ReferenceDropdownController::class, 'getReferencesByRbo']);
Route::get('/get-brands-by-rbo/{rbo_id}', [BrandDropdownController::class, 'getBrandsByRbo']);
//inventory Routes
Route::get('/transferrequest', [App\Http\Controllers\HomeController::class, 'transferrequest'])
    ->name('inventory.transferrequest');
Route::get('/receiptorder', [App\Http\Controllers\HomeController::class, 'receiptorder'])
    ->name('inventory.receiptorder');
Route::get('/issueorder', [App\Http\Controllers\HomeController::class, 'issueorder'])
    ->name('inventory.issueorder');
Route::get('/classesdimensions', [App\Http\Controllers\HomeController::class, 'classesdimensions'])
    ->name('inventory.classesdimensions');
    //General Ledger Routes
Route::get('/glvoucher', [App\Http\Controllers\HomeController::class, 'glvoucher'])
    ->name('generalledger.glvoucher');
Route::get('/yearendprocessing', [App\Http\Controllers\HomeController::class, 'yearendprocessing'])
    ->name('generalledger.yearendprocessing');
Route::get('/iouvoucherentry', [App\Http\Controllers\HomeController::class, 'iouvoucherentry'])
    ->name('generalledger.iouvoucherentry');
Route::get('/iouadjustment', [App\Http\Controllers\HomeController::class, 'iouadjustment'])
    ->name('generalledger.iouadjustment');
Route::get('/receipt', [App\Http\Controllers\HomeController::class, 'receipt'])
    ->name('accountsreceivable.receipt');
Route::get('/invoicesimple', [App\Http\Controllers\HomeController::class, 'invoicesimple'])
    ->name('accountsreceivable.invoicesimple');
Route::get('/complex', [App\Http\Controllers\HomeController::class, 'complex'])
    ->name('accountsreceivable.complex');
Route::get('/allocation', [App\Http\Controllers\HomeController::class, 'allocation'])
    ->name('accountsreceivable.allocation');



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

Route::post('/storeglvoucher', [GLVoucherController::class, 'storeglvoucher'])->name('storeglvoucher');
Route::get('/getall', [GLVoucherController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [GLVoucherController::class, 'edit'])->name('edit');
Route::post('/codes/update', [GLVoucherController::class, 'update'])->name('update');
Route::delete('/codes/delete', [GLVoucherController::class, 'delete'])->name('delete');

Route::post('/storeyearendprocessing', [YearEndProcessingController::class, 'storeyearendprocessing'])->name('storeyearendprocessing');
Route::get('/getall', [YearEndProcessingController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [YearEndProcessingController::class, 'edit'])->name('edit');
Route::post('/codes/update', [YearEndProcessingController::class, 'update'])->name('update');
Route::delete('/codes/delete', [YearEndProcessingController::class, 'delete'])->name('delete');

Route::post('/storeiouvoucher', [IOUVoucherEntryController::class, 'storeiouvoucher'])->name('storeiouvoucher');
Route::get('/getall', [IOUVoucherEntryController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [IOUVoucherEntryController::class, 'edit'])->name('edit');
Route::post('/codes/update', [IOUVoucherEntryController::class, 'update'])->name('update');
Route::delete('/codes/delete', [IOUVoucherEntryController::class, 'delete'])->name('delete');

Route::post('/storeiouadjustment', [IOUAdjustmentController::class, 'storeiouadjustment'])->name('storeiouadjustment');
Route::get('/getall', [IOUVoucherEntryController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [IOUVoucherEntryController::class, 'edit'])->name('edit');
Route::post('/codes/update', [IOUVoucherEntryController::class, 'update'])->name('update');
Route::delete('/codes/delete', [IOUVoucherEntryController::class, 'delete'])->name('delete');

Route::post('/storereceipt', [ReceiptController::class, 'storereceipt'])->name('storereceipt');
Route::get('/getall', [ReceiptController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ReceiptController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ReceiptController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ReceiptController::class, 'delete'])->name('delete');

Route::post('/storeinvoicesimple', [InvoiceSimpleController::class, 'storeinvoicesimple'])->name('storeinvoicesimple');
Route::get('/getall', [InvoiceSimpleController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [InvoiceSimpleController::class, 'edit'])->name('edit');
Route::post('/codes/update', [InvoiceSimpleController::class, 'update'])->name('update');
Route::delete('/codes/delete', [InvoiceSimpleController::class, 'delete'])->name('delete');

Route::post('/storecomplex', [ComplexController::class, 'storecomplex'])->name('storecomplex');
Route::get('/getall', [ComplexController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ComplexController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ComplexController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ComplexController::class, 'delete'])->name('delete');

Route::post('/storeallocation', [AllocationController::class, 'storeallocation'])->name('storeallocation');
Route::get('/getall', [ComplexController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ComplexController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ComplexController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ComplexController::class, 'delete'])->name('delete');

Route::post('/storetransactioncode', [TransactionCodeController::class, 'storetransactioncode'])->name('storetransactioncode');
Route::get('/getall', [TransactionCodeController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [TransactionCodeController::class, 'edit'])->name('edit');
Route::post('/codes/update', [TransactionCodeController::class, 'update'])->name('update');
Route::delete('/codes/delete', [TransactionCodeController::class, 'delete'])->name('delete');

Route::post('/storecurrency', [CurrencyController::class, 'storecurrency'])->name('storecurrency');
Route::get('/getall', [TransactionCodeController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [TransactionCodeController::class, 'edit'])->name('edit');
Route::post('/codes/update', [TransactionCodeController::class, 'update'])->name('update');
Route::delete('/codes/delete', [TransactionCodeController::class, 'delete'])->name('delete');

Route::post('/storeglinterface', [GLInterfaceController::class, 'storeglinterface'])->name('storeglinterface');
Route::get('/getall', [GLInterfaceController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [GLInterfaceController::class, 'edit'])->name('edit');
Route::post('/codes/update', [GLInterfaceController::class, 'update'])->name('update');
Route::delete('/codes/delete', [GLInterfaceController::class, 'delete'])->name('delete');

Route::post('/storemessage', [MessageController::class, 'storemessage'])->name('storemessage');
Route::get('/getall', [MessageController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [MessageController::class, 'edit'])->name('edit');
Route::post('/codes/update', [MessageController::class, 'update'])->name('update');
Route::delete('/codes/delete', [MessageController::class, 'delete'])->name('delete');

Route::post('/storedepot', [DepotController::class, 'storedepot'])->name('storedepot');
Route::get('/getall', [DepotController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [DepotController::class, 'edit'])->name('edit');
Route::post('/codes/update', [DepotController::class, 'update'])->name('update');
Route::delete('/codes/delete', [DepotController::class, 'delete'])->name('delete');

Route::post('/storetaxtable', [TaxTableController::class, 'storetaxtable'])->name('storetaxtable');
Route::get('/getall', [TaxTableController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [TaxTableController::class, 'edit'])->name('edit');
Route::post('/codes/update', [TaxTableController::class, 'update'])->name('update');
Route::delete('/codes/delete', [TaxTableController::class, 'delete'])->name('delete');

Route::post('/storelocation', [LocationController::class, 'storelocation'])->name('storelocation');
Route::get('/getall', [LocationController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [LocationController::class, 'edit'])->name('edit');
Route::post('/codes/update', [LocationController::class, 'update'])->name('update');
Route::delete('/codes/delete', [LocationController::class, 'delete'])->name('delete');

Route::post('/storesettingsreceipt', [SettingsReceiptController::class, 'storesettingsreceipt'])->name('storesettingsreceipt');
Route::get('/getall', [SettingsReceiptController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [SettingsReceiptController::class, 'edit'])->name('edit');
Route::post('/codes/update', [SettingsReceiptController::class, 'update'])->name('update');
Route::delete('/codes/delete', [SettingsReceiptController::class, 'delete'])->name('delete');

Route::post('/storeholiday', [HolidayController::class, 'storeholiday'])->name('storeholiday');
Route::get('/getall', [HolidayController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [HolidayController::class, 'edit'])->name('edit');
Route::post('/codes/update', [HolidayController::class, 'update'])->name('update');
Route::delete('/codes/delete', [HolidayController::class, 'delete'])->name('delete');

Route::post('/storevehicle', [VehicleController::class, 'storevehicle'])->name('storevehicle');
Route::get('/getall', [VehicleController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [VehicleController::class, 'edit'])->name('edit');
Route::post('/codes/update', [VehicleController::class, 'update'])->name('update');
Route::delete('/codes/delete', [VehicleController::class, 'delete'])->name('delete');

Route::post('/storeuserdoc', [UserDocController::class, 'storeuserdoc'])->name('storeuserdoc');
Route::get('/getall', [UserDocController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [UserDocController::class, 'edit'])->name('edit');
Route::post('/codes/update', [UserDocController::class, 'update'])->name('update');
Route::delete('/codes/delete', [UserDocController::class, 'delete'])->name('delete');

Route::post('/storesitedefault', [SiteDefaultController::class, 'storesitedefault'])->name('storesitedefault');
Route::get('/getall', [SiteDefaultController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [SiteDefaultController::class, 'edit'])->name('edit');
Route::post('/codes/update', [SiteDefaultController::class, 'update'])->name('update');
Route::delete('/codes/delete', [SiteDefaultController::class, 'delete'])->name('delete');

Route::post('/storerbo', [RboController::class, 'storerbo'])->name('storerbo');
Route::get('/getall', [RboController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [RboController::class, 'edit'])->name('edit');
Route::post('/codes/update', [RboController::class, 'update'])->name('update');
Route::delete('/codes/delete', [RboController::class, 'delete'])->name('delete');

Route::post('/storereference', [ReferenceController::class, 'storereference'])->name('storereference');
Route::get('/getall', [ReferenceController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ReferenceController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ReferenceController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ReferenceController::class, 'delete'])->name('delete');

Route::post('/storeclass', [ClassesController::class, 'storeclass'])->name('storeclass');
Route::get('/getall', [ClassesController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ClassesController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ClassesController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ClassesController::class, 'delete'])->name('delete');

Route::post('/storedimension', [DimensionController::class, 'storedimension'])->name('storedimension');
Route::get('/getall', [DimensionController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [DimensionController::class, 'edit'])->name('edit');
Route::post('/codes/update', [DimensionController::class, 'update'])->name('update');
Route::delete('/codes/delete', [DimensionController::class, 'delete'])->name('delete');

Route::post('/storepd', [PDController::class, 'storepd'])->name('storepd');
Route::get('/getall', [PDController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [PDController::class, 'edit'])->name('edit');
Route::post('/codes/update', [PDController::class, 'update'])->name('update');
Route::delete('/codes/delete', [PDController::class, 'delete'])->name('delete');

Route::post('/storebrand', [BrandController::class, 'storebrand'])->name('storebrand');
Route::get('/getall', [BrandController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [BrandController::class, 'edit'])->name('edit');
Route::post('/codes/update', [BrandController::class, 'update'])->name('update');
Route::delete('/codes/delete', [BrandController::class, 'delete'])->name('delete');
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