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
	for($i=0; $i<$conf_numHouses; $i++)
	{
		$house[$i] = new House();
		for($j=0; $j<$conf_numClans; $j++)
		{
			$clan[$j] = new Clan($house[$i]);
			$house[$i]->clan[$j] = $clan[$j];
		}
		$house[$i]->debug();
	}
