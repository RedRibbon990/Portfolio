<div class="card" style="width: 18rem;">
    <img src="{{$services['cover']}}" class="card-img-top" alt="..."> 
    <div class="card-body">
      {{--<h5  class="card-title">{{$services['name']}}</h5>--}}
      <a href="{{route('dettaglio', ['nome' => $services['uri']])}}" class="card-link">{{$services['name']}}</a>
      <p class="card-title">Costo {{$services['costo']}} € </p>
      <p  class="card-title">Tempo di realizzazione {{$services['tempo_di_realizzazione']}}</p>
        
    </div>
  </div>
