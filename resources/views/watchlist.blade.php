@extends('layouts.app')
@section('title')
Your watchlist
@endsection

<h1>Your watchlist</h1>
@foreach ($watchlist as $film)
<ul>
<li><a href="https://placeholder.com"><img src="http://via.placeholder.com/120x160"></a> {{ $film->title }} </br> {{ $film->body }}</li>
</ul>
<form action="{{ route('add') }}" method="post">
    <button type="submit"> submit </button>
</form>
@endforeach