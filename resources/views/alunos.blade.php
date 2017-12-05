@extends('app')

@section('conteudo')

    <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matricula</th>
                    </tr>
                </thead>
                <tbody>
                    @if($alunos->count() > 0)
                            @foreach($alunos as $aluno)
                                <tr>
                                    <th scope="row">{{ $aluno->id_aluno }}</th>
                                    <td>{{ $aluno->nome_aluno }}</td>
                                    <td>{{ $aluno->matricula_aluno }}</td>
                                </tr>
                            @endforeach
                            @endif
                </tbody>
    </table>

    
@endsection