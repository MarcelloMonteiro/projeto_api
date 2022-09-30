# API projeto teste

Um projeto desenvolvido em Laravel com o foco no backend contruindo API Rest.

## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/MarcelloMonteiro/projeto_api.git
```

Entre no diretório do projeto

```bash
  cd api
```

Instale as dependências

```bash
  composer install
```

Migrates

```bash
  php artisan migrate
```

Inicie o servidor

```bash
  php artisan serve
```

## Documentação da API

#### Cadastro de usuarios

```http
  POST /api/projeto/register
```

| Parâmetro | Tipo       | Descrição                           |
| :-------- | :--------- | :---------------------------------- |
| `nome`    | `string`   | **Obrigatório**. A chave da sua API |
| `email`   | `string`   | **Obrigatório**. A chave da sua API |
| `Senha`   | `password` | **Obrigatório**. A chave da sua API |
| `foto`    | `file`     | **Obrigatório**. A chave da sua API |

#### Retorna todos ou um usuario buscando por ID ou EMAIL

```http
  GET /api/projeto/seach
```

| Parâmetro | Tipo     | Descrição                                              |
| :-------- | :------- | :----------------------------------------------------- |
| `id`      | `string` | Não são **Obrigatório**. O ID do item que você quer    |
| `email`   | `string` | Não são **Obrigatório**. O email do item que você quer |
