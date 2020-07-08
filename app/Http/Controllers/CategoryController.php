<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
    	$categories = DB::table('categories')->paginate(5);

    	return view ('admin/category', ['categories' => $categories]);
    }
}
