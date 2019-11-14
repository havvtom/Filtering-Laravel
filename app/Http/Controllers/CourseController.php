<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CourseController extends Controller
{
    public function index(Request $request, Builder $builder){
    	
    	return Course::filter($request, $this->getFilters())->get();

    }

    protected function getFilters(){
    	return [

    	];
    }
}
