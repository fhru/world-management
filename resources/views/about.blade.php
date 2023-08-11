@extends('layouts.main')

@section('content')
<h1>Halaman About</h1>
<span class="fs-1">
    Halo perkenalkan nama saya {{ $name }}
</span>
<br>
<span class="fs-3">
    Email: {{ $email }}
</span>
@endsection