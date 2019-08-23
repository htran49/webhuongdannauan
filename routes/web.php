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

Route::get('/','homeController@showhome');
Route::get('showlogin','loginController@checklogin');
Route::post('showlogin/login','loginController@LoginAuth');
route::get('logout','loginController@Logout');
Route::get('listblog','listblogController@listblog');
Route::get('cong-thuc/{id}','CongthucController@congThuc');
Route::get('blog/{id}','blogController@blog');
Route::group(['prefix'=>'blog'],function(){
    Route::get('{id}','blogController@blog');
    Route::get('blog/{id}','blogController@blog');
});
Route::group(['prefix'=>'loai'],function(){
    Route::get('{id}','listrecipeController@category');
    Route::get('cong-thuc/{id}','CongthucController@congThuc');
});
Route::post('/cong-thuc/comment/{id}','commentController@Them');

Route::get('admin','adminController@showAdmin');



Route::get('/admin-danhmuc-danhsach','adminController@danhSachDanhMuc');
Route::get('admin-danhmuc-them','adminController@showThemDanhMuc');
Route::post('admin-danhmuc-danhsach/them','adminController@insertDanhMuc');
Route::get('/admin-danhmuc-danhsach/sua/{id}','adminController@showUpdateDanhMuc');
Route::post('/admin-danhmuc-danhsach/sua','adminController@updateDanhMuc');
Route::get('/admin-danhmuc-danhsach/xoa/{id}','adminController@deleteDanhMuc');


Route::get('/admin-danhmuc1-danhsach','adminController@danhSachDanhMuc1');
Route::get('admin-danhmuc1-them','adminController@showThemDanhMuc1');
Route::post('admin-danhmuc1-danhsach/them','adminController@insertDanhMuc1');
Route::get('/admin-danhmuc1-danhsach/sua/{id}','adminController@showUpdateDanhMuc1');
Route::post('/admin-danhmuc1-danhsach/sua','adminController@updateDanhMuc1');
Route::get('/admin-danhmuc1-danhsach/xoa/{id}','adminController@deleteDanhMuc1');


Route::get('/admin-danhmuc2-danhsach','adminController@danhSachDanhMuc2');
Route::get('admin-danhmuc2-them','adminController@showThemDanhMuc2');
Route::post('admin-danhmuc2-danhsach/them','adminController@insertDanhMuc2');
Route::get('/admin-danhmuc2-danhsach/sua/{id}','adminController@showUpdateDanhMuc2');
Route::post('/admin-danhmuc2-danhsach/sua','adminController@updateDanhMuc2');
Route::get('/admin-danhmuc2-danhsach/xoa/{id}','adminController@deleteDanhMuc2');


Route::get('/admin-baiviet-danhsach','adminController@danhSachBaiViet');
Route::get('admin-baiviet-them','adminController@showThemBaiViet');
Route::post('admin-baiviet-danhsach/them','adminController@insertBaiViet');
Route::get('/admin-baiviet-danhsach/sua/{id}','adminController@showUpdateBaiViet');
Route::post('/admin-baiviet-danhsach/sua','adminController@updateBaiViet');
Route::get('/admin-baiviet-danhsach/xoa/{id}','adminController@deleteBaiViet');



Route::get('/admin-blog-danhsach','adminController@danhSachBlog');
Route::get('admin-blog-them','adminController@showThemBlog');
Route::post('admin-blog-danhsach/them','adminController@insertBlog');
Route::get('/admin-blog-danhsach/sua/{id}','adminController@showUpdateBlog');
Route::post('/admin-blog-danhsach/sua','adminController@updateBlog');
Route::get('/admin-blog-danhsach/xoa/{id}','adminController@deleteBlog');

Route::get('/admin-slide-danhsach','adminController@danhSachSlide');
Route::get('admin-slide-them','adminController@showThemSlide');
Route::post('admin-slide-danhsach/them','adminController@insertSlide');
Route::get('/admin-slide-danhsach/sua/{id}','adminController@showUpdateSlide');
Route::post('/admin-slide-danhsach/sua','adminController@updateSlide');
Route::get('/admin-slide-danhsach/xoa/{id}','adminController@deleteSlide');