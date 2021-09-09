@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Car show') }}</div>
                    
                <div class="card-body">


                        <div class="form-group">

                            <lable>Model</lable>
                            <input type="text" name="model" class ="form-control" value="{{$car->model}}" readonly>
                        </div>

                        <div class="form-group">
                            <lable>Plate Number</lable>
                            <input type="text" name="plate_number" class ="form-control" value="{{$car->plate_number}}" readonly>
                        </div>
                        <div class="form-group">
                            <a class = "btn btn-link" href = "{{route('car:index')}}">Back</a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection