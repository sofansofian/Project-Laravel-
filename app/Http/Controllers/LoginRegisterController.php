<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Buku;

class LoginRegisterController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    
    
    public function postRegister(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email:dns',
        'jenisKelamin' => 'required',
        'password' => 'required|min:8|max:20|confirmed'
    ]);

    try {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    } catch (\Exception $e) {
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}

    public function adminHome(Request $request)
    {
        $search = $request->input('search');
    
        $data = User::where('level', 'admin')
            ->where(function($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->paginate(5);
    
        return view('admin.home', compact('data'));
    }
    public function userHome(Request $request){
        $search = $request->input('search');
    
        $data = Buku::where(function($query) use ($search){
            $query->where('judul_buku', 'LIKE', '%' . $search . '%');
        })->paginate(5);
    
        return view('user.home', compact('data'));
    }    
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->level == 'user') {
                return redirect('/user/home');
            } elseif ($user->level == 'admin') {
                return redirect('/admin/home');
            }
        }
        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
