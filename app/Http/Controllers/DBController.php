<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //
    public function index() {
        $data = DB::table('iklan') -> paginate(30);
        return view('home', ['data' => $data]);
    }
}
