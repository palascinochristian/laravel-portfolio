@extends('layouts.app')

@section('title', 'Crea nuova tecnologia')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Nuova Tecnologia</h2>

    <form action="{{ route('admin.technologies.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Tecnologia</label>
            <input type="text" class="form-control" name="name" id="name"  required>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Colore</label>
            <input type="color" class="form-control form-control-color" name="color" id="color" required>
        </div>
        
        <div class="d-flex justify-content-between">
          <a href="{{route('admin.technologies.index')}}" class="btn btn-secondary">← Torna indietro</a>
          <button type="submit" class="btn btn-success">Aggiungi</button>
        </div>
    </form>
</div>
@endsection
