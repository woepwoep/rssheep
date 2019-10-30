#
# Table structure for table 'tx_rssheep_domain_model_sheepdata'
#
CREATE TABLE tx_rssheep_domain_model_sheepdata (

	life_number varchar(255) DEFAULT '' NOT NULL,
	gender int(11) DEFAULT '0' NOT NULL,
	birth_date date DEFAULT NULL,
	scrapie_status int(11) DEFAULT '0' NOT NULL,
	life_number_mother varchar(255) DEFAULT '' NOT NULL,
	life_number_father varchar(255) DEFAULT '' NOT NULL,
	remark text,
	registrant int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_rssheep_domain_model_sheepdata'
#
CREATE TABLE tx_rssheep_domain_model_sheepdata (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
    ubn int(7) DEFAULT '' NOT NULL,
);
