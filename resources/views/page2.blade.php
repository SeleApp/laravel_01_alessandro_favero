@extends('layouts.app')

@section('title', 'About Us | Cinema Blog')

@section('content')
    {{-- Hero della pagina About Us --}}
    <section class="p-4 p-md-5 mb-4 bg-light border rounded-3 shadow-sm">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-7">
                <span class="badge text-bg-dark mb-3">About Us</span>
                <h1 class="display-6 fw-bold mb-3">Raccontiamo il cinema con passione</h1>
                <p class="lead mb-0">Siamo un team di appassionati che pubblica recensioni sincere, approfondimenti tematici e consigli pratici su cosa vedere.</p>
            </div>
            <div class="col-12 col-lg-5">
                <img src="{{ asset('media/cinema-about.jpg') }}" class="img-fluid rounded" alt="Team Cinema Blog">
            </div>
        </div>
    </section>

    {{-- Valori e approccio editoriale --}}
    <section class="row g-4">
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h2 class="h5 card-title"><i class="bi bi-film me-2"></i>Recensioni</h2>
                    <p class="card-text mb-0">Analisi chiare e dirette su trama, regia, interpretazioni e impatto emotivo.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h2 class="h5 card-title"><i class="bi bi-stars me-2"></i>Selezione</h2>
                    <p class="card-text mb-0">Scegliamo contenuti utili per aiutarti a trovare il film giusto per ogni serata.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h2 class="h5 card-title"><i class="bi bi-people me-2"></i>Community</h2>
                    <p class="card-text">Dialoghiamo con i lettori e valorizziamo i suggerimenti della community cinefila.</p>
                    <a href="{{ route('contacts') }}" class="btn btn-dark mt-auto">Contatta la redazione</a>
                </div>
            </div>
        </div>
    </section>
@endsection
