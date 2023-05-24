@extends('layouts.app')
@section('mainContent')
    <main>
        <h1>hello</h1>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->agency }}</li>
            @endforeach
        </ul>
    </main>
@endsection
