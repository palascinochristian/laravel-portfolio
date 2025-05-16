@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Elenco Progetti</h1>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Periodo</th>
                <th>Dettagli</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->client ?? '-' }}</td>
                <td>{{ $project->period ?? '-' }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-danger">
                        Visualizza Dettagli
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
