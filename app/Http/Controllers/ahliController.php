<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ahliController extends Controller
{
    public function ahli()
    {
        $data = array(
            'users' =>DB::table('konsultasi')
            ->get(),
        );
        return view('ahli.dashboard', $data);
    }
    public function index()
    {
        $data = array(
            'konsultasi' =>DB::table('konsultasi')
            ->join('timahli', 'konsultasi.id_ahli', '=', 'timahli.id_ahli')
            ->join('users', 'konsultasi.id_user', '=', 'users.id')
            ->select('konsultasi.*', 'timahli.namaahli')
            ->where('konsultasi.id_user', Auth::user()->id )
            ->get(),
            'timahli' =>DB::table(('timahli'))
            ->get()
        );
        return view('ahli.index', $data);
    }
}
