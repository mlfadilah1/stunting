<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AhliController extends Controller
{
    public function ahli()
    {
        $data = DB::table('timahli')->get();
        return new PostResource(true, 'List Data Tim Ahli', $data);
    }
}
