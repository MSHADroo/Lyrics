<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LyricController extends Controller
{
    public function index()
    {
        $lyrics = DB::table('lyrics')->get();

        return $lyrics;
    }

    public function show($id)
    {
        $lyrics = DB::table('lyrics')->where('id', '=' , $id )->get();

        return $lyrics;
    }

    public function search($key)
    {
        $lyrics = DB::table('lyrics')->where('lyric', 'like' , '%' . $key . '%')->get();

        return $lyrics;
    }
}
