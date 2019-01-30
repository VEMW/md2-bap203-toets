<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    function index() {
        $links = Link::all();
        return view('view', ['links' => $links]);
    }

    public function showLinksForm()
    {
        return view('');
    }

    public function handleLinksForm(Request $request)
    {
        return "FORM AFHANDELING";
    }

}
