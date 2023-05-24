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
                            <div class="body ps-2 text-bg-light rounded-2">
                                <h3 class="text-primary">{{ $train->agency }}</h3>
                                <p>Da: <span class="fw-bolder">{{ $train->departure_station }}</span></p>
                                <p>A: <span class="fw-bolder">{{ $train->arrival_station }}</span></p>

                                <div>
                                    <h5>Partenza prevista: {{ substr($train->departure_time, 0, 5) }}</h5>
                                    <h5>Arrivo previsto: {{ substr($train->arrival_time, 0, 5) }}</h5>
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
