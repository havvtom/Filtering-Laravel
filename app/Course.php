<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Course\CourseFilters;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function scopeFilter(Request $request, Builder $builder){

    return	new CourseFilters($request)->filter($builder)

    }
}
