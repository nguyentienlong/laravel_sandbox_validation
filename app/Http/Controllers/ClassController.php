<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function __construct()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'year' => 'required|numeric',
            ]
        );
    }
}
