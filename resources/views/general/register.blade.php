@extends('layout.general')
@section('container')
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row vh-100 pt-5">
        <div class="col-12 col-md-4 mx-auto">
            <div class="card">
                <div class="card-header text-center f7 mb-0">
                    <strong>Registrasi Form</strong>
                </div>
                <div class="card-body pt-2">
                    <div class="m-sm-4">
                        <div class="text-center">
                            <img src="{{ asset('/img/fti-ukdw.png') }}" alt="Logo" class="img-fluid" width="240"
                                height="132">
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                {{-- <form method="POST" action="{{ route('general.aksi.register') }}">
                                    @csrf --}}
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input class="form-control form-control-lg" type="text" name="name" id="name"
                                        placeholder="Masukkan Nama Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nim</label>
                                    <input class="form-control form-control-lg" type="text" name="username"
                                        id="username" placeholder="Masukkan nim Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control form-control-lg" type="password" name="password"
                                        id="password" placeholder="Masukkan password Anda" required>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary ">Daftar</button>
                                </div>
                                </form>
                                <small class="d-block  text-center mt-3">Sudah Ada Akun? <a href="/login"
                                        class="text-decoration-none">Masuk Sekarang</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center f7 mb-0 pb-0">
                    <p class="text-muted">Volunteer</p>
                </div>
            </div>
        </div>
    </div>
@endsection
