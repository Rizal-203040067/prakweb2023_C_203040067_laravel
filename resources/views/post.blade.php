@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        
    {!! $post->body !!}

    {{-- // untuk menampilkan gambar pada posts --}}
    {{-- <img src="{{ Route('image.displayImage', $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid"> --}}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>

@endsection

