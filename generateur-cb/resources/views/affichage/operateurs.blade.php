@extends('welcome')

@section('operateurs')
    <form action="#" method="post">
        @csrf
        @method('POST')
        <select name="" id="">
            <option value="">Sélectionner l'opérateur</option>
            @foreach ($operateurs as $operateur)           
                <option value="{{ $operateur->code_operateur}}">
                    {{ $operateur->code_operateur }} {{ $operateur->operateur }}
                </option>            
            @endforeach
        </select>
    </form>
@endsection
   