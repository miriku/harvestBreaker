<?php
  class Division
  {
    // 1 division has 5 groups that produce 1 feature each

    public $id;
    public $name;
    public $divisionHead;
    public $group;

    public function __construct($divisionId)
    {
      $this->name = namer_makeName(); 
      $this->id = $divisionId;;
    }

    public function initialHire()
    {
    }

    public function calculateProfit()
    {
    }

    public function debug()
    {
      print "Division $this->$id. $this->name\n";
    }
  }
