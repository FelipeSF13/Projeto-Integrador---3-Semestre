@extends('layouts.admin')

@section('title', 'Painel ADM - Usuários Cadastrados')

@section('breadcrumb', 'Usuários')

@section('content') 

 <div class="admin-card"> 
            <h2>Usuários Cadastrados</h2>
            <p class="subtitle">Total de usuários: {{ $users->total() }}</p>

            @if($message = session('success'))
                <div style="background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 12px; border-radius: 4px; margin-bottom: 20px;">
                    {{ $message }}
                </div>
            @endif

            @if($message = session('error'))
                <div style="background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 12px; border-radius: 4px; margin-bottom: 20px;">
                    {{ $message }}
                </div>
            @endif

            <nav class="admin-tabs">
                <a href="{{ route('adm-produto') }}">Em estoque</a>
                <a href="{{ route('adm-usuarios') }}" class="active">Usuários</a>
                <a href="{{ route('adm-cadastro') }}">Cadastrar Produtos</a>
            </nav>            
            <div class="admin-action-bar">
                <button class="icon-button"><i class="far fa-calendar-alt"></i></button> <button class="btn btn-secondary dropdown-toggle">Filtros <i class="fas fa-chevron-down"></i></button> 
            </div>

            <div class="table-responsive"> 
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th> 
                            <th>ID</th>
                            <th>Data de Registro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    @if($user->id !== Auth::id())
                                        <form action="{{ route('adm-usuarios-delete', $user->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" style="padding: 4px 8px; font-size: 0.85em; background-color: #d32f2f; color: white; border: none; border-radius: 4px; cursor: pointer;" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">Deletar</button>
                                        </form>
                                    @else
                                        <span style="color: #999; font-size: 0.9em;">Você</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="text-align: center; padding: 30px;">
                                    <p>Nenhum usuário encontrado.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($users->hasPages())
                <div style="margin-top: 20px;">
                    {{ $users->links() }}
                </div>
            @endif
        </div>
@endsection