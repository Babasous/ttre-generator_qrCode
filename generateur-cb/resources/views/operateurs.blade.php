@section('operateurs')
     @csrf
    
    <form action="" method="get">
        <select name="" id="">
            <option value="">Choississez l'opérateur</option>
            @foreach ($operateurs as $operateur)           
                <option value="{{ $operateur->code_operateur}}">
                    <li>{{ $operateur->code_operateur }} {{ $operateur->operateur }}</li>
                </option>            
            @endforeach
        </select>
    </form>
@endsection
   