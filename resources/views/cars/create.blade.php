@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('car create') }}</div>
                    
                <div class="card-body">

                    <form action="{{route('car:store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">

                            <lable>Model</lable>
                            <input type="text" name="model" class ="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Plate Number</lable>
                            <input type="text" name="plate_number" class ="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Gamba Kereta</lable>
                            <input type="file" name="attachment" class ="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primari">Create new</button>
                            <a class = "btn btn-link" href = "{{route('car:index')}}">Back</a>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection