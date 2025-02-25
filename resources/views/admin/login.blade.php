@extends('layouts.admin.members')
@section('content')
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                    <div
                        class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                        <img src="/template/assets/images/logo-abbr.png" alt="" class="img-fluid">
                    </div>
                    <div class="card-body p-sm-5">
                        <h2 class="fs-20 fw-bolder mb-4 text-center">YÖNETİM PANELİ</h2>
                        <h4 class="fs-13 fw-bold mb-2 text-center">Hesabına giriş yap</h4>

                        @if ($errors->count())
                            <div class="alert alert-danger" role="alert">

                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ route('admin.login.post') }}" method="POST" class="w-100 mt-4 pt-2">
                            @if (session()->has('message'))
                                <div class="alert alert-{{ session('message')['type'] }}" role="alert">
                                    {{ session('message')['description'] }}
                                </div>
                            @endif
                            @csrf
                            <div class="mb-4">
                                <input type="email" class="form-control" name="email" placeholder="E-posta"
                                    value="admin@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    value="123456" required>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                                        <label class="custom-control-label c-pointer" for="rememberMe">Beni Hatırla</label>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('admin.reset-password') }}" class="fs-11 text-primary">Şifrenizi mi
                                        unuttunuz?</a>
                                </div>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-lg btn-primary w-100">Oturum Aç</button>
                            </div>
                        </form>
                        <div class="w-100 mt-5 text-center mx-auto">
                            <div class="mb-4 border-bottom position-relative"><span
                                    class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute translate-middle">VEYA</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" title="Login with Facebook">
                                    <i class="feather-facebook"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" title="Login with Twitter">
                                    <i class="feather-twitter"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" title="Login with Github">
                                    <i class="feather-github text"></i>
                                </a>
                            </div>
                        </div>
                        <div class="mt-5 text-muted">
                            <span> Hesabınız yok mu?</span>
                            <a href="{{ route('admin.register') }}" class="fw-bold">Hesap Oluştur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
