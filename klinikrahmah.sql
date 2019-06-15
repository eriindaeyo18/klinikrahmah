/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : klinikrahmah

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 16/06/2019 01:47:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_pasien
-- ----------------------------
DROP TABLE IF EXISTS `data_pasien`;
CREATE TABLE `data_pasien`  (
  `id_pp` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Pekerjaan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_pp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 152 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_pasien
-- ----------------------------
INSERT INTO `data_pasien` VALUES (1, 'eri', 1, '1995-07-13', '1', 'penganggur', 'rawadas');
INSERT INTO `data_pasien` VALUES (2, 'sutisna', 1, '1994-06-21', '1', 'karyawan s', 'kranji');
INSERT INTO `data_pasien` VALUES (3, 'SYAMSUDDIN', 1, '1984-11-10', '1', 'BRI UDES K', 'RT 01 RW 01');
INSERT INTO `data_pasien` VALUES (4, 'MOHD.ADNAN', 1, '1984-12-31', '1', 'BTPN PUTRI', 'JL JALAK 4 NO 134');
INSERT INTO `data_pasien` VALUES (5, 'ASNAN', 1, '1984-08-18', '1', 'KPTB JKS T', 'KAV.MARINIR BLOK.AL 1 NO.1');
INSERT INTO `data_pasien` VALUES (6, 'TJOLLI', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL.MACINI TENGAH NO.21A');
INSERT INTO `data_pasien` VALUES (7, 'ISTAR SIREGAR', 1, '1984-12-31', '1', 'KTR POS GU', 'PURBA SINOMBA');
INSERT INTO `data_pasien` VALUES (8, 'MINGAN PANE', 1, '1984-12-31', '1', 'BRI UNIT S', 'DS.');
INSERT INTO `data_pasien` VALUES (9, 'M.SIDDIK HARAHAP', 1, '1984-02-16', '1', 'BTPN PUTRI', 'JL.TRIKORA GG SIRIAWON NO 96');
INSERT INTO `data_pasien` VALUES (10, 'PETRUS ANDI', 1, '1984-12-31', '1', 'BTPN KCP A', 'JL.SERMANI NO.3');
INSERT INTO `data_pasien` VALUES (11, 'PAIDJO AS', 1, '1984-05-14', '1', 'KTR POS PA', 'JL.P.BRANDAN LK V');
INSERT INTO `data_pasien` VALUES (12, 'RAMAN SARAGIH', 1, '1984-08-09', '1', 'KTR POS PU', 'JL.GUNUNG KRAKATAU NO.202');
INSERT INTO `data_pasien` VALUES (13, 'RAMLI', 1, '1984-02-28', '1', 'KTR POS TH', 'JL.KARANTINA  NO.12-F');
INSERT INTO `data_pasien` VALUES (14, 'TENG TENG SEMBIRING', 1, '1984-03-30', '1', 'KTR POS LA', 'DESA.');
INSERT INTO `data_pasien` VALUES (15, 'SUMAN', 1, '1984-12-31', '1', 'KTR POS TE', 'JL.SEI DELI  LINGK.5');
INSERT INTO `data_pasien` VALUES (16, 'ACHMAD HIZAR SYOFIAN', 1, '1984-08-10', '1', 'KTR POS TA', 'JL. P. KEMERDEKAAN 46-A  RT.00');
INSERT INTO `data_pasien` VALUES (17, 'JALIATAN SILITONGA', 1, '1984-01-05', '1', 'KTR POS PI', 'LK IV');
INSERT INTO `data_pasien` VALUES (18, 'KALPIN SIREGAR', 1, '1984-04-29', '1', 'KTR POS MU', 'DESA SILALI TORUAN');
INSERT INTO `data_pasien` VALUES (19, 'LUKMAN DALIMUNTHE', 1, '1984-12-31', '1', 'KTR POS SI', 'KEL.SIGALANGAN KEC.BT.ANGKOLA ');
INSERT INTO `data_pasien` VALUES (20, 'SOEPARNO', 1, '1984-02-01', '1', 'BANK MANDI', 'RUMDIS DEHAN BLOK A.6/4 RT.02/');
INSERT INTO `data_pasien` VALUES (21, 'TOGAR PASARIBU', 1, '1984-12-31', '1', 'KTR POS PI', 'DUSUN III');
INSERT INTO `data_pasien` VALUES (22, 'T.DJAFAR AHMAD', 1, '1984-09-19', '1', 'KTR POS SE', 'JL.GARUDA NO.32');
INSERT INTO `data_pasien` VALUES (23, 'HASANUDDIN', 1, '1984-07-06', '1', 'BTPN SUNGG', 'KEL.BT.SUNGGU KEC.BONTONOMPO K');
INSERT INTO `data_pasien` VALUES (24, 'PULO TAMBUNAN', 1, '1984-12-31', '1', 'KTR POS PA', 'DESA.');
INSERT INTO `data_pasien` VALUES (25, 'MANANTI SIHITE', 1, '1984-12-10', '1', 'KTR POS TA', 'ASRAMA KODIM');
INSERT INTO `data_pasien` VALUES (26, 'RUSDI TAMBI', 1, '1984-12-31', '1', 'KTR POS BE', 'JL.BLITON NO 61');
INSERT INTO `data_pasien` VALUES (27, 'SOEBAKIR', 1, '1984-04-13', '1', 'KTR POS TA', 'DSN V');
INSERT INTO `data_pasien` VALUES (28, 'PAIMIN', 1, '1984-06-05', '1', 'KTR POS SA', 'JL. SISINGA MANGARAJA');
INSERT INTO `data_pasien` VALUES (29, 'M.ALI JABBAR', 1, '1984-02-21', '1', 'KTR POS SU', 'JL.PAHLAWAN Gg DAMAI DSN X');
INSERT INTO `data_pasien` VALUES (30, 'MUH YASIN BACO', 1, '1984-12-01', '1', 'BTPN BAWAK', 'JL.ANGGREK NO.4 U.PANDANG');
INSERT INTO `data_pasien` VALUES (31, 'BADDU DAENG NGERANG', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL.SIBULA DALAM LR 132F');
INSERT INTO `data_pasien` VALUES (32, 'HD.SAKUL', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL.PELANDUK NO.13 MAKASSAR');
INSERT INTO `data_pasien` VALUES (33, 'NGADIKUN', 1, '1984-12-31', '1', 'BRI CAB. R', 'JL. W R. SUPRATMAN NO. 219');
INSERT INTO `data_pasien` VALUES (34, 'MAAKIR', 1, '1984-01-01', '1', 'BRI UNIT T', 'JLN.PEMANGKU BASRI');
INSERT INTO `data_pasien` VALUES (35, 'GAYUS BAKARA', 1, '1984-09-01', '1', 'KTR POS S ', 'JL. SISINGAMANGARAJA NO. 171');
INSERT INTO `data_pasien` VALUES (36, 'MERAH ISMAUN', 1, '1984-12-01', '1', 'KTR POS M ', 'JL.VETERAN GANG SALEH NO.15 RT');
INSERT INTO `data_pasien` VALUES (37, 'BEDDURAMANG', 1, '1984-04-08', '1', 'BRI KCP GR', 'JL.PAMPANG II NO.2 B');
INSERT INTO `data_pasien` VALUES (38, 'BANNUSU', 1, '1984-12-31', '1', 'KPP BATU-B', 'BERA');
INSERT INTO `data_pasien` VALUES (39, 'SUPU DG.KULLE', 1, '1984-05-28', '1', 'BRI CAB.PA', 'KEL PABUNDUKANG RT 01/III KEC ');
INSERT INTO `data_pasien` VALUES (40, 'ABD RAHKIM', 1, '1984-12-31', '1', 'BRI CAB.A.', 'BTN SUDIANG PERMAI BLOK.C.15 N');
INSERT INTO `data_pasien` VALUES (41, 'PENG DG.BOLLA', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL.ANDI MANGERANGI 1 NO.9 RT.0');
INSERT INTO `data_pasien` VALUES (42, 'ANDI ARIS KAMALUDDIN', 1, '1984-12-31', '1', 'KTR POS SI', 'DS.BILOKA PANCALAUTAN SIDRAP');
INSERT INTO `data_pasien` VALUES (43, 'M.SOEDARMAN BIN SOER', 1, '1984-01-01', '1', 'KPTB JKS G', 'JL. MENTENG WADAS RT.007/01');
INSERT INTO `data_pasien` VALUES (44, 'TALABA', 1, '1984-12-31', '1', 'KTR POS SE', 'PARIA SENGKANG WAJO WAJO PENRA');
INSERT INTO `data_pasien` VALUES (45, 'HANENG', 1, '1984-12-01', '1', 'BRI CAB.A.', 'JL.A.P.PETTARANI III MASALE II');
INSERT INTO `data_pasien` VALUES (46, 'MUH SANUSI', 1, '1984-12-31', '1', 'KTR POS SI', 'JL.DOMBA NO.32 PANGKAJENE RK 0');
INSERT INTO `data_pasien` VALUES (47, 'LOTTE', 1, '1984-12-31', '1', 'KTR POS WA', 'LAWARI RT. 01 RW. 01');
INSERT INTO `data_pasien` VALUES (48, 'SJAMSIR', 1, '1984-01-15', '1', 'BRI CAB.WA', 'MAKKITA');
INSERT INTO `data_pasien` VALUES (49, 'HALIM SAID', 1, '1984-08-04', '1', 'KTR POS TI', 'LING.LIMBORO');
INSERT INTO `data_pasien` VALUES (50, 'KALUDDIN SIANTURI', 1, '1984-01-15', '1', 'KTR POS DO', 'JL.SISINGAMANGARAJA NO.60');
INSERT INTO `data_pasien` VALUES (51, 'ALWI', 1, '1984-12-31', '1', 'BRI CABANG', 'DSN TOBUNNE');
INSERT INTO `data_pasien` VALUES (52, 'MUH.DJAMIL', 1, '1984-04-14', '1', 'BTPN WATAM', 'JL.SUNGAI MUSI');
INSERT INTO `data_pasien` VALUES (53, 'HAMZAH', 1, '1984-12-31', '1', 'KTR POS PI', 'JL MONGINSIDI RT/RW 001/002');
INSERT INTO `data_pasien` VALUES (54, 'ZAINUDDIN', 1, '1984-12-31', '1', 'KTR POS WA', 'KARITOR POS WATAMPONE RK 02/04');
INSERT INTO `data_pasien` VALUES (55, 'MUSLIMIN.K', 1, '1984-12-31', '1', 'KPP CAKKE', 'SOSSOK');
INSERT INTO `data_pasien` VALUES (56, 'MAPPIARE', 1, '1984-12-31', '1', 'KPP TANAHB', 'TANH BERU BULUKUMBA');
INSERT INTO `data_pasien` VALUES (57, 'BONIFACIUS SILALAHI', 1, '1984-12-31', '1', 'KTR POS PA', 'JL SRIKI 4');
INSERT INTO `data_pasien` VALUES (58, 'JOSIA SINAGA', 1, '1984-12-31', '1', 'KTR POS TI', 'DESA');
INSERT INTO `data_pasien` VALUES (59, 'MALOON SARAGIH', 1, '1984-12-31', '1', 'BTPN PEMAT', 'DS.PEM PANOMBEAN  KEC.PANOMBEA');
INSERT INTO `data_pasien` VALUES (60, 'HASAN PURBA', 1, '1984-12-31', '1', 'PT. POSIND', 'JL.LANCANG KUNING RT/RW.01-06');
INSERT INTO `data_pasien` VALUES (61, 'Hj. A.PALLOGE.', 1, '1984-09-15', '1', 'BTPN WATAM', 'JL. G.SEMERU');
INSERT INTO `data_pasien` VALUES (62, 'SARAMBOWO TELAUMBANU', 1, '1984-05-21', '1', 'BTPN KCP G', 'DESA SIFALAETU ULU');
INSERT INTO `data_pasien` VALUES (63, 'USMAN ADAM', 1, '1984-12-31', '1', 'KANTOR POS', 'JL.BATUA RAYA  9 NO.20 A');
INSERT INTO `data_pasien` VALUES (64, 'MAAMOEN DAENG MATTIR', 1, '1984-12-01', '1', 'BTPN BAWAK', 'JL.SUNGAI CENRANA NO.30 RT.003');
INSERT INTO `data_pasien` VALUES (65, 'ABD.RAHIM', 1, '1984-12-31', '1', 'KTR POS SI', 'LK.I PAJALELE KEL.PAJALELE KEC');
INSERT INTO `data_pasien` VALUES (66, 'DANIEL TANA', 1, '1984-12-05', '1', 'KPP MAKASS', 'JL.TANJUNG PATTIRO NO.50 RT.00');
INSERT INTO `data_pasien` VALUES (67, 'PUNAI BAWAMENEI', 1, '1984-12-31', '1', 'BTPN KCP G', 'JL.KARET Gg.IV LINGK VI');
INSERT INTO `data_pasien` VALUES (68, 'R. U DJAENUDIN', 1, '1984-08-15', '1', 'KTR.POS KU', 'DUSUN PUHUN RT 13/03');
INSERT INTO `data_pasien` VALUES (69, 'JOHANIS POLUAN', 1, '1972-03-29', '1', 'KPRK SUBAN', 'JL.D.I. PANJAITAN NO.6 RT.26/1');
INSERT INTO `data_pasien` VALUES (70, 'HAJI ABD.HAFID', 1, '1984-12-31', '1', 'BRI CAB.A.', 'BTN MINASA UPA BLOK H3 NO.16 M');
INSERT INTO `data_pasien` VALUES (71, 'MAKASOLANG', 1, '1984-12-31', '1', 'KPP SINJAI', 'MANGOTTONG');
INSERT INTO `data_pasien` VALUES (72, 'DECIUS LAKTO', 1, '1984-12-31', '1', 'KANTOR POS', 'ASPOL TELLO BARU KEL PANAIKANG');
INSERT INTO `data_pasien` VALUES (73, 'MAHMUD BEN ABD. BOSA', 1, '1984-12-31', '1', 'KTR POS GU', 'JL. BANGAU 136 WEK.V KEL.');
INSERT INTO `data_pasien` VALUES (74, 'BALASIUS MUNNI', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL. SABUTUNG LR.176/05 RT.003 ');
INSERT INTO `data_pasien` VALUES (75, 'ATMOPAWIRO', 1, '1984-01-01', '1', 'KTR POS MU', 'DSN III DESA SUKAJAYA');
INSERT INTO `data_pasien` VALUES (76, 'M. SALEH ILYAS', 1, '1984-06-01', '1', 'KTR POS SU', 'JL. MAY. ZEN LR. YADA NO. 39');
INSERT INTO `data_pasien` VALUES (77, 'MUHARRANG', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL.BORONG JAMBU 1/9 KEC. MANGG');
INSERT INTO `data_pasien` VALUES (78, 'BIN DAHA', 1, '1984-12-31', '1', 'KTR POS EN', 'JL J SUDIRMAN KEPPE');
INSERT INTO `data_pasien` VALUES (79, 'DJADIMAN SIMATUPANG', 1, '1984-12-01', '1', 'BRI UNIT S', 'JL SETIABUDI NO 19C DESA');
INSERT INTO `data_pasien` VALUES (80, 'ABDURROZAK B  ABUBAK', 1, '1984-10-16', '1', 'BTPN PLG I', 'JL.ENGGANO RT.10 RW.03 NO.56');
INSERT INTO `data_pasien` VALUES (81, 'ABDUL KARIM', 1, '1984-01-12', '1', 'KANTOR POS', 'JL.G.LOKON NO.1');
INSERT INTO `data_pasien` VALUES (82, 'MUH.SIDIK', 1, '1984-12-12', '1', 'BRI CABANG', 'JL.ABUBAKAR LAMBOGO NO.130 MAK');
INSERT INTO `data_pasien` VALUES (83, 'AHMADAN', 1, '1984-10-05', '1', 'BRI UNIT B', 'JL. PANCA USAHA NO. 2562 RT. 5');
INSERT INTO `data_pasien` VALUES (84, 'MUSTAFA SELLE', 1, '1984-07-03', '1', 'BRI CAB.A.', 'JL. TOA DAENG 4 NO.7 CAMBAJAWA');
INSERT INTO `data_pasien` VALUES (85, 'J BONGA', 1, '1984-12-31', '1', 'BTPN KCP A', 'JLBILAWAIYA');
INSERT INTO `data_pasien` VALUES (86, 'SAMAILA', 1, '1984-12-31', '1', 'KANTOR POS', 'JL. SOPPENG BLOK I NO. 252 BUM');
INSERT INTO `data_pasien` VALUES (87, 'NANING SALEH', 1, '1984-08-12', '1', 'BRI PALEMB', 'JL.LAPANGAN HATTA RT.03/01 NO.');
INSERT INTO `data_pasien` VALUES (88, 'LA BADA', 1, '1984-12-31', '1', 'KPP CAKKE', 'RANTE PADANG');
INSERT INTO `data_pasien` VALUES (89, 'ABDULLAH ZAID', 1, '1984-05-20', '1', 'KTR POS TG', 'JL IMAM BONJOL GG.SALAK NO. 11');
INSERT INTO `data_pasien` VALUES (90, 'ARSYAD BIN BUR', 1, '1984-12-01', '1', 'BRI UNIT J', 'JL.A.YANI GG UTAMA NO 29 RT.27');
INSERT INTO `data_pasien` VALUES (91, 'M. TOHA ROZAK', 1, '1984-06-06', '1', 'BTPN PLG I', 'JL.DARMAPALA RT.49 RW.15');
INSERT INTO `data_pasien` VALUES (92, 'SAEDI', 1, '1984-12-31', '1', 'KPP MAKASS', 'JL PELITA RAYA LR.I NO.9 RT.C ');
INSERT INTO `data_pasien` VALUES (93, 'M YUSUF JAMIN', 1, '1984-12-01', '1', 'BTPN PONTI', 'JL.BUDI UTOMO KOMP.PURNAJAYA I');
INSERT INTO `data_pasien` VALUES (94, 'MUCH SAREA', 1, '1984-12-31', '1', 'BRI CABANG', 'JL.MUH.JUFRI 3 NO.8 RAPPOJAWA ');
INSERT INTO `data_pasien` VALUES (95, 'SYAMSU BASRI', 1, '1984-12-31', '1', 'BTPN BAWAK', 'JL.MENTIMUN LR.2 NO.11 L RT.00');
INSERT INTO `data_pasien` VALUES (96, 'MANSYUR DANI', 1, '1984-02-24', '1', 'KTR POS LE', 'JL. SERSAN KKO BADARUDDIN KOMP');
INSERT INTO `data_pasien` VALUES (97, 'USMAN SIGA', 1, '1984-12-01', '1', 'BRI CAB.A.', 'BTN MINASAUPA BLOK F8/23');
INSERT INTO `data_pasien` VALUES (98, 'AMBO TUWO', 1, '1984-12-31', '1', 'BTPN BANTA', 'JL.PAHLAWAN NO.2');
INSERT INTO `data_pasien` VALUES (99, 'JANDU', 1, '1984-12-01', '1', 'BTPN SUNGG', 'KOMP. HASANUDDIN BLOK C NO.50 ');
INSERT INTO `data_pasien` VALUES (100, 'LUMONA JAN FERDINAND', 1, '1984-10-18', '1', 'BRI CABANG', 'PERUM GRIYA PANIKI INDAH JL.BO');
INSERT INTO `data_pasien` VALUES (101, 'BOSODING', 1, '1984-12-31', '1', 'BTPN BAWAK', 'LIANGA');
INSERT INTO `data_pasien` VALUES (102, 'RATIM', 1, '1984-12-31', '1', 'KTR.POS.EX', 'JL.ALUMINIUM I NO 2 LK XV GG H');
INSERT INTO `data_pasien` VALUES (103, 'LIMIN BIN SAIBIN', 2, '1985-11-02', '1', 'BTPN CAB B', 'KP.RENGAS BANDUNG RT.01/03');
INSERT INTO `data_pasien` VALUES (104, 'SURATNO', 2, '1979-08-14', '1', 'KPTB DEPOK', 'KOMP.RRI CIMANGGIS NO.24 RT.3/');
INSERT INTO `data_pasien` VALUES (105, 'DJUDI BIN SAMSI', 2, '1979-01-05', '1', 'KPTB DEPOK', 'KOMP.RRI CIMANGGIS RT.01/01');
INSERT INTO `data_pasien` VALUES (106, 'SURYO MULYODIHARJO', 2, '1979-07-09', '1', 'KPTB PERUM', 'JL.SEMANGKA IX NO.247 RT.03/02');
INSERT INTO `data_pasien` VALUES (107, 'I  MACHMUD', 2, '1979-03-29', '1', 'BTPN CAB B', 'JL.BOROBUDUR RAYA E.3/18 RT.05');
INSERT INTO `data_pasien` VALUES (108, 'ABD DJALIL', 2, '1989-11-21', '1', 'KPB I DEPO', 'KOMP.PELNI E/II/9 RT3/18');
INSERT INTO `data_pasien` VALUES (109, 'W L F SAHANAYA', 2, '1986-08-31', '1', 'KANTOR POS', 'G.NONA / BOLANGI I/2 RT.02/04');
INSERT INTO `data_pasien` VALUES (110, 'SAMNANI', 2, '1988-05-30', '1', 'KPP  PADAL', 'KP/DESA CIMERANG  RT.3/6');
INSERT INTO `data_pasien` VALUES (111, 'SUWANGTO', 2, '1979-01-05', '1', 'KPTB DEPOK', 'JL.KEDONDONG RAYA RT.09/02 NO.');
INSERT INTO `data_pasien` VALUES (112, 'AHMAD', 2, '1981-04-08', '1', 'KTR POS KA', 'JL.BAYUR RT.2 RW.I DS.PANTAI U');
INSERT INTO `data_pasien` VALUES (113, 'SAMIT KURDI', 2, '1980-04-01', '1', 'KPP CIKARA', 'KP.CABANG RT.01/06');
INSERT INTO `data_pasien` VALUES (114, 'ABUBAKAR', 2, '1985-08-22', '1', 'KP BEKASI', 'JL.CEMARA III BLOK F RT.07/013');
INSERT INTO `data_pasien` VALUES (115, 'KICIL SIMAMORA', 2, '1979-05-01', '1', 'KTR POS BA', 'DESA.');
INSERT INTO `data_pasien` VALUES (116, 'Ir. NOURDIANSYAH', 2, '1984-10-19', '1', 'BRI UNIT  ', 'JL.NENAS VI/125  RT.3/3');
INSERT INTO `data_pasien` VALUES (117, 'KEMIS MISLIN', 2, '1980-06-26', '1', 'KTR POS PU', 'DSN II DS.MANIS');
INSERT INTO `data_pasien` VALUES (118, 'SAMIN SALIM', 2, '1983-08-05', '1', 'BRI CABANG', 'BUMI MUTIARA BLOK JI3 NO.5');
INSERT INTO `data_pasien` VALUES (119, 'THOBIAS NGAMEL', 2, '1987-12-21', '1', 'BRI CABANG', 'LETVUAN');
INSERT INTO `data_pasien` VALUES (120, 'ANTONI BA.', 2, '1979-01-13', '1', 'BTPN CABAN', 'JL. WARU JAYA I RT 06 RW 012');
INSERT INTO `data_pasien` VALUES (121, 'SIMIN', 2, '1982-01-01', '1', 'KPB I DEPO', 'KP SIDAMUKTI RT.005/021');
INSERT INTO `data_pasien` VALUES (122, 'M KUSNAN', 2, '1986-03-01', '1', 'BTPN CAB B', 'JL.P.YAPEN 8/307 RT.07/08');
INSERT INTO `data_pasien` VALUES (123, 'ASMIN BUSTAMIN', 2, '1980-07-28', '1', 'KP BEKASI', 'JL BAMBURUNCING NO 18 RT5/7');
INSERT INTO `data_pasien` VALUES (124, 'KOMARUDIN', 2, '1981-10-15', '1', 'KPP  TANJU', 'KP CEURI RT.01/01');
INSERT INTO `data_pasien` VALUES (125, 'KEMANDJAS BA.', 2, '1987-10-23', '1', 'KPB I DEPO', 'JL.CAKALELE 5/41 RT.06/11');
INSERT INTO `data_pasien` VALUES (126, 'AMAN LUBIS', 2, '1982-05-04', '1', 'BRI BEKASI', 'KOMP.DEPNAKER NO.17 RT.011/05 ');
INSERT INTO `data_pasien` VALUES (127, 'SOEDARNO SH.', 2, '1980-04-28', '1', 'BRI BEKASI', 'JL.P.JAWA RAYA 82 PERUMNAS III');
INSERT INTO `data_pasien` VALUES (128, 'MUSIRANTO BIN NITIPA', 2, '1982-07-28', '1', 'BTPN CAB B', 'KP. TELUK BUYUNG RT. 001/002');
INSERT INTO `data_pasien` VALUES (129, 'EKO WIJONO BIN TJERM', 2, '1985-07-30', '1', 'BTPN CABAN', 'JL.WIJAYA KUSUMA RAYA NO.5 RT.');
INSERT INTO `data_pasien` VALUES (130, 'TUMIRAN II S.Pd', 2, '1980-10-04', '1', 'KTR POS LU', 'DUSUN SETIA BUDI');
INSERT INTO `data_pasien` VALUES (131, 'WASTAM HASAN', 2, '1979-07-06', '1', 'BTPN CAB B', 'KP. PASAR RT. 03/02');
INSERT INTO `data_pasien` VALUES (132, 'KORIN', 2, '1983-12-01', '1', 'BTPN CAB B', 'JL.P.HALMAHERA 9 TIMUR NO.32 R');
INSERT INTO `data_pasien` VALUES (133, 'RACHMAD SIDARTO', 2, '1992-09-05', '1', 'BRI PDGD K', 'PATRIA JAYA BLOK A5 NO.85 RT.0');
INSERT INTO `data_pasien` VALUES (134, 'ACHMAN', 2, '1980-12-10', '1', 'BRI  UNIT ', 'JL.JURAGAN SINDA III RT6/1  NO');
INSERT INTO `data_pasien` VALUES (135, 'S SOETRISNO', 2, '1980-07-20', '1', 'BTPN CAB B', 'KRANGGAN PASAR NO.15 RT.03/02');
INSERT INTO `data_pasien` VALUES (136, 'M  DJAROT', 2, '1981-10-19', '1', 'BTPN CAB B', 'JL.P.BIAK IX/232 RT.007/018   ');
INSERT INTO `data_pasien` VALUES (137, 'BONIRIN', 2, '1979-04-16', '1', 'BTPN CAB B', 'TMN.WISMA ASRI CC 35 NO.14 RT.');
INSERT INTO `data_pasien` VALUES (138, 'T U H I', 2, '1985-03-23', '1', 'KPB I DEPO', 'JL.PAJAGA III/102 RT.03/13');
INSERT INTO `data_pasien` VALUES (139, 'SUMARDI', 2, '1985-06-26', '1', 'KP BEKASI', 'JL.DARMAJAYA IV RT.1/2 DS III ');
INSERT INTO `data_pasien` VALUES (140, 'MOTTO.', 2, '1984-09-05', '1', 'KANTOR POS', 'JL. TODOPULLI 21 NO.159');
INSERT INTO `data_pasien` VALUES (141, 'POLIPUS TANGKE', 2, '1984-09-17', '1', 'BRI CAB MA', 'MANDETEK');
INSERT INTO `data_pasien` VALUES (142, 'TONO NGADONO', 2, '1982-06-07', '1', 'BTPN CABAN', 'DSN JADIMULYA RT.04/08');
INSERT INTO `data_pasien` VALUES (143, 'HM AZHARI', 2, '1979-05-09', '1', 'KPP CIKARA', 'KAMP/GEDUNG GEDE RT.06/02');
INSERT INTO `data_pasien` VALUES (144, 'ELIAKIM HAREFA', 2, '1979-05-30', '1', 'KP BEKASI', 'JL.CIRATA BLOK DB/23 RT.2/12');
INSERT INTO `data_pasien` VALUES (145, 'SU\'AIB BIN KETJIL', 2, '1980-07-26', '1', 'BRI BEKASI', 'KP.PENGASINGAN RT.04/28');
INSERT INTO `data_pasien` VALUES (146, 'SAKIB', 2, '1981-10-01', '1', 'KPP  LEMBA', 'KP PONDOK BUAH BATU RT.4/9');
INSERT INTO `data_pasien` VALUES (147, 'MASDUKI', 2, '1979-08-28', '1', 'KPP CIKARA', 'KP.KAUM KALIJERUK RT.02/05');
INSERT INTO `data_pasien` VALUES (148, 'MADSOSIH', 2, '1991-04-05', '1', 'BTPN CABAN', 'KP.BABAKANCIRUMPUT RT1/7');
INSERT INTO `data_pasien` VALUES (149, 'YOYO SEKARTA', 2, '1979-12-13', '1', 'KPRK SUBAN', 'JL.DI PANJAITAN SUKASARI  RT.4');
INSERT INTO `data_pasien` VALUES (150, 'SISWOTO SOEMALI', 2, '1979-01-18', '1', 'KP BEKASI', 'PURA BOJONG GEDE BLOK H9 NO.11');
INSERT INTO `data_pasien` VALUES (151, 'SUDIRDJAN', 2, '1981-03-10', '1', 'BRI BEKASI', 'TMN.WISMA ASRI AA.10/83 RT.0/2');

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
  `id_obat` int(5) NULL DEFAULT NULL,
  `qty` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, 1, '2019-06-10', 1, 1, 1, 5);

SET FOREIGN_KEY_CHECKS = 1;
