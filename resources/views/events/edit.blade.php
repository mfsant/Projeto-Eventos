@extends('layouts.main')

@section('title', 'Editando: '. $event->title)

@section('content')
  <div id="event-create-container" class="col-md-6 offset-md-3">
    <h2><ion-icon name="create-outline"></ion-icon> Editando: {{$event->title}} </h2>
    <br>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        <hr>
        <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
      </div>
      <br>
      <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$event->title}}">
      </div>
      <br>
      <div class="form-group">
        <label for="title">Data do evento:</label>
       <input type="date" name="date" id="date" class="form-control" value="{{$event->date}}">
      </div>
      <br>
      <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{$event->city}}">
      </div>
      <br>
      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
          <option value="0">Não</option>
          <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Descrição">{{ $event->description }}</textarea>
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
      <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
  </div>
@endsection