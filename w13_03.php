<?php

// Read the define of Human class
require_once("class_hito.php");

// Create a Human object
$hitoObj = new hito();

// Set your name
$hitoObj->name = "Taro Yamada";

// Set your height
$hitoObj->height = 178.5;

// Set your weight
$hitoObj->weight = 73.3;

print "Hello, $hitoObj->name.<br /><br />";

print "Your BMI is ". $hitoObj->getBMI(). ".<br />";

print "And, standard weight is". $hitoObj->getStdWeight(). ".<br />";

// EOF