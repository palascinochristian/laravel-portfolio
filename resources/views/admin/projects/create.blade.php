@extends('layouts.app')

@section('title', 'Crea nuovo progetto')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Nuovo Progetto</h2>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label><br>
            <select name="type_id" id="type_id">
                
                @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 d-flex">
            @foreach($technologies as $technology)
            <div class="me-2">
            <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}">
            <label for="technology-{{$technology->id}}">{{$technology->name}} </label>
        </div>
            @endforeach

        </div>

        <div class="mb-3">
            <label for="client" class="form-label">Cliente</label>
            <input type="text" class="form-control" name="client" id="client" required>
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Periodo</label>
            <input type="text" class="form-control" name="period" id="period" required>
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Descrizione</label>
            <textarea class="form-control" name="details" id="details" rows="5"></textarea>
        </div>
        
        <div class="d-flex justify-content-between">
          <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">← Torna indietro</a>
          <button type="submit" class="btn btn-success">Aggiungi</button>
          
        </div>
    </form>
</div>
@endsection
