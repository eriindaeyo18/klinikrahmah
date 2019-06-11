/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : klinikrahmah

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 11/06/2019 20:56:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_pasien
-- ----------------------------
DROP TABLE IF EXISTS `data_pasien`;
CREATE TABLE `data_pasien`  (
  `id_pp` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pasien` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Pekerjaan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_pp`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_pasien
-- ----------------------------
INSERT INTO `data_pasien` VALUES ('1', 'eri', 'p', '0000-00-00', 'lajang', 'penganggur', 'rawadas');
INSERT INTO `data_pasien` VALUES ('2', 'sutisna', 'l', '2019-05-07', 'menikah', 'karyawan s', 'kranji');

-- ----------------------------
-- Table structure for dokter
-- ----------------------------
DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter`  (
  `id_dokter` int(5) NOT NULL,
  `nama_dokter` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_dokter`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dokter
-- ----------------------------
INSERT INTO `dokter` VALUES (1, 'sintia', '2019-05-07', 'lajang', 'perempuan', 'rawadas', '08977866767', 2);
INSERT INTO `dokter` VALUES (2, 'balkis', '2019-05-29', 'menikah', 'perempuan', 'keranji', '08976767676', 1);

-- ----------------------------
-- Table structure for front_office
-- ----------------------------
DROP TABLE IF EXISTS `front_office`;
CREATE TABLE `front_office`  (
  `id_fo` int(5) NOT NULL,
  `nama_fo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_fo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of front_office
-- ----------------------------
INSERT INTO `front_office` VALUES (0, 'Andi Zainal', NULL);

-- ----------------------------
-- Table structure for laporan_bulanan
-- ----------------------------
DROP TABLE IF EXISTS `laporan_bulanan`;
CREATE TABLE `laporan_bulanan`  (
  `id_laporanbulanan` int(5) NOT NULL,
  `id_rm` int(5) NULL DEFAULT NULL,
  `id_pasien` int(5) NULL DEFAULT NULL,
  `jml_harga` bigint(20) NULL DEFAULT NULL,
  `total_transaksi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_laporanbulanan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for laporan_harian
-- ----------------------------
DROP TABLE IF EXISTS `laporan_harian`;
CREATE TABLE `laporan_harian`  (
  `id_laporan` int(5) NOT NULL,
  `id_rm` int(5) NULL DEFAULT NULL,
  `id_pasien` int(5) NULL DEFAULT NULL,
  `jml_harga` bigint(20) NULL DEFAULT NULL,
  `total_transaksi` bigint(30) NULL DEFAULT NULL,
  PRIMARY KEY (`id_laporan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for laporan_tahunan
-- ----------------------------
DROP TABLE IF EXISTS `laporan_tahunan`;
CREATE TABLE `laporan_tahunan`  (
  `id_laporantahunan` int(5) NOT NULL,
  `id_rm` int(5) NULL DEFAULT NULL,
  `id_pasien` int(5) NULL DEFAULT NULL,
  `jml_harga` bigint(20) NULL DEFAULT NULL,
  `total_transaksi` bigint(30) NULL DEFAULT NULL,
  PRIMARY KEY (`id_laporantahunan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (2, 'budi', '12345', '2');
INSERT INTO `login` VALUES (3, 'fitri', '12345', '3');
INSERT INTO `login` VALUES (4, 'balqis', '98765', '1');

-- ----------------------------
-- Table structure for obat
-- ----------------------------
DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat`  (
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Stok` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Satuan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Harga` int(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id_obat`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of obat
-- ----------------------------
INSERT INTO `obat` VALUES (1, 'Tramadol', '100', 'pcs', 1500);

-- ----------------------------
-- Table structure for pasien
-- ----------------------------
DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien`  (
  `id_pasien` int(5) NOT NULL,
  `id_rm` int(5) NULL DEFAULT NULL,
  `id_pp` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pasien`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rekam_medis
-- ----------------------------
DROP TABLE IF EXISTS `rekam_medis`;
CREATE TABLE `rekam_medis`  (
  `id_rm` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_periksa` datetime(0) NULL DEFAULT NULL,
  `anamnesa` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `treatment` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_obat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_pasien` int(5) NULL DEFAULT NULL,
  `id_dokter` int(5) NULL DEFAULT NULL,
  `id_obat` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_rm`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rekam_medis
-- ----------------------------
INSERT INTO `rekam_medis` VALUES ('001', '2019-05-26 22:39:36', 'kulit jerawatan', 'facial', 'krim malam', 1, 2, 3);
INSERT INTO `rekam_medis` VALUES ('002', '2019-05-14 22:59:29', 'kulit mengeluoas', 'filler', 'mosteriozer', 2, 1, 4);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id_transaksi` int(5) NOT NULL,
  `id_pasien` int(5) NULL DEFAULT NULL,
  `tgl_periksa` date NULL DEFAULT NULL,
  `id_rm` int(5) NULL DEFAULT NULL,
  `id_fo` int(5) NULL DEFAULT NULL,
  `harga` bigint(20) NULL DEFAULT NULL,
  `id_obat` int(5) NULL DEFAULT NULL,
  `qty` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, 1, '2019-06-10', 1, 1, NULL, 1, 5);

SET FOREIGN_KEY_CHECKS = 1;
