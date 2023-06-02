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