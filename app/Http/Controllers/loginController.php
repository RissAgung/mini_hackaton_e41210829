<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function cek_login(Request $request)
  {
    $dataLogin = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt($dataLogin)) {

      $request->session()->regenerate();
      return redirect()->intended('/dashboard');
    } else {
      dd('blok');
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
