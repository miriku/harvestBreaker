<?php

	class House
	{
		public $id;
		public $name;
		public $clan = array();

		function __construct()
		{
			$this->name = namer_makeName();
		}

		function debug()
		{
			print "House " . $this->name . "\n";
			foreach($this->clan as $c)
			{	
				$c->debug();
			}	
		}
	}
	
