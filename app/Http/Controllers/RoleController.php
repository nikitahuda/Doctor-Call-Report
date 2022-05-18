<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoleController extends Controller
{
    public function index(){
        $roles = DB::table('users')
        ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
                ->join('role_has_permissions', 'model_has_roles.role_id', '=', 'role_has_permissions.role_id')
                
                ->select('roles.*','role_has_permissions.*', DB::raw('COUNT(role_has_permissions.role_id) as count_roles'))
                ->groupBy('roles.id','role_has_permissions.permission_id')
        ->get();
        return view('role.index', ['roles' => $roles]);
        }
}
    