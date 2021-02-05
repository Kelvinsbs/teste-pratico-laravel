@extends('templates.template')
@section('content')

    <h1 class="text-center">@if(isset($produto)) Editar @else Cadastrar @endif</h1>
        <div class="col-8 m-auto">
            @if(isset($errors) && count($errors) > 0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach($errors->all() as $erro)
                        {{$erro}} <br>
                    @endforeach
                </div>
            @endif
        @if(isset($produto))
            <form name="formEdit" id="formEdit" action="{{url("produto/$produto->id")}}" method="POST">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" action="{{url('produto')}}" method="POST">
        @endif
            
                @csrf

                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" id="codigo" name="codigo" class="form-control" value="{{$produto->codigo ?? ''}}" >
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" class="form-control" value="{{$produto->descricao ?? ''}}" >
                </div>

                <div class="form-group">
                    <label for="qtd">Quantidade:</label>
                    <input type="text" id="qtd" name="qtd" class="form-control" value="{{$produto->quantidade ?? ''}}" >
                </div>

                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <input type="text" id="preco" name="preco" class="form-control" value="{{$produto->preco ?? ''}}" >
                </div>

                <button type="submit" class="btn btn-primary">@if(isset($produto)) Editar @else Cadastrar @endif</button>
              </form>
        </div>
@endsection