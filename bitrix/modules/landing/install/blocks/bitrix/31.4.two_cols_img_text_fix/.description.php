<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NAME'),
		'section' => array('text', 'text_image', 'tiles'),
	),
	'cards' => array(),
	'nodes' => array(
		'.landing-block-node-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODETITLE'),
			'type' => 'text',
		),
		'.landing-block-node-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODETEXT'),
			'type' => 'text',
		),
		'.landing-block-node-img' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODEIMG'),
			'type' => 'img',
			'dimensions' => array('width' => 540, 'height' => 960),
		),
	),
	'style' => array(
		'.landing-block-node-text-container' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODETEXT'),
			'type' => array('animation'),
		),
		'.landing-block-node-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODETITLE'),
			'type' => array('typo'),
		),
		'.landing-block-node-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODETEXT'),
			'type' => array('typo'),
		),
		'.landing-block-node-img' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_31.4.TWO_COLS_TEXT_IMG_FIX_NODES_LANDINGBLOCKNODEIMG'),
			'type' => 'animation',
		),
	),
);