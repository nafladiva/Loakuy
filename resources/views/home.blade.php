@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-6" style="margin-left: 17px; margin-bottom: 20px;">
        <!-- <h1 class="jumbotron" style="text-align:center; background-color:rgb(232, 190, 208);"><i>"Barang bagus tidak mesti baru"</i></h1> -->
        <img class="gambar-header" src="{{ asset('images/loakuy-header.jpg') }}" alt="header" style="border-radius: 20px;">
    </div>
    <!-- <div><p>234 hasil</p></div> -->
</div>

<div class="container">
    <div class="col-12">
        <div>
            <h1 class="ml-3 pt-3">Most searched</h1>
            <div class="card-columns text-center">
                <div class="card card-block m-3" style="background-color: rgb(107, 5, 39);">
                    <a class="card-block stretched-link text-decoration-none" href="/iklan/baju">
                        <h5 class="card-title mt-2" style="color: white;">
                            <strong>Baju</strong>
                        </h5>
                    </a>
                </div>

                <div class="card card-block m-3" style="background-color: rgb(107, 5, 39);">
                    <a class="card-block stretched-link text-decoration-none" href="/iklan/kamera">
                        <h5 class="card-title mt-2" style="color: white;">
                            <strong>Kamera</strong>
                        </h5>
                    </a>
                </div>

                <div class="card card-block m-3" style="background-color: rgb(107, 5, 39);">
                    <a class="card-block stretched-link text-decoration-none" href="/iklan/handphone">
                        <h5 class="card-title mt-2" style="color: white;">
                            <strong>Handphone</strong>
                        </h5>
                    </a>
                </div>

                <div class="card card-block m-3" style="background-color: rgb(107, 5, 39);">
                    <a class="card-block stretched-link text-decoration-none" href="/iklan/laptop">
                        <h5 class="card-title mt-2" style="color: white;">
                            <strong>Laptop</strong>
                        </h5>
                    </a>
                </div>
            </div>
        </div>

            <div class="mt-4">
                <h1 class="ml-3 pt-3">Stuff</h1>
            </div>
            <div class="card-columns">
                @foreach($data as $d)
                    <div class="card card-block m-3" style="background-color: brokenwhite;">
                        <a class="card-block stretched-link text-decoration-none" href="/iklan/{{$d->user_id}}/{{$d->id}}">
                            <img src="{{ url('/data_file/'.$d->gambar) }}" class="card-img-top" style="max-width:200px;">
                            <h5 class="card-title mt-3 pl-3">
                                <strong>{{$d -> judul}}</strong>
                            </h5>
                            <p class="card-title mb-3 pl-3">
                                Rp. {{$d -> harga}}
                            </p>
                        </a>
                    </div>
                @endforeach

            </div>
    </div>
</div>
@endsection