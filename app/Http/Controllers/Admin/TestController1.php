<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController1 extends Controller
{
    public function test1(){
        return 'Teste do Contoller 1!';
    }
}
