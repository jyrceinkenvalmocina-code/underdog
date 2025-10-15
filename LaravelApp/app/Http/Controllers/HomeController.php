<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home(){
$data = user::all();
return view('home',['users'=>$data]);
}
}
