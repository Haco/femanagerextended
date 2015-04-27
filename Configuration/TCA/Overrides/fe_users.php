<?php
/**
 * Created by PhpStorm.
 * User: sebo
 * Date: 03.12.14
 * Time: 08:44
 */

$columns = [
	'static_country' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.static_country',
		'config' => [
			'type' => 'select',
			'items' => [
				['']
			],
			'foreign_table' => 'static_countries',
			'foreign_table_where' => 'AND static_countries.deleted=0 ORDER BY static_countries.cn_short_en',
			'minitems' => 1
		],
	],
	'static_country_zone' => [
		'displayCond' => 'FIELD:static_country:REQ:TRUE',
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.static_country_zone',
		'config' => [
			'type' => 'select',
			'items' => [
				[ '', 0 ]
			],
			'foreign_table' => 'static_country_zones',
			'foreign_table_where' => 'AND static_country_zones.zn_country_uid=###REC_FIELD_static_country### AND static_country_zones.deleted=0 ORDER BY zn_name_local'
		]
	],
	'ecom_toolbox_country' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.ecom_toolbox_country',
		'config' => [
			'type' => 'select',
			'items' => [
				['']
			],
			'foreign_table' => 'tx_ecomtoolbox_domain_model_region',
			'foreign_table_where' => 'AND tx_ecomtoolbox_domain_model_region.type=0 AND tx_ecomtoolbox_domain_model_region.deleted=0 ORDER BY tx_ecomtoolbox_domain_model_region.title',
			'minitems' => 1
		]
	],
	'ecom_toolbox_state' => [
		'displayCond' => 'FIELD:ecom_toolbox_region:REQ:TRUE',
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.ecom_toolbox_state',
		'config' => [
			'type' => 'select',
			'items' => [
				[ '', 0 ]
			],
			'foreign_table' => 'tx_ecomtoolbox_domain_model_state',
			'foreign_table_where' => 'AND tx_ecomtoolbox_domain_model_state.country=###REC_FIELD_ecom_toolbox_region### AND tx_ecomtoolbox_domain_model_state.deleted=0 ORDER BY tx_ecomtoolbox_domain_model_state.title'
		]
	],
	'privacy_policy' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.privacy_policy',
		'config' => [
			'type' => 'check'
		]
	]
];

$GLOBALS[ 'TCA' ][ 'fe_users' ][ 'ctrl' ][ 'requestUpdate' ] .= ',ecom_toolbox_country';
$GLOBALS[ 'TCA' ][ 'fe_users' ][ 'palettes' ][ 'femanagerextended' ] = [ 'showitem' => 'country' ] ;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'fe_users', $columns, TRUE );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes( 'fe_users', 'static_country, static_country_zone, ecom_toolbox_country;;femanagerextended, ecom_toolbox_state, privacy_policy', '', 'replace:country' );