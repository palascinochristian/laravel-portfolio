@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<div class="jumbotron p-5 mb-4 bg-secondary text-light rounded-3 shadow">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">
            Christian Palascino
        </h1>
        <p class="fs-5">Web Developer Fullstack | Laravel & JavaScript Lover</p>
        <p class="col-md-10 fs-6 text-light">
            Benvenuto nel mio portfolio! Sviluppo applicazioni web moderne, performanti e responsive con tecnologie come Laravel, React e Bootstrap. Dai un’occhiata ai miei progetti o contattami per collaborazioni!
        </p>
        @auth
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger btn-lg mt-3">
            Guarda i miei progetti
        </a>
        @endauth
    </div>
</div>

{{-- Sezione Informativa --}}
<div class="content">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://placehold.co/600x400" class="img-fluid rounded shadow-sm" alt="Christian coding">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Chi sono</h2>
                <p>
                    Sono uno sviluppatore fullstack con un forte interesse per lo sviluppo di soluzioni web intuitive, scalabili e belle da vedere. Esperienza con Laravel, JavaScript, MySQL, REST API, e molto altro.
                </p>
                <p>
                    Sempre curioso, sempre in crescita. Credo in un codice pulito e in una UX coinvolgente.
                </p>
                <a href="{{ route('guest.contacts') }}" class="btn btn-outline-dark mt-3">
                    Contattami
                </a>
                @auth
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-dark mt-3">
                    Modifica il mio profilo
                </a>
                @endauth
                
            </div>
        </div>
    </div>
</div>

@endsection
