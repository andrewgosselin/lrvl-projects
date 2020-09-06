<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
	return view('remove-later');
});

Route::get('/', function () {
	if(Auth::guest()) {
		return view('welcome');
	} else {
		\App\Models\Project::create([
			"name" => "Cloud & CDN",
			"description" => "A site for uploading and storing files, as well as a place to get resources like bootstrap from.",
			"visibility" => "public",
			"version" => "0.1",
			"links" => [
				"github" => ""
			]
		]);
		return view('pages.dashboard');
	}
});

Route::get('/projects', function () {
	return view('pages.projects.index')
		->with('projects', \App\Models\Project::paginate(6));
});

Route::get('/projects/{id}/{section?}', function ($id, $section="dashboard") {
	$project = \App\Models\Project::find($id);
	if($section == "users") {
		return view('pages.projects.project.' . $section)
			->with('section', $section)
			->with('project', $project)
			->with('items', \Cyrex\SSO\APIModels\User::all(['project_id' => $project->id]));
	}

	return view('pages.projects.project.' . $section)
		->with('section', $section)
		->with('project', $project);
});