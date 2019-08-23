<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Foo;
class FooController extends Controller
{
    // menampilkan semua output dari method di atas dalam bentuk list

    public function callAllMethod() { 
        echo 'Baz1 :'.Foo::baz1(); 
        echo '<br>'; 
        echo 'Baz2 :';
        echo Foo::baz2(); 
        echo '<br>'; 
        echo 'Baz3 :'.Foo::baz3(); 
        echo '<br>'; 
        echo 'Baz4 :'.Foo::baz4(); 
        echo '<br>'; 
        
    }

    public function callAMethod($m){ 
        echo Foo::$m();
    }
}
