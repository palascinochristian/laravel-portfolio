@extends("layouts.app")

@section("title", "Aggiungi un progetto")

@section("content")

<form action="{{route("admin.projects.store")}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome Progetto</label>
        <input type="text" name="name" id="name">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="client">Cliente</label>
        <input type="text" name="client" id="client">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="period">Data</label>
        <input type="text" name="period" id="period">
    </div>

      <div class="form-control mb-3 d-flex flex-column">
        <label for="details">Descrizione</label>
        <textarea name="details" width="100%" rows="5" id="details"></textarea>
    </div>

    <input type="submit" value="Salva">
</form>

@endsection