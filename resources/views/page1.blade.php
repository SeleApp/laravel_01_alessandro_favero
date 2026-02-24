@extends('layouts.app')

@section('title', 'Contacts | Cinema Blog')

@section('content')
    {{-- Pagina contatti del blog di cinema --}}
    <h1 class="mb-3">Contacts</h1>
    <p class="lead">Per collaborazioni, segnalazioni di film o richieste stampa, scrivici sui nostri social.</p>

    <div class="row g-4 mt-1 align-items-stretch">
        <div class="col-12 col-lg-6">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('media/cinema-contact.jpg') }}" class="card-img-top" alt="Social media Cinema Blog">
                <div class="card-body">
                    <h2 class="h4 mb-2">Restiamo in contatto</h2>
                    <p class="mb-0">Seguici ogni settimana per recensioni, rubriche tematiche e consigli su cosa vedere.</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column justify-content-center gap-3">
                    {{-- Link social principali con icone --}}
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg text-start">
                        <i class="bi bi-facebook me-2"></i> Scrivici su Facebook
                    </a>

                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="btn btn-danger btn-lg text-start">
                        <i class="bi bi-instagram me-2"></i> Scrivici su Instagram
                    </a>

                    <a href="https://wa.me/393331234567" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg text-start">
                        <i class="bi bi-whatsapp me-2"></i> Scrivici su WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
