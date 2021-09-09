@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <center>{{ __('You are logged in!') }}</center>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>



                <div class="card-body">

                <table class = "table">
                    <thead>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                    
                        <tr>
                            <td></td>
                            <td></td>  
                            <td></td>  
                            <td></td>                           
                        </tr>
                    
                    </tbody>

                </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
