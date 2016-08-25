ALTER TABLE`#__backpic` ADD COLUMN `type` tinyint(10) NOT NULL DEFAULT '0' AFTER `published`;
ALTER TABLE`#__backpic` ADD COLUMN `menudbid` INT(120) NOT NULL DEFAULT '0' AFTER `type`;
ALTER TABLE`#__backpic` ADD COLUMN `custom` text  NOT NULL AFTER `menudbid`;
ALTER TABLE`#__backpic` ADD COLUMN `template_name` text  NOT NULL AFTER `custom`;

