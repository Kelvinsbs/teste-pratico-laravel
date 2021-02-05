@extends('templates.template')
@section('content')
<div style="width: 600px;">
    <h1>Editar</h1>
            <form action="add" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" id="codigo" name="codigo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" class="form-control">
                </div>

                <div class="form-group">
                    <label for="qtd">Quantidade:</label>
                    <input type="text" id="qtd" name="qtd" class="form-control">
                </div>

                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <input type="text" id="preco" name="preco" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
        </div>
@endsection