@extends('app')

@section('content')

    hello
    <h1>Articles</h1>

    <hr>
    <img src="appfiles/photoalbum/6ea59f8b95757bc9174cc8584b720d97.jpg" />
    @foreach($articles as $article)
        <article>
            <h2><a href="{{action('ArticlesController@show', [$article->id])}}"> {{ $article->title }}</a></h2>

            <div class="body">{{$article->excerpt}}<div>
        </article>
    @endforeach

@endsection
@stop