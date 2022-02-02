@extends('layouts.guests')

@section('content')

    
    <div class="container">
        {{-- Qui andrà Viu --}}
        <carousel :movies-data="{{ json_encode($movies) }}"></carousel>
        <movies-container></movies-container>
        
    </div>
    

@endsection
