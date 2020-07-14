@extends('template.courses')

@section('content')
    <form action="">
        <div class="form-group">
            <label for="name">Curso</label>
            <input type="text" name="name" id="name" class="form-control" value="LaraDev">
        </div>
        <div class="form-group">
            <label for="tutor">Nome do tutor</label>
            <input type="text" name="tutor" id="tutor" class="form-control" value="Gustavo Web">
        </div>
        <div class="form-group">
            <label for="email">E-mail do aluno</label>
            <input type="text" name="email" id="email" class="form-control" value="felipeurbansk@gmail.com">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" value="123456">
        </div>
        <div class="form-group">
            <label for="password_confirm">Confirmar senha</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control" value="123456">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
