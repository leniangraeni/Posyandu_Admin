@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($pemeriksaan_ibu as $periksa)
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $periksa->tanggal_pemeriksaan }}</div>
                        <div class="panel-body">
                            <p>{{ $periksa->berat_badan }}</p>
                            <p>{{ $periksa->tinggi_badan }}</p>
                            <p>{{ $periksa->tensi }}</p>
                            <p>{{ $periksa->lila }}</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
