<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('maitridiagnosticlab.index'); })->name('home');
Route::get('about-us', function () { return view('maitridiagnosticlab.about'); })->name('about');
Route::get('specialities', function () { return view('maitridiagnosticlab.specialities'); })->name('specialities');
Route::get('services', function () { return view('maitridiagnosticlab.services'); })->name('services');
Route::get('services/histopathology', function () { return view('maitridiagnosticlab.histopathology'); })->name('services.histopathology');
Route::get('services/immunohistochemistry', function () { return view('maitridiagnosticlab.immunohistochemistry'); })->name('services.immunohistochemistry');
Route::get('services/cytopathology', function () { return view('maitridiagnosticlab.cytopathology'); })->name('services.cytopathology');
Route::get('services/immunofluorescence', function () { return view('maitridiagnosticlab.immunofluorescence'); })->name('services.immunofluorescence');
Route::get('services/hematology', function () { return view('maitridiagnosticlab.hematology'); })->name('services.hematology');
Route::get('services/clinical-chemistry', function () { return view('maitridiagnosticlab.clinical-chemistry'); })->name('services.clinical-chemistry');
Route::get('services/hormones-and-cancer-markers', function () { return view('maitridiagnosticlab.hormones-and-cancer-markers'); })->name('services.hormones-and-cancer-markers');
Route::get('services/clinical-pathology', function () { return view('maitridiagnosticlab.clinical-pathology'); })->name('services.clinical-pathology');
Route::get('services/infectious-disease-serology', function () { return view('maitridiagnosticlab.infectious-disease-serology'); })->name('services.infectious-disease-serology');
Route::get('doctors', function () { return view('maitridiagnosticlab.doctors'); })->name('doctors');
Route::get('medical-excellence', function () { return view('maitridiagnosticlab.medical-excellence'); })->name('medical-excellence');
Route::get('contact-us', function () { return view('maitridiagnosticlab.contact'); })->name('contact');
Route::get('appointment-booking', function () { return view('maitridiagnosticlab.appointment-booking'); })->name('appointment-booking');
Route::get('faq', function () { return view('maitridiagnosticlab.faq'); })->name('faq');
Route::get('test-list', function () { return view('maitridiagnosticlab.test-list'); })->name('test-list');
Route::get('price-list', function () { return view('maitridiagnosticlab.price-list'); })->name('price-list');
Route::get('profile/dr-akshay-bali', function () { return view('maitridiagnosticlab.dr-akshay-bali'); })->name('profile.dr-akshay-bali');
Route::get('profile/dr-maitrayee-roy', function () { return view('maitridiagnosticlab.dr-maitrayee-roy'); })->name('profile.dr-maitrayee-roy');
Route::get('bone-marrow', function () { return view('maitridiagnosticlab.bone-marrow'); })->name('bone-marrow');
Route::get('personalized-health-check', function () { return view('maitridiagnosticlab.personalized-health-check'); })->name('personalized-health-check');
Route::get('contact-us', function () { return view('maitridiagnosticlab.contact'); })->name('contact');
Route::get('request-a-call-back', function () { return view('maitridiagnosticlab.request-a-call-back'); })->name('request-a-call-back');

Route::get('blood-test-ambala-haryana', function () { return view('maitridiagnosticlab.blood-test-ambala-haryana'); })->name('blood-test-ambala-haryana');
Route::get('diagnostic-lab-ambala-haryana', function () { return view('maitridiagnosticlab.diagnostic-lab-ambala-haryana'); })->name('diagnostic-lab-ambala-haryana');
Route::get('thyroid-test-ambala-haryana', function () { return view('maitridiagnosticlab.thyroid-test-ambala-haryana'); })->name('thyroid-test-ambala-haryana');
Route::get('full-body-checkup-after-30-ambala-haryana', function () { return view('maitridiagnosticlab.full-body-checkup-after-30-ambala-haryana'); })->name('full-body-checkup-after-30-ambala-haryana');
Route::get('home-sample-collection-haryana', function () { return view('maitridiagnosticlab.home-sample-collection-haryana'); })->name('home-sample-collection-haryana');
Route::get('normal-blood-sugar-levels-ambala-haryana', function () { return view('maitridiagnosticlab.normal-blood-sugar-levels-ambala-haryana'); })->name('normal-blood-sugar-levels-ambala-haryana');
Route::get('cbc-test-ambala-haryana', function () { return view('maitridiagnosticlab.cbc-test-ambala-haryana'); })->name('cbc-test-ambala-haryana');
Route::get('lft-test-ambala-haryana', function () { return view('maitridiagnosticlab.lft-test-ambala-haryana'); })->name('lft-test-ambala-haryana');
Route::get('pathology-services-ambala', function () { return view('maitridiagnosticlab.pathology-services-ambala'); })->name('pathology-services-ambala');
Route::get('complete-blood-count-cbc-test-guide', function () { return view('maitridiagnosticlab.complete-blood-count-cbc-test-guide'); })->name('complete-blood-count-cbc-test-guide');

Route::post('contact-submit', [ContactController::class, 'submit'])->name('contact-submit');



Route::get('sitemap', function () { 
    
    $view = view('sitemap');
    $response = new Response($view);
    $response->header('Content-Type', 'text/xml');

    return $response;

})->name('sitemap');
