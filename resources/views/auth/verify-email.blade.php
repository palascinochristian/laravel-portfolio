@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica indirizzo E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('È stato inviato un link di verifica alla tua email') }}
                    </div>
                    @endif

                    {{ __('Prima di procedere, verifica il tuo indirizzo email') }}
                    {{ __('Se non hai ricevuto il link di verifica') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clicca qui per riceverlo di nuovo') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
