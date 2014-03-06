<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

global $wgAutoloadClasses;
$dir = __DIR__;

$wgAutoloadClasses += array(
	'LocalisationUpdate' => "$dir/LocalisationUpdate.class.php",
	'QuickArrayReader' => "$dir/QuickArrayReader.php",

	# finder
	'LU_Finder' => "$dir/finder/Finder.php",

	# reader
	'LU_JSONReader' => "$dir/reader/JSONReader.php",
	'LU_PHPReader' => "$dir/reader/PHPReader.php",
	'LU_Reader' => "$dir/reader/Reader.php",
	'LU_ReaderFactory' => "$dir/reader/ReaderFactory.php",
);
