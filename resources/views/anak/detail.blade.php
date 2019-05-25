@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $anak->nama }}</div>
                        <div class="panel-body">
                            <p>{{ $anak->nik }}</p>
                            <p>{{ $anak->no_akta_kelahiran }}</p>
                            <p>{{ $anak->tanggal_lahir }}</p>
                            <p>{{ $anak->tempat_lahir }}</p>
                            <p>{{ $anak->gol_darah}}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
