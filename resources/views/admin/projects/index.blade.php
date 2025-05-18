@extends('layouts.app')

@section('content')
<div class="container py-4">
    

    <div class="d-flex align-items-center justify-content gap-2">
      <h1 class="mb-4 flex-grow-1">Elenco Progetti</h1>
      <a href="{{ route('admin.types.index') }}" class="btn btn-sm btn-primary ">
                         Tipologie
                    </a>
                    <a href="{{ route('admin.technologies.index') }}" class="btn btn-sm btn-info text-light">
                         Tecnologie
                    </a>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-success">
                         Crea Progetto <i class="bi bi-plus-lg"></i>
                    </a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Data</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->client ?? '-' }}</td>
                <td>{{ $project->period ?? '-' }}</td>
                <td class="d-flex gap-2 justify-content-center">
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-secondary d-flex align-items-center">
                        Visualizza Progetto
                    </a>
                    <a href="{{ route('admin.projects.edit',$project) }}" class="btn btn-warning">
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
