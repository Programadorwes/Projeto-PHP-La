@extends('Layouts.main')

@section('title', 'produtos')

@section('content')


</title><h1>Tela de produtos</h1>

@if($busca != '')
    <p>O usuario está buscando: {{$busca}}</p>
@endif

@endsection