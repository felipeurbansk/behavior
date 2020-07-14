@component('mail::message')
<h1>Parbéns {{$user->name}}, você acabou de garantir a sua vaga na turma LaraDev.</h1>

<p>Estamos felizes por estar aqui, vamos voar?</p>
@component('mail::button', ['url' => 'http://localhost:3000'])
    Voar!
@endcomponent
@endcomponent


