<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
                'password' => 'required'
            ]);

            $credentials = $request->only('name', 'password');


            if (Auth::attempt($credentials)) {

                return redirect('admin/index')->with(['message' => 'success']);

            } else {
                return back()
                    ->withInput($request->only('name'))
                    ->with(['message' => 'ce ne sont pas les bons !!!']);
            }
        }
        return view('auth.login');
    }

    public function Logout()
    {

        Auth::logout();
        return Redirect('/')->with(['message' => 'succes logout']);

    }
}
