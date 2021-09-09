@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booking') }}</div>
                    
                <div class="card-body">

                    <form action="{{route('pulang:store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-header"><center>{{ __('Lokasi Semasa') }}</center></div>
                        <div class="form-group">
                            <lable>Alamat</lable>
                            <input type="text" name="alamat_semasa" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Poskod</lable>
                            <input type="text" name="poskod_semasa" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Daerah</lable>
                            <input type="text" name="daerah_semasa" class ="form-control">
                        </div>
                        <div class="col-4">
                            <label>Negeri</label>
                                <select name="negeri_semasa" class="form-control">
                                    <option selected disabled>Select</option>       
                                    <option value=""></option>
                                            
                                </select>
                        </div>

                        <div class="card-header"><center>{{ __('Lokasi IPT') }}</center></div>
                        <div class="form-group">
                            <lable>Nama IPT</lable>
                            <input type="text" name="nama_ipt" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Alamat</lable>
                            <input type="text" name="alamat_destinasi" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Poskod</lable>
                            <input type="text" name="poskod_destinasi" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Daerah</lable>
                            <input type="text" name="daerah_destinasi" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Negeri</lable>
                            <input type="text" name="negeri_destinasi" class ="form-control">
                        </div>

                        <div class="card-header"><center>{{ __('Lokasi Kediaman') }}</center></div>
                        <div class="form-group">
                            <lable>Alamat</lable>
                            <input type="text" name="alamat_kediaman" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Poskod</lable>
                            <input type="text" name="poskod_kediaman" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Daerah</lable>
                            <input type="text" name="daerah_kediaman" class ="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Negeri</lable>
                            <input type="text" name="negeri_kediaman" class ="form-control">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primari">Daftar</button>
                            <a class = "btn btn-link" href = "{{route('pulang:index')}}">Kembali</a>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
