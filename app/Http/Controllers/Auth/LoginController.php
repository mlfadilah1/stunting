<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function authenticated(Request $request, $user){
        if($user -> level == 'Admin' ){
            return redirect('/suadmin')->with('success','Login berhasil sebagai Admin.');
        } else if($user -> level == 'Tim Ahli' ){
            return redirect('/ahli')->with('success','Login berhasil sebagai Ahli.');
        }else if($user -> level == 'Pengguna' ){
            return redirect('/pengguna')->with('success','Login berhasil sebagai Penguna.');
        }
        // else if($user -> level == 2 && $user->status == "Tidak Aktif"){
        //     // Auth::logout();
        //     $request->session()->flush();
        //     // Session::flush();
        //     return redirect('/')->with('error','Akses Ditolak, hubungi Superuser Admin.');
        // }
    else{
        Auth::logout();
        return redirect('/login')->route('login')->with('error','Anda telah keluar.');
    }
    }
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         if ($user->level == 'Admin') {
    //             $request->session()->regenerate();
    //             return redirect()->intended('suadmin');
    //         } else if ($user->level == 'Tim Ahli') {
    //             $request->session()->regenerate();
    //             return redirect('/ahli');
    //         } else {
    //             Auth::logout();
    //             return back()->with('loginerror', 'Anda tidak memiliki izin untuk masuk.');
    //         }
    //     }

    //     return back()->with('loginerror', 'Login Gagal');
    // }
}
