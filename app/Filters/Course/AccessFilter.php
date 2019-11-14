<?php

namespace App\Filters\Course;
use Illuminate\Database\Eloquent\Builder;

class AccessFilter{

	public function filter(Builder $builder, $value){

		$value = ($value === 'free' ? true : false);

		return $builder->where('free', $value);
	}
	
}