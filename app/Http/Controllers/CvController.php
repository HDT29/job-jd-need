<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function samplecv(){
        return view('pages.cv.sample-cv');
    }
    public function  manageCv(){
        return view('pages.cv.manage-cv');
}

}
