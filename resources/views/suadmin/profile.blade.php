@extends('layouts.auth.app')
@section('title', 'Profile')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Profile</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3" ></i></a>
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
                anda sebagai Admin bisa menghapus, dan edit data <code>Penjualan</code> </p>
            <a href="{{ route('datapenjualanPdf') }}" class="btn btn-primary" target="_blank">Cetak</a> --}}
            <br><br>
            <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>Nama </th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users)
                            @foreach ($users as $data)
                                <tr>
                                    <th scope="row">{{Auth::user()->name }}</th>
                                    <th scope="row">{{Auth::user()->email }}</th>
                                    <th scope="row"><img width="100" height="100"
                                        src="{{ url('storage/users/' . $data->foto) }}"></th>
                                    <th scope="row">
                                        <a href="{{url ('/edit/'.$data->id)}}" class="btn-sm btn-primary fa fa-pen ">edit</a>
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