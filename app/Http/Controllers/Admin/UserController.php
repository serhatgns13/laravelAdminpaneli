<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function login(Request $request)
    {
        $creadentials = $request->only('email', 'password');
        if (Auth::attempt($creadentials)) {

            return redirect()->route('admin.index');

        }

        return redirect()->back()->withErrors(['errors' => 'Giriş bilgileri hatalı']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }

    public function register(Request $request)
    {
        $data = $request->only('name', 'email', 'password', 'repassword'); // Formdan gelen verileri al

        if ($data['password'] !== $data['repassword']) { // Şifreler uyuşmuyorsa
            $message = ['type' => 'danger', 'description' => 'Şifreler uyuşmuyor']; // Hata mesajı oluştur
            // type ve description anahtarları ile hata mesajı oluşturuldu

            return redirect()->back()->withInput()->with(['message' => $message]); // Şifreler uyuşmuyorsa geri dön
        }

        User::create([ // Kullanıcı oluştur
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);


        $message = ['type' => 'success', 'description' => 'Kayıt işlemi başarılı. Giriş yapa bilirisiniz.']; // Hata mesajı oluştur

        // type ve description anahtarları ile hata mesajı oluşturuldu
        return redirect()->route('admin.login')->with(['message' => $message]); // Kayıt işlemi başarılıysa giriş sayfasına yönlendir
    }
}


