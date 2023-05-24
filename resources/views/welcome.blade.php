@extends('layouts.app')
@section('mainContent')
    <main>
        <div class="container">
            <h1 class="py-5">I tuoi biglietti</h1>
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-4 pb-5">
                        <div class="card p-3">
                            <div class="d-flex">
                                <img src="{{ Vite::asset('resources/img/image-qr-code.png') }}" alt="">
                                <div class="pt-3">
                                    <h5><span>Numero treno:</span>{{ $train->train_code }}</h5>
                                    <h6><span>Numero Carrozza:</span>{{ $train->number_of_carriages }}</h6>
                                </div>

                            </div>
                            <div class="body ps-2">
                                <h5>{{ $train->agency }}</h5>
                                <p>Da:{{ $train->departure_station }}</p>
                                <p>A:{{ $train->arrival_station }}</p>

                                <div>
                                    <h4>Partenza prevista: {{ substr($train->departure_time, 0, 5) }}</h4>
                                    <h4>Arrivo previsto: {{ substr($train->arrival_time, 0, 5) }}</h4>
                                </div>

                                @if ($train->in_time)
                                    <p class="text-success fw-bolder">In orario</p>
                                @else
                                    <p class="text-warning fw-bolder">In ritardo</p>
                                @endif
                                @if ($train->deleted)
                                    <p class="text-danger fw-bolder">Cancellato</p>
                                @endif
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
