@extends('front.master.master')

@section('content')

    <div class="container">

        <div class="row my-5">
            <div class="card col-12 p-4">
                <h4 class="card-title">Informações do usuário</h4>

                <div class="card-body">
                    @php $user_first = $users->first(); @endphp

                    <p>Nome: {{$user_first->name}}</p>
                    <p>Email: {{$user_first->email}}</p>

                    <hr>

                    <h3 class="card-title">Promoção</h3>
                    <p>Nome: {{$promotion->name}}</p>
                    <p>Email: {{$promotion->price}}</p>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="card col-12 p-4">
                <h3 class="card-title">HTML helper simples não "executa" o html</h3>
                {{$promotion->textHtml}}

                <p class="card-text">Para exibir utilize esse helper</p>
                {!! $promotion->textHtml !!}

                <div class="card-body">
                    <h2 class="card-title">Laço de repetição</h2>
                    @foreach($users as $user)

                        <div class="container"
                             style="padding: 10px; background-color: {{ ($loop->iteration % 2 !== 0 ? '#DDD' : '#FFF' )  }}">

                            <h5>Total de usuários: {{$loop->count}}</h5>

                            @if ($loop->first)
                                <h2>É o primeiro item.</h2>
                            @elseif ($loop->last)
                                <h2>É o último item.</h2>
                            @endif

                            <p><b>ID:</b> {{$user->id}}</p>
                            <p><b>Nome:</b> {{$user->name}}</p>
                            <p><b>E-mail:</b> {{$user->email}}</p>

                            {{ var_dump($loop) }}

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection


