<?php
/**
 * Created by PhpStorm.
 * User: sebo
 * Date: 03.12.14
 * Time: 08:44
 */

$columns = array(
	'static_country' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.static_country',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('')
			),
			'foreign_table' => 'static_countries',
			'foreign_table_where' => 'AND static_countries.deleted=0 ORDER BY static_countries.cn_short_en',
			'minitems' => 1
		),
	),
	'static_country_zone' => array(
		'displayCond' => 'FIELD:static_country:REQ:TRUE',
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.static_country_zone',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('', 0)
			),
			'foreign_table' => 'static_country_zones',
			'foreign_table_where' => 'AND static_country_zones.zn_country_uid=###REC_FIELD_static_country### AND static_country_zones.deleted=0 ORDER BY zn_name_local'
		),
	),
	'privacy_policy' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.privacy_policy',
		'config' => array(
			'type' => 'check'
		),
	),
	'tx_extbase_type' => array(
		'config' => array(
			'type' => 'input',
			'default' => '0'
		)
	)
);

$GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
$GLOBALS['TCA']['fe_users']['ctrl']['requestUpdate'] .= ',static_country';
$GLOBALS['TCA']['fe_users']['palettes']['femanagerextended'] = array('showitem' => 'country');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $columns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'static_country;;femanagerextended, static_country_zone, privacy_policy', '', 'replace:country');