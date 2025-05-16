@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">Benvenuto nella tua Dashboard</h2>

    <div class="row">
        {{-- Card: Progetti --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title">I miei progetti</h5>
                        <p class="card-text">Gestisci e visualizza i progetti del tuo portfolio.</p>
                    </div>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-3">
                        Vai ai Progetti
                    </a>
                </div>
            </div>
        </div>

        {{-- Card: Profilo --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title">Il mio profilo</h5>
                        <p class="card-text">Modifica le tue informazioni personali e di accesso.</p>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">
                        Modifica Profilo
                    </a>
                </div>
            </div>
        </div>

        {{-- Card: In costruzione (placeholder) --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-secondary">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title text-muted">Altre sezioni</h5>
                        <p class="card-text text-muted">In arrivo... Presto potrai gestire nuove funzionalità.</p>
                    </div>
                    <button class="btn btn-outline-secondary mt-3" disabled>
                        Coming soon
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
