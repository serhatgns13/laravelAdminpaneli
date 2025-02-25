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
                        <h2 class="fs-20 fw-bolder mb-4 text-center">YÖNETİM PANEL</h2>
                        <h4 class="fs-13 fw-bold mb-2 text-center">Yeni kayıt oluştur</h4>

                        <form action="{{ route('admin.register.post') }}" method="POST" class="w-100 mt-4 pt-2">
                            @if (session()->has('message'))
                                <div class="alert alert-{{ session('message')['type'] }}" role="alert">
                                    {{ session('message')['description'] }}
                                </div>
                            @endif


                        
                            @csrf
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Ad Soyad" required name="name" value="{{ old('name') }}">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control" placeholder="E-posta" required name="email" value="{{ old('email') }}">
                            </div>

                            <div class="mb-4 generate-pass">
                                <div class="input-group field">
                                    <input type="password" class="form-control password" id="newPassword"
                                        placeholder="Yeni Şifre" name="password" required value="{{ old('password') }}">
                                    <div class="input-group-text c-pointer gen-pass" data-bs-toggle="tooltip"
                                        title="Şifre Oluştur"><i class="feather-hash"></i></div>
                                    <div class="input-group-text border-start bg-gray-2 c-pointer show-pass"
                                        data-bs-toggle="tooltip" title="Şifreyi Göster/Gizle"><i></i></div>
                                </div>
                                <div class="progress-bar mt-2">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control" placeholder="Tekrar Şifre" required
                                    name="repassword" value="{{ old('repassword') }}">
                            </div>
                            <div class="mt-4">

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCondition" required>

                                    <label class="custom-control-label c-pointer text-muted" for="termsCondition"
                                        style="font-weight: 400 !important">Tüm <a href="">Şartlar ve
                                            Koşullar</a>'ı ve <a href="">Ücretler</a>'i kabul ediyorum.</label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-lg btn-primary w-100">Hesap oluştur</button>
                            </div>
                        </form>
                        <div class="mt-5 text-muted">
                            <span>Zaten bir hesabınız var mı?</span>
                            <a href="{{ route('admin.login') }}" class="fw-bold">Oturum Aç</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
