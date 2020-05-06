@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="jumbotron" style="padding: 10px;">
        <h1 class="pl-3" style="font-size: 60px;">"{{$search}}"</h1>
        <h4 class="ml-4">Hasil yang didapat: <strong>{{$count}}</strong></h4>
    </div>
</div>

<div class="container">
    <div class="col-12 m-1">
            <div class="card-columns">

                @foreach($data as $d)
                    <div class="card card-block m-3">
                        <a class="card-block stretched-link text-decoration-none" href="/iklan/{{$d->user_id}}/{{$d->id}}">
                            <img src="{{ url('/data_file/'.$d->gambar) }}" style="max-width:200px;">
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