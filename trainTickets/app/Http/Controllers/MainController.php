<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use App\Models\User;
use Illuminate\Http\Request;
use function React\Promise\all;

class MainController extends Controller
{
    public function home(){
        // testing
//        $tr = new Trains();
//        $tr->name = 'Namee';
//        $tr->number = 34;
//        $tr->places = 120;
//        $tr->save();
        return view('welcome');
    }

    public function tickets(){
        $usr = User::all();
//        $usr->email = 'email@ff.com';
//        $usr->name = 'nameee';
//        $usr->surname = 'surnameee';
//        $usr->password = 'qweqwe';
//        $usr->birth_date = '2020/12/12';
//        $usr->save();
        return view('order',['users' => $usr,]);
    }
}
