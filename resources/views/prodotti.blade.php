@extends('layouts.main')

@section('title')
  Prodotti
@endsection

@section('main-content')
  <div class="pasta-section">
    <div class="container">
      @foreach ($tipi_pasta as $key => $tipo_pasta)
        @if (!empty($tipo_pasta))
          <h2>{{ $key }}</h2>
          <ul class="pasta-menu">
            @foreach ($tipo_pasta as $prodotto)
              <li class="box-prodotto">
                <img class="immagine-prodotto" src="{{ $prodotto["src"] }}" alt="Immagine pasta">
                <div class="layover">
                  <h3><a href="{{ route('dettaglio-prodotto', $prodotto["id"]) }}">{{ $prodotto["titolo"] }}</a></h3>
                  <a href="{{ route('dettaglio-prodotto', $prodotto["id"]) }}"><img src="{{ asset("images/icon.svg")}}" alt="Icona posate"></a>
                </div>
              </li>
            @endforeach
          </ul>
        @endif
      @endforeach
    </div>
  </div>
@endsection
