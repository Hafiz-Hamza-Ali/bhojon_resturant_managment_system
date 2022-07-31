CREATE TABLE IF NOT EXISTS `tbl_qrpayments` (
  `qrpid` int(11) NOT NULL AUTO_INCREMENT,
  `paymentsid` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`qrpid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
