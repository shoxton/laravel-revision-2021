@extends('layout')

@section('content')
<h1>Create Article</h1>
<form method="POST" action="/articles" class="container" style="overflow-y: auto">

    @csrf

    <div class="row">
        <div class="col-md-8">
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
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="mt-3">
                <label for="tags" class="form-label">Tags</label>
                <select name="tags[]" id="tags" multiple class="form-select @error('tags') is-invalid @enderror">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                @error('tags')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

  </form>
@endsection
