@extends('aulas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Visualizar Aula</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group col-md-6">
            <label>Aula</label>
            <input type="text" name="nmAula" class="form-control" value="{{ $aula->nmAula}}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label>Professor</label>
            <input type="text" name="nmProfessor" class="form-control" value="{{ $aula->nmProfessor}}" disabled>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group col-md-6">
            <label>Quant Aulas</label>
            <input type="text" name="quantAlunos" class="form-control" value="{{ $aula->quantAlunos}}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label>Data</label>
            <input type="date" name="data" value="yyyy-mm-dd" class="form-control" value="{{ $aula->data}}" disabled>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <a class="btn btn-primary" href="{{ route('aulas.index') }}"> Voltar</a>
    </div>
</div>
@endsection