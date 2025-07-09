@extends('layouts.mythical')

@section('title', $creature->name . ' | Catatan Legenda')

@section('page-title', $creature->name)

@section('back-button')
    <button class="exit" onclick="goBack()"><span><b>Kembali</b></span></button>
@endsection

@section('content')
    <div class="item visible" id="item-detail">
        <img src="{{ asset('images/' . $creature->image) }}" alt="{{ $creature->name }}" />
        
        @foreach(explode("\n\n", $creature->description) as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
    </div>
@endsection