@extends('layouts.main')
@section('content')


    <form action="/portfolios" method="POST" class="container col-md-8 form-projeto" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nomeProjeto">Título do projeto</label>
            <input type="text" class="form-control" id="nomeProjeto" name="nomeProjeto">
        </div>
        <div class="form-group">
            <label for="descricaoProjeto">Descrição do projeto</label>
            <input type="text" class="form-control" id="descricaoProjeto" name="descricaoProjeto">
        </div>

        <div class="form-group">
            <label for="capa">Capa do projeto</label>
            <input type="file" class="form-control-file" id="capa" name="capa">
        </div>
        <div class="form-group">
            <label for="filename">Imagens do projeto</label>
            <input type="file" class="form-control-file" id="filename" name="filename">
        </div>
        <div style="text-align: right;margin-bottom: 80px">
            <button type="submit" class="btn btn-enviar">Enviar</button>
        </div>
    </form>

@endsection
