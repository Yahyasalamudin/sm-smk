@extends('layouts.master')
@push('body')
    class="hold-transition login-page my-3" style="background-image: url('{{ asset('img/wallup.jpg') }}'); background-size: cover; background-attachment: fixed;"
@endpush
@section('login')
    <div class="login-box">
        <div class="login-logo">
            <!--<img src="{{ asset('img/logosiakad.png') }}" width="100%" alt="">-->
            <h1 class="text-white">Sistem Manajemen</h1>
        </div>

        <div class="login-logo" style="color: white;">
            Smk Mulu
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan login untuk memulai</p>

                <form action="{{ route('action-login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autocomplete="off"
                            autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" placeholder="{{ __('Password') }}"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-1">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" class="form-check-input" type="checkbox" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type="submit" id="btn-login" class="btn btn-primary btn-block">{{ __('Login') }}
                                &nbsp; <i class="nav-icon fas fa-sign-in-alt"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <footer style="color: white;">
            <marquee>
                <strong>Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> &diams; <a href="http://piramidsoft.com/" style="color: white;">SMK
                        Muhammadiyah Lumajang</a>.
                </strong>
            </marquee>
        </footer>
    </div>
@endsection
