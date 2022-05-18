<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use Illuminate\Support\Str;


class PermissionController extends Controller
{
    Public function index(){
       $permissions=DB::table('permissions')->get();
       return view('permission.index',['permissions'=>$permissions]);
    }
}
