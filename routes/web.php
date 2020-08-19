<?php
/*Auth::routes();


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome1');
});


/*
 Route::prefix('users')->group(function(){
    Route::get('show','UserController@showAdminName');
    Route::delete('delete','UserController@showAdminName');
    Route::get('edit','UserController@showAdminName');
    Route::put('users','UserController@showAdminName');

});
*/
/*
Route::group(['prefix'=> 'users', 'middleware' => 'auth'],function(){

    //set of routes
    Route::get('/', function (){
        return ' work';
    });

    Route::get('show','UserController@showAdminName');
    Route::delete('delete','UserController@showAdminName');
    Route::get('edit','UserController@showAdminName');
    Route::put('users','UserController@showAdminName');


Route::get('check', function() {
    return 'middleware';
})->middleware('auth');


Route::get('lamiss','Front\UserController@Getindex');
Route::get('about','Front\UserController@GetAbout');
Route::get('home1','Front\UserController@Gethome');
/*Route::group(['namespace'=>'Front'],function (){
    Route::get('index0','UserController@Getindex');

});

Route::get('/home', function () {
    return 'welcome';
});

Route::get('/home/{id}', function ($id) {
    return 'welcome to home id number '.$id;
})->name('home');

/*Route::namespace('Front')->group(function(){

    //all route  only access controller or methods in folder name Front
    Route::get('users','UserController@showAdminName');
});

Route::group(['namespace'=>'Admin'],function (){
    Route::get('admin-panel','SecondController@showString1')->middleware('auth');
    Route::get('index','SecondController@showString2');
    Route::get('index2','SecondController@index')->middleware('auth');
});

Route::get('login',function (){
    return 'must be login to see this ';
})->name('login');

/*Route::get('second','Admin\SecondController@showString');*/

/*Route::group(['middleware'=>'auth'],function(){
    Route::get('users','UserController@index')->middleware('auth');
});


Route::resource('news','NewsController');

/*
Route::get('news','NewsController@show');
Route::post('news','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('news/{id}/edit','NewsController@edit');
Route::post('update/{id}','NewsController@update');
Route::delete('news/{id}','NewsController@delete');
*/

Auth::routes(['verify'=>true]);



Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');
Route::get('/', function () {
    return'Home';
});

