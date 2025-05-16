@extends("layouts.app")

@section("title", "Modifica progetto")

@section("content")

<form action="{{route("admin.projects.update", $project)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome Progetto</label>
        <input type="text" name="name" id="name" value="{{$project->name}}">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="client">Cliente</label>
        <input type="text" name="client" id="client" value="{{$project->client}}">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="period">Data</label>
        <input type="text" name="period" id="period" value="{{$project->period}}">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="details">Descrizione</label>
        <textarea name="details" width="100%" rows="5" id="details">{{$project->details}}</textarea>
    </div>

    <input type="submit" value="Salva">
</form>

@endsection