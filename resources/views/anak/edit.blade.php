@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Data Anak</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('anak.update', $anak) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="ibu_id" value="{{ $anak->ibu_id }}">  
                            </div>
                        </div>

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

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
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
