<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Course\CourseFilters;
// use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function scopeFilter($query, $request){

    return	(new CourseFilters($request))->filter($query);

    }
}
