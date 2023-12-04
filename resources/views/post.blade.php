@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Rizal Baihaqi in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
    {!! $post->body !!}

    {{-- // untuk menampilkan gambar pada posts --}}
    {{-- <img src="{{ Route('image.displayImage', $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid"> --}}

    <a href="/posts">Back to Posts</a>

@endsection

