#
# Table structure for table 'tx_rssheep_domain_model_sheepdata'
#
CREATE TABLE tx_rssheep_domain_model_sheepdata (

	life_number varchar(255) DEFAULT '' NOT NULL,
	gender int(11) DEFAULT '0' NOT NULL,
	birth_date int(11) DEFAULT NULL,
	scrapie_status varchar(7) DEFAULT '',
	life_number_mother varchar(255) DEFAULT '' NOT NULL,
	life_number_father varchar(255) DEFAULT '' NOT NULL,
	remark text,
	registrant int(11) DEFAULT '0' NOT NULL,

);
