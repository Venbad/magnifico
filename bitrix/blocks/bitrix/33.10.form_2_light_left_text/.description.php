<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' =>
		array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10'),
			'section' => array('forms'),
			'subtype' => 'form',
		),
	'cards' => array(
		'.landing-block-card-contact' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT'),
			'label' => array('.landing-block-card-contact-title')
		)
	),
	'nodes' => array(
		'.landing-block-node-main-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_TITLE'),
			'type' => 'text',
		),
		'.landing-block-node-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_TEXT'),
			'type' => 'text',
		),
		'.landing-block-card-contact-icon' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_ICON'),
			'type' => 'icon',
		),
		'.landing-block-card-contact-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_TITLE'),
			'type' => 'text',
		),
		'.landing-block-card-contact-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_TEXT'),
			'type' => 'text',
		),
		'.landing-block-card-contact-link' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_LINK'),
			'type' => 'link',
		),
	),
	'style' => array(
		'.landing-block-node-main-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_TITLE'),
			'type' => 'typo',
		),
		'.landing-block-node-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_TEXT'),
			'type' => 'typo',
		),
		'.landing-block-card-contact-title' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_TITLE'),
			'type' => 'typo',
		),
		'.landing-block-card-contact-text' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_TEXT'),
			'type' => 'typo',
		),
		'.landing-block-card-contact-icon' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_ICON'),
			'type' => 'color',
		),
		'.landing-block-card-contact-link' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT_LINK'),
			'type' => 'typo',
		),
		'.landing-block-card-contact' => array(
			'name' => Loc::getMessage('LANDING_BLOCK_FORM_33.10_NODE_CONTACT'),
			'type' => 'animation',
		),
	),
	'assets' => array(
		'ext' => array('landing_form'),
	),
);