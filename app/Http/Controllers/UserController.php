<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')
        ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->get();
        return view('user.index', ['users' => $users]);
        }
}
