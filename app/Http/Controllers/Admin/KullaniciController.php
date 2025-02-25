<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function index()
    {
        $title = 'Kullanıcılar Sayfası';
        $users = User::all();

        return view('admin.users.index', compact('users', 'title'));

    }

}
