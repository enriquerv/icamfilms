<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	$active = 'index';
    	$title = 'INICIO';
    	return view('index', compact('active', 'title'));
    }

    public function aboutus()
    {
    	$active = 'aboutus';
    	$title = 'NOSOTROS';
    	return view('aboutus', compact('active', 'title'));
    }
}
