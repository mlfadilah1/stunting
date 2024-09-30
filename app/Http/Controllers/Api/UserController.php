<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Validasi data input dari request
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // Cari user berdasarkan username dan pastikan status-nya true
        $user = User::where('name', $request->name)
            ->where('level', 'Pengguna')
            ->first();

        if (!$user) {
            // User tidak ditemukan
            return response()->json([
                'error' => true,
                'success' => 0,
                'message' => 'Login gagal. Pengguna tidak ditemukan.',
            ]);
        }

        // Verifikasi kata sandi
        $verifikasi = password_verify($request->password, $user->password);

        if ($verifikasi) {
            // Buat data yang akan dikirim ke Android sebagai respons
            $userData = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'level' => $user->level,
                'password' => $user->password,
                'foto' => $user->foto
                // tambahkan kolom lainnya sesuai kebutuhan
            ];

            return response()->json([
                'error' => false,
                'success' => 1,
                'message' => 'Berhasil Login',
                'user_data' => $userData,
            ]);
        } else {
            return response()->json([
                'error' => true,
                'success' => 0,
                'message' => 'Login gagal. Username dan Password tidak sesuai.',
            ]);
        }
    }
    function register(Request $request)
    {
        $data = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'level' => 'Pengguna', // Set level ke Pengguna
            
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
