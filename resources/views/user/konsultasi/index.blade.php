@extends('layouts.auth.app')
@section('title', 'Daftar Konsultasi')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Konsultasi</h4>
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
            <form action="submitkonsultasi " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="konsultasi">Nama Konsultasi</label>
                                <input type="text" class="form-control" name="konsultasi" placeholder="Nama Konsultasi..." />
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal Konsultasi</label>
                                <input type="date" class="form-control" name="tanggalkonsultasi" id=""
                                    placeholder="Tanggal Konsultasi..." />
                            </div>
                            <div class="form-group">
                                <select class="form-control form-select-lg mb-3" name="id_ahli" aria-label="Large select example">
                                    <option selected>Tim Ahli</option>
                                    @foreach ($timahli as $data)
                                        <option value="{{ $data -> id_ahli }}"> {{ $data -> namaahli }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="body" class="form-label">Deskripsi</label>
                                <input type="hidden" class="form-control" name="deskripsi" id="body"
                                    placeholder="Deskripsi..." />
                                <trix-editor input="body"></trix-editor>
                            </div>
                            {{-- <div class="form-group">
                                <label for="body" class="form-label">Keterangan</label>
                                <input type="hidden" class="form-control" name="keterangan" id="body"
                                    placeholder="keterangan..." />
                            </div> --}}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"> Konfirmasi </button>
        </div><!-- panel body -->
        </form>
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
                            <th>Tanggal Konsultasi</th>
                            <th>Deskripsi</th>
                            <th>Nama Ahli</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users)
                            @foreach ($users as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <th scope="row">{{$data-> namakonsultasi }}</th>
                                    <th scope="row">{{$data->tanggalkonsultasi }}</th>
                                    <th scope="row">{!! $data->deskripsi  !!}</th>
                                    <th scope="row">{{$data->namaahli }}</th>
                                        @if ($data -> status== 'Menunggu')
                                        <span class="badge badge-warning">{{ $data-> status }}</span>
                                        @elseif($data -> status== 'Ditolak')
                                        <span class="badge badge-danger">{{ $data-> status }}</span>
                                        @else
                                        <span class="badge badge-success">{{ $data-> status }}</span>
                                        @endif
                                    </th>
                                    <th scope="row">{{ $data ->keterangan }}</th>
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