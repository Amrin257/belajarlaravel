 

@extends('layouts.main')

@section('container')

<h2>Halaman About</h2>
<h2>{{ $name }}</h2>
<p>{{ $email }}</p>
<img src="img/{{$image}}" alt="{{ $name }}" width="200">
<script src="js/script.js"></script>
    
@endsection
 