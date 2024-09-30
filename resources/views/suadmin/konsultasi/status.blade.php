@extends('layouts.auth.app')
@section('title', 'Edit Konsultasi')
@section('content')
    <br>
    <div class="match-height">
        <form class="col-xl-12 col-lg-12 col-md-12" action="{{ url('/updatekonsultasi') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @foreach ($konsultasi as $result)
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <input type="hidden" name="id_konsultasi" value="{{ $result->id_konsultasi }}" required>
                                <fieldset class="form-group" class="nav-item dropdown">
                                    {{-- <input type="text" name="status" class="form-control" id="status"
                                    value="{{ $result->status }}" required> --}}
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="Menunggu">Menunggu</option>
                                        <option value="Ditolak">Ditolak</option>
                                        <option value="Disetujui">Disetujui</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Keterangan</h4>
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="text" name="keterangan" class="form-control" id="keterangan"
                                        value="{{ $result->keterangan }}" required>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">{{ __('Konfirmasi') }}</button>
                    <a href="/konsultasii" class="btn btn-primary"> Kembali</a>
                </div>
            @endforeach
        </form>
    </div>
@endsection
