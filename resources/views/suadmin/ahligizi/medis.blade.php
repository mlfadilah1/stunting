@extends('layouts.auth.app')
@section('title', 'Tim Ahli')
@section('content')
    <br>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">TIM AHLI</h4>
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
                {{-- <p class="card-text">Disini adalah data - data Penjualan yang telah masuk,
                    anda sebagai Admin bisa menghapus, dan edit data <code>Penjualan</code> </p> --}}
                @if (Auth::user()->level == 'Admin')
                    <a href="{{ url('inputahli') }}" class="btn-sm btn fa-solid fa-user-plus fa-fw">Tambah Tim Ahli</a>
                @else
                @endif
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ahli</th>
                                <th>Spesialis</th>
                                <th>Pengalaman</th>
                                <th>foto</th>
                                {{-- <th>Total Harga</th> --}}
                                @if (Auth::user()->level == 'Admin')
                                    <th>Aksi</th>
                                @else
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @if ($timahli)
                                @foreach ($timahli as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <th scope="row">{{ $data->namaahli }}</th>
                                        <th scope="row">{{ $data->spesialis }}</th>
                                        <th scope="row">{{ $data->pengalaman }}</th>
                                        <th scope="row"><img width="100" height="100"
                                                src="{{ url('storage/users/' . $data->foto) }}"></th>
                                        {{-- <th scope="row">Rp. {{ number_format($data->harga * $data->jumlah) }}</th> --}}
                                        @if (Auth::user()->level == 'Admin')
                                            <th scope="row">
                                                <a href="{{ url('formeditahli/' . $data->id_ahli) }}"
                                                    class="btn-sm btn-primary fa fa-pencil"></a>
                                                <a href="{{ url('deleteahli/' . $data->id_ahli) }}"
                                                    class=" btn-sm btn-danger fa fa-trash "></a>
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
