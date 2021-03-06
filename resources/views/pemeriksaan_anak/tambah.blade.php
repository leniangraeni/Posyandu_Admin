@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Tambah Data Pemeriksaan Anak</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('pemeriksaan_anak.simpan', $anak) }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="anak_id" value="{{ $anak->id }}">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tanggal Pemeriksaan</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="tanggal_pemeriksaan">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">Berat Badan</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="berat_badan">  
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nik" class="col-md-4 control-label">Tinggi Badan</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tinggi_badan">  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Imunisasi</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="imunisasi">  
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
