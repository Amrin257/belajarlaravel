@extends('layouts.main')

@section('container') 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">Halaman Single Post</h1>

                <h5>{{ $post->title }}</h5>   
                
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none "> {{ $post->author->username }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="py-3">
                    {{-- fungsi dibawah menghilang tag html fi text --}}
                    {!! $post->body !!} 
                    <a href="/blog" class="text-decoration-none d-block mt-3">Back To Post</a>
                </article>
                    

            </div>
        </div>
    </div>
 
@endsection