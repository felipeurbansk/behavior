<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        /*
          $users = DB::table('users')
            ->select(['users.id', 'users.name', 'users.email'])
            ->orderBy('id', 'asc')
            ->limit(15)
            ->offset(2)
            ->get();
        */

        /*
            $users = DB::table('users')
            ->selectRaw('users.id, users.name, users.email, CASE WHEN users.status = 1 THEN "ATIVO" ELSE "INATIVO" END status')
            ->whereRaw('(SELECT COUNT(1) FROM addresses a WHERE a.user = users.id ) > 2')
            ->whereRaw('users.status = 0')
            ->orderBy('users.name', 'ASC')
            ->get();
        */

        /*
            $users = DB::select(DB::raw('
            SELECT  behavior.users.id,
                    behavior.users.name,
                    behavior.users.email,
                    CASE
                        WHEN behavior.users.status = 1 THEN "ATIVO"
                        ELSE "INATIVO"
                    END status

                    FROM behavior.users
                    WHERE (SELECT COUNT(1) FROM behavior.addresses a WHERE a.user = behavior.users.id ) > 2
                        AND behavior.users.status = 0
                    ORDER BY behavior.users.name ASC;
            '));
        */

        /*
            $users = DB::table('users')->where('id', '<', '600')->chunkById(50, function($users){
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Status</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>#{$user->id}</td>";
                echo "<td>{$user->name}</td>";
                echo "<td>{$user->email}</td>";
                echo "<td>{$user->status}</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";

        });
        */

//        $users = DB::table('users')
////            ->whereIn('users.status', [0, 1])
////            ->whereNotIn('users.status', [0, 1])
////            ->whereNull('')
//            ->whereNotNull('users.name')
////            ->whereColumn('created_at', '=', 'updated_at')
//            ->whereDate('updated_at', '>', '2020-07-01')
//            ->whereDay('created_at', '=', '19')
//            ->whereMonth('created_at', '=', '10')
//            ->whereYear('created_at', '=', '1993')
//            ->get();

//        $users = DB::table('users')
//            ->select('users.id', 'users.name', 'users.email', 'users.status', 'addresses.address')
////            ->leftJoin('addresses', 'users.id', '=', 'addresses.user')
//            ->join('addresses', function($join){
//                $join->on('users.id', '=', 'addresses.user')
//                    ->where('addresses.status', '=', '1');
//            })
//            ->orderBy('users.id', 'DESC')
//            ->get();
//
//        echo "<h1>Total de usuários: {$users->count()}</h1>";
//        echo "<table>";
//        echo "<thead>";
//        echo "<tr>";
//        echo "<th>ID</th>";
//        echo "<th>Nome</th>";
//        echo "<th>Email</th>";
//        echo "<th>Endereço</th>";
//        echo "<th>Status</th>";
//        echo "</tr>";
//        echo "</thead>";
//        echo "<tbody>";
//        foreach ($users as $user) {
//            echo "<tr>";
//            echo "<td>#{$user->id}</td>";
//            echo "<td>{$user->name}</td>";
//            echo "<td>{$user->email}</td>";
//            echo "<td>{$user->address}</td>";
//            echo "<td>{$user->status}</td>";
//            echo "</tr>";
//        }
//        echo "</tbody>";
//        echo "</table>";


//        DB::table('users')->insert([
//            'name' => 'Felipe Urbanski',
//            'email' => 'felipeurbanski@gmail.com',
//            'password' => bcrypt('123456'),
//            'status' => '1',
//        ]);

//        DB::table('users')->where('id', '1003')->update([
//            'name' => 'Tavaris Memier'
//        ]);

//        DB::table('users')->where('id', '1001')->delete();

        $users = DB::table('users')->paginate(10);

        echo "<h1>Total de usuários: {$users->total()}</h1>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Email</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>#{$user->id}</td>";
            echo "<td>{$user->name}</td>";
            echo "<td>{$user->email}</td>";
            echo "<td>{$user->status}</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        echo $users->links();

    }
}
