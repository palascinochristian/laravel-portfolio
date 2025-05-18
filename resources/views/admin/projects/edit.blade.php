@extends('layouts.app')

@section('title', 'Modifica progetto')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Modifica Progetto</h2>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $project->name }}" required>
        </div>
         <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <select name="type_id" id="type_id">
                
                @foreach ($types as $type)
                <option value="{{$type->id}}"{{$project->type_id == $type->id? 'selected': ''}}>{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="client" class="form-label">Cliente</label>
            <input type="text" class="form-control" name="client" id="client" value="{{ $project->client }}" required>
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Periodo</label>
            <input type="text" class="form-control" name="period" id="period" value="{{ $project->period }}" required>
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Descrizione</label>
            <textarea class="form-control" name="details" id="details" rows="5">{{ $project->details }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
          <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">← Torna indietro</a>
          <button type="submit" class="btn btn-success">Salva modifiche</button>
        </div>
          
    </form>
</div>
@endsection
