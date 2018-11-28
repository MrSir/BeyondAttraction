@extends('theme.master')

@section('page-header')
    <link href="/css/pages/article-style.css" rel="stylesheet">
    <link href="/css/pages/article-large-style.css" rel="stylesheet">
@endsection

@section('header-image')
    <img src="{{ $article->cover->link }}" alt="header"/>
@endsection

@section('content')
    <div class="post-grid">
        <div class="date">
            <span class="theDate">{{ $article->published_at->format('F d, Y') }}</span>
        </div>
        <div class="title">
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </div>

        <div class="body">{!! $article->body !!}</div>
    </div>
    @include('theme.work-with-us')
@endsection