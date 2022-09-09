@extends('layouts.main')

@section('main-content')
    <section class="train-container">
        <div class="container">
            @forelse ($train as $train )
                <div class="card">
                    <h2>{{ $train->company }}</h2>
                    <pre> Departure Station: {{ $train->departure_station }} - Arrivals Station: {{ $train->arrivals_station }}</pre>
                    <pre> Departure Time: {{ $train->departure_time }} - Arrival Time: {{ $train->arrival_time }}</pre>
                    <pre> Code: {{ $train->train_code }}</pre>
                    <pre> Number Carriages:{{ $train->number_carriages }}</pre>
                    <pre> In Time:{{ $train->in_time }} - Is Deleted: {{ $train->is_deleted }} </pre>
                </div>
            @empty
                <h3>NON CI SONO FILM</h3>
            @endforelse
        </div>
    </section>
@endsection