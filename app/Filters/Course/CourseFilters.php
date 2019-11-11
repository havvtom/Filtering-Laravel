<?php

namespace App\Filters\Course;
use Illuminate\Http\Request;
use App\Filters\FiltersAbstract;
// use Illuminate\Database\Eloquent\Builder;

class CourseFilters extends FiltersAbstract{

	protected $filters = [

		'access' => \App\Filters\Course\Access::class,

	];
}