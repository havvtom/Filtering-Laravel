<?php

namespace App\Filters;
use Illuminate\Http\Request; 

abstract class FiltersAbstract{

	protected $request;

	protected $filters = [];

		public function __construct (Request $request){

			$this->request = $request;

		}

		public function filter($builder){

			foreach($this->filters as $filter){
				echo $filter;
			}
			
		}
}