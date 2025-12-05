@extends('layouts.admin')

@section('title', 'Painel ADM - Dashboard')

@section('breadcrumb', 'Dashboard')

@section('content')
        <div class="admin-card"> 
            <h2>Painel Principal</h2>
            <p class="subtitle">Bem-vindo ao administrador da loja. Selecione uma opção para gerenciar sua loja.</p>

            <div class="dashboard-stats" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
                <div style="background: #f5f5f5; padding: 20px; border-radius: 8px;">
                    <h3 style="margin: 0; color: #999;">Total de Produtos</h3>
                    <p style="font-size: 2.5em; margin: 10px 0 0 0; font-weight: bold;">{{ $totalProducts ?? 0 }}</p>
                </div>
                <div style="background: #f5f5f5; padding: 20px; border-radius: 8px;">
                    <h3 style="margin: 0; color: #999;">Usuários Cadastrados</h3>
                    <p style="font-size: 2.5em; margin: 10px 0 0 0; font-weight: bold;">{{ $totalUsers ?? 0 }}</p>
                </div>
                <div style="background: #f5f5f5; padding: 20px; border-radius: 8px;">
                    <h3 style="margin: 0; color: #999;">Produtos com Baixo Estoque</h3>
                    <p style="font-size: 2.5em; margin: 10px 0 0 0; font-weight: bold; color: #d32f2f;">{{ $lowStockProducts ?? 0 }}</p>
                </div>
            </div>

            <div class="dashboard-navigation">
                
                <a href="{{ route('adm-produto') }}" class="dashboard-link-card">
                    <i class="fas fa-boxes fa-2x"></i> <span>Produtos em Estoque</span>
                    <p>Visualizar e gerenciar produtos existentes.</p>
                </a>

                <a href="{{ route('adm-usuarios') }}" class="dashboard-link-card">
                    <i class="fas fa-users fa-2x"></i> <span>Usuários Cadastrados</span>
                    <p>Verificar e administrar contas de usuários.</p>
                </a>

                <a href="{{ route('adm-produto-criar') }}" class="dashboard-link-card">
                     <i class="fas fa-plus-circle fa-2x"></i> <span>Cadastrar Novo Produto</span>
                    <p>Adicionar novos itens ao catálogo da loja.</p>
                </a>
                
                </div>
        </div>
@endsection