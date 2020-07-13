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

Route::get('/files', function() {

//    \Illuminate\Support\Facades\Storage::makeDirectory('public/students');
//    \Illuminate\Support\Facades\Storage::deleteDirectory('public/course');

//    \Illuminate\Support\Facades\Storage::disk()->put('treinamentos-upinside.txt', 'O melhor curso de laravel do mercado.');
//    \Illuminate\Support\Facades\Storage::disk('public')->put('upinside.txt', 'O melhor curso de laravel do mercado.');

//    echo \Illuminate\Support\Facades\Storage::get('treinamentos-upinside.txt');

//    return \Illuminate\Support\Facades\Storage::download('treinamentos-upinside.txt');

//    if (\Illuminate\Support\Facades\Storage::exists('treinamentos-upinside.txt')) {
//    if (\Illuminate\Support\Facades\Storage::exists('public')) {
//        echo "O arquivo existe";
//    } else {
//        echo "O arquivo não existe";
//    }
//    echo "<br>";
//    echo "Tamanho do arquivo: ".\Illuminate\Support\Facades\Storage::size('treinamentos-upinside.txt');
//    echo "<br>";
//    echo "Ultima atualização: ".date('d/m/Y', \Illuminate\Support\Facades\Storage::lastModified('treinamentos-upinside.txt'));
//    echo "<br>";

//    \Illuminate\Support\Facades\Storage::prepend('treinamentos-upinside.txt', 'UpInside Treinamentos');
//    \Illuminate\Support\Facades\Storage::append('treinamentos-upinside.txt', 'Vem estudar com a gente');
//    \Illuminate\Support\Facades\Storage::copy('treinamentos-upinside.txt', 'public/treinamentos-upinside.txt');
//    \Illuminate\Support\Facades\Storage::move('treinamentos-upinside.txt', 'public/treinamentos-upinside.txt');
//    \Illuminate\Support\Facades\Storage::delete('public/students/treinamentos-upinside.txt');
//    \Illuminate\Support\Facades\Storage::delete('treinamentos-upinside.txt');


    /*List files/directories*/
    $files = \Illuminate\Support\Facades\Storage::files('');
    $allFiles = \Illuminate\Support\Facades\Storage::allFiles('');
    $directories = \Illuminate\Support\Facades\Storage::directories('');
    $allDirectories = \Illuminate\Support\Facades\Storage::allDirectories('');

    var_dump($files, $allFiles, $directories, $allDirectories);
});
