<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Odex Soft | Yönetim Paneli';


        return view('admin.index', compact('title'));
    }

    public function login()
    {
        $title = 'Yönetim paneli';

        // Eğer kullanıcı giriş yapmışsa yönlendir
        if (Auth::check()) { 
            return redirect()->route('admin.index');            
        }

        return view('admin.login', compact('title'));
    }

    public function register()
    {
        $title = 'Yönetim paneli | Kayıt Ol';

        return view('admin.register', compact('title'));
    }

    public function resetPassword()
    {
        $title = 'Yönetim paneli | Şifremi Unuttum';

        return view('admin.reset-password', compact('title'));
    }
}
