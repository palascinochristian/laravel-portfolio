@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h2 class="mb-0">{{ $project->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Cliente:</strong> {{ $project->client ?? 'Non specificato' }}</p>
            <p><strong>Periodo:</strong> {{ $project->period ?? 'Non specificato' }}</p>
            <hr>
            <h5>Dettagli</h5>
            <p>{{ $project->details ?? 'Nessun dettaglio disponibile.' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                ← Torna all'elenco progetti
            </a>
        </div>
    </div>
</div>
@endsection
