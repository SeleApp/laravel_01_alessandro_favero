@extends('layouts.app')

@section('title', 'Moviemania | Home')

@section('content')
    <div class="container-fluid p-0">
        <div class="container-fluid header position-relative mb-5">
            <div class="row h-100 align-items-center text-center position-relative">
                <div class="col-12">
                    <h1 class="display-1 text-light fw-bold">Moviemania</h1>
                    <p class="lead text-white-50">Scopri film, curiosità e storie che meritano di essere viste.</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a class="btn btn-light btn-lg" href="{{ route('about') }}">Chi siamo</a>
                        <a class="btn btn-outline-light btn-lg" href="{{ route('contacts') }}">Contatti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 text-light">
            <div class="col-12 col-md-4">
                <div class="p-4 rounded-3 bg-black bg-opacity-50 h-100 shadow-sm">
                    <h2 class="h4 fw-semibold mb-2"><i class="bi bi-film me-2"></i>Recensioni</h2>
                    <p class="mb-0">Approfondimenti e consigli veloci per trovare il film giusto.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="p-4 rounded-3 bg-black bg-opacity-50 h-100 shadow-sm">
                    <h2 class="h4 fw-semibold mb-2"><i class="bi bi-stars me-2"></i>Classifiche</h2>
                    <p class="mb-0">Top list tematiche e novità per la tua watchlist.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="p-4 rounded-3 bg-black bg-opacity-50 h-100 shadow-sm">
                    <h2 class="h4 fw-semibold mb-2"><i class="bi bi-people me-2"></i>Community</h2>
                    <p class="mb-0">Unisciti alla conversazione: suggerimenti, opinioni e curiosità.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
