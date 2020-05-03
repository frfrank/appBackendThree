<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try{
        $category = new Category();

            $category->name= 'Electrodomésticos';
            $category->description='Todo tipo de electrodomesticos para el hogar';
            $category->state='1';
            $category->save();
            
        }
        catch(Exception $e){
            echo "Ocurrio un Error";
        }
        
    return $category;
    }

    public function listCategory(){
        $category =DB::table('categorys')->get();
        return $category;
    }
}
