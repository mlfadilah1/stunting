<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class penggunaController extends Controller
{
    public function pengguna()
    {
        $data = array(
            'users' =>DB::table('users')
            ->get(),
        );
        return view('user.dashboard', $data);
    }
    public function edukasi()
    {
        $data = array(
            'edukasi' =>DB::table('edukasi')
            ->get(),
        );
        return view('user.edukasi.index', $data);
    }
    public function title($title)
    {
        $edukasi= DB::table('edukasi')->where('title', $title)
        ->get();

        return view('user.edukasi.title', compact('edukasi'));
    }
    //konsultasi
    public function konsultasi()
    {
        $data = array(
            'users' =>DB::table('konsultasi')
            ->join('timahli', 'konsultasi.id_ahli', '=', 'timahli.id_ahli')
            ->join('users', 'konsultasi.id_user', '=', 'users.id')
            ->select('konsultasi.*', 'timahli.namaahli')
            ->where('konsultasi.id_user', Auth::user()->id )
            ->get(),
            'timahli' =>DB::table(('timahli'))
            ->get()
        );
        return view('user.konsultasi.index', $data);
    }
    public function submit(Request $request)
    {
        $namakonsultasi            = Auth::user()->name;
        $tanggalkonsultasi            = $request->tanggalkonsultasi;
        $deskripsi            = $request->deskripsi;
        $id_ahli            = $request->id_ahli;
        $keterangan         = $request->keterangan;
        
        try {
            $data = [
                'namakonsultasi'           => $namakonsultasi,
                'tanggalkonsultasi'           => $tanggalkonsultasi,
                'deskripsi'           => $deskripsi,
                'id_ahli'               =>$id_ahli,
                'id_user'               =>Auth::user()->id,
                'status'            =>'Menunggu',
                'keterangan'        => $keterangan,
            ];
            $simpan     = DB::table('konsultasi')->insert($data);
            if($simpan){
                return redirect('/konsultasi')->with('success','Data admin berhasil disimpan.');
            }
        } 
        catch (\Exception $e){
            return redirect('/konsultasi')->with('danger','Data admin gagal disimpan.');
        }
    }
    //timahli
    public function timahli(Request $request)
    {
        $timahli = DB::table('timahli')->get();
    
        if ($request->has('search')) {
            $search = $request->input('search');
            $timahli = DB::table('timahli')
                ->where('namaahli', 'like', '%' . $search . '%')
                ->get();
        }
        return view('user.timahli.index', compact('timahli'));
    }
    public function lihat($id_ahli)
    {
        $timahli= DB::table('timahli')->where('id_ahli')
        ->get();

        return view('user.timahli.lihat', compact('timahli'));
    }

}
