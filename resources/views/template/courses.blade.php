@extends('template.master.master')

@section('content')

    <form action="{{route('courses.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Curso</label>
            <input type="text" name="name" id="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '' ) }}" value="{{old('name')}}">
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="tutor">Nome do tutor</label>
            <input type="text" name="tutor" id="tutor" class="form-control {{ ($errors->has('tutor') ? 'is-invalid' : '' ) }}" value="{{old('tutor')}}">
            @if($errors->has('tutor'))
                <div class="invalid-feedback">
                    {{$errors->first('tutor')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="email">E-mail do aluno</label>
            <input type="text" name="email" id="email" class="form-control {{ ($errors->has('email') ? 'is-invalid' : '' ) }}" value="{{old('email')}}">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control {{ ($errors->has('password') ? 'is-invalid' : '' ) }}" value="{{old('password')}}">
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmar senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ ($errors->has('password') ? 'is-invalid' : '' ) }}"
                   value="{{old('password_confirmation')}}">
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@endsection
