@extends('layouts.app')

@section('content')
<h2>Editar Tarefa</h2>

<form action="{{ route('tasks.update', $task) }}" method="POST" class="mt-3">
    @csrf @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titulo *</label>
        <input type="text" name="title" class="form-control"
               value="{{ old('title', $task->title) }}">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control">{{ old('description', $task->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            <option value="pendente" {{ $task->status->value === 'pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="concluida" {{ $task->status->value === 'concluida' ? 'selected' : '' }}>Concluida</option>
        </select>
    </div>

    <button class="btn btn-primary">Atualizar</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
