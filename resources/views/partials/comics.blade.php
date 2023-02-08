@extends('layouts.app')

@section('main-content')
<div class="row">
    @foreach ($comics as $comic)
    <?php dd($comics[2]['title'])?>
        <div class="col">
            <div class="card">
                <div class="img">
                    
                </div>
                <div class="series">
                    <h5>{{ $comic->title }}</h5>
                </div>
            </div>
        </div>
        
    @endforeach
</div>
    
@endsection