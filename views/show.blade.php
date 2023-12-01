@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1><hr>

    <div class="col-8 m-auto">
        @php
            //$book->find($id);
        @endphp
        Nome: {{$book->name}}<br>
        Email: {{$book->email}}<br>
        Fone: {{$book->fone}}<br>
        Cidade:{{$book->cidade}}<br>
        Marca: {{$book->marca}}<br>
        Ano do Veículo: {{$book->ano_veiculo}}<br>
        Quilotragem do Veículo: {{$book->km}}<br>
        Cor: {{$book->cor}}<br>
    </div>

@endsection

