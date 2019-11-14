<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Course\CourseFilters;
// use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function scopeFilter($query, $request, $filters=[]){

    return	(new CourseFilters($request))->add($filters)->filter($query);

    }
}
