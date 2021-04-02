-- MySQL dump 10.13  Distrib 5.7.31, for macos10.14 (x86_64)
--
-- Host: 47.116.137.216    Database: ucas
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Table structure for table `additional_information`
--

DROP TABLE IF EXISTS `additional_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `additional_information` (
  `user_id` int(11) unsigned NOT NULL,
  `cboEthnicOrigin` char(50) NOT NULL COMMENT '种族出身',
  `cboReligiousBelief` char(50) DEFAULT NULL COMMENT '宗教信仰',
  `cboSexualOrientation` char(50) DEFAULT NULL COMMENT '性取向',
  `cboGenderIdentityDiff` char(50) DEFAULT NULL COMMENT '您是否识别为跨性别者？',
  `cboNationalIdOne` char(50) NOT NULL COMMENT '国民身份',
  `cboNationalIdTwo` char(50) DEFAULT NULL COMMENT '双重国籍',
  `cboStartMonthOne` char(20) DEFAULT NULL COMMENT '高等教育准备活动1，月',
  `cboStartYearOne` smallint(6) DEFAULT NULL COMMENT '年',
  `cboDurationOne` tinyint(4) DEFAULT NULL COMMENT '持续天数',
  `cboSchoolYearOne` char(10) DEFAULT NULL COMMENT '学年',
  `txtInstitutionOne` char(100) DEFAULT NULL COMMENT '地点',
  `cbosSSponsorOne` char(50) DEFAULT NULL COMMENT '赞助',
  `cboStartMonthTwo` char(20) NOT NULL COMMENT '高等教育准备活动2，月',
  `cboDurationTwo` tinyint(4) DEFAULT NULL COMMENT '持续天数',
  `cboStartYearTwo` smallint(6) DEFAULT NULL COMMENT '年',
  `cboSchoolYearTwo` char(10) DEFAULT NULL COMMENT '学年',
  `txtInstitutionTwo` char(100) DEFAULT NULL COMMENT '地点',
  `cbosSSponsorTwo` char(50) DEFAULT NULL COMMENT '赞助',
  `cboCare` char(10) DEFAULT NULL COMMENT '你一直在照顾吗？',
  `cboCareDuration` char(20) DEFAULT NULL COMMENT '护理时间',
  `cboParentalHE` char(20) DEFAULT NULL COMMENT '家庭教育',
  `txtOccupationalBG` char(100) NOT NULL COMMENT '职位背景',
  `radioWelsh` char(4) DEFAULT NULL COMMENT '我希望来自威尔士大学，学院和UCAS的来信在威尔士',
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Additional information 附加信息';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice` (
  `user_id` int(11) unsigned NOT NULL,
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Choice 选项';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `choices`
--

DROP TABLE IF EXISTS `choices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `txtInstCode` char(255) NOT NULL COMMENT '机构代码',
  `txtInstCode1` char(255) DEFAULT NULL COMMENT '机构代码1',
  `txtCourseCode` char(255) NOT NULL COMMENT '课程代码',
  `txtCampusCode` char(255) NOT NULL COMMENT '校园代码',
  `txtStartDate` char(50) NOT NULL COMMENT '开始日期',
  `txtFurtherDetails` char(255) DEFAULT NULL COMMENT '更多详细信息',
  `rdHome` char(4) NOT NULL COMMENT '住在家里',
  `txtPOE` int(11) DEFAULT NULL COMMENT '入口点,填写的就是数字',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COMMENT='choice附表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `user_id` int(11) unsigned NOT NULL,
  `cboHighestExpectedQual` varchar(255) NOT NULL COMMENT '在开始课程之前，请注明您期望获得的最高资格*',
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Education 教育';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employer`
--

DROP TABLE IF EXISTS `employer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `txtEmpName` char(255) NOT NULL COMMENT '雇主姓名',
  `txtEmpAddress` char(255) NOT NULL COMMENT '雇主地址',
  `txtEmpNature` char(255) NOT NULL COMMENT '职位描述',
  `cboStartMonth` char(20) NOT NULL COMMENT '开始月',
  `cboStartYear` smallint(6) NOT NULL COMMENT '开始年',
  `cboEndMonth` char(20) DEFAULT NULL COMMENT '结束月',
  `cboEndYear` smallint(6) DEFAULT NULL COMMENT '结束年',
  `radioEmpType` char(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COMMENT='employment附表，employer 雇主';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employment`
--

DROP TABLE IF EXISTS `employment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employment` (
  `user_id` int(11) unsigned NOT NULL,
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Employment 就业机会\n		\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pay_send`
--

DROP TABLE IF EXISTS `pay_send`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_send` (
  `user_id` int(10) unsigned NOT NULL,
  `checkAgreement1` tinyint(4) DEFAULT NULL,
  `checkAgreement3` tinyint(4) DEFAULT NULL,
  `checkAgreement4` tinyint(4) DEFAULT NULL,
  `checkAgreement5` tinyint(4) DEFAULT NULL,
  `card_number` char(255) DEFAULT NULL COMMENT '卡号',
  `exp_month` tinyint(4) DEFAULT NULL COMMENT '到期月',
  `exp_year` smallint(6) DEFAULT NULL COMMENT '到期年',
  `cv2_number` char(50) DEFAULT NULL COMMENT '安全码',
  `issue_number` char(50) DEFAULT NULL COMMENT '发行量',
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='支付';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `personal_details`
--

DROP TABLE IF EXISTS `personal_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_details` (
  `user_id` int(11) unsigned NOT NULL,
  `txtPrevSurn` char(255) DEFAULT NULL COMMENT '16岁生日的姓',
  `rdPermUK` char(10) NOT NULL COMMENT '是在英国永久居住吗',
  `addrLine1Text` char(255) DEFAULT NULL COMMENT '家庭住址1',
  `addrLine2Text` char(255) DEFAULT NULL COMMENT '家庭住址2',
  `addrLine3Text` char(255) DEFAULT NULL COMMENT '家庭住址3',
  `addrLine4Text` char(255) DEFAULT NULL COMMENT '家庭住址4',
  `Country` char(100) DEFAULT NULL COMMENT '国家',
  `txtCntryOfBirth` char(100) NOT NULL COMMENT '出生国家',
  `cboEntryUkDay` tinyint(4) DEFAULT NULL COMMENT '首次进入英国的时间',
  `cboEntryUkMonth` char(20) DEFAULT NULL,
  `cboEntryUkYear` smallint(6) DEFAULT NULL,
  `txtNatioality` char(100) NOT NULL COMMENT '国籍',
  `txtDualNatioality` char(100) DEFAULT NULL COMMENT '双重国籍',
  `txtResidenceArea` char(100) NOT NULL COMMENT '永久居民区',
  `txtResidentialCategory` char(100) NOT NULL COMMENT '住宅类别',
  `txtUniqueLearnerNo` char(50) DEFAULT NULL COMMENT '唯一学习者编号',
  `txtToeflNo` char(50) DEFAULT NULL COMMENT '外语考试编号',
  `txtIeltsNo` char(50) DEFAULT NULL COMMENT '国籍英语测试编号',
  `cboStudentVisa` char(10) DEFAULT NULL COMMENT '学生签证',
  `cboStudiedUK` char(10) DEFAULT NULL COMMENT '以前是否以学生签证在英国留学',
  `txtPassportNo` char(255) DEFAULT NULL COMMENT '护照号码',
  `cboIssueDay` tinyint(4) DEFAULT NULL COMMENT '发行日期',
  `cboIssueMonth` char(20) DEFAULT NULL,
  `cboIssueYear` smallint(6) DEFAULT NULL,
  `cboExpireDay` tinyint(4) DEFAULT NULL COMMENT '到期日期',
  `cboExpireMonth` char(20) DEFAULT NULL,
  `cboExpireYear` smallint(6) DEFAULT NULL,
  `txtPlaceOfIssue` char(255) DEFAULT NULL COMMENT '签发地点',
  `cboFeeCode` char(50) NOT NULL COMMENT '费用代码',
  `txtSSA_FeeName` char(50) DEFAULT NULL COMMENT '学生支持安排',
  `euAnswers` char(20) NOT NULL COMMENT '是否在欧盟工作生活',
  `parentSpouse` char(20) NOT NULL COMMENT '是否在欧盟有亲人朋友',
  `txtNominPerson` char(50) DEFAULT NULL COMMENT '被提名人',
  `txtNominPersonRelation` char(50) DEFAULT NULL COMMENT '与您的关系',
  `txtDisabilitySplNeeds` text NOT NULL COMMENT '残疾类别',
  `txtDisabilitySplNeedsText` text COMMENT '特殊需求详细信息',
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  `txtPrefFName` char(50) DEFAULT NULL COMMENT '首选名字',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Personal Details 个人资料';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qualifications` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `school_id` int(10) unsigned DEFAULT NULL,
  `cboTitle` char(255) DEFAULT NULL COMMENT '主题',
  `txtTitle` char(255) DEFAULT NULL COMMENT '主题，其他',
  `cboQualMonth` char(20) DEFAULT NULL COMMENT '资格日期',
  `cboQualYear` smallint(6) DEFAULT NULL,
  `cboAwardingBody` char(20) DEFAULT NULL COMMENT '颁奖机构',
  `txtAwardingBody` char(255) DEFAULT NULL,
  `cboGrade` char(20) DEFAULT NULL COMMENT '等级',
  `txtGrade` char(255) DEFAULT NULL,
  `content` text COMMENT '资格json值',
  `val` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `school_id` (`school_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COMMENT='qualifications资格表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reference`
--

DROP TABLE IF EXISTS `reference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reference` (
  `user_id` int(11) unsigned NOT NULL,
  `txtRefereeName` char(255) NOT NULL COMMENT '裁判员的全名和姓名*',
  `txtPost` char(255) NOT NULL COMMENT '职位/职业/关系*',
  `txtOrgName` char(255) NOT NULL COMMENT '机构名称*',
  `txtAddr1` char(255) NOT NULL COMMENT '地址1',
  `txtAddr2` char(255) DEFAULT NULL COMMENT '地址2',
  `txtAddr3` char(255) DEFAULT NULL COMMENT '地址3',
  `txtAddr4` char(255) DEFAULT NULL COMMENT '地址4',
  `txtTelephoneNumber` char(50) NOT NULL COMMENT '电话',
  `txtFaxNumber` char(50) DEFAULT NULL COMMENT '传真',
  `txtEmail` char(100) NOT NULL COMMENT '邮箱',
  `txtDatesUnavail` char(255) DEFAULT NULL COMMENT '日期不可用',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Reference参考';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(255) unsigned NOT NULL,
  `txtCentreName` char(255) NOT NULL COMMENT '学校/学院/中心名称',
  `txtCentreNumber` char(255) DEFAULT NULL COMMENT '考试中心号码',
  `cboStartMonth` char(20) NOT NULL COMMENT '开始月',
  `cboStartYear` smallint(6) NOT NULL COMMENT '开始年',
  `cboFinishMonth` char(20) NOT NULL COMMENT '结束月',
  `cboFinishYear` smallint(6) NOT NULL COMMENT '结束年',
  `rdAttendance` char(10) NOT NULL COMMENT '出勤',
  `cboFormalQuals` char(10) NOT NULL COMMENT '您/您是否会在该中心获得任何资格证书？*',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COMMENT='education附表，school 学院';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `statement`
--

DROP TABLE IF EXISTS `statement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statement` (
  `user_id` int(11) unsigned NOT NULL,
  `taPersonalStatement` text NOT NULL COMMENT '描述',
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  `update_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Statement陈述';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(10) NOT NULL COMMENT '标题',
  `gender` char(10) NOT NULL COMMENT '性别',
  `txtForename` char(50) NOT NULL COMMENT '名',
  `txtSurname` char(50) NOT NULL COMMENT '姓',
  `cboDobDay` tinyint(4) NOT NULL COMMENT '出生日',
  `cboDobMonth` char(20) NOT NULL COMMENT '出生月',
  `cboDobYear` smallint(4) NOT NULL COMMENT '出生年',
  `radioLocation` char(255) NOT NULL COMMENT '邮政',
  `addrLine1Text` char(255) NOT NULL COMMENT '邮寄地址1',
  `addrLine2Text` char(255) DEFAULT NULL COMMENT '邮寄地址2',
  `addrLine3Text` char(255) DEFAULT NULL COMMENT '邮寄地址3',
  `addrLine4Text` char(255) DEFAULT NULL COMMENT '邮寄地址4',
  `Country` char(50) NOT NULL COMMENT '国家',
  `txtHomePhone` char(50) DEFAULT NULL COMMENT '座机',
  `txtMobilePhone` char(50) DEFAULT NULL COMMENT '手机',
  `emailText` char(100) NOT NULL COMMENT '邮箱',
  `chkEducationalOption` tinyint(4) DEFAULT NULL COMMENT '您的选择',
  `chkCommercialOption` tinyint(4) DEFAULT NULL COMMENT '学生必需品',
  `chkUnplacedCommsFlag` tinyint(4) DEFAULT NULL COMMENT '相关课程',
  `chkEmailOption` tinyint(4) DEFAULT NULL COMMENT '电子邮件',
  `chkTxtOption` tinyint(4) DEFAULT NULL COMMENT '短信',
  `chkMailingsOption` tinyint(4) DEFAULT NULL COMMENT '邮政',
  `passwordText` char(255) NOT NULL COMMENT '密码',
  `wenti1` char(100) NOT NULL COMMENT '问题1',
  `daan1` char(255) NOT NULL COMMENT '回答1',
  `wenti2` char(100) NOT NULL COMMENT '问题2',
  `daan2` char(255) NOT NULL COMMENT '回答2',
  `wenti3` char(100) NOT NULL COMMENT '问题3',
  `daan3` char(255) NOT NULL COMMENT '回答3',
  `wenti4` char(100) NOT NULL COMMENT '问题4',
  `daan4` char(255) NOT NULL COMMENT '回答4',
  `create_time` int(10) unsigned DEFAULT NULL COMMENT '创建时间',
  `personal_id` char(20) DEFAULT NULL COMMENT '个人id',
  `rdRoute` char(10) DEFAULT NULL COMMENT '申请方式',
  `txtBuzzword` char(100) DEFAULT NULL COMMENT '流行语',
  `rdConfirm` char(10) DEFAULT NULL COMMENT '注册确认',
  `cboGroups` char(20) DEFAULT NULL COMMENT '导师/申请组',
  `school_name` char(255) DEFAULT NULL,
  `school_address` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1054 DEFAULT CHARSET=utf8mb4 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `view_all`
--

DROP TABLE IF EXISTS `view_all`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `view_all` (
  `user_id` int(10) unsigned NOT NULL,
  `chkPDAgreed` tinyint(4) DEFAULT '0' COMMENT '是否同意',
  `chkComplete` tinyint(4) DEFAULT '0' COMMENT '部分完成',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='View all';
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-02 14:16:35
