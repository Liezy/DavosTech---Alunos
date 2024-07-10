<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($estudante) ? 'Editar Estudante' : 'Adicionar Estudante' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4"><?= isset($estudante) ? 'Editar Estudante' : 'Adicionar Estudante' ?></h1>
        <form action="<?= isset($estudante) ? "/davos/estudante/update/{$estudante->id}" : "/davos/estudante/store" ?>" method="post">
            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="nome" name="nome" class="mt-1 block w-full" value="<?= isset($estudante) ? htmlspecialchars($estudante->nome) : '' ?>" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full" value="<?= isset($estudante) ? htmlspecialchars($estudante->email) : '' ?>" required>
            </div>
            <div class="mb-4">
                <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="mt-1 block w-full" value="<?= isset($estudante) ? htmlspecialchars($estudante->telefone) : '' ?>" required>
            </div>
            <div class="mb-4">
                <label for="valor_mensalidade" class="block text-sm font-medium text-gray-700">Valor da Mensalidade</label>
                <input type="number" step="0.01" id="valor_mensalidade" name="valor_mensalidade" class="mt-1 block w-full" value="<?= isset($estudante) ? htmlspecialchars($estudante->valor_mensalidade) : '' ?>" required>
            </div>
            <div class="mb-4">
                <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="senha" name="senha" class="mt-1 block w-full" value="<?= isset($estudante) ? htmlspecialchars($estudante->senha) : '' ?>" required>
            </div>
            <div class="mb-4">
                <label for="observacao" class="block text-sm font-medium text-gray-700">Observação</label>
                <textarea id="observacao" name="observacao" class="mt-1 block w-full"><?= isset($estudante) ? htmlspecialchars($estudante->observacao) : '' ?></textarea>
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="ativo" class="form-checkbox" <?= isset($estudante) && $estudante->ativo ? 'checked' : '' ?>>
                    <span class="ml-2">Ativo</span>
                </label>
            </div>
            <div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Salvar
                </button>
                <a href="/davos/estudante" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 bg-gray-300 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Voltar para Lista
                </a>
            </div>
        </form>
    </div>
</body>

</html>
