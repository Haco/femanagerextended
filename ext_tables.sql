#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	static_country int(11) unsigned DEFAULT '0',
	static_country_zone int(11) unsigned DEFAULT '0',
	privacy_policy tinyint(4) unsigned DEFAULT '0' NOT NULL
);