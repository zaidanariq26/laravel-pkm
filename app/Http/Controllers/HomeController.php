<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
   //  return view('admin.dashboard');
   $siswa = Siswa::get();
   return view('adminDashboard',compact('siswa'), ['title' => 'Home Page']);
   }

}
