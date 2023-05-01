<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.master.app');
});
Route::get('/test', function () {
    
//    $data = DB::table('supplier')->get();
$data = DB::table('product')
->Leftjoin('category','category.id','product.category_id')
->Leftjoin('supplier','supplier.id','product.supplier_id')
->select('supplier.name as supplier_name','supplier.phone as supplier_phone','supplier.address as supplier_address',
'product.name as product_name','product.price as product_price','product.description as product_description','product.supplier_id as P_supplier_id',
'product.category_id as p_category_id',
'category.name as c_name','category.type as c_type',
)
->get();
 dd($data);

});