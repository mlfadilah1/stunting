@extends('layouts.auth.app')
@section('title', 'Tambah Tim Ahli')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Data Ahli</h4>
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
            <form action="/submitahli" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="namaahli">Nama Ahli</label>
                                <input type="text" class="form-control" name="namaahli" placeholder="Nama Ahli..." />
                            </div>

                            <div class="form-group">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" class="form-control" name="spesialis" id=""
                                    placeholder="Spesialis..." />
                            </div>

                            <div class="form-group">
                                <label for="pengalaman">Pengalaman</label>
                                <input type="text" class="form-control" name="pengalaman" id=""
                                    placeholder="Pengalaman..." />
                            </div>

                            {{-- <div class="form-group">
                                <label for="nama-barang">No Handphone</label>
                                <input type="text" class="form-control" name="no_hp" id=""
                                    placeholder="No Handphone..." />
                            </div> --}}

                            <div class="form-group">
                                <label for="nama-barang">Foto/Gambar</label>
                                <input class="form-control" type="file" name="foto" placeholder="Foto…" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-send"> Simpan</button>
                    <a href="/timahli" class="btn btn-primary"> Kembali</a>
        </div><!-- panel body -->
        </form>
    </div>
</div>
</div>
@endsection