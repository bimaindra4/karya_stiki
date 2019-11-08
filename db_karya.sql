/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : db_karya

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 01/11/2019 15:06:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_karya_detail
-- ----------------------------
DROP TABLE IF EXISTS `tbl_karya_detail`;
CREATE TABLE `tbl_karya_detail`  (
  `id_detail_karya` int(11) NULL DEFAULT NULL,
  `id_detail_karya_url` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_karya` int(11) NULL DEFAULT NULL,
  `id_mahasiswa` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `modified_at` datetime(0) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  INDEX `mhs_ke_karya`(`id_mahasiswa`) USING BTREE,
  INDEX `detail_ke_karya`(`id_karya`) USING BTREE,
  CONSTRAINT `detail_ke_karya` FOREIGN KEY (`id_karya`) REFERENCES `tbl_karya_mhs` (`id_karya`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mhs_ke_karya` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tbl_master_mahasiswa` (`id_mahasiswa`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_karya_lampiran
-- ----------------------------
DROP TABLE IF EXISTS `tbl_karya_lampiran`;
CREATE TABLE `tbl_karya_lampiran`  (
  `id_karya_lampiran` int(11) NOT NULL AUTO_INCREMENT,
  `id_karya_lampiran_url` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_karya` int(11) NULL DEFAULT NULL,
  `lampiran_karya` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lampiran_jenis` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `modified_at` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_karya_lampiran`) USING BTREE,
  INDEX `lampiran_ke_karya`(`id_karya`) USING BTREE,
  CONSTRAINT `lampiran_ke_karya` FOREIGN KEY (`id_karya`) REFERENCES `tbl_karya_mhs` (`id_karya`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_karya_mhs
-- ----------------------------
DROP TABLE IF EXISTS `tbl_karya_mhs`;
CREATE TABLE `tbl_karya_mhs`  (
  `id_karya` int(11) NOT NULL AUTO_INCREMENT,
  `id_karya_url` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_prodi` int(11) NULL DEFAULT NULL,
  `karya_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `karya_deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `karya_tgl_buat` date NULL DEFAULT NULL,
  `karya_hki` int(1) NULL DEFAULT NULL,
  `karya_status` int(1) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `modified_at` datetime(0) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_karya`) USING BTREE,
  INDEX `id_karya`(`id_karya`) USING BTREE,
  INDEX `karya_ke_prodi`(`id_prodi`) USING BTREE,
  CONSTRAINT `karya_ke_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_master_prodi` (`id_prodi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_karya_mhs
-- ----------------------------
INSERT INTO `tbl_karya_mhs` VALUES (1, 'sdaisj21i3j12i3j2', 1, 'Karya Test', 'Coba aja dulu', '2019-10-22', 0, 0, '2019-10-22 15:38:40', NULL, 1);

-- ----------------------------
-- Table structure for tbl_master_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_mahasiswa`;
CREATE TABLE `tbl_master_mahasiswa`  (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa_url` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_prodi` int(11) NULL DEFAULT NULL,
  `mhs_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mhs_nrp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mhs_tempat_lahir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mhs_tanggal_lahir` date NULL DEFAULT NULL,
  `mhs_jkel` enum('L','P') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mhs_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `modified_at` datetime(0) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`) USING BTREE,
  INDEX `mhs_ke_prodi`(`id_prodi`) USING BTREE,
  CONSTRAINT `mhs_ke_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_master_prodi` (`id_prodi`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_master_prodi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_prodi`;
CREATE TABLE `tbl_master_prodi`  (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi_url` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prodi_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prodi_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `modified_at` datetime(0) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_prodi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_master_prodi
-- ----------------------------
INSERT INTO `tbl_master_prodi` VALUES (1, '2kj3h', 'Teknik Informatika', 'ti@stiki.ac.id', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-10-20 22:35:05', NULL, 1);

SET FOREIGN_KEY_CHECKS = 1;
