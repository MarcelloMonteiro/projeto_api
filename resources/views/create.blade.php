<!DOCTYPE html>
<html lang="pt-bt">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastrar um novo produto</title>
</header>

<body>

    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="    width: 40rem;
        top: 125px;
        left: 414px;
        position: relative;">
            <h1 style="    top: -58px;
            position: relative;">Faça o seu cadastro</h1>
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Seu nome">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Sua senha">
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg"
                    placeholder="Sua foto">
            </div>
            <button class="btn btn-primary">Salvar</button>
        </div>
    </form>
</body>

</html>
