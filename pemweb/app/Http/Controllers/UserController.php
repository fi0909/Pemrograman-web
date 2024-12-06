<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){return view('homep13');}
    public function about(){return about('aboutp13');}
    public function contact(){return contact('contactp13');}
}
