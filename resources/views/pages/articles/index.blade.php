@extends('theme.master')

@section('page-header')
    <link href="/css/pages/articles-style.css" rel="stylesheet">
    <link href="/css/pages/articles-large-style.css" rel="stylesheet">
@endsection

@section('header-image')
    <img src="/img/blog_header.jpg" alt="header"/>
@endsection

@section('content')
    <div class="posts">
        @if(count($articles) === 0)
            <div>
                No articles found.
            </div>
        @endif
        @foreach($articles as $article)
            <div class="post-grid">
                <div class="img" style="background-image: url('{{ $article->cover->link }}');"></div>
                <div class="title"><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></div>
                <div class="date">{{ $article->published_at->format('M d, Y') }}</div>
                <div class="summary">
                    {{ $article->summary }}<br/>
                </div>
            </div>
        @endforeach
    </div>
    {{ $articles->links() }}
    @include('theme.work-with-us')
@endsection