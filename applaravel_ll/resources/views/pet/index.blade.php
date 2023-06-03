@extends('layouts.app')
@section('content')

    <h2>Listado de mascotas</h2>

    <a href="{{ url('pet/create') }}">Add pet</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Propietario</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->age }}</td>
                <td>{{ $pet->weight_kg }}</td>
                <td>{{ $pet->owner->full_name }}</td>
                <td>
                    <form method="POST" action="{{ url('/pet/'. $pet->id) }}">
                    @csrf
                    <a href="{{ url('/pet/'. $pet->id . '/edit') }}" class="btn btn-success">Editar</a>
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')"
                    class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
    </table>
    <br/>
    {{ $pets->links('pagination::bootstrap-4') }}
@endsection