@extends('client.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            
            <div class="panel panel-default" >          
              <!--   <div class="panel-heading"> </div> -->
                <div class="panel-body">  
                    <center>
                    <a  href="<?=URL::to('client/active_contract')?>"  class="btn btn-primary"><span class="glyphicon glyphicon-edit">Active Contract</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
