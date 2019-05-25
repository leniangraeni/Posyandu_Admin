@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $pemeriksaan_ibu->tanggal_pemeriksaan }}</div>
                        <div class="panel-body">
                            <p>{{ $pemeriksaan_ibu->berat_badan }}</p>
                            <p>{{ $pemeriksaan_ibu->tinggi_badan }}</p>
                            <p>{{ $pemeriksaan_ibu->tensi }}</p>
                            <p>{{ $pemeriksaan_ibu->lila }}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
