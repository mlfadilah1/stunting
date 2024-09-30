@extends('layouts.auth.app')
@section('content')
<br>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Request</h4>
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
                    anda sebagai Admin bisa menghapus, dan edit data <code>Penjualan</code> </p>
                <a href="{{ route('datapenjualanPdf') }}" class="btn btn-primary" target="_blank">Cetak</a> --}}
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Konsultasi</th>
                                <th>Tanggal Konsultais</th>
                                <th>Deskripsi</th>
                                {{-- <th>Total Barang</th>
                                <th>Total Harga</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if ($datapenjualan)
                                @foreach ($datapenjualan as $data) --}}
                                    {{-- <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <th scope="row">{{ namakonsumen }}</th>
                                        <th scope="row">{{nama }}</th>
                                        <th scope="row">{{tglbeli }}</th>
                                        <th scope="row">{{jumlah }}</th> --}}
                                        {{-- <th scope="row">Rp. {{ number_format($data->harga * $data->jumlah) }}</th>
                                        <th scope="row">
                                            <a href="{{ url('ketpenjualan/' . $data->iddetail) }}"
                                                style="text-decoration: none" class="me-3">Keterangan</a>
                                        </th> --}}
                                    {{-- </tr> --}}
                                {{-- @endforeach
                            @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection