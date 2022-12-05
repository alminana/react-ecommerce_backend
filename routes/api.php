<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;

// get Visitor Route
Route::get('/getvisitor',[VisitorController::class, 'GetVisitorDetails']);
//Contact Route
Route::post('/postcontact',[ContactController::class, 'PostContactDetails']);
//Site Info Route
Route::get('/allsiteinfo',[SiteInfoController::class, 'AllSiteinfo']);