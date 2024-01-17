<x-layout>
    <section class="py-3 bg-black">
        <div class="container mt-5">
            <h2 class="mb-4 text-center text-light">Servizi Offerti</h2>
            <div class="row justify-content-center">
                @foreach($services as $service)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset($service['cover']) }}" class="card-img-top"
                                alt="{{ $service['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service['name'] }}</h5>
                                <p class="card-text">Costo: ${{ $service['costo'] }}</p>
                                <p class="card-text">Tempo di Realizzazione: {{ $service['tempo_di_realizzazione'] }}</p>
                            </div>
                            <div class="card-footer bg-white border-0 text-center">
                                <a href="{{ route('company.detail', ['nome' => $service['uri']]) }}" class="btn btn-primary">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
