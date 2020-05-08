<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestController extends Controller {
    //


    public function index( Request $request ) {

        echo "<pre>";
        print_r( $request->all() );
        echo "</pre>";
        echo "<pre>";
        print_r( $request->input() );
        echo "</pre>";
        echo "<pre>";
        print_r( $request->url() );
        echo "</pre>";
        echo "<pre>";
        print_r( $request->fullUrl() );
        echo "</pre>";
        echo "<pre>";
        print_r( $request->query() );
        echo "</pre>";

    }

    public function path(Request $request){
        echo "<pre>";
         echo $request->path();
        echo "</pre>";
        echo "<pre>";
        echo "Welcome ".$request->segment(2). " You're ".$request->segment(3). " years old";
        echo "</pre>";
    }

    public function form(){
        return view("myform");
    }

    public function process(Request $request){
        echo  $request->method(),"<br>";
        if ($request->isMethod('post')) {
            echo "Yes, this form used post method";
        }
        else{
            echo "No It's not Post Method";
        }
    }
}
