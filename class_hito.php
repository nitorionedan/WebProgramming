<?php
class hito
{
	//Name propaty
	public $name;

	//Height propaty
	public $height;

	//Weight propaty
	public $weight;


	function __construct()
	{
		//print "new hito<br />";
	}


	function __destruct()
	{
		//print "delete hito<br />";
	}


	function getBMI()
	{
		// Centi meter to meter 
		$h = $this->height / 100;

		// Calculate the BMI
		$bmi = $this->weight / ($h * $h);

		return round($bmi,1);	
	}


	function getStdWeight()
	{
		$height = $this->height / 100;
		$stdWeight = $height * $height * 22;
		
		return round($stdWeight, 1);
	}

}

// EOF