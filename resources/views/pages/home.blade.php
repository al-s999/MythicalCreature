@extends('layouts.app')

@section('title', 'Catatan Legenda')

@section('content')
    @foreach($creatures as $creature)
        <div class="item" id="item{{ $loop->iteration }}">
            <a href="{{ route('creature.show', $creature->slug) }}">
                <img src="{{ asset('images/' . $creature->image) }}" alt="{{ $creature->name }}" />
                <p><b>{{ $creature->name }}</b></p>
                <p>{{ $creature->short_description }}</p>
            </a>
        </div>
    @endforeach
@endsection