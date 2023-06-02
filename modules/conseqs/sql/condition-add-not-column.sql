ALTER TABLE `PREFIX_conseqs_rule_condition` ADD COLUMN `not` TINYINT(1) NOT NULL DEFAULT 0;

UPDATE `PREFIX_conseqs_rule_condition` SET `not` = 0;
UPDATE `PREFIX_conseqs_rule_condition` SET `not` = 1, `condition` = 'isEmpty' WHERE `condition` = 'isNotEmpty';
UPDATE `PREFIX_conseqs_rule_condition` SET `not` = 1, `condition` = 'equals' WHERE `condition` = 'notEquals';


