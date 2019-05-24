@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($ibu as $mama)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $mama->name }}
                        <div class="pull-right">
                            <a href="{{ route('ibu.edit', $mama) }}" class="btn btn-xs btn-default">Edit</a>
                            <form class="" action="{{ route('ibu.hapus', $mama) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>

                    <div class="panel-body">
                        <p>{{ $mama->email }}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
    
@endsection
