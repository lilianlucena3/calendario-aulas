@extends('aulas.layout')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Calendário de Aulas</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('aulas.create') }}">Adicionar Aula</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-hover">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Aula</th>
        <th scope="col">Professor</th>
        <th scope="col">Quant. Alunos</th>
        <th scope="col">Data</th>
        <th scope="col">Ação</th>
    </tr>
    @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->nmAula }}</td>
        <td>{{ $value->nmProfessor }}</td>
        <td>{{ $value->quantAlunos }}</td>
        <td>{{ $value->data }}</td>
        <td>
            <form action="{{ route('aulas.destroy',$value->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('aulas.show',$value->id) }}">Visualizar</a>
                <a class="btn btn-primary" href="{{ route('aulas.edit',$value->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $data->links() !!}
@endsection