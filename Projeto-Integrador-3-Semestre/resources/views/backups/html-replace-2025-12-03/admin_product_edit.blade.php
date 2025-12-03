<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Editar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')

    <main class="container">
        <section class="admin-section">
            <div class="admin-card">
                <h2>Editar produto #{{ $id }}</h2>
                <p class="subtitle">Atualize informações do produto</p>

                <form class="admin-form">
                    <div class="form-fields">
                        <label>Nome</label>
                        <input type="text" class="input-field" value="Anel Solitário">

                        <label>Preço</label>
                        <input type="text" class="input-field" value="3200.00">

                        <label>Categoria</label>
                        <input type="text" class="input-field" value="Anel">
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-dark" type="submit">Salvar</button>
                        <a href="{{ route('adm-produto') }}" class="btn btn-outline">Cancelar</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
