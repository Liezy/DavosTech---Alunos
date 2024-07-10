# Sistema de Gerenciamento de Estudantes (SMS)

O Sistema de Gerenciamento de Estudantes (SMS) é uma aplicação web desenvolvida para gerenciar informações de estudantes de uma instituição educacional. Este projeto foi desenvolvido como parte de um curso de desenvolvimento web usando PHP e MySQL.

## Funcionalidades

- **Listagem de Estudantes:** Visualização de todos os estudantes cadastrados.
- **Adicionar Estudante:** Formulário para cadastrar novos estudantes.
- **Editar Estudante:** Possibilidade de editar informações de estudantes existentes.
- **Ativar/Desativar Estudante:** Toggle para ativar ou desativar a conta de um estudante.

## Tecnologias Utilizadas

- **PHP:** Linguagem de programação principal.
- **MySQL:** Banco de dados para armazenamento de dados.
- **Tailwind CSS:** Framework CSS para estilização.
- **Composer:** Para gerenciamento de dependências PHP.

## Pré-requisitos

- Servidor web local (ex: XAMPP, WAMP) configurado com PHP.
- Banco de dados MySQL configurado.

## Instalação

1. Clone o repositório do projeto.
2. Configure seu servidor web para apontar para a pasta do projeto.
3. Importe o arquivo `database.sql` para o seu banco de dados MySQL.
4. Configure as credenciais do banco de dados em `config.php`.

## Como Usar

1. Acesse o sistema através do navegador web.
2. Use as funcionalidades de listagem, adição, edição e ativação/desativação de estudantes conforme necessário.

## Estrutura do Projeto

davos/
│
├── app/
│ ├── controllers/
│ │ ├── HomeController.php
│ │ └── EstudanteController.php
│ ├── models/
│ │ └── EstudanteModel.php
│ └── views/
│ ├── index.php
│ ├── criar.php
│ └── layout/
│ ├── header.php
│ └── footer.php
│
├── config/
│ └── config.php
│
├── core/
│ ├── App.php
│ ├── Controller.php
│ ├── Database.php
│ └── Model.php
│
├── css/
│ └── styles.css
│
├── vendor/
│
├── .htaccess
├── composer.json
├── composer.lock
└── index.php
