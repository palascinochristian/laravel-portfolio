@extends('layouts.app')

@section('title', 'Modifica Tecnologia')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Modifica Tecnologia</h2>


    <form action="{{ route('admin.technologies.update', $technology) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="name" class="form-label">Nome Tecnologia</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$technology->name}}" required>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Colore</label>
            <input type="color" class="form-control form-control-color" name="color" id="color" value="{{ $technology->color ?? '#000000' }}" title="Scegli un colore" required>
        </div>
        
        <div class="d-flex justify-content-between">
          <a href="{{route('admin.technologies.index')}}" class="btn btn-secondary">← Torna indietro</a>
          <button type="submit" class="btn btn-success">Salva modifiche</button>
        </div>
    </form>
</div>
@endsection
