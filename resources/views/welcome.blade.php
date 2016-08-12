@extends('layout')

@section('pageTitle')
  I love Lucy
@stop

@section('content')
                   {{ $candy }}
                    <!-- for each loop -->
                    @foreach ($people as $person)
                    <!-- if statement -->
                        @if($person==="gina")
                            <li>{{ $person }}</li>
                        @endif
                    <!-- end if statement -->
                    @endforeach
                    <!-- end for each loop -->
                    <button>About Mwah</button>
@stop