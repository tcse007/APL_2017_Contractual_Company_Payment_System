@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        
            <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1> User </h1><hr>
            <div class="panel panel-default" >
                
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>   
                                <th>Phone Number</th> 
                                <th>Role Name</th> 
                                <th>Active</th> 
     
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>       
                            @foreach($users as $user)
                                @if($user->rolename!='Admin' && $user->approve == 1)                          
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->contact_no}}</td>
                                        <td>{{$user->rolename}}</td>
                                        
                                            <td>Approved</td>
                                        <td style="text-align:center"> 

                                             <a  onclick="return check()" href="<?=URL::to('admin/home/user_disable',array($user->id))?>" class="btn btn-warning">
                                            
                                                <span class="glyphicon glyphicon-trash"></span>Disable</a>
                                            
                
                                            <a  onclick="return check()" href="<?=URL::to('admin/home/user_delete',array($user->id))?>" class="btn btn-danger">
                                            
                                                <span class="glyphicon glyphicon-trash"></span>Detete</a>
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
