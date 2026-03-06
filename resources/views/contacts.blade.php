@extends('layouts.app')

@section('title', 'Contatti | Moviemania')

@section('content')
    <div class="container-fluid p-0">
        <div class="container-fluid header sub-hero position-relative mb-5">
            <div class="row h-100 align-items-center text-center position-relative">
                <div class="col-12">
                    <h1 class="display-3 text-light fw-bold">Contatti</h1>
                    <p class="lead text-white-50">Resta in contatto con noi sui social.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-light">
        <div class="row justify-content-center g-4 text-center">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="box w-100 d-flex flex-column justify-content-center align-items-center p-4">
                    <i class="bi bi-whatsapp icon mb-3"></i>
                    <p class="mb-0">Scrivici su WhatsApp</p>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="box w-100 d-flex flex-column justify-content-center align-items-center p-4">
                    <i class="bi bi-instagram icon mb-3"></i>
                    <p class="mb-0">Seguici su Instagram</p>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="box w-100 d-flex flex-column justify-content-center align-items-center p-4">
                    <i class="bi bi-facebook icon mb-3"></i>
                    <p class="mb-0">Seguici su Facebook</p>
                </div>
            </div>
        </div>
    </div>
@endsection
