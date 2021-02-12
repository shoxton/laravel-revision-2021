@extends('layout')
@section('content')
<div class="d-flex flex-column"  style="overflow-y: auto">
    <h1>Be in touch</h1>
    @if (session('message'))
        <div class="text-success">
            <span>{{ session('message') }}</span>
        </div>
    @endif
    <form action="/contact" method="POST" >
        @csrf
        <fieldset class="form-group">
            <label for="name">
                Name:
            </label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
            <label for="email">
                Email:
            </label>
            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
            <label for="message">
                Message:
            </label>
            <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror"></textarea>
            @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        <button class="btn btn-lg btn-primary">Submit</button>
    </form>

</div>
@endsection
