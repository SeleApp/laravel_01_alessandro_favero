@extends('layouts.app')

@section('title', 'Chi siamo | Moviemania')

@section('content')
    <div class="container-fluid p-0">
        <div class="container-fluid header sub-hero position-relative mb-5">
            <div class="row h-100 align-items-center text-center position-relative">
                <div class="col-12">
                    <h1 class="display-3 text-light fw-bold">Chi siamo</h1>
                    <p class="lead text-white-50">Una squadra di appassionati di cinema che racconta storie ogni giorno.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-light">
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <h2 class="mb-3">La storia di Moviemania</h2>
                <p>Moviemania nasce come blog indipendente dedicato ai film che emozionano, sorprendono e fanno discutere. Ogni recensione è pensata per darti un quadro rapido ma completo, con curiosità e retroscena di produzione.</p>
                <p class="mb-0">Collaboriamo con autori, studenti di cinema e cinefili da tutta Italia per offrire consigli affidabili e rubriche tematiche. Se vuoi scrivere con noi, contattaci: la community è sempre aperta.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="/media/team.jpeg" class="img-fluid rounded shadow" alt="Il team di Moviemania">
            </div>
        </div>
    </div>
@endsection
