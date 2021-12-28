@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
    <h1>Lista de Usuários</h1>
@stop

@section('content')
  @include('_mensagens_sessao')

  <div class="float-right">
    <a href="{{ route('usuarios.create') }}" class="btn btn-success">Novo Usuário</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($usuarios as $usuario)
        <tr>
          <th>{{ $usuario->id }}</th>
          <td>{{ $usuario->name }}</td>
          <td>{{ $usuario->email }}</td>
          <td>
            <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-primary">Editar</a>
            <form method="post" action="{{ route('usuarios.destroy', $usuario)}}" style="display: inline;">
              @method('delete')
              @csrf

              <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar?')">Excluir</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <th></th>
          <td>Nenhum registro foi encontrado</td>
          <td></td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
    {{ $usuarios->links() }}
  </div>
@stop