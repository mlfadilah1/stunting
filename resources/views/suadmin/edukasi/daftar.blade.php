@extends('layouts.auth.app')
@section('title', 'Tambah Edukasi')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Edukasi</h4>
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
            <form action="submitedukasi " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title..." />
                            </div>
                            <div class="form-group">
                                <label for="nama-barang">Foto/Gambar</label>
                                <input class="form-control" type="file" name="foto" placeholder="Foto…" />
                            </div>
                            <div class="form-group">
                                <label for="nama-barang">Deskripsi</label>
                                <!-- Menggunakan input hidden untuk menyimpan nilai Trix Editor -->
                                <input type="hidden" id="deskripsi-input" name="deskripsi" />
                            
                                <!-- Memasukkan Trix Editor di dalam div -->
                                <trix-editor input="deskripsi-input"></trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal Publikasi</label>
                                <input type="date" class="form-control" name="tanggal_publikasi" id=""
                                    placeholder="Tanggal Publikasi..." />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-send"> Membuat Edukasi </button>
        </div><!-- panel body -->
        </form>
    </div>
</div>
@endsection