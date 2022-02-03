@extends('layouts.guests')

@section('content')

    
    <div class="container">
        {{-- Qui andrà Viu --}}
        <carousel :movies-data="{{ json_encode($movies) }}"></carousel>

        {{-- In alternativa al componente Viu creo un form qui --}}

        <form action="" method="GET" style="margin:110px 0 20px 0;">  {{-- Il margin 110px mi sposta al di sotto del secondo slider --}}
            <h2>Ricerca Per Titolo </h2>
            <input type="text" placeholder="Titolo del film da cercare" name ="title"
            value="{{Request::query('title')}}">

            {{-- Selezione per categoria  !!! da un risultato solo se la catgeoria e film coincidono nel db--}}
            <select name="categories" id="">
                        <option value=""></option>
                @foreach ($categories as $category)
                        
                        <option value="{{$category->id}}" 
                        {{Request::query("categories") == $category->id ? "selected" : '' }} >
                         {{$category->name}}</option>
                @endforeach
                        
            </select>
           
            <button class="btn btn-primary">Cerca</button>

        </form>

        {{-- Qui inserisco il ritorno del HomeController ossia i datiFiltrati --}}

        
        
        @if (Request::query('title'))

            <h2 class="mt-3">Titoli Trovati</h2>
            <ul>
                
                @foreach ($datiFiltrati as $movie)
            
                    <li><h3><strong>{{$movie->title}} </strong></h3>
                    <img src="{{$movie->coverImg}}" alt="" style="max-height: 250px">
                    </li>

                @endforeach
                
            </ul>
                
        @endif
        





        {{-- <movies-container></movies-container>  {{-- Per caricare il componente Viu --}} 
        
    </div>
    

@endsection
