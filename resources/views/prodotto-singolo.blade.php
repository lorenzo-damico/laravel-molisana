@extends('layouts.main')

@section('title')
  {{ $prodotto["titolo"] }}
@endsection

@section('main-content')

  <div class="sezione-dettaglio-prodotto">

    <div class="container">

      <h1>{{ $prodotto["titolo"] }}</h1>
      <img src="{{ $prodotto["src-h"] }}" alt="Immagine prodotto">
      <img src="{{ $prodotto["src-p"] }}" alt="Immagine prodotto">
      <div class="descrizione-prodotto">
        {!! $prodotto["descrizione"] !!}
      </div>

    </div>

    @if ($id > 0)
      <div class="prev-product">
        <a href="{{ route('dettaglio-prodotto', $prev_id) }}"><i class="fas fa-angle-left"></i></a>
      </div>

    @endif

    @if ($id < $numero_prodotti - 1)
      <div class="next-product">
        <a href="{{ route('dettaglio-prodotto', $next_id) }}"><i class="fas fa-angle-right"></i></a>
      </div>
    @endif

  </div>

@endsection
