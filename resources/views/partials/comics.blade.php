@extends('layouts.app')

@section('main')
<div class="row">
    @foreach ($comics as $comic)
        <div class="col">
            <div class="card">
                <div class="img">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <div class="series">
                    <h5>{{ $comic['title'] }}</h5>
                </div>
            </div>
        </div>
        
    @endforeach
</div>
    
@endsection