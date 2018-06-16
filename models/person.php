<?php
	class Person
	{
		public $id;
		public $cash;
		public $employer;
		public $shares = array();

		// skills
		public $patience; // how soon they want to cash in investments
		public $techSkill; // ability as programmer
		public $leadSkill; // ability as team leader
		public $invOffset; // after investment choices
											 // are sorted 1-100, this is
											 // which one they'll pick to buy

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

		// biases array
		// contains house, banner, clan, family additives
		// (if performaing a hire and applicant is same as hirer,
		// then add this value to their effectivness. range is 0-5)
		public $bias;

		function getValue()
		{
			$value= $this->cash;
			foreach($shares as $share) $value+=$share->getValue();
			return $value;
		}

		function evaluateCandidate($job, $candidate)
		{
			if("programmer"!=$job && "supervisor"!=$job) throw new Exception("Bad job");

			$value = 0;
			if("programmer"==$job) $value = $leadSkill;
			elseif("supervisor"==$job) $value = $techSkill;

			// add nepotism biases
			if($candidate->house == $this->house) $value+=$this->bias["house"];
			if($candidate->banner == $this->banner) $value+=$this->bias["banner"];
			if($candidate->clan == $this->clan) $value+=$this->bias["clan"];
			if($candidate->family == $this->family) $value+=$this->bias["family"];
		}
	}
