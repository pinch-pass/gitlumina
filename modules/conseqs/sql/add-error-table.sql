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
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=CHARSET_TYPE;DEFAULT CHARSET=CHARSET_TYPE;