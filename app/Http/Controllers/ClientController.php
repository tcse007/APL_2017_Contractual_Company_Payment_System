<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract_detail;
use Auth;

class ClientController extends Controller
{
   public function store(Request $request){
   $contract_detail= new Contract_detail();
   $contract_detail->monthly_workingday=$request->monthly_workingday;
   $contract_detail->client_id=Auth::user()->id;
   $date=$request->start_date;
   $date = strtotime($date);
   $new_date=date('Y-m-d', $date);
   $contract_detail->start_date=$new_date;
   $contract_detail->payment_from_client_monthly=$request->payment_from_client_monthly;
   $contract_detail->month_limit=$request->month_limit;
   $contract_detail->save();
   var_dump($date);
   return redirect('client/home');
 }
}
