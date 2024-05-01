@extends('layouts.main')

@section('title', 'Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cadeiras">Cadeiras</input>
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Palco">Palco</input>
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cerveja grátis">Cerveja grátis</input>
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Open Food">Open Food</input>
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Brindes">Brindes</input>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento" />
    </form>
</div>

@endsection