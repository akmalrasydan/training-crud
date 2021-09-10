@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if(session()->has('alert'))
        <div class="alert {{session()->get('alert-type')}}" role = "alert">
        {{session()->get('alert')}}
        </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Schedule Index ') }}
                    <div class = "float-right">
                        <form action="" method="">
                            <div class ="input-group">
                                <input type="type" class="form-control" name="keyword" value="{{request()->get('keyword')}}"/>
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav mr-auto">
                        <li class = "nav-item">
                            <a href="{{route('schadule:create')}}" class="btn btn-warning">Tambah</a>
                        </li>  
                    </ul>
                </div>
                <div class="card-body">

                <table class = "table">
                    <thead>
                        <th>No.</th>
                        <th>Title</th>
                        <th>ID / User Name</th>
                        <th>Last Update</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                    <?php $total = 0; ?>
                        @foreach ($schadules as $schadule)
                        <tr>
                            <td><?php $total = $total + 1; echo $total;?></td>
                            <td>{{$schadule->title}}</td>  
                            <td>{{$schadule->user->id}} / {{$schadule->user->name}}</td>  
                            <td>{{$schadule->updated_at}}</td> 
                            <td><a href="{{route('schadule:show',$schadule)}}" class="btn btn-primary" >View </a>
                                <a href="{{route('schadule:edit',$schadule)}}" class="btn btn-success" >Edit </a>
                                <a onclick="return confirm('Betul ke nak delete')" href="{{route('schadule:delete',$schadule)}}" class="btn btn-danger" >Delete</a>
                            </td>                        
                        </tr>
                        @endforeach
                    </tbody>

                </table>

                {{$schadules->appends(['keyword' => request()->get('keyword')])->links()}} 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
