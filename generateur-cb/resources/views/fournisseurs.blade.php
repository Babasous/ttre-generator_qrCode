@section('fournisseurs')
     @csrf
    
    <form action="" method="get">
        <select name="" id="">
            <option value="">Choississez le fournisseur</option>
            @foreach ($fournisseurs as $fournisseur)           
                <option value="{{ $fournisseur->code_fournisseur }}">
                    <li>{{ $fournisseur->code_fournisseur }} {{ $fournisseur->fournisseur }}</li>
                </option>            
            @endforeach
        </select>
    </form>
@endsection
   