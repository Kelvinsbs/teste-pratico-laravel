@extends('templates.template')
@section('content')

    <div class="text-center">
        <a href="{{url('produto/create')}}"> 
            <button btn btn-sucess>Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <th scope="row">{{$produto->codigo}}</th>
                        <td>{{$produto->descricao}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>{{$produto->preco}}</td>
                        <td><a href="{{url("produto/$produto->id/edit")}}"> 
                                <button class="btn btn-dark">Editar</button>
                            </a>
                            <a href="{{url("produto/$produto->id")}}" class="js-del"> 
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection