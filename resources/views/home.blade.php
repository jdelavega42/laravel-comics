@extends('layouts.app')
@section('label')
    current series
@endsection
@section('content')
    <div class="comics">
        <ul class="card-section">
            @foreach ($comics as $comic)
                <li class="ms-card">
                    <div>
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <p>{{ $comic['series'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
