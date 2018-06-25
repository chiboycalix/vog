<?php
use App\Comment;
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


//pages routes
Route::get('/', ['uses'=>'PagesController@index', 'as'=>'pages.index']);
Route::post('contact', ['uses'=>'PagesController@contact','as'=>'pages.contact']);

//members routes
Route::get('members', ['uses'=>'MembersController@index', 'as'=>'members']);
Route::get('members/show/{id}', ['uses'=>'MembersController@show','as'=>'members.show']);

//Login Routes
Route::get('login', ['uses'=>'LoginController@index','as'=>'login.index']);
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');

//Dashboard routes
Route::get('dashboard', ['uses'=>'DashboardController@index', 'as'=>'dashboard']);
Route::get('dashboard/create-members', ['uses'=>'DashboardController@create', 'as'=>'dashboard.create']);
Route::post('dashboard/store-members', ['uses'=>'DashboardController@store', 'as'=>'dashboard.store-members']);
Route::get('dashboard/show-members/{id}', ['uses'=>'DashboardController@show','as'=>'dashboard.show-members']);
Route::get('dashboard/create-mwt', ['uses'=>'DashboardController@create2', 'as'=>'mwt.create-mwt']);
Route::post('dashboard/store-mwt', ['uses'=>'DashboardController@store2', 'as'=>'dashboard.store-mwt']);
Route::get('dashboard/show-mwt/{id}', ['uses'=>'DashboardController@show2','as'=>'dashboard.show-mwt']);

//Make we talk routes
Route::get('mwt/show-mwt/{id}', ['uses'=>'MwtController@show2','as'=>'mwt.show2']);

//Home routes
Route::get('/default', ['uses' => 'DefaultController@index', 'as'=>'default.index']);

//Post routes
Route::get('posts/create', ['uses'=>'PostController@create','as' =>'posts.create']);
Route::post('posts/store', ['uses'=>'PostController@store', 'as'=>'posts.store']);
Route::get('posts/show/{id}', ['uses'=>'PostController@show','as'=>'posts.show']);
Route::get('posts/index', ['uses' =>'PostController@index', 'as'=>'posts.index']);

//comments routes
Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as'=>'comments.store']);
Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit','as'=>'comments.edit']);
Route::put('comments/{id}',['uses'=>'CommentsController@update','as'=>'comments.update']);
Route::delete('comments/{id}',['uses'=>'CommentsController@destroy','as'=>'comments.destroy']);
Route::get('comments/{id}/delete',['uses'=>'CommentsController@delete','as'=>'comments.delete']);

//Categories routes
Route::resource('categories','CategoryController',['except'=>'create']);
Route::get('categories/{category}', ['uses'=>'CategoryController@showall', 'as'=>'categories.showall']);

//Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Migration from Model
Route::get('/table/migrate/{model}', function($model){
$model = '\App\\' .studly_case($model);
$model::migrate();
});


// Route::get('/test', function(){
//     $te = bcrypt(111111);
//     return $te;
// });


// Route::get('send', function(){
//  		$data = array(
//             'email'=> 'aminu@gmail.com',
//             'subject'=> 'dsadsfasdfa',
//             'name'=> 'asdfasdfasdfasdfasd',
//             'body'=> 'adfadsf asdf asdf asdf adsf ads fasd fasdf',
//         );


// 	  Mail::send('emails.contact', $data, function($msg) use ($data){
//                 $msg->from($data['email']);
//                 $msg->to('igwechinonso77@gmail.com');
//                 $msg->subject($data['subject']);
//         });

	
// });

