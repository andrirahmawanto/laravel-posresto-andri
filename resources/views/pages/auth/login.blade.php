@extends('layouts.auth')

@section('title', 'Halaman Login')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
        <div class="col-md-5 order-md-2" style="text-align: right">
            <img src="{{ asset('img/undraw_eating_together_re_ux62.svg') }}" alt="Image" width="90%" class="img-fluid">
        </div>
        <div class="col-md-7 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login <strong>Resto Kita</strong></h3>
              <p class="mb-4">Silahkan Masukkan Email dan Password</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group first">
                    <label for="email">Email</label>
                    <input id="email" type="email"
                        class="form-control @error('email')
                        is-invalid
                    @enderror"
                        name="email" tabindex="1" autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group last mb-5">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password"
                        class="form-control @error('password')
                        is-invalid
                    @enderror"
                        name="password" tabindex="2">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn text-white btn-block btn-primary" tabindex="5">
                            Login
                        </button>
                    </div>
            </form>
            <div class="text-muted mt-2 text-center">
                Don't have an account? <a href="{{ route('register') }}">Create One</a>
            </div>
            </div>
          </div>

        </div>

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
