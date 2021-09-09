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
                <div class="card-header">{{ __('Senarai Butiran Perjalanan') }}
                    <div class = "float-right">
                        <form action="" method="">
                            <div class ="input-group">
                                <input type="type" class="form-control" name="keyword" value="{{request()->get('keyword')}}"/>
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="submit">Carian</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav mr-auto">
                        <li class = "nav-item">
                            <a href="{{route('pulang:create')}}" class="btn btn-warning">Tambah</a>
                        </li>  
                    </ul>
                </div>
                <div class="card-body">

                <table class = "table">
                    <thead>
                        <th>No.</th>
                        <th>Tarikh Bertolak</th>
                        <th>Tarikh Sampai</th>
                        <th>Lokasi</th>
                        <th>Institusi</th>
                        <th>Destinasi </th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </thead>

                    <tbody>
                    <?php $total = 0; ?>
                        @foreach ($pulangs as $pulang)
                        <tr>
                            <td><?php $total = $total + 1; echo $total;?></td>
                            <td>{{$pulang->tarikh_tolak}}</td>  
                            <td>{{$pulang->tarikh_sampai}}</td>  
                            <td>{{$pulang->negeri_semasa}}</td> 
                            <td>{{$pulang->nama_ipt}}</td> 
                            <td>{{$pulang->negeri_kediaman}}</td> 
                            <td >{{$pulang->status}}</td> 
                            <?php if ($pulang->status != "Telah Sampai") {?>
                            <td>
                                <a href="{{route('pulang:show',$pulang)}}" class="btn btn-primary" >Papar </a>
                                <a href="{{route('pulang:edit',$pulang)}}" class="btn btn-success" >Kemaskini </a>
                                <a onclick="return confirm('Betul ke nak delete')" href="{{route('pulang:delete',$pulang)}}" class="btn btn-danger" >Hapus</a> 
                            </td>
                            <?php } else { ?>     
                            <td>
                                <a href="{{route('pulang:show',$pulang)}}" class="btn btn-primary" >Papar </a>
                            </td> 
                            <?php } ?>  
                        </tr>
                        @endforeach
                    </tbody>

                </table>

                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
