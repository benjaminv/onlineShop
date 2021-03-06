<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ecs_jilu`;");
E_C("CREATE TABLE `ecs_jilu` (
  `jilu_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `user_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `user_ip` varchar(30) CHARACTER SET utf8 NOT NULL,
  `visit_time` varchar(10) CHARACTER SET utf8 NOT NULL,
  `laiyuan` varchar(7) CHARACTER SET utf8 NOT NULL,
  `goods_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`jilu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=289 DEFAULT CHARSET=gbk");
E_D("replace into `ecs_jilu` values('1','palenggege','45','palenggege','0.0.0.0','1489907582','pc','');");
E_D("replace into `ecs_jilu` values('2','palenggege','45','palenggege','0.0.0.0','1489957970','mobile','');");
E_D("replace into `ecs_jilu` values('3','palenggege','16','palenggege','0.0.0.0','1489958690','mobile','');");
E_D("replace into `ecs_jilu` values('4','','13','','0.0.0.0','1490324654','pc','');");
E_D("replace into `ecs_jilu` values('5','palenggege','13','palenggege','0.0.0.0','1490324678','pc','');");
E_D("replace into `ecs_jilu` values('6','palenggege','24','palenggege','0.0.0.0','1490336238','mobile','');");
E_D("replace into `ecs_jilu` values('7','palenggege','23','palenggege','0.0.0.0','1490603694','pc','');");
E_D("replace into `ecs_jilu` values('8','palenggege','4','palenggege','0.0.0.0','1490605521','pc','');");
E_D("replace into `ecs_jilu` values('9','palenggege','45','palenggege','0.0.0.0','1490605566','pc','');");
E_D("replace into `ecs_jilu` values('10','palenggege','45','palenggege','0.0.0.0','1490738839','pc','');");
E_D("replace into `ecs_jilu` values('11','palenggege','45','palenggege','0.0.0.0','1490740120','pc','');");
E_D("replace into `ecs_jilu` values('12','','10','','0.0.0.0','1490772338','pc','');");
E_D("replace into `ecs_jilu` values('13','','10','','0.0.0.0','1490772347','pc','');");
E_D("replace into `ecs_jilu` values('14','','24','','0.0.0.0','1490772361','pc','');");
E_D("replace into `ecs_jilu` values('15','palenggege','7','palenggege','0.0.0.0','1490854715','pc','');");
E_D("replace into `ecs_jilu` values('16','palenggege','7','palenggege','0.0.0.0','1490946602','pc','');");
E_D("replace into `ecs_jilu` values('17','palenggege','3','palenggege','0.0.0.0','1490946633','pc','');");
E_D("replace into `ecs_jilu` values('18','palenggege','28','palenggege','0.0.0.0','1490952053','mobile','');");
E_D("replace into `ecs_jilu` values('19','palenggege','27','palenggege','0.0.0.0','1490952066','mobile','');");
E_D("replace into `ecs_jilu` values('20','palenggege','8','palenggege','0.0.0.0','1491088378','pc','');");
E_D("replace into `ecs_jilu` values('21','palenggege','7','palenggege','0.0.0.0','1491643575','pc','');");
E_D("replace into `ecs_jilu` values('22','palenggege','13','palenggege','0.0.0.0','1491643623','pc','');");
E_D("replace into `ecs_jilu` values('23','','45','','0.0.0.0','1491689247','mobile','');");
E_D("replace into `ecs_jilu` values('24','palenggege','45','palenggege','0.0.0.0','1491689373','mobile','');");
E_D("replace into `ecs_jilu` values('25','','8','','0.0.0.0','1491690484','mobile','');");
E_D("replace into `ecs_jilu` values('26','','45','','0.0.0.0','1491690847','mobile','');");
E_D("replace into `ecs_jilu` values('27','palenggege','8','palenggege','0.0.0.0','1491691161','mobile','');");
E_D("replace into `ecs_jilu` values('28','palenggege','8','palenggege','0.0.0.0','1491693427','mobile','');");
E_D("replace into `ecs_jilu` values('29','palenggege','8','palenggege','0.0.0.0','1491723553','mobile','');");
E_D("replace into `ecs_jilu` values('30','palenggege','8','palenggege','0.0.0.0','1491723661','mobile','');");
E_D("replace into `ecs_jilu` values('31','palenggege','8','palenggege','0.0.0.0','1491723843','mobile','');");
E_D("replace into `ecs_jilu` values('32','palenggege','28','palenggege','0.0.0.0','1491807377','pc','');");
E_D("replace into `ecs_jilu` values('33','palenggege','28','palenggege','0.0.0.0','1491808571','pc','');");
E_D("replace into `ecs_jilu` values('34','palenggege','28','palenggege','0.0.0.0','1491808786','pc','');");
E_D("replace into `ecs_jilu` values('35','palenggege','28','palenggege','0.0.0.0','1491808930','pc','');");
E_D("replace into `ecs_jilu` values('36','palenggege','45','palenggege','0.0.0.0','1491816185','pc','');");
E_D("replace into `ecs_jilu` values('37','palenggege','28','palenggege','0.0.0.0','1491981696','pc','');");
E_D("replace into `ecs_jilu` values('38','palenggege','28','palenggege','0.0.0.0','1491982256','pc','');");
E_D("replace into `ecs_jilu` values('39','palenggege','45','palenggege','0.0.0.0','1492048095','pc','');");
E_D("replace into `ecs_jilu` values('40','palenggege','45','palenggege','0.0.0.0','1492048150','pc','');");
E_D("replace into `ecs_jilu` values('41','palenggege','45','palenggege','0.0.0.0','1492048155','pc','');");
E_D("replace into `ecs_jilu` values('42','','1','','0.0.0.0','1492468669','pc','');");
E_D("replace into `ecs_jilu` values('43','','1','','0.0.0.0','1492472685','pc','');");
E_D("replace into `ecs_jilu` values('44','palenggege','1','palenggege','0.0.0.0','1492472699','pc','');");
E_D("replace into `ecs_jilu` values('45','','23','','0.0.0.0','1492582061','pc','');");
E_D("replace into `ecs_jilu` values('46','','24','','0.0.0.0','1492582545','pc','');");
E_D("replace into `ecs_jilu` values('47','','23','','0.0.0.0','1492582593','pc','');");
E_D("replace into `ecs_jilu` values('48','','23','','0.0.0.0','1492582652','pc','');");
E_D("replace into `ecs_jilu` values('49','','23','','0.0.0.0','1492582683','pc','');");
E_D("replace into `ecs_jilu` values('50','','23','','0.0.0.0','1492582875','pc','');");
E_D("replace into `ecs_jilu` values('51','','23','','0.0.0.0','1492582881','pc','');");
E_D("replace into `ecs_jilu` values('52','','23','','0.0.0.0','1492582938','mobile','');");
E_D("replace into `ecs_jilu` values('53','','23','','0.0.0.0','1492583098','mobile','');");
E_D("replace into `ecs_jilu` values('54','','23','','0.0.0.0','1492583203','mobile','');");
E_D("replace into `ecs_jilu` values('55','','23','','0.0.0.0','1492583220','mobile','');");
E_D("replace into `ecs_jilu` values('56','','23','','0.0.0.0','1492586168','mobile','');");
E_D("replace into `ecs_jilu` values('57','','23','','0.0.0.0','1492586493','mobile','');");
E_D("replace into `ecs_jilu` values('58','','23','','0.0.0.0','1492586515','mobile','');");
E_D("replace into `ecs_jilu` values('59','','23','','0.0.0.0','1492587613','mobile','');");
E_D("replace into `ecs_jilu` values('60','','23','','0.0.0.0','1492588462','mobile','');");
E_D("replace into `ecs_jilu` values('61','','23','','0.0.0.0','1492589703','mobile','');");
E_D("replace into `ecs_jilu` values('62','','28','','0.0.0.0','1492760463','mobile','');");
E_D("replace into `ecs_jilu` values('63','palenggege','28','palenggege','0.0.0.0','1492760478','mobile','');");
E_D("replace into `ecs_jilu` values('64','','21','','0.0.0.0','1492909881','mobile','');");
E_D("replace into `ecs_jilu` values('65','','23','','0.0.0.0','1492910095','pc','');");
E_D("replace into `ecs_jilu` values('66','','23','','0.0.0.0','1492910098','pc','');");
E_D("replace into `ecs_jilu` values('67','','23','','0.0.0.0','1493194761','mobile','');");
E_D("replace into `ecs_jilu` values('68','','1','','0.0.0.0','1493196716','mobile','');");
E_D("replace into `ecs_jilu` values('69','','27','','0.0.0.0','1493196822','mobile','');");
E_D("replace into `ecs_jilu` values('70','','27','','0.0.0.0','1493198330','mobile','');");
E_D("replace into `ecs_jilu` values('71','','27','','0.0.0.0','1493198367','mobile','');");
E_D("replace into `ecs_jilu` values('72','','9','','0.0.0.0','1493200787','pc','');");
E_D("replace into `ecs_jilu` values('73','','20','','0.0.0.0','1493254832','pc','');");
E_D("replace into `ecs_jilu` values('74','palenggege','20','palenggege','0.0.0.0','1493254845','pc','');");
E_D("replace into `ecs_jilu` values('75','palenggege','20','palenggege','0.0.0.0','1493254973','mobile','');");
E_D("replace into `ecs_jilu` values('76','palenggege','20','palenggege','0.0.0.0','1493256860','mobile','');");
E_D("replace into `ecs_jilu` values('77','palenggege','28','palenggege','0.0.0.0','1493257536','mobile','');");
E_D("replace into `ecs_jilu` values('78','palenggege','20','palenggege','0.0.0.0','1493279010','mobile','');");
E_D("replace into `ecs_jilu` values('79','palenggege','33','palenggege','0.0.0.0','1493281003','mobile','');");
E_D("replace into `ecs_jilu` values('80','palenggege','33','palenggege','0.0.0.0','1493283426','mobile','');");
E_D("replace into `ecs_jilu` values('81','palenggege','8','palenggege','0.0.0.0','1493284256','mobile','');");
E_D("replace into `ecs_jilu` values('82','palenggege','8','palenggege','0.0.0.0','1493285155','mobile','');");
E_D("replace into `ecs_jilu` values('83','palenggege','44','palenggege','0.0.0.0','1493285711','mobile','');");
E_D("replace into `ecs_jilu` values('84','palenggege','29','palenggege','0.0.0.0','1493286582','mobile','');");
E_D("replace into `ecs_jilu` values('85','palenggege','33','palenggege','0.0.0.0','1493343431','mobile','');");
E_D("replace into `ecs_jilu` values('86','','20','','0.0.0.0','1493343467','mobile','');");
E_D("replace into `ecs_jilu` values('87','leng','20','leng','0.0.0.0','1493343480','mobile','');");
E_D("replace into `ecs_jilu` values('88','palenggege','6','palenggege','0.0.0.0','1493361762','pc','');");
E_D("replace into `ecs_jilu` values('89','palenggege','8','palenggege','0.0.0.0','1493361905','pc','');");
E_D("replace into `ecs_jilu` values('90','palenggege','21','palenggege','0.0.0.0','1494055091','pc','');");
E_D("replace into `ecs_jilu` values('91','palenggege','20','palenggege','0.0.0.0','1494055209','pc','');");
E_D("replace into `ecs_jilu` values('92','palenggege','8','palenggege','0.0.0.0','1494055643','pc','');");
E_D("replace into `ecs_jilu` values('93','palenggege','45','palenggege','0.0.0.0','1494056246','pc','');");
E_D("replace into `ecs_jilu` values('94','palenggege','44','palenggege','0.0.0.0','1494056368','mobile','');");
E_D("replace into `ecs_jilu` values('95','palenggege','7','palenggege','0.0.0.0','1494058242','pc','');");
E_D("replace into `ecs_jilu` values('96','palenggege','45','palenggege','0.0.0.0','1494827909','pc','');");
E_D("replace into `ecs_jilu` values('97','palenggege','45','palenggege','0.0.0.0','1494828602','pc','');");
E_D("replace into `ecs_jilu` values('98','palenggege','45','palenggege','0.0.0.0','1494828611','mobile','');");
E_D("replace into `ecs_jilu` values('99','palenggege','45','palenggege','0.0.0.0','1494830750','pc','');");
E_D("replace into `ecs_jilu` values('100','palenggege','45','palenggege','0.0.0.0','1494830757','mobile','');");
E_D("replace into `ecs_jilu` values('101','palenggege','45','palenggege','0.0.0.0','1494834195','pc','');");
E_D("replace into `ecs_jilu` values('102','palenggege','45','palenggege','0.0.0.0','1494834205','mobile','');");
E_D("replace into `ecs_jilu` values('103','palenggege','33','palenggege','0.0.0.0','1495232197','pc','');");
E_D("replace into `ecs_jilu` values('104','','47','','0.0.0.0','1496040177','pc','');");
E_D("replace into `ecs_jilu` values('105','','47','','0.0.0.0','1496040345','pc','');");
E_D("replace into `ecs_jilu` values('106','','49','','0.0.0.0','1496040566','pc','');");
E_D("replace into `ecs_jilu` values('107','','50','','0.0.0.0','1496040829','pc','');");
E_D("replace into `ecs_jilu` values('108','','51','','0.0.0.0','1496040876','pc','');");
E_D("replace into `ecs_jilu` values('109','','52','','0.0.0.0','1496041134','pc','');");
E_D("replace into `ecs_jilu` values('110','','53','','0.0.0.0','1496041290','pc','');");
E_D("replace into `ecs_jilu` values('111','','54','','0.0.0.0','1496041409','pc','');");
E_D("replace into `ecs_jilu` values('112','','55','','0.0.0.0','1496041449','pc','');");
E_D("replace into `ecs_jilu` values('113','','56','','0.0.0.0','1496041540','pc','');");
E_D("replace into `ecs_jilu` values('114','','57','','0.0.0.0','1496041613','pc','');");
E_D("replace into `ecs_jilu` values('115','','56','','0.0.0.0','1496041702','pc','');");
E_D("replace into `ecs_jilu` values('116','','58','','0.0.0.0','1496041899','pc','');");
E_D("replace into `ecs_jilu` values('117','','59','','0.0.0.0','1496041958','pc','');");
E_D("replace into `ecs_jilu` values('118','','69','','0.0.0.0','1496043309','pc','');");
E_D("replace into `ecs_jilu` values('119','','70','','0.0.0.0','1496043342','pc','');");
E_D("replace into `ecs_jilu` values('120','','70','','0.0.0.0','1496043355','pc','');");
E_D("replace into `ecs_jilu` values('121','','71','','0.0.0.0','1496043411','pc','');");
E_D("replace into `ecs_jilu` values('122','','28','','0.0.0.0','1496092309','pc','');");
E_D("replace into `ecs_jilu` values('123','','27','','0.0.0.0','1496095939','mobile','');");
E_D("replace into `ecs_jilu` values('124','','27','','0.0.0.0','1496096096','mobile','');");
E_D("replace into `ecs_jilu` values('125','','27','','0.0.0.0','1496096172','mobile','');");
E_D("replace into `ecs_jilu` values('126','','27','','0.0.0.0','1496096184','pc','');");
E_D("replace into `ecs_jilu` values('127','','28','','0.0.0.0','1496096496','mobile','');");
E_D("replace into `ecs_jilu` values('128','','28','','0.0.0.0','1496096555','mobile','');");
E_D("replace into `ecs_jilu` values('129','','72','','0.0.0.0','1496097467','mobile','');");
E_D("replace into `ecs_jilu` values('130','','72','','0.0.0.0','1496097499','pc','');");
E_D("replace into `ecs_jilu` values('131','','27','','0.0.0.0','1496102376','mobile','');");
E_D("replace into `ecs_jilu` values('132','','28','','0.0.0.0','1496102387','mobile','');");
E_D("replace into `ecs_jilu` values('133','','72','','0.0.0.0','1496107586','pc','');");
E_D("replace into `ecs_jilu` values('134','','27','','0.0.0.0','1496108538','mobile','');");
E_D("replace into `ecs_jilu` values('135','palenggege','72','palenggege','0.0.0.0','1496108625','mobile','');");
E_D("replace into `ecs_jilu` values('136','','45','','0.0.0.0','1496347936','pc','');");
E_D("replace into `ecs_jilu` values('137','palenggege','45','palenggege','0.0.0.0','1496347972','pc','');");
E_D("replace into `ecs_jilu` values('138','palenggege','6','palenggege','0.0.0.0','1496385575','pc','');");
E_D("replace into `ecs_jilu` values('139','palenggege','6','palenggege','0.0.0.0','1496385782','pc','');");
E_D("replace into `ecs_jilu` values('140','palenggege','6','palenggege','0.0.0.0','1496385801','pc','');");
E_D("replace into `ecs_jilu` values('141','palenggege','6','palenggege','0.0.0.0','1496385922','pc','');");
E_D("replace into `ecs_jilu` values('142','palenggege','8','palenggege','0.0.0.0','1496386985','pc','');");
E_D("replace into `ecs_jilu` values('143','palenggege','45','palenggege','0.0.0.0','1496618152','pc','');");
E_D("replace into `ecs_jilu` values('144','palenggege','73','palenggege','0.0.0.0','1496646303','pc','');");
E_D("replace into `ecs_jilu` values('145','palenggege','73','palenggege','0.0.0.0','1496646319','pc','');");
E_D("replace into `ecs_jilu` values('146','palenggege','73','palenggege','0.0.0.0','1496649842','pc','');");
E_D("replace into `ecs_jilu` values('147','palenggege','74','palenggege','0.0.0.0','1496650178','pc','');");
E_D("replace into `ecs_jilu` values('148','palenggege','73','palenggege','0.0.0.0','1496650574','pc','');");
E_D("replace into `ecs_jilu` values('149','palenggege','75','palenggege','0.0.0.0','1496652352','pc','');");
E_D("replace into `ecs_jilu` values('150','palenggege','75','palenggege','0.0.0.0','1496652739','pc','');");
E_D("replace into `ecs_jilu` values('151','palenggege','75','palenggege','0.0.0.0','1496652788','pc','');");
E_D("replace into `ecs_jilu` values('152','palenggege','75','palenggege','0.0.0.0','1496653213','pc','');");
E_D("replace into `ecs_jilu` values('153','palenggege','81','palenggege','0.0.0.0','1496655336','pc','');");
E_D("replace into `ecs_jilu` values('154','palenggege','81','palenggege','0.0.0.0','1496656264','pc','');");
E_D("replace into `ecs_jilu` values('155','palenggege','80','palenggege','0.0.0.0','1496656455','pc','');");
E_D("replace into `ecs_jilu` values('156','palenggege','80','palenggege','0.0.0.0','1496657682','pc','');");
E_D("replace into `ecs_jilu` values('157','palenggege','80','palenggege','0.0.0.0','1496657697','pc','');");
E_D("replace into `ecs_jilu` values('158','palenggege','80','palenggege','0.0.0.0','1496657747','pc','');");
E_D("replace into `ecs_jilu` values('159','palenggege','81','palenggege','0.0.0.0','1496657756','pc','');");
E_D("replace into `ecs_jilu` values('160','palenggege','81','palenggege','0.0.0.0','1496657852','pc','');");
E_D("replace into `ecs_jilu` values('161','palenggege','81','palenggege','0.0.0.0','1496657890','pc','');");
E_D("replace into `ecs_jilu` values('162','palenggege','81','palenggege','0.0.0.0','1496657894','pc','');");
E_D("replace into `ecs_jilu` values('163','palenggege','81','palenggege','0.0.0.0','1496657910','pc','');");
E_D("replace into `ecs_jilu` values('164','palenggege','7','palenggege','0.0.0.0','1496657969','pc','');");
E_D("replace into `ecs_jilu` values('165','palenggege','12','palenggege','0.0.0.0','1496657976','pc','');");
E_D("replace into `ecs_jilu` values('166','palenggege','81','palenggege','0.0.0.0','1496658081','pc','');");
E_D("replace into `ecs_jilu` values('167','palenggege','81','palenggege','0.0.0.0','1496658147','pc','');");
E_D("replace into `ecs_jilu` values('168','palenggege','81','palenggege','0.0.0.0','1496658422','pc','');");
E_D("replace into `ecs_jilu` values('169','palenggege','81','palenggege','0.0.0.0','1496658442','pc','');");
E_D("replace into `ecs_jilu` values('170','palenggege','80','palenggege','0.0.0.0','1496658453','pc','');");
E_D("replace into `ecs_jilu` values('171','palenggege','81','palenggege','0.0.0.0','1496658463','pc','');");
E_D("replace into `ecs_jilu` values('172','palenggege','81','palenggege','0.0.0.0','1496658501','pc','');");
E_D("replace into `ecs_jilu` values('173','palenggege','45','palenggege','0.0.0.0','1496956106','pc','');");
E_D("replace into `ecs_jilu` values('174','palenggege','45','palenggege','0.0.0.0','1496956229','pc','');");
E_D("replace into `ecs_jilu` values('175','palenggege','45','palenggege','0.0.0.0','1496956347','pc','');");
E_D("replace into `ecs_jilu` values('176','palenggege','45','palenggege','0.0.0.0','1496956725','pc','');");
E_D("replace into `ecs_jilu` values('177','palenggege','45','palenggege','0.0.0.0','1496956883','pc','');");
E_D("replace into `ecs_jilu` values('178','palenggege','45','palenggege','0.0.0.0','1496956959','pc','');");
E_D("replace into `ecs_jilu` values('179','palenggege','45','palenggege','0.0.0.0','1496956967','pc','');");
E_D("replace into `ecs_jilu` values('180','palenggege','45','palenggege','0.0.0.0','1496956998','pc','');");
E_D("replace into `ecs_jilu` values('181','palenggege','45','palenggege','0.0.0.0','1496957055','pc','');");
E_D("replace into `ecs_jilu` values('182','palenggege','45','palenggege','0.0.0.0','1496957131','pc','');");
E_D("replace into `ecs_jilu` values('183','palenggege','45','palenggege','0.0.0.0','1496957145','pc','');");
E_D("replace into `ecs_jilu` values('184','palenggege','45','palenggege','0.0.0.0','1496957227','pc','');");
E_D("replace into `ecs_jilu` values('185','palenggege','45','palenggege','0.0.0.0','1496957251','pc','');");
E_D("replace into `ecs_jilu` values('186','palenggege','45','palenggege','0.0.0.0','1496957271','pc','');");
E_D("replace into `ecs_jilu` values('187','palenggege','45','palenggege','0.0.0.0','1496957333','mobile','');");
E_D("replace into `ecs_jilu` values('188','palenggege','45','palenggege','0.0.0.0','1496957377','mobile','');");
E_D("replace into `ecs_jilu` values('189','palenggege','45','palenggege','0.0.0.0','1496957392','pc','');");
E_D("replace into `ecs_jilu` values('190','palenggege','45','palenggege','0.0.0.0','1496957962','pc','');");
E_D("replace into `ecs_jilu` values('191','palenggege','45','palenggege','0.0.0.0','1497316422','pc','');");
E_D("replace into `ecs_jilu` values('192','palenggege','45','palenggege','0.0.0.0','1497316456','pc','');");
E_D("replace into `ecs_jilu` values('193','palenggege','33','palenggege','0.0.0.0','1497335140','pc','');");
E_D("replace into `ecs_jilu` values('194','palenggege','28','palenggege','0.0.0.0','1497335988','pc','');");
E_D("replace into `ecs_jilu` values('195','palenggege','33','palenggege','0.0.0.0','1497336016','pc','');");
E_D("replace into `ecs_jilu` values('196','palenggege','33','palenggege','0.0.0.0','1497336702','pc','');");
E_D("replace into `ecs_jilu` values('197','palenggege','33','palenggege','0.0.0.0','1497336823','pc','');");
E_D("replace into `ecs_jilu` values('198','palenggege','33','palenggege','0.0.0.0','1497337231','mobile','');");
E_D("replace into `ecs_jilu` values('199','palenggege','33','palenggege','0.0.0.0','1497337640','pc','');");
E_D("replace into `ecs_jilu` values('200','','20','','0.0.0.0','1497337851','pc','');");
E_D("replace into `ecs_jilu` values('201','','33','','0.0.0.0','1497337864','pc','');");
E_D("replace into `ecs_jilu` values('202','palenggege','33','palenggege','0.0.0.0','1497337875','pc','');");
E_D("replace into `ecs_jilu` values('203','','72','','0.0.0.0','1497409246','mobile','');");
E_D("replace into `ecs_jilu` values('204','','28','','0.0.0.0','1497410472','mobile','');");
E_D("replace into `ecs_jilu` values('205','','27','','0.0.0.0','1497412116','mobile','');");
E_D("replace into `ecs_jilu` values('206','','7','','0.0.0.0','1498032838','pc','');");
E_D("replace into `ecs_jilu` values('207','','7','','0.0.0.0','1498784472','pc','');");
E_D("replace into `ecs_jilu` values('208','palenggege','7','palenggege','0.0.0.0','1498784483','pc','');");
E_D("replace into `ecs_jilu` values('209','palenggege','45','palenggege','0.0.0.0','1498810654','pc','');");
E_D("replace into `ecs_jilu` values('210','','17','','0.0.0.0','1499231408','pc','');");
E_D("replace into `ecs_jilu` values('211','','14','','0.0.0.0','1499231428','pc','');");
E_D("replace into `ecs_jilu` values('212','','23','','0.0.0.0','1499231574','pc','');");
E_D("replace into `ecs_jilu` values('213','','23','','0.0.0.0','1499231633','pc','');");
E_D("replace into `ecs_jilu` values('214','palenggege','21','palenggege','0.0.0.0','1499410313','mobile','');");
E_D("replace into `ecs_jilu` values('215','palenggege','44','palenggege','0.0.0.0','1499410434','mobile','');");
E_D("replace into `ecs_jilu` values('216','palenggege','44','palenggege','0.0.0.0','1499410819','mobile','');");
E_D("replace into `ecs_jilu` values('217','palenggege','28','palenggege','0.0.0.0','1499410831','mobile','');");
E_D("replace into `ecs_jilu` values('218','palenggege','27','palenggege','0.0.0.0','1499410863','mobile','');");
E_D("replace into `ecs_jilu` values('219','palenggege','27','palenggege','0.0.0.0','1499410924','mobile','');");
E_D("replace into `ecs_jilu` values('220','palenggege','28','palenggege','0.0.0.0','1499410957','mobile','');");
E_D("replace into `ecs_jilu` values('221','palenggege','28','palenggege','0.0.0.0','1499411003','mobile','');");
E_D("replace into `ecs_jilu` values('222','palenggege','44','palenggege','0.0.0.0','1499411016','mobile','');");
E_D("replace into `ecs_jilu` values('223','palenggege','20','palenggege','0.0.0.0','1499412034','mobile','');");
E_D("replace into `ecs_jilu` values('224','palenggege','23','palenggege','0.0.0.0','1499412230','pc','');");
E_D("replace into `ecs_jilu` values('225','palenggege','23','palenggege','0.0.0.0','1499412240','mobile','');");
E_D("replace into `ecs_jilu` values('226','palenggege','8','palenggege','0.0.0.0','1499488931','mobile','');");
E_D("replace into `ecs_jilu` values('227','palenggege','8','palenggege','0.0.0.0','1499488942','mobile','');");
E_D("replace into `ecs_jilu` values('228','palenggege','8','palenggege','0.0.0.0','1499488951','mobile','');");
E_D("replace into `ecs_jilu` values('229','palenggege','20','palenggege','0.0.0.0','1499489148','mobile','');");
E_D("replace into `ecs_jilu` values('230','palenggege','20','palenggege','0.0.0.0','1499489164','mobile','');");
E_D("replace into `ecs_jilu` values('231','palenggege','20','palenggege','0.0.0.0','1499489506','mobile','');");
E_D("replace into `ecs_jilu` values('232','palenggege','20','palenggege','0.0.0.0','1499489539','mobile','');");
E_D("replace into `ecs_jilu` values('233','palenggege','20','palenggege','0.0.0.0','1499489626','mobile','');");
E_D("replace into `ecs_jilu` values('234','palenggege','20','palenggege','0.0.0.0','1499489642','mobile','');");
E_D("replace into `ecs_jilu` values('235','palenggege','20','palenggege','0.0.0.0','1499489680','mobile','');");
E_D("replace into `ecs_jilu` values('236','palenggege','20','palenggege','0.0.0.0','1499489824','mobile','');");
E_D("replace into `ecs_jilu` values('237','palenggege','20','palenggege','0.0.0.0','1499490183','mobile','');");
E_D("replace into `ecs_jilu` values('238','palenggege','45','palenggege','0.0.0.0','1499490687','mobile','');");
E_D("replace into `ecs_jilu` values('239','palenggege','28','palenggege','0.0.0.0','1499491212','mobile','');");
E_D("replace into `ecs_jilu` values('240','palenggege','27','palenggege','0.0.0.0','1499722740','pc','');");
E_D("replace into `ecs_jilu` values('241','palenggege','12','palenggege','0.0.0.0','1499722760','pc','');");
E_D("replace into `ecs_jilu` values('242','palenggege','24','palenggege','0.0.0.0','1499722780','pc','');");
E_D("replace into `ecs_jilu` values('243','palenggege','12','palenggege','0.0.0.0','1499724573','pc','');");
E_D("replace into `ecs_jilu` values('244','palenggege','23','palenggege','0.0.0.0','1499724638','pc','');");
E_D("replace into `ecs_jilu` values('245','palenggege','45','palenggege','0.0.0.0','1499726300','mobile','');");
E_D("replace into `ecs_jilu` values('246','palenggege','7','palenggege','0.0.0.0','1499726559','mobile','');");
E_D("replace into `ecs_jilu` values('247','palenggege','15','palenggege','0.0.0.0','1499726998','mobile','');");
E_D("replace into `ecs_jilu` values('248','','23','','0.0.0.0','1500414882','pc','');");
E_D("replace into `ecs_jilu` values('249','','8','','0.0.0.0','1500418375','pc','');");
E_D("replace into `ecs_jilu` values('250','','7','','0.0.0.0','1500419051','pc','');");
E_D("replace into `ecs_jilu` values('251','','7','','0.0.0.0','1500419071','pc','');");
E_D("replace into `ecs_jilu` values('252','','7','','0.0.0.0','1500419107','pc','');");
E_D("replace into `ecs_jilu` values('253','','7','','0.0.0.0','1500419289','pc','');");
E_D("replace into `ecs_jilu` values('254','','28','','0.0.0.0','1500451376','pc','');");
E_D("replace into `ecs_jilu` values('255','palenggege','28','palenggege','0.0.0.0','1500451390','pc','');");
E_D("replace into `ecs_jilu` values('256','palenggege','7','palenggege','0.0.0.0','1500453888','mobile','');");
E_D("replace into `ecs_jilu` values('257','palenggege','45','palenggege','0.0.0.0','1500454087','mobile','');");
E_D("replace into `ecs_jilu` values('258','palenggege','45','palenggege','0.0.0.0','1500454432','mobile','');");
E_D("replace into `ecs_jilu` values('259','palenggege','45','palenggege','0.0.0.0','1500454533','mobile','');");
E_D("replace into `ecs_jilu` values('260','palenggege','45','palenggege','0.0.0.0','1500456223','mobile','');");
E_D("replace into `ecs_jilu` values('261','palenggege','45','palenggege','0.0.0.0','1500456528','mobile','');");
E_D("replace into `ecs_jilu` values('262','palenggege','45','palenggege','0.0.0.0','1500457863','mobile','');");
E_D("replace into `ecs_jilu` values('263','','45','','127.0.0.1','1502091849','pc','');");
E_D("replace into `ecs_jilu` values('264','','45','','127.0.0.1','1502091863','pc','');");
E_D("replace into `ecs_jilu` values('265','','28','','127.0.0.1','1502092049','pc','');");
E_D("replace into `ecs_jilu` values('266','','28','','127.0.0.1','1502139834','pc','');");
E_D("replace into `ecs_jilu` values('267','','28','','127.0.0.1','1502139867','pc','');");
E_D("replace into `ecs_jilu` values('268','','28','','127.0.0.1','1502139900','pc','');");
E_D("replace into `ecs_jilu` values('269','','28','','127.0.0.1','1502139904','pc','');");
E_D("replace into `ecs_jilu` values('270','','28','','127.0.0.1','1502139934','pc','');");
E_D("replace into `ecs_jilu` values('271','','83','','127.0.0.1','1502140170','pc','');");
E_D("replace into `ecs_jilu` values('272','','83','','127.0.0.1','1502140175','pc','');");
E_D("replace into `ecs_jilu` values('273','','85','','127.0.0.1','1502141361','pc','');");
E_D("replace into `ecs_jilu` values('274','','95','','127.0.0.1','1502141382','pc','');");
E_D("replace into `ecs_jilu` values('275','','98','','127.0.0.1','1502142604','pc','');");
E_D("replace into `ecs_jilu` values('276','','103','','127.0.0.1','1503448046','pc','');");
E_D("replace into `ecs_jilu` values('277','ceshi','112','ceshi','127.0.0.1','1503537526','pc','');");
E_D("replace into `ecs_jilu` values('278','ceshi','110','ceshi','127.0.0.1','1503537534','pc','');");
E_D("replace into `ecs_jilu` values('279','ceshi','114','ceshi','127.0.0.1','1503537912','pc','');");
E_D("replace into `ecs_jilu` values('280','ceshi','114','ceshi','127.0.0.1','1503820856','pc','');");
E_D("replace into `ecs_jilu` values('281','ceshi','23','ceshi','127.0.0.1','1520980052','pc','');");
E_D("replace into `ecs_jilu` values('282','','112','','127.0.0.1','1537211599','mobile','');");
E_D("replace into `ecs_jilu` values('283','','112','','127.0.0.1','1537211845','mobile','');");
E_D("replace into `ecs_jilu` values('284','','112','','127.0.0.1','1537211868','mobile','');");
E_D("replace into `ecs_jilu` values('285','','112','','127.0.0.1','1537211923','mobile','');");
E_D("replace into `ecs_jilu` values('286','','112','','127.0.0.1','1537211929','mobile','');");
E_D("replace into `ecs_jilu` values('287','','112','','127.0.0.1','1537211948','mobile','');");
E_D("replace into `ecs_jilu` values('288','','112','','127.0.0.1','1537211954','mobile','');");

require("../../inc/footer.php");
?>