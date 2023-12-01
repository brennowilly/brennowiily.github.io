@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</h1><hr>

    <div class="col-8 m-auto">

            @if (isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach ($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach
            </div>
        @endif

        @if(isset($book))
        <form method="post" name="formEdit" id="formEdit" action="{{ url("books/$book->id")}}">
                @method('PUT')
                @else
            <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @endif
            @csrf
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome" value="{{$book->name ?? ''}}">
            <input class="form-control mt-2" type="text" name="email" id="email" placeholder="Email" value="{{$book->email ?? ''}}">
            <input class="form-control mt-2" type="text" name="fone" id="fone" placeholder="Telefone" value="{{$book->fone ?? ''}}">
            <input class="form-control mt-2" type="text" name="cidade" id="cidade" placeholder="Cidade" value="{{$book->cidade ?? ''}}">
            <input class="form-control mt-2" type="text" name="marca" id="marca" placeholder="Marca do Veículo" value="{{$book->marca ?? ''}}">
            <input class="form-control mt-2" type="text" name="ano_veiculo" id="ano_veiculo" placeholder="Ano do Veículo" value="{{$book->ano_veiculo ?? ''}}">
            <input class="form-control mt-2" type="text" name="km" id="km" placeholder="Quilometragem do Veículo" value="{{$book->km ?? ''}}">
            <input class="form-control mt-2" type="text" name="cor" id="cor" placeholder="Cor do Veículo" value="{{$book->cor ?? ''}}">

            <input class="btn btn-primary mt-2" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
        </form>

    </div>

@endsection
