@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Marcas</h1>
    
    {{-- <div class="mb-3">
        <a href="{{ route('marcas.create') }}" class="btn btn-primary">Crear nueva Marca</a>
    </div> --}}

    <ul class="list-group">
        @foreach ($Marcas as $marca)
            <li class="list-group-item">
                <a href="{{ route('marcas.show', $marca['id']) }}">
                    {{ $marca['nombre'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection