@extends('layout')

@section('pageTitle')
  Get Cards Now!
@stop

@section('content')
                   <h1>All Cards</h1>
                   @foreach ($allCards as $card)
                    <h2>{{ $card->title }}</h2><p>{{ $card->created_at }}</p> <button> Edit</button>
                   @endforeach
@stop