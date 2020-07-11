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
        <a href="{{route('posts.create')}}" class="btn btn-success my-5">Novo post</a>

        @if(Route::currentRouteName() == 'posts.trashed')
        <a href="{{route('posts.index')}}" class="btn btn-warning my-5">Visualizar Todos</a>
        @else
        <a href="{{route('posts.trashed')}}" class="btn btn-warning my-5">Visualizar lixeira</a>
        @endisset

        @isset($posts)
        <section class="articles_list">
            @foreach($posts as $post)
            <article class="mb-5">
                <h1>{{$post->title}}</h1>
                <h2>{{$post->subtitle}}</h2>
                <p>{{$post->description}}</p>
                <small>Criado em: {{date('d/m/Y H:i', strtotime($post->created_at))}} - Editado em:
                    {{date('d/m/Y H:i', strtotime($post->updated_at))}}</small>
                <form
                    action="@if(Route::currentRouteName() == 'posts.trashed') {{route('posts.forceDelete', ['id' => $post->id])}} @else {{route('posts.destroy', ['id' => $post->id])}} @endif"
                    method="post">

                    @method('DELETE')
                    @csrf

                    @if(Route::currentRouteName() == 'posts.trashed')
                    <a href="{{route('posts.restore', ['id' => $post->id])}}" class="btn btn-success px-5">Restaurar</a>
                    @else
                    <a href="{{route('posts.edit', ['id' => $post->id])}}" class="btn btn-primary px-5">Editar</a>
                    @endif
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </article>
            <hr>
            @endforeach
        </section>
        @endisset
        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
