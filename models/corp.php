<?php
	class Corp
	{
    // structure:
    // 1 corporation
    // 2  divisions - products
    // 5 group - feature
    // 5 teams - trait
    // 5 people - task

		public $id;
		public $name;
		public $ceo; // person object
		public $division; // division object
		
		public function __construct($companyId, $conf_corpIdentifiers)
		{
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
    
    public function debug()
    {
      print "Corp $this->id. $this->name\n";
    }
	}
	
