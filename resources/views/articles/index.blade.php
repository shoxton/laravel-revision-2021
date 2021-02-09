@extends('layout')

@section('content')
    <ul style="display: flex; width: 100%">
        @forelse ($articles as $article)
            <li style="margin-right: 16px;border: 1px solid rgba(255,255,255,.1);padding: 16px; display: flex; flex-direction: column; justify-content: space-between">
                <h4 style="font-size: 20px;color: rgba(255,255,255,.7)">
                    <a style="color: #fff" href="{{ $article->path() }}">{{ $article->title }}</a>
                </h4>
                <p style="font-size: 16px;color:rgba(255,255,255,.3)">{{ $article->excerpt }}</p>
                <time style="font-size: 12px">{{ $article->created_at }}</time>
            </li>
        @empty
            <p>No relevant posts yet.</p>
        @endforelse
    </ul>
    <div style="color: #fff!important; font-size: 14px">
        {{ $articles->links() }}
    </div>
    <a href="/articles/create" role="button" class="btn btn-primary btn-large">Create</a>
@endsection
