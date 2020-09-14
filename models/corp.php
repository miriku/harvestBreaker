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
		
		public function __construct($companyId, $corpSuffix)
		{
			// make name
      $this->name = namer_makeName();

      // store Id
			// this arrives from config array in harvest breaker
      $this->id = $companyId;

      // get name suffix
      $this->suffix = $corpSuffix[$this->id];

			// then we spin up sub parts
			for($i=0; $i<5; $i++)
			{
				$division[] = new Division();
			}
		}

		public function getPrintableName()
		{
			return $this->name . " " . $this->suffix;
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
      print "Corp $this->id. $this->name $this->suffix\n";
    }
	}
	
