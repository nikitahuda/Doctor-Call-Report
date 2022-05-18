<?php

namespace App\Http\Controllers;
use App\Models\DocgiftModel;
use App\Models\Doc_visit_giftModel;
use App\Models\Doc_visit_ppmModel;
use App\Models\Doc_visit_sampleModel;


use Illuminate\Http\Request;

use DB;

class DetailgiftController extends Controller
{
    public function index($id){
        
        $doctor=DB::table('doctor')
        ->join('territory', function ($join) {
            $join->on('doctor.doc_id', '=', 'territory.doc_id');
                })
        ->where('doctor.doc_name', '=', $id)
        ->get();

        $sample=DB::table('products')->get();
        $gift=DB::table('gifts')->get();
        $ppm=DB::table('ppms')->get();


    return view('doctor.detailgift', compact('sample','gift','ppm','doctor'))->with('main_menu_name','doctor')->with('sub_menu_name','');
    }

    public function submit(Request $request){


        $user=new DocgiftModel();
        $user->doc_id = $request -> docid;
        $user->doc_name = $request -> docname;
        
        $user->territory_name = $request ->territoryname;
        // $user->sample = $request ->samplelabel;
        $user->sample = implode($request ->input('samplelabel'));

        // $user->sample_amount = $request ->sampleinp;
        $user->sample_amount = implode($request ->input('sampleinp'));

        // $user->gift = $request ->giftlabel;
        $user->gift = implode($request ->input('giftlabel'));

        // $user->gift_amount = $request ->giftinp;
        $user->gift_amount = implode($request ->input('giftinp'));

        //$user->ppm = $request ->ppmlabel;
        $user->ppm = implode($request ->input('ppmlabel'));

        //$user->ppm_amount = $request ->ppminp;
        $user->ppm_amount = implode($request ->input('ppminp'));

        $user->visitor = implode($request ->input('inlineCheckbox'));
        $user->feedback = $request ->feedback;
        $user->longitude = $request ->longlabel;
        $user->latitude = $request ->latlabel;
        $user->save();



        $sample = $request ->samplelabel;
        $sample_count = $request ->sampleinp;
        // echo(count($sample));
        // echo($sample[0]);
        for($i=0; $i < count($sample); $i++){
                $sample_user=new Doc_visit_sampleModel();
                $sample_user->doc_id = $request -> docid;
                $sample_user->doc_name = $request -> docname;
                
                $sample_user->territory_name = $request ->territoryname;
                $sample_user->sample = $sample[$i];
                $sample_user->sample_amount = $sample_count[$i];
                $sample_user->visitor = implode($request ->input('inlineCheckbox'));

                $sample_user->feedback = $request ->feedback;
                $sample_user->longitude = $request ->longlabel;
                $sample_user->latitude = $request ->latlabel;
                $sample_user->save(); 
        }


        $gift = $request ->giftlabel;
        $gift_count = $request ->giftinp;
        for($i=0; $i < count($gift); $i++){
                $gift_user=new Doc_visit_giftModel();
                $gift_user->doc_id = $request -> docid;
                $gift_user->doc_name = $request -> docname;
                
                $gift_user->territory_name = $request ->territoryname;
                $gift_user->gift = $gift[$i];
                $gift_user->gift_amount = $gift_count[$i];
                $gift_user->visitor = implode($request ->input('inlineCheckbox'));

                $gift_user->feedback = $request ->feedback;
                $gift_user->longitude = $request ->longlabel;
                $gift_user->latitude = $request ->latlabel;
                $gift_user->save(); 
        }

        $ppm = $request ->ppmlabel;
        $ppm_count = $request ->ppminp;
        for($i=0; $i < count($ppm); $i++){
                $ppm_user=new Doc_visit_ppmModel();
                $ppm_user->doc_id = $request -> docid;
                $ppm_user->doc_name = $request -> docname;
                
                $ppm_user->territory_name = $request ->territoryname;
                $ppm_user->ppm = $ppm[$i];
                $ppm_user->ppm_amount = $ppm_count[$i];
                $ppm_user->visitor = implode($request ->input('inlineCheckbox'));

                $ppm_user->feedback = $request ->feedback;
                $ppm_user->longitude = $request ->longlabel;
                $ppm_user->latitude = $request ->latlabel;
                $ppm_user->save(); 
        }

        return redirect("/");
        // foreach ($request ->samplelabel as $p) {
            
        //         $user=new DocgiftModel();
        //         $user->doc_name = $request -> docname;
                
        //         $user->territory_name = $request ->territoryname;
        //         $user->sample =$p;
        //         foreach ($request ->sampleinp as $si){
        //             $user->sample_amount = $si;
        //         }
        //         $user->feedback = $request ->feedback;
        //         $user->longitude = $request ->longlabel;
        //         $user->latitude = $request ->latlabel;
        //         $user->save();
        //     }
            

        // $dgift=DocgiftModel:: create([
            
        //     'doc_name' => $request -> docname,
        //     'territory_name' => "asdas",
        //     // 'sample' => $request -> abc,
        //     // 'sample_amount' => $request -> abc,
        //     // 'gift' => $request -> giftinp,
        //     // 'gift_amount' => $request -> giftinp,
        //     // 'ppm' => $request -> ppminp,
        //     // 'ppm_amount' => $request -> ppminp,
        //     // 'visitor' => $request -> inlineCheckbox1
    
        //     ]);
        //     dd( $request -> territoryname);
        
        // $dgift->doc_name = request('docname');
        // $dgift->territory_name = request('territoryname');
        // $dgift->sample = request('abc');
        // $dgift->sample_amount = request('abc');
        // $dgift->gift = request('giftinp');
        // $dgift->gift_amount = request('giftinp');
        // $dgift->ppm = request('ppminp');
        // $dgift->ppm_amount = request('ppminp');
        // $dgift->visitor = request('inlineCheckbox1');

        // $dgift->save();

    }

    // public function getDoctor(Request $request){
    //     $doc_id=$request->id;
    //     return DB::table('doctor')
    //         ->where('doc_id',$doc_id)
    //         ->get();
    // }

    // public function submit(Request $req){
        
    //     $inp = implode($req-> input('btn_check'));
       
    //     return view('doctor.detailgift', ->'inp' => $inp);

    //     }
}
