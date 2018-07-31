<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('accueil');
});

Route::get('/curiculum', function()
{
	return View::make('curiculum');
});

Route::get('/stages', function()
{
	return View::make('stages');
});

Route::get('/stage1', function()
{
	return View::make('stage1');
});

Route::get('/stage2', function()
{
	return View::make('stage2');
});

Route::get('/formation', function()
{
	return View::make('formation');
});

Route::get('/projets', function()
{
	return View::make('projets');
});

Route::get('/projetveille', function()
{
	return View::make('projetveille');
});

Route::get('/projetglpi', function()
{
	return View::make('projetglpi');
});

Route::get('/projetgsb', function()
{
	return View::make('projetgsb');
});

Route::get('/projetjava', function()
{
	return View::make('projetjava');
});

Route::get('/projetppe', function()
{
	return View::make('projetppe');
});

Route::get('/projetvb', function()
{
	return View::make('projetvb');
});