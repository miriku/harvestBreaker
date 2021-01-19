<?php
  class Team
  {
    // 1 team has 5 members that produce 1 part each

    public $id;
    public $name;
    public $teamHead;
    public $teamMember;

    public function __construct($teamId)
    {
      $this->name = namer_makeName(); 
      $this->id = $teamId;;
    }

    public function initialHire()
    {
    }

    public function calculateProfit()
    {
    }

    public function debug()
    {
      print "Team $this->$id. $this->name\n";
    }
  }
