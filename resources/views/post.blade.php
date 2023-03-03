@extends('layout.main')

@section('container')
<article>
    <h1 class="text-3xl">{{ $post["tittle"] }}</h1>
    <h1 class="text-2xl">By : {{ $post["author"] }}</h1>
    <p class="mb-4 leading-5">{{ $post["body"] }}</p>
</article>

<a href="/posts">Kembali</a>

@endsection
