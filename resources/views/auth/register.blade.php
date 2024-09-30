@extends('layouts..app', ['title' => 'Register'])

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                        name="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="level">Level</label>
                    <input id="level" type="level" class="form-control @error('level') is-invalid @enderror"
                        name="level">
                    @error('level')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password Confirmation</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password_confirmation">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="form-group row">
                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('foto') }}</label>

                    <div class="col-md-6">
                        <input id="foto" type="file" class="form-control-file @error('foto') is-invalid @enderror" name="foto" accept="image/*">

                        @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="foto">foto</label>
                    <input id="foto" type="file" class="form-control" name="foto" required accept="image/*">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Already have a account? <a href="{{ route('login') }}">Sign In Now</a>
    </div>
@endsection