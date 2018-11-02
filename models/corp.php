<?php
	class Corp
	{
    // structure:
    // 1 corporation
    // 5 divisions - products
    // 5 group - feature
    // 5 teams - trait
    // 5 people - task

		public $id;
		public $name;
		public $suffix;
		public $ceo; // class supervisor
		public $product; 
		public $division; // division object
		
		public function __construct($companyId, $conf_corpIdentifiers)
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
      // make name
      $this->name = namer_makeName();

      // store Id
			// this arrives from config array in harvest breaker
      $this->id = $companyId;

      // get name suffix
      $this->name = $this->name . " " . $conf_corpIdentifiers[$this->id];
		}

		public function initialHire()
		{
		}

		public function calculateProfit()
		{
    }
    
    public function iterateOneTime()
    {
    }

    public function debug()
    {
      print "Corp $this->id. $this->name\n";
    }
	}
	
