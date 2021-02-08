@extends('layout')

@section('content')
<h1>Update Article</h1>
<form method="POST" action="/articles/{{ $article->id }}" >

    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $article->title }}">
      @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="excerpt" class="form-label">Excerpt</label>
      <textarea type="text" class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt" >{{ $article->excerpt }}</textarea>
      @error('excerpt')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{ $article->body }}</textarea>
      @error('body')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
