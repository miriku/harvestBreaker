<?php

	class Clan
	{
		public $id;
		public $name;
		public $house;
		public $banner = array();

		function __construct($my_house)
		{
			$this->house = $my_house;
			$this->name = namer_makeName();
		}

		function debug()
		{
			print "  Clan: " . $this->name . "\n";
			foreach($this->banner as $b)
			{
				$b->debug();
			}
		}
	}
	
