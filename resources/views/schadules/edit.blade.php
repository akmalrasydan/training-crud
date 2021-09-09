@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule Update') }}</div>
                    
                <div class="card-body">

                    <form action="" method="POST">
                        @csrf

                        <div class="form-group">

                            <lable>Title</lable>
                            <input type="text" name="title" class ="form-control" value="{{$schadule->title}}"> 
                        </div>

                        <div class="form-group">
                            <lable>Description</lable>
                            <textarea name="description" class ="form-control">{{$schadule->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primari">Update</button>
                            <a class = "btn btn-link" href = "{{route('schadule:index')}}">Back</a>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection