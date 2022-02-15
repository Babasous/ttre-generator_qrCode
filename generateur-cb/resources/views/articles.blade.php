@section('articles')
    @csrf
    
    <form action="" method="get">
        <select name="" id="">
            <option value="">Choississez l'article</option>
            @foreach ($articles as $article)           
                <option value="{{ $article->code_article }}">
                    <li>{{ $article->code_article }} {{ $article->article }}</li>
                </option>            
            @endforeach
        </select>
    </form>
@endsection

    