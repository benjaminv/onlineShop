<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_sendlist`;");
E_C("CREATE TABLE `ecs_email_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  `supplier_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_sendlist` values('61','liaoshengfei@qq.com','6','亲爱的afei您好！\n\n恭喜您获得了1个红包，金额为¥10.00\n茶立购2016-08-22','0','1','1471830879','0');");
E_D("replace into `ecs_email_sendlist` values('62','liaoshengfei@qq.com','6','亲爱的afei您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n茶立购2016-08-22','0','1','1471853596','0');");
E_D("replace into `ecs_email_sendlist` values('63','liaoshengfei@qq.com','6','亲爱的afei您好！\n\n恭喜您获得了1个红包，金额为¥20.00\n茶立购2016-08-22','0','1','1471855362','0');");

require("../../inc/footer.php");
?>