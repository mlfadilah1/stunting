<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdukasiController extends Controller
{
    public function edukasi(Request $request)
    {
        $edukasi = DB::table('edukasi')->get();

        if ($request->has('search')) {
            $search = $request->input('search');
            $edukasi = DB::table('edukasi')
                ->where('title', 'like', '%' . $search . '%')
                ->get();
        }

        return new PostResource(true, 'List Data Edukasi', $edukasi);
    }
    public function detail($id_edukasi)
    {
        $data = DB::table('edukasi')->where('id_edukasi', $id_edukasi)->first();

        echo json_encode($data);
    }
}
