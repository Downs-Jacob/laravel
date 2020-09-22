@extends('layouts.app')

@section('content')

    Game form goes here!

    @foreach($secondary_objective_options as $option)
        <div>
            {{$option}}
        </div>
    @endforeach

@endsection
