@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $ibu->name }} | <small> {{ $ibu->email }} </small></div>
                        <div class="panel-body">
                            <p>{{ $ibu->password }}</p>
                            <p>{{ $ibu->no_kk }}</p>
                            <p>{{ $ibu->nik }}</p>
                            <p>{{ $ibu->alamat }}</p>
                            <p>{{ $ibu->no_telp }}</p>
                            <p>{{ $ibu->nama_suami }}</p>
                            <p>{{ $ibu->tanggal_lahir }}</p>
                            <p>{{ $ibu->tempat_lahir }}</p>
                            <p>{{ $ibu->no_jkn }}</p>
                            <p>{{ $ibu->gol_darah}}</p>
                            <p>{{ $ibu->status_kematian }}</p>
                        </div>
                    </div>
                    <a href="{{ route('anak.index', $ibu)}}">Lihat Data Anak</a>
            </div>
        </div>
    </div>
@endsection
