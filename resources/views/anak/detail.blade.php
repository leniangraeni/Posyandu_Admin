@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $anak->nama }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">NIK</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nik" value="{{ $anak->nik }}">  
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">No. Akta Kelahiran</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_akta_kelahiran" value="{{ $anak->no_akta_kelahiran }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $anak->tanggal_lahir }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $anak->tempat_lahir }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gol_darah" class="col-md-4 control-label">Golongan Darah</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="gol_darah" value="{{ $anak->gol_darah }}">  
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <a href="{{ url('/pemeriksaan_anak/'.$anak->id)}}">Lihat Data Pemeriksaan</a>

        </div>
    </div>
@endsection
