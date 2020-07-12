<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
relareuse LaraDev\User;
use LaraDev\Address;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $comments)
    {
        echo "ID: $id | Comments: $comments";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "<h1>Function CREATE</h1>";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "<h1>Function STORE</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        echo "User: ".$user->name;
        echo "E-mail: ".$user->email;
        echo "<br>";

        // $addressUser = $user->address()->get();

        // if ($addressUser) {
        //     foreach($addressUser as $add) {
        //         echo "Endereço: ".$add->address;
        //         echo "Número: ".$add->number;
        //         echo "<br>";
        //     }
        // }

        // $newAddress = new Address([
        //     'address' => 'Rua dos bobos',
        //     'number' => '0',
        //     'complement' => 'Complemento de teste',
        //     'zipcode' => '80600-000',
        //     'city' => 'Curitiba',
        //     'state' => 'PR'
        // ]);

        // $user->address()->save($newAddress);

        // $newAddress = new Address();

        // $newAddress->address = 'Rua dos bobos 1';
        // $newAddress->number = '1';
        // $newAddress->complement = 'Complemento de teste ';
        // $newAddress->zipcode = '81600-000';
        // $newAddress->city = 'Curitiba';
        // $newAddress->state = 'PR';

        // $user->address()->save($newAddress);

        // $user->address()->create(
        //     [
        //         'address' => 'Rua dos bobos',
        //         'number' => '0',
        //         'complement' => 'Complemento de teste',
        //         'zipcode' => '80600-000',
        //         'city' => 'Curitiba',
        //         'state' => 'PR'
        //     ]
        // );

        // $user->address()->createMany([
        //     [
        //         'address' => 'Initial',
        //         'number' => '33',
        //         'complement' => 'Initial',
        //         'zipcode' => '80600-000',
        //         'city' => 'Curitiba',
        //         'state' => 'PR'
        //     ],
        //     [
        //         'address' => 'Rua dos bobos 2',
        //         'number' => '2',
        //         'complement' => 'Complemento de teste 2',
        //         'zipcode' => '80600-000',
        //         'city' => 'Curitiba',
        //         'state' => 'PR'
        //     ],
        //     [
        //         'address' => 'Rua dos bobos 3',
        //         'number' => '3',
        //         'complement' => 'Complemento de teste 3',
        //         'zipcode' => '80600-000',
        //         'city' => 'Curitiba',
        //         'state' => 'PR'
        //     ]
        // ]);

        // $user = User::with('address')->get();

        // $posts = User::find($id)->posts()->get();

        // foreach($posts as $post) {
        //     echo "<p>Title: ".$post->title."</p>";
        //     echo "<p>Slug: ".$post->slug."</p>";
        //     echo "<p>Description: ".$post->description."</p>";
        //     echo "<hr>";
        // }

        // dd($post);

        /** Comments */
        // $comments = $user->commentsOnMyPost()->get();

        // dd($comments);

        // $user->comments()->create([
        //     'content' => "Segundo comentario em users."
        // ]);

        $comments = $user->comments()->get();

        if ($comments) {
            echo "<h2>Comentarios</h2>";
            foreach($comments as $comment) {
                echo "<p>[#{$comment->id}]Content: {$comment->content}";
            }
        }

        echo "<hr>";

        $students = User::students()->get();

        if ($students) {
            echo "<h1>Estudantes</h1>";

            foreach($students as $student){
                echo "<p>Nome: ".$student->name."</p>";
                echo "<p>E-mail: ".$student->email."</p>";
                echo "<p><br>"."</p>";
            }
        }

        echo "<hr>";

        $admins = User::admins()->get();

        if ($admins) {
            echo "<h1>Administradores</h1>";

            foreach($admins as $admin){
                echo "<p>Nome: ".$admin->name."</p>";
                echo "<p>E-mail: ".$admin->email."</p>";
                echo "<p><br>"."</p>";
            }
        }


        echo "<h1>Serialize</h1>";

        $user = User::all();
        var_dump($user->makeVisible('password')->toArray());
        var_dump($user->makeHidden('password')->toJson(JSON_PRETTY_PRINT));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "<h1>Function EDIT</h1>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "<h1>Function UPDATE</h1>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "<h1>Function DESTROY</h1>";
    }

    public function inspect() {
        var_dump(Route::current());
        var_dump(Route::currentRouteName());
        var_dump(Route::currentRouteAction());

        die();
    }
}
