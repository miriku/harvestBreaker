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
				$clan[$j]->banner[$k] = $banner[$k];
			}
			$house[$i]->clan[$j] = $clan[$j];
		}
		$house[$i]->debug();
	}
