@extends('layout.main')

@section('container')
<h1 class="text-6xl mb-9">My Post</h1>
@foreach ($posts as $post)
<article>
    <h1 class="text-3xl">
        <a class="text-blue-900 " href="/posts/{{ $post["slug"] }}">
            {{ $post["tittle"] }}
        </a>
    </h1>
    <h1 class="text-2xl">By : {{ $post["author"] }}</h1>
    <p class="mb-4 leading-5">{{ $post["body"] }}</p>
</article>
@endforeach
@endsection
