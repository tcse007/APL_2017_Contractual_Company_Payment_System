
<?php
use App\User;
use App\Contract_detail;
/*
|------
--------------------------------------------------------------------
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


//admin routs

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin/home', function () {
		$users=User::all();
	    return view('admin.home',compact('users'));
	});
});
Route::get('admin/user_request', function () {
		$users=User::all();
	    return view('admin.user_request',compact('users'));
});

Route::get('admin/home/user_delete/{id}','AdminController@delete');
Route::get('admin/home/user_disable/{id}','AdminController@disable');

//'admin/home/user_disable
Route::get('admin/home/user_edit/{id}','AdminController@edit');
Route::get('admin/home/user_update/{id}','AdminController@update');
Route::get('admin/home/deleteunregistereduser/{id}','AdminController@deleteUnregisteredUser');


Route::get('admin/contract_request', function () {

        $contract_details=Contract_detail::all();
        //var_dump($contract_details->user->name);
        return view('admin.contract_request',compact('contract_details'));
});
Route::get('admin/send_request/{id}', function ($id) {
        $contract_detail=Contract_detail::find($id);
        $users=User::all();
        return view('admin.send_request',compact('contract_detail','users'));
});

 Route::post('admin/send_request/store/','AdminController@store');

 
//// end admin routes



/// client routs


Route::get('/client/home', function () {
    return view('client/home');
});


Route::get('/client/make_contract', function () {
    return view('client/make_contract');

});

Route::post('/client/make_contract/store','ClientController@store');

Route::get('/client/active_contract', function () {
    return view('client/active_contract');
});



/// end client routs



///Staff Routs
// Route::get('/staff/home', function () {

//     $contract_details=Contract_detail::all();
//     return view('staff/home');
// });


Route::get('/staff/home', function () {
    $id=Auth::user()->id;
    $users=User::find($id);
    return view('staff/home',compact('users'));
});






Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/home', function () {
    return view('home');
});