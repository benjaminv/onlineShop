<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  `goods_attr_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_attr_image` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `img_sort` tinyint(3) NOT NULL DEFAULT '0' COMMENT '商品图片显示顺序',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`,`goods_attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=220 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('2','2','images/201610/goods_img/_P_1476338844836.jpg','','images/201610/thumb_img/_thumb_P_1476338844067.jpg','images/201610/source_img/_P_1476338844018.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('171','90','images/201708/goods_img/_P_1502140903376.jpg','','images/201708/thumb_img/_thumb_P_1502140903739.jpg','images/201708/source_img/_P_1502140903006.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('170','89','images/201708/goods_img/_P_1502140836545.jpg','','images/201708/thumb_img/_thumb_P_1502140836678.jpg','images/201708/source_img/_P_1502140836444.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('169','89','images/201708/goods_img/_P_1502140835886.jpg','','images/201708/thumb_img/_thumb_P_1502140835614.jpg','images/201708/source_img/_P_1502140835327.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('168','89','images/201708/goods_img/_P_1502140834087.jpg','','images/201708/thumb_img/_thumb_P_1502140834314.jpg','images/201708/source_img/_P_1502140834543.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('167','88','images/201708/goods_img/_P_1502140669364.jpg','','images/201708/thumb_img/_thumb_P_1502140669594.jpg','images/201708/source_img/_P_1502140669996.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('166','88','images/201708/goods_img/_P_1502140668512.jpg','','images/201708/thumb_img/_thumb_P_1502140668206.jpg','images/201708/source_img/_P_1502140668755.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('9','9','images/201610/goods_img/_P_1476339842762.jpg','','images/201610/thumb_img/_thumb_P_1476339842386.jpg','images/201610/source_img/_P_1476339842403.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('10','9','images/201610/goods_img/_P_1476339844974.jpg','','images/201610/thumb_img/_thumb_P_1476339844733.jpg','images/201610/source_img/_P_1476339844546.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('11','9','images/201610/goods_img/_P_1476339844923.jpg','','images/201610/thumb_img/_thumb_P_1476339844127.jpg','images/201610/source_img/_P_1476339844478.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('12','9','images/201610/goods_img/_P_1476339845020.jpg','','images/201610/thumb_img/_thumb_P_1476339845803.jpg','images/201610/source_img/_P_1476339845829.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('13','9','images/201610/goods_img/_P_1476339846166.jpg','','images/201610/thumb_img/_thumb_P_1476339846833.jpg','images/201610/source_img/_P_1476339846397.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('14','10','images/201610/goods_img/_P_1476341501037.jpg','','images/201610/thumb_img/_thumb_P_1476341501441.jpg','images/201610/source_img/_P_1476341501360.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('15','10','images/201610/goods_img/_P_1476341501764.jpg','','images/201610/thumb_img/_thumb_P_1476341501470.jpg','images/201610/source_img/_P_1476341501310.SS2','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('16','10','images/201610/goods_img/_P_1476341502116.jpg','','images/201610/thumb_img/_thumb_P_1476341502735.jpg','images/201610/source_img/_P_1476341502792.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('17','10','images/201610/goods_img/_P_1476341503390.jpg','','images/201610/thumb_img/_thumb_P_1476341503444.jpg','images/201610/source_img/_P_1476341503058.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('18','10','images/201610/goods_img/_P_1476341504953.jpg','','images/201610/thumb_img/_thumb_P_1476341504529.jpg','images/201610/source_img/_P_1476341504925.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('19','11','images/201610/goods_img/_P_1476341879174.jpg','','images/201610/thumb_img/_thumb_P_1476341879909.jpg','images/201610/source_img/_P_1476341879504.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('20','11','images/201610/goods_img/_P_1476341880346.jpg','','images/201610/thumb_img/_thumb_P_1476341880582.jpg','images/201610/source_img/_P_1476341880984.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('21','11','images/201610/goods_img/_P_1476341880701.jpg','','images/201610/thumb_img/_thumb_P_1476341880834.jpg','images/201610/source_img/_P_1476341880803.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('22','11','images/201610/goods_img/_P_1476341881731.jpg','','images/201610/thumb_img/_thumb_P_1476341881252.jpg','images/201610/source_img/_P_1476341881014.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('23','11','images/201610/goods_img/_P_1476341882559.jpg','','images/201610/thumb_img/_thumb_P_1476341882322.jpg','images/201610/source_img/_P_1476341882040.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('24','12','images/201610/goods_img/_P_1476343346963.jpg','','images/201610/thumb_img/_thumb_P_1476343346551.jpg','images/201610/source_img/_P_1476343345029.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('25','12','images/201610/goods_img/_P_1476343346565.jpg','','images/201610/thumb_img/_thumb_P_1476343346560.jpg','images/201610/source_img/_P_1476343346978.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('26','12','images/201610/goods_img/_P_1476343347548.jpg','','images/201610/thumb_img/_thumb_P_1476343347695.jpg','images/201610/source_img/_P_1476343347383.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('27','12','images/201610/goods_img/_P_1476343347144.jpg','','images/201610/thumb_img/_thumb_P_1476343347139.jpg','images/201610/source_img/_P_1476343347638.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('28','12','images/201610/goods_img/_P_1476343348874.jpg','','images/201610/thumb_img/_thumb_P_1476343348413.jpg','images/201610/source_img/_P_1476343348896.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('29','13','images/201610/goods_img/_P_1476343472712.jpg','','images/201610/thumb_img/_thumb_P_1476343472141.jpg','images/201610/source_img/_P_1476343472231.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('30','13','images/201610/goods_img/_P_1476343473030.jpg','','images/201610/thumb_img/_thumb_P_1476343473368.jpg','images/201610/source_img/_P_1476343473137.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('31','13','images/201610/goods_img/_P_1476343474777.jpg','','images/201610/thumb_img/_thumb_P_1476343474548.jpg','images/201610/source_img/_P_1476343474412.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('32','13','images/201610/goods_img/_P_1476343474543.jpg','','images/201610/thumb_img/_thumb_P_1476343474430.jpg','images/201610/source_img/_P_1476343474689.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('33','13','images/201610/goods_img/_P_1476343475119.jpg','','images/201610/thumb_img/_thumb_P_1476343475950.jpg','images/201610/source_img/_P_1476343475823.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('34','14','images/201610/goods_img/_P_1476689840567.jpg','','images/201610/thumb_img/_thumb_P_1476689840927.jpg','images/201610/source_img/_P_1476689840026.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('35','14','images/201610/goods_img/_P_1476689841765.jpg','','images/201610/thumb_img/_thumb_P_1476689841351.jpg','images/201610/source_img/_P_1476689841585.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('36','14','images/201610/goods_img/_P_1476689842716.jpg','','images/201610/thumb_img/_thumb_P_1476689842053.jpg','images/201610/source_img/_P_1476689842689.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('37','14','images/201610/goods_img/_P_1476689843842.jpg','','images/201610/thumb_img/_thumb_P_1476689843818.jpg','images/201610/source_img/_P_1476689843500.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('38','14','images/201610/goods_img/_P_1476689844148.jpg','','images/201610/thumb_img/_thumb_P_1476689844188.jpg','images/201610/source_img/_P_1476689844692.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('165','88','images/201708/goods_img/_P_1502140667636.jpg','','images/201708/thumb_img/_thumb_P_1502140667600.jpg','images/201708/source_img/_P_1502140667770.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('164','87','images/201708/goods_img/_P_1502140512712.jpg','','images/201708/thumb_img/_thumb_P_1502140512491.jpg','images/201708/source_img/_P_1502140512576.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('163','87','images/201708/goods_img/_P_1502140512911.jpg','','images/201708/thumb_img/_thumb_P_1502140512110.jpg','images/201708/source_img/_P_1502140512501.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('162','87','images/201708/goods_img/_P_1502140511070.jpg','','images/201708/thumb_img/_thumb_P_1502140511924.jpg','images/201708/source_img/_P_1502140511022.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('161','86','images/201708/goods_img/_P_1502140356619.jpg','','images/201708/thumb_img/_thumb_P_1502140356144.jpg','images/201708/source_img/_P_1502140356453.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('160','86','images/201708/goods_img/_P_1502140355017.jpg','','images/201708/thumb_img/_thumb_P_1502140355380.jpg','images/201708/source_img/_P_1502140355304.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('159','86','images/201708/goods_img/_P_1502140355066.jpg','','images/201708/thumb_img/_thumb_P_1502140355075.jpg','images/201708/source_img/_P_1502140355453.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('158','85','images/201708/goods_img/_P_1502140353433.jpg','','images/201708/thumb_img/_thumb_P_1502140353637.jpg','images/201708/source_img/_P_1502140353770.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('47','23','images/201610/goods_img/_P_1476692679967.jpg','','images/201610/thumb_img/_thumb_P_1476692679553.jpg','images/201610/source_img/_P_1476692679902.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('48','23','images/201610/goods_img/_P_1476692680161.jpg','','images/201610/thumb_img/_thumb_P_1476692680797.jpg','images/201610/source_img/_P_1476692680504.jpg','0','1','0');");
E_D("replace into `ecs_goods_gallery` values('49','23','images/201610/goods_img/_P_1476692681921.jpg','','images/201610/thumb_img/_thumb_P_1476692681633.jpg','images/201610/source_img/_P_1476692681828.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('50','23','images/201610/goods_img/_P_1476692681492.jpg','','images/201610/thumb_img/_thumb_P_1476692681561.jpg','images/201610/source_img/_P_1476692681314.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('51','23','images/201610/goods_img/_P_1476692682617.jpg','','images/201610/thumb_img/_thumb_P_1476692682706.jpg','images/201610/source_img/_P_1476692682778.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('52','23','images/201610/goods_img/23_P_1476938241413.jpg','','images/201610/thumb_img/23_thumb_P_1476938241967.jpg','images/201610/source_img/23_P_1476938241860.jpg','3','1','0');");
E_D("replace into `ecs_goods_gallery` values('54','23','images/201610/goods_img/23_P_1476938403522.jpg','','images/201610/thumb_img/23_thumb_P_1476938403719.jpg','images/201610/source_img/23_P_1476938403710.jpg','2','1','0');");
E_D("replace into `ecs_goods_gallery` values('55','24','images/201610/goods_img/_P_1476939043504.jpg','','images/201610/thumb_img/_thumb_P_1476939043796.jpg','images/201610/source_img/_P_1476939043648.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('56','24','images/201610/goods_img/_P_1476939044160.jpg','','images/201610/thumb_img/_thumb_P_1476939044732.jpg','images/201610/source_img/_P_1476939044583.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('57','24','images/201610/goods_img/_P_1476939045598.jpg','','images/201610/thumb_img/_thumb_P_1476939045794.jpg','images/201610/source_img/_P_1476939045259.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('58','24','images/201610/goods_img/_P_1476939046458.jpg','','images/201610/thumb_img/_thumb_P_1476939046006.jpg','images/201610/source_img/_P_1476939046302.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('59','24','images/201610/goods_img/_P_1476939046686.jpg','','images/201610/thumb_img/_thumb_P_1476939046996.jpg','images/201610/source_img/_P_1476939046591.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('60','24','images/201610/goods_img/24_P_1476939202293.jpg','','images/201610/thumb_img/24_thumb_P_1476939202550.jpg','images/201610/source_img/24_P_1476939202653.jpg','6','1','0');");
E_D("replace into `ecs_goods_gallery` values('62','24','images/201610/goods_img/24_P_1476939345405.jpg','','images/201610/thumb_img/24_thumb_P_1476939345720.jpg','images/201610/source_img/24_P_1476939345562.jpg','4','1','0');");
E_D("replace into `ecs_goods_gallery` values('63','24','images/201610/goods_img/24_P_1476939376662.jpg','','images/201610/thumb_img/24_thumb_P_1476939376453.jpg','images/201610/source_img/24_P_1476939376826.jpg','5','1','0');");
E_D("replace into `ecs_goods_gallery` values('151','83','images/201708/goods_img/_P_1502140150363.jpg','','images/201708/thumb_img/_thumb_P_1502140150122.jpg','images/201708/source_img/_P_1502140150467.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('75','29','images/201612/goods_img/_P_1481656980610.jpg','','images/201612/thumb_img/_thumb_P_1481656980043.jpg','images/201612/source_img/_P_1481656980292.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('76','29','images/201612/goods_img/_P_1481656980169.jpg','','images/201612/thumb_img/_thumb_P_1481656980567.jpg','images/201612/source_img/_P_1481656980835.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('77','29','images/201612/goods_img/_P_1481656981757.jpg','','images/201612/thumb_img/_thumb_P_1481656981191.jpg','images/201612/source_img/_P_1481656981389.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('78','29','images/201612/goods_img/_P_1481656982586.jpg','','images/201612/thumb_img/_thumb_P_1481656982857.jpg','images/201612/source_img/_P_1481656982264.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('79','29','images/201612/goods_img/_P_1481656982218.jpg','','images/201612/thumb_img/_thumb_P_1481656982503.jpg','images/201612/source_img/_P_1481656982038.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('80','30','images/201612/goods_img/_P_1482537752306.jpg','','images/201612/thumb_img/_thumb_P_1482537752786.jpg','images/201612/source_img/_P_1482537752327.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('81','30','images/201612/goods_img/_P_1482537754901.jpg','','images/201612/thumb_img/_thumb_P_1482537754615.jpg','images/201612/source_img/_P_1482537754503.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('82','30','images/201612/goods_img/_P_1482537757666.jpg','','images/201612/thumb_img/_thumb_P_1482537757045.jpg','images/201612/source_img/_P_1482537756382.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('83','30','images/201612/goods_img/_P_1482537759870.jpg','','images/201612/thumb_img/_thumb_P_1482537759935.jpg','images/201612/source_img/_P_1482537759844.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('84','30','images/201612/goods_img/_P_1482537761893.jpg','','images/201612/thumb_img/_thumb_P_1482537761235.jpg','images/201612/source_img/_P_1482537761022.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('157','85','images/201708/goods_img/_P_1502140352833.jpg','','images/201708/thumb_img/_thumb_P_1502140352908.jpg','images/201708/source_img/_P_1502140352229.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('91','34','images/201701/goods_img/34_P_1484363055501.jpg','','images/201701/thumb_img/34_thumb_P_1484363055674.jpg','images/201701/source_img/34_P_1484363055994.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('90','34','images/201701/goods_img/34_P_1484363049434.jpg','','images/201701/thumb_img/34_thumb_P_1484363049864.jpg','images/201701/source_img/34_P_1484363049080.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('156','85','images/201708/goods_img/_P_1502140351864.jpg','','images/201708/thumb_img/_thumb_P_1502140351571.jpg','images/201708/source_img/_P_1502140351468.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('155','84','images/201708/goods_img/_P_1502140240151.jpg','','images/201708/thumb_img/_thumb_P_1502140240293.jpg','images/201708/source_img/_P_1502140240916.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('154','84','images/201708/goods_img/_P_1502140239288.jpg','','images/201708/thumb_img/_thumb_P_1502140239455.jpg','images/201708/source_img/_P_1502140239704.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('153','84','images/201708/goods_img/_P_1502140238182.jpg','','images/201708/thumb_img/_thumb_P_1502140238589.jpg','images/201708/source_img/_P_1502140238308.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('104','43','images/201702/goods_img/_P_1486417080772.jpg','','images/201702/thumb_img/_thumb_P_1486417080812.jpg','images/201702/source_img/_P_1486417080152.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('105','43','images/201702/goods_img/_P_1486417081341.jpg','','images/201702/thumb_img/_thumb_P_1486417081845.jpg','images/201702/source_img/_P_1486417081317.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('106','43','images/201702/goods_img/_P_1486417081391.jpg','','images/201702/thumb_img/_thumb_P_1486417081478.jpg','images/201702/source_img/_P_1486417081779.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('107','43','images/201702/goods_img/_P_1486417082601.jpg','','images/201702/thumb_img/_thumb_P_1486417082357.jpg','images/201702/source_img/_P_1486417082972.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('108','43','images/201702/goods_img/_P_1486417082850.jpg','','images/201702/thumb_img/_thumb_P_1486417082190.jpg','images/201702/source_img/_P_1486417082923.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('109','44','images/201702/goods_img/_P_1486951313171.jpg','','images/201702/thumb_img/_thumb_P_1486951313832.jpg','images/201702/source_img/_P_1486951313830.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('110','44','images/201702/goods_img/_P_1486951314594.jpg','','images/201702/thumb_img/_thumb_P_1486951314280.jpg','images/201702/source_img/_P_1486951314195.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('111','44','images/201702/goods_img/_P_1486951315105.jpg','','images/201702/thumb_img/_thumb_P_1486951315630.jpg','images/201702/source_img/_P_1486951315899.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('112','44','images/201702/goods_img/_P_1486951315546.jpg','','images/201702/thumb_img/_thumb_P_1486951315390.jpg','images/201702/source_img/_P_1486951315779.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('113','44','images/201702/goods_img/_P_1486951316763.jpg','','images/201702/thumb_img/_thumb_P_1486951316551.jpg','images/201702/source_img/_P_1486951316100.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('116','26','images/201702/goods_img/26_P_1488266288825.jpg','','images/201702/thumb_img/26_thumb_P_1488266288282.jpg','images/201702/source_img/26_P_1488266288693.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('118','311','images/201705/goods_img/311_P_1496040171848.jpg','','images/201705/thumb_img/311_thumb_P_1496040172123.jpg','images/201705/source_img/311_P_1496040171022.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('152','83','images/201708/goods_img/_P_1502140151956.jpg','','images/201708/thumb_img/_thumb_P_1502140151788.jpg','images/201708/source_img/_P_1502140151757.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('120','313','images/201705/goods_img/313_P_1496040559595.jpg','','images/201705/thumb_img/313_thumb_P_1496040559542.jpg','images/201705/source_img/313_P_1496040559725.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('122','318','images/201705/goods_img/318_P_1496041286444.jpg','','images/201705/thumb_img/318_thumb_P_1496041286684.jpg','images/201705/source_img/318_P_1496041286501.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('124','321','images/201705/goods_img/321_P_1496041536305.jpg','','images/201705/thumb_img/321_thumb_P_1496041536634.jpg','images/201705/source_img/321_P_1496041536280.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('126','324','images/201705/goods_img/324_P_1496041896156.jpg','','images/201705/thumb_img/324_thumb_P_1496041896903.jpg','images/201705/source_img/324_P_1496041896551.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('128','338','','','','','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('130','340','images/201705/goods_img/340_P_14960434086250.jpg','','images/201705/thumb_img/340_thumb_P_14960434086071.jpg','images/201705/source_img/340_P_14960434086271.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('132','73','https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&amp;quality=100&amp;size=b4000_4000&amp;sec=1496674939&amp;di=c2ac647e052c0e32478c035acea8c5d3&amp;src=http://www.pp3.cn/uploads/201502/2015021111.jpg','','images/201706/thumb_img/73_thumb_P_1496646285421.jpg','https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&amp;quality=100&amp;size=b4000_4000&amp;sec=1496674939&amp;di=c2ac647e052c0e32478c035acea8c5d3&amp;src=http://www.pp3.cn/uploads/201502/2015021111.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('133','74','https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&amp;quality=100&amp;size=b4000_4000&amp;sec=1496674939&amp;di=c2ac647e052c0e32478c035acea8c5d3&amp;src=http://www.pp3.cn/uploads/201502/2015021111.jpg','','images/201706/thumb_img/74_thumb_P_1496646294005.jpg','https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&amp;quality=100&amp;size=b4000_4000&amp;sec=1496674939&amp;di=c2ac647e052c0e32478c035acea8c5d3&amp;src=http://www.pp3.cn/uploads/201502/2015021111.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('219','112','images/201708/goods_img/112_P_1503537808087.jpg','','images/201708/thumb_img/112_thumb_P_1503537808169.jpg','images/201708/source_img/112_P_1503537808985.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('218','114','images/201708/goods_img/114_P_1503537796610.jpg','','images/201708/thumb_img/114_thumb_P_1503537796885.jpg','images/201708/source_img/114_P_1503537796598.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('217','113','images/201708/goods_img/113_P_1503537615133.jpg','','images/201708/thumb_img/113_thumb_P_1503537615810.jpg','images/201708/source_img/113_P_1503537615910.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('216','112','images/201708/goods_img/112_P_1503537518075.jpg','','images/201708/thumb_img/112_thumb_P_1503537518750.jpg','images/201708/source_img/112_P_1503537518098.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('150','83','images/201708/goods_img/_P_1502140150786.jpg','','images/201708/thumb_img/_thumb_P_1502140150492.jpg','images/201708/source_img/_P_1502140150166.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('172','90','images/201708/goods_img/_P_1502140904380.jpg','','images/201708/thumb_img/_thumb_P_1502140904114.jpg','images/201708/source_img/_P_1502140904440.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('173','90','images/201708/goods_img/_P_1502140904757.jpg','','images/201708/thumb_img/_thumb_P_1502140904954.jpg','images/201708/source_img/_P_1502140904050.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('174','91','images/201708/goods_img/_P_1502140985228.jpg','','images/201708/thumb_img/_thumb_P_1502140985046.jpg','images/201708/source_img/_P_1502140985823.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('175','91','images/201708/goods_img/_P_1502140985323.jpg','','images/201708/thumb_img/_thumb_P_1502140985497.jpg','images/201708/source_img/_P_1502140985178.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('176','92','images/201708/goods_img/_P_1502141174738.jpg','','images/201708/thumb_img/_thumb_P_1502141174246.jpg','images/201708/source_img/_P_1502141174714.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('177','92','images/201708/goods_img/_P_1502141175357.jpg','','images/201708/thumb_img/_thumb_P_1502141175072.jpg','images/201708/source_img/_P_1502141175862.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('178','93','images/201708/goods_img/_P_1502141233028.jpg','','images/201708/thumb_img/_thumb_P_1502141233454.jpg','images/201708/source_img/_P_1502141233410.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('179','93','images/201708/goods_img/_P_1502141234072.jpg','','images/201708/thumb_img/_thumb_P_1502141234327.jpg','images/201708/source_img/_P_1502141234133.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('180','94','images/201708/goods_img/_P_1502141277061.jpg','','images/201708/thumb_img/_thumb_P_1502141277907.jpg','images/201708/source_img/_P_1502141277639.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('181','94','images/201708/goods_img/_P_1502141278866.jpg','','images/201708/thumb_img/_thumb_P_1502141278735.jpg','images/201708/source_img/_P_1502141278876.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('182','95','images/201708/goods_img/_P_1502141313520.jpg','','images/201708/thumb_img/_thumb_P_1502141313238.jpg','images/201708/source_img/_P_1502141313799.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('183','95','images/201708/goods_img/_P_1502141314137.jpg','','images/201708/thumb_img/_thumb_P_1502141314126.jpg','images/201708/source_img/_P_1502141314233.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('184','96','images/201708/goods_img/_P_1502141438483.jpg','','images/201708/thumb_img/_thumb_P_1502141438113.jpg','images/201708/source_img/_P_1502141438903.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('185','96','images/201708/goods_img/_P_1502141438573.jpg','','images/201708/thumb_img/_thumb_P_1502141438126.jpg','images/201708/source_img/_P_1502141438204.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('186','97','images/201708/goods_img/_P_1502141478592.jpg','','images/201708/thumb_img/_thumb_P_1502141478858.jpg','images/201708/source_img/_P_1502141478420.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('187','97','images/201708/goods_img/_P_1502141480529.jpg','','images/201708/thumb_img/_thumb_P_1502141480629.jpg','images/201708/source_img/_P_1502141480543.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('188','98','images/201708/goods_img/_P_1502142376260.jpg','','images/201708/thumb_img/_thumb_P_1502142376741.jpg','images/201708/source_img/_P_1502142376992.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('189','98','images/201708/goods_img/_P_1502142376875.jpg','','images/201708/thumb_img/_thumb_P_1502142376576.jpg','images/201708/source_img/_P_1502142376707.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('190','99','images/201708/goods_img/_P_1502142415291.jpg','','images/201708/thumb_img/_thumb_P_1502142415783.jpg','images/201708/source_img/_P_1502142415644.SS2','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('191','99','images/201708/goods_img/_P_1502142415974.jpg','','images/201708/thumb_img/_thumb_P_1502142415627.jpg','images/201708/source_img/_P_1502142415492.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('192','100','images/201708/goods_img/_P_1502142450843.jpg','','images/201708/thumb_img/_thumb_P_1502142450855.jpg','images/201708/source_img/_P_1502142450094.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('193','100','images/201708/goods_img/_P_1502142452474.jpg','','images/201708/thumb_img/_thumb_P_1502142452695.jpg','images/201708/source_img/_P_1502142452412.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('194','101','images/201708/goods_img/_P_1502142499285.jpg','','images/201708/thumb_img/_thumb_P_1502142499146.jpg','images/201708/source_img/_P_1502142499892.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('195','101','images/201708/goods_img/_P_1502142500348.jpg','','images/201708/thumb_img/_thumb_P_1502142500789.jpg','images/201708/source_img/_P_1502142500854.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('196','102','images/201708/goods_img/_P_1502142557573.jpg','','images/201708/thumb_img/_thumb_P_1502142557069.jpg','images/201708/source_img/_P_1502142557789.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('197','102','images/201708/goods_img/_P_1502142557413.jpg','','images/201708/thumb_img/_thumb_P_1502142557299.jpg','images/201708/source_img/_P_1502142557108.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('198','103','images/201708/goods_img/_P_1502142638156.jpg','','images/201708/thumb_img/_thumb_P_1502142638310.jpg','images/201708/source_img/_P_1502142638498.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('199','103','images/201708/goods_img/_P_1502142639333.jpg','','images/201708/thumb_img/_thumb_P_1502142639005.jpg','images/201708/source_img/_P_1502142639922.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('200','104','images/201708/goods_img/_P_1502143226632.jpg','','images/201708/thumb_img/_thumb_P_1502143226910.jpg','images/201708/source_img/_P_1502143226162.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('201','104','images/201708/goods_img/_P_1502143227288.jpg','','images/201708/thumb_img/_thumb_P_1502143227673.jpg','images/201708/source_img/_P_1502143227892.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('202','105','images/201708/goods_img/_P_1502143258994.jpg','','images/201708/thumb_img/_thumb_P_1502143258160.jpg','images/201708/source_img/_P_1502143258562.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('203','105','images/201708/goods_img/_P_1502143259353.jpg','','images/201708/thumb_img/_thumb_P_1502143259122.jpg','images/201708/source_img/_P_1502143259757.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('204','106','images/201708/goods_img/_P_1502143286838.jpg','','images/201708/thumb_img/_thumb_P_1502143286978.jpg','images/201708/source_img/_P_1502143286332.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('205','106','images/201708/goods_img/_P_1502143287229.jpg','','images/201708/thumb_img/_thumb_P_1502143287393.jpg','images/201708/source_img/_P_1502143287907.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('206','107','images/201708/goods_img/_P_1502143324528.jpg','','images/201708/thumb_img/_thumb_P_1502143324188.jpg','images/201708/source_img/_P_1502143324426.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('207','107','images/201708/goods_img/_P_1502143325671.jpg','','images/201708/thumb_img/_thumb_P_1502143325674.jpg','images/201708/source_img/_P_1502143325554.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('208','108','images/201708/goods_img/_P_1502143367123.jpg','','images/201708/thumb_img/_thumb_P_1502143367365.jpg','images/201708/source_img/_P_1502143366475.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('209','108','images/201708/goods_img/_P_1502143368723.jpg','','images/201708/thumb_img/_thumb_P_1502143368091.jpg','images/201708/source_img/_P_1502143368823.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('210','109','images/201708/goods_img/_P_1502143413933.jpg','','images/201708/thumb_img/_thumb_P_1502143413796.jpg','images/201708/source_img/_P_1502143413301.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('211','109','images/201708/goods_img/_P_1502143414101.jpg','','images/201708/thumb_img/_thumb_P_1502143414112.jpg','images/201708/source_img/_P_1502143414852.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('212','110','images/201708/goods_img/_P_1502143477675.jpg','','images/201708/thumb_img/_thumb_P_1502143477775.jpg','images/201708/source_img/_P_1502143477368.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('213','110','images/201708/goods_img/_P_1502143477936.jpg','','images/201708/thumb_img/_thumb_P_1502143477276.jpg','images/201708/source_img/_P_1502143477579.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('214','111','images/201708/goods_img/_P_1502143511629.jpg','','images/201708/thumb_img/_thumb_P_1502143511445.jpg','images/201708/source_img/_P_1502143511983.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('215','111','images/201708/goods_img/_P_1502143511949.jpg','','images/201708/thumb_img/_thumb_P_1502143511879.jpg','images/201708/source_img/_P_1502143511699.jpg','0','0','0');");

require("../../inc/footer.php");
?>