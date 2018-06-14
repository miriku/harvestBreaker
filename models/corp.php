<?php
	class Corp
	{
		public $id;
		public $name;
		public $suffix;
		public $ceo; // class supervisor
		public $product; 
		
		public function __construct()
		{
			// make name

			// make suffix
			// Inc / Co / & Sons / Ltd / Gmbh / Partnership / Cartel / Trust
			// this arrives from config array in harvest breaker
	
			// then we spin up sub parts
			for($i=0; $i<5; $i++)
			{
				$product[] = new Product();
			}
			
		}

		public function getPrintableName()
		{
			return $this->name . " " . $this->suffix;
		}

		public function calculateProfit()
		{
		}
	}
	
