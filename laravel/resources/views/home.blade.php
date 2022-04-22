@extends('layouts.standard')

@section('content')
    <main>
        <h1>Treni</h1>
        @foreach ($trains as $train)
            <ul>
                <li>Azienda: {{$train->azienda}} </li>
                <li>Stazione di partenza: {{$train->stazione_partenza}} </li>
                <li>Stazione di arrivo: {{$train->stazione_arrivo}} </li>
                <li>Orario di partenza: {{$train->orario_partenza}} </li>
                <li>Orario di arrivo: {{$train->orario_arrivo}} </li>
                <li>Numero carrozze: {{$train->numero_carrozze}} </li>
                <li>Treno in orario: {{$train->in_orario}} </li>
                <li>treno cancellato: {{$train->cancellato}} </li>
            </ul>
        @endforeach
    </main>
@endsection