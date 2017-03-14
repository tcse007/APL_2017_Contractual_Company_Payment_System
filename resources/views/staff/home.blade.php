@extends('staff.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1> Contract Request</h1><hr>
            <div class="panel panel-default" >

               <!--  <div class="panel-heading">User Listing</div> -->
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>   
                                <th>Phone Number</th> 
                                <th>Payment</th> 
                                <th>Starting Date</th> 
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>       
                        
                        @foreach($users->contract_detail as $contract_detail)
                            <tr>
                               
                                <td>{{$contract_detail->user->name}}</td>
                                <td>{{$contract_detail->user->contact_no}}</td>
                                <td>{{$contract_detail->payment_for_staff_monthly}}</td>
                                <td>{{$contract_detail->start_date}}</td>
                                
                               
                                <td style="text-align:center">  

                                    <a  href="<?=URL::to('admin/send_request',array($contract_detail->id))?>"  class="btn btn-primary"><span class="glyphicon glyphicon-edit">Send Request</a>

                                    <a  onclick="return check()" href="<?=URL::to('admin/home/user_delete',array($contract_detail->id))?>" class="btn btn-danger">

                                        <span class="glyphicon glyphicon-trash"></span>Detete</a>
                                    </td>
                                  
                                @endforeach
                           
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection