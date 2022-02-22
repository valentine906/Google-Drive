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
	//dd($files);
	// $path =  Storage::disk("google")->path($files); 
	// dd($path);
	// GET THE FIRST FILE
	 // $firstFileName = $files[0];
	 // $get = Storage::disk("google")->url($firstFileName);
	 //  dump("FIRST NAME:". $get);

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
	//$getFiles = Storage::disk("google")->files();
	// $getFirstFileName = '1KGLJMvFH3zu30k_xOymCPj8ksMNIdVYN';
	//  $response = Storage::disk("google")->download($getFirstFileName, "teacher");
	//  return $response;
	//dd($getFirstFileName);
	
    return view('welcome');
});



Route::get('/home', function () {

	
	
    return view('home');
});


Route::post('/upload', function (Request $request) {

	// $folder = Storage::disk("google")->putFileAs("folder_to_save",$request->file("thing"), "name_the_file.webp");
	
	 // $path = $request->file("thing")->store("","google");
	// $url = $disk->getId($path);


	$disk = Storage::disk('google');
	$path = $request->file("thing")->store("","google");
	$url = $disk->url($path);
	return $url;
	
	// dd(openssl_get_cert_locations()); 
});


Route::get('/download', function (Request $request) {

	
	$disk = Storage::disk('google');
	 $url = $disk->download('https://drive.google.com/uc?id=1VpaSLY2REg2aZHISvpHQUJligWunGmUm&export=media',"");
	return $url;
	
});

