@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($anak as $bayi)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('anak.detail', $bayi) }}">{{ $bayi->nama }}</a>
                            <div class="pull-right">
                                <a href="{{ route('anak.edit', $bayi) }}" class="btn btn-xs btn-default">Edit</a>
                                <form class="" action="{{ route('anak.hapus', $bayi) }}" method="post">
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
