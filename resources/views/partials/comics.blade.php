@extends('layouts.app')

@section('content')
 <main>
  <h2 class>Current series</h2>
  <div class="content">
   @foreach ($comics as $comic)
    <div class="card">
     <a href="{{ route('']]) }}">
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
      <h4>{{ $comic['title'] }}</h4>
     </a>
    </div>
   @endforeach
  </div>
  <button>Load more</button>
 </main>
@endsection

@section('title')
 comics
@endsection