<?php
	class Person
	{
		public $id;
		public $cash;
		public $employer;
		public $shares = array();

		// skills
		public $patience;
		public $skill; // ability as worker or leader
    public $invSkill; // ability as investor
    
    public $loyalties = [
      "house",
      "clan",
      "banner",
      "family"];
    
    public $meritocracy;

		// identity
		public $house;
		public $clan;
		public $banner;	
    public $family;
    
		function __construct($house, $clan, $banner, $family)
		{
			// assign the family links from the person generator
			$this->house = $house;
			$this->clan = $clan;
			$this->banner = $banner;
			$this->family = $family;

			// create name
			$this->name = namer_makeName();

			// build loyalties
			$this->loyalties["house"] = mt_rand() / mt_getrandmax();
			$this->loyalties["clan"] = mt_rand() / mt_getrandmax();
			$this->loyalties["banner"] = mt_rand() / mt_getrandmax();
			$this->loyalties["family"] = mt_rand() / mt_getrandmax();

			// how much do they like hiring people who are good at things
			$this->meritocracy = mt_rand() / mt_getrandmax();
		}

		// called when this person needs to hire people
		function hire()
		{
			// take all people
			// sort by getRelationship
		}

		// called when we want to know what a different person thinks of this person. allows use of usort()
		// $interviewer will be person making the judgements
		// $job will either be "management" or "worker"
		function getInterviewedBy($interviewer, $job)
		{
			// formula is 
			//   skill at job * meritocracy + (array of matching loyalties * value of that layer of loyalty)
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

		function getWorth()
		{
			$value= $this->cash;
			foreach($shares as $share) $value+=$share->getValue();
			return $value;
		}
	}
