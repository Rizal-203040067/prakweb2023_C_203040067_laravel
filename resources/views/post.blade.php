@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>


        {{-- // untuk menampilkan gambar pada posts --}}
        {{-- <img src="{{ Route('image.displayImage', $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid"> --}}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection

