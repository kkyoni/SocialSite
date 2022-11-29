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

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'preventBackHistory'],function(){
   
    
    Route::get('siteIsUnderConstruction',
        static function(){
        return view('underMaintenance');
    })->name('underMaintenance');
     Route::group(
        [
        'middleware'    => ['UnderMaintenance']
    ],static function(){
	Route::get('/', 'HomeController@welcome')->name('welcome');
	Route::get('/about_us','HomeController@about_us')->name('front.about_us');
	Route::get('/contact','HomeController@contact')->name('front.contact');
	Route::get('/quick_product','HomeController@quick_product')->name('front.quick_product');
	Route::post('/store_quick_product','HomeController@store_quick_product')->name('front.store_quick_product');
	Route::post('/cart_remove_product/{id}','HomeController@cart_remove_product')->name('front.cart_remove_product');
	Route::post('/store_cart_product','HomeController@store_cart_product')->name('front.store_cart_product');
	Route::post('/store_like_blog','HomeController@store_like_blog')->name('front.store_like_blog');
	Route::get('/faq','HomeController@faq')->name('front.faq');
	
	Route::get('/product','Front\ProductController@product')->name('front.product');
	Route::post('/product/loadmore', 'Front\ProductController@load_data')->name('front.product.loadmore');
	Route::get('/single_product/{id}','Front\ProductController@single_product')->name('front.single_product');
	Route::post('/bloginsert','Front\BlogController@bloginsert')->name('front.bloginsert');
	Route::get('/blog', 'Front\BlogController@blog')->name('front.blog');
	Route::post('/blog/loadmore', 'Front\BlogController@load_data')->name('front.blog.loadmore');
	Route::get('/single_blog/{id}','Front\BlogController@single_blog')->name('front.single_blog');
	Route::get('login','Auth\LoginController@showLoginForm')->name('front.showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('front.login');
    // Route::get('resetPassword','Auth\PasswordResetController@showPasswordRest')->name('front.resetPassword');
    // Route::post('sendResetLinkEmail', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('front.sendResetLinkEmail');
    // Route::get('find/{token}', 'Auth\PasswordResetController@find')->name('front.find');
    // Route::post('create', 'Auth\PasswordResetController@create')->name('front.sendLinkToUser');
    // Route::post('reset', 'Auth\PasswordResetController@reset')->name('front.resetPassword_set');
    // Route::post('/user/forgot_pwd','Front\HomeController@forgot_pwd')->name('front.forgot_pwd');
    // Route::post('forgotPassword_set', 'Front\UserController@forgot_pwd')->name('front.forgotPassword_set');
	Route::get('/logout','Front\UserController@logout')->name('front.logout');
	
	
	Route::group(['prefix' => 'front','middleware'=>'front','namespace' => 'Front','as' => 'front.'],function(){
		Route::get('/my_account','UserController@my_account')->name('my_account');
		Route::post('/updateProfileDetail','UserController@updateProfileDetail')->name('updateProfileDetail');
	});
});

	Route::get('admin','Admin\Auth\LoginController@showLoginForm')->name('admin.showLoginForm');
	Route::get('admin/login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin/login', 'Admin\Auth\LoginController@login');
	Route::get('admin/resetPassword','Admin\Auth\PasswordResetController@showPasswordRest')->name('admin.resetPassword');
	Route::post('admin/sendResetLinkEmail', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.sendResetLinkEmail');
	Route::get('admin/find/{token}', 'Admin\Auth\PasswordResetController@find')->name('admin.find');
	Route::post('admin/create', 'Admin\Auth\PasswordResetController@create')->name('admin.sendLinkToUser');
	Route::post('admin/reset', 'Admin\Auth\PasswordResetController@reset')->name('admin.resetPassword_set');
	Route::group(['prefix' => 'admin','middleware'=>'Admin','namespace' => 'Admin','as' => 'admin.'],function(){
		Route::get('/dashboard','MainController@dashboard')->name('dashboard');
		Route::get('/logout','Auth\LoginController@logout')->name('logout');

		//====================> Update Admin Profile =========================
		Route::get('/profile','UsersController@updateProfile')->name('profile');
		Route::post('/updateProfileDetail','UsersController@updateProfileDetail')->name('updateProfileDetail');
		Route::post('/updatePassword','UsersController@updatePassword')->name('updatePassword');

		//====================> Users Management =========================
		Route::get('/user','UsersController@index')->name('user.index');
		Route::post('/user/delete/{id}','UsersController@delete')->name('user.delete');
		Route::get('/user/show','UsersController@show')->name('user.show');
		Route::post('/user/change_status','UsersController@change_status')->name('user.change_status');
		
		//====================> Product Management =========================
		Route::get('/product','ProductController@index')->name('product.index');
		Route::get('/product/create','ProductController@create')->name('product.create');
		Route::post('/product/store','ProductController@store')->name('product.store');
		Route::post('/product/delete/{id}','ProductController@delete')->name('product.delete');
		Route::get('/product/show','ProductController@show')->name('product.show');
		Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
		Route::post('/product/update/{id}','ProductController@update')->name('product.update');
		Route::post('/product/change_status','ProductController@change_status')->name('product.change_status');
		Route::get('/product/product_comment/{id}','ProductController@product_comment')->name('product.product_comment');
		Route::get('/product/remove_productImage/{id}','ProductController@remove_productImage')->name('product.remove_productImage');

		//====================> Colors Management =========================
		Route::get('/colors','ColorsController@index')->name('colors.index');
		Route::get('/colors/create','ColorsController@create')->name('colors.create');
		Route::post('/colors/store','ColorsController@store')->name('colors.store');
		Route::post('/colors/delete/{id}','ColorsController@delete')->name('colors.delete');
		Route::get('/colors/show','ColorsController@show')->name('colors.show');
		Route::get('/colors/edit/{id}','ColorsController@edit')->name('colors.edit');
		Route::post('/colors/update/{id}','ColorsController@update')->name('colors.update');
		Route::post('/colors/change_status','ColorsController@change_status')->name('colors.change_status');

		//====================> Brand Management =========================
		Route::get('/brand','BrandController@index')->name('brand.index');
		Route::get('/brand/create','BrandController@create')->name('brand.create');
		Route::post('/brand/store','BrandController@store')->name('brand.store');
		Route::post('/brand/delete/{id}','BrandController@delete')->name('brand.delete');
		Route::get('/brand/show','BrandController@show')->name('brand.show');
		Route::get('/brand/edit/{id}','BrandController@edit')->name('brand.edit');
		Route::post('/brand/update/{id}','BrandController@update')->name('brand.update');
		Route::post('/brand/change_status','BrandController@change_status')->name('brand.change_status');

		//====================> Blog Management =========================
		Route::get('/blog','BlogController@index')->name('blog.index');
		Route::get('/blog/create','BlogController@create')->name('blog.create');
		Route::post('/blog/store','BlogController@store')->name('blog.store');
		Route::post('/blog/delete/{id}','BlogController@delete')->name('blog.delete');
		Route::get('/blog/show','BlogController@show')->name('blog.show');
		Route::get('/blog/edit/{id}','BlogController@edit')->name('blog.edit');
		Route::post('/blog/update/{id}','BlogController@update')->name('blog.update');
		Route::post('/blog/change_status','BlogController@change_status')->name('blog.change_status');
		Route::get('/blog/blog_comment/{id}','BlogController@blog_comment')->name('blog.blog_comment');
		Route::post('/blog/loadmorecomment', 'BlogController@loadmorecomment')->name('blog.loadmorecomment');
		
		//====================> Blog Management =========================
		Route::get('/cms','CmsController@index')->name('cms.index');
		Route::post('/cms/delete/{id}','CmsController@delete')->name('cms.delete');
		Route::get('/cms/show','CmsController@show')->name('cms.show');
		Route::get('/cms/edit/{id}','CmsController@edit')->name('cms.edit');
		Route::post('/cms/update/{id}','CmsController@update')->name('cms.update');
		Route::post('/cms/change_status','CmsController@change_status')->name('cms.change_status');

		//====================> Blog Management =========================
		Route::get('/contact','ContactController@index')->name('contact.index');
		Route::post('/contact/delete/{id}','ContactController@delete')->name('contact.delete');
		Route::get('/contact/show','ContactController@show')->name('contact.show');

		//====================> Faq Management =========================
		Route::get('/faq','FaqController@index')->name('faq.index');
		Route::get('/faq/create','FaqController@create')->name('faq.create');
		Route::post('/faq/store','FaqController@store')->name('faq.store');
		Route::post('/faq/delete/{id}','FaqController@delete')->name('faq.delete');
		Route::get('/faq/show','FaqController@show')->name('faq.show');
		Route::get('/faq/edit/{id}','FaqController@edit')->name('faq.edit');
		Route::post('/faq/update/{id}','FaqController@update')->name('faq.update');
		Route::post('/faq/change_status','FaqController@change_status')->name('faq.change_status');

		//====================> Slider Management =========================
		Route::get('/slider','SliderController@index')->name('slider.index');
		Route::get('/slider/create','SliderController@create')->name('slider.create');
		Route::post('/slider/store','SliderController@store')->name('slider.store');
		Route::post('/slider/delete/{id}','SliderController@delete')->name('slider.delete');
		Route::get('/slider/show','SliderController@show')->name('slider.show');
		Route::get('/slider/edit/{id}','SliderController@edit')->name('slider.edit');
		Route::post('/slider/update/{id}','SliderController@update')->name('slider.update');
		Route::post('/slider/change_status','SliderController@change_status')->name('slider.change_status');
	});
});