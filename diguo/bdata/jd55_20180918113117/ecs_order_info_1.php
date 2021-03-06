<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `out_trade_no` varchar(64) NOT NULL,
  `transaction_id` varchar(64) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `wx_refund_status` int(1) NOT NULL DEFAULT '0' COMMENT '1-成功，2-失败',
  `defaultbank` varchar(20) NOT NULL COMMENT '银行',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pt_level` int(10) NOT NULL,
  `pt_price_status` int(1) NOT NULL DEFAULT '0',
  `pt_status` int(1) NOT NULL DEFAULT '0',
  `pt_lucky_order` int(1) NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rebate_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rebate_ispay` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否订单已经返佣(2:已返,1:未返)',
  `tb_nick` varchar(50) NOT NULL COMMENT '淘宝昵称',
  `froms` char(10) NOT NULL DEFAULT 'pc' COMMENT 'pc:电脑,mobile:手机,app:应用',
  `is_pickup` tinyint(1) NOT NULL,
  `pickup_point` int(11) NOT NULL,
  `vat_inv_company_name` varchar(60) DEFAULT NULL COMMENT '增值税发票单位名称',
  `vat_inv_taxpayer_id` varchar(20) DEFAULT NULL COMMENT '增值税发票纳税人识别号',
  `vat_inv_registration_address` varchar(120) DEFAULT NULL COMMENT '增值税发票注册地址',
  `vat_inv_registration_phone` varchar(60) DEFAULT NULL COMMENT '增值税发票注册电话',
  `vat_inv_deposit_bank` varchar(120) DEFAULT NULL COMMENT '增值税发票开户银行',
  `vat_inv_bank_account` varchar(30) DEFAULT NULL COMMENT '增值税发票银行账户',
  `inv_consignee_name` varchar(60) DEFAULT NULL COMMENT '收票人姓名',
  `inv_consignee_phone` varchar(60) DEFAULT NULL COMMENT '收票人手机',
  `inv_consignee_country` smallint(5) DEFAULT '1' COMMENT '收票人国家',
  `inv_consignee_province` smallint(5) DEFAULT NULL COMMENT '收票人省',
  `inv_consignee_city` smallint(5) DEFAULT NULL COMMENT '收票人市',
  `inv_consignee_district` smallint(5) DEFAULT NULL COMMENT '收票人县/区',
  `inv_consignee_address` varchar(120) DEFAULT NULL COMMENT '收票人详细地址',
  `inv_status` varchar(20) NOT NULL DEFAULT 'unprovided ' COMMENT '发票出票状态',
  `inv_remark` text COMMENT '发票备注',
  `inv_money` decimal(10,2) DEFAULT '0.00' COMMENT '发票金额',
  `inv_payee_type` varchar(20) DEFAULT NULL COMMENT '发票抬头类型',
  `shipping_time_end` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `rebate` (`rebate_id`,`rebate_ispay`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('30','2017042898512','','','16','5','2','2','哈哈','1','2','52','513','111','','','13666696448','1112222111@qq.com','仅工作日送货','','','4','中通速递','1','支付宝','0','','等待所有商品备齐后再发','','','','','','','22.00','15.00','0.00','0.00','0.00','0.00','37.00','0.00','0','0.00','0.00','0.00','0','网站自营','1493343500','1495525384','1495525384','1495525395','0','0','0','121212','','0','0','0','0','0','','','0','','0.00','0','0','0.00','0','0','0','1','','mobile','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,'unprovided ',NULL,'37.00',NULL,'1500457796');");
E_D("replace into `ecs_order_info` values('56','2018031448830','','','21','5','2','2','测试','1','3','36','398','火车站','','-','18860400000','','仅工作日送货','','','4','中通速递','1','支付宝','0','','等待所有商品备齐后再发','','','','','','','123.00','15.00','0.00','0.00','0.00','0.00','138.00','0.00','0','0.00','0.00','0.00','0','网站自营','1520980095','1521009010','1520980214','1520980317','0','0','0','','','0','0','0','0','0','','','0','','0.00','0','0','0.00','0','0','0','2','','pc','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,'unprovided ',NULL,'123.00',NULL,'1520980359');");

require("../../inc/footer.php");
?>