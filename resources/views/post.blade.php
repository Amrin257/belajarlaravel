@extends('layouts.main')

@section('container')

<h1 class="mb-5">Halaman Single Post</h1>

    {{--   --}}
    <h5>{{ $post->title }}</h5> 

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->username }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {{-- fungsi dibawah menghilang tag html fi text --}}
    {!! $post->body !!}
    <br>
    <a href="/blog" class="text-decoration-none">Back To Post</a>
@endsection