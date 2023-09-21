<x-layout>
  <x-slot name="title"> Contatti </x-slot>
<main>
  <x-navbar />

<article class="artcontenitore mt-5 pt-5" >

  <div class="container py-4">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li> {{ $error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('invia')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" value ="{{old('name')}}" name="name" type="text" placeholder="Nome" />
        @error('name')
        <span class="text-danger"> {{$message}} </span>
        @enderror
      </div>
  
      <!--  -->
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" value ="{{old('text')}}" name="text"  type="text" placeholder="Telefono" />
        @error('text')
        <span class="text-danger"> {{$message}}  </span>
        @enderror
      </div>
    <!--  -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" value ="{{old('email')}}" name="email"  type="email" placeholder="Email" />
        @error('email')
        <span class="text-danger"> {{$message}}  </span>
        @enderror
      </div>
      <!-- -->
      <div class="mb-3">
        <label class="form-label" >Messaggio</label>
        <textarea class="form-control" value ="{{old('message')}}" name="message"  type="text" placeholder="Messaggio" style="height: 10rem;"></textarea>
        @error('message')
        <span class="text-danger"> {{$message}} </span>
        @enderror
      </div>
  
      <!--  -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit" >Invia</button>
      </div>
  
    </form>
  
  </div>
</article>
</main>
</x-layout>