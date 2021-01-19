<?php
	require("loader.php");

	// var define
	$house = array();
	$clan = array();
	$banner = array();
	$family = array();
	$person = array();

	$corp = array();

	// create everything

	// make houses
	for($i=0; $i<$conf_numHouses; $i++)
	{
		$house[$i] = new House();
		// make clans
		for($j=0; $j<$conf_numClans; $j++)
		{
			$clan[$j] = new Clan($house[$i]);
			// make banner
			for($k=0; $k<$conf_numBanners; $k++)
			{
        $banner[$k] = new Banner($house[$i], $clan[$j]);
        // make family
        for($l=0; $l<$conf_numFamilies; $l++)
        {
          $family[$l] = new Family($house[$i], $clan[$j], $banner[$k]);
          // make persons
          for($m=0; $m<$conf_numPeople; $m++)
          {
            $person[$m] = new Person($house[$i], $clan[$j], $banner[$k], $family[$l]);
            $family[$l]->person[$m] = $person[$m];
          } 
          $banner[$k]->family[$l] = $family[$l];
        } 
				$clan[$j]->banner[$k] = $banner[$k];
			}
			$house[$i]->clan[$j] = $clan[$j];
		}
    $house[$i]->debug();
  }
  
  // make corps
  for($i=0; $i<8; $i++)
  {
    $corp[$i] = new Corp($i, $conf_corpIdentifiers);
    $corp[$i]->initialHire($person);
    $corp[$i]->debug();
  }
