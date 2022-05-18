<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TerritoryController extends Controller
{
    public function index() {
        DB::statement("SET SQL_MODE=''");
        $territory = DB::table('territory')
        ->groupBy('area_id')
        ->get();
        return view('territory.territory',['territory' => $territory])->with('main_menu_name','doctor')->with('sub_menu_name','');
    }
}