<!DOCTYPE html>
<html lang="pt-bt">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastrar um novo produto</title>
</header>

<body>

    <div class="success-error">
        <h1 class="success-error-h1">Erro ao cadastrar</h1>
        <a href="{{ route('add') }}" class="btn btn-primary">tentar novamente</a>
        </form>
</body>

</html>
