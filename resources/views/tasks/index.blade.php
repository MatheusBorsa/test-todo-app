@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Tarefas</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Nova Tarefa</a>
</div>

<form method="GET" action="{{ route('tasks.index') }}" class="mb-3">
    <select name="status" class="form-select w-auto d-inline" onchange="this.form.submit()">
        <option value="">Todas</option>
        <option value="pendente" {{ request('status') === 'pendente' ? 'selected' : '' }}>Pendente</option>
        <option value="concluida" {{ request('status') === 'concluida' ? 'selected' : '' }}>Concluida</option>
    </select>
</form>

<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Status</th>
            <th>Data de criação</th>
            <th width="130">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>
                @if ($task->status->value === 'pendente')
                    <span class="badge bg-warning text-dark">Pendente</span>
                @else
                    <span class="badge bg-success">Concluida</span>
                @endif
            </td>
            <td>{{ $task->created_at->format('d/m/Y') }}</td>
            <td class="d-flex gap-1">
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info">Editar</a>

                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Deseja excluir esta tarefa?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $tasks->links() }}
@endsection
