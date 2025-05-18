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
            <p><strong>Type:</strong> {{ $project->type->name ?? 'Non specificato' }}</p>
            <hr>
            <h5>Dettagli</h5>
            <p>{{ $project->details ?? 'Nessun dettaglio disponibile.' }}</p>
        </div>
        <div class="card-footer d-flex gap-2 justify-content-end">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                ← Torna indietro
            </a>
            <a href="{{ route('admin.projects.edit',$project) }}" class="btn btn-warning">
                Modifica
            </a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina
                    </button>
        </div>
    </div>
</div>

{{-- Modale per conferma --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conferma eliminazione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
