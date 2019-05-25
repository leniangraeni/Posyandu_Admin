@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($pemeriksaan_ibu as $ibu)
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <a href="{{ url('/pemeriksaan_ibu/'.$ibu->id) }}">{{ $ibu->ibu_id }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection
