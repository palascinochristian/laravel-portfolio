@extends('layouts.app')

@section('content')
<div class="jumbotron p-5 mb-4 bg-light border rounded-3 shadow-sm">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Contattami</h1>
        <p class="col-md-8 fs-5">
            Vuoi collaborare o hai domande? Compila il modulo o scrivimi direttamente.
        </p>
    </div>
</div>

<div class="container my-5">
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Il tuo nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="tua@email.com">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Messaggio</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Scrivi qui il tuo messaggio..."></textarea>
        </div>
        <button type="submit" class="btn btn-danger">Invia</button>
    </form>
</div>
@endsection
