<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($estudante) ? 'Editar Estudante' : 'Adicionar Estudante' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    
<?php include './app/views/sidebar.php'; ?>

    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4"><?= isset($estudante) ? 'Editar Estudante' : 'Adicionar Estudante' ?></h1>
        <form action="<?= isset($estudante) ? '/davos/estudante/update/' . $estudante->id : '/davos/estudante/store' ?>" method="post"
            class="space-y-4">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
                <input type="text" id="nome" name="nome"
                    value="<?= isset($estudante) ? htmlspecialchars($estudante->nome) : '' ?>"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
            </div>

            <div>
                <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição:</label>
                <textarea id="descricao" name="descricao"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required><?= isset($estudante) ? htmlspecialchars($estudante->descricao) : '' ?></textarea>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="ativo" name="ativo"
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" <?= isset($estudante) && $estudante->ativo ? 'checked' : '' ?>>
                <label for="ativo" class="ml-2 block text-sm text-gray-900">Ativo</label>
            </div>

            <div>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Salvar
                </button>
                <a href="/davos"
                    class="ml-2 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Voltar para Lista
                </a>
            </div>
        </form>
    </div>
</body>

</html>
