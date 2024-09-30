@extends('layouts.auth.app')
@section('title', 'Edit Edukasi')
@section('content')
<br>
    <div class="match-height">
        <form class="col-xl-12 col-lg-12 col-md-12" action="{{ url('/updateedukasi') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @foreach ($edukasi as $result)
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ID Edukasi</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="id_edukasi" class="form-control" id="id_edukasi"
                                        value="{{ $result->id_edukasi }}" readonly>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Title</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="title" class="form-control" id="title"
                                        value="{{ $result->title }}" required>
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
                                    <input type="file" name="foto" class="form-control" onchange="previewImage()"
                                        min="0" max="100" id="foto" value="{{ $result->foto }}"
                                        required>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Deskripsi</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <!-- Menggunakan input hidden untuk menyimpan nilai Trix Editor -->
                                    <input type="hidden" id="deskripsi-input" name="deskripsi" value="{{ $result->deskripsi }}" />
                        
                                    <!-- Memasukkan Trix Editor di dalam div -->
                                    <trix-editor input="deskripsi-input"></trix-editor>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tanggal Publikasi</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="date" name="tanggal_publikasi" class="form-control" id=""
                                        value="{{ $result->tanggal_publikasi }}" required>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">{{ __('Konfirmasi') }}</button>
                    <a href="/edukasii" class="btn btn-primary"> Kembali</a>
                {{-- </div> --}}
            @endforeach
        </form>
    </div>
@endsection