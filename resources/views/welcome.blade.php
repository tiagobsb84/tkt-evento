@extends('layouts.main')

@section('title', 'Events')

@section('content')

<h1>Algum título</h1>

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach

@endsection