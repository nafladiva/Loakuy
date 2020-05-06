@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    @if (Session::has('message'))
    <div class="alert alert-{{ Session::get('message_type') }}" style="margin-top:10px;">{{ Session::get('message') }}</div>
    @endif
</div>

<div class="container mt-4">
    <div class="row d-flex justify-content-center">
        @foreach($dataUser as $du)
        <div class="col-lg-2 col-sm-6 p-4 justify-content-center">
            @if (isset($du->jk) && $du->jk == 'Perempuan')
                <img src="{{ asset('images/female-avatar.png') }}" class="rounded-circle" style="max-width: 170px;">
            @elseif (isset($du->jk) && $du->jk == 'Laki-laki')
                <img src="{{ asset('images/male-avatar.png') }}" class="rounded-circle" style="max-width: 170px;">
            @endif
        </div>
        <div class="col-lg-8 p-4">
            <div class="d-flex justify-content-between">
                <h1>{{ $du -> name }}</h1>
                <div>
                    <a href="/iklan"><button class="btn btn-primary">Tambah Iklan</button></a>
                    <button class="btn btn-primary" data-toggle="modal" href="#editprofile" id="open"><i class="fa fa-cog"></i></button>
                </div>
            </div>
                <div><strong>Nomor HP</strong></div>
                <div><p>{{ $du -> no_hp }}</p></div>

                <div><strong>Deskripsi</strong></div>
                <div><p>{{ $du -> deskripsi }}</p></div>
        </div>
        @endforeach
    </div>
</div>

@foreach($dataUser as $du)
<div class="container">
    <form method="post" action="/editprofile/{{$du -> id}}" id="edit">
    @csrf
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="editprofile">
        <div class="modal-dialog" role="document" style="background-color:white;">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{$du->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{$du->no_hp}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" form="edit" cols="44" rows="7">{{$du->deskripsi}}</textarea>
                        </div>
                    </div>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        </div>
    </form>
</div>
@endforeach

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                    <div class="card-header" style="background-color:rgb(136, 9, 62); color: white;"><h3 class="text-center mb-0">Daftar Iklan</h3></div>

                    <div class="card-body" style="background-color:rgb(232, 190, 208);">

                            <div class="card-columns ml-0">
                                @foreach($data as $d)
                                    <div class="card card-block mt-3 mb-3">
                                        <a href="/iklan/{{$d->user_id}}/{{$d->id}}">
                                            <img src="{{ url('/data_file/'.$d->gambar) }}" class="card-img-top" style="max-width: 200px;">
                                        </a>
                                        <h5 class="card-title mt-3 pl-3"><strong>{{$d->judul}}</strong></h5>
                                        <p class="card-title mt-3 pl-3">Rp. {{$d->harga}}</p>
                                        <a class="btn btn-danger mr-3 mb-3" href="/delete/{{$d->user_id}}/{{$d->id}}" style="float: right; border-radius: 10px;">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
