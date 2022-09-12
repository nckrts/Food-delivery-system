@extends('adminlte::page')

@section('title', "Detalhe do plano { $plan->name }")

@section('content_header')
    <h1>Detalhes do plano <b>{{ $plan->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
                <ul>
                    <li>
                        <strong>Nome: </strong> {{ $plan->name }}
                    </li>
                    <li>
                        <strong>URL: </strong> {{ $plan->url }}
                    </li>
                    <li>
                        <strong>Preço: </strong> {{ $plan->price}}
                    </li>
                    <li>
                        <strong>Descriçao: </strong> {{ $plan->descripition }}
                    </li>
                </ul>
        </div>
    </div>

@endsection
