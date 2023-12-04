@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
        
   {!! $post->body !!}

    {{-- // untuk menampilkan gambar pada posts --}}
    {{-- <img src="{{ Route('image.displayImage', $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid"> --}}

    <a href="/posts">Back to Posts</a>

@endsection

