<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('forms.signup');
    }

    public function getData(Request $req){
        $data['formData'] = $req->all();
        return view('forms.data', $data);
    }
}
