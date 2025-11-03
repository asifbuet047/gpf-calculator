<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showHomePage(Request $request)
    {
        return view('welcome');
    }

    public function showInformationForm(Request $request)
    {
        return view('information');
    }

    public function evaluateInformation(Request $request) {}
}
