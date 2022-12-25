@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        @foreach ($train as $obj)
            <div class="col-12">
              <div class="card mb-3">
                <div class="card-body">
                 <div class="d-flex justify-content-between align-items-center">
                  <h1 class="card-title text-uppercase ">{{ $obj->azienda}} / <span class="colorp">{{ $obj->codice_treno}}</span></h1>
                  <span class="carrozze"> <i class="fa-solid fa-train-subway"></i> {{$obj->numero_carrozze}}</span>
                 </div>
                  <div class="d-flex justify-content-between">
                    <p class="card-text stations">{{ $obj->stazione_partenza}} &#10132;</p>
                    <p class="card-text stations">&#10132; {{ $obj->stazione_arrivo}}</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="card-text ">{{ $obj->partenza_ora}}</p>
                    <p class="card-text "> {{ $obj->arrivo_ora}}</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h6>
                      @if ($obj->cancellato == 0)
                        @if ($obj->puntuale == 1)
                        <span class="positivec"><i class="fa-solid fa-clock"></i> Treno In Orario</span>
                        @elseif ($obj->puntuale == 0)
                        <span class="negativec"><i class="fa-solid fa-clock"></i> Treno In Ritardo</span>
                        @endif
                      @else
                      <span class="negativeb"><i class="fa-solid fa-circle-xmark"></i> Sospensione Treno</span>
                      @endif
                    </h6>

                  </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>


@endsection

{{-- @section('parag')
    <p> text</p>
@endsection --}}


