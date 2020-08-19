<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showAdminName(){
        return 'Gouasmia Zakaria';
    }


    public function Getindex(){
        $data=[];
        $data['id']=5;
        $data['name']= 'GOUASMIA';

        return view('welcome1',$data);
    }
    public function GetAbout(){
        return view('about');
    }
    public function Gethome(){
        return view('landing');
    }

}
