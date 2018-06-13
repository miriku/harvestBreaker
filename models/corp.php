<?php
	class Corp
	{
		public $id;
		public $name;
		public $ceo; // class supervisor
		public $division; // division object
		
		public function __construct()
		{
			// make name
			// nameGenerator + Inc / Co / & Sons / Ltd / Gmbh / Partnership / Cartel / Trust
			// this arrives from config array in harvest breaker
		}

		public function calculateProfit()
		{
		}
	}
	
