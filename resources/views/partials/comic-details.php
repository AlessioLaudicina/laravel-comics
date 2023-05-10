@extends('layouts.main')

@section('content')
 <main>
  <div class="container">

   <div class="card-detail">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <h1>{{ $comic['title'] }}</h1>
    <h5>Series: {{ $comic['series'] }} | Release date: {{ $comic['sale_date'] }} | Price: {{ $comic['price'] }}</h5>
    <h4>Art by: {{ implode(', ', $comic['artists']) }} </h4>
    <h4>Written by: {{ implode(', ', $comic['writers']) }} </h4>
    <p>
     {!! $comic['description'] !!}
    </p>
   </div>


  </div>
 </main>
@endsection

@section('title')
 comics
@endsection