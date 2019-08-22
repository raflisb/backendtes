<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Foo;
class FooController extends Controller
{
    // menampilkan semua output dari method di atas dalam bentuk list

    public function callAllMethod() { 
        echo Foo::baz2(); 
        
    }
}
