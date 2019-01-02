<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingerController extends Controller
{
    public function index()
    {
        $singers = DB::table('singers')->get();
//        $singers = DB::table('singers')->where('id', '=' , 1 )->get();

        return $singers;
    }

    public function byLetter($char)
    {
        $singers = DB::table('singers')->where('family', 'like' , $char . '%' )->get();
        return $singers;
    }
}
