@extends('layouts.main')

@section('title')
  {{ $prodotto["titolo"] }}
@endsection

@section('main-content')

  @if ($id > 0)
    <a href="{{ route('dettaglio-prodotto', $prev_id) }}">prodotto precedente</a>
  @endif

  @if ($id < $numero_prodotti - 1)
    <a href="{{ route('dettaglio-prodotto', $next_id) }}">prodotto successivo</a>
  @endif

  <h1>{{ $prodotto["titolo"] }}</h1>
  <img src="{{ $prodotto["src-h"] }}" alt="Immagine prodotto">
  <img src="{{ $prodotto["src-p"] }}" alt="Immagine prodotto">
  <p>{!! $prodotto["descrizione"] !!}</p>


@endsection
