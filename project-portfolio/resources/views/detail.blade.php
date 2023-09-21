<x-layout>
  <x-slot name="title"> Dettaglio servizi </x-slot>
<main>
  <x-navbar />
 <x-card :services="$nome"/>
  
  {{--<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 href="#" class="card-title">{{$nome}}</h5>
  </div>--}}
</main>
</x-layout>