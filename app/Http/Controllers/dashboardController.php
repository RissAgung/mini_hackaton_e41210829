<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){

      $data = Daftar::all();

      return view('dashboard', compact('data'));
      // dd($data);
    }
}
