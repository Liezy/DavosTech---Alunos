<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<?php include './app/views/sidebar.php'; ?>

    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Lista de Estudantes</h1>
        <a href="/davos/estudante/create"
            class="mb-4 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Adicionar Estudante
        </a>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 mt-4">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            E-mail
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Telefone
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Valor da Mensalidade
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ativo
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Observação
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach ($estudantes as $estudante): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($estudante->nome) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($estudante->email) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($estudante->telefone) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($estudante->valor_mensalidade) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $estudante->ativo ? 'Sim' : 'Não' ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($estudante->observacao) ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="/davos/estudante/edit/<?= $estudante->id ?>"
                                class="text-indigo-600 hover:text-indigo-900">Editar</a>
                            <form action="/davos/estudante/delete/<?= $estudante->id ?>" method="post" class="inline"
                                onsubmit="return confirm('Tem certeza que deseja apagar este estudante?');">
                                <button type="submit"
                                    class="text-red-600 hover:text-red-900 ml-2 focus:outline-none">Apagar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>