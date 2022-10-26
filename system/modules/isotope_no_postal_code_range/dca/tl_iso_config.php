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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = str_replace("cartMinSubtotal;", "cartMinSubtotal,useLegacyPostalRanges;", $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['useLegacyPostalRanges'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_iso_config']['useLegacyPostalRanges'],
	'exclude'               => true,
	'inputType'             => 'checkbox',
	'eval'                  => array('tl_class'=>'w50'),
	'sql'                   => "char(1) NOT NULL default ''",
);
