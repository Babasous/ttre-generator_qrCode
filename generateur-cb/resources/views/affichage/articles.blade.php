@extends('welcome')

@section('articles')
    <form action="#" method="post">
        @csrf
        @method('POST')
        <select name="" id="">
            <option value="">Sélectionner l'article</option>
            @foreach ($articles as $article)           
                <option value="{{ $article->code_article }}">
                    {{ $article->code_article }} {{ $article->article }}
                </option>            
            @endforeach
        </select>
    </form>
@endsection

    