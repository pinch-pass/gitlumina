CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule` (
  `id_rule`          INT(11) NOT NULL AUTO_INCREMENT,
  `name`             VARCHAR(255) NOT NULL,
  `trigger_type`     VARCHAR(80) NOT NULL,
  `action_type`      VARCHAR(80) NOT NULL,
  `active`           TINYINT(1) NOT NULL,
  `last_executed`    DATETIME,
  `date_add`         DATETIME NOT NULL,
  `date_upd`         DATETIME NOT NULL,
  PRIMARY KEY (`id_rule`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_settings` (
  `id_rule`          INT(11) NOT NULL,
  `target`           VARCHAR(10) NOT NULL,
  `key`              VARCHAR(80) NOT NULL,
  `value`            MEDIUMTEXT,
  PRIMARY KEY (`id_rule`, `target`, `key`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_hook` (
  `id_rule`          INT(11) NOT NULL,
  `id_hook`          INT(11) NOT NULL,
  PRIMARY KEY (`id_rule`, `id_hook`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_binding` (
  `id_rule`          INT(11) NOT NULL,
  `key`              VARCHAR(80) NOT NULL,
  `method`           VARCHAR(40) NOT NULL,
  `value`            VARCHAR(255),
  PRIMARY KEY (`id_rule`, `key`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_condition_group`
(
  `id_condition_group` INT(11) NOT NULL AUTO_INCREMENT,
  `id_rule`            INT(11) NOT NULL,
  PRIMARY KEY (`id_condition_group`),
  KEY `id_rule` (`id_rule`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_condition` (
  `id_condition`       INT(11) NOT NULL AUTO_INCREMENT,
  `id_condition_group` INT(11) NOT NULL,
  `id_rule`            INT(11) NOT NULL,
  `key`                VARCHAR(80) NOT NULL,
  `condition`          VARCHAR(40) NOT NULL,
  `not`                TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_condition`),
  KEY `id_condition_group` (`id_condition_group`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_condition_argument` (
  `id_condition`  INT(11) NOT NULL,
  `id_rule`       INT(11) NOT NULL,
  `position`      TINYINT(4),
  `value`         VARCHAR(255),
  PRIMARY KEY (`id_condition`, `position`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_measure` (
  `id_measure`       INT(11) NOT NULL AUTO_INCREMENT,
  `code`             VARCHAR(128) NOT NULL,
  `name`             VARCHAR(255) NOT NULL,
  `sql`              MEDIUMTEXT NOT NULL,
  `key_field`        VARCHAR(60) NOT NULL,
  `value_field`      VARCHAR(60) NOT NULL,
  `refresh`          INT(11) NOT NULL,
  `ts`               INT(11),
  `date_add`         DATETIME NOT NULL,
  `date_upd`         DATETIME NOT NULL,
  PRIMARY KEY (`id_measure`),
  UNIQUE KEY `code`(`code`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_measure_value` (
  `id_measure`       INT(11) NOT NULL,
  `ts`               INT(11) NOT NULL,
  `key`              VARCHAR(60) NOT NULL,
  `value`            DECIMAL(20, 6),
  PRIMARY KEY (`id_measure`, `ts`, `key`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_measure` (
  `id_rule`          INT(11) NOT NULL,
  `id_measure`       INT(11) NOT NULL,
  PRIMARY KEY (`id_rule`, `id_measure`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_rule_measure_queue` (
  `id_queue`         INT(11) NOT NULL AUTO_INCREMENT,
  `id_rule`          INT(11) NOT NULL,
  `id_measure`       INT(11) NOT NULL,
  `key`              VARCHAR(60) NOT NULL,
  `old_value`        DECIMAL(20, 6),
  `new_value`        DECIMAL(20, 6),
  `processing`       CHAR(32),
  `processing_ts`    INT(11),
  PRIMARY KEY (`id_queue`),
  UNIQUE KEY `unique`(`id_rule`, `id_measure`, `key`),
  KEY `processing`(`processing`),
  KEY `processing_ts`(`processing_ts`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;

CREATE TABLE IF NOT EXISTS `PREFIX_conseqs_errors` (
  `id_error`         INT(11) NOT NULL AUTO_INCREMENT,
  `id_rule`          INT(11),
  `cron`             TINYINT(1),
  `message`          VARCHAR(512),
  `file`             VARCHAR(512),
  `line`             INT(11),
  `stacktrace`       TEXT,
  `date`             DATETIME NOT NULL,
  PRIMARY KEY (`id_error`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;
