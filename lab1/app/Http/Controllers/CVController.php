<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function cv()
    {
        return view('pages.CV');
    }
}
