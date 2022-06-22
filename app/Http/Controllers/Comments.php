<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comments as ModelComments;

class Comments extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'text' => 'required',
            'captcha' => 'required|captcha'
        ]);

        ModelComments::create($request->all());

        return redirect('/')->with('success', 'success');
    }
}
