@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($jadwals as $jadwal)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $jadwal->tanggal }}
                        <div class="pull-right">
                            <form class="" action="{{ route('jadwal.hapus', $jadwal) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>

                    <div class="panel-body">
                        <p>{{ $jadwal->tempat }}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
    
@endsection
