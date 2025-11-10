<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'showHomePage'])->name('home.page');

Route::get('/information', [ViewController::class, 'showInformationForm'])->name('show.information.form');

Route::post('/information', [ViewController::class, 'evaluateInformation'])->name('submit.information');

Route::post('/gpf/calculation/view', [ViewController::class, 'showAnnualGeneralProvidentFundCalculationPage'])->name('show.gpf.page');

Route::post('/gpf/calculation/download', [ViewController::class, 'generatePdf'])->name('generate.pdf');
