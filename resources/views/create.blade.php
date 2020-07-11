<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container my-5">
        <form
            action="@isset($post) {{route('posts.update', ['id' => $post->id])}} @else {{route('posts.store')}} @endisset"
            method="post" autocomplete="off">

            @csrf
            @isset($post) @method('PUT') @endisset

            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="@isset($post) {{$post->title}} @endisset">
            </div>

            <div class="form-group">
                <label for="subtitle">Subtítulo:</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle"
                    value="@isset($post) {{$post->subtitle}} @endisset">
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="@isset($post) {{$post->description}} @endisset">
            </div>

            <button class="btn btn-primary">Enviar!</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
