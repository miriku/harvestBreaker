<?php
	class Division
	{
		public $id;
		public $name;
		
		public function __construct()
		{
			// make name
      $this->name = namer_makeName();
		}

		public function calculateProfit()
		{
			// foreach component multiply by supervisor
			// 	foreach part multiply by supervisor
			// 		calculate value by summing programmers and multiplying by supervisor
		}
	}
	
