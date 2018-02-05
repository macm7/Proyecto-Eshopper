<?php

Auth::routes();

Route::get('/','FrontController@home')->name('index');
Route::get('/blog','FrontController@blog')->name('blogs');
Route::get('/shop','FrontController@productos')->name('shop');
Route::get('/shop/category/{id}','FrontController@productosCategory')->name('shop.cat');
Route::get('/shop/{id}/details','FrontController@productDetails')->name('shop.details');
Route::post('/shop/{id}/details','ReviewController@create')->name('shop.review');
Route::get('/blog/{id}/details','FrontController@blogDetails')->name('blog.details');
Route::post('/blog/{id}/details', 'CommentController@create')->name('blog.comment');
Route::get('/contact-us','FrontController@contact')->name('contact-us');
Route::post('/sendMail','FrontController@sendMail')->name('mail');

Route::resource('/admin/home', 'HomeController', ['names' => [
    'index' => 'home.index',
    'create' => 'home.create',
    'store' => 'home.store',
    'edit' => 'home.edit',
    'update' => 'home.update',
    'destroy' => 'home.destroy'
    ]]);

Route::resource('/admin/blog', 'BlogController', ['names' => [
    'index' => 'blog.index',
    'create' => 'blog.create',
    'store' => 'blog.store',
    'edit' => 'blog.edit',
    'update' => 'blog.update',
    'destroy' => 'blog.destroy'
    ]]);

Route::resource('/admin/comment', 'CommentController', ['names' => [
    'index' => 'comment.index',
    'create' => 'comment.create',
    'store' => 'comment.store',
    'edit' => 'comment.edit',
    'update' => 'comment.update',
    'destroy' => 'comment.destroy' 
]]);

Route::resource('/admin/tag', 'TagController', ['names' => [
    'index' => 'tag.index',
    'create' => 'tag.create',
    'store' => 'tag.store',
    'edit' => 'tag.edit',
    'update' => 'tag.update',
    'destroy' => 'tag.destroy' 
]]);

Route::resource('/admin/products', 'ProductController', ['names' => [
    'index' => 'products.index',
    'create' => 'products.create',
    'store' => 'products.store',
    'edit' => 'products.edit',
    'update' => 'products.update',
    'destroy' => 'products.destroy' 
]]);

Route::resource('/admin/review', 'ReviewController', ['names' => [
    'index' => 'review.index',
    'create' => 'review.create',
    'store' => 'review.store',
    'edit' => 'review.edit',
    'update' => 'review.update',
    'destroy' => 'review.destroy' 
]]);

Route::resource('/admin/category', 'CategoryController', ['names' => [
    'index' => 'category.index',
    'create' => 'category.create',
    'store' => 'category.store',
    'edit' => 'category.edit',
    'update' => 'category.update',
    'destroy' => 'category.destroy' 
]]);

Route::resource('/admin/contact', 'ContactoController', ['names' => [
    'index' => 'contact.index',
    'create' => 'contact.create',
    'store' => 'contact.store',
    'edit' => 'contact.edit',
    'update' => 'contact.update',
    'destroy' => 'contact.destroy' 
]]);

Route::resource('/admin/slider', 'SliderController', ['names' => [
    'index' => 'slider.index',
    'create' => 'slider.create',
    'store' => 'slider.store',
    'edit' => 'slider.edit',
    'update' => 'slider.update',
    'destroy' => 'slider.destroy' 
 ]]);

 //user rols & permissions
Route::get('users/{user_id}/roles/{role_name}', 'UserController@attachUserRole');
Route::get('users/{user_id}/roles', 'UserController@getUserRole');

Route::post('role/permission/add', 'UserController@attachPermission');
Route::get('role/permissions', 'UserController@getPermissions');

Route::resource('/admin/roles', 'RoleController', ['names' => [
    'index' => 'roles.index',
    'create' => 'roles.create',
    'store' => 'roles.store',
    'edit' => 'roles.edit',
    'update' => 'roles.update',
    'destroy' => 'roles.destroy' 
 ]]);

 Route::resource('/admin/users', 'UserController', ['names' => [
    'index' => 'users.index',
    'create' => 'users.create',
    'store' => 'users.store',
    'edit' => 'users.edit',
    'update' => 'users.update',
    'destroy' => 'users.destroy' 
 ]]);
		/*Route::get('admin/roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:crear-rol|modificar-rol|consultar-rol|eliminar-rol']]);
		Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:crear-rol']]);
		Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:crear-rol']]);
		Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
		Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:modificar-rol']]);
		Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:modificar-rol']]);
		Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:eliminar-rol']]);
*/

		/*Route::get('admin/users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:crear-usuario|modificar-usuario|consultar-usuario|eliminar-usuario']]);
		Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:crear-usuario']]);
		Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:crear-usuario']]);
		Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
		Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:modificar-usuario']]);
		Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:modificar-usuario']]);
		Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:eliminar-usuario']]);

}); */

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('home');
