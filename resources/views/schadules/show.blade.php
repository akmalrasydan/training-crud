@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule show') }}</div>
                    
                <div class="card-body">


                        <div class="form-group">

                            <lable>Title</lable>
                            <input type="text" name="title" class ="form-control" value="{{$schadule->title}}" readonly>
                        </div>

                        <div class="form-group">
                            <lable>Description</lable>
                            <textarea name="description" class ="form-control" readonly>{{$schadule->description}}</textarea>
                        </div>
                        
                        @if($schadule->attachment)
                        <div class="form-group">
                            <lable>Attachment (if any)</lable>
                            <a target ="_blank" href="{{ asset('storage/'.$schadule->attachment)}}" class = "btn btn-warning">Open attachment {{$schadule->attachment}}</a>
                        </div>
                        @endif

                        <div class="form-group">
                            <a class = "btn btn-link" href = "{{route('schadule:index')}}">Back</a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection