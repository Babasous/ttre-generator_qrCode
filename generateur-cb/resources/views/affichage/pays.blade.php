@extends('welcome')

@section('pays')
    <form id="frmPays" action="#" method="post">
        @csrf
        @method('POST')
        <select name="pays" id="">
            <option value="">Sélectionner le pays</option>
            @foreach ($pays as $pay)           
                <option value="{{ $pay->code_pays }}">
                    {{ $pay->code_pays }} {{ $pay->pays }}
                </option>            
            @endforeach
        </select>
    </form>    
@endsection

    