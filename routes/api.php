<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
// get Visitor Route
Route::get('/getvisitor',[VisitorController::class, 'GetVisitorDetails']);
//Contact Route
Route::post('/postcontact',[ContactController::class, 'PostContactDetails']);
//Site Info Route
Route::get('/allsiteinfo',[SiteInfoController::class, 'AllSiteinfo']);
//All category Route
Route::get('/allcategory',[CategoryController::class, 'AllCategory']);