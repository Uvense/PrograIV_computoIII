@extends('layouts.app')
@section('content')
    <h2>Nuevo Registro de Mascota</h2>

    <form action="{{ url('/pet') }}" method="POST">
        @csrf
        @include('pet.form')
    
    </form>
@endsection