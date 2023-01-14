-- MySQL dump 10.13  Distrib 5.6.50, for Linux (x86_64)
--
-- Host: localhost    Database: fenfa
-- ------------------------------------------------------
-- Server version	5.6.50-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prefix_action`
--

DROP TABLE IF EXISTS `prefix_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT 'index' COMMENT '名称',
  `m` varchar(32) NOT NULL DEFAULT 'index' COMMENT '模块',
  `c` varchar(32) NOT NULL DEFAULT 'index' COMMENT '控制器',
  `a` varchar(32) NOT NULL DEFAULT 'index' COMMENT '方法',
  `p` varchar(255) NOT NULL DEFAULT '' COMMENT '参数',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级ID',
  `lock_on` tinyint(1) NOT NULL DEFAULT '0' COMMENT '锁定',
  `create_time` int(11) NOT NULL DEFAULT '1' COMMENT '新增时间',
  `update_time` int(11) NOT NULL DEFAULT '1' COMMENT '更改时间',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `m` (`m`,`c`,`a`,`p`)
) ENGINE=InnoDB AUTO_INCREMENT=579 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_action`
--

LOCK TABLES `prefix_action` WRITE;
/*!40000 ALTER TABLE `prefix_action` DISABLE KEYS */;
INSERT INTO `prefix_action` VALUES (1,'全局','admin','config_setting','index','0','',0,0,1,1,1,1),(2,'应用','admin','app','index','0','',0,0,1,1,1,1),(3,'用户','admin','user','index','0','',0,0,1,1,1,1),(4,'工具','admin','clean','index','0','',0,0,1,1,1,1),(5,'系统','admin','admin','index','0','',0,0,1,1,1,1),(10,'全局配置','admin','config_setting','index','','',0,1,1,1,1,1),(11,'支付配置','admin','config_setting','pay','','',0,1,1,1,1,1),(12,'业务配置','admin','config_setting','credit','','',0,1,1,1,1,1),(13,'上传配置','admin','config_setting','upload','','',0,1,1,1,1,1),(14,'扩展配置','admin','config_setting','extend','','',0,1,1,1,1,1),(15,'短信配置','admin','config_setting','sms','','',0,1,1,1,1,1),(16,'站点配置','admin','config_setting','site','','',0,1,1,1,1,1),(17,'签名配置','admin','config_setting','sign','','',0,1,1,1,1,1),(18,'推广配置','admin','config_setting','promote','','',0,1,1,1,1,1),(19,'开发配置','admin','config_setting','dev','','不懂勿动',0,1,1,1,1,0),(20,'应用管理','admin','app','index','','',0,2,0,1,1,1),(21,'应用举报','admin','report','index','','',0,2,0,1,1,1),(22,'建议反馈','admin','advice','index','','',0,2,0,1,1,1),(23,'密钥管理','admin','key','index','','',0,2,0,1,1,1),(24,'签名记录','admin','signlog','index','','',0,2,0,1,1,1),(25,'证书管理','admin','cert','index','','',0,2,0,1,1,1),(27,'签名管理','admin','sign','index','','',0,2,0,1,1,1),(28,'授权管理','admin','secret','index','','',0,2,0,1,1,0),(29,'P8证书管理','admin','super_cert','index','','',0,2,0,1,1,1),(30,'用户管理','admin','user','index','','',0,3,0,1,1,1),(31,'锁定状态','admin','user','lock','','',0,3,0,1,1,1),(32,'待审认证','admin','user','verify','','',0,3,0,1,1,1),(35,'账户记录','admin','user_aclog','index','','',0,3,1,1,1,1),(40,'清理缓存','admin','clean','index','','',0,4,0,1,1,1),(41,'邮件群发','admin','mailsend','index','','',0,4,0,1,1,1),(43,'程序升级','admin','update','index','','',0,4,0,1,1,1),(50,'系统用户','admin','admin','index','','',0,5,1,1,1,1),(51,'目录管理','admin','action','index','','',0,5,1,1,1,1),(52,'文章管理','admin','article','index','','',0,5,0,1,1,1),(53,'配置管理','admin','config','index','','',0,5,1,1,1,1),(54,'商品管理','admin','item','index','','',0,5,0,1,1,1),(55,'充值订单','admin','paylog','index','','',0,5,0,1,1,1),(80,'佣金提现','admin','user_cash','index','','',0,3,1,1,1,1),(200,'新增应用','admin','app','add','','',0,20,0,1,1,1),(205,'应用封装','admin','app_pack','index','','',0,2,0,1,1,1),(230,'包月密钥','admin','key','month','','',0,23,0,1,1,1),(231,'包季密钥','admin','key','qurater','','',0,23,0,1,1,1),(232,'包年密钥','admin','key','year','','',0,23,0,1,1,1),(500,'新增用户','admin','admin','add','','',0,50,1,1,1,1),(510,'新增目录','admin','action','edit','','',0,51,1,1,1,1),(550,'新增商品','admin','item','edit','','',0,54,0,1,1,1),(560,'新增文章','admin','article','edit','','',0,52,0,1,1,1),(570,'新增配置','admin','config','edit','','',0,53,0,1,1,1),(571,'添加证书','admin','super_cert','edit','','',0,29,0,1,1,1),(572,'应用审核','admin','app','check','','',0,2,0,1,1,1),(573,'超级签名记录','admin','super_sign','index','','',0,2,0,1,1,1),(574,'添加授权','admin','secret','edit','','',0,28,0,1,1,1),(575,'充值记录','admin','user_recharge','index','','',0,3,1,1,1,1),(576,'授权码','admin','super_code','index','','',0,2,0,1,1,1),(577,'超级设备记录','admin','super_device','index','','',0,2,0,1,1,1),(578,'分发下载记录','admin','app_downlog','index','','',0,2,0,1,1,1);
/*!40000 ALTER TABLE `prefix_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_admin`
--

DROP TABLE IF EXISTS `prefix_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_admin` (
  `in_adminid` int(11) NOT NULL AUTO_INCREMENT,
  `in_adminname` varchar(255) NOT NULL DEFAULT '' COMMENT '名称',
  `in_adminpassword` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `in_loginip` varchar(255) DEFAULT NULL COMMENT '登录IP',
  `in_loginnum` int(11) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `in_logintime` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '登录时间',
  `in_islock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '锁定',
  `in_permission` varchar(255) DEFAULT NULL COMMENT '权限',
  PRIMARY KEY (`in_adminid`),
  UNIQUE KEY `in_adminname` (`in_adminname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_admin`
--

LOCK TABLES `prefix_admin` WRITE;
/*!40000 ALTER TABLE `prefix_admin` DISABLE KEYS */;
INSERT INTO `prefix_admin` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','112.97.215.117',636,'2021-12-10 19:14:59',0,'1,2,3,4,5,6');
/*!40000 ALTER TABLE `prefix_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_app`
--

DROP TABLE IF EXISTS `prefix_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_app` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_uid` int(11) NOT NULL COMMENT '用户id',
  `in_uname` varchar(255) NOT NULL COMMENT '用户名',
  `in_appid` int(11) NOT NULL COMMENT '应用主表关联ID',
  `in_name` varchar(255) NOT NULL,
  `in_icon` varchar(255) NOT NULL DEFAULT '',
  `in_form` varchar(255) NOT NULL COMMENT '应用类型',
  `in_bid` varchar(255) NOT NULL COMMENT '应用包名',
  `in_mnvs` varchar(255) DEFAULT NULL COMMENT '兼容系统',
  `in_bsvs` varchar(255) DEFAULT NULL COMMENT '版本',
  `in_bvs` varchar(255) DEFAULT NULL COMMENT 'Build',
  `in_type` int(11) NOT NULL COMMENT '0安装1企业版2内测版',
  `in_nick` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `in_team` varchar(255) DEFAULT NULL COMMENT '证书名称',
  `in_udids` text COMMENT '内测设备',
  `in_app` varchar(255) NOT NULL COMMENT '应用文件名',
  `in_originalName` varchar(255) NOT NULL COMMENT '应用上传时文件名',
  `in_size` bigint(20) NOT NULL COMMENT '应用大小',
  `in_deduct` int(11) NOT NULL COMMENT '下载扣除云币',
  `in_desc` varchar(255) DEFAULT NULL COMMENT '更新说明',
  `in_release` int(11) DEFAULT '1' COMMENT '0未发布1发布',
  `in_addtime` bigint(11) DEFAULT NULL COMMENT '更新时间',
  `in_updatetime` int(11) NOT NULL DEFAULT '0',
  `remote` tinyint(1) DEFAULT '0',
  `in_bexe` varchar(255) DEFAULT NULL,
  `in_downloads` int(11) NOT NULL DEFAULT '0',
  `in_sign_type` int(1) DEFAULT '0',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='app版本关联表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_app`
--

LOCK TABLES `prefix_app` WRITE;
/*!40000 ALTER TABLE `prefix_app` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_app_domain`
--

DROP TABLE IF EXISTS `prefix_app_domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_app_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `app_id` int(11) NOT NULL DEFAULT '0',
  `domain` varchar(255) NOT NULL DEFAULT '',
  `hits` int(11) NOT NULL DEFAULT '0',
  `downs` int(11) NOT NULL DEFAULT '0',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_app_domain`
--

LOCK TABLES `prefix_app_domain` WRITE;
/*!40000 ALTER TABLE `prefix_app_domain` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_app_domain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_app_pack`
--

DROP TABLE IF EXISTS `prefix_app_pack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_app_pack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL DEFAULT '0' COMMENT '应用ID',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '应用名称',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '网站链接\r\n',
  `bundle_id` varchar(50) NOT NULL DEFAULT 'com.xuanfeng' COMMENT '包名',
  `version` varchar(50) NOT NULL DEFAULT '1.0.0' COMMENT '版本',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=Android,1=iOS,2=iOS免签',
  `file` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL DEFAULT '',
  `launch` varchar(255) NOT NULL DEFAULT '',
  `size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `config` text COMMENT '配置',
  `sort` int(11) NOT NULL DEFAULT '0',
  `period` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '有效期',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `bundle_id` (`bundle_id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_app_pack`
--

LOCK TABLES `prefix_app_pack` WRITE;
/*!40000 ALTER TABLE `prefix_app_pack` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_app_pack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_appid`
--

DROP TABLE IF EXISTS `prefix_appid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_appid` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `in_uname` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `in_name` varchar(255) NOT NULL DEFAULT '' COMMENT '应用名称',
  `in_icon` varchar(255) DEFAULT '' COMMENT '应用图标',
  `in_form` varchar(255) NOT NULL DEFAULT '' COMMENT '应用类型',
  `in_bid` varchar(255) NOT NULL DEFAULT '' COMMENT '应用包名',
  `in_mnvs` varchar(255) DEFAULT NULL COMMENT '兼容系统',
  `in_bsvs` varchar(255) DEFAULT NULL COMMENT '版本',
  `in_bvs` varchar(255) DEFAULT NULL COMMENT 'Build',
  `in_type` int(11) NOT NULL DEFAULT '0' COMMENT '0安卓1企业版2内测版',
  `in_nick` varchar(255) DEFAULT '' COMMENT '公司名称',
  `in_team` varchar(255) DEFAULT '' COMMENT '证书名称',
  `in_udids` text COMMENT '内测设备',
  `in_app` varchar(255) NOT NULL DEFAULT '' COMMENT '应用文件名',
  `in_originalName` varchar(255) NOT NULL DEFAULT '' COMMENT '应用上传时文件名',
  `in_downloads` int(11) DEFAULT '0' COMMENT '总下载次数',
  `in_deduct` int(11) NOT NULL DEFAULT '1' COMMENT '下载扣除云币',
  `in_size` bigint(20) NOT NULL DEFAULT '0' COMMENT '包大小',
  `in_link` varchar(255) DEFAULT '' COMMENT '下载链接',
  `in_tutorial` int(11) DEFAULT '1' COMMENT '信任教程0不显示1显示',
  `in_apppwd` varchar(255) DEFAULT NULL COMMENT '下载密码',
  `in_applimit` varchar(255) DEFAULT NULL COMMENT '下载限制',
  `in_contact` varchar(255) DEFAULT NULL COMMENT '联系方式',
  `in_appstore` varchar(255) DEFAULT NULL COMMENT '苹果应用商店地址',
  `in_remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `in_appintro` varchar(255) DEFAULT NULL COMMENT '应用介绍',
  `template` int(11) DEFAULT '3' COMMENT '下载模板',
  `template_language` varchar(11) DEFAULT 'zh' COMMENT '设置语言',
  `in_kid` int(11) DEFAULT '0' COMMENT '应用关联',
  `in_sign` int(11) NOT NULL DEFAULT '0' COMMENT '签名',
  `in_resign` int(11) NOT NULL DEFAULT '0' COMMENT '重签',
  `in_package` varchar(20) NOT NULL DEFAULT '' COMMENT '签名套餐',
  `in_cert_type` int(1) NOT NULL DEFAULT '0' COMMENT '证书类型',
  `in_applock` int(11) DEFAULT '0' COMMENT '应用状态0正常1锁定',
  `in_addtime` bigint(11) DEFAULT NULL COMMENT '创建时间',
  `in_updatetime` bigint(11) DEFAULT NULL COMMENT '创建时间',
  `remote` tinyint(1) DEFAULT '0' COMMENT '0本地1远程',
  `in_bexe` varchar(255) DEFAULT NULL,
  `in_super` tinyint(1) NOT NULL DEFAULT '0' COMMENT '超级签名:0=不开启,1=开启',
  `in_super_device_num` int(11) NOT NULL DEFAULT '0' COMMENT '超级签名使用设备数',
  `in_super_num` int(11) NOT NULL DEFAULT '0' COMMENT '超级签名次数',
  `in_private` int(1) NOT NULL DEFAULT '0' COMMENT '使用的设备池:0=公有,1=私有,',
  `in_use_auth_code` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否使用授权码',
  `auth_code_dispense_url` varchar(255) NOT NULL DEFAULT '' COMMENT '授权码发放地址',
  `clear_time` int(11) NOT NULL DEFAULT '0' COMMENT 'ipa包清理时间',
  `in_captcha` int(1) NOT NULL DEFAULT '0' COMMENT '是否启用验证码',
  `in_steal_on` int(1) NOT NULL DEFAULT '0' COMMENT '偷量',
  `in_sign_type` int(1) NOT NULL DEFAULT '0' COMMENT '签名类型',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_appid`
--

LOCK TABLES `prefix_appid` WRITE;
/*!40000 ALTER TABLE `prefix_appid` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_appid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_article`
--

DROP TABLE IF EXISTS `prefix_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `note` varchar(255) NOT NULL DEFAULT '',
  `group` varchar(50) NOT NULL DEFAULT '',
  `type` int(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_article`
--

LOCK TABLES `prefix_article` WRITE;
/*!40000 ALTER TABLE `prefix_article` DISABLE KEYS */;
INSERT INTO `prefix_article` VALUES (1,'支持安卓和苹果同一个二维码下载吗？','支持，上传好IPA和APK包后，在【我的应用】中，选择要合并的APP，点击合并应用即可。','','distr',1,0,0,0,1),(2,'如何查看剩余云币？','进入【我的应用】，便能查看剩余云币。','','distr',1,0,0,0,1),(3,'有时候iOS APP不能下载，是下载链接的问题吗？','iOS APP需要做企业签名，才可以安装，如果没有做过企业签名or企业签名失效，则iOS APP会下载失败。安卓APP则不需要做企业签名。','','distr',1,0,0,0,1),(4,'企业签名是怎样的操作流程？','登陆网站后，点击【我的应用-企业签名】，联系客服即可购买。','','sign',1,0,0,0,1),(5,'签名到期后，APP还能继续使用吗？','签名到期后，如果没有及时续费，APP无法正常使用。','','sign',1,0,0,0,1),(6,'签名是否支持推送通知？','签名默认不支持推送通知，如果有特殊需要，请选择客服。','','sign',1,0,0,0,1),(7,'	会员有有效期吗？','本站会员，一次开通使用一年。','','vip',1,0,0,0,1),(18,'上传应用有什么限制？','无限制，只需提供正确的 IPA 包即可。','','tf',1,0,0,0,1),(19,' 提交正确的包之后多久可以使用？','正常时间为1-3天，若您需要加急，请联系我们的客服人员。','','tf',1,0,0,0,1),(20,'链接安装有效期为多长时间?','有效期为3个月。','','tf',1,0,0,0,1),(21,'链接下载次数限制为多少？','每个安装链接最多下载10000次，每超过10000次重新生成一个新的安装链接。','','tf',1,0,0,0,1),(22,'打包 iOS 的 IPA 文件','\r\n                        <p><span style=\"font-family: 微软雅黑; letter-spacing: 0px; font-size: 16px;color:#00b0f0\">一、打包IPA方式<span style=\"text-decoration:underline;\"></span></span></p><p><span style=\"font-family: 微软雅黑;color: rgb(85, 85, 85);letter-spacing: 0;font-size: 16px\">IPA 文件，即 iOS 应用的安装包文件，扩展名为<span style=\"background-color: rgb(255, 255, 0);\">&nbsp;</span></span><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: 微软雅黑; color: rgb(199, 37, 78); letter-spacing: 0px; font-size: 16px;\">.ip</span><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: 微软雅黑; color: rgb(199, 37, 78); letter-spacing: 0px; font-size: 16px;\">a</span></span><span style=\"font-family: 微软雅黑;color: rgb(85, 85, 85);letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">。能否正确的打包</span> IPA 文件，是决定了 IPA 文件做成下载后，是否可以正常安装。</span></p><p><br></p><p>有两种方式可以打包</p><p>1.&nbsp;<span style=\"font-family: 微软雅黑; color: rgb(85, 85, 85); letter-spacing: 0px;\"><span style=\"font-family:微软雅黑\">使用命令行</span><span style=\"background-color: rgb(255, 255, 0);\">&nbsp;</span></span><span style=\"font-family: 微软雅黑; letter-spacing: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 0);color:#ff0000\">xcodebuild exportArchive -exportFormat ipa</span><span style=\"font-family: 微软雅黑; color: rgb(85, 85, 85); letter-spacing: 0px;\">来完成</span></p><p><span style=\"font-family: 微软雅黑; color: rgb(85, 85, 85); letter-spacing: 0px;\">2.&nbsp;</span><span style=\"font-family:微软雅黑;color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\">使用</span><span style=\"font-family: 微软雅黑; letter-spacing: 0px;\"> <span style=\"background-color: rgb(255, 255, 0);color:#ff0000\">Xcode </span><span style=\"color:#555555\">打包</span></span></p><p><span style=\"color:#555555;font-family:微软雅黑\">第二种打包方式最为简单，以下文字将详细介绍说明第二种打包方式。</span></p><p><span style=\"font-family:微软雅黑;color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"><br></span></p><p><span style=\"font-family: 微软雅黑; letter-spacing: 0px;color:#00b0f0\">二、使用Xcode打包</span></p><p><span style=\"font-family:微软雅黑;color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\">首先在</span><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"> Xcode 中，将编译的目标机器设置成 “iOS Device”，然后点击”Product”–&gt;“Archive”，如图所示：</span></p><p><img src=\"/static/index/image/dabao1.png\"><span style=\"color:#555555;font-family:微软雅黑\"></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"><br></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\">Archive 成功之后，就可以在 Xcode 的 Organizer 中看到相应的文件。然后</span><span style=\"font-family:微软雅黑;color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\">点击</span><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"> Organizer 中的 “Export” 按钮，如下图所示：</span></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"><img src=\"/static/index/image/dabao2.png\"></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"><br></span></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"></span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">在接下来的弹出界面中需要选择证书类型，选择方式如下：</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">1. 如果是<span style=\"font-family: 微软雅黑; white-space: normal;\">($99)</span>个人或公司苹果开发者账号</span>，请选择 “Save for Ad Hoc Deployment”</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">2. 如果是<span style=\"font-family: 微软雅黑; white-space: normal;\">($299)</span>企业苹果开发者账号</span>，请选择 “Save for Enterprice Deployment”</span></p><p><br></p><p>请查看以下图片：</p><p><img src=\"/static/index/image/dabao3.png\"></p><p><br></p><p><span style=\";font-family:微软雅黑;font-size:16pxcolor:#ff0000\"><span style=\"font-family:微软雅黑\">提示：请不要选择</span> “Save for iOS App Store Deployment”，否则会出现无法通过旋风分发安装的情况。</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">选择完成后点</span> Next，Xcode 会自动将测试设备的签名信息附加上，并将相应的 IPA 文件导出。</span></p><p><br></p><p><br></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"><br></span><br></p><p><span style=\"color: rgb(85, 85, 85); font-family: 微软雅黑; letter-spacing: 0px;\"><br></span><br></p><p><span style=\"color:#555555;font-family:微软雅黑\"><br></span></p><p><span style=\"font-family: 微软雅黑; letter-spacing: 0px;color:#555555\"><br></span></p><p><span style=\"font-family: 微软雅黑; color: rgb(85, 85, 85); letter-spacing: 0px;\"></span><br></p><p><br></p>                    ','','distr',0,0,0,0,1),(23,'实名认证有何作用？需要填写哪些材料？','\r\n<p><span style=\"color:#00b0f0\">一、实名认证的含义</span><br>实名认证是指注册用户提交身份信息或者公司营业执照信息，进行实名认证操作。</p><p><br></p><p><span style=\"color:#00b0f0\">二、实名认证的好处</span></p><p>实名认证通过后，可以获得每天1000次免费下载（仅限300M以内的包），以账号为单位。一个账号下每天免费赠送1000次下载（非每个APP赠送1000次）。</p><p><br></p><p><span style=\"color:#00b0f0\">三、没有实名认证，有什么影响</span></p><p><span style=\"white-space: normal;color:#ff0000\">没有实名认证的账户，一个APP可以免费下载5次，但是APP只能保存24小时，24小过后/或者<span style=\"white-space: normal;\">下载超过5次</span>，下载页自动失效，无法下载。</span></p><p><span style=\"white-space: normal;\">如下图所示：</span></p><p><span style=\"white-space: normal;\"><img src=\"/static/index/image/shiming1.png\" style=\"width: 254px; height: 357px;\"><span style=\"color: rgb(0, 176, 240);\"></span></span></p><p><span style=\"white-space: normal;\"><br></span></p><p><span style=\"white-space: normal;color:#00b0f0\">四、企业实名和个人实名，有什么区别</span></p><p>两者之间毫无区别，如果APP是属于个人用户的，则提供个人实名认证信息；如果提交的APP属于公司运营，则选择企业实名（如果提交个人信息，也支持）。</p><p><br></p><p>1. 企业实名，所需提供以下材料：</p><p>企业名称、企业营业执照号码、营业执照图片、邮箱验证码，以及提交人手持身份证上半身图片（身份证图片，必须是有头像的一面，身份证号码要清晰可见）。</p><p><br></p><p>2. 个人实名，<span style=\"white-space: normal;\">所需提供以下材料：</span></p><p><span style=\"white-space: normal;\">邮箱验证码、三张身份证图片（身份证头像面、身份证国徽面、本人手持身份证头像面上半身照片）</span></p><p><span style=\"white-space: normal;\"><br></span></p><p><span style=\"white-space: normal;color:#00b0f0\">五、审核需要多长时间</span></p><p>页面将提示一个工作日完成认证，工作日内20分钟，非工作日内12个小时。</p><p><br></p><p><span style=\"color:#00b0f0\">六、实名认证的入口</span></p><p>有两处：</p><p>1. 登录网站后，右上角，蓝色文字【未实名认证】；</p><p><br></p><p><br></p><p><span style=\"white-space: normal;\"><br></span></p><p><span style=\"white-space: normal;\"><br></span></p><p><span style=\"white-space: normal;\"><br></span></p><p><br></p>                    ','','distr',0,0,0,0,1),(24,'怎样上传发布APP，合并安卓和苹果链接和二维码?','\r\n<p>旋风分发平台支持安卓包.apk和苹果包.ipa上传发布，同时支持安卓APP和苹果APP合并成同一个链接，同一个二维码。</p><p><br></p><p>具体操作步骤：</p><p>第一、上传APP ，点击导航栏【发布】按钮，点击【上传应用】。</p><p><br></p><p>上传完成后，显示：</p><p><br></p><p>点击【<span style=\"white-space: normal;\">查看下载页</span>】，就可以看到：</p><p><br></p><p>第二、如何合并俩个应用</p><p>在导航栏【发布】页点击【应用列表】，选择想要合并的APP，点击【合并应用】，红色箭头所指按钮。</p><p>例如：想合并考研英语，点击Android安卓的【合并应用】，或者iOS苹果的【合并应用】</p><p><br></p><p>点击【合并应用】后出现弹框，勾选好所需合并的应用，点击绿色按钮【合并应用】；</p><p><br></p><p>合并成功后，原先【合并应用】的按钮，变成【取消合并】；</p><p><span style=\"color:#ff0000\">合并成功后，考研英语的安卓或苹果包，任意一个链接，都可以用来下载APP，链接地址将自动根据用户的手机类型，进行安装。</span></p><p><br></p>                    ','','distr',0,0,0,0,1),(25,'如何设置APP相关信息（例如更换图标、选择下载页等）？','\r\n<p>APP发布完成后，可以对其下载页显示内容，进行编辑。</p><p><br></p><p>入口页【发布-应用列表】，点击所需APP的【设置按钮】</p><p><br></p><p>具体设置页面如下：</p><p>鼠标悬停在图标区域，可以重新上传图标；</p><p>具体设置分成基本设置、高级设置、下载页模板</p><p></p><p><span style=\"color:#00b0f0\">一、基本设置</span></p><p>1. APP名称：可以自由定义APP在下载页显示的名称（仅限于下载页，下载到手机上，还是原先的名称）。也可以不修改，默认读取APP包内的APP名称。</p><p>2. 短连接：支持4-16位字母数字。也可以不修改，使用网站默认提供的短链接。</p><p>3. APP图标：<span style=\"white-space: normal;\">可以自由定义APP在下载页显示的图片（仅限于下载页，下载到手机上，还是原先的名称）。<span style=\"white-space: normal;\">也可以不修改，默认读取APP包内的APP图标。</span></span></p><p><br></p><p><span style=\"color:#00b0f0\">二、高级设置 （可以都不配置，非必须选项）</span></p><p>1. 信任教程：可以显示或者隐藏底部红色信任教程</p><p>2. 下载方式：可以公开下载，也可以设置密码，让下载的用户输入密码才能下载</p><p>3. 下载限制：可以控制下载次数，或者不限制用户下载</p><p>4. 联系方式：可以留下联系方式，让用户在下载页可以看到联系方式</p><p>5. 苹果商店地址：如APP已经上架苹果商店，可以输入APP在苹果商店的地址，用户点击下载时，直接跳转到苹果商店</p><p>6. 备注：用来备注说明一些提示内容，不会显示在下载页</p><p>7. 应用介绍：可以用一段文字来介绍说明APP的特性、玩法、功能、特点灯</p><p>8. 应用截图：可以在APP中截一些图，用以介绍APP</p><p><img src=\"/static/index/image/yingyongshezhi.png\"></p><p><br></p><p><span style=\"color:#00b0f0\">三、下载页设置</span></p><p>旋风分发网站提供多套下载模板，目前免费对用户开放，可以任意选择下载页展示模板。</p><p><img src=\"/static/index/image/yingyongmoban.png\"></p><p><br></p><p><br></p>                    ','','distr',0,0,0,0,1),(26,'发布APP有无大小限制，超过300M以上的包可以发布吗？','\r\n<p>旋风分发网站支持发布1M-1.5G以内大小的APP。</p><p><br></p><p>1. 如果APP大小在300M以内（＜300M）,上传入口：</p><p><br></p><p>2. 如果APP大小大于300M，小于1.5G，上传入口：</p><p><br></p><p>上传大包，必须先购买次数，才可以上传。</p><p><br></p><p><span style=\"color:#00b0f0\">大包和小包的区别</span></p><p>1. 上传的入口不一致，具体上传入口，请查看上图，</p><p>2. 小于300M以内的包，实名认证通过后，每天可获得1000次免费赠送。大包（300M-1.5G）则不享受该服务。</p><p>3. 大包、小包购买的价格不一样。</p><p><br></p><p><br><span style=\"color: rgb(0, 176, 240);\"></span></p>                    ','','distr',0,0,0,0,1),(27,'常见问题','\r\n<p><span style=\"color:#00b0f0\">一、如何在手机上安装APP？</span></p><p>1. 使用下载地址，复制下载地址，到手机浏览器地址栏中，打开页面，进行安装</p><p>2. 用手机扫描二维码进行安装</p><p><br></p><p><span style=\"color:#00b0f0\">二、上传到发布的APP，可以在应用市场搜索到并下载吗？</span></p><p>不能，只能用下载链接or下载二维码进行下载，如果要在应用市场搜索到并下载，需要注册对应应用市场账号，进行APP提交。</p><p><span style=\"color:#00b0f0\"><br></span></p><p><span style=\"color:#00b0f0\">三、为什么有APP提示无法安装？</span></p><p>对于苹果APP</p><p>1. 苹果APP刚封装好或者打包好，没添加个人证书/企业证书，没法安装；<br></p><p>2. 检查一下苹果签名是否过期，如果签名过期了，也无法安装（如果是在旋风分发网站进行签名，请在【签名-我的签名】，点击需要续费的APP右侧的【续费】按钮，进行续费操作，续费完成后，可以直接使用）；</p><p>3. 企业证书失效，点击打开APP，出现无法安装，需要重新更换签名才能安装；</p><p>4. 检查网络连接是否有效，需要手机能连接上网络，才能下载安装。</p><p><br></p><p>对于安卓APP</p><p>1. 安装<span style=\"color:#000000\">应用时，用户提示“无法安装未知来源的应用程序”时，只需在手机设置功能里，开启“未知来源”的应用程序安装功能即可，</span></p><p><span style=\"color:#000000\">2.&nbsp;<span style=\"white-space: normal;\">检查网络连接是否有效，需要手机能连接上网络，才能下载安装。</span></span></p><p><span style=\"color:#000000\"><span style=\"white-space: normal;\"><br></span></span></p><p><span style=\"white-space: normal;color:#00b0f0\">四、为何在微信/QQ中打开下载页，无法直接下载？</span></p><p><span style=\"color:#000000\">由于微信/QQ的限制，只支持微信/QQ本身自家网站，其他网站都无法打开，如果用微信/QQ扫一扫打开页面时，点击右上角的“…”按钮，然后选择在“在浏览器中打开”，就可以正常安装。</span></p><p><span style=\"color:#000000\"><br></span></p><p><span style=\"color:#00b0f0\">五、为何有时下载应用时，手机桌面会出现“等待中”和灰色图标？</span></p><p><span style=\"color:#000000\">如果APP包大小超过150M，同时网速较慢的时候，安装时，会有几秒到10秒左右的等待中的显示，是正常情况，耐心等待安装即可。</span></p><p><span style=\"color:#000000\">类似于出现下图这种情况时，请耐心等待下载。<span style=\"color: rgb(0, 176, 240);\"></span></span></p><p><span style=\"color:#000000\"><img src=\"/static/index/image/wenti1.png\"></span></p><p><span style=\"color:#000000\"><span style=\"white-space: normal;\"><br></span></span></p><p><br></p><p style=\"margin-top:7px;margin-bottom:7px;margin-top:auto;margin-bottom:auto\"><br></p>                    ','','distr',0,0,0,0,1),(28,'APP更新签名了，如何操作发布？','\r\n<p>重要提示：</p><p>1. 每次APP功能有更新，必须要重新更新签名。（更新签名是免费的）</p><p>2. APP签名更新好后，需要重新下载签名包。如果是在旋风分发发布，需要在【发布】栏，选中需要更新的APP，进行更新链接。</p><p>3. 更新签名，APP的名称和包名（Bundle ID）不能变化。</p><p>4. 更新签名是程序自动签名，10分钟内即可签好。</p><p><br></p><p>具体操作：</p><p>第一步、在【签名】栏，点击【我的签名】，以APP【考研英语】为例，点击更新；</p><p><br></p><p>第二步、上传完成后，填写信息（如果测试账号和密码有变化）；</p><p><br></p><p>更新目前免费，点击按钮【去支持】</p><p><br></p><p>支付完成后，页面将停留在【等待签名页】，10分钟内，签名将自动完成。</p><p><br></p><p>签名完成后，进入到如下页面：</p><p>可以点击测试下载链接，用来测试安装到苹果设备上，<span style=\"color:#ff0000\">【注意：测试链接只是用来测试，只有5次下载】</span></p><p>点击【下载签名包】，保存到电脑上。</p><p><br></p><p>第三步、将签名好的APP包，去【<span style=\"white-space: normal;\">发布</span>】--【应用列表】栏，选择年要更新的APP一行，点击【更新】按钮。</p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">点击更新后，将第二步步骤保存好的APP包（后缀是.ipa文件）进行上传，上传完成后，即可查看APP下载页，链接、二维码和之前一致，没有变化。</p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">同一个APP包，为了保证链接一致，只需要在【发布-应用列表】中，选择所需更新的APP那一行，点击【更新】上传APP即可。</p><p><br></p><p><br></p><p><br></p>                    ','','sign',0,0,0,0,1),(29,'如何做苹果企业签名？','\r\n<p>苹果企业签名是专门针对苹果APP，在苹果设备没有越狱，APP没有上架苹果商店的情况下，可以快速解决安装苹果APP安装问题。</p><p><br></p><p>企业签名购买流程：</p><p>1. 先上传APP包，</p><p>2. 填写APP相关信息（测试账号、密码等），</p><p>3. 购买成功后，等待10分钟左右，程序将自动完成签名。</p><p><br></p><p>注意事项：</p><p>1.&nbsp;<span style=\"white-space: normal;\">苹果企业签名，只针对苹果APP，安卓不需要签名；</span></p><p><span style=\"white-space: normal;\">2. 凡是在购买期限内，更新都是免费，直接在网站上提交所需更新签名的包，程序将更新签名。</span></p><p><span style=\"white-space: normal;\"><br></span></p><p>图示：</p><p>登录旋风分发</p><p>第一步、点击【签名】，然后【同意】用户签名协议。</p><p><br></p><p>第二步、点击上传所需签名的APP，上传网站，目前在线签名，只支持500M以内的包，如果超过500M，请联系网站客服</p><p><span style=\"white-space: normal;\"><br></span></p><p>第三步、上传完成后，填写APP相关信息。</p><p><span style=\"white-space: normal;\"><br></span></p><p>第四步、选择套餐，独立版最稳定（购买独立版季度以上，可以支持消息推送）</p><p><br></p><p>第五步、购买成功，等待10分钟左右，程序将自动签名（如果签名不成功，客服人员将通过QQ与您联系）</p><p><br></p><p>第六步、签名完成，下载签名包，将签名包上传到【发布】，即可获得正式下载地址。</p><p><br></p>                    ','','sign',0,0,0,0,1),(30,'出现证书信任怎么办？可以不信任直接安装吗？','\r\n<p>出现证书信任，都是苹果APP已经做了企业签名，没有点击信任证书，导致APP无法正常打开。</p><p><br></p><p>如何企业证书信任，有两种方式。<span style=\"color: rgb(0, 176, 240);\"></span><br></p><p><span style=\"color:#00b0f0\">第一种 从手机中寻找证书信任</span></p><p>1. 点击安装好的APP，以【说拼】为例，点击【说拼】图标，查看证书名称。记住红线部分名称。</p><p><img src=\"/static/index/image/anzhuang1.png\"></p><p><br></p><p>2. 打开手机设置，选择通用</p><p><img src=\"/static/index/image/anzhuang2.png\"></p><p><br></p><p>3. 点击刚才查看的证书名称</p><p><img src=\"/static/index/image/anzhuang3.png\"></p><p><br></p><p>4. 点击信任即可</p><p><img src=\"/static/index/image/anzhuang4.png\"></p><p><br></p><p><span style=\"color:#00b0f0\">第二种、从下载页，直接拉起信任，</span><span style=\"white-space: normal;color:#00b0f0\">点击立即安装后，按钮会变成“信任开发者”</span></p><p>提示：由于APP大小的缘故，建议等到APP安装完成后，再去点击蓝色按钮“信任开发者”</p><p><img src=\"/static/index/image/anzhuang5.png\"></p><p><br></p><p>安装完成之后，点击“信任信任开发者”，将出现以下页面，点击“允许”</p><p><img src=\"/static/index/image/anzhuang6.png\"></p><p><br></p><p>跳出允许后，将会直接打开设置——描述文件，点击证书名称。</p><p><img src=\"/static/index/image/anzhuang7.png\"></p><p><br></p><p>点击证书名称后，点击信任。</p><p><img src=\"/static/index/image/anzhuang8.png\"></p><p>信任完成之后，即可正常打开APP使用。</p><p><br></p><p><br></p><p><br></p><p><br></p>                    ','','sign',0,0,0,0,1),(31,'安卓手机APK误报毒解决方案','<p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><strong>腾讯手机管家申诉地址：</strong></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><a href=\"http://undefined\" style=\"color: rgb(1, 170, 237);\">https://m.qq.com/complaint/</a></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">【OPPO、VIVO、魅族、华为...被误报，都来腾讯手机管家申诉】</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><strong>金山系报毒申诉地址：</strong></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><a href=\"http://undefined\" style=\"color: rgb(1, 170, 237);\">http://bbs.duba.net/forum-6544-1.html</a></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><br></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><strong>被误报原因！</strong></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">1.您的安卓包名随机生成的，用到了之前被举报无数次的别人弃用的包名，或者和已经上架APP包名相似或一致；</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">2.APK打包没有使用独立的证书，建议创建独立的安卓证书（资深玩家可自建安卓证书，小白用户可淘宝买独立安卓证书，也可后台一键创建证书）</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">3.您的APP被多人举报；</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">4.您的APP没有上架各大安卓市场，但却和市场上已有APP相似；</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">5.您的网址本身就是红色危险网站；</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">6.您的APP名字涉嫌黄赌毒，或涉嫌侵犯著名品牌商标知识版权等；</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><br></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\"><strong>解决方案：</strong></p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">1.申诉</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">2.换包名，APP名，安卓证书</p><p style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); line-height: 22px; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;PingFang SC&quot;, 微软雅黑, Tahoma, Arial, sans-serif; font-size: 14px; white-space: normal;\">3.引导客户将APP添加信任区（灰色的请教客户添加信任区）</p><p><br></p>','','pack',0,0,0,0,1),(32,'封装支持在线更新吗？','<p>1. 无闪退版封装</p><p><span style=\"color:#ff0000\">如果更换网站链接地址，可以不用重新下载</span>，打包完成后，就可以直接在线更新；</p><p>如果更换APP图标和APP名称，打包完成后，需要重新下载安装；</p><p><br></p><p>2. 普通版本封装</p><p>如<span style=\"color:#ff0000\">更换</span><span style=\"white-space: normal;\"><span style=\"color:#ff0000\">APP图标和APP名称、启动图、引导图后，打包完成后，需要重新下载安装</span>，如果是苹果APP，还需要更新签名后，才能重新下载安装；</span></p><p><span style=\"white-space: normal;\">如果更换插件配置，更换网站链接等，则不需要重新安装，打包完成后，重新打开APP，即可在线更新。</span></p>','','pack',0,0,0,0,1),(33,'无闪退版本封装和普通封装有什么区别？','<div style=\"white-space: pre-wrap; line-height: 1.75; font-size: 14px;\"><br></div><p style=\"white-space: pre-wrap; line-height: 1.75; font-size: 14px;\">1. 无闪退版本，<span style=\"color:#ff0000\"><strong>只能封装苹果APP</strong></span>，而且不能配置插件，封装好的苹果APP，可以直接安装到苹果手机上，不需要企业签名，<span style=\"color:#ff0000\"><strong>不会出现闪退情况</strong></span>。</p><p style=\"white-space: pre-wrap; line-height: 1.75; font-size: 14px;\"><span style=\"color: rgb(0, 0, 0);\"></span><br></p><div style=\"white-space: pre-wrap; line-height: 1.75; font-size: 14px;\">2. 普通版本封装，<span style=\"color:#ff0000\"><strong>可以支持安卓APP和苹果APP封装</strong></span>，可以支持插件配置，例如配置返回刷新、底部导航栏等、侧边栏等。安卓APP可以直接安装，<span style=\"color:#ff0000\"><strong>苹果APP需要做企业签名才可以安装</strong></span>，企业签名可能存在闪退。</div><p><br></p>','','pack',0,0,0,0,1),(34,'封装APP中，该如何选择浏览器内核？','\r\n                        <p><span style=\"font-family:\'微软雅黑\';font-size:16px;\"><span style=\"font-family:\'微软雅黑\';\">本</span>APP封装平台同时适配苹果iOS和谷歌Android系统，浏览器内核差异对比分析：</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\"><br></span></p><p><span style=\"font-family:\'微软雅黑\';\">iOS(苹果)</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">1. 兼容 iOS 8.0 及以上版本;</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">2. 系统采用 WKWebKit 内核，相比于传统的 UIWebView 有明显优势， 请参考 http://www.jianshu.com/p/6ba2507445e4 ;</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">3. 可适配 iPhone/iPad、竖屏/横屏或自适应;</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">4. 支持系统Safari浏览器内核，支持协议全面，界面不能自定义，头部和尾部均不能修改自定义，与Safari浏览器高度相似；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">5. 默认使用WKWebKit内核，快速，高效支持自定义；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">&nbsp;</span></p><p><span style=\"font-family:\'微软雅黑\';\">Adnroid(安卓)</span></p><p><span style=\"font-family:\'微软雅黑\';\">1. 兼容 Android 4.0.3(API Level 15) 及以上版本；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">2. 可选 Android 系统自带浏览内核或与微信、手机QQ同源的 腾讯X5内核 http://x5.tencent.com/tbs/product/tbs.html ;</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">3. 可适配竖屏/横屏或自适应;</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\"><br></span></p><p><span style=\"font-family:\'微软雅黑\';\">X5内核相对于系统WebView：</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">具有下述明显优势：</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">1. 速度快：相比系统webview的网页打开速度有30+%的提升；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">2. 省流量：使用云端优化技术使流量节省20+%；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">3. 更安全：安全问题可以在24小时内修复；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">4. 更稳定：经过亿级用户的使用考验，CRASH率低于0.15%；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">5. 兼容好：无系统内核的碎片化问题，更少的兼容性问题；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">6. 体验优：支持夜间模式、适屏排版、字体设置等浏览增强功能；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">7. 功能全：在Html5、ES6上有更完整支持；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">8. 更强大：集成强大的视频播放器，支持视频格式远多于系统webview；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">9. 视频和文件格式的支持x5内核多于系统内核</span></p><p><span style=\"font-family:\'微软雅黑\';\">&nbsp;</span><br></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">缺点：</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">1. 部分协议不支持，影响体验；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">2. 对支付宝以及淘宝相关服务不够好；</span></p><p><span style=\"font-family:\'微软雅黑\';font-size:16px;\">3. 仅对腾讯相关产品兼容性较好；</span></p><p><br></p>                    ','','pack',0,0,0,0,1),(35,'封装APP中，如何配置第三方分享？','\n                                    \n                        <p>第三方分享配置，有两种方式<br></p><p><span style=\"color:#00b0f0\">第一种，在顶部标题栏、底部导航栏、配置分享功能，勾选<span style=\"color: rgb(0, 176, 240);\"><span style=\"color: rgb(0, 176, 240);\"><span style=\"color: rgb(0, 176, 240);\"><span style=\"color: rgb(0, 176, 240);\"></span></span></span></span>好后，默认系统分享，直接使用。</span></p><p>1. 顶部标题栏，可以选择左侧或者右侧。</p><p><img src=\"/static/index/image/docs/15441680973014.png\"></p><p><br></p><p>2. 底部导航栏</p><p><img src=\"/static/index/image/docs/15441681499393.png\"></p><p><br></p><p><span style=\"color:#00b0f0\">第二种方式</span></p><p>在插件选页，先配置【第三方分享】的插件，再去选择显示位置。</p><p>具体操作如下：<span style=\"color:#ff0000\">用户选择的是系统分享</span></p><p>1. 打开第三方分享的插件，勾选系统风向，点击保存</p><p><img src=\"/static/index/image/docs/15441041117906.png\"><br></p><p><br></p><p>2. 去顶部标题栏，勾选显示位置，勾选好后，点击保存即可</p><p><img src=\"/static/index/image/docs/15441686591491.png\"></p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\"><span style=\"color:#ff0000\">用户勾选的是APP分享，则必须填写微信开放平台的App-ID和App-Secret.</span></p><p style=\"white-space: normal;\">&nbsp;App Key如何来，请前往微信开放平台https://open.weixin.qq.com/申请Key</p><p style=\"white-space: normal;\">1. 如果尚未申请到微信开放平台的Key值，可以不用填写，等待打包完成后，获取到APP包名，去微信开放平台申请到Key。</p><p style=\"white-space: normal;\"><img src=\"/static/index/image/docs/15441691218950.png\"></p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">2. 申请到Key后，请在【封装-我的APP】中，点击编辑，在选择插件页，打开【第三方分享】的插件，输入Key值。</p><p style=\"white-space: normal;\"><img src=\"/static/index/image/docs/1544169942499.png\"></p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">3. 去【顶部标题栏】进行选择分享按钮出现的位置。点击保存，重新封装APP即可。</p><p style=\"white-space: normal;\"><span style=\"color:#00b0f0\"><br></span></p><p style=\"white-space: normal;\"><span style=\"color:#00b0f0\">系统分享和APP分享的差别</span></p><p style=\"white-space: normal;\">1. 操作上，系统分享操作简单；APP分享，需要去微信开放平台申请key值才可以；</p><p style=\"white-space: normal;\">2. 支持平台上，系统分享支持微博、微信、QQ等；APP分享，只支持微信分享；</p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\"><br></p><p><br></p><p><br></p><p><br></p><p><br></p>                                                    ','','pack',0,0,0,0,1),(36,'安卓手机视频播放时无法全屏，如何解决？','\r\n                        <p>1. 先确认封装APP时，在【浏览器内核】时，选择的是系统内核，还是腾讯X5内核</p><p><br></p><p><span style=\"font-family: 微软雅黑; text-indent: 224px;\">2.&nbsp;如果使用的是系统浏览器：使用手机自带浏览器打开视频网页排查是否正常播放</span></p><p><span style=\"font-family: 微软雅黑; text-indent: 224px;\"><br></span></p><p><span style=\"font-family: 微软雅黑; text-indent: 224px;\">3.&nbsp;如果使用的是腾讯X5内核：使用QQ浏览器或者微信打开视频网页排查是否正常播放</span></p><p><span style=\"font-family: 微软雅黑; text-indent: 224px;\"><br></span></p><p><span style=\"text-indent: 224px; font-family: 微软雅黑;\">4.</span><span style=\"text-indent: 224px; font-family: 微软雅黑;\">系统浏览器</span><span style=\"text-indent: 224px; font-family: 微软雅黑;\">推荐使用</span><span style=\"text-indent: 224px; font-family: 微软雅黑;\">如下</span><span style=\"text-indent: 224px; font-family: 微软雅黑;\"><span style=\"font-family:微软雅黑\">播放方案：</span>&nbsp;</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">https://www.w3cschool.cn/html5/html5-video2.html</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><br></span><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">腾讯</span>x5内核</span><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\">接入规范：</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">https://x5.tencent.com/tbs/guide/video.html</span></p><p><br></p>                    ','','pack',0,0,0,0,1),(37,'极光推送如何申请？','\n                                    \n                        <p><span style=\";font-family:微软雅黑;font-size:16px\">第一步 注册极光推送网站账号</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">点击打开极光推送网站，进行注册登录</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">网站地址：</span>https://www.jiguang.cn/</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">&nbsp;</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">第二步</span></p><p><span style=\"font-family:微软雅黑;font-size:16px\">1.&nbsp;</span><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">进入服务中心，可以在顶部导航栏【开发者服务】</span>——【极光推送】中，进入以下页面；</span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑;font-size:16px\">2.&nbsp;</span><span style=\";font-family:微软雅黑;font-size:16px\">点击立即进入</span></p><p style=\"margin-left:0;text-indent:0\"><span style=\";font-family:微软雅黑;font-size:16px\"><img src=\"/static/index/image/docs/1544080125371.png\"></span></p><p style=\"margin-left:0;text-indent:0\"><span style=\";font-family:微软雅黑;font-size:16px\"><br></span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">第三步 &nbsp;<span style=\"font-family: 微软雅黑; white-space: normal;\">点击立即创建应用</span></span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family: 微软雅黑; white-space: normal;\"><img src=\"/static/index/image/docs/15440803553892.png\"></span></span></p><p><br></p><p><span style=\";font-family:微软雅黑;font-size:16px\">第四步</span></p><p><span style=\"font-family:微软雅黑;font-size:16px\">1.&nbsp;</span><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">输入</span>APP名称（这里的APP名称和封装时的APP名称可以不一致），APP图标可以不填写，填写完成后，点击【创建我的应用】</span></p><p><img src=\"/static/index/image/docs/15440804373327.png\"></p><p><br></p><p><span style=\";font-family:微软雅黑;font-size:16px\">第五步&nbsp;<span style=\"white-space: normal; font-family: 微软雅黑;\"><span style=\"font-family:微软雅黑\">创建成功，复制保存</span>AppKey</span></span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"white-space: normal; font-family: 微软雅黑;\"><img src=\"/static/index/image/docs/15440807214157.png\"></span></span></p><p><br></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\">第六步 &nbsp;登录平台网站，在【封装-我的APP】中选择，需要编辑极光推送的APP，点击编辑，以APP【考研英语】为例。</span></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\"><img src=\"/static/index/image/docs/15440812942845.png\"></span></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\"><br></span></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\">在插件配置中，选择【极光推送】，将保存好的AppKey填入其中，然后点击下一步操作，进行重新打包，即可完成。</span></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\"><img src=\"/static/index/image/docs/15440814625526.png\"></span></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\"><br></span></p><p><span style=\";font-family:微软雅黑;font-size:16pxfont-family:微软雅黑\"><br></span></p><p><br></p><p><br></p><p><br></p>                                                    ','','pack',0,0,0,0,1),(38,'如何配置极光推送的消息？（安卓版）','\n                                    \n                        <p>第一步、查看已经配置好的APP的包名</p><p>在【封装-我的APP】，以APP【考研英语】为例：</p><p><img src=\"/static/index/image/docs/15440822654931.png\"></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"></span></p><p><br></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\">点击查看后，获得APP包名，</span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"></span></p><p><span style=\";font-family:微软雅黑;font-size:16px\"><span style=\"font-family:微软雅黑\">将包名填写入【极光推送</span>→推送设置】中，在应用包名填写好，并点击保存。</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">（推送分成安卓和苹果客户端，以下只针对</span><strong><span style=\"font-family: 微软雅黑;color: rgb(255, 0, 0);font-size: 16px\">安卓客户端</span></strong><span style=\";font-family:微软雅黑;font-size:16px\">，苹果教程将后期推出）</span></p><p><img src=\"/static/index/image/docs/15440839329474.png\"></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"></span></p><p><br></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\">第六步、配置推送消息</span></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\">在推送栏目中选择发送通知，填写推送信息，选择推送平台（安卓）、目标人群、发送时间。<span style=\"font-family: 微软雅黑; white-space: normal;\">点击立即发送。消息推送即配置完成。</span></span></p><p><img src=\"/static/index/image/docs/15440845039792.png\"></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\"><br></span></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\"><img src=\"/static/index/image/docs/15440845142784.png\"></span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\"><span style=\"font-family:微软雅黑\">第七步、查看推送历史，在【推送—</span>推送历史】查看自己的消息推送记录。</span></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\"><img src=\"/static/index/image/docs/15440845725131.png\"></span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span></p><p><span style=\"font-family: 微软雅黑;font-size: 16px\">第八步、消息发送至手机，查看。</span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><img src=\"/static/index/image/docs/15440846022315.png\"></span></p><p><br></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span><br></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span></p><p style=\"margin-left:0;text-indent:0\"><span style=\"font-family:微软雅黑\"><br></span><br></p><p><br></p>                                                    ','','pack',0,0,0,0,1),(39,'封装好的APP还可以重新编辑吗？','\n                                    \n                        <p>封装好的APP，还可以再次编辑，除了无法选择平台，其他可以再次编辑。</p><p>编辑好后，暂时不支持在线更新，</p><p>安卓包操作顺序：①重新编辑生成的APP，下载好封装包；②重新更新下载链接；③让用户重新下载。</p><p>苹果包操作顺序：<span style=\"white-space: normal;\">①重新编辑生成的APP，下载好封装包；②更新签名；③将签名好的包下载下来，<span style=\"white-space: normal;\">更新下载链接，④<span style=\"white-space: normal;\">让用户重新下载。</span></span></span></p><p><br></p><p>在【封装-我的APP】中，点击右侧按钮【编辑】，即可重新选择如下图所示：</p><p><img src=\"/static/index/image/docs/1543841983735.png\"><br></p><p><br></p><p><br></p>                                                    ','','pack',0,0,0,0,1),(40,'URL拉起APP，如何配置？','\r\n                        <p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">如果需要封装好的</span>APP中拉起指定的APP，需要在网页中配置对应APP的&nbsp;URL&nbsp;Scheme&nbsp;Bundle&nbsp;identifier。</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">&nbsp;</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16pxfont-family:微软雅黑\">在网页中配置的位置如下：</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">通过在</span>html的a标签里面的href中直接配置android端的scheme</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">&lt;body&gt;&nbsp;</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">&nbsp;&nbsp;&lt;a&nbsp;href=\"weixin://wap/pay?pid=1\"&gt;打开app&lt;/a&nbsp;&gt;&lt;br/&gt;</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">&lt;/body&gt;</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">&nbsp;</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">&nbsp;</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"background-color: rgb(255, 255, 255);color:#ff0000\">注意事项<br></span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑; letter-spacing: 0px; font-size: 16px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255);color:#ff0000\">1.&nbsp;要在网站中配置正确的scheme</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑; letter-spacing: 0px; font-size: 16px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255);color:#ff0000\">2.&nbsp;配置并封装完成后，需要在手机上同时安装有该第三方APP</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑; letter-spacing: 0px; font-size: 16px; background-color: rgb(255, 255, 255);\">&nbsp;</span></p><p style=\"margin: 5px 0;text-indent: 0\"><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16pxfont-family:微软雅黑\">常用第三方软件</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">名称</span>&nbsp;URL&nbsp;Scheme&nbsp;Bundle&nbsp;identifier</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">QQ&nbsp;mqq://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">微信</span>&nbsp;weixin://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">腾讯微博</span>&nbsp;TencentWeibo://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">淘宝</span>&nbsp;taobao://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">支付宝</span>&nbsp;alipay://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">微博</span>&nbsp;sinaweibo://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">weico微博&nbsp;weico://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">QQ浏览器&nbsp;mqqbrowser://&nbsp;com.tencent.mttlite</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">uc浏览器&nbsp;dolphin://&nbsp;com.dolphin.browser.iphone.chinese</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">欧朋浏览器</span>&nbsp;ohttp://&nbsp;com.oupeng.mini</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">搜狗浏览器</span>&nbsp;SogouMSE://&nbsp;com.sogou.SogouExplorerMobile</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">百度地图</span>&nbsp;baidumap://&nbsp;com.baidu.map</span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">Chrome&nbsp;googlechrome://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">优酷</span>&nbsp;youku://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">京东</span>&nbsp;openapp.jdmoble://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">人人</span>&nbsp;renren://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">美团</span>&nbsp;imeituan://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">1号店&nbsp;wccbyihaodian://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">我查查</span>&nbsp;wcc://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">有道词典</span>&nbsp;yddictproapp://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">知乎</span>&nbsp;zhihu://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">点评</span>&nbsp;dianping://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">微盘</span>&nbsp;sinavdisk://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">豆瓣</span>fm&nbsp;doubanradio://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">网易公开课</span>&nbsp;ntesopen://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">名片全能王</span>&nbsp;camcard://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\">QQ音乐&nbsp;qqmusic://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">腾讯视频</span>&nbsp;tenvideo://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">豆瓣电影</span>&nbsp;doubanmovie://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">网易云音乐</span>&nbsp;orpheus://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">网易新闻</span>&nbsp;newsapp://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">网易应用</span>&nbsp;apper://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">网易彩票</span>&nbsp;ntescaipiao://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">有道云笔记</span>&nbsp;youdaonote://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">多看</span>&nbsp;duokan-reader://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">全国空气质量指数</span>&nbsp;dirtybeijing://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">百度音乐</span>&nbsp;baidumusic://&nbsp; </span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><br></span><span style=\"font-family: 微软雅黑;letter-spacing: 0;font-size: 16px\"><span style=\"font-family:微软雅黑\">下厨房</span>&nbsp;xcfapp://</span></p><p><span style=\";font-family:微软雅黑;font-size:16px\">&nbsp;</span></p><p><br></p>                    ','','pack',0,0,0,0,1),(41,'封装APP具体教程&功能插件介绍','\n                                    \n                                    \n                        <p>一、封装价格</p><p>封装APP价格和套餐内容，请参考：<a href=\"/index/price\">价格套餐</a></p><p>网站上目前先封装试用，然后付款。支持3天免费使用。<br></p><p><br></p><p>二、封装操作教程</p><p>注册登录平台网站</p><p><br></p><p>第一步、点击封装按钮，到封装APP首页，<span style=\"white-space: normal;\">红色框为封装APP流程。</span></p><p>红色带“<span style=\"color:#ff0000\"> * </span>”为必填项，APP名称建议5个中文字以内，英文数字10个以内；</p><p>网站地址输入您要封装的网站域名， 必须是http://或https://开头；</p><p>设备类型、横竖屏都可以根据您的自身需求进行选择。</p><p><img src=\"/static/index/image/docs/15440150372204.png\"></p><p><br></p><p>第二步、进入下一步，进行【上传图标】。</p><p>APP图标和启动图都为<span style=\"text-decoration:underline;\">必填选项</span>，支持图片上传，也支持在线制作。</p><p><img src=\"/static/index/image/docs/15436530495336.png\"></p><p><br></p><p>第三步、选择插件</p><p style=\"white-space: normal;\">注意事项：</p><p style=\"white-space: normal;\">1. 插件可以根据自身需要，进行配置，也可以不配置，直接打包。</p><p style=\"white-space: normal;\">2. 配置极光推送和友盟统计插件，需要到极光推送和友盟平台，申请KEY值，申请到之后，在【我的APP】列表页，点击编辑，进行重新编辑打包。</p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">插件功能介绍：</p><p style=\"white-space: normal;\">1. 基本版插件</p><p style=\"white-space: normal;\">加载动画：当打开网页时，网页没有完全加载出来，可以勾选加载动画，提示用户网页正在加载。</p><p style=\"white-space: normal;\">清理缓存：清除程序运行时临时产生的文件，清除缓存后，上次浏览时的数据都要重新加载。</p><p style=\"white-space: normal;\">浏览器内核： 可以选择系统内核和腾讯X5内核；网页运行和系统相关，推荐系统内核；如果网站在微信上适配比较好，就选择腾讯X5。</p><p style=\"white-space: normal;\">退出提示：目前支持安卓手机，可以勾选退出方式。</p><p style=\"white-space: normal;\">下拉刷新：按住页面后即可下拉刷新。</p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">2. 高级版插件</p><p style=\"white-space: normal;\">极光提送：使用极光平台，对已经安装的APP进行消息通知。</p><p style=\"white-space: normal;\">友盟统计：使用友盟统计，对已经安装的APP进行一站式的数据监控。</p><p style=\"white-space: normal;\">导航栏（底部）：可以在APP底部增加2-5个导航，功能多样，任意添加。</p><p style=\"white-space: normal;\">状态栏：可以显示或隐藏状态（由运营商、电池、信号那一栏），支持自定义状态栏背景颜色。</p><p style=\"white-space: normal;\">标题栏（顶部）：标题栏位于状态栏下方，可以用来配置：分享、退出、返回、刷新、主页、清除缓存、侧边栏、标题等功能。</p><p style=\"white-space: normal;\">引导页：可以添加 1-4张，关于APP功能或者产品内容的介绍图。</p><p style=\"white-space: normal;\">分享：支持配置系统分享和APP原生分享功能，前者直接开启，后者需要申请微信开放平台的Key值。</p><p style=\"white-space: normal;\">URL拉起APP：可以在APP内部，拉起例如淘宝、微信、支付宝、微信等第三方APP.</p><p style=\"white-space: normal;\">侧边栏：支持在标题栏点击侧边栏按钮，配置竖排的导航。</p><p style=\"white-space: normal;\"><img src=\"/static/index/image/docs/1543656049604.png\"><br></p><p style=\"white-space: normal;\"><br></p><p style=\"white-space: normal;\">第四步、选择套餐，进行购买</p><p style=\"white-space: normal;\">主要是选择时间，3天免费使用是免费让用户体验封装功能。</p><p style=\"white-space: normal;\"><img src=\"/static/index/image/docs/15436602475857.png\"></p><p><br></p><p>第五步、购买成功后，等待封装，1-2分钟后即可完成封装。</p><p>注意事项：</p><p>安卓包封装完成后，即可直接点击测试下载链接进行安装测试；苹果包需要进行苹果企业签名才可以安装。</p><p><img src=\"/static/index/image/docs/15436608749860.png\"></p><p><br></p><p><br></p><p>封装完成后，点击“下载封装包”，把包存在本地电脑上，然后点击【发布】，把APP上传到发布平台，就可以有正式下载链接。</p><p><img src=\"/static/index/image/docs/15436610072035.png\"></p>                                                                                    ','','pack',0,0,0,0,1),(42,'封装好的APP，可以直接安装吗？','\n                                    \n                                    \n                                    \n                        <p><span style=\"color:#00b0f0\">一、封装的安卓APP——可以直接安装。</span></p><p>在【封装-APP详情页】如下图所示：<span style=\"white-space: normal;\">点击测试下载链接，进行测试安装。</span></p><p><img src=\"/static/index/image/docs/79503634cb1e9e992a34c14182badf8e.png\"></p><p><span style=\"color:#ff0000\">请注意：该链接为测试链接，只能下载5次。下载超过5次，下载页将显示应用过期。</span></p><p><span style=\"color:#ff0000\"><br></span></p><p><span style=\"color:#00b0f0\">二、封装的苹果APP——不能安装</span></p><p>苹果APP由于iOS系统限制，必须添加企业签名后，才可以安装。</p><p><br></p><p>如何添加企业签名，具体操作方法：以【考研英语】为例</p><p>第一步、点击蓝色按钮—<span style=\"color:#000000\">下载封装包，下载保存到电脑上。</span></p><p><img src=\"/static/index/image/docs/15440926117931.png\"></p><p><br></p><p>第二步、点击导航栏—签名，将第一步操作中下载的封装包，进行上传；</p><p><img src=\"/static/index/image/docs/15434965771500.png\"></p><p><br></p><p>第三步、上传完成后，填写APP相关信息，并根据自身需要选择套餐。</p><p>① 填写信息，然后点击下一步；如果APP有测试账号和密码，请尽量填写，方便测试签名APP是否正常。</p><p><img src=\"/static/index/image/docs/15440928546214.png\"></p><p><br></p><p>②根据自身需求，选择签名套餐，并完成支付；</p><p><span style=\"white-space: normal;color:#ff0000\">提示：如果需要消息推送，请选择（独立版—3个月以上套餐，即可支持消息推送）</span></p><p><img src=\"/static/index/image/docs/15440929795023.png\"></p><p><span style=\"white-space: normal;color:#000000\"><br></span></p><p><span style=\"white-space: normal;color:#000000\">第四步、等待10分钟后，程序将自动完成签名，签名完成后，下载签名包。</span></p><p><span style=\"white-space: normal;color:#000000\"><img src=\"/static/index/image/docs/1544093070319.png\"></span></p><p><span style=\"color:#000000\"><br></span></p><p><span style=\"color:#000000\">第五步、签名完成，下载签名包。将签名好的包，上传到发布页，即可获得正式下载链接和二维码。</span></p><p><span style=\"color:#000000\"><img src=\"/static/index/image/docs/15440933333286.png\"></span></p><p><span style=\"color:#000000\"><br></span></p><p><br></p><p><br></p><p><span style=\"white-space: normal;color:#000000\"><br></span></p><p><br></p><p><br></p>                                                                                                                    ','','pack',0,0,0,0,1),(43,'企业签名需要提供APP源码吗？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">不需要源码，只需要提供IPA安装包。</span>','','sign',1,0,0,0,1),(44,'企业签名需要多长时间？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">在网站上传iOS APP后，后台会自动根据用户需求，进行签名。正常时间10分钟左右，如有特殊情况，客服将主动联系告知。</span>','','sign',1,0,0,0,1),(45,'企业签名的APP有下载数量限制吗？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">无限制任意安装。可以使用旋风分发提供的免费下载次数，如果需要更多下载次数，请购买。</span>','','sign',1,0,0,0,1),(46,'会不会中途掉签？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">可能存在，由于一张证书签名的APP过多、下载量过大或者一些不可控的原因，苹果公司将封掉该证书，导致该证书签名的APP全部闪退； 我们将通过给APP分类签名和独立证书签名等方式，尽量规避该风险。如果掉签，免费补签。</span>','','sign',1,0,0,0,1),(47,'企业签名后，可以在App Store中搜索到吗？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">不能，企业签名是通过下载页去做下载和安装；而在App Store要能支持下载，必须使用99美金的个人账号或者公司账号，提交iOS APP包，通过App Store审核，才可以下载。</span>','','sign',1,0,0,0,1),(48,'封装APP是什么？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">封装APP是将手机网站打包转化成手机APP，支持安卓和苹果系统，除了网站本身的功能内容之外，我们还将提供多样的插件，丰富APP的功能。</span>','','pack',1,0,0,0,1),(49,'封装好的APP，可以直接安装吗？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">封装好的安卓APP，可以直接在手机上安装；封装的iOS APP，必须要做企业签名，或者上架商店，才可以进行安装。</span>','','pack',1,0,0,0,1),(50,'封装好的APP，可以在安卓市场或者App Store市场搜索到吗？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">不能，封装好的APP；如果需要上架苹果商店，需要申请99美金的个人开发者账号或者公司开发者账号账号，进行提交；如果需要上架安卓市场，安卓应用较多，须根据各家安卓市场的要求进行提交。</span>','','pack',1,0,0,0,1),(51,'封装APP需要提供什么内容？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">只需要提供APP名称、网站域名（链接URL）、APP图标（尺寸200*200，PNG格式）、APP启动页（尺寸1080*1920，PNG格式）即可，其他功能，例如第三方分享、导航、推送功能等，可根据需要，自由搭配</span>','','pack',1,0,0,0,1),(52,'封装APP，需要多长时间？','<span style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, &quot;font-size:14px;background-color:#FFFFFF;\">一般需要2分钟即可。</span>','','pack',1,0,0,0,1);
/*!40000 ALTER TABLE `prefix_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_buylog`
--

DROP TABLE IF EXISTS `prefix_buylog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_buylog` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_uid` int(11) NOT NULL,
  `in_uname` varchar(255) NOT NULL,
  `in_title` varchar(255) NOT NULL,
  `in_tid` int(11) NOT NULL,
  `in_money` int(11) NOT NULL,
  `in_lock` int(11) NOT NULL,
  `in_addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_buylog`
--

LOCK TABLES `prefix_buylog` WRITE;
/*!40000 ALTER TABLE `prefix_buylog` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_buylog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_cert`
--

DROP TABLE IF EXISTS `prefix_cert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_cert` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_iden` varchar(255) NOT NULL DEFAULT '',
  `in_name` varchar(255) NOT NULL DEFAULT '',
  `in_dir` varchar(255) NOT NULL DEFAULT '',
  `p12_pwd` varchar(32) NOT NULL DEFAULT '' COMMENT 'p12密码',
  `type` int(1) unsigned NOT NULL DEFAULT '0',
  `status` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_cert`
--

LOCK TABLES `prefix_cert` WRITE;
/*!40000 ALTER TABLE `prefix_cert` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_cert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_config`
--

DROP TABLE IF EXISTS `prefix_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL DEFAULT 'system',
  `name` varchar(50) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `group` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'text',
  `value` text NOT NULL,
  `content` text COMMENT '一些额外配置',
  `require` text,
  `lock` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '1',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_config`
--

LOCK TABLES `prefix_config` WRITE;
/*!40000 ALTER TABLE `prefix_config` DISABLE KEYS */;
INSERT INTO `prefix_config` VALUES (1,'dev','IN_ARTICLE_TYPE','','开发配置','文章类型','list','[\"文章\",\"问答\",\"公告\"]','[0, 100]',NULL,0,1,1,0,1),(2,'dev','IN_ITEM_TYPE','','开发配置','商品类型','list','[\"\\u73b0\\u91d1\\u4f59\\u989d\",\"\\u4e91\\u5e01\",\"\\u4f1a\\u5458\",\"\\u4f01\\u4e1a\\u7b7e\\u540d\",\"\\u516c\\u6709\\u8bbe\\u5907\",\"\\u79c1\\u6709\\u8bbe\\u5907\"]','[0, 100]',NULL,0,1,1,0,1),(3,'dev','IN_CONFIG_TYPE','','开发配置','配置类型','json','{\"url\":\"\\u94fe\\u63a5\",\"date\":\"\\u65e5\\u671f\",\"list\":\"\\u5217\\u8868\",\"text\":\"\\u6587\\u672c\",\"time\":\"\\u65f6\\u95f4\",\"email\":\"\\u7535\\u5b50\\u90ae\\u7bb1\",\"image\":\"\\u56fe\\u7247\",\"radio\":\"\\u5355\\u9009\\u6846\",\"number\":\"\\u6570\\u5b57\",\"select\":\"\\u4e0b\\u62c9\\u9009\\u6846\",\"checkbox\":\"\\u591a\\u9009\\u6846\",\"datetime\":\"\\u65e5\\u671f\\u65f6\\u95f4\",\"textarea\":\"\\u591a\\u884c\\u6587\\u672c\",\"json\":\"JSON\"}','[0, 100]',NULL,0,1,1,0,1),(4,'dev','IN_CONFIG_CATEGORY','','开发配置','配置类别','json','{\"dev\":\"\\u5f00\\u53d1\\u914d\\u7f6e\",\"pay\":\"\\u652f\\u4ed8\\u914d\\u7f6e\",\"sms\":\"\\u77ed\\u4fe1\\u914d\\u7f6e\",\"sign\":\"\\u7b7e\\u540d\\u914d\\u7f6e\",\"site\":\"\\u7ad9\\u70b9\\u914d\\u7f6e\",\"credit\":\"\\u4e1a\\u52a1\\u914d\\u7f6e\",\"extend\":\"\\u6269\\u5c55\\u914d\\u7f6e\",\"system\":\"\\u5168\\u5c40\\u914d\\u7f6e\",\"upload\":\"\\u4e0a\\u4f20\\u914d\\u7f6e\"}','[0, 100]',NULL,0,1,1,0,1),(5,'dev','IN_ARTICLE_GROUP','','开发配置','文章分组','json','{\"tf\":\"TF\\u7b7e\\u540d\",\"vip\":\"VIP\\u4f1a\\u5458\",\"sign\":\"\\u4f01\\u4e1a\\u7b7e\\u540d\",\"distr\":\"\\u5206\\u53d1\",\"pack\":\"\\u5c01\\u88c5APP\"}','[0, 100]',NULL,0,1,1,0,1),(6,'dev','IN_ACLOG_TYPE','','开发配置','账户类型','json','{\"in_points\":\"\\u4e91\\u5e01\",\"device_num\":\"\\u516c\\u6709\\u8bbe\\u5907\",\"max_super_code\":\"\\u6388\\u6743\\u7801\",\"money\":\"\\u73b0\\u91d1\\u4f59\\u989d\",\"prv_device_num\":\"\\u79c1\\u6709\\u8bbe\\u5907\",\"promote_money\":\"\\u4f63\\u91d1\"}','[0, 100]',NULL,0,1,1,0,1),(15,'system','IN_NAME','显示在浏览器窗口标题等位置','基本设置','站点名称','text','','[0, 100]',NULL,0,0,1,0,1),(16,'system','IN_KEYWORDS','合理的词汇有利于搜索引擎优化','基本设置','关键字词','textarea','APP封装,APP分发,超级签名,企业签名,TF签名,iOS免签,Android安卓,苹果','[0, 255]',NULL,0,0,1,0,1),(17,'system','IN_DESCRIPTION','合理的描述有利于搜索引擎优化','基本设置','站点描述','textarea','APP分发为开发者提供专业的APP分发和封装打包等稳定服务,我们支持IOS在线签名,超级签名,企业签名,TF签名,APP应用托管,Android应用内测等等一系列的方案!','[0, 255]',NULL,0,0,1,0,1),(18,'system','IN_ICP','显示在页面底部网站备案','基本设置','备案信息','text','','[0, 100]',NULL,0,0,1,0,1),(19,'system','IN_GANICP','显示在页面底部网安备案','基本设置','网安备案','text','','[0, 100]',NULL,0,0,1,0,1),(20,'system','IN_BUSINESS','网站版权营业期限','基本设置','营业日期','datetime','2020-2022','[0, 100]',NULL,0,0,1,0,1),(21,'system','IN_AUTHKEY','旋风分发提供的授权KEY','基本设置','软件授权码','text','','[0, 100]',NULL,0,0,1,0,1),(22,'system','IN_MAIL','发邮件时的发件人地址','邮件配置','客服 E-mail','email','100000@qq.com','[0, 100]',NULL,0,0,1,0,1),(23,'system','IN_MAILOPEN','主要用于前台找回密码等功能，建议开启','邮件配置','邮件服务开关','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(24,'system','IN_PORT','邮件服务器端口','邮件配置','SMTP 端口','number','465','[0, 65535]',NULL,0,0,1,0,1),(25,'system','IN_MAILSMTP','发邮件时所指定的服务器','邮件配置','SMTP 服务器','text','ssl://smtp.exmail.qq.com','[0, 100]',NULL,0,0,1,0,1),(26,'system','IN_MAILPW','发邮件时需要验证的密码','邮件配置','E-mail 密码','text','','[0, 100]',NULL,0,0,1,0,1),(27,'system','IN_CODEOPEN','为了站点安全起见，建议开启','基本设置','后台提问开关','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(28,'system','IN_CODE','管理员登录后台时的安全提问答案','基本设置','认证码','text','','[0, 100]',NULL,0,0,1,0,1),(29,'system','IN_STAT','页面底部显示的第三方统计','基本设置','统计代码','textarea','','[0, 255]',NULL,0,0,1,0,1),(30,'system','IN_ANNOUNCEMENT','前台首页显示的公告内容','网站公告','公告内容','textarea','','[0, 255]',NULL,0,0,1,0,1),(31,'system','IN_OPEN','暂时将前台关闭访问','关闭站点','站点维护开关','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(32,'system','IN_OPENS','前台显示的维护信息','关闭站点','维护说明','textarea','网站维护！','[0, 255]',NULL,0,0,1,0,1),(33,'pay','IN_PAY','统一集成异步回调，支付宝带同步回调','支付设置','支付开关','checkbox','[\"0\",\"5\"]','[\"关闭\",\"支付宝\",\"微信\",\"支付宝-码支付\",\"微信-码支付\",\"支付宝-当面付\",\"余额支付\",\"站长付\"]',NULL,0,0,1,0,1),(34,'pay','IN_WXMCHID','微信支付商户号，微信审核通过邮件内获取','微信配置','Mchid','text','','[0, 100]',NULL,0,0,1,0,1),(35,'pay','IN_WXKEY','登录微信支付商户平台，帐户设置-密码安全-API安全','微信配置','Key','text','','[0, 100]',NULL,0,0,1,0,1),(36,'pay','IN_WXAPPID','微信后台开发者中心，获取AppId','微信配置','Appid','text','','[0, 100]',NULL,0,0,1,0,1),(37,'pay','IN_WXAPPSECRET','微信后台开发者中心，获取AppSecret','微信配置','App Secret','text','','[0, 100]',NULL,0,0,1,0,1),(38,'pay','IN_ALIPAYID','以2088开头的16位纯数字','支付宝配置','合作身份者 ID','text','','[0, 100]',NULL,0,0,1,0,1),(39,'pay','IN_ALIPAYKEY','以数字和字母组成的32位字符','支付宝配置','安全检验码','text','','[0, 100]',NULL,0,0,1,0,1),(40,'system','IN_POINTNAME','','账户','下载点显示名称','text','云币','[0, 100]',NULL,0,0,1,0,1),(41,'credit','IN_RMBPOINTS','云币/每元','应用分发','充值汇率','number','100','[1, 10000]',NULL,0,1,1,0,1),(42,'credit','IN_LOGINPOINTS','云币/赠送，只针对当天首次登录','应用分发','每日登录','number','10','[0, 10000]',NULL,0,0,1,0,1),(43,'credit','IN_REGSPACE','单位：MB','注册默认应用容量','注册初始容量','number','300','[0, 10000]',NULL,0,0,1,0,1),(44,'credit','IN_UPSIZE','单位：MB','注册默认应用容量','注册初始上传限制','number','100','[0, 10000]',NULL,0,0,1,0,1),(45,'credit','IN_ADLINK','以“<em class=\"lightnum\">http://</em>”或“<em class=\"lightnum\">https://</em>”开头','应用广告','链接地址','url','','[0, 100]',NULL,0,0,1,0,1),(46,'credit','IN_ADIMG','尺寸：750x130，以“<em class=\"lightnum\">http://</em>”或“<em class=\"lightnum\">https://</em>”开头','应用广告','图片地址','url','','[0, 100]',NULL,0,0,1,0,1),(47,'credit','IN_WEBVIEWPOINTS','[\"一个月\", \"三个月\", \"半年\", \"一年\", \"永久\"]','应用封装','单次扣除','list','[\"\",\"\",\"\",\"\",\"50\"]','[0, 10000]',NULL,0,1,1,0,1),(49,'upload','IN_REMOTE','后台不支持云存储上传，PHP5.5以下版本不支持远程上传的进度条','远程上传','云存储','radio','0','[\"关闭\",\"七牛云\",\"阿里云\"]',NULL,0,0,1,0,1),(50,'upload','IN_REMOTEPK','','七牛云','IN_REMOTEPK','text','','[0, 100]',NULL,0,4,1,0,0),(51,'upload','IN_REMOTEDK','<em class=\"lightnum\">/</em>”结尾，注册地址：<a href=\"https://s.qiniu.com/IZjqAn\" target=\"_blank\">开通</a>','七牛云','外网域名','url','','[0, 100]',NULL,0,3,1,0,1),(52,'upload','IN_REMOTEBK','云存储的空间名称','七牛云','Bucket','text','','[0, 100]',NULL,0,2,1,0,1),(53,'upload','IN_REMOTEAK','云存储的通信密钥','七牛云','AccessKey','text','','[0, 100]',NULL,0,0,1,0,1),(54,'upload','IN_REMOTESK','云存储的通信密钥','七牛云','SecretKey','text','','[0, 100]',NULL,0,1,1,0,1),(55,'upload','IN_MAINKEY','云存储的下载时间戳防盗链主要通信密钥','七牛云','防盗链KEY','text','','[0, 100]',NULL,0,0,1,0,1),(56,'extend','IN_DENIED','使用云存储时，请选择“关闭”','文件防盗','防盗链','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(57,'extend','IN_REWRITE','如果服务器不支持 Rewrite，请选择“禁用”','短链地址','伪静态','radio','1','[\"禁用\", \"开启\"]',NULL,0,0,1,0,1),(58,'extend','IN_MOBILEPROVISION','安装iOS应用时，立即信任的呈现方式','立即信任','呈现方式','radio','0','[\"默认方式\", \"引导方式\"]',NULL,0,0,1,0,1),(59,'extend','IN_VERIFY','开启后需要通过实名认证才能上传应用','实名认证','强制认证','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(61,'sms','IN_SMS','短信接口注册地址：<a href=\"http://www.smsbao.com/reg?r=33010\" target=\"_blank\">短信宝</a>','短信接口配置','短信接口','radio','0','[\"关闭\", \"短信宝\"]',NULL,0,0,1,0,1),(62,'sms','IN_SMSUSER','您申请的用户名','短信接口配置','用户名','text','','[0, 100]',NULL,0,1,1,0,1),(63,'sms','IN_SMSPWD','您申请的密码','短信接口配置','密码','text','','[0, 100]',NULL,0,2,1,0,1),(64,'sms','IN_SMSSIGN','您设置的模板短信签名，根据实际情况修改','短信接口配置','短信签名','text','','[0, 100]',NULL,0,0,1,0,1),(67,'credit','IN_PVIPUPLOAD','单位：MB','会员等级应用容量','初级会员上传限制','number','300','[0, 10000]',NULL,0,1,1,0,1),(68,'credit','IN_PVIPCAPACITY','单位：MB','会员等级应用容量','初级会员应用容量','number','1000','[0, 10000]',NULL,0,1,1,0,1),(69,'credit','IN_IVIPUPLOAD','单位：MB','会员等级应用容量','中级会员上传限制','number','500','[0, 10000]',NULL,0,2,1,0,1),(70,'credit','IN_IVIPCAPACITY','单位：MB','会员等级应用容量','中级会员应用容量','number','3000','[0, 10000]',NULL,0,2,1,0,1),(71,'credit','IN_SVIPUPLOAD','单位：MB','会员等级应用容量','高级会员上传限制','number','1000','[0, 10000]',NULL,0,3,1,0,1),(72,'credit','IN_SVIPCAPACITY','单位：MB','会员等级应用容量','高级级会员应用容量','number','10000','[0, 10000]',NULL,0,3,1,0,1),(81,'sign','IN_RESIGN','次','企业签名','每月补签','number','','[0, 10000]',NULL,0,0,1,0,1),(82,'sign','IN_LISTEN','单位：毫秒，网络状况不太良好的站点建议把值调高','企业签名','监控频率','number','','[0, 10000]',NULL,0,0,1,0,1),(83,'sign','IN_API','签名时要请求的接口地址，以“<em class=\"lightnum\">http://</em>”或“<em class=\"lightnum\">https://</em>”开头、“<em                                 class=\"lightnum\">/</em>”结尾','企业签名','接口地址','url','','[0, 100]',NULL,0,0,1,0,1),(84,'sign','IN_SECRET','签名时要验证的接口密匙','企业签名','接口密匙','text','','[0, 100]',NULL,0,0,1,0,1),(85,'sign','IN_SIGN','','企业签名','签名开关','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(105,'site','IN_AUTOGRAPH','前台累计在线签名APP','前台多年数据','累计在线签名','number','69933','[0, 100000000]',NULL,0,0,1,0,1),(106,'site','IN_DISTRIBUTE','前台累计内测分发APP','前台多年数据','累计内测分发','number','91025','[0, 100000000]',NULL,0,0,1,0,1),(107,'site','IN_DOWNLOAD','前台累计内测下载APP','前台多年数据','累计内测下载','number','247892','[0, 100000000]',NULL,0,0,1,0,1),(108,'site','IN_CONTACT','前台联系客服扣扣','联系我们','联系扣扣','text','100000','[0, 100]',NULL,0,0,1,0,1),(109,'site','IN_COOPERATION','前台合作邮箱','联系我们','合作邮箱','email','100000@163.com','[0, 100]',NULL,0,0,1,0,1),(110,'site','IN_ADDRESS','显示公司地址','公司简介','公司地址','text','','[0, 100]',NULL,0,1,1,0,1),(111,'site','IN_COMPANY','全局公司名称','公司简介','公司名称','text','','[0, 100]',NULL,0,0,1,0,1),(119,'site','IN_PURPOSE','公司宗旨介绍','公司简介','公司宗旨','textarea','秉承着“让开发更高效、更简单”的使命','[0, 255]',NULL,0,0,1,0,1),(120,'site','IN_PROJECT','公司业务简介','公司简介','公司业务','textarea','','[0, 255]',NULL,0,0,1,0,1),(121,'site','IN_PROMISE','公司业务介绍','公司简介','业务介绍','textarea','','[0, 255]',NULL,0,0,1,0,1),(123,'extend','IN_TEMPLATAPC','','首页网站模板','PC端模板','select','2','[\"默认模板\", \"模板1\", \"模板2\", \"模板3\"]',NULL,0,0,1,0,1),(124,'extend','IN_TEMPLATAWA','','首页网站模板','手机端模板','select','2','[\"默认模板\", \"模板1\", \"模板2\"]',NULL,0,0,1,0,1),(126,'site','IN_WXQRCODE','','联系我们','微信二维码','image','','[0, 100]',NULL,0,0,1,0,1),(128,'extend','IN_DOMAIN','您当前的授权主域名，不带“<em class=\"lightnum\">http://</em>”或“<em class=\"lightnum\">https://</em>”','域名防封系统配置','平台域名','text','','[0, 100]',NULL,0,0,1,0,1),(129,'extend','IN_TZDOMAIN','防红链接域名，不带“<em class=\"lightnum\">http://</em>”或“<em class=\"lightnum\">https://</em>”','域名防封系统配置','分发域名','text','','[0, 100]',NULL,0,1,1,0,1),(130,'extend','IN_SJDOMAIN','最终下载链接，不带“<em class=\"lightnum\">http://</em>”或“<em class=\"lightnum\">https://</em>”，多个用,隔开，支持*记录泛解析','域名防封系统配置','下载域名','textarea','','[0, 255]',NULL,0,2,1,0,1),(131,'credit','IN_POINTSRULE','[\"50M以内\", \"50M-100M\", \"100M-300M\", \"300M-600M\", \"600M-1G\", \"1G-1.5G\", \"1.5G以上\"]','应用分发','下载收费','list','[\"6\",\"8\",\"10\",\"15\",\"20\",\"30\",\"50\"]','[0, 100]',NULL,0,1,1,0,1),(132,'credit','IN_CDNPOINTS','使用云存储云币扣费倍数','应用分发','CDN扣费倍数','number','2','[1, 100]',NULL,0,1,1,0,1),(139,'dev','IN_LIST_TEST','','开发配置','列表测试','select','[\"\\u6587\\u7ae02\",\"\\u95ee\\u7b542\"]','[0, 100]',NULL,0,1,1,0,1),(140,'promote','IN_PROMOTE','','推广设置','推广活动','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(141,'promote','IN_PROMOTE_RATE','%','推广设置','推广返佣比例','number','20','[1, 99]',NULL,0,0,1,0,1),(142,'promote','IN_PROMOTE_DAY','天 <b>(用户自注册日期后多少天不再为推广人返佣,设置为0为不限制)</b>','推广设置','推广返佣有效期','number','365','[0, 1000]',NULL,0,0,1,0,1),(143,'promote','IN_CASH_MIN','元  ，0为不限','提现','单笔最小提现额度','number','10','[0, 1000]',NULL,0,0,1,0,1),(144,'promote','IN_CASH_MAX','元  ，0为不限','提现','单笔最大提现额度','number','100','[0, 10000]',NULL,0,0,1,0,1),(145,'promote','IN_CASH_DAY','次  ，0为不限','提现','每日提现次数','number','1','[0, 100]',NULL,0,0,1,0,1),(146,'promote','IN_CASH_MONTH','次  ，0为不限','提现','每月提现次数','number','10','[0, 100]',NULL,0,0,1,0,1),(147,'promote','IN_CASH_TYPE','','提现','提现方式','checkbox','[\"0\",\"1\",\"2\"]','[\"\", \"银行卡\", \"支付宝\"]',NULL,0,0,1,0,1),(148,'promote','IN_CASH','','提现','提现','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(149,'promote','IN_CASH_DAY_MAX','元  ，0为不限','提现','每日提现额度','number','100','[0, 10000]',NULL,0,0,1,0,1),(150,'promote','IN_CASH_MONTH_MAX','元  ， 0为不限','提现','每月提现额度','number','1000','[0, 100000]',NULL,0,0,1,0,1),(152,'extend','IN_UPDATE_API','以“<em class=\"lightnum\">http://</em>”开头、“<em class=\"lightnum\">/</em>”结尾','更新服务','线上更新接口','url','','[0, 100]',NULL,0,3,1,0,1),(153,'promote','IN_CASH_DATE','格式举例：1为1号 ， 1-5 为1至5号，1|3|5 为1号或3号或5号 ，1-5|20-25 为1至5号或20至25号 ，若填写不符合格式，则不生效，为每天都可以提现','提现','每月允许提现的日期','text','10-20','[0, 100]',NULL,0,0,1,0,1),(154,'promote','IN_CASH_CALC_DATE','格式举例：1为1号 ， 1-5 为1至5号，1|3|5 为1号或3号或5号 ，1-5|20-25 为1至5号或20至25号 ，若填写不符合格式，则不生效，为每天都可以提现','提现','每月提现结算的日期','text','10-20','[0, 100]',NULL,0,0,1,0,1),(155,'sign','IN_SUPER','','超级签名','超级签名','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(156,'sign','IN_SUPER_PRV','','超级签名','私有证书','radio','1','[\"禁用\", \"启用\"]',NULL,0,0,1,0,1),(157,'sign','IN_TF','','TF签名','TF签名','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(158,'pay','IN_CODEPAYID','没有码支付，<a href=\"https://codepay.fateqq.com/i/106461\" target=\"_blank\">点击这里注册开通</a>','码支付配置','码支付ID','text','','[0, 100]',NULL,0,0,1,0,1),(159,'pay','IN_CODEPAYKEY','码支付后台设置里通信密钥','码支付配置','码支付密钥','text','','[0, 100]',NULL,0,0,1,0,1),(160,'site','IN_LOGO','','联系我们','站点LOGO','image','','[0, 100]',NULL,0,0,1,0,1),(161,'system','IN_NAME_EN','显示在浏览器窗口标题等位置','基本设置','站点名称(英文)','text','','[0, 100]',NULL,0,0,1,0,1),(162,'system','IN_NAME_TW','显示在浏览器窗口标题等位置','基本设置','站点名称(繁体)','text','','[0, 100]',NULL,0,0,1,0,1),(163,'extend','IN_AC_HOLD_TIME','天，0或空为永久保存，不建议','基本设置','账户记录保存时间','number','7','[0, 1000]',NULL,0,0,1,0,1),(164,'extend','IN_DOWNLOAD_PAGE_FOOTER_ON','','下载页','下载页底部','radio','0','[\"隐藏\", \"显示\"]',NULL,0,0,1,0,1),(166,'pay','IN_F2FPAYID','去支付宝商家里开通当面付','支付宝当面付','应用ID','text','','[0,100]',NULL,0,0,1,0,1),(167,'pay','IN_F2FPAY_MKEY','商户私钥APP_PRIVATE_KEY','支付宝当面付','商户私钥','textarea','','[0,2000]',NULL,0,0,1,0,1),(168,'pay','IN_F2FPAY_AKEY','支付宝公钥ALIPAY_PUBLIC_KEY','支付宝当面付','支付宝公钥','textarea','','[0,1000]',NULL,0,0,1,0,1),(169,'pay','IN_F2FPAY_STYPE','默认RSA2','支付宝当面付','签名方式','text','RSA2','[0,100]',NULL,0,0,1,0,1),(170,'sign','IN_CERT_KEEP','每张证书保留数，0为不保留','超级签名','证书防封策略','number','0','[0,100]',NULL,0,0,1,0,1),(171,'sign','IN_DOWNCODE_MAX_TIME','(天)，0为不过期','超级签名','下载码有效期','number','0','[0,365]',NULL,0,0,1,0,1),(172,'sign','IN_DOWNCODE_FOLLOW_CERT','','超级签名','证书被封下载码','radio','1','[\"不失效\", \"失效\"]',NULL,0,0,1,0,1),(173,'sign','IN_SIGN_MAX','0 为不限','超级签名','最大同时签名数','number','0','[0,100]',NULL,0,0,1,0,1),(174,'sign','IN_DEVICE_DEC_MODE','','超级签名','设备扣费方式','radio','1','[\"按用户\", \"按应用\"]',NULL,0,0,1,0,1),(175,'credit','IN_DIST_ON','','应用分发','应用分发','radio','1','[\"关闭\", \"开启\"]',NULL,0,1,1,0,1),(176,'system','IN_REG_ON','','账户','账户注册','radio','1','[\"关闭\",\"开启\"]',NULL,0,0,1,0,1),(177,'system','IN_LOGIN_ON','','账户','账户登录','radio','1','[\"关闭\",\"开启\"]',NULL,0,0,1,0,1),(178,'upload','IN_ALIYUNOSS_AKI','阿里云存储的通信ID，从<a href=\"https://www.aliyun.com/\">阿里云</a>获取','阿里云OSS','AccessKeyId','text','','[0, 100]',NULL,0,4,1,0,1),(179,'upload','IN_ALIYUNOSS_AKS','阿里云存储的通信密钥','阿里云OSS','AccessKeySecret','text','','[0, 100]',NULL,0,4,1,0,1),(180,'upload','IN_ALIYUNOSS_BK','阿里云存储的空间名称','阿里云OSS','Bucket','text','','[0, 100]',NULL,0,4,1,0,1),(181,'upload','IN_ALIYUNOSS_EP','阿里云上传域名，不加“<em class=\"lightnum\">http://</em>”','阿里云OSS','上传域名','text','','[0, 100]',NULL,0,4,1,0,1),(182,'upload','IN_ALIYUNOSS_CDN','阿里云加速域名，不加“<em class=\"lightnum\">http://</em>”，全网加速，会产生额外费用，不填则不启用全网加速','阿里云OSS','加速域名','text','','[0, 100]',NULL,0,4,1,0,1),(183,'extend','IN_DISWORDS','用于初步判断应用是否违规，多个词用英文逗号隔开','应用审核','禁用词','textarea','','[0, 999]',NULL,0,2,1,0,1),(184,'extend','IN_VERSION','请勿手动更改，会影响版本更新','更新服务','当前版本','text','2.1','[0, \r\n\r\n100]',NULL,0,0,1,0,1),(185,'extend','IN_CHARSET','请勿手动更改，会影响版本更新','更新服务','程序编码','text','utf-8','[0, 100]',NULL,0,0,1,0,1),(186,'extend','IN_BUILD','请勿手动更改，会影响版本更新','更新服务','更新日期','text','20210501','[0, 100]',NULL,0,0,1,0,1),(187,'promote','IN_PROMOTE_CASH_DAY','天，消费后多久进行返佣，0为立即返佣','推广设置','推广返佣延时','text','10','[0, 100]',NULL,0,0,1,0,1),(188,'sign','IN_SIGNMETHOD','本机签名需要上传自备证书','企业签名','企业签名方式','radio','0','[\"本机\",\"接口\"]',NULL,0,0,1,0,1),(189,'sign','IN_SIGN_WORKER','本机签名需要开启，使用其他方式，请勿开启','本机签名服务','控制开关','button_group','stop','{\"logs\":\"日志\",\"start\": \"启动\",\"restart\":\"重启\",\"stop\":\"关闭\"}',NULL,0,0,1,0,1),(190,'sign','IN_SIGN_WORKER_PORT','1024 至 65535 之间，需要确保端口未被占用，修改后需要重启服务','本机签名服务','端口','number','8282','[1024,65535]',NULL,0,0,1,0,1),(191,'sign','IN_SIGN_WORKER_COUNT','优秀的服务器可以适当上调，不建议超过cpu核心数量，修改后需要重启服务','本机签名服务','进程数','number','4','[1,100]',NULL,0,0,1,0,1),(192,'extend','IN_APPDOWNPAGETIME','分钟，0为不限制','下载页','下载链接有效期','number','0','[0,100]',NULL,0,0,1,0,1),(193,'extend','IN_DOMAIN_RANDOMSTR_LEN','使用*泛解析时候，随机生成的字符串长度','域名防封系统配置','下载域名前缀长度','number','20','[1,100]',NULL,0,4,1,0,1),(194,'sign','IN_STEAL_ON','','扣量配置','扣量开关','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(195,'sign','IN_STEAL_INTERVAL','若设置多个 用 逗号(,)隔开 , 举例：10,20 （随机10或20次扣量一次）','扣量配置','每次扣量间隔','text','100','[0, 100]',NULL,0,0,1,0,1),(196,'extend','IN_DSTEAL_ON','','分发扣量配置','分发扣量开关','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(197,'extend','IN_DSTEAL_INTERVAL','若设置多个 用 逗号(,)隔开 , 举例：10,20 （随机10或20次偷量一次）','分发扣量配置','每次扣量间隔','text','100,200','[0, 100]',NULL,0,0,1,0,1),(198,'extend','IN_CNAME','不配置，则不开启自定义域名功能','域名防封系统配置','自定义域名CNAME','text','','[0, 100]',NULL,0,99,1,0,1),(199,'sign','IN_USE_DOWNCODE','开启本功能，超级签名将强制使用授权码下载','超级签名','强制授权','radio','1','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(200,'sign','IN_SUPER_CLEAR_INTERVAL','（小时）不建议小于4小时，服务器空间充足可适当上调。','超级签名','超级签名包清理间隔','number','4','[1, 100]',NULL,0,0,1,0,1),(201,'upload','IN_MANDATORY_REMOTE','开启此配置则所以应用都必须上传到云存储，若云存储关闭，此配置不生效','远程上传','强制使用云存储','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1),(202,'pay','IN_ZZPAY_AppKey','<a href=\"https://admin.zhanzhangfu.com/inviteFriend?inviteCode=3NC7VWFM93JB\" target=\"_blank\">站长付注册</a>','站长付配置','站长付KEY','text','','',NULL,0,0,1,0,1),(203,'pay','IN_ZZPAY_AppSecret','回调地址：您的网址/pay/index/zzpay_notify','站长付配置','站长付Secret','text','','',NULL,0,0,1,0,1),(204,'extend','IN_PUBCHECK','','应用审核','上传审核','radio','0','[\"关闭\", \"开启\"]',NULL,0,0,1,0,1);
/*!40000 ALTER TABLE `prefix_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_downhistory`
--

DROP TABLE IF EXISTS `prefix_downhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_downhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `appid` int(11) NOT NULL COMMENT '应用id',
  `appname` varchar(50) NOT NULL COMMENT '应用名称',
  `appversion` varchar(50) NOT NULL COMMENT '应用版本',
  `appsize` varchar(50) NOT NULL COMMENT '应用大小',
  `liulan` int(11) NOT NULL COMMENT '0浏览1下载',
  `down` int(11) NOT NULL COMMENT '0浏览1下载',
  `down_points` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '下载点数',
  `steal` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '偷量次数',
  `steal_points` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '偷量点数',
  `addtime` datetime NOT NULL COMMENT '新增时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_downhistory`
--

LOCK TABLES `prefix_downhistory` WRITE;
/*!40000 ALTER TABLE `prefix_downhistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_downhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_ios_device`
--

DROP TABLE IF EXISTS `prefix_ios_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_ios_device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '应用id',
  `device_name` varchar(20) NOT NULL DEFAULT '',
  `imei` varchar(50) NOT NULL DEFAULT '',
  `udid` varchar(50) NOT NULL DEFAULT '',
  `product` varchar(20) NOT NULL DEFAULT '',
  `version` varchar(100) NOT NULL DEFAULT '',
  `cert_iss` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `create_time` int(11) NOT NULL DEFAULT '1',
  `steal_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '扣量时间',
  `status` int(11) NOT NULL DEFAULT '1',
  `cert_dec` tinyint(1) NOT NULL DEFAULT '0' COMMENT '证书扣除',
  PRIMARY KEY (`id`),
  UNIQUE KEY `udid` (`udid`,`app_id`,`cert_iss`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_ios_device`
--

LOCK TABLES `prefix_ios_device` WRITE;
/*!40000 ALTER TABLE `prefix_ios_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_ios_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_item`
--

DROP TABLE IF EXISTS `prefix_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '名称',
  `note` varchar(50) NOT NULL DEFAULT '' COMMENT '描述',
  `number` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `old_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '原价',
  `type` varchar(20) NOT NULL DEFAULT 'points' COMMENT '类型',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `recommended` tinyint(1) NOT NULL DEFAULT '0' COMMENT '推荐',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `duration` varchar(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_item`
--

LOCK TABLES `prefix_item` WRITE;
/*!40000 ALTER TABLE `prefix_item` DISABLE KEYS */;
INSERT INTO `prefix_item` VALUES (10,'内测分发下载','',5000,30.00,30.00,'1',0,0,0,0,1,'0'),(11,'内测分发下载','',18000,88.00,100.00,'1',0,1,0,0,1,'0'),(12,'内测分发下载','',60000,288.00,300.00,'1',0,0,0,0,1,'0'),(18,'内测分发下载','',10000,666.00,1000.00,'1',0,0,0,0,0,'0'),(20,'初级会员','1年',1,88.00,0.00,'2',0,0,0,0,1,'0'),(21,'中级会员','1年',2,188.00,0.00,'2',0,1,0,0,1,'0'),(22,'高级会员','1年',3,288.00,0.00,'2',0,0,0,0,1,'0'),(30,'签名套餐','包月',1,188.00,0.00,'3',0,0,0,0,1,'0'),(31,'签名套餐','包季',3,288.00,0.00,'3',0,0,0,0,1,'0'),(32,'签名套餐','包年',12,388.00,0.00,'3',0,0,0,0,1,'0'),(40,'公有池','',1,15.00,18.00,'4',0,0,0,0,1,'0'),(41,'公有池','',10,150.00,150.00,'4',0,0,0,0,1,'0'),(42,'公有池','',50,700.00,900.00,'4',0,0,0,0,1,'0'),(43,'公有池','',100,1300.00,1800.00,'4',0,0,0,0,1,'0'),(50,'私有池','',1,5.00,5.00,'5',0,0,0,0,1,'0'),(51,'私有池','',10,38.00,50.00,'5',0,0,0,0,1,'0'),(52,'私有池','',50,168.00,250.00,'5',0,0,0,0,1,'0'),(53,'私有池','',100,258.00,500.00,'5',0,0,0,0,1,'0'),(54,'签名套餐','包月',1,1500.00,1500.00,'3',0,1,0,0,1,'0'),(55,'签名套餐','包季',3,4000.00,4000.00,'3',0,1,0,0,1,'0'),(56,'签名套餐','包年',12,10000.00,10000.00,'3',0,1,0,0,1,'0'),(57,'余额充值','',100,100.00,100.00,'0',0,0,0,0,1,'0'),(58,'余额充值','',200,200.00,200.00,'0',0,0,0,0,1,'0'),(59,'余额充值','',500,500.00,500.00,'0',0,0,0,0,1,'0'),(60,'余额充值','',1000,1000.00,1000.00,'0',0,0,0,0,1,'0');
/*!40000 ALTER TABLE `prefix_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_key`
--

DROP TABLE IF EXISTS `prefix_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_key` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_tid` int(11) NOT NULL,
  `in_code` varchar(255) NOT NULL,
  `in_state` int(11) NOT NULL,
  `in_time` int(11) NOT NULL,
  `type` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_key`
--

LOCK TABLES `prefix_key` WRITE;
/*!40000 ALTER TABLE `prefix_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_mail`
--

DROP TABLE IF EXISTS `prefix_mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_mail` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_uid` int(11) NOT NULL,
  `in_mail` varchar(255) NOT NULL DEFAULT '',
  `in_code` varchar(10) NOT NULL DEFAULT '',
  `in_addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_mail`
--

LOCK TABLES `prefix_mail` WRITE;
/*!40000 ALTER TABLE `prefix_mail` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_mailreg`
--

DROP TABLE IF EXISTS `prefix_mailreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_mailreg` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_uid` varchar(255) NOT NULL,
  `in_code` varchar(255) NOT NULL,
  `in_addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_mailreg`
--

LOCK TABLES `prefix_mailreg` WRITE;
/*!40000 ALTER TABLE `prefix_mailreg` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_mailreg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_mobile`
--

DROP TABLE IF EXISTS `prefix_mobile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_mobile` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_mobile` varchar(255) NOT NULL,
  `in_code` varchar(255) NOT NULL,
  `in_ip` varchar(255) NOT NULL,
  `in_addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_mobile`
--

LOCK TABLES `prefix_mobile` WRITE;
/*!40000 ALTER TABLE `prefix_mobile` DISABLE KEYS */;
INSERT INTO `prefix_mobile` VALUES (1,'15967162256','690989','111.226.167.56','2021-08-16 15:03:49'),(2,'18650433999','884474','120.36.227.139','2021-09-02 16:21:32');
/*!40000 ALTER TABLE `prefix_mobile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_order`
--

DROP TABLE IF EXISTS `prefix_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pay_id` varchar(50) NOT NULL COMMENT '用户ID或订单ID',
  `money` decimal(6,2) unsigned NOT NULL COMMENT '实际金额',
  `price` decimal(6,2) unsigned NOT NULL COMMENT '原价',
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '支付方式',
  `pay_no` varchar(100) NOT NULL COMMENT '流水号',
  `param` varchar(200) DEFAULT NULL COMMENT '自定义参数',
  `pay_time` bigint(11) NOT NULL DEFAULT '0' COMMENT '付款时间',
  `pay_tag` varchar(100) NOT NULL DEFAULT '0' COMMENT '金额的备注',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `creat_time` bigint(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `up_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `main` (`pay_id`,`pay_time`,`money`,`type`,`pay_tag`),
  UNIQUE KEY `pay_no` (`pay_no`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用于区分是否已经处理';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_order`
--

LOCK TABLES `prefix_order` WRITE;
/*!40000 ALTER TABLE `prefix_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_paylog`
--

DROP TABLE IF EXISTS `prefix_paylog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_paylog` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `in_uid` int(11) NOT NULL COMMENT '用户id',
  `in_uname` varchar(255) NOT NULL COMMENT '用户名',
  `pay_id` varchar(50) NOT NULL COMMENT '订单号',
  `pay_tag` varchar(255) NOT NULL COMMENT '订单描述',
  `pay_points` varchar(255) NOT NULL COMMENT '订单内容',
  `pay_money` decimal(10,2) NOT NULL COMMENT '付款金额',
  `pay_type` int(1) NOT NULL COMMENT '支付方式',
  `pay_no` varchar(100) DEFAULT NULL COMMENT '交易单号',
  `pay_param` int(1) NOT NULL COMMENT '业务类型',
  `pay_status` int(1) NOT NULL COMMENT '订单状态',
  `creat_time` bigint(11) NOT NULL COMMENT '创建时间',
  `pay_time` bigint(11) DEFAULT NULL COMMENT '付款时间',
  `update_time` bigint(11) DEFAULT NULL COMMENT '更新时间',
  `forp_money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '返佣金额',
  `forp_time` int(11) NOT NULL DEFAULT '0' COMMENT '返佣时间',
  `item_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_paylog`
--

LOCK TABLES `prefix_paylog` WRITE;
/*!40000 ALTER TABLE `prefix_paylog` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_paylog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_plugin`
--

DROP TABLE IF EXISTS `prefix_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_plugin` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_name` varchar(255) NOT NULL,
  `in_dir` varchar(255) NOT NULL,
  `in_file` varchar(255) NOT NULL,
  `in_type` int(11) NOT NULL,
  `in_author` varchar(255) DEFAULT NULL,
  `in_address` varchar(255) DEFAULT NULL,
  `in_addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_plugin`
--

LOCK TABLES `prefix_plugin` WRITE;
/*!40000 ALTER TABLE `prefix_plugin` DISABLE KEYS */;
INSERT INTO `prefix_plugin` VALUES (1,'阿里云存储[分发]','App-oss','upload',0,'BEES','https://www.021163.cn/','2019-02-25 13:05:56'),(2,'七牛云存储[分发]','App-qiniu','upload',0,'BEES','https://www.021163.cn/','2019-02-25 13:05:56');
/*!40000 ALTER TABLE `prefix_plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_report`
--

DROP TABLE IF EXISTS `prefix_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL COMMENT '应用id',
  `appname` varchar(50) NOT NULL COMMENT '应用名称',
  `addtime` datetime NOT NULL COMMENT '举报时间',
  `email` varchar(50) NOT NULL COMMENT '联系邮箱',
  `reason` varchar(50) NOT NULL COMMENT '举报类型0盗版1黄色2欺诈3其他',
  `note` text NOT NULL COMMENT '举报内容原因',
  `app_uid` int(11) NOT NULL DEFAULT '0' COMMENT '应用所属用户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_report`
--

LOCK TABLES `prefix_report` WRITE;
/*!40000 ALTER TABLE `prefix_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_salt`
--

DROP TABLE IF EXISTS `prefix_salt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_salt` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_aid` int(11) NOT NULL,
  `in_salt` varchar(255) NOT NULL,
  `in_time` int(11) NOT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1745062 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_salt`
--

LOCK TABLES `prefix_salt` WRITE;
/*!40000 ALTER TABLE `prefix_salt` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_salt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_secret`
--

DROP TABLE IF EXISTS `prefix_secret`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_secret` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_site` varchar(255) NOT NULL,
  `in_md5` varchar(255) NOT NULL,
  `money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '普通价格',
  `price1` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '稳定价格',
  `in_addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开通时间',
  `in_endtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '到期时间',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_secret`
--

LOCK TABLES `prefix_secret` WRITE;
/*!40000 ALTER TABLE `prefix_secret` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_secret` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_sign`
--

DROP TABLE IF EXISTS `prefix_sign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_sign` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_aid` int(11) NOT NULL,
  `in_aname` varchar(255) DEFAULT NULL,
  `in_replace` varchar(255) DEFAULT NULL,
  `in_ssl` varchar(255) NOT NULL,
  `in_site` varchar(255) NOT NULL,
  `in_path` varchar(255) NOT NULL,
  `in_ipa` varchar(255) NOT NULL,
  `in_status` int(11) NOT NULL DEFAULT '0' COMMENT '1签名中2完成',
  `in_cert` varchar(255) NOT NULL,
  `in_cert_type` int(1) NOT NULL DEFAULT '0' COMMENT '证书类型:0=普通,1=稳定',
  `money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '费用',
  `in_time` int(11) NOT NULL,
  `in_uid` int(11) unsigned NOT NULL DEFAULT '0',
  `in_newaname` varchar(100) NOT NULL DEFAULT '0',
  `in_suo` varchar(255) NOT NULL DEFAULT '0',
  `in_yololib` varchar(11) NOT NULL DEFAULT '0',
  `in_qianci` int(11) unsigned NOT NULL DEFAULT '0',
  `api_aid` int(1) DEFAULT '0' COMMENT '证书类型:0=普通,1=稳定',
  `in_uname` varchar(255) DEFAULT '',
  `in_percent` int(3) DEFAULT '0',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_sign`
--

LOCK TABLES `prefix_sign` WRITE;
/*!40000 ALTER TABLE `prefix_sign` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_sign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_signlog`
--

DROP TABLE IF EXISTS `prefix_signlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_signlog` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_aid` int(11) NOT NULL,
  `in_aname` varchar(255) NOT NULL,
  `in_uid` int(11) NOT NULL,
  `in_uname` varchar(255) NOT NULL,
  `in_status` int(11) NOT NULL DEFAULT '0' COMMENT '1签名中2完成',
  `in_step` varchar(255) NOT NULL,
  `in_percent` int(11) NOT NULL,
  `in_cert` varchar(255) NOT NULL,
  `in_addtime` datetime DEFAULT NULL,
  `in_ipa` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_signlog`
--

LOCK TABLES `prefix_signlog` WRITE;
/*!40000 ALTER TABLE `prefix_signlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_signlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_super_cert`
--

DROP TABLE IF EXISTS `prefix_super_cert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_super_cert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `team_id` varchar(20) NOT NULL DEFAULT '',
  `iss` varchar(100) NOT NULL DEFAULT '',
  `kid` varchar(20) NOT NULL DEFAULT '',
  `tid` varchar(20) NOT NULL DEFAULT '',
  `p12_pwd` varchar(20) NOT NULL DEFAULT '',
  `p12_file` varchar(255) NOT NULL DEFAULT '',
  `p8_file` varchar(255) NOT NULL DEFAULT '',
  `create_time` int(11) NOT NULL DEFAULT '1',
  `expirationDate` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '到期时间',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0私有1共有',
  `status` int(5) NOT NULL DEFAULT '0' COMMENT '0未启用1启用',
  `total_count` int(11) NOT NULL DEFAULT '0',
  `limit_count` int(11) NOT NULL DEFAULT '0',
  `mark` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(100) DEFAULT '' COMMENT '苹果开发者账号',
  `password` varchar(50) DEFAULT '' COMMENT '苹果开发者密码',
  `mobile` varchar(20) DEFAULT '' COMMENT '双重手机号',
  `sp_password` varchar(50) DEFAULT '' COMMENT '专属密码',
  `fastlane_session` text COMMENT 'fastlane_session',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `iss` (`iss`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_super_cert`
--

LOCK TABLES `prefix_super_cert` WRITE;
/*!40000 ALTER TABLE `prefix_super_cert` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_super_cert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_super_code`
--

DROP TABLE IF EXISTS `prefix_super_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_super_code` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `code` varchar(64) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1单用,2多用',
  `udid` varchar(100) NOT NULL DEFAULT '',
  `app_id` int(11) DEFAULT '0',
  `downloads` int(15) DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT ' 添加时间',
  `use_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '使用时间',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `cert_iss` varchar(100) NOT NULL DEFAULT '',
  `days` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '有效时长（天）',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='下载码';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_super_code`
--

LOCK TABLES `prefix_super_code` WRITE;
/*!40000 ALTER TABLE `prefix_super_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_super_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_super_sign`
--

DROP TABLE IF EXISTS `prefix_super_sign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_super_sign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `app_id` int(11) NOT NULL DEFAULT '0',
  `app_name` varchar(20) NOT NULL DEFAULT '',
  `app_version` varchar(20) NOT NULL DEFAULT '',
  `udid` varchar(100) NOT NULL DEFAULT '',
  `ipa_path` varchar(255) NOT NULL DEFAULT '',
  `plist_path` varchar(255) NOT NULL DEFAULT '',
  `cert_iss` varchar(255) NOT NULL DEFAULT '',
  `remote` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0未启用1启用',
  `clear_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '清理时间',
  `sign_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_super_sign`
--

LOCK TABLES `prefix_super_sign` WRITE;
/*!40000 ALTER TABLE `prefix_super_sign` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_super_sign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_ticket`
--

DROP TABLE IF EXISTS `prefix_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT '类型',
  `desc` text CHARACTER SET utf8 NOT NULL COMMENT '反馈内容',
  `upimg` text CHARACTER SET utf8 NOT NULL COMMENT '图片',
  `qq` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '联系方式',
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_ticket`
--

LOCK TABLES `prefix_ticket` WRITE;
/*!40000 ALTER TABLE `prefix_ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_update`
--

DROP TABLE IF EXISTS `prefix_update`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `build` int(11) NOT NULL DEFAULT '0',
  `log` text,
  `version` varchar(20) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_update`
--

LOCK TABLES `prefix_update` WRITE;
/*!40000 ALTER TABLE `prefix_update` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_update` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_user`
--

DROP TABLE IF EXISTS `prefix_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_user` (
  `in_userid` int(11) NOT NULL AUTO_INCREMENT,
  `in_username` varchar(255) NOT NULL COMMENT '用户名',
  `in_userpassword` varchar(255) NOT NULL COMMENT '登录密码',
  `in_mail` varchar(255) NOT NULL COMMENT '邮箱',
  `in_mobile` varchar(255) DEFAULT NULL COMMENT '手机',
  `in_svip` int(11) NOT NULL DEFAULT '0' COMMENT '0体验1初级2中级3高级',
  `in_viptime` int(11) DEFAULT NULL COMMENT '会员过期时间',
  `in_nick` varchar(255) DEFAULT NULL COMMENT '实名姓名',
  `in_card` varchar(255) DEFAULT NULL COMMENT '实名身份证号码',
  `in_nameqy` varchar(255) DEFAULT NULL COMMENT '实名企业名称',
  `in_cardqy` varchar(255) DEFAULT NULL COMMENT '实名营业执照号码',
  `in_imgqy` varchar(255) DEFAULT NULL COMMENT '实名营业执照照片',
  `in_imgzm` varchar(255) DEFAULT NULL COMMENT '实名身份证正面',
  `in_imgfm` varchar(255) DEFAULT NULL COMMENT '实名身份证反面',
  `in_imgsc` varchar(255) DEFAULT NULL COMMENT '实名身份证手持',
  `in_regdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '注册时间',
  `in_loginip` varchar(255) DEFAULT NULL COMMENT '最近登录ip',
  `in_logintime` datetime DEFAULT NULL COMMENT '最近登录时间',
  `in_type` int(11) NOT NULL DEFAULT '0' COMMENT '1个人2企业',
  `in_verify` int(11) NOT NULL DEFAULT '0' COMMENT '0未认证1通过2认证中3失败',
  `in_info` varchar(255) DEFAULT NULL COMMENT '拒绝原因',
  `in_islock` int(11) NOT NULL DEFAULT '0' COMMENT '0正常登录1禁止登录',
  `in_release` int(11) NOT NULL DEFAULT '0' COMMENT '0正常发布1禁止发布',
  `in_points` int(11) NOT NULL DEFAULT '0' COMMENT '下载点',
  `in_filesize` bigint(20) NOT NULL DEFAULT '0' COMMENT '上传限制',
  `in_spaceuse` bigint(20) NOT NULL DEFAULT '0' COMMENT '已使用容量',
  `in_spacetotal` bigint(20) NOT NULL DEFAULT '0' COMMENT '总容量',
  `in_use_auth_code` int(1) NOT NULL DEFAULT '0' COMMENT '强制授权',
  `device_num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '公有池',
  `device_used` int(11) NOT NULL DEFAULT '0' COMMENT '已使用的公有设备',
  `prv_device_num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '私有池',
  `prv_device_used` int(11) NOT NULL DEFAULT '0' COMMENT '已使用的私有设备',
  `max_super_code` int(11) NOT NULL DEFAULT '0',
  `money` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '上级ID',
  `pmark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `promote_code` varchar(20) NOT NULL DEFAULT '' COMMENT '推广码',
  `promote_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '推广佣金',
  `promote_money_cash` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '已提现的佣金',
  `cost_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '累计消费',
  `forp_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '给上级的累计返佣',
  `tsetst` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'sdf',
  `unforp_money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '待返金额',
  PRIMARY KEY (`in_userid`),
  UNIQUE KEY `in_username` (`in_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_user`
--

LOCK TABLES `prefix_user` WRITE;
/*!40000 ALTER TABLE `prefix_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_user_aclog`
--

DROP TABLE IF EXISTS `prefix_user_aclog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_user_aclog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用戶ID',
  `name` varchar(20) NOT NULL DEFAULT '',
  `before_value` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '变更前',
  `value` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '数值',
  `after_value` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '变更后',
  `type` varchar(20) NOT NULL DEFAULT 'text' COMMENT '类型',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `create_time` int(11) NOT NULL DEFAULT '1',
  `update_time` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_user_aclog`
--

LOCK TABLES `prefix_user_aclog` WRITE;
/*!40000 ALTER TABLE `prefix_user_aclog` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_user_aclog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_user_cash`
--

DROP TABLE IF EXISTS `prefix_user_cash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_user_cash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用戶ID',
  `account` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL DEFAULT '',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '提现方式',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `create_time` int(11) NOT NULL DEFAULT '1',
  `update_time` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_user_cash`
--

LOCK TABLES `prefix_user_cash` WRITE;
/*!40000 ALTER TABLE `prefix_user_cash` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_user_cash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefix_user_recharge`
--

DROP TABLE IF EXISTS `prefix_user_recharge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prefix_user_recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用戶ID',
  `name` varchar(20) NOT NULL DEFAULT '',
  `before_value` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '变更前',
  `value` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '数值',
  `after_value` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '变更后',
  `type` varchar(20) NOT NULL DEFAULT 'text' COMMENT '类型',
  `note` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `create_time` int(11) NOT NULL DEFAULT '1',
  `update_time` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prefix_user_recharge`
--

LOCK TABLES `prefix_user_recharge` WRITE;
/*!40000 ALTER TABLE `prefix_user_recharge` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefix_user_recharge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'fenfa'
--

--
-- Dumping routines for database 'fenfa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-11  9:46:10
