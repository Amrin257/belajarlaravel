@extends('layouts.main')

@section('container')

    {{--   --}}
    <h5>{{ $post->title }}</h5> 

    {{-- fungsi dibawah menghilang tag html fi text --}}
    {!! $post->body !!}
    
    <a href="/blog">Back To Post</a>
@endsection