<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	//GET ALL FILES
	//$files = Storage::disk("google")->allFiles();  //allFiles || files

	// GET THE FIRST FILE
	// $firstFileName = $files[0];
	// dump("FIRST NAME:". $firstFileName);

	// GET THE FIRST FILE DETAILS
	// $details = Storage::disk('google')->getMetadata($firstFileName);
	// dump($details);

	// GET THE URL OF THE FIRST FILE
	// $url = Storage::disk('google')->url($firstFileName);
	// dump("Download URL (Session Based):");
	// dump($url);


	// CHECK SETTING VISIBILITY OF THE FIRST FILE
	// $visibility = Storage::disk('google')->getVisibility($firstFileName);
	// dump("Visibility: ".$visibility);

	// RENAME THE FIRST FILE AS MY BEST
	// $firstFile = Storage::disk('google')->files()[0];
	// Storage::disk('google')->rename($firstFile, "mybest.webp");


	// DOWNLOAD FILE
	// $getFiles = Storage::disk("google")->files();
	// $getFirstFileName = $getFiles[1];
	//  $response = Storage::disk("google")->download($getFirstFileName, "my_file");
	//  return $response;
	// dd($getFirstFileName);
	
    return view('welcome');
});

Route::post('/upload', function (Request $request) {

	Storage::disk("google")->putFileAs("",$request->file("thing"), "");
	// Storage::disk("google")->putFileAs("folder_to_save",$request->file("thing"), "name_the_file");
   // dd($request->file("thing")->store("","google"));
	// dd(openssl_get_cert_locations()); 
})->name("upload");

