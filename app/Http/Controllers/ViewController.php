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

    public function evaluateInformation(Request $request)
    {
        $validated = $request->validate([
            'financial_year' => [
                'required',
                'regex:/^\d{4}-\d{4}$/'
            ],
            'name' => 'required|string|max:255',
            'office_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'card_no' => 'required|string|max:255',
            'opening_balance' => 'required|integer|min:0',
            'july' => 'required|integer|min:0',
            'august' => 'required|integer|min:0',
            'september' => 'required|integer|min:0',
            'october' => 'required|integer|min:0',
            'november' => 'required|integer|min:0',
            'december' => 'required|integer|min:0',
            'january' => 'required|integer|min:0',
            'february' => 'required|integer|min:0',
            'march' => 'required|integer|min:0',
            'april' => 'required|integer|min:0',
            'may' => 'required|integer|min:0',
            'june' => 'required|integer|min:0',
        ]);

        return redirect()->back()->with($validated);
    }
}
