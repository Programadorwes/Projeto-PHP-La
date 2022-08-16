@extends('Layouts.main')

@section('title', 'produto')

@section('content')
    @if($id != null)
     <p>Exibindo o produto {{$id}}</p>
    @endif 

@endsection