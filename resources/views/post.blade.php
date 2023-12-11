@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
     
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                {{-- // untuk menampilkan gambar pada posts --}}
                {{-- <img src="{{ Route('image.displayImage', $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid"> --}}

                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection

