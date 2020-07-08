<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Formulario :: Teste de Rotas</title>
</head>

<body>
    <div class="container my-5">
        <form action="" autocomplete="off">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Felipe">
            </div>

            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Urbanski">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="felipeurbansk@gmail.com">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
