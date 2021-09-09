@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule create') }}</div>
                    
                <div class="card-body">

                    <form action="{{route('schadule:store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">

                            <lable>Title</lable>
                            <input type="text" name="title" class ="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Description</lable>
                            <textarea name="description" class ="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <lable>Attachment</lable>
                            <input type="file" name="attachment" class ="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primari">Create new</button>
                            <a class = "btn btn-link" href = "{{route('schadule:index')}}">Back</a>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
