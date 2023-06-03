@extends('layouts.app')
@section('content')

    <h2>Editar Registro de Mascota</h2>

    <form action="{{ url('/pet/'. $pet->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        @include('pet.form')
    
    </form>
@endsection