@extends('welcome')

@section('fournisseurs')
    <form action="#" method="post">
        @csrf
        @method('POST')
        <select name="" id="">
            <option value="">Sélectionner le fournisseur</option>
            @foreach ($fournisseurs as $fournisseur)           
                <option value="{{ $fournisseur->code_fournisseur }}">
                    {{ $fournisseur->code_fournisseur }} {{ $fournisseur->fournisseur }}
                </option>            
            @endforeach
        </select>
    </form>
@endsection
   