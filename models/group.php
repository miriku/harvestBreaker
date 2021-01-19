<?php
  class Group
  {
    // 1 group has 5 teams that produce 1 component each

    public $id;
    public $name;
    public $groupHead;
    public $team;

    public function __construct($groupId)
    {
      $this->name = namer_makeName(); 
      $this->id = $groupId;;
    }

    public function initialHire()
    {
    }

    public function calculateProfit()
    {
    }

    public function debug()
    {
      print "Group $this->$id. $this->name\n";
    }
  }
