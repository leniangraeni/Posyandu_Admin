@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Jadwal</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('jadwal.update', $jadwal) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}

                            <div class="form-group">
                                <label for="tanggal" class="col-md-4 control-label">Tanggal</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal" value="{{ $jadwal->tanggal }}">  
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tempat" class="col-md-4 control-label">Tempat</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempat" value="{{ $jadwal->tempat}}">
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
