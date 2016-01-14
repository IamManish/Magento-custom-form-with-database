<?php
 
$installer = $this;
 
$installer->startSetup();
 
$installer->run("
 
  DROP TABLE IF EXISTS {$this->getTable('enquiry')};
CREATE TABLE {$this->getTable('enquiry')} (
  `enquiry_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `content` text NOT NULL default '',
  `ticket_id` int NOT NULL default '0',
  `issue_id` int NOT NULL default '0',
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


  DROP TABLE IF EXISTS {$this->getTable('ticket')};
CREATE TABLE {$this->getTable('ticket')} (
  `ticket_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO {$this->getTable('ticket')} (title) VALUES ('Technical Issues');
INSERT INTO {$this->getTable('ticket')} (title) VALUES ('Maintenance Issues');
 
 

  DROP TABLE IF EXISTS {$this->getTable('issue')};
CREATE TABLE {$this->getTable('issue')} (
  `issue_id` int(11) unsigned NOT NULL auto_increment,
  `t_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL default '',
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO {$this->getTable('issue')} (t_id , title ) VALUES ( 1, 'Technical Issue No. 1');
INSERT INTO {$this->getTable('issue')} (t_id , title ) VALUES ( 1, 'Technical Issue No. 2');
INSERT INTO {$this->getTable('issue')} (t_id , title ) VALUES ( 2, 'Maintenance Issue No. 1');
INSERT INTO {$this->getTable('issue')} (t_id , title ) VALUES ( 2, 'Maintenance Issue No. 2');
  
");

$installer->endSetup();