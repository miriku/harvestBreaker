<?php

	class Family
	{
		public $id;
		public $name;
		public $house;
		public $clan;
		public $banner;
    public $person = array();

		function __construct($house, $clan, $banner)
		{
			$this->house = $house;
			$this->clan = $clan;
			$this->banner = $banner;
			$this->name = namer_makeName();
		}

		function debug()
		{
      print "      Family: " . $this->name . "\n";
      foreach($this->person as $p)
			{
				$p->debug();
			}
		}
	}
	
