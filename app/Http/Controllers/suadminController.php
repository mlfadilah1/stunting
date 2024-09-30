<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class suadminController extends Controller
{
    //dashboard
    public function suadmin()
    {
        $data = array(
            'users' => DB::table('users')
                ->get(),
        );
        return view('suadmin.index', $data);
    }
    //profile
    public function profile()
    {
        $data = array(
            'users' => DB::table('users')
                ->where('id', Auth::user()->id)
                ->get(),
        );
        return view('suadmin.profile', $data);
    }

    function updateprofile(Request $request)
    {
        $id = $request->id;
        $name            = $request->name;
        $email            = $request->email;
        $password            = $request->password;
        $old_foto       = $request->old_foto;

        if ($request->hasFile('foto')) {
            $foto       = $id . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = $old_foto;
        }

        try {
            $data = [
                'name'           => $name,
                'email'           => $email,
                'password'       => bcrypt($password),
                'foto'           => $foto,
            ];
            $simpan     = DB::table('users')->where('id', $id)->update($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $folderPathOld = "public/users/" . $old_foto;
                    Storage::delete($folderPathOld);
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/profile')->with('success', 'Data Tim Ahli berhasil disimpan.');
            }
        } catch (\Exception $e) {
            return redirect('/profile')->with('danger', 'Data Tim Ahli gagal disimpan.');
        }
    }
    function edit($id)
    {
        $data = array(
            'judul' => 'Tambah Data Admin',
            'aksi' => url('submitprofile'),
            'user' => DB::table('users')->where('id', $id)->get()
        );
        return view('suadmin.edit', $data);
    }
    public function submitprofile(Request $request)
    {
        $name            = $request->name;
        $email            = $request->email;
        $password = bcrypt($request->input('password'));

        if ($request->hasFile('foto')) {
            $foto       = $name . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = null;
        }

        try {
            $data = [
                'name'           => $name,
                'email'           => $email,
                'password'           => $password,
                'foto'               => $foto,
            ];
            $simpan     = DB::table('users')->insert($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/profile')->with('success', 'Edit Profile berhasil disimpan.');
            }
        } catch (\Exception $e) {
            return redirect('/profile')->with('danger', 'Edit Profile gagal disimpan.');
        }
    }

    //tim ahli
    public function tenagamedis()
    {
        $data = array(
            'timahli' => DB::table('timahli')
                ->get(),
        );
        return view('suadmin.ahligizi.medis', $data);
    }
    function formeditahli($id_ahli)
    {
        $data = array(
            'judul' => 'Tambah Data Admin',
            'aksi' => url('submit'),
            'timahli' => DB::table('timahli')->where('id_ahli', $id_ahli)->get()
        );
        return view('suadmin.ahligizi.edit', $data);
    }
    public function inputahli()
    {
        $data = array(
            'aksi' => url('submit')
        );
        return view('suadmin.ahligizi.tambah', $data);
    }
    public function submit(Request $request)
    {
        $namaahli            = $request->namaahli;
        $spesialis            = $request->spesialis;
        $pengalaman            = $request->pengalaman;

        if ($request->hasFile('foto')) {
            $foto       = $namaahli . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = null;
        }

        try {
            $data = [
                'namaahli'           => $namaahli,
                'spesialis'           => $spesialis,
                'pengalaman'           => $pengalaman,
                'foto'           => $foto,
            ];
            $simpan     = DB::table('timahli')->insert($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/timahlii')->with('success', 'Data Tim Ahli berhasil disimpan.');
            }
        } catch (\Exception $e) {
            return redirect('/timahlii')->with('danger', 'Data Tim Ahli gagal disimpan.');
        }
    }
    function deleteahli($id_ahli)
    {
        DB::table('timahli')->where('id_ahli', $id_ahli)->delete();
        return redirect('/timahlii');
    }
    function updateahli(Request $request)
    {
        $id_ahli                = $request->id_ahli;
        $namaahli               = $request->nama;
        $spesialis              = $request->spesialis;
        $pengalaman             = $request->pengalaman;
        $old_foto               = $request->old_foto;

        if ($request->hasFile('foto')) {
            $foto       = $id_ahli . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = $old_foto;
        }

        try {
            $data = [
                'namaahli'              => $namaahli,
                'spesialis'             => $spesialis,
                'pengalaman'            => $pengalaman,
                'foto'                  => $foto,
            ];
            $simpan     = DB::table('timahli')->where('id_ahli', $id_ahli)->update($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $folderPathOld = "public/users/" . $old_foto;
                    Storage::delete($folderPathOld);
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/timahlii')->with('success', 'Data Tim Ahli berhasil disimpan.');
            }
            dd($simpan);
        } catch (\Exception $e) {
            return redirect('/timahlii')->with('danger', 'Data Tim Ahli gagal disimpan.');
        }
    }
    //monitoring user
    public function user()
    {
        $data = array(
            'users' => DB::table('users')
                ->get(),
        );
        return view('suadmin.pengguna.index', $data);
    }
    function deleteuser($id)
    {
        $query = DB::table('users')
            ->where('id', $id)
            ->delete();

        if ($query) {
            return redirect('/user')->with('Success', 'Data User berhasil dihapus');
        } else {
            return redirect('/user')->with('Error', 'Data User gagal dihapus');
        }
    }
    public function inputuser()
    {
        $data = array(
            'users' => DB::table('users')
                ->get(),
        );
        return view('suadmin.pengguna.daftar', $data);
    }
    public function submituser(Request $request)
    {
        $name            = $request->name;
        $email            = $request->email;
        $level            = $request->level;
        $password         = $request->password;

        if ($request->hasFile('foto')) {
            $foto       = $name . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = null;
        }

        try {
            $data = [
                'name'           => $name,
                'email'          => $email,
                'level'          => $level,
                'foto'           => $foto,
                'password'       => bcrypt($password),
            ];
            $simpan     = DB::table('users')->insert($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/user')->with('Success', 'Data User berhasil disimpan.');
            }
        } catch (\Exception $e) {
            return redirect('/inputuser')->with('danger', 'Data User gagal disimpan.');
        }
    }

    //edukasi
    public function programkesehatan(Request $request)
    {
        $edukasi = DB::table('edukasi')->get();

        if ($request->has('search')) {
            $search = $request->input('search');
            $edukasi = DB::table('edukasi')
                ->where('title', 'like', '%' . $search . '%')
                ->get();
        }

        return view('suadmin.edukasi.index', compact('edukasi'));
    }
    public function inputedukasi()
    {
        $data = array(
            'users' => DB::table('edukasi')
                ->get(),
        );
        return view('suadmin.edukasi.daftar', $data);
    }
    // public function submitedukasi(Request $req){
    //     $this->validate($req,[
    //         'foto'      => 'required|image|mimes:png,jpg,jpeg,webp'
    //     ]);

    //     //upload image
    //     $foto = $req->file('foto');
    //     $foto -> storeAs('public/users', $foto->hashName());

    //     $query = DB::table('edukasi')
    //     ->insert([
    //         'title'                 => $req -> title,
    //         'foto'                  => $req -> foto,
    //         'deskripsi'             => $req -> deskripsi,
    //         'tanggal_publikasi'     => $req -> tanggal_publikasi,

    //     ]);
    //     if($query){
    //         return redirect('/edukasii')->with('success','Data admin berhasil disimpan.');
    //     } else {
    //         return redirect('/inputedukasi')->with('danger','Data admin gagal disimpan.');
    //     }
    // }

    public function submitedukasi(Request $request)
    {
        $title            = $request->title;
        $deskripsi            = $request->deskripsi;
        $tanggal_publikasi            = $request->tanggal_publikasi;

        if ($request->hasFile('foto')) {
            $foto       = $title . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = null;
        }

        try {
            $data = [
                'title'           => $title,
                'deskripsi'           => $deskripsi,
                'tanggal_publikasi'           => $tanggal_publikasi,
                'foto'           => $foto,
            ];
            $simpan     = DB::table('edukasi')->insert($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/edukasii')->with('success', 'Data Edukasi berhasil disimpan.');
            }
        } catch (\Exception $e) {
            return redirect('/inputedukasi')->with('danger', 'Data Edukasi gagal disimpan.');
        }
    }

    function deleteedukasi($id_edukasi)
    {
        $query = DB::table('edukasi')
            ->where('id_edukasi', $id_edukasi)
            ->delete();

        if ($query) {
            return redirect('/edukasii')->with('Success', 'Data Edukasi berhasil dihapus');
        } else {
            return redirect('/edukasii')->with('Error', 'Data Edukasi gagal dihapus');
        }
    }
    function updateedukasi(Request $request)
    {
        $id_edukasi = $request->id_edukasi;
        $title               = $request->title;
        $deskripsi           = $request->deskripsi;
        $tanggal_publikasi   = $request->tanggal_publikasi;
        $old_foto            = $request->old_foto;

        if ($request->hasFile('foto')) {
            $foto       = $id_edukasi . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto       = $old_foto;
        }

        try {
            $data = [
                'title'           => $title,
                'deskripsi'           => $deskripsi,
                'tanggal_publikasi'           => $tanggal_publikasi,
                'foto'           => $foto,
            ];
            $simpan     = DB::table('edukasi')->where('id_edukasi', $id_edukasi)->update($data);
            if ($simpan) {
                if ($request->hasFile('foto')) {
                    $folderPath = "public/users";
                    $folderPathOld = "public/users/" . $old_foto;
                    Storage::delete($folderPathOld);
                    $request->file('foto')->storeAs($folderPath, $foto);
                }
                return redirect('/edukasii')->with('success', 'Data Edukasi berhasil disimpan.');
            }
        } catch (\Exception $e) {
            return redirect('/inputedukasi')->with('danger', 'Data Edukasi gagal disimpan.');
        }
    }
    public function baca($id_edukasi)
    {
        $edukasi = DB::table('edukasi')->where('id_edukasi', $id_edukasi)
            ->get();

        return view('suadmin.edukasi.baca', compact('edukasi'));
    }
    function formeditedukasi($id_edukasi)
    {
        $data = array(
            'judul' => 'Tambah Data Admin',
            'aksi' => url('submitedukasi'),
            'edukasi' => DB::table('edukasi')->where('id_edukasi', $id_edukasi)->get()
        );
        return view('suadmin.edukasi.edit', $data);
    }
    //konsultasi
    public function daftarkonsultasi()
    {
        if (Auth::user()->level == "Admin") {
            $data = array(
                'konsultasi' => DB::table('konsultasi')
                    ->join('timahli', 'konsultasi.id_ahli', '=', 'timahli.id_ahli')
                    ->select('konsultasi.*', 'timahli.namaahli')
                    ->get(),
            );
        } else {
            $data = array(
                'konsultasi' => DB::table('konsultasi')
                    ->join('timahli', 'konsultasi.id_ahli', '=', 'timahli.id_ahli')
                    ->select('konsultasi.*', 'timahli.namaahli')
                    ->where('namaahli', Auth::user()->name)
                    ->get(),
            );
        }
        return view('suadmin.konsultasi.konsultasi', $data);
    }

    public function status($id_konsultasi)
    {
        $data = array(
            'konsultasi' => DB::table('konsultasi')->where('id_konsultasi', $id_konsultasi)
                ->join('timahli', 'konsultasi.id_ahli', '=', 'timahli.id_ahli')
                ->select('konsultasi.*', 'timahli.namaahli')
                ->get(),
        );
        return view('suadmin.konsultasi.status', $data);
    }
    // public function submitkonsultasi(Request $request)
    // {
    //     $namakonsultasi       = $request->namakonsultasi;
    //     $tanggalkonsultasi    = $request->tanggalkonsultasi;
    //     $deskripsi            = $request->deskripsi;
    //     $namaahli             = $request->namaahli;
    //     $status               = $request->status;
    //     try {
    //         $data = [
    //             'namakonsultasi'        => $namakonsultasi,
    //             'tanggalkonsultasi'     => $tanggalkonsultasi,
    //             'deskripsi'             => $deskripsi,
    //             'namaahli'              => $namaahli,
    //             'status'                =>$status

    //         ];
    //         $simpan     = DB::table('konsultasi')->insert($data);
    //         if($simpan){
    //             return redirect('/konsultasii')->with('success','Data admin berhasil disimpan.');
    //         }
    //     } catch (\Exception $e){
    //         return redirect('/status')->with('danger','Data admin gagal disimpan.');
    //     }
    // }

    function updatekonsultasi(Request $req)
    {
        $id = $req->id_konsultasi;
        $qry = DB::table('konsultasi')->where('id_konsultasi', $id)->update([
            'keterangan' => $req->keterangan,
            'status'    => $req->status,
        ]);

        if ($qry) {
            return redirect('/konsultasii')->with('success', 'Data berhasil diedit.');
        } else {
            return redirect('/konsultasii')->with('danger', 'Data gagal diedit.');
        }
    }
}
