<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test',function(){
// 	$seller = \App\Seller::with('products')->get();
// 	$p = \App\Product::get();

// dd($seller,$p);


	// $sellers = \App\Seller::with('products')->find(1);

	$sellers = \App\Seller::with(['products'=>function($productsQuery){
		$productsQuery->with(['clients'=>function($clientQuery){
			$clientQuery->where('id',1);
		}]);
	}])->get();


// echo 'seller: '. $seller->seller_name.'<br />';
foreach ($sellers as  $seller) {
	# code...

echo 'seller: '. $seller->seller_name.'<br />';
	foreach($seller->products()->get() as $p){
		echo 'product: '.$p->product_name.'<br />';
		foreach ($p->clients()->get() as $c) {
		echo 'client: '.$c->name.'<br />';
		}
	}
}
// foreach ($sellers as  $seller) {
// 	echo $seller->name."<br />";
// }

	// dd($seller);
});

Route::resource('product', 'ProductController');