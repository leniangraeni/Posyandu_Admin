@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Data Pemeriksaan Ibu</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('pemeriksaan_ibu.update', $pemeriksaan_ibu) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="anak_id" value="{{ $pemeriksaan_ibu->ibu_id }}">  
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tanggal Pemeriksaan</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="tanggal_pemeriksaan" value="{{ $pemeriksaan_ibu->tanggal_pemeriksaan }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">Berat Badan</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="berat_badan" value="{{ $pemeriksaan_ibu->berat_badan}}">  
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">Tinggi Badan</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tinggi_badan" value="{{ $pemeriksaan_ibu->tinggi_badan }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Imunisasi</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="imunisasi" value="{{ $pemeriksaan_ibu->tensi }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Lila</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="imunisasi" value="{{ $pemeriksaan_ibu->lila }}">  
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
