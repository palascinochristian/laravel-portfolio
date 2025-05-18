@extends('layouts.app')

@section('title', 'Crea nuova tipologia')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Nuova Tipologia</h2>

    <form action="{{ route('admin.types.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Tipologia</label>
            <input type="text" class="form-control" name="name" id="name"  required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description" required>
        </div>
        
        <div class="d-flex justify-content-between">
          <a href="{{route('admin.types.index')}}" class="btn btn-secondary">← Torna indietro</a>
          <button type="submit" class="btn btn-success">Aggiungi</button>
        </div>
    </form>
</div>
@endsection
