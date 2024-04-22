<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TemplateController extends Controller
{
    public function home(){
        return view('Dashbor.home');
    }

    public function Aboutme(){
        return view('Dashbor.Aboutme');
    }

    public function Example(){
        return view('Dashbor.Example');
    }

    public function Contactme(){
        return view('Dashbor.Contactme');
    }
}
