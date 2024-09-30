@extends('layouts.auth.app')
@section('title', 'User')
@section('content')
<br>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pengguna</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        
        <div class="card-content collapse show">
            @if (Auth::user()->level=='Admin')
            <div class="card-body">
                <p>Super Admin hanya bisa menambahkan, menghapus, dan edit pada Tim Ahli</p>
                <a href="{{ url('inputuser') }}" class="btn-sm btn fa-solid fa-user-plus fa-fw">Tambah User</a>
            </div>
            @else
            
            @endif
            
        </div>
        <div class="card-content collapse show">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Foto</th>
                                {{-- <th>Total Barang</th>
                                <th>Total Harga</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users)
                                @foreach ($users as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <th scope="row">{{$data-> name }}</th>
                                        <th scope="row">{{$data-> email}}</th>
                                        <th scope="row">{{$data-> level}}</th>
                                        <th scope="row"><img width="100" height="100"
                                            src="{{ url('storage/users/' . $data->foto) }}"></th>
                                        {{-- <th scope="row">Rp. {{ number_format($data->harga * $data->jumlah) }}</th>
                                        <th scope="row">
                                            <a href="{{ url('ketpenjualan/' . $data->iddetail) }}"
                                                style="text-decoration: none" class="me-3">Keterangan</a>
                                        </th>  --}}
                                        <th scope="row">
                                            <a href="{{url ('deleteuser/'.$data->id)}}" class="btn-sm btn-danger fa fa-trash ">Hapus</a>
                                        </th>
                                    </tr>
                                    
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection