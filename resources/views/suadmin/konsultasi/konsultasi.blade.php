@extends('layouts.auth.app')
@section('title', 'Konsultasi')
@section('content')
<br>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">KONSULTASI</h4>
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Konsultasi</th>
                                <th>Tanggal Konsultasi</th>
                                <th>Deskripsi</th>
                                @if (Auth::user()->level=='Admin')
                                    <th>Nama Ahli</th>
                                    <th>Status</th>
                                @else
                                
                                @endif
                                <th>Keterangan</th>
                                @if (Auth::user()->level=='Admin')
                                    <th>Aksi</th>
                                @else
                                    
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if ($konsultasi)
                                @foreach ($konsultasi as $data)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <th scope="row">{{$data-> namakonsultasi }}</th>
                                        <th scope="row">{{$data->tanggalkonsultasi }}</th>
                                        <th scope="row">{!! $data-> deskripsi !!}</th>
                                        @if (Auth::user()->level=='Admin')
                                            <th scope="row">{{$data->namaahli}}</th>
                                            <th scope="row">
                                                @if ($data -> status== 'Menunggu')
                                                <span class="badge badge-warning">{{ $data-> status }}</span>
                                                @elseif($data -> status== 'Ditolak')
                                                <span class="badge badge-danger">{{ $data-> status }}</span>
                                                @else
                                                <span class="badge badge-success">{{ $data-> status }}</span>
                                                @endif
                                            </th>
                                        @else
                                            
                                        @endif
                                        
                                        <th scope="row">{{$data->keterangan}}</th>
                                        @if (Auth::user()->level=='Admin')
                                            <th scope="row">
                                                <a href="{{url ('status/'.$data->id_konsultasi)}}" class="btn-sm btn-primary fa fa-pencil">Edit</a>
                                            </th> 
                                        @else
                                            
                                        @endif
                                        
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