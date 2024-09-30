@extends('layouts.auth.app')
@section('title', 'Edit Profile')
@section('content')
    <div class="card-content collapse show">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Profile</h4>
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
            <div class="card-body">
                <h5 class="card-title"></h5>
                <form action="{{ url('/submitprofile') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama ..." />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id=""
                                        placeholder="Email..." />
                                </div>
                                {{-- <div class="form-group">
                            <select class="form-control form-select-lg mb-3" name="id_ahli" aria-label="Large select example">
                                <option selected>Tim Ahli</option>
                                @foreach ($timahli as $data)
                                    <option value="{{ $data -> id_ahli }}"> {{ $data -> namaahli }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password..." />
                                </div>
                                <div class="form-group">
                                    <label for="nama-barang">Foto/Gambar</label>
                                    <input class="form-control" type="file" name="foto" placeholder="Foto…" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"> Konfirmasi </button>
            </div><!-- panel body -->
            </form>
        </div>
    @endsection
