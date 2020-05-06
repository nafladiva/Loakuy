<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function baju() {
        $search = 'baju';

        $data = DB::table('iklan')
        ->where('judul','like',"%".$search."%")
        ->get();

        $count = $data->count();

        return view('search', ['data' => $data, 'search' => $search, 'count' => $count]);
    }

    public function kamera() {
        $search = 'kamera';

        $data = DB::table('iklan')
        ->where('judul','like',"%".$search."%")
        ->get();

        $count = $data->count();

        return view('search', ['data' => $data, 'search' => $search, 'count' => $count]);
    }

    public function handphone() {
        $search = 'handphone';

        $data = DB::table('iklan')
        ->where('judul','like',"%".$search."%")
        ->get();

        $count = $data->count();

        return view('search', ['data' => $data, 'search' => $search, 'count' => $count]);
    }

    public function laptop() {
        $search = 'laptop';

        $data = DB::table('iklan')
        ->where('judul','like',"%".$search."%")
        ->get();

        $count = $data->count();

        return view('search', ['data' => $data, 'search' => $search, 'count' => $count]);
    }
}
