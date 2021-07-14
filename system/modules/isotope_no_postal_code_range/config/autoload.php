<?php

/**
 * A workaround for Isotope eCommerce to properly parse US postal codes.
 *
 * Copyright (C) 2021 Andrew Stevens Consulting
 *
 * @package    isotope_no_postal_code_range
 * @link       https://andrewstevens.consulting
 */



/**
 * Register the classes
 */

ClassLoader::addClasses(array
(
	'Isotope\Frontend' 	=> 'system/modules/isotope_no_postal_code_range/library/Isotope/Frontend.php',
));
