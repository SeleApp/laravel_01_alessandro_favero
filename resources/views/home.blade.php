@extends('layouts.app')

@section('title', 'Home | Cinema Blog')

@section('content')
    {{-- Hero principale della home --}}
    <section class="p-4 p-md-5 mb-4 bg-dark text-white rounded-3 shadow-sm">
        <div class="row align-items-center g-4">
            <div class="col-12 col-lg-7">
                <span class="badge text-bg-warning mb-3">Cinema Blog</span>
                <h1 class="display-5 fw-bold mb-3">Storie, recensioni e cultura cinematografica</h1>
                <p class="lead mb-4">Ogni settimana pubblichiamo consigli sui film da recuperare, analisi sui grandi classici e focus sulle nuove uscite.</p>

                {{-- Pulsanti rapidi verso le sezioni principali --}}
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('about') }}" class="btn btn-warning btn-lg">
                        <i class="bi bi-camera-reels me-2"></i>Scopri il progetto
                    </a>
                    <a href="{{ route('contacts') }}" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-chat-dots me-2"></i>Contattaci
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <img src="{{ asset('media/cinema-hero.jpg') }}" class="img-fluid rounded" alt="Hero Cinema Blog">
            </div>
        </div>
    </section>

    {{-- Anteprime dei contenuti principali --}}
    <section class="row g-4">
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('media/cinema-about.jpg') }}" class="card-img-top" alt="Nuove uscite">
                <div class="card-body d-flex flex-column">
                    <h2 class="h5 card-title">Nuove Uscite</h2>
                    <p class="card-text">Recensioni rapide e prime impressioni sui film appena arrivati.</p>
                    <a href="{{ route('contacts') }}" class="btn btn-outline-primary mt-auto">Segnalaci un film</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('media/cinema-contact.jpg') }}" class="card-img-top" alt="Classifiche cinema">
                <div class="card-body d-flex flex-column">
                    <h2 class="h5 card-title">Top List</h2>
                    <p class="card-text">Le nostre classifiche per genere: thriller, commedie e film d'autore.</p>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary mt-auto">Scopri chi siamo</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h2 class="h5 card-title">Resta aggiornato</h2>
                    <p class="card-text">Hai un film da consigliarci o una collaborazione da proporre? Scrivici sui social.</p>
                    <a href="{{ route('contacts') }}" class="btn btn-primary mt-2">Vai ai contatti</a>
                </div>
            </div>
        </div>
    </section>
@endsection
