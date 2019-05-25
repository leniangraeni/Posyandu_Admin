@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($pemeriksaan_ibu as $ibu)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('pemeriksaan_ibu.detail', $ibu) }}">{{ $ibu->tanggal_pemeriksaan }}</a>
                            <div class="pull-right">
                                <a href="{{ route('pemeriksaan_ibu.edit', $bayi) }}" class="btn btn-xs btn-default">Edit</a>
                                <form class="" action="{{ route('pemeriksaan_ibu.hapus', $ibu) }}" method="post">
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
