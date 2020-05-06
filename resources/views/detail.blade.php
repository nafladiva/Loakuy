@extends('layouts.app')

@section('content')

    @foreach($data as $d)
        <a href="javascript:history.back()" class="btn btn-primary ml-4 mt-4" style="border-radius: 20px; padding: 7px 25px;">
            <i class="fa fa-arrow-left"></i> Back
        </a>
        <div class="container bg-light mt-3 p-3">
            <h1 class="text-center m-3">{{$d->judul}}</h1>
        </div>
        <div class="container-fluid d-flex">
            <div class="col-lg-6 mt-3 p-4 text-center">
                <img src="{{ url('/data_file/'.$d->gambar) }}" style="max-height: 350px;">
            </div>
            <div class="col-lg-6 mt-3 pl-5">
                <br><br>
                    <div class="bg-light-gray">
                        <h2>Harga</h2>
                        <p>Rp. {{$d->harga}}</p>
                    </div>
                    <br>
                    <div>
                        <h2>Kondisi Barang</h2>
                        <p>{{$d->kondisi}} / 10</p>
                    </div>
                    <br>
                    <div class="bg-light-gray">
                        <h2>Alasan dijual</h2>
                        <p>{{$d->alasan}}</p>
                    </div>
            </div>
        </div>

        <div class="container mt-5">
            <h3>Deskripsi Barang</h3>
            <p>{{$d->deskripsi}}</p>
        </div>
    @endforeach

    @foreach($dataUser as $du)
        <div class="container mt-5">
            <div class="jumbotron" style="border-radius: 30px;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-2 justify-content-center">
                        @if (isset($du->jk) && $du->jk == 'Perempuan')
                            <img src="{{ asset('images/female-avatar.png') }}" class="rounded-circle" style="max-width: 170px;">
                        @elseif (isset($du->jk) && $du->jk == 'Laki-laki')
                            <img src="{{ asset('images/male-avatar.png') }}" class="rounded-circle" style="max-width: 170px;">
                        @endif
                    </div>
                    <div class="col-lg-8 ml-3 p-4">
                        <div>
                            <h1><strong>{{ $du -> name }}</strong></h1>
                        </div>
                        <div>
                            <h2>{{$du -> no_hp}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection