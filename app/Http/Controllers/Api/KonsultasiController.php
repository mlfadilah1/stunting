<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function konsultasi()
    {
        $data =
            DB::table('konsultasi')
            ->join('timahli', 'konsultasi.id_ahli', '=', 'timahli.id_ahli')
            ->join('users', 'konsultasi.id_user', '=', 'users.id')
            ->select('konsultasi.*', 'timahli.namaahli')
            // ->where('konsultasi.id_user', Auth::users()->id )
            ->get();
        
        return new PostResource(true,'List Konsultasi', $data);
    }
    function store(Request $request)

    {
        $data = DB::table('konsultasi')->insert([
            'id_konsultasi' => $request->id_konsultasi,
            'id_ahli' => $request->id_ahli,
            'id_user' => $request->id_user,
            'namakonsultasi' => $request->namakonsultasi,
            'tanggalkonsultasi' => $request->tanggalkonsultasi,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);
    
        if ($data) {
            $response["error"] = FALSE;
            $response["success"] = 1;
            $response["message"] = "Data Sudah Di simpan";
            echo json_encode($response);
        } else {
            $response["error"] = TRUE;
            $response["success"] = 0;
            $response["message"] = "gagal simpan data";
            echo json_encode($response);
        }
    }
}
