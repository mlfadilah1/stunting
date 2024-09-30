@extends('layouts.auth.app')
@section('title', 'Edit Tim Ahli')
@section('content')
<br>
    <div class="match-height">
        <form class="col-xl-12 col-lg-12 col-md-12" action="{{ url('/updateahli') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @foreach ($timahli as $result)
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ID Ahli</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="id_ahli" class="form-control" id="id_ahli"
                                        value="{{ $result->id_ahli }}" readonly>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Nama Ahli</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="nama" class="form-control" id="namaahli"
                                        value="{{ $result->namaahli }}" required>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Spesialis</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="spesialis" class="form-control" id="spesialis"
                                        value="{{ $result->spesialis }}" required>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pengalaman</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="pengalaman" class="form-control" id="pengalaman"
                                        value="{{ $result->pengalaman }}" required>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Foto</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="hidden" name="old_foto" class="form-control" onchange="previewImage()"
                                        min="0" max="100" id="foto" value="{{ $result->foto }}"
                                        required>
                                    <input type="file" name="foto" class="form-control">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">{{ __('Konfirmasi') }}</button>
                    <a href="/timahlii" class="btn btn-primary"> Kembali</a>
                </div>
            @endforeach
        </form>
    </div>
@endsection