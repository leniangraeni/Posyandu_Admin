@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $pemeriksaan_anak->tanggal_pemeriksaan }}</div>
                        <div class="panel-body">
                            <p>{{ $pemeriksaan_anak->berat_badan }}</p>
                            <p>{{ $pemeriksaan_anak->tinggi_badan }}</p>
                            <p>{{ $pemeriksaan_anak->imunisasi }}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
