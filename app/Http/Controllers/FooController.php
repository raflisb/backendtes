<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Foo;
use Auth;  
class FooController extends Controller
{
    // menampilkan semua output dari method di atas dalam bentuk list

    public function __constructor() { 
        $this->middleware('CheckAge');
    }
    public function callAllMethod() { 
        echo 'Baz1 :'.Foo::baz1(); 
        echo '<br>'; 
        echo 'Baz2 :';
        $baz2 = Foo::baz2();
        foreach ($baz2 as $baz2s){
            echo $baz2s; 
        }
        echo '<br>'; 
        echo 'Baz3 :';
        $baz3 = Foo::baz3();
        foreach ($baz3 as $baz3s){
            echo $baz3s; 
        }
        echo '<br>'; 
        echo 'Baz4 :'.Foo::baz4(); 
        echo '<br>'; 
        
    }

    public function callAMethod($m){ 
        print_r(Foo::$m()); 
    }

    
}
