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
    
		function __construct($house, $clan, $banner, $family)
		{
			$this->house = $house;
			$this->clan = $clan;
			$this->banner = $banner;
			$this->family = $family;
			$this->name = namer_makeName();
		}

		function debug()
		{
			print "        Person: " . $this->name;
			print " " . $this->family->name;
			print ", Banner " . $this->banner->name;
			print ", Clan " . $this->clan->name;
			print ", House " . $this->house->name;
			print "\n";
		}

		function getValue()
		{
			$value= $this->cash;
			foreach($shares as $share) $value+=$share->getValue();
			return $value;
		}
	}
