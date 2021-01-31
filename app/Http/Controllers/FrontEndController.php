<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
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

    public function video()
    {
        $active = 'video';
        $title = 'VIDEO';
        return view('video', compact('active', 'title'));
    }

    public function services()
    {
        $active = 'services';
        $title = 'Servicios';
        return view('services', compact('active', 'title'));
    }
    public function portfolio()
    {
        $active = 'portfolio';
        $title = 'Portafolio';
        return view('portfolio', compact('active', 'title'));
    }
}
