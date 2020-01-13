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
//---------------------------- ----------------------------------------------------


// -------------------------------------------------------------
//Add admin user 
Route::get('/admin-user-show','AdminController@index')->name('showAdminuser');

Route::get('/admin-user-add','AdminController@create')->name('AddAdminuser');

Route::post('/admin-user-post','AdminController@store')->name('Add-user');

Route::delete('admin-user/{id}','AdminController@destroy');
// -------------------------------------------------------------



Route::get('/admin-home ','AdminHomeController@dashboard')->name('dashboard');
//Route::get('/UserHome','UserHomeController@index')->name('userhome');

//--------------------------------------------------------------------------------

Route::get('/','UserHomeController@index')->name('userhome');

Route::get('/about','UserHomeController@about')->name('about');

Route::get('product-category/{id}','UserHomeController@category')->name('productcategory');

Route::get('single-product/{id}','UserHomeController@singleproduct')->name('singleproduct');

Route::post('/massage','UserHomeController@massage')->name('massage');
//---------------------------------------------------------------------------------
//Admin Login Routes

Route::get('/admin-login', 'Auth\Admin_LoginController@Admin_showLoginForm');

Route::post('/submit_admin_login', 'Auth\Admin_LoginController@login')->name('admin_login');

// defining the gard in auhenticateUser.php for the admin becaue it can mange the user account and the admin account difference to understand the details of guard the shoppingHUB->config folder->auth->files has all of these settings

//---------------------------------------------------------------------------------
Route::get('/admin-massage-show','BannerController@showmassage')->name('Admin_mass');
//---------------------------------------------------------------------------------
Route::get('/admin-banner-show','BannerController@show')->name('banner');


Route::get('/admin-banner-create','BannerController@create')->name('banner_create');

Route::post('/banner-store','BannerController@store')->name('postbanner');

Route::delete('banner/{id}','BannerController@destroy');

Route::get('banner/{id}','BannerController@edit');

Route::put('banner-edit/{id}','BannerController@update')->name('editbanner');
// --------------------------------------------------------------------------------

Route::get('/admin-product-show','ProductController@show')->name('product');

Route::get('/admin-product-create','ProductController@create')->name('product_create');

Route::post('/product-store','ProductController@store')->name('ppost');

Route::delete('product/{id}','ProductController@destroy');

Route::get('product/{id}','ProductController@edit');

Route::put('product-edit/{id}','ProductController@update')->name('editproduct');
//--------------------------------------------------------------------------------------

Route::get('/admin-category-show','CategoryController@show')->name('category');

Route::get('/admin-category-create','categoryController@create')->name('category_create');

Route::post('/category-store','CategoryController@store')->name('categoryshow');

Route::delete('category/{id}','CategoryController@destroy');

Route::get('category/{id}','CategoryController@edit');

Route::put('category-edit/{id}','CategoryController@update')->name('editcategory');
// ------------------------------------------------------------------------------------


Route::get('/banner', 'UserHomeController@banner-store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

