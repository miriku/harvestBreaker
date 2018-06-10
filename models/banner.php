<?php

	class Banner
	{
		public $id;
		public $name;
		public $house;
		public $clan;
		public $family = array();

		function __construct($house, $clan)
		{
			$this->house = $house;
			$this->clan = $clan;
			$this->name = namer_makeName();
		}

		function debug()
		{
			print "    Banner: " . $this->name . "\n";
		}
	}
	
