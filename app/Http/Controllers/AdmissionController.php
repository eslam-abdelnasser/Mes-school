<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission ;
class AdmissionController extends Controller
{
    //
    public function index(){

        dd(Admission::all());
        
        return view('admission.index');
    }

    public function admissionPost(){

    }
}
