@extends('layout')

@section('content')
<h1>Create Article</h1>
<form method="POST" action="/articles" style="overflow-y: auto">

    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
      @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="excerpt" class="form-label">Excerpt</label>
      <textarea type="text" class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt" >{{ old('excerpt') }}</textarea>
      @error('excerpt')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{ old('body') }}</textarea>
      @error('body')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
