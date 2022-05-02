<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;


class indexController extends Controller
{
    //


    

    	 public function index()
    	   {
        
            $new =DB::table('questions')->orderBy('id', 'DESC')->limit(5)->get()->pluck('main_que');
            
         $que = DB::table('questions')->get();

        return view('Layout.index',compact('que','new'));
        }
        


public function blogdetail($id  )

		{
			 

			$que = DB::table('questions')->where('id',$id)->get();

			return view ('Blog.blogdetail' , compact('que'  ));

		}
}
