<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function Xinchao(){
    	echo "Xin chao";
    }

    public function khoahoc($ten){
    	echo "khao hocj:".$ten;
    	return redirect()->route('Myroute');
    }

    public function GetURL(Request $request){

    	// return $request->path();
    	// return $request->url();
    	if($request->isMethod('get'))
    		echo " phuowng thuc get";
    	else
    		echo "khong phai get";
    }

        public function postForm(Request $request)
        {
            echo $request->ten;
        }
}
