@extends('aulas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Aula</h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ops!</strong> Erro inesperado. Entre em contato com o suporte<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('aulas.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-6">
                <label>Aula</label>
                <input type="text" name="nmAula" class="form-control" placeholder="Digite a Aula">
            </div>
            <div class="form-group col-md-6">
                <label>Professor</label>
                <input type="text" name="nmProfessor" class="form-control" placeholder="Digite o Professor">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-6">
                <label>Quant Aulas</label>
                <input type="text" name="quantAlunos" class="form-control" placeholder="Digite a quantidade">
            </div>
            <div class="form-group col-md-6">
                <label>Data</label>
                <input type="date" name="data" value="yyyy-mm-dd" class="form-control" placeholder="Digite a Data">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="{{ route('aulas.index') }}"> Voltar</a>
    </div>
</form>
@endsection