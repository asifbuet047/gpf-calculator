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
            
            'july_contribution' => 'required|integer|min:0',
            'july_advance_paid' => 'required|integer|min:0',
            'july_advance_recovery' => 'required|integer|min:0',

            'august_contribution' => 'required|integer|min:0',
            'august_advance_paid' => 'required|integer|min:0',
            'august_advance_recovery' => 'required|integer|min:0',

            'september_contribution' => 'required|integer|min:0',
            'september_advance_paid' => 'required|integer|min:0',
            'september_advance_recovery' => 'required|integer|min:0',

            'october_contribution' => 'required|integer|min:0',
            'october_advance_paid' => 'required|integer|min:0',
            'october_advance_recovery' => 'required|integer|min:0',

            'november_contribution' => 'required|integer|min:0',
            'november_advance_paid' => 'required|integer|min:0',
            'november_advance_recovery' => 'required|integer|min:0',

            'december_contribution' => 'required|integer|min:0',
            'december_advance_paid' => 'required|integer|min:0',
            'december_advance_recovery' => 'required|integer|min:0',

            'january_contribution' => 'required|integer|min:0',
            'january_advance_paid' => 'required|integer|min:0',
            'january_advance_recovery' => 'required|integer|min:0',

            'february_contribution' => 'required|integer|min:0',
            'february_advance_paid' => 'required|integer|min:0',
            'february_advance_recovery' => 'required|integer|min:0',

            'march_contribution' => 'required|integer|min:0',
            'march_advance_paid' => 'required|integer|min:0',
            'march_advance_recovery' => 'required|integer|min:0',

            'april_contribution' => 'required|integer|min:0',
            'april_advance_paid' => 'required|integer|min:0',
            'april_advance_recovery' => 'required|integer|min:0',

            'may_contribution' => 'required|integer|min:0',
            'may_advance_paid' => 'required|integer|min:0',
            'may_advance_recovery' => 'required|integer|min:0',

            'june_contribution' => 'required|integer|min:0',
            'june_advance_paid' => 'required|integer|min:0',
            'june_advance_recovery' => 'required|integer|min:0',
        ]);

        return redirect()->back()->with($validated);
    }

    public function showAnnualGeneralProvidentFundCalculationPage(Request $request)
    {
        $values = $request->all();
        return view('gpfcalculation', compact('values'));
    }
}
