@extends('layouts.main')

@section('content')

@foreach ($posts as $post)
<article class="mb-5 bg-warning p-3 rounded-4">
    <h1>{{ $post["title"] }}</h1>
    <h5>By: {{ $post["author"] }}</h5>
    <p>{{ $post["content"] }}</p>
</article>
@endforeach

@endsection