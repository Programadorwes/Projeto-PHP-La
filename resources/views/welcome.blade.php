@extends('Layouts.main')

@section('title', 'Wes eventos')

@section('content')

    <h1>Algum titulo</h1>
    <img src="/img/banner.jpg" alt="Banner">
    @if(10 > 4)
            <p> A condição é true </p>
    @endif

    {{ $nome }}

     @if ($nome == "Raissa"),
     <p>O nome é Raissa</p>
     @elseif ($nome == "Wesley")
     <p>O nome é {{ $nome }} e ele tem {{26}} anos e trabalha como {{$profissao}}</p>
     @else 
     <p>o nome não é Raissa</p>
     @endif 

     @for($i = 0; $i < count($arr); $i++)
     <p>{{ $arr [$i]}} - {{$i}}</p>
     @endfor

@endsection
