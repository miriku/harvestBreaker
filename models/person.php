<?php
	class Person
	{
		public $id;
		public $cash;
		public $employer;
		public $shares = array();

		// skills
		public $patience;
		public $techSkill; // ability as programmer
		public $leadSkill; // ability as team leader
		public $invSkill; // ability as investor

		// identity
		public $house;
		public $clan;
		public $banner;
		public $family;

		function getValue()
		{
			$value= $this->cash;
			foreach($shares as $share) $value+=$share->getValue();
			return $value;
		}
	}
