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

Route::get('/', function () {
    return view('welcome');
});

Route::get('khoahoc',function(){
	return "xin chaf cac bajn";
});

/* Bai 6 Truyen tham so tren route */

Route::get('khoahoc/{ten}',function($ten){
	echo "Khoa hoc:".$ten;

});

Route::get('khoahoc/{ngay}',function($ngay){
	echo "khoahoc".$ngay;
})->where(['ngay'=>'[0-9]+']);

/* Bai 7 Dinh danh va nhom ROute */
Route::get('Route1',['as'=>
'myroute',function(){
	echo "hello casc ban nhieu";
}]);

Route::get('Route2',function(){
	echo "day laf route 2";
})->name('myroute2');


// Route::get('goiten',function(){
// 	return redirect()->route('myroute');
// });

Route::get('goiten',function(){
	return redirect()->route('myroute2');
});


Route::group(['prefix'=>'Mygroup'],function(){


	Route::get('Route1',function(){
		echo "route1";
	});


	Route::get('Route2',function(){
		echo "route2";
	});



	Route::get('Route3',function(){
		echo "route3";
	});

});

// Bài 8 : Cơ bản về controller

Route::get('goicontroller','Mycontroller@Xinchao');

Route::get('MyRequest',
'Mycontroller@GetURL');

// Bai 11 : gui nhan tham so tren Request

Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'Mycontroller@postForm' ]); 
 