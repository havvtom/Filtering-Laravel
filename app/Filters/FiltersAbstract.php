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

			foreach($this->getfilters() as $filter => $class){
				var_dump($this->resolveFilter($filter));
				
			}

			return $builder;
			
		}

		protected function resolveFilter($filter){
			return new $this->filters[$filter];
		}

		protected function filterFilters($filters){

			return array_filter($this->request->only(array_keys($this->filters)));
		}

		protected function getFilters(){

			return $this->filterFilters($this->filters);
		}
}