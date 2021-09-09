@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session()->has('alert'))
        <div class="alert {{session()->get('alert-type')}}" role = "alert">
        {{session()->get('alert')}}
        </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Index Kereta') }}
                    <div class = "float-right">
                        <form action="" method="">
                            <div class ="input-group">
                                <input type="type" class="form-control" name="keyword" value="{{request()->get('keyword')}}"/>
                                <div class="input-group-append">
                                    <button class="btn btn-warning" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav mr-auto">
                        <li class = "nav-item">
                            <a href="{{route('car:create')}}" class="btn btn-info">Create</a>
                        </li>  
                    </ul>
                </div>
                <div class="card-body">

                <table class = "table">
                    <thead>
                        <th>No.</th>
                        <th>model</th>
                        <th>Plate number</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                    <?php $total = 0; ?>
                    @foreach ($cars as $car)
                        <tr>
                            <td><?php $total = $total + 1; echo $total;?></td>
                            <td>{{$car->model}}</td>  
                            <td>{{$car->plate_number}}</td>  
                            <td><a href="{{route('car:show',$car)}}" class="btn btn-primary" >View </a>
                                <a href="{{route('car:edit',$car)}}" class="btn btn-success" >Edit </a>
                                <a onclick="return confirm('Betul ke nak delete')" href="{{route('car:delete',$car)}}" class="btn btn-danger" >Delete</a>
                            </td>                            
                        </tr>
                    
                    </tbody>
                    @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection