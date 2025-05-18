@extends('layouts.app')

@section('content')
<div class="container py-4">
    

    <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-4 flex-grow-1">Tipologie</h1>
      <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary m-2">
                         Elenco progetti
                    </a>
    <a href="{{ route('admin.types.create') }}" class="btn btn-sm btn-success">
                         Crea Tipologia <i class="bi bi-plus-lg"></i>
                    </a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{ $type->name }}</td>
                <td>{{ $type->description ?? '-' }}</td>
                <td class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('admin.types.edit',$type) }}" class="btn btn-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-trash3 p-1"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
        Sei sicuro di voler eliminare la tipologia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
        <form action="{{route('admin.types.destroy', $type)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>
@if (session('success') || session('error'))
<!-- Modale messaggio flash -->
<div class="modal fade show" id="flashModal" tabindex="-1" style="display:block;" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-{{ session('error') ? 'danger' : 'success' }} text-white">
        <h5 class="modal-title">
            {{ session('error') ? 'Errore' : 'Successo' }}
        </h5>
        <a href="{{ url()->current() }}" class="btn-close"></a>
      </div>
      <div class="modal-body">
        {{ session('error') ?? session('success') }}
      </div>
      <div class="modal-footer">
        <a href="{{ url()->current() }}" class="btn btn-outline-secondary">Chiudi</a>
      </div>
    </div>
  </div>
</div>
@endif

@endsection
