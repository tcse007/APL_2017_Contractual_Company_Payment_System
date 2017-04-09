@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1> Active Contract</h1><hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><center>Duty Date</center></th> 
                                <th style="text-align:center">Status</th>
                            </tr>
                        </thead>
                        <tbody>       
                           @foreach($duty as $duty1)
                            <tr>

                            @if($duty1->contract_id == $id)

                            <td style="text-align:center">
                                
                                {{$duty1->duty_date}}
                            </td>


                            @if($duty1->approved_by_client == 1)

                            <td style="text-align:center">
                                
                                Approved
                            </td>
                            @else
                            <td style="text-align:center">
                                Pending
                            </td>
                            @endif

                            @endif
                           @endforeach
                            </tr>
                              
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

