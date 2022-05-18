<?php

namespace App\Http\Controllers;

use App\Models\DoctorModel;
use Illuminate\Http\Request;
use DB;

class DoctorController extends Controller
{
    public function index($id) {
            $doctors = DB::table('doctor')
            ->join('territory', function ($join) {
                $join->on('doctor.doc_id', '=', 'territory.doc_id');
                    })
                    
            ->where('territory.area_name', '=', $id)
            ->get();
            return view('doctor.select',['doctor' => $doctors])->with('main_menu_name','doctor')->with('sub_menu_name','');
        } 

        public function submitdoctor(Request $request) {
            
        $user=new DoctorModel();
        $user->doc_id = $request -> id;
        $user->doc_name = $request -> name;
        $user->specialty = $request -> speciality;
        $user->degree = $request -> degree;
        $user->mobile = $request -> mobile;
        $user->designation = $request -> designation;
        
        $user->dob = $request -> dob;
        $user->mar_day = $request -> mar_day;
        $user->doctors_category = $request -> category;
        $user->in_house_id = $request -> inhouse_id;
        $user->third_party_id = $request -> third_id;
        $user->doctors_mp = $request -> address;
        $user->field1 = $request -> field1;
        $user->field2 = $request -> field2;
        //$user->created_by = Auth::user()->name ;
        
        $user->save();
        
        return redirect("/");
        } 
}


// public function index(Request $request) {
//     $doc_id=$request->id;
//     $term = $request -> term;
//     $doctors = DB::table('doctor')
//     ->join('territory', function ($join) {
//         $join->on('doctor.doc_id', '=', 'territory.doc_id');
//             })
            
//     ->where('territory.area_name', '=', $doc_id)
//     ->where([
//         ['doctor.doc_name', '!=', Null],
//         [function ($query) use ($request) {
//             if (($term = $request -> term)){
//                 $query->orWhere('doctor.doc_name', 'LIKE', '%' . $term . '%')->get();
//             }
//         }]
//     ])
//     ->get();
//     return view('doctor.select',compact('doctors'))->withDetails($doctors)->withQuery($term);
// }