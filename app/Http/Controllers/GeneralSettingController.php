<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting ;
class GeneralSettingController extends Controller
{
    //

    public function admissionCreate(){


        return view('modules.general-setting.admission.create');

    }


    public function admissionPost(Request $request){

//        dd($request);




        if($request->status == 'yes'){
            $generaSetting =  new GeneralSetting();
            $this->validate($request,[
                'from' => 'required|after:today',
                'to'   => 'required',
                'status'=> 'required'
            ]);
            $originalDate = $request->from ;
            $originalDateTo = $request->to ;
            $newDate = date("Y-m-d", strtotime($originalDate));
            $newDateTo = date("Y-m-d", strtotime($originalDateTo));
            $generaSetting->admission_start_date = $newDate ;
            $generaSetting->admission_end_date   = $newDateTo ;
            $generaSetting->admission_status = 1 ;
            $generaSetting->save();

        }else{
//            $generaSetting->admission_status = 0 ;

            session()->flash('message' , 'nothing updated and admission is closed');
            return redirect()->back();
        }



//        dd($newDate.'and'.$newDateTo);




    }
}
