@extends('layouts.app')

@section('content')
<h2>Criar Tarefa</h2>

<form action="{{ route('tasks.store') }}" method="POST" class="mt-3">
    @csrf

    <div class="mb-3">
        <label class="form-label">Titulo *</label>
        <input type="text" name="title" class="form-control"
               value="{{ old('title') }}">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <button class="btn btn-success">Criar</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
