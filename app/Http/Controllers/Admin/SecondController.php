<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function _construct(){
        $this -> middleware('auth')->except('showString2');

    }
    public function index(){
        return 'This is the Index page';
    }
    public function showString1(){
        return 'Lamiss i Love You2222';
    }
    public function showString2(){
        return 'Lamiss i Love You1111';
    }
}
