<?php

namespace App;


	class City {
		private $cityName;
		private array $cityBranches;

		public function __construct($cityName) {
		$this->cityName = $cityName;
		}

		public function getCityName() {
			echo $this->cityName;
		}

		public function setCityBranches($branch) {
			$this->cityBranches[] = $branch;
		}

		public function getCityBranches() {
			foreach($this->cityBranches as $branch){
				echo $branch->getBranchData();
			}
		}
	}





