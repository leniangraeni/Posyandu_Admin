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
                                    <input type="" class="form-control" name="name" value="{{ $ibu->name }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email" value="{{ $ibu->email }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="password" value="{{ $ibu->password }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_kk" class="col-md-4 control-label">No. Kartu Keluarga</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="no_kk" value="{{ $ibu->no_kk }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nik" class="col-md-4 control-label">NIK</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nik" value="{{ $ibu->nik }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="alamat" value="{{ $ibu->alamat }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_telp" class="col-md-4 control-label">No. Telepon</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="no_telp" value="{{ $ibu->no_telp }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_suami" class="col-md-4 control-label">Nama Suami</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_suami" value="{{ $ibu->nama_suami }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $ibu->tanggal_lahir }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $ibu->tempat_lahir }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_jkn" class="col-md-4 control-label">Nomor JKN</label>

                                <div class="col-md-6">
                                    <input type="trxt" class="form-control" name="no_jkn" value="{{ $ibu->no_jkn }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gol_darah" class="col-md-4 control-label">Golongan Darah</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="gol_darah" value="{{ $ibu->gol_darah }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status_kematian" class="col-md-4 control-label">Status Kematian</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="status_kematian" value="{{ $ibu->status_kematian }}">  
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('anak.index', $ibu)}}">Lihat Data Anak</a>
                    <br><a href="{{ url('/pemeriksaan_ibu/'.$ibu->id)}}">Lihat Data Pemeriksaan</a>
                    <br>
                    <a href="{{ route('anak.tambah', $ibu)}}">Tambah Data Anak</a>
            </div>
        </div>
    </div>
@endsection
