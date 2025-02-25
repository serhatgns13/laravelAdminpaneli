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
                        <h2 class="fs-20 fw-bolder mb-4 text-center">Sıfırlama</h2>
                        <h4 class="fs-13 fw-bold mb-2 text-center">Kullanıcı adınıza/şifrenize sıfırlayın</h4>
                        <form action="auth-resetting-minimal.html" class="w-100 mt-4 pt-2">
                            <div class="mb-4">
                                <input class="form-control" placeholder="E-posta veya Kullanıcı adı" required>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-lg btn-primary w-100">Şimdi Sıfırla</button>
                            </div>
                        </form>
                        <div class="mt-5 text-muted">
                            <span>Hesabınız yok mu?</span>
                            <a href="{{route('admin.register')}}" class="fw-bold">Hesap Oluştur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
