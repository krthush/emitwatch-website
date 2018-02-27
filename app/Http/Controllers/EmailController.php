<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Email;

class EmailController extends Controller
{
	public function store() {
        $this->validate(request(), [
                'email' => 'required|unique:emails|max:255',
        ]);

    	Email::create([

            'email' => request('email')

        ]);

        return redirect(route('welcome'))->with('success', 'Email added succesfully.');
	}
}
