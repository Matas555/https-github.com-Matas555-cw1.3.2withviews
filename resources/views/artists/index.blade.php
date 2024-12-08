@extends('layouts.app')

@section('title','Artists')

@section('content')
    <p>A list of artists...</p>
    <ul>
        @foreach ($artists as $artist)
            <li><a href="{{route('artists.show',
            ['id' => $artist->id])}}">{{$artist->name}}</a></li>
        @endforeach
</ul>
@endsection
