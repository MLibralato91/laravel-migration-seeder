@extends('layouts.app')
@section('mainContent')
    <main>
        <div class="container">
            <h1>Trains</h1>
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
                            <h5>{{ $train->agency }}</h5>
                            <p>Da:{{ $train->departure_station }}</p>
                            <p>A:{{ $train->arrival_station }}</p>

                            <div>
                                <h4>Partenza prevista:{{ $train->arrival_time }}</h4>
                                <h4>Arrivo previsto: {{ $train->departure_time }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
