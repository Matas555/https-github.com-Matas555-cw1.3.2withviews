@extends('layouts.app')

@section('title','Artist details')

@section('content')
    <ul>
            <li>Artist's name: {{$artist->name}}</li>
            <li>Monthly Listeners: {{$artist->monthly_listeners}}</li> 
</ul>
@endsection
