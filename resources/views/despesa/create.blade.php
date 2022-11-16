@extends('layout.app')
@section('content')
<div class="questionario">
    <h2>Calcular as despesas para produzir</h2>
    <p>Antes de calcular o lucro da sua produção, é importante saber precisamente os gastos que terá de arcar. Nesta calculadora você pode adicionar todos os itens e seus respectivos preços e receber o resultado final.</p>
    <hr>
    {{Form::open(['route' => 'despesa.store', 'method' => 'POST', 'enctype'=>'multipart/form-data'])}}
        
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name','',['class'=>'form-control container-sm','required','placeholder'=>'Nome do Produto']) !!}
        
        {!! Form::label('valor', 'Valor') !!}
        {!! Form::text('valor','',['class'=>'form-control container-sm','required','placeholder'=>'Valor do produto']) !!}
        
        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}

    {{Form::close()}}
</div>
@endsection