<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request, $id) {
        DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => $request['name'],
            'no_hp' => $request['no_hp'],
            'deskripsi' => $request['deskripsi'],
        ]);
        
        // $primary = DB::table('users')->where('id', $id)->pluck('id')->first();

        return redirect("/profile/$id");
    }
}
