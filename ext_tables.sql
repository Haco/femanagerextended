#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	gender int(11) default '-1',
	ecom_toolbox_country int(11) unsigned DEFAULT '0',
	ecom_toolbox_state int(11) unsigned DEFAULT '0',
	privacy_policy tinyint(4) unsigned DEFAULT '0' NOT NULL
);