@extends('layouts.main')

@section('title', 'Sant Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1><ion-icon name="search-outline"></ion-icon> Buscar Eventos</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
      @if ($search)
      <h2>Buscando por: {{$search}}</h2>
      @else
      
      <p class="subtitle">Veja os eventos dos próximos dias:</p>
      @endif  

      <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="col-md-2" style="width: 20%">
                <div class="card">
                    <img id="img" src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date))}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">{{ count($event->users)}} Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{$search}}! <a href="/">Ver todos!</a></p>
            @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
      </div>
    </div>

@endsection