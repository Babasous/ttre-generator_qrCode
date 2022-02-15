@section('pays')
   @csrf
    
    <form action="" method="get">
        <select name="" id="">
            <option value="">Choississez le pays</option>
            @foreach ($pays as $pay)           
                <option value="{{ $pay->code_pays }}">
                    <li>{{ $pay->code_pays }} {{ $pay->pays }}</li>
                </option>            
            @endforeach
        </select>
    </form> 
@endsection

    