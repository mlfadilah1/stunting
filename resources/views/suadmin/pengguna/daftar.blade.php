@extends('layouts.auth.app')
@section('title', 'Daftar User')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Data User</h4>
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
            <form action="/submituser" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Nama Ahli</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama Ahli..." />
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id=""
                                    placeholder="Email..." />
                            </div>

                            <div class="form-group">
                                <label for="level">Level</label>
                                <input type="text" class="form-control" name="level" id=""
                                    placeholder="Level..." />
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id=""
                                    placeholder="Password..." />
                            </div>

                            <div class="form-group">
                                <label for="Foto">Foto/Gambar</label>
                                <input class="form-control" type="file" name="foto" placeholder="Foto…" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-send"> Simpan</button>
                    <a href="/user" class="btn btn-primary"> Kembali</a>
        </div><!-- panel body -->
        </form>
    </div>
</div>
</div>
@endsection