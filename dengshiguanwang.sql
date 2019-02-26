/*
Navicat MySQL Data Transfer

Source Server         : admin
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : dengshiguanwang

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-02-26 17:03:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lf_business`
-- ----------------------------
DROP TABLE IF EXISTS `lf_business`;
CREATE TABLE `lf_business` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_business
-- ----------------------------
INSERT INTO `lf_business` VALUES ('2', 'app制作', '1542007438', '1542007261', '1542007438');
INSERT INTO `lf_business` VALUES ('3', 'fsd ', '1542007493', '1542007387', '1542007493');
INSERT INTO `lf_business` VALUES ('4', 'fs ', '1542007520', '1542007506', '1542007520');
INSERT INTO `lf_business` VALUES ('5', '保健养生', '1550126223', '1542007510', '1550126223');
INSERT INTO `lf_business` VALUES ('6', '智能家居', '1548473435', '1542013806', null);
INSERT INTO `lf_business` VALUES ('7', '制冷设备', '1550630237', '1542242861', null);
INSERT INTO `lf_business` VALUES ('8', '空调批发', '1550126246', '1550126246', null);

-- ----------------------------
-- Table structure for `lf_lunbo_first`
-- ----------------------------
DROP TABLE IF EXISTS `lf_lunbo_first`;
CREATE TABLE `lf_lunbo_first` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_lunbo_first
-- ----------------------------
INSERT INTO `lf_lunbo_first` VALUES ('1', './uploads/pics/20190220/2be426a6a76fe3721909b1cbddba2c35.jpg', '0', '1550629840', '0');
INSERT INTO `lf_lunbo_first` VALUES ('2', './uploads/pics/20190220/2a8b428a6ac98c15c7118ce52e34d724.jpg', '1546421170', '1550629957', '0');
INSERT INTO `lf_lunbo_first` VALUES ('3', './uploads/pics/20190220/9496d625a183bba28de42fd6a2de3d06.jpg', '1546421181', '1550630139', '0');

-- ----------------------------
-- Table structure for `lf_lunbo_other`
-- ----------------------------
DROP TABLE IF EXISTS `lf_lunbo_other`;
CREATE TABLE `lf_lunbo_other` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `is_use` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0未启用 1启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_lunbo_other
-- ----------------------------
INSERT INTO `lf_lunbo_other` VALUES ('4', './uploads/pics/20181130/04fe935b82062260d7c60a19b9e0a2b2.jpg', '1543542531', '1543542536', '1543542536', '1');
INSERT INTO `lf_lunbo_other` VALUES ('5', './uploads/pics/20181130/77e029920493ea1a11a31a015e18ac82.jpg', '1543542567', '1543567505', '1543567505', '0');
INSERT INTO `lf_lunbo_other` VALUES ('6', './uploads/pics/20181130/ec3177a558cdda8a89c5fe5292f28675.png', '1543542578', '1543567508', '1543567508', '0');
INSERT INTO `lf_lunbo_other` VALUES ('7', './uploads/pics/20181225/a45e1097689642108b6c939acae0572e.jpg', '1543557269', '1545727673', null, '1');
INSERT INTO `lf_lunbo_other` VALUES ('8', './uploads/pics/20181130/5f5f6a1826592428cfe1a9ffe455b376.jpg', '1543559044', '1543559044', null, '1');

-- ----------------------------
-- Table structure for `lf_manager`
-- ----------------------------
DROP TABLE IF EXISTS `lf_manager`;
CREATE TABLE `lf_manager` (
  `mg_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `mg_name` varchar(32) NOT NULL COMMENT '名称',
  `mg_pwd` char(32) NOT NULL COMMENT '密码',
  `create_time` int(10) DEFAULT NULL COMMENT '添加时间',
  `update_time` int(10) DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(10) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`mg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=505 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of lf_manager
-- ----------------------------
INSERT INTO `lf_manager` VALUES ('1', 'admin', 'md123456', null, null, null);
INSERT INTO `lf_manager` VALUES ('503', '西门', '1234', null, null, null);
INSERT INTO `lf_manager` VALUES ('504', 'dd', '1234', null, null, null);

-- ----------------------------
-- Table structure for `lf_news`
-- ----------------------------
DROP TABLE IF EXISTS `lf_news`;
CREATE TABLE `lf_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` smallint(6) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '内容',
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '关键字',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_news
-- ----------------------------
INSERT INTO `lf_news` VALUES ('18', '4', '好评如潮', '周杰伦', './uploads/pics/20181228/740c963c58ceb9ac9363874820dc5a7c.jpg', '<p>老实交代浪费时间的</p>', '隆富盛元成功上市！！！', '1545984928', '1545984928', null);
INSERT INTO `lf_news` VALUES ('16', '5', '腾讯游戏破产', '第三方', './uploads/pics/20181227/2b71f421cfa29ab1bbc1e582a16f0409.gif', '<p>胜多负少的</p>', '腾讯股价大跌！！', '1545892413', '1545984986', null);
INSERT INTO `lf_news` VALUES ('19', '4', '北京隆富盛元收购百度', '王小二', './uploads/pics/20190109/a568e42d4cbebc48889167e7968486bc.jpg', '<p>胜多负少的</p>', '第三方', '1547004220', '1547004220', null);

-- ----------------------------
-- Table structure for `lf_news_category`
-- ----------------------------
DROP TABLE IF EXISTS `lf_news_category`;
CREATE TABLE `lf_news_category` (
  `category_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_news_category
-- ----------------------------
INSERT INTO `lf_news_category` VALUES ('4', '公司要闻', '1545871524', '1545888780', null);
INSERT INTO `lf_news_category` VALUES ('5', '行业动态', '1545873930', '1545888791', null);
INSERT INTO `lf_news_category` VALUES ('6', '线下服务', '1545969400', '1545983503', '1545983503');
INSERT INTO `lf_news_category` VALUES ('7', '线下服务', '1546050293', '1546051772', '1546051772');

-- ----------------------------
-- Table structure for `lf_picture`
-- ----------------------------
DROP TABLE IF EXISTS `lf_picture`;
CREATE TABLE `lf_picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `describe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '图片描述位置',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_picture
-- ----------------------------
INSERT INTO `lf_picture` VALUES ('1', '关于我们 一图 【1920 x 500】', './uploads/pics/20190222/18078498cb0c9b1eaef88281279494fa.jpg', '1546479300', '1550815359', null);
INSERT INTO `lf_picture` VALUES ('2', '关于我们 二图 【650 x 300】 ', './uploads/pics/20190222/5a7d2ba297bdc7113a4d8e24b23641c9.jpg', '1546480360', '1550815377', null);
INSERT INTO `lf_picture` VALUES ('3', '关于我们 三图 【1920 x 560】', './uploads/pics/20190222/021bacab669a1eef8b32ac37ddd35ae9.jpg', '1546480479', '1550815429', null);
INSERT INTO `lf_picture` VALUES ('4', '产品服务 一图 【1920 x 500】', './uploads/pics/20190220/f36f37557f0e061e892669c9b02a7779.jpg', '1546480576', '1550634055', null);
INSERT INTO `lf_picture` VALUES ('5', ' 新闻中心 一图 【1920 x 500】', './uploads/pics/20190109/ab6df1dc2b8fa26eaedf266930b9eeee.jpg', '1546480623', '1547019361', null);
INSERT INTO `lf_picture` VALUES ('6', '公司团队 一图 【1920 x 500】', './uploads/pics/20190118/68c6c0afd664453aac738fb35bdcedfe.jpg', '1546480647', '1547800529', null);
INSERT INTO `lf_picture` VALUES ('7', '联系我们 一图  【1950 x 500】', './uploads/pics/20190222/aaf812c7a29986665d1b6af565bcdc04.jpg', '1546480710', '1550797737', null);
INSERT INTO `lf_picture` VALUES ('8', '团队详情 一图 【1920 x 500】', './uploads/pics/20190119/f3ac2e1691dfee23f5a452f9a322d93a.jpg', '1546907848', '1547868822', null);

-- ----------------------------
-- Table structure for `lf_product`
-- ----------------------------
DROP TABLE IF EXISTS `lf_product`;
CREATE TABLE `lf_product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_price` decimal(8,0) NOT NULL,
  `category_id` int(10) unsigned NOT NULL COMMENT '产品对应产品服务分类id',
  `product_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品链接',
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_product
-- ----------------------------
INSERT INTO `lf_product` VALUES ('10', '1500', '7', '磁悬浮枕头', 'www.fdofjsd.com', './uploads/picstmp/20181221/350607025d5e22730a56e9e9b7fcb2ab.jpg', '1545381206', '1545881700', '1545881700');
INSERT INTO `lf_product` VALUES ('11', '1500', '9', '奥特曼', 'www.fdofjsd.com', './uploads/picstmp/20181221/b9f3aa72cf82d46701f437c695c80746.png', '1545381222', '1545881697', '1545881697');
INSERT INTO `lf_product` VALUES ('12', '1999', '8', '家庭影院', 'www.fdofjsd.com', './uploads/picstmp/20181221/4b8aa71de43828fee738650b56f6f42a.jpg', '1545381238', '1545881694', '1545881694');
INSERT INTO `lf_product` VALUES ('13', '2900', '7', '美的（Midea）空调挂机 1.5匹/大1匹变频壁挂式冷暖一级能效节能 冷静星二代 KFR- 26GW/BP3DN8Y-PH200(B1大1匹', 'https://item.jd.com/28522507781.html#crumb-wrap', './uploads/pics/20190109/6e78f8354994448713fb01281fd3d27e.jpg', '1545449000', '1547025388', null);
INSERT INTO `lf_product` VALUES ('14', '0', '8', '递四方速递', '水电费', './uploads/pics/20181227/faf9bf30737b3f8457a4e2e5d18b83d9.jpg', '1545880425', '1545881692', '1545881692');
INSERT INTO `lf_product` VALUES ('15', '7999', '7', '美的（Midea）空调柜机舒适星大2匹/3匹立式圆柱变频冷暖无风感智能WiFi 钛金KFR- 51LW/BP3DN8Y-YB302(B1) 2匹', 'https://item.jd.com/26367685849.html', './uploads/pics/20190109/7cb4c73e2bb2fa970d9639d08bcc9cf3.jpg', '1545880608', '1547025264', null);
INSERT INTO `lf_product` VALUES ('16', '1999', '9', '八戒', 'www.fdofjsd.com', './uploads/pics/20181227/3adb0a15539abd5127aa5ed5b5233dc0.jpg', '1545881659', '1547026046', '1547026046');
INSERT INTO `lf_product` VALUES ('17', '9999', '7', '美的（Midea）空间站空调挂机1.5匹/2匹可落地壁挂式除湿新风净化器加湿空调一体机 KFR-35GW/BP3DN8Y-Air', 'https://item.jd.com/37858548050.html#none', './uploads/pics/20190109/22caf8eef50a9a707e1ed8a897dc39bc.jpg', '1547025569', '1547025569', null);
INSERT INTO `lf_product` VALUES ('18', '6199', '7', '美的（Midea）风语者变频空调挂机 1.5匹一级能效 冷暖壁挂式无风感空调卧室KFR- 35GW/BP3DN8Y-FA100(B1 白色', 'https://item.jd.com/37858548050.html#none', './uploads/pics/20190109/03469065efe7fd9e012465f24bf2a349.jpg', '1547025724', '1547025724', null);
INSERT INTO `lf_product` VALUES ('19', '1500', '7', '磁悬浮枕头', 'fsd', './uploads/pics/20190109/5c31ea8f60c4540d5dc5b613146dedc4.jpg', '1547026076', '1547026090', '1547026090');

-- ----------------------------
-- Table structure for `lf_product_category`
-- ----------------------------
DROP TABLE IF EXISTS `lf_product_category`;
CREATE TABLE `lf_product_category` (
  `category_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_product_category
-- ----------------------------
INSERT INTO `lf_product_category` VALUES ('7', '智能家居', '1545381151', '1545381151', null);
INSERT INTO `lf_product_category` VALUES ('8', '养生保健', '1545381172', '1550797537', '1550797537');
INSERT INTO `lf_product_category` VALUES ('9', '学习玩具', '1545381181', '1550797541', '1550797541');
INSERT INTO `lf_product_category` VALUES ('10', '线下服务', '1545381189', '1545381263', '1545381263');
INSERT INTO `lf_product_category` VALUES ('11', '线下服务', '1545382067', '1547869366', '1547869366');
INSERT INTO `lf_product_category` VALUES ('12', '家用空调', '1550903174', '1550903174', null);
INSERT INTO `lf_product_category` VALUES ('13', '中央空调', '1550903186', '1550903186', null);
INSERT INTO `lf_product_category` VALUES ('14', '线下服务', '1550903194', '1550903194', null);

-- ----------------------------
-- Table structure for `lf_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `lf_profiles`;
CREATE TABLE `lf_profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `about_us` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profiles` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_profiles
-- ----------------------------
INSERT INTO `lf_profiles` VALUES ('1', '<p style=\"white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp;邓氏制冷是一家以家用空调、分体空调、中央空调、通风系统、智能家居为核心的暖通空调业务的科技公司，公司提供多元化的产品种类与智慧家居一体化解决方案服务.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司产品及工程案例服务遍布全国，拥有五大事业部：家用空调、中央空调、智能家居、线下服务，新零售。线下有几十家专卖店，线上有京东专卖店和苏宁专卖店。</p><p>&nbsp; &nbsp; &nbsp; 公司业务涵盖制冷行业的各个领域。2011年创销售额亿元以上，成为暖通行业的领军旗帜。公司拥有优秀的经营管理人才和完善的质量管理系统，目前人员规模130人，拥有电气工程、机械工程以及暖通空调工程等方面的高级技术人才，拥有雄厚的技术实力和规范化的管理体系，科学的人力资源管理及有竞争力的薪酬福利保障，公司实现科学化管理体制，集空调批发、家用商用空调工程安装，设计、维修保养于一体的现代化专业制冷公司，凭借先进的管理及施工经验,，多次获得美的、大金等合作商的年度嘉奖。</p>', '', '1542185671', '1550904372', '0');

-- ----------------------------
-- Table structure for `lf_seo`
-- ----------------------------
DROP TABLE IF EXISTS `lf_seo`;
CREATE TABLE `lf_seo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_seo
-- ----------------------------
INSERT INTO `lf_seo` VALUES ('1', '北京长顺邓氏制冷设备有限公司', '北京长顺邓氏制冷设备有限公司,北京长顺，长顺邓氏', '北京长顺邓氏制冷设备有限公司早期为北京邓氏制冷安装服务中心，成立于1990年，主要从事家（商）用空调设备销售及安装和冷库制作安装工程，同时提供咨询，工程设计等服务，是北京市制冷协会会员单位');

-- ----------------------------
-- Table structure for `lf_shouye`
-- ----------------------------
DROP TABLE IF EXISTS `lf_shouye`;
CREATE TABLE `lf_shouye` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `detail_one` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_shouye
-- ----------------------------
INSERT INTO `lf_shouye` VALUES ('0000000001', '<p>品牌使命：</p><p>专注智慧生活，慧（惠）及每个家庭</p><p>品牌Slogan:&nbsp;<br/></p><p>制冷一站式解决方案服务商 / 智慧家居生活一体化解决方案服务商&nbsp;</p><p>品牌定位：<br/></p><p>制冷服务综合服务商&nbsp; 让家庭低成本享受到高品质智慧生活。</p><p>品牌信仰：<br/></p><p>踏实服务 用户获益 福报传承</p>', '1550903005');

-- ----------------------------
-- Table structure for `lf_team`
-- ----------------------------
DROP TABLE IF EXISTS `lf_team`;
CREATE TABLE `lf_team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '职位',
  `profile` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '毕业院校',
  `degree` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '座右铭',
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '个人简介',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_team
-- ----------------------------
INSERT INTO `lf_team` VALUES ('1', '杨勇', './uploads/pics/20190102/eb2d96a97e4972ae704312a5367bb995.jpg', '业务经理', '北京长顺邓氏制冷设备有限公司 业务经理', '浙江大学', '硕士学位', '人无完人', '<p>2011年毕业于美国耶鲁大学 先后在阿里巴巴 腾讯担任首席技术官</p>', '1544603442', '1550134999', null);
INSERT INTO `lf_team` VALUES ('2', '张盛磊', './uploads/pics/20181213/4f355bb415c089647c25a85a7216298f.jpg', '运营总监', '北京长顺邓氏制冷设备有限公司 运营总监', '', '', '', '', '1544603679', '1550135007', null);
INSERT INTO `lf_team` VALUES ('3', '丁支林', './uploads/pics/20190103/d3713e47df98c133696ec49588bb3201.jpg', 'CFO', '北京长顺邓氏制冷设备有限公司 首席CFO', '', '', '', '', '1544603690', '1550135014', null);
INSERT INTO `lf_team` VALUES ('4', '张海云', './uploads/pics/20190103/5ff510742a887c4707b595c9e16dfdb6.jpg', '总经理', '北京长顺邓氏制冷设备有限公司 总经理', '', '', '', '', '1544756932', '1550135022', null);
INSERT INTO `lf_team` VALUES ('5', '小十七', './uploads/pics/20190103/ff44397e8f6a1f59f05ea059fe6640ad.jpg', 'cto', '北京隆富盛元科技发展有限公司  CTO', '', '', '', null, '1544757129', '1546850861', '1546850861');
INSERT INTO `lf_team` VALUES ('6', '王大锤', './uploads/pics/20190103/f5289eef958c0edf4c50f840f8f05db1.jpg', '保安队长', '北京长顺邓氏制冷设备有限公司', '', '', '', '', '1546476877', '1550135035', null);
INSERT INTO `lf_team` VALUES ('7', '王大锤', './uploads/pics/20190220/c010ce9e32dddde27b5ed8b804b471c7.jpg', '发送到发送到', '北京长顺邓氏制冷设备有限公司', '水电费', '电饭锅', '水电费感受到', '<p>水电费<br/></p>', '1546848097', '1550634484', null);

-- ----------------------------
-- Table structure for `lf_tel`
-- ----------------------------
DROP TABLE IF EXISTS `lf_tel`;
CREATE TABLE `lf_tel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '联系地址',
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '网址',
  `update_time` int(11) NOT NULL COMMENT '时间修改',
  `company_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyrigtht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lf_tel
-- ----------------------------
INSERT INTO `lf_tel` VALUES ('1', '北京市大兴区旧宫镇旧桥路25号院12-1-144', '400-080-087', 'dszhileng@d17.cc', 'www.mideabj.com', '1551150757', '北京长顺邓氏制冷设备有限公司', '京ICP备09042371号-6', 'Copyright©2019', './uploads/pics/20181225/131c06a46093e9b67b95e975f33d8167.jpg');
