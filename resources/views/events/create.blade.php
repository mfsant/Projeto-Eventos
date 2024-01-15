@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
  <div id="event-create-container" class="col-md-6 offset-md-3">
    <h2><ion-icon name="calendar-outline"></ion-icon> Crie o seu evento </h2>
    <br>
    <form action="/events" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <br>
      <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
      </div>
      <br>
      <div class="form-group">
        <label for="title">Data do evento:</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <br>
      <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
      </div>
      <br>
      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Descrição"></textarea>
      </div>
      <br>
      <div class="form-group">
        <label for="title">Adicione itens de infraestrutura:</label>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Cadeiras"><i class="fa-solid fa-chair"></i> Cadeiras
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Palco"><ion-icon name="tv"></ion-icon> Palco
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Open Bar"><ion-icon name="beer-outline"></ion-icon> Open Bar
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Open Food"><ion-icon name="fast-food-outline"></ion-icon> Open Food
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Brindes"><ion-icon name="gift-outline"></ion-icon>  Brindes
        </div>
        
      </div>
      <br>
      <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
  </div>
@endsection