<x-layout>
    <section class="bg-black text-black pb-5">
        <div class="container">
            <h2 class="card-title text-center text-light py-4">Servizio Creazione E-commerce</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 mb-3">
                    <div class="card mb-3 mx-auto" style="max-width: 600px; border: 1px solid #dee2e6; border-radius: 10px; overflow: hidden;">
                        <img src="{{ asset($service['cover']) }}" class="card-img-top" alt="{{ $service['name'] }}">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card mb-3 mx-auto" style="max-width: 300px; border: 1px solid #dee2e6; border-radius: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">Dettagli del servizio</h5>
                            <p class="card-text">Costo: ${{ $service['costo'] }}</p>
                            <p class="card-text">Tempo di Realizzazione: {{ $service['tempo_di_realizzazione'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sezione Descrizione -->
        <div class="container-fluid">
            <h2 class="card-title text-center text-light pb-2">Descrizione del Servizio</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 mb-3">
                    <div class="card mb-3" style="border: 1px solid #dee2e6; border-radius: 10px; overflow: hidden;">
                        <div class="card-body">
                            <p class="card-text">
                                Avvia la tua attività online con un sito ecommerce professionale. Offriamo una soluzione
                                completa con un'interfaccia intuitiva, carrello della spesa, pagamenti sicuri e gestione
                                del catalogo. Forniamo una piattaforma personalizzata per una customer experience
                                ottimale.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
