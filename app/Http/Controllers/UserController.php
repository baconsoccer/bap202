<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function list() {

        $users = User::paginate(5);

        return view('users', ['users' => $users]);

    }
}
