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

//frontend
Route::get('/', 'FrontController@index');
Route::get('post/{slug}', ['as' => 'blog_post', 'uses' => 'FrontController@showPost'])->where('slug', '[A-Za-z0-9-_]+');
Route::get('blog', 'FrontController@blog');

//backend
Route::group(['middleware' => 'web', 'prefix' => 'backscreen'],  function () {
Route::get('/login', 'HomeController@home');
Auth::routes();
Route::get('/', 'HomeController@index');
/*Route::get('/', 'BackscreenController@index');*/
Route::get('/blog_post/cari', 'Blog_postController@cari');

/*Route::get('backscreen/dashboard', function () {
	return view('back.dashboard.index');
});*/

/**Route::get('backscreen/blog', function () {
	return view('back.blog.index');
});

Route::get('backscreen/blog/create', function () {
	return view('back.blog.create');
});**/

/*Route::get('backscreen/galeri', function () {
	return view('back.galeri.index');
});*/

Route::resource('blog_post', 'Blog_postController');
Route::resource('galeri', 'GaleriController');
Route::resource('blog_tag', 'Blog_tagController');
Route::resource('blog_post_tag', 'Blog_post_tagController');
Route::resource('blog_categories', 'Blog_categoriesController');
Route::resource('filter_galeri', 'Filter_galeriController');

Route::get('/logout', array('uses' => 'HomeController@logout'));

});

