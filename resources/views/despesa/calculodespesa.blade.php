@extends('layout.app')
@section('content')
<div class="questionario">
    <h2>Calcular as despesas para produzir</h2>
    <p>Antes de calcular o lucro da sua produção, é importante saber precisamente os gastos que terá de arcar. Nesta calculadora você pode adicionar todos os itens e seus respectivos preços e receber o resultado final.</p>
    <hr>
    <table class="table table-hover">
        <tr>
            <td>Produto</td>
            <td>Valor</td>
            <td>Excluir</td>
            <td>Atualizar</td>
        </tr>
        @foreach($oProdutos as $oProduto)
            <tr>
                <td>{{$oProduto->name}}</td>
                <td>{{$oProduto->valor}}</td>
                <td>
                    {!! Form::open(["route" => ['despesa.destroy', $oProduto->id], 'method' => "DELETE"]) !!}
                    {!! Form::submit('Excluir',['class'=>'btn btn-danger shadow']) !!}
                    {!! Form::close() !!}
                </td>
                <td><a href="{{url('update='.$oProduto->id)}}">Atualizar</a></td>
            </tr> 
        @endforeach
        <div class="card w-70 m-auto">
            <div class="card-header">
                <h1>Gastos Totais: R${{$somatoria}}</h1>
            </div>
        </div>
    </table>
    <a href="{{ url('despesa/create') }}">Create</a>
</div>
@endsection