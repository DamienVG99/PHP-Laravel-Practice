<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $allprofiles = [
            'Pieter-Jan',
            'Jan-Pieter',
            'Bert-Jan',
            'Jan-Bert'
            
        ];

        return view('index')
        ->with('allprofiles', $allprofiles);
    }
    //
    public function show()
    {
        return 'test';
    }
}
