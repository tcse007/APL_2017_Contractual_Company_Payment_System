<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contract_detail;

class AdminController extends Controller
{
    public function edit($id){
		$user= User::find($id)->where('id',$id)->first();    
		return view('admin.edit',compact('user'));
	}
	public function update($id){
		
		$user= User::find($id);
		$user->approve=1;
		$user->save();
		return redirect('admin/user_request');
	}
	public function delete($id){
		User::find($id)->delete();    
		return redirect('admin/home');
	}

	public function deleteUnregisteredUser($id){

		User::find($id)->delete();    
		return redirect('admin/user_request');

	}


 	public function disable($id){
        $user= User::find($id);
		$user->approve=0;
		$user->save();

		return redirect('admin/home');

	}

		public function store(Request $request){
		$id=$request->id;
		$contract_details=Contract_detail::find($id);
		$contract_details->staff_id=$request->staff_id;
		$contract_details->payment_for_staff_monthly=$request->payment_for_staff_monthly;
		
		$contract_details->save();
		return redirect('admin/contract_request');
}

}
