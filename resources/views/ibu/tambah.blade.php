@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data Ibu</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('ibu.simpan') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_kk" class="col-md-4 control-label">No. Kartu Keluarga</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_kk">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">NIK</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nik">  
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="alamat">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_telp" class="col-md-4 control-label">No. Telepon</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_telp">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_suami" class="col-md-4 control-label">Nama Suami</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_suami">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="tanggal_lahir">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tempat_lahir">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_jkn" class="col-md-4 control-label">Nomor JKN</label>

                            <div class="col-md-6">
                                <input type="trxt" class="form-control" name="no_jkn">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gol_darah" class="col-md-4 control-label">Golongan Darah</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="gol_darah">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_kematian" class="col-md-4 control-label">Status Kematian</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status_kematian">  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
