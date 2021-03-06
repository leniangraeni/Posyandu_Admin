@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($pemeriksaan_anak as $bayi)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('pemeriksaan_anak.detail', $bayi) }}">{{ $bayi->tanggal_pemeriksaan }}</a>
                            <div class="pull-right">
                                <a href="{{ route('pemeriksaan_anak.edit', $bayi) }}" class="btn btn-xs btn-default">Edit</a>
                                <form class="" action="{{ route('pemeriksaan_anak.hapus', $bayi) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                </form>
                               
                            </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection
