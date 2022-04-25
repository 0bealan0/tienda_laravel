@extends('layout')
@section('main')
    <x-ancla ref="{{route('productos.create')}}">Nuevo producto</x-ancla>
    <x-ancla ref="{{route('index')}}">Volver</x-ancla>

    <table>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->nombre_corto}}</td>
            <td>{{$producto->PVP}}</td>
        </tr>
        </table>
    @endforeach
@endsection
