<?php


Route::middleware(['web'])->group(function () {
    Route::get('/apps/projects', function() {
        return view('projects::inbox')
            ->with('projects', []);
    })->name("apps.projects");
});