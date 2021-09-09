@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kemaskini Butiran Perjalanan') }}</div>
                    
                <div class="card-body">

                   
                <form action="" method="POST">
                        @csrf
                        <div class="card-header">{{ __('Lokasi Semasa') }}</div>
                        <div class="form-group">
                            <lable>Alamat</lable>
                            <input type="text" name="alamat_semasa" class ="form-control" value="{{$pulang->alamat_semasa}}">
                        </div>
                        <div class="form-group">
                            <lable>Poskod</lable>
                            <input type="text" name="poskod_semasa" class ="form-control" value="{{$pulang->poskod_semasa}}">
                        </div>
                        <div class="form-group">
                            <lable>Daerah</lable>
                            <input type="text" name="daerah_semasa" class ="form-control" value="{{$pulang->daerah_semasa}}">
                        </div>
                        <div class="form-group">
                            <lable>Negeri</lable>
                            <input type="text" name="negeri_semasa" class ="form-control" value="{{$pulang->negeri_semasa}}">
                        </div>

                        <div class="card-header">{{ __('Lokasi IPT') }}</div>
                        <div class="form-group">
                            <lable>Nama IPT</lable>
                            <input type="text" name="nama_ipt" class ="form-control" value="{{$pulang->nama_ipt}}">
                        </div>
                        <div class="form-group">
                            <lable>Alamat</lable>
                            <input type="text" name="alamat_destinasi" class ="form-control" value="{{$pulang->alamat_destinasi}}">
                        </div>
                        <div class="form-group">
                            <lable>Poskod</lable>
                            <input type="text" name="poskod_destinasi" class ="form-control" value="{{$pulang->poskod_destinasi}}">
                        </div>
                        <div class="form-group">
                            <lable>Daerah</lable>
                            <input type="text" name="daerah_destinasi" class ="form-control" value="{{$pulang->daerah_destinasi}}">
                        </div>
                        <div class="form-group">
                            <lable>Negeri</lable>
                            <input type="text" name="negeri_destinasi" class ="form-control" value="{{$pulang->negeri_destinasi}}">
                        </div>

                        <div class="card-header">{{ __('Lokasi Kediaman') }}</div>
                        <div class="form-group">
                            <lable>Alamat</lable>
                            <input type="text" name="alamat_kediaman" class ="form-control" value="{{$pulang->alamat_kediaman}}">
                        </div>
                        <div class="form-group">
                            <lable>Poskod</lable>
                            <input type="text" name="poskod_kediaman" class ="form-control" value="{{$pulang->poskod_kediaman}}">
                        </div>
                        <div class="form-group">
                            <lable>Daerah</lable>
                            <input type="text" name="daerah_kediaman" class ="form-control" value="{{$pulang->daerah_kediaman}}">
                        </div>
                        <div class="form-group">
                            <lable>Negeri</lable>
                            <input type="text" name="negeri_kediaman" class ="form-control" value="{{$pulang->negeri_kediaman}}">
                        </div>

                        <div class="card-header">{{ __('Butiran Perjalanan') }}</div>
                        <div class="form-group">
                            <lable>Status</lable>
                            <input type="text" name="status" class ="form-control" value="{{$pulang->status}}" >
                        </div>
                        <div class="form-group">
                            <lable>Tarikh Tolak</lable>
                            <input type="text" name="tarikh_tolak" class ="form-control" value="{{$pulang->tarikh_tolak}}" >
                        </div>
                        <div class="form-group">
                            <lable>Tarikh Sampai</lable>
                            <input type="text" name="tarikh_sampai" class ="form-control" value="{{$pulang->tarikh_sampai}}" >
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primari">Kemaskini</button>
                            <a class = "btn btn-link" href = "{{route('pulang:index')}}">Kembali</a>
                        </div>

                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
