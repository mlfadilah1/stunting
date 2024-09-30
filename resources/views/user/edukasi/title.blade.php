@extends('layouts.navbar')
@section('title', 'Detail Edukasi')
@section('content')
<br>
    @foreach ($edukasi as $data)
        <div class="col-lg-12">
            <div class="card" align = "center">
                <img src="/storage/users/{{ $data->foto }} "class="rounded mx-auto d-block" alt="..." height="200px" width="200" >
                <h2 class="card-title text-center"><strong>{{ $data->title }}</strong></h2>
                <div class="card-body" align="left">
                    <p>{!! $data->deskripsi !!}</p>
                    <p> Publikasi | {{ $data->tanggal_publikasi }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection