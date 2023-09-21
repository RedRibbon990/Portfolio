<x-layout>
  <x-slot name="title"> Servizi </x-slot>
<main>
<x-navbar />


@forelse ($services as $services)
{{-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$services}}</h5>
      <a href="{{route('dettaglio', ['nome' => $services])}}" class="card-link">Card link</a>
  </div>
</div> --}}
<x-card :services="$services"/>
@empty 
Servizi in arrivo ...
@endforelse

  

  <article class="artcontenitore">
    Sono in chi servizi
    </article>

</main>
</x-layout>