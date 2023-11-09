<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dosen;

class HomeController extends Controller
{
    public function berita()
    {
        return view('berita');
    }
    public function biodata()
    {
        return view('biodata');
    }
    public function prodi()
    {
        return view('prodi');
    }
    public function profile()
    {
        return view('profile');
    }
    
}