@extends('layout')
@section('content')
<div class="bio">
    <h1>Be in touch</h1>
    <form action="">
        <fieldset>
            <label for="name">
                Name:
            </label>
            <input type="text" id="name">
        </fieldset>
        <fieldset>
            <label for="email">
                Email:
            </label>
            <input type="text" id="email">
        </fieldset>
        <fieldset>
            <label for="message">
                Message:
            </label>
            <textarea name="" id="message" cols="30" rows="10"></textarea>
        </fieldset>
        <button>Submit</button>
    </form>

</div>
@endsection
