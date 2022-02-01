@extends('layouts.guests')

@section('content')

    
    <div>
        {{-- Qui andrà Viu --}}
        <carousel :movies-data="{{ json_encode($movies) }}"></carousel>
    </div>

@endsection
