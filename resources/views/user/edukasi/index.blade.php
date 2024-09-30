@extends('layouts.auth.app')
@section('title', 'Edukasi')
@section('content')
<br>
<div class="row">
    @foreach ($edukasi as $data)
    <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-stretch">
        <div class="card text-center max-width" style="width: 18rem;">
            <img src=" storage/users/{{ $data -> foto }} " class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{ url('/'.$data->title) }}">
                    <h2 class="card-title text-center">{{ $data->title }}</h2></a>
                    <h6> Publikasi | {{ $data->tanggal_publikasi }}</h6>
            </div>
        </div>
        </div>
    @endforeach
</div>
@endsection