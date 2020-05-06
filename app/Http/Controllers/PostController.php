<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Iklan;

class PostController extends Controller
{
    //
    public function index($user_id) {
        $dataUser = DB::table('users')
        ->where('id', $user_id)
        ->get();

        $data = DB::table('iklan')
        ->where('user_id', $user_id)
        ->get();
        
        return view('profile', ['dataUser' => $dataUser, 'data' => $data]);
    }

    public function page() {
        return view('iklan');
    }

    public function add(Request $data) {
        $this->validate($data, [
            'gambar' => 'required|image|file|max:5120',
        ]);

        $file = $data->file('gambar');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        DB::table('iklan')-> insert([
            'user_id' => Auth::user()->id,
            'judul' => $data -> judul,
            'gambar' => $nama_file,
            'harga' => $data -> harga,
            'kondisi' => $data -> kondisi,
            'alasan' => $data -> alasan,
            'deskripsi' => $data -> deskripsi
        ]);

        $id = Auth::user()->id;
        return redirect("/profile/$id");
    }

    public function search(Request $request) {
        $search = $request -> search;

        $data = DB::table('iklan')
        ->where('judul','like',"%".$search."%")
        ->get();

        $count = $data->count();

        return view('search', ['data' => $data, 'search' => $search, 'count' => $count]);
    }

    public function delete($user_id, $id) {
        DB::table('iklan')
        ->where('user_id', $user_id)
        ->where('id', $id)
        ->delete();
        return redirect("/profile/$user_id");
    }

    public function detail($user_id, $id) {
        $dataUser = DB::table('users')
        ->where('id', $user_id)
        ->get();

        $data = DB::table('iklan')
        ->where('user_id', $user_id)
        ->where('id', $id)
        ->get();

        return view('detail', ['dataUser' => $dataUser, 'data' => $data]);
    }
}
