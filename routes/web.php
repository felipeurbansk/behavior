<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/log', function () {
//    Log::emergency("Mensagem de emergencia");
//    Log::alert("Mensagem de alerta");
//    Log::critical("Mensagem critica");
//    Log::error("Mensagem de erro");
//    Log::warning("Mensagem de aviso");
//    Log::notice("Mensagem de noticia");
//    Log::debug("Mensagem de DEBUG");
    Log::info("Mensagem de Informação.", ['id' => 25, 'nome' => 'Felipe Urbanski']);
});

Route::get('/session', function () {

//    session()->get('name', function(){
//        $nameDefault = 'Douglas Urbanski';
//
//        Log::alert("O valor de 'name' está vazio, e foi atribuido o valor padrão: {$nameDefault}");
//
//        session()->put('name', $nameDefault);
//    });

//    session(['email' => 'felipeurbansk@gmail.com']);
    session(['email' => 'douglinhasdoiscoracoes@gmail.com']);

//    session()->push('cart', 'Cafeteira');
//    session()->push('cart', 'Celular samsung');
//    session()->push('cart', 'Minitor DELL');

//    session()->push('users.teams', 'design');
//    session()->push('users.teams', ['arts', 'ceo']);

//    $email = session()->pull('email');
//
//    echo "<h1>{$email}</h1>";

//    session()->flash('status', 'Teste finalizado com sucesso.');
//    session()->keep(['status' => 'Teste finalizado com sucesso.']);

//    session()->forget('email');
//    session()->regenerate();


    if (session()->has('email')) {
        echo "<h3>E-mail existe: " . session()->get('email') . "</h3>";
    } else {
        echo "<p>Parametro email não existe ou está nullo.</p>";
    }

    if (session()->exists('email')) {
        if(session()->has('email')){
            echo "<h3>E-mail existe: " . session()->get('email') . "</h3>";
        } else {
            echo "<h3>Campo email existe mas está vazio.</h3>";
        }
    } else {
        echo "<p>O parâmetro email da sessão não existe.</p>";
    }

    var_dump(session()->all());
});

Route::get('/mail', function() {
    $user = LaraDev\User::find(1);

//    \Illuminate\Support\Facades\Mail::queue(new \LaraDev\Mail\WelcomeMail($user));
//   return new LaraDev\Mail\WelcomeMail($user);

    // Jobs
    LaraDev\Jobs\ProcessWelcomeMail::dispatch($user);

});
