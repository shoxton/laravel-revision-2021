@extends('layout')

@section('content')
<div style="padding: 2rem;margin-block: 5rem; background-color: rgba(0,0,0,.7);borde-radius: 16px;overflow-y: auto; ">

<h1>{{ $article->title }}</h1>
<p style="font-size: 20px;line-height: 2rem;">{{ $article->body }}</p>

</div>
<a href="/articles/{{ $article->id }}/edit" role="button" class="btn btn-primary btn-large">Edit</a>
@endsection
