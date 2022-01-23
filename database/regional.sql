/*
 Navicat Premium Data Transfer

 Source Server         : DPT ONLINE
 Source Server Type    : PostgreSQL
 Source Server Version : 100019
 Source Host           : 193.111.124.82:999
 Source Catalog        : si_phln
 Source Schema         : regional

 Target Server Type    : PostgreSQL
 Target Server Version : 100019
 File Encoding         : 65001

 Date: 23/01/2022 18:05:18
*/


-- ----------------------------
-- Sequence structure for kabupaten_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "regional"."kabupaten_id_seq";
CREATE SEQUENCE "regional"."kabupaten_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for provinsi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "regional"."provinsi_id_seq";
CREATE SEQUENCE "regional"."provinsi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for kabupaten
-- ----------------------------
DROP TABLE IF EXISTS "regional"."kabupaten";
CREATE TABLE "regional"."kabupaten" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "id_prov" varchar(2) COLLATE "pg_catalog"."default",
  "id_kab" varchar(2) COLLATE "pg_catalog"."default",
  "nm_kab" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kabupaten
-- ----------------------------
INSERT INTO "regional"."kabupaten" VALUES (1, '11', '01', 'Kab. Aceh Selatan');
INSERT INTO "regional"."kabupaten" VALUES (2, '11', '02', 'KAB. ACEH TENGGARA');
INSERT INTO "regional"."kabupaten" VALUES (3, '11', '03', 'KAB. ACEH TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (4, '11', '04', 'KAB. ACEH TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (5, '11', '05', 'KAB. ACEH BARAT');
INSERT INTO "regional"."kabupaten" VALUES (6, '11', '06', 'KAB. ACEH BESAR');
INSERT INTO "regional"."kabupaten" VALUES (7, '11', '07', 'KAB. PIDIE');
INSERT INTO "regional"."kabupaten" VALUES (8, '11', '08', 'KAB. ACEH UTARA');
INSERT INTO "regional"."kabupaten" VALUES (9, '11', '09', 'KAB. SIMEULUE');
INSERT INTO "regional"."kabupaten" VALUES (10, '11', '10', 'KAB. ACEH SINGKIL');
INSERT INTO "regional"."kabupaten" VALUES (11, '11', '11', 'KAB. BIREUEN');
INSERT INTO "regional"."kabupaten" VALUES (12, '11', '12', 'KAB. ACEH BARAT DAYA');
INSERT INTO "regional"."kabupaten" VALUES (13, '11', '13', 'KAB. GAYO LUES');
INSERT INTO "regional"."kabupaten" VALUES (14, '11', '14', 'KAB. ACEH JAYA');
INSERT INTO "regional"."kabupaten" VALUES (15, '11', '15', 'KAB. NAGAN RAYA');
INSERT INTO "regional"."kabupaten" VALUES (16, '11', '16', 'KAB. ACEH TAMIANG');
INSERT INTO "regional"."kabupaten" VALUES (17, '11', '17', 'KAB. BENER MERIAH');
INSERT INTO "regional"."kabupaten" VALUES (18, '11', '18', 'KAB. PIDIE JAYA');
INSERT INTO "regional"."kabupaten" VALUES (19, '11', '71', 'KOTA BANDA ACEH');
INSERT INTO "regional"."kabupaten" VALUES (20, '11', '72', 'KOTA SABANG');
INSERT INTO "regional"."kabupaten" VALUES (21, '11', '73', 'KOTA LHOKSEUMAWE');
INSERT INTO "regional"."kabupaten" VALUES (22, '11', '74', 'KOTA LANGSA');
INSERT INTO "regional"."kabupaten" VALUES (23, '11', '75', 'KOTA SUBULUSSALAM');
INSERT INTO "regional"."kabupaten" VALUES (24, '12', '01', 'KAB. TAPANULI TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (25, '12', '02', 'KAB. TAPANULI UTARA');
INSERT INTO "regional"."kabupaten" VALUES (26, '12', '03', 'KAB. TAPANULI SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (27, '12', '04', 'KAB. NIAS');
INSERT INTO "regional"."kabupaten" VALUES (28, '12', '05', 'KAB. LANGKAT');
INSERT INTO "regional"."kabupaten" VALUES (29, '12', '06', 'KAB. KARO');
INSERT INTO "regional"."kabupaten" VALUES (30, '12', '07', 'KAB. DELI SERDANG');
INSERT INTO "regional"."kabupaten" VALUES (31, '12', '08', 'KAB. SIMALUNGUN');
INSERT INTO "regional"."kabupaten" VALUES (32, '12', '09', 'KAB. ASAHAN');
INSERT INTO "regional"."kabupaten" VALUES (33, '12', '10', 'KAB. LABUHANBATU');
INSERT INTO "regional"."kabupaten" VALUES (34, '12', '11', 'KAB. DAIRI');
INSERT INTO "regional"."kabupaten" VALUES (35, '12', '12', 'KAB. TOBA SAMOSIR');
INSERT INTO "regional"."kabupaten" VALUES (36, '12', '13', 'KAB. MANDAILING NATAL');
INSERT INTO "regional"."kabupaten" VALUES (37, '12', '14', 'KAB. NIAS SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (38, '12', '15', 'KAB. PAKPAK BHARAT');
INSERT INTO "regional"."kabupaten" VALUES (39, '12', '16', 'KAB. HUMBANG HASUNDUTAN');
INSERT INTO "regional"."kabupaten" VALUES (40, '12', '17', 'KAB. SAMOSIR');
INSERT INTO "regional"."kabupaten" VALUES (41, '12', '18', 'KAB. SERDANG BEDAGAI');
INSERT INTO "regional"."kabupaten" VALUES (42, '12', '19', 'KAB. BATU BARA');
INSERT INTO "regional"."kabupaten" VALUES (43, '12', '20', 'KAB. PADANG LAWAS UTARA');
INSERT INTO "regional"."kabupaten" VALUES (44, '12', '21', 'KAB. PADANG LAWAS');
INSERT INTO "regional"."kabupaten" VALUES (45, '12', '22', 'KAB. LABUHANBATU SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (46, '12', '23', 'KAB. LABUHANBATU UTARA');
INSERT INTO "regional"."kabupaten" VALUES (47, '12', '24', 'KAB. NIAS UTARA');
INSERT INTO "regional"."kabupaten" VALUES (48, '12', '25', 'KAB. NIAS BARAT');
INSERT INTO "regional"."kabupaten" VALUES (49, '12', '71', 'KOTA MEDAN');
INSERT INTO "regional"."kabupaten" VALUES (50, '12', '72', 'KOTA PEMATANGSIANTAR');
INSERT INTO "regional"."kabupaten" VALUES (51, '12', '73', 'KOTA SIBOLGA');
INSERT INTO "regional"."kabupaten" VALUES (52, '12', '74', 'KOTA TANJUNG BALAI');
INSERT INTO "regional"."kabupaten" VALUES (53, '12', '75', 'KOTA BINJAI');
INSERT INTO "regional"."kabupaten" VALUES (54, '12', '76', 'KOTA TEBING TINGGI');
INSERT INTO "regional"."kabupaten" VALUES (55, '12', '77', 'KOTA PADANGSIDIMPUAN');
INSERT INTO "regional"."kabupaten" VALUES (56, '12', '78', 'KOTA GUNUNGSITOLI');
INSERT INTO "regional"."kabupaten" VALUES (57, '13', '01', 'KAB. PESISIR SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (58, '13', '02', 'KAB. SOLOK');
INSERT INTO "regional"."kabupaten" VALUES (59, '13', '03', 'KAB. SIJUNJUNG');
INSERT INTO "regional"."kabupaten" VALUES (60, '13', '04', 'KAB. TANAH DATAR');
INSERT INTO "regional"."kabupaten" VALUES (61, '13', '05', 'KAB. PADANG PARIAMAN');
INSERT INTO "regional"."kabupaten" VALUES (62, '13', '06', 'KAB. AGAM');
INSERT INTO "regional"."kabupaten" VALUES (63, '13', '07', 'KAB. LIMA PULUH KOTA');
INSERT INTO "regional"."kabupaten" VALUES (64, '13', '08', 'KAB. PASAMAN');
INSERT INTO "regional"."kabupaten" VALUES (65, '13', '09', 'KAB. KEPULAUAN MENTAWAI');
INSERT INTO "regional"."kabupaten" VALUES (66, '13', '10', 'KAB. DHARMASRAYA');
INSERT INTO "regional"."kabupaten" VALUES (67, '13', '11', 'KAB. SOLOK SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (68, '13', '12', 'KAB. PASAMAN BARAT');
INSERT INTO "regional"."kabupaten" VALUES (69, '13', '71', 'KOTA PADANG');
INSERT INTO "regional"."kabupaten" VALUES (70, '13', '72', 'KOTA SOLOK');
INSERT INTO "regional"."kabupaten" VALUES (71, '13', '73', 'KOTA SAWAHLUNTO');
INSERT INTO "regional"."kabupaten" VALUES (72, '13', '74', 'KOTA PADANG PANJANG');
INSERT INTO "regional"."kabupaten" VALUES (73, '13', '75', 'KOTA BUKITTINGGI');
INSERT INTO "regional"."kabupaten" VALUES (74, '13', '76', 'KOTA PAYAKUMBUH');
INSERT INTO "regional"."kabupaten" VALUES (75, '13', '77', 'KOTA PARIAMAN');
INSERT INTO "regional"."kabupaten" VALUES (76, '14', '01', 'KAB. KAMPAR');
INSERT INTO "regional"."kabupaten" VALUES (77, '14', '02', 'KAB. INDRAGIRI HULU');
INSERT INTO "regional"."kabupaten" VALUES (78, '14', '03', 'KAB. BENGKALIS');
INSERT INTO "regional"."kabupaten" VALUES (79, '14', '04', 'KAB. INDRAGIRI HILIR');
INSERT INTO "regional"."kabupaten" VALUES (80, '14', '05', 'KAB. PELALAWAN');
INSERT INTO "regional"."kabupaten" VALUES (81, '14', '06', 'KAB. ROKAN HULU');
INSERT INTO "regional"."kabupaten" VALUES (82, '14', '07', 'KAB. ROKAN HILIR');
INSERT INTO "regional"."kabupaten" VALUES (83, '14', '08', 'KAB. SIAK');
INSERT INTO "regional"."kabupaten" VALUES (84, '14', '09', 'KAB. KUANTAN SINGINGI');
INSERT INTO "regional"."kabupaten" VALUES (85, '14', '10', 'KAB. KEPULAUAN MERANTI');
INSERT INTO "regional"."kabupaten" VALUES (86, '14', '71', 'KOTA PEKANBARU');
INSERT INTO "regional"."kabupaten" VALUES (87, '14', '72', 'KOTA DUMAI');
INSERT INTO "regional"."kabupaten" VALUES (88, '15', '01', 'KAB. KERINCI');
INSERT INTO "regional"."kabupaten" VALUES (89, '15', '02', 'KAB. MERANGIN');
INSERT INTO "regional"."kabupaten" VALUES (90, '15', '03', 'KAB. SAROLANGUN');
INSERT INTO "regional"."kabupaten" VALUES (91, '15', '04', 'KAB. BATANGHARI');
INSERT INTO "regional"."kabupaten" VALUES (92, '15', '05', 'KAB. MUARO JAMBI');
INSERT INTO "regional"."kabupaten" VALUES (93, '15', '06', 'KAB. TANJUNG JABUNG BARAT');
INSERT INTO "regional"."kabupaten" VALUES (94, '15', '07', 'KAB. TANJUNG JABUNG TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (95, '15', '08', 'KAB. BUNGO');
INSERT INTO "regional"."kabupaten" VALUES (96, '15', '09', 'KAB. TEBO');
INSERT INTO "regional"."kabupaten" VALUES (97, '15', '71', 'KOTA JAMBI');
INSERT INTO "regional"."kabupaten" VALUES (98, '15', '72', 'KOTA SUNGAI PENUH');
INSERT INTO "regional"."kabupaten" VALUES (99, '16', '01', 'KAB. OGAN KOMERING ULU');
INSERT INTO "regional"."kabupaten" VALUES (100, '16', '02', 'KAB. OGAN KOMERING ILIR');
INSERT INTO "regional"."kabupaten" VALUES (101, '16', '03', 'KAB. MUARA ENIM');
INSERT INTO "regional"."kabupaten" VALUES (102, '16', '04', 'KAB. LAHAT');
INSERT INTO "regional"."kabupaten" VALUES (103, '16', '05', 'KAB. MUSI RAWAS');
INSERT INTO "regional"."kabupaten" VALUES (104, '16', '06', 'KAB. MUSI BANYUASIN');
INSERT INTO "regional"."kabupaten" VALUES (105, '16', '07', 'KAB. BANYUASIN');
INSERT INTO "regional"."kabupaten" VALUES (106, '16', '08', 'KAB. OGAN KOMERING ULU TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (107, '16', '09', 'KAB. OGAN KOMERING ULU SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (108, '16', '10', 'KAB. OGAN ILIR');
INSERT INTO "regional"."kabupaten" VALUES (109, '16', '11', 'KAB. EMPAT LAWANG');
INSERT INTO "regional"."kabupaten" VALUES (110, '16', '12', 'KAB. PENUKAL ABAB LEMATANG ILIR');
INSERT INTO "regional"."kabupaten" VALUES (111, '16', '13', 'KAB. MUSI RAWAS UTARA');
INSERT INTO "regional"."kabupaten" VALUES (112, '16', '71', 'KOTA PALEMBANG');
INSERT INTO "regional"."kabupaten" VALUES (113, '16', '72', 'KOTA PAGAR ALAM');
INSERT INTO "regional"."kabupaten" VALUES (114, '16', '73', 'KOTA LUBUK LINGGAU');
INSERT INTO "regional"."kabupaten" VALUES (115, '16', '74', 'KOTA PRABUMULIH');
INSERT INTO "regional"."kabupaten" VALUES (116, '17', '01', 'KAB. BENGKULU SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (117, '17', '02', 'KAB. REJANG LEBONG');
INSERT INTO "regional"."kabupaten" VALUES (118, '17', '03', 'KAB. BENGKULU UTARA');
INSERT INTO "regional"."kabupaten" VALUES (119, '17', '04', 'KAB. KAUR');
INSERT INTO "regional"."kabupaten" VALUES (120, '17', '05', 'KAB. SELUMA');
INSERT INTO "regional"."kabupaten" VALUES (121, '17', '06', 'KAB. MUKO MUKO');
INSERT INTO "regional"."kabupaten" VALUES (122, '17', '07', 'KAB. LEBONG');
INSERT INTO "regional"."kabupaten" VALUES (123, '17', '08', 'KAB. KEPAHIANG');
INSERT INTO "regional"."kabupaten" VALUES (124, '17', '09', 'KAB. BENGKULU TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (125, '17', '71', 'KOTA BENGKULU');
INSERT INTO "regional"."kabupaten" VALUES (126, '18', '01', 'KAB. LAMPUNG SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (127, '18', '02', 'KAB. LAMPUNG TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (128, '18', '03', 'KAB. LAMPUNG UTARA');
INSERT INTO "regional"."kabupaten" VALUES (129, '18', '04', 'KAB. LAMPUNG BARAT');
INSERT INTO "regional"."kabupaten" VALUES (130, '18', '05', 'KAB. TULANG BAWANG');
INSERT INTO "regional"."kabupaten" VALUES (131, '18', '06', 'KAB. TANGGAMUS');
INSERT INTO "regional"."kabupaten" VALUES (132, '18', '07', 'KAB. LAMPUNG TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (133, '18', '08', 'KAB. WAY KANAN');
INSERT INTO "regional"."kabupaten" VALUES (134, '18', '09', 'KAB. PESAWARAN');
INSERT INTO "regional"."kabupaten" VALUES (135, '18', '10', 'KAB. PRINGSEWU');
INSERT INTO "regional"."kabupaten" VALUES (136, '18', '11', 'KAB. MESUJI');
INSERT INTO "regional"."kabupaten" VALUES (137, '18', '12', 'KAB. TULANG BAWANG BARAT');
INSERT INTO "regional"."kabupaten" VALUES (138, '18', '13', 'KAB. PESISIR BARAT');
INSERT INTO "regional"."kabupaten" VALUES (139, '18', '71', 'KOTA BANDAR LAMPUNG');
INSERT INTO "regional"."kabupaten" VALUES (140, '18', '72', 'KOTA METRO');
INSERT INTO "regional"."kabupaten" VALUES (141, '19', '01', 'KAB. BANGKA');
INSERT INTO "regional"."kabupaten" VALUES (142, '19', '02', 'KAB. BELITUNG');
INSERT INTO "regional"."kabupaten" VALUES (143, '19', '03', 'KAB. BANGKA SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (144, '19', '04', 'KAB. BANGKA TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (145, '19', '05', 'KAB. BANGKA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (146, '19', '06', 'KAB. BELITUNG TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (147, '19', '71', 'KOTA PANGKAL PINANG');
INSERT INTO "regional"."kabupaten" VALUES (148, '21', '01', 'KAB. BINTAN');
INSERT INTO "regional"."kabupaten" VALUES (149, '21', '02', 'KAB. KARIMUN');
INSERT INTO "regional"."kabupaten" VALUES (150, '21', '03', 'KAB. NATUNA');
INSERT INTO "regional"."kabupaten" VALUES (151, '21', '04', 'KAB. LINGGA');
INSERT INTO "regional"."kabupaten" VALUES (152, '21', '05', 'KAB. KEPULAUAN ANAMBAS');
INSERT INTO "regional"."kabupaten" VALUES (153, '21', '71', 'KOTA BATAM');
INSERT INTO "regional"."kabupaten" VALUES (154, '21', '72', 'KOTA TANJUNG PINANG');
INSERT INTO "regional"."kabupaten" VALUES (155, '31', '01', 'KAB. ADM. KEP. SERIBU');
INSERT INTO "regional"."kabupaten" VALUES (156, '31', '71', 'KOTA ADM. JAKARTA PUSAT');
INSERT INTO "regional"."kabupaten" VALUES (157, '31', '72', 'KOTA ADM. JAKARTA UTARA');
INSERT INTO "regional"."kabupaten" VALUES (158, '31', '73', 'KOTA ADM. JAKARTA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (159, '31', '74', 'KOTA ADM. JAKARTA SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (160, '31', '75', 'KOTA ADM. JAKARTA TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (161, '32', '01', 'KAB. BOGOR');
INSERT INTO "regional"."kabupaten" VALUES (162, '32', '02', 'KAB. SUKABUMI');
INSERT INTO "regional"."kabupaten" VALUES (163, '32', '03', 'KAB. CIANJUR');
INSERT INTO "regional"."kabupaten" VALUES (164, '32', '04', 'KAB. BANDUNG');
INSERT INTO "regional"."kabupaten" VALUES (165, '32', '05', 'KAB. GARUT');
INSERT INTO "regional"."kabupaten" VALUES (166, '32', '06', 'KAB. TASIKMALAYA');
INSERT INTO "regional"."kabupaten" VALUES (167, '32', '07', 'KAB. CIAMIS');
INSERT INTO "regional"."kabupaten" VALUES (168, '32', '08', 'KAB. KUNINGAN');
INSERT INTO "regional"."kabupaten" VALUES (169, '32', '09', 'KAB. CIREBON');
INSERT INTO "regional"."kabupaten" VALUES (170, '32', '10', 'KAB. MAJALENGKA');
INSERT INTO "regional"."kabupaten" VALUES (171, '32', '11', 'KAB. SUMEDANG');
INSERT INTO "regional"."kabupaten" VALUES (172, '32', '12', 'KAB. INDRAMAYU');
INSERT INTO "regional"."kabupaten" VALUES (173, '32', '13', 'KAB. SUBANG');
INSERT INTO "regional"."kabupaten" VALUES (174, '32', '14', 'KAB. PURWAKARTA');
INSERT INTO "regional"."kabupaten" VALUES (175, '32', '15', 'KAB. KARAWANG');
INSERT INTO "regional"."kabupaten" VALUES (176, '32', '16', 'KAB. BEKASI');
INSERT INTO "regional"."kabupaten" VALUES (177, '32', '17', 'KAB. BANDUNG BARAT');
INSERT INTO "regional"."kabupaten" VALUES (178, '32', '18', 'KAB. PANGANDARAN');
INSERT INTO "regional"."kabupaten" VALUES (179, '32', '71', 'KOTA BOGOR');
INSERT INTO "regional"."kabupaten" VALUES (180, '32', '72', 'KOTA SUKABUMI');
INSERT INTO "regional"."kabupaten" VALUES (181, '32', '73', 'KOTA BANDUNG');
INSERT INTO "regional"."kabupaten" VALUES (182, '32', '74', 'KOTA CIREBON');
INSERT INTO "regional"."kabupaten" VALUES (183, '32', '75', 'KOTA BEKASI');
INSERT INTO "regional"."kabupaten" VALUES (184, '32', '76', 'KOTA DEPOK');
INSERT INTO "regional"."kabupaten" VALUES (185, '32', '77', 'KOTA CIMAHI');
INSERT INTO "regional"."kabupaten" VALUES (186, '32', '78', 'KOTA TASIKMALAYA');
INSERT INTO "regional"."kabupaten" VALUES (187, '32', '79', 'KOTA BANJAR');
INSERT INTO "regional"."kabupaten" VALUES (188, '33', '01', 'KAB. CILACAP');
INSERT INTO "regional"."kabupaten" VALUES (189, '33', '02', 'KAB. BANYUMAS');
INSERT INTO "regional"."kabupaten" VALUES (190, '33', '03', 'KAB. PURBALINGGA');
INSERT INTO "regional"."kabupaten" VALUES (191, '33', '04', 'KAB. BANJARNEGARA');
INSERT INTO "regional"."kabupaten" VALUES (192, '33', '05', 'KAB. KEBUMEN');
INSERT INTO "regional"."kabupaten" VALUES (193, '33', '06', 'KAB. PURWOREJO');
INSERT INTO "regional"."kabupaten" VALUES (194, '33', '07', 'KAB. WONOSOBO');
INSERT INTO "regional"."kabupaten" VALUES (195, '33', '08', 'KAB. MAGELANG');
INSERT INTO "regional"."kabupaten" VALUES (196, '33', '09', 'KAB. BOYOLALI');
INSERT INTO "regional"."kabupaten" VALUES (197, '33', '10', 'KAB. KLATEN');
INSERT INTO "regional"."kabupaten" VALUES (198, '33', '11', 'KAB. SUKOHARJO');
INSERT INTO "regional"."kabupaten" VALUES (199, '33', '12', 'KAB. WONOGIRI');
INSERT INTO "regional"."kabupaten" VALUES (200, '33', '13', 'KAB. KARANGANYAR');
INSERT INTO "regional"."kabupaten" VALUES (201, '33', '14', 'KAB. SRAGEN');
INSERT INTO "regional"."kabupaten" VALUES (202, '33', '15', 'KAB. GROBOGAN');
INSERT INTO "regional"."kabupaten" VALUES (203, '33', '16', 'KAB. BLORA');
INSERT INTO "regional"."kabupaten" VALUES (204, '33', '17', 'KAB. REMBANG');
INSERT INTO "regional"."kabupaten" VALUES (205, '33', '18', 'KAB. PATI');
INSERT INTO "regional"."kabupaten" VALUES (206, '33', '19', 'KAB. KUDUS');
INSERT INTO "regional"."kabupaten" VALUES (207, '33', '20', 'KAB. JEPARA');
INSERT INTO "regional"."kabupaten" VALUES (208, '33', '21', 'KAB. DEMAK');
INSERT INTO "regional"."kabupaten" VALUES (209, '33', '22', 'KAB. SEMARANG');
INSERT INTO "regional"."kabupaten" VALUES (210, '33', '23', 'KAB. TEMANGGUNG');
INSERT INTO "regional"."kabupaten" VALUES (211, '33', '24', 'KAB. KENDAL');
INSERT INTO "regional"."kabupaten" VALUES (212, '33', '25', 'KAB. BATANG');
INSERT INTO "regional"."kabupaten" VALUES (213, '33', '26', 'KAB. PEKALONGAN');
INSERT INTO "regional"."kabupaten" VALUES (214, '33', '27', 'KAB. PEMALANG');
INSERT INTO "regional"."kabupaten" VALUES (215, '33', '28', 'KAB. TEGAL');
INSERT INTO "regional"."kabupaten" VALUES (216, '33', '29', 'KAB. BREBES');
INSERT INTO "regional"."kabupaten" VALUES (217, '33', '71', 'KOTA MAGELANG');
INSERT INTO "regional"."kabupaten" VALUES (218, '33', '72', 'KOTA SURAKARTA');
INSERT INTO "regional"."kabupaten" VALUES (219, '33', '73', 'KOTA SALATIGA');
INSERT INTO "regional"."kabupaten" VALUES (220, '33', '74', 'KOTA SEMARANG');
INSERT INTO "regional"."kabupaten" VALUES (221, '33', '75', 'KOTA PEKALONGAN');
INSERT INTO "regional"."kabupaten" VALUES (222, '33', '76', 'KOTA TEGAL');
INSERT INTO "regional"."kabupaten" VALUES (223, '34', '01', 'KAB. KULON PROGO');
INSERT INTO "regional"."kabupaten" VALUES (224, '34', '02', 'KAB. BANTUL');
INSERT INTO "regional"."kabupaten" VALUES (225, '34', '03', 'KAB. GUNUNGKIDUL');
INSERT INTO "regional"."kabupaten" VALUES (226, '34', '04', 'KAB. SLEMAN');
INSERT INTO "regional"."kabupaten" VALUES (227, '34', '71', 'KOTA YOGYAKARTA');
INSERT INTO "regional"."kabupaten" VALUES (228, '35', '01', 'KAB. PACITAN');
INSERT INTO "regional"."kabupaten" VALUES (229, '35', '02', 'KAB. PONOROGO');
INSERT INTO "regional"."kabupaten" VALUES (230, '35', '03', 'KAB. TRENGGALEK');
INSERT INTO "regional"."kabupaten" VALUES (231, '35', '04', 'KAB. TULUNGAGUNG');
INSERT INTO "regional"."kabupaten" VALUES (232, '35', '05', 'KAB. BLITAR');
INSERT INTO "regional"."kabupaten" VALUES (233, '35', '06', 'KAB. KEDIRI');
INSERT INTO "regional"."kabupaten" VALUES (234, '35', '07', 'KAB. MALANG');
INSERT INTO "regional"."kabupaten" VALUES (235, '35', '08', 'KAB. LUMAJANG');
INSERT INTO "regional"."kabupaten" VALUES (236, '35', '09', 'KAB. JEMBER');
INSERT INTO "regional"."kabupaten" VALUES (237, '35', '10', 'KAB. BANYUWANGI');
INSERT INTO "regional"."kabupaten" VALUES (238, '35', '11', 'KAB. BONDOWOSO');
INSERT INTO "regional"."kabupaten" VALUES (239, '35', '12', 'KAB. SITUBONDO');
INSERT INTO "regional"."kabupaten" VALUES (240, '35', '13', 'KAB. PROBOLINGGO');
INSERT INTO "regional"."kabupaten" VALUES (241, '35', '14', 'KAB. PASURUAN');
INSERT INTO "regional"."kabupaten" VALUES (242, '35', '15', 'KAB. SIDOARJO');
INSERT INTO "regional"."kabupaten" VALUES (243, '35', '16', 'KAB. MOJOKERTO');
INSERT INTO "regional"."kabupaten" VALUES (244, '35', '17', 'KAB. JOMBANG');
INSERT INTO "regional"."kabupaten" VALUES (245, '35', '18', 'KAB. NGANJUK');
INSERT INTO "regional"."kabupaten" VALUES (246, '35', '19', 'KAB. MADIUN');
INSERT INTO "regional"."kabupaten" VALUES (247, '35', '20', 'KAB. MAGETAN');
INSERT INTO "regional"."kabupaten" VALUES (248, '35', '21', 'KAB. NGAWI');
INSERT INTO "regional"."kabupaten" VALUES (249, '35', '22', 'KAB. BOJONEGORO');
INSERT INTO "regional"."kabupaten" VALUES (250, '35', '23', 'KAB. TUBAN');
INSERT INTO "regional"."kabupaten" VALUES (251, '35', '24', 'KAB. LAMONGAN');
INSERT INTO "regional"."kabupaten" VALUES (252, '35', '25', 'KAB. GRESIK');
INSERT INTO "regional"."kabupaten" VALUES (253, '35', '26', 'KAB. BANGKALAN');
INSERT INTO "regional"."kabupaten" VALUES (254, '35', '27', 'KAB. SAMPANG');
INSERT INTO "regional"."kabupaten" VALUES (255, '35', '28', 'KAB. PAMEKASAN');
INSERT INTO "regional"."kabupaten" VALUES (256, '35', '29', 'KAB. SUMENEP');
INSERT INTO "regional"."kabupaten" VALUES (257, '35', '71', 'KOTA KEDIRI');
INSERT INTO "regional"."kabupaten" VALUES (258, '35', '72', 'KOTA BLITAR');
INSERT INTO "regional"."kabupaten" VALUES (259, '35', '73', 'KOTA MALANG');
INSERT INTO "regional"."kabupaten" VALUES (260, '35', '74', 'KOTA PROBOLINGGO');
INSERT INTO "regional"."kabupaten" VALUES (261, '35', '75', 'KOTA PASURUAN');
INSERT INTO "regional"."kabupaten" VALUES (262, '35', '76', 'KOTA MOJOKERTO');
INSERT INTO "regional"."kabupaten" VALUES (263, '35', '77', 'KOTA MADIUN');
INSERT INTO "regional"."kabupaten" VALUES (264, '35', '78', 'KOTA SURABAYA');
INSERT INTO "regional"."kabupaten" VALUES (265, '35', '79', 'KOTA BATU');
INSERT INTO "regional"."kabupaten" VALUES (266, '36', '01', 'KAB. PANDEGLANG');
INSERT INTO "regional"."kabupaten" VALUES (267, '36', '02', 'KAB. LEBAK');
INSERT INTO "regional"."kabupaten" VALUES (268, '36', '03', 'KAB. TANGERANG');
INSERT INTO "regional"."kabupaten" VALUES (269, '36', '04', 'KAB. SERANG');
INSERT INTO "regional"."kabupaten" VALUES (270, '36', '71', 'KOTA TANGERANG');
INSERT INTO "regional"."kabupaten" VALUES (271, '36', '72', 'KOTA CILEGON');
INSERT INTO "regional"."kabupaten" VALUES (272, '36', '73', 'KOTA SERANG');
INSERT INTO "regional"."kabupaten" VALUES (273, '36', '74', 'KOTA TANGERANG SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (274, '51', '01', 'KAB. JEMBRANA');
INSERT INTO "regional"."kabupaten" VALUES (275, '51', '02', 'KAB. TABANAN');
INSERT INTO "regional"."kabupaten" VALUES (276, '51', '03', 'KAB. BADUNG');
INSERT INTO "regional"."kabupaten" VALUES (277, '51', '04', 'KAB. GIANYAR');
INSERT INTO "regional"."kabupaten" VALUES (278, '51', '05', 'KAB. KLUNGKUNG');
INSERT INTO "regional"."kabupaten" VALUES (279, '51', '06', 'KAB. BANGLI');
INSERT INTO "regional"."kabupaten" VALUES (280, '51', '07', 'KAB. KARANGASEM');
INSERT INTO "regional"."kabupaten" VALUES (281, '51', '08', 'KAB. BULELENG');
INSERT INTO "regional"."kabupaten" VALUES (282, '51', '71', 'KOTA DENPASAR');
INSERT INTO "regional"."kabupaten" VALUES (283, '52', '01', 'KAB. LOMBOK BARAT');
INSERT INTO "regional"."kabupaten" VALUES (284, '52', '02', 'KAB. LOMBOK TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (285, '52', '03', 'KAB. LOMBOK TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (286, '52', '04', 'KAB. SUMBAWA');
INSERT INTO "regional"."kabupaten" VALUES (287, '52', '05', 'KAB. DOMPU');
INSERT INTO "regional"."kabupaten" VALUES (288, '52', '06', 'KAB. BIMA');
INSERT INTO "regional"."kabupaten" VALUES (289, '52', '07', 'KAB. SUMBAWA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (290, '52', '08', 'KAB. LOMBOK UTARA');
INSERT INTO "regional"."kabupaten" VALUES (291, '52', '71', 'KOTA MATARAM');
INSERT INTO "regional"."kabupaten" VALUES (292, '52', '72', 'KOTA BIMA');
INSERT INTO "regional"."kabupaten" VALUES (293, '53', '01', 'KAB. KUPANG');
INSERT INTO "regional"."kabupaten" VALUES (294, '53', '02', 'KAB TIMOR TENGAH SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (295, '53', '03', 'KAB. TIMOR TENGAH UTARA');
INSERT INTO "regional"."kabupaten" VALUES (296, '53', '04', 'KAB. BELU');
INSERT INTO "regional"."kabupaten" VALUES (297, '53', '05', 'KAB. ALOR');
INSERT INTO "regional"."kabupaten" VALUES (298, '53', '06', 'KAB. FLORES TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (299, '53', '07', 'KAB. SIKKA');
INSERT INTO "regional"."kabupaten" VALUES (300, '53', '08', 'KAB. ENDE');
INSERT INTO "regional"."kabupaten" VALUES (301, '53', '09', 'KAB. NGADA');
INSERT INTO "regional"."kabupaten" VALUES (302, '53', '10', 'KAB. MANGGARAI');
INSERT INTO "regional"."kabupaten" VALUES (303, '53', '11', 'KAB. SUMBA TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (304, '53', '12', 'KAB. SUMBA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (305, '53', '13', 'KAB. LEMBATA');
INSERT INTO "regional"."kabupaten" VALUES (306, '53', '14', 'KAB. ROTE NDAO');
INSERT INTO "regional"."kabupaten" VALUES (307, '53', '15', 'KAB. MANGGARAI BARAT');
INSERT INTO "regional"."kabupaten" VALUES (308, '53', '16', 'KAB. NAGEKEO');
INSERT INTO "regional"."kabupaten" VALUES (309, '53', '17', 'KAB. SUMBA TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (310, '53', '18', 'KAB. SUMBA BARAT DAYA');
INSERT INTO "regional"."kabupaten" VALUES (311, '53', '19', 'KAB. MANGGARAI TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (312, '53', '20', 'KAB. SABU RAIJUA');
INSERT INTO "regional"."kabupaten" VALUES (313, '53', '21', 'KAB. MALAKA');
INSERT INTO "regional"."kabupaten" VALUES (314, '53', '71', 'KOTA KUPANG');
INSERT INTO "regional"."kabupaten" VALUES (315, '61', '01', 'KAB. SAMBAS');
INSERT INTO "regional"."kabupaten" VALUES (316, '61', '02', 'KAB. MEMPAWAH');
INSERT INTO "regional"."kabupaten" VALUES (317, '61', '03', 'KAB. SANGGAU');
INSERT INTO "regional"."kabupaten" VALUES (318, '61', '04', 'KAB. KETAPANG');
INSERT INTO "regional"."kabupaten" VALUES (319, '61', '05', 'KAB. SINTANG');
INSERT INTO "regional"."kabupaten" VALUES (320, '61', '06', 'KAB. KAPUAS HULU');
INSERT INTO "regional"."kabupaten" VALUES (321, '61', '07', 'KAB. BENGKAYANG');
INSERT INTO "regional"."kabupaten" VALUES (322, '61', '08', 'KAB. LANDAK');
INSERT INTO "regional"."kabupaten" VALUES (323, '61', '09', 'KAB. SEKADAU');
INSERT INTO "regional"."kabupaten" VALUES (324, '61', '10', 'KAB. MELAWI');
INSERT INTO "regional"."kabupaten" VALUES (325, '61', '11', 'KAB. KAYONG UTARA');
INSERT INTO "regional"."kabupaten" VALUES (326, '61', '12', 'KAB. KUBU RAYA');
INSERT INTO "regional"."kabupaten" VALUES (327, '61', '71', 'KOTA PONTIANAK');
INSERT INTO "regional"."kabupaten" VALUES (328, '61', '72', 'KOTA SINGKAWANG');
INSERT INTO "regional"."kabupaten" VALUES (329, '62', '01', 'KAB. KOTAWARINGIN BARAT');
INSERT INTO "regional"."kabupaten" VALUES (330, '62', '02', 'KAB. KOTAWARINGIN TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (331, '62', '03', 'KAB. KAPUAS');
INSERT INTO "regional"."kabupaten" VALUES (332, '62', '04', 'KAB. BARITO SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (333, '62', '05', 'KAB. BARITO UTARA');
INSERT INTO "regional"."kabupaten" VALUES (334, '62', '06', 'KAB. KATINGAN');
INSERT INTO "regional"."kabupaten" VALUES (335, '62', '07', 'KAB. SERUYAN');
INSERT INTO "regional"."kabupaten" VALUES (336, '62', '08', 'KAB. SUKAMARA');
INSERT INTO "regional"."kabupaten" VALUES (337, '62', '09', 'KAB. LAMANDAU');
INSERT INTO "regional"."kabupaten" VALUES (338, '62', '10', 'KAB. GUNUNG MAS');
INSERT INTO "regional"."kabupaten" VALUES (339, '62', '11', 'KAB. PULANG PISAU');
INSERT INTO "regional"."kabupaten" VALUES (340, '62', '12', 'KAB. MURUNG RAYA');
INSERT INTO "regional"."kabupaten" VALUES (341, '62', '13', 'KAB. BARITO TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (342, '62', '71', 'KOTA PALANGKARAYA');
INSERT INTO "regional"."kabupaten" VALUES (343, '63', '01', 'KAB. TANAH LAUT');
INSERT INTO "regional"."kabupaten" VALUES (344, '63', '02', 'KAB. KOTABARU');
INSERT INTO "regional"."kabupaten" VALUES (345, '63', '03', 'KAB. BANJAR');
INSERT INTO "regional"."kabupaten" VALUES (346, '63', '04', 'KAB. BARITO KUALA');
INSERT INTO "regional"."kabupaten" VALUES (347, '63', '05', 'KAB. TAPIN');
INSERT INTO "regional"."kabupaten" VALUES (348, '63', '06', 'KAB. HULU SUNGAI SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (349, '63', '07', 'KAB. HULU SUNGAI TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (350, '63', '08', 'KAB. HULU SUNGAI UTARA');
INSERT INTO "regional"."kabupaten" VALUES (351, '63', '09', 'KAB. TABALONG');
INSERT INTO "regional"."kabupaten" VALUES (352, '63', '10', 'KAB. TANAH BUMBU');
INSERT INTO "regional"."kabupaten" VALUES (353, '63', '11', 'KAB. BALANGAN');
INSERT INTO "regional"."kabupaten" VALUES (354, '63', '71', 'KOTA BANJARMASIN');
INSERT INTO "regional"."kabupaten" VALUES (355, '63', '72', 'KOTA BANJARBARU');
INSERT INTO "regional"."kabupaten" VALUES (356, '64', '01', 'KAB. PASER');
INSERT INTO "regional"."kabupaten" VALUES (357, '64', '02', 'KAB. KUTAI KARTANEGARA');
INSERT INTO "regional"."kabupaten" VALUES (358, '64', '03', 'KAB. BERAU');
INSERT INTO "regional"."kabupaten" VALUES (359, '64', '07', 'KAB. KUTAI BARAT');
INSERT INTO "regional"."kabupaten" VALUES (360, '64', '08', 'KAB. KUTAI TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (361, '64', '09', 'KAB. PENAJAM PASER UTARA');
INSERT INTO "regional"."kabupaten" VALUES (362, '64', '11', 'KAB. MAHAKAM ULU');
INSERT INTO "regional"."kabupaten" VALUES (363, '64', '71', 'KOTA BALIKPAPAN');
INSERT INTO "regional"."kabupaten" VALUES (364, '64', '72', 'KOTA SAMARINDA');
INSERT INTO "regional"."kabupaten" VALUES (365, '64', '74', 'KOTA BONTANG');
INSERT INTO "regional"."kabupaten" VALUES (366, '65', '01', 'KAB. BULUNGAN');
INSERT INTO "regional"."kabupaten" VALUES (367, '65', '02', 'KAB. MALINAU');
INSERT INTO "regional"."kabupaten" VALUES (368, '65', '03', 'KAB. NUNUKAN');
INSERT INTO "regional"."kabupaten" VALUES (369, '65', '04', 'KAB. TANA TIDUNG');
INSERT INTO "regional"."kabupaten" VALUES (370, '65', '71', 'KOTA TARAKAN');
INSERT INTO "regional"."kabupaten" VALUES (371, '71', '01', 'KAB. BOLAANG MONGONDOW');
INSERT INTO "regional"."kabupaten" VALUES (372, '71', '02', 'KAB. MINAHASA');
INSERT INTO "regional"."kabupaten" VALUES (373, '71', '03', 'KAB. KEPULAUAN SANGIHE');
INSERT INTO "regional"."kabupaten" VALUES (374, '71', '04', 'KAB. KEPULAUAN TALAUD');
INSERT INTO "regional"."kabupaten" VALUES (375, '71', '05', 'KAB. MINAHASA SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (376, '71', '06', 'KAB. MINAHASA UTARA');
INSERT INTO "regional"."kabupaten" VALUES (377, '71', '07', 'KAB. MINAHASA TENGGARA');
INSERT INTO "regional"."kabupaten" VALUES (378, '71', '08', 'KAB. BOLAANG MONGONDOW UTARA');
INSERT INTO "regional"."kabupaten" VALUES (379, '71', '09', 'KAB. KEP. SIAU TAGULANDANG BIARO');
INSERT INTO "regional"."kabupaten" VALUES (380, '71', '10', 'KAB. BOLAANG MONGONDOW TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (381, '71', '11', 'KAB. BOLAANG MONGONDOW SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (382, '71', '71', 'KOTA MANADO');
INSERT INTO "regional"."kabupaten" VALUES (383, '71', '72', 'KOTA BITUNG');
INSERT INTO "regional"."kabupaten" VALUES (384, '71', '73', 'KOTA TOMOHON');
INSERT INTO "regional"."kabupaten" VALUES (385, '71', '74', 'KOTA KOTAMOBAGU');
INSERT INTO "regional"."kabupaten" VALUES (386, '72', '01', 'KAB. BANGGAI');
INSERT INTO "regional"."kabupaten" VALUES (387, '72', '02', 'KAB. POSO');
INSERT INTO "regional"."kabupaten" VALUES (388, '72', '03', 'KAB. DONGGALA');
INSERT INTO "regional"."kabupaten" VALUES (389, '72', '04', 'KAB. TOLI TOLI');
INSERT INTO "regional"."kabupaten" VALUES (390, '72', '05', 'KAB. BUOL');
INSERT INTO "regional"."kabupaten" VALUES (391, '72', '06', 'KAB. MOROWALI');
INSERT INTO "regional"."kabupaten" VALUES (392, '72', '07', 'KAB. BANGGAI KEPULAUAN');
INSERT INTO "regional"."kabupaten" VALUES (393, '72', '08', 'KAB. PARIGI MOUTONG');
INSERT INTO "regional"."kabupaten" VALUES (394, '72', '09', 'KAB. TOJO UNA UNA');
INSERT INTO "regional"."kabupaten" VALUES (395, '72', '10', 'KAB. SIGI');
INSERT INTO "regional"."kabupaten" VALUES (396, '72', '11', 'KAB. BANGGAI LAUT');
INSERT INTO "regional"."kabupaten" VALUES (397, '72', '12', 'KAB. MOROWALI UTARA');
INSERT INTO "regional"."kabupaten" VALUES (398, '72', '71', 'KOTA PALU');
INSERT INTO "regional"."kabupaten" VALUES (399, '73', '01', 'KAB. KEPULAUAN SELAYAR');
INSERT INTO "regional"."kabupaten" VALUES (400, '73', '02', 'KAB. BULUKUMBA');
INSERT INTO "regional"."kabupaten" VALUES (401, '73', '03', 'KAB. BANTAENG');
INSERT INTO "regional"."kabupaten" VALUES (402, '73', '04', 'KAB. JENEPONTO');
INSERT INTO "regional"."kabupaten" VALUES (403, '73', '05', 'KAB. TAKALAR');
INSERT INTO "regional"."kabupaten" VALUES (404, '73', '06', 'KAB. GOWA');
INSERT INTO "regional"."kabupaten" VALUES (405, '73', '07', 'KAB. SINJAI');
INSERT INTO "regional"."kabupaten" VALUES (406, '73', '08', 'KAB. BONE');
INSERT INTO "regional"."kabupaten" VALUES (407, '73', '09', 'KAB. MAROS');
INSERT INTO "regional"."kabupaten" VALUES (408, '73', '10', 'KAB. PANGKAJENE KEPULAUAN');
INSERT INTO "regional"."kabupaten" VALUES (409, '73', '11', 'KAB. BARRU');
INSERT INTO "regional"."kabupaten" VALUES (410, '73', '12', 'KAB. SOPPENG');
INSERT INTO "regional"."kabupaten" VALUES (411, '73', '13', 'KAB. WAJO');
INSERT INTO "regional"."kabupaten" VALUES (412, '73', '14', 'KAB. SIDENRENG RAPPANG');
INSERT INTO "regional"."kabupaten" VALUES (413, '73', '15', 'KAB. PINRANG');
INSERT INTO "regional"."kabupaten" VALUES (414, '73', '16', 'KAB. ENREKANG');
INSERT INTO "regional"."kabupaten" VALUES (415, '73', '17', 'KAB. LUWU');
INSERT INTO "regional"."kabupaten" VALUES (416, '73', '18', 'KAB. TANA TORAJA');
INSERT INTO "regional"."kabupaten" VALUES (417, '73', '22', 'KAB. LUWU UTARA');
INSERT INTO "regional"."kabupaten" VALUES (418, '73', '24', 'KAB. LUWU TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (419, '73', '26', 'KAB. TORAJA UTARA');
INSERT INTO "regional"."kabupaten" VALUES (420, '73', '71', 'KOTA MAKASSAR');
INSERT INTO "regional"."kabupaten" VALUES (421, '73', '72', 'KOTA PARE PARE');
INSERT INTO "regional"."kabupaten" VALUES (422, '73', '73', 'KOTA PALOPO');
INSERT INTO "regional"."kabupaten" VALUES (423, '74', '01', 'KAB. KOLAKA');
INSERT INTO "regional"."kabupaten" VALUES (424, '74', '02', 'KAB. KONAWE');
INSERT INTO "regional"."kabupaten" VALUES (425, '74', '03', 'KAB. MUNA');
INSERT INTO "regional"."kabupaten" VALUES (426, '74', '04', 'KAB. BUTON');
INSERT INTO "regional"."kabupaten" VALUES (427, '74', '05', 'KAB. KONAWE SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (428, '74', '06', 'KAB. BOMBANA');
INSERT INTO "regional"."kabupaten" VALUES (429, '74', '07', 'KAB. WAKATOBI');
INSERT INTO "regional"."kabupaten" VALUES (430, '74', '08', 'KAB. KOLAKA UTARA');
INSERT INTO "regional"."kabupaten" VALUES (431, '74', '09', 'KAB. KONAWE UTARA');
INSERT INTO "regional"."kabupaten" VALUES (432, '74', '10', 'KAB. BUTON UTARA');
INSERT INTO "regional"."kabupaten" VALUES (433, '74', '11', 'KAB. KOLAKA TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (434, '74', '12', 'KAB. KONAWE KEPULAUAN');
INSERT INTO "regional"."kabupaten" VALUES (435, '74', '13', 'KAB. MUNA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (436, '74', '14', 'KAB. BUTON TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (437, '74', '15', 'KAB. BUTON SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (438, '74', '71', 'KOTA KENDARI');
INSERT INTO "regional"."kabupaten" VALUES (439, '74', '72', 'KOTA BAU BAU');
INSERT INTO "regional"."kabupaten" VALUES (440, '75', '01', 'KAB. GORONTALO');
INSERT INTO "regional"."kabupaten" VALUES (441, '75', '02', 'KAB. BOALEMO');
INSERT INTO "regional"."kabupaten" VALUES (442, '75', '03', 'KAB. BONE BOLANGO');
INSERT INTO "regional"."kabupaten" VALUES (443, '75', '04', 'KAB. PAHUWATO');
INSERT INTO "regional"."kabupaten" VALUES (444, '75', '05', 'KAB. GORONTALO UTARA');
INSERT INTO "regional"."kabupaten" VALUES (445, '75', '71', 'KOTA GORONTALO');
INSERT INTO "regional"."kabupaten" VALUES (446, '76', '01', 'KAB. MAMUJU UTARA');
INSERT INTO "regional"."kabupaten" VALUES (447, '76', '02', 'KAB. MAMUJU');
INSERT INTO "regional"."kabupaten" VALUES (448, '76', '03', 'KAB. MAMASA');
INSERT INTO "regional"."kabupaten" VALUES (449, '76', '04', 'KAB. POLEWALI MANDAR');
INSERT INTO "regional"."kabupaten" VALUES (450, '76', '05', 'KAB. MAJENE');
INSERT INTO "regional"."kabupaten" VALUES (451, '76', '06', 'KAB. MAMUJU TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (452, '81', '01', 'KAB. MALUKU TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (453, '81', '02', 'KAB. MALUKU TENGGARA');
INSERT INTO "regional"."kabupaten" VALUES (454, '81', '03', 'KAB. MALUKU TENGGARA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (455, '81', '04', 'KAB. BURU');
INSERT INTO "regional"."kabupaten" VALUES (456, '81', '05', 'KAB. SERAM BAGIAN TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (457, '81', '06', 'KAB. SERAM BAGIAN BARAT');
INSERT INTO "regional"."kabupaten" VALUES (458, '81', '07', 'KAB. KEPULAUAN ARU');
INSERT INTO "regional"."kabupaten" VALUES (459, '81', '08', 'KAB. MALUKU BARAT DAYA');
INSERT INTO "regional"."kabupaten" VALUES (460, '81', '09', 'KAB. BURU SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (461, '81', '71', 'KOTA AMBON');
INSERT INTO "regional"."kabupaten" VALUES (462, '81', '72', 'KOTA TUAL');
INSERT INTO "regional"."kabupaten" VALUES (463, '82', '01', 'KAB. HALMAHERA BARAT');
INSERT INTO "regional"."kabupaten" VALUES (464, '82', '02', 'KAB. HALMAHERA TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (465, '82', '03', 'KAB. HALMAHERA UTARA');
INSERT INTO "regional"."kabupaten" VALUES (466, '82', '04', 'KAB. HALMAHERA SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (467, '82', '05', 'KAB. KEPULAUAN SULA');
INSERT INTO "regional"."kabupaten" VALUES (468, '82', '06', 'KAB. HALMAHERA TIMUR');
INSERT INTO "regional"."kabupaten" VALUES (469, '82', '07', 'KAB. PULAU MOROTAI');
INSERT INTO "regional"."kabupaten" VALUES (470, '82', '08', 'KAB. PULAU TALIABU');
INSERT INTO "regional"."kabupaten" VALUES (471, '82', '71', 'KOTA TERNATE');
INSERT INTO "regional"."kabupaten" VALUES (472, '82', '72', 'KOTA TIDORE KEPULAUAN');
INSERT INTO "regional"."kabupaten" VALUES (473, '91', '01', 'KAB. MERAUKE');
INSERT INTO "regional"."kabupaten" VALUES (474, '91', '02', 'KAB. JAYAWIJAYA');
INSERT INTO "regional"."kabupaten" VALUES (475, '91', '03', 'KAB. JAYAPURA');
INSERT INTO "regional"."kabupaten" VALUES (476, '91', '04', 'KAB. NABIRE');
INSERT INTO "regional"."kabupaten" VALUES (477, '91', '05', 'KAB. KEPULAUAN YAPEN');
INSERT INTO "regional"."kabupaten" VALUES (478, '91', '06', 'KAB. BIAK NUMFOR');
INSERT INTO "regional"."kabupaten" VALUES (479, '91', '07', 'KAB. PUNCAK JAYA');
INSERT INTO "regional"."kabupaten" VALUES (480, '91', '08', 'KAB. PANIAI');
INSERT INTO "regional"."kabupaten" VALUES (481, '91', '09', 'KAB. MIMIKA');
INSERT INTO "regional"."kabupaten" VALUES (482, '91', '10', 'KAB. SARMI');
INSERT INTO "regional"."kabupaten" VALUES (483, '91', '11', 'KAB. KEEROM');
INSERT INTO "regional"."kabupaten" VALUES (484, '91', '12', 'KAB. PEGUNUNGAN BINTANG');
INSERT INTO "regional"."kabupaten" VALUES (485, '91', '13', 'KAB. YAHUKIMO');
INSERT INTO "regional"."kabupaten" VALUES (486, '91', '14', 'KAB. TOLIKARA');
INSERT INTO "regional"."kabupaten" VALUES (487, '91', '15', 'KAB. WAROPEN');
INSERT INTO "regional"."kabupaten" VALUES (488, '91', '16', 'KAB. BOVEN DIGOEL');
INSERT INTO "regional"."kabupaten" VALUES (489, '91', '17', 'KAB. MAPPI');
INSERT INTO "regional"."kabupaten" VALUES (490, '91', '18', 'KAB. ASMAT');
INSERT INTO "regional"."kabupaten" VALUES (491, '91', '19', 'KAB. SUPIORI');
INSERT INTO "regional"."kabupaten" VALUES (492, '91', '20', 'KAB. MAMBERAMO RAYA');
INSERT INTO "regional"."kabupaten" VALUES (493, '91', '21', 'KAB. MAMBERAMO TENGAH');
INSERT INTO "regional"."kabupaten" VALUES (494, '91', '22', 'KAB. YALIMO');
INSERT INTO "regional"."kabupaten" VALUES (495, '91', '23', 'KAB. LANNY JAYA');
INSERT INTO "regional"."kabupaten" VALUES (496, '91', '24', 'KAB. NDUGA');
INSERT INTO "regional"."kabupaten" VALUES (497, '91', '25', 'KAB. PUNCAK');
INSERT INTO "regional"."kabupaten" VALUES (498, '91', '26', 'KAB. DOGIYAI');
INSERT INTO "regional"."kabupaten" VALUES (499, '91', '27', 'KAB. INTAN JAYA');
INSERT INTO "regional"."kabupaten" VALUES (500, '91', '28', 'KAB. DEIYAI');
INSERT INTO "regional"."kabupaten" VALUES (501, '91', '71', 'KOTA JAYAPURA');
INSERT INTO "regional"."kabupaten" VALUES (502, '92', '01', 'KAB. SORONG');
INSERT INTO "regional"."kabupaten" VALUES (503, '92', '02', 'KAB. MANOKWARI');
INSERT INTO "regional"."kabupaten" VALUES (504, '92', '03', 'KAB. FAK FAK');
INSERT INTO "regional"."kabupaten" VALUES (505, '92', '04', 'KAB. SORONG SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (506, '92', '05', 'KAB. RAJA AMPAT');
INSERT INTO "regional"."kabupaten" VALUES (507, '92', '06', 'KAB. TELUK BINTUNI');
INSERT INTO "regional"."kabupaten" VALUES (508, '92', '07', 'KAB. TELUK WONDAMA');
INSERT INTO "regional"."kabupaten" VALUES (509, '92', '08', 'KAB. KAIMANA');
INSERT INTO "regional"."kabupaten" VALUES (510, '92', '09', 'KAB. TAMBRAUW');
INSERT INTO "regional"."kabupaten" VALUES (511, '92', '10', 'KAB. MAYBRAT');
INSERT INTO "regional"."kabupaten" VALUES (512, '92', '11', 'KAB. MANOKWARI SELATAN');
INSERT INTO "regional"."kabupaten" VALUES (513, '92', '12', 'KAB. PEGUNUNGAN ARFAK');
INSERT INTO "regional"."kabupaten" VALUES (514, '92', '71', 'KOTA SORONG');
INSERT INTO "regional"."kabupaten" VALUES (515, '99', '01', 'Pusat');

-- ----------------------------
-- Table structure for provinsi
-- ----------------------------
DROP TABLE IF EXISTS "regional"."provinsi";
CREATE TABLE "regional"."provinsi" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "id_prov" varchar(2) COLLATE "pg_catalog"."default",
  "nm_prov" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of provinsi
-- ----------------------------
INSERT INTO "regional"."provinsi" VALUES (1, '11', 'Aceh');
INSERT INTO "regional"."provinsi" VALUES (2, '12', 'Sumatera Utara');
INSERT INTO "regional"."provinsi" VALUES (3, '13', 'SUMATERA BARAT');
INSERT INTO "regional"."provinsi" VALUES (4, '14', 'RIAU');
INSERT INTO "regional"."provinsi" VALUES (5, '15', 'JAMBI');
INSERT INTO "regional"."provinsi" VALUES (6, '16', 'SUMATERA SELATAN');
INSERT INTO "regional"."provinsi" VALUES (7, '17', 'BENGKULU');
INSERT INTO "regional"."provinsi" VALUES (8, '18', 'LAMPUNG');
INSERT INTO "regional"."provinsi" VALUES (9, '19', 'KEPULAUAN BANGKA BELITUNG');
INSERT INTO "regional"."provinsi" VALUES (10, '21', 'KEPULAUAN RIAU');
INSERT INTO "regional"."provinsi" VALUES (11, '31', 'DKI JAKARTA');
INSERT INTO "regional"."provinsi" VALUES (12, '32', 'JAWA BARAT');
INSERT INTO "regional"."provinsi" VALUES (13, '33', 'JAWA TENGAH');
INSERT INTO "regional"."provinsi" VALUES (14, '34', 'DI YOGYAKARTA');
INSERT INTO "regional"."provinsi" VALUES (15, '35', 'JAWA TIMUR');
INSERT INTO "regional"."provinsi" VALUES (16, '36', 'BANTEN');
INSERT INTO "regional"."provinsi" VALUES (17, '51', 'BALI');
INSERT INTO "regional"."provinsi" VALUES (18, '52', 'NUSA TENGGARA BARAT');
INSERT INTO "regional"."provinsi" VALUES (19, '53', 'NUSA TENGGARA TIMUR');
INSERT INTO "regional"."provinsi" VALUES (20, '61', 'KALIMANTAN BARAT');
INSERT INTO "regional"."provinsi" VALUES (21, '62', 'KALIMANTAN TENGAH');
INSERT INTO "regional"."provinsi" VALUES (22, '63', 'KALIMANTAN SELATAN');
INSERT INTO "regional"."provinsi" VALUES (23, '64', 'KALIMANTAN TIMUR');
INSERT INTO "regional"."provinsi" VALUES (24, '65', 'KALIMANTAN UTARA');
INSERT INTO "regional"."provinsi" VALUES (25, '71', 'SULAWESI UTARA');
INSERT INTO "regional"."provinsi" VALUES (26, '72', 'SULAWESI TENGAH');
INSERT INTO "regional"."provinsi" VALUES (27, '73', 'SULAWESI SELATAN');
INSERT INTO "regional"."provinsi" VALUES (28, '74', 'SULAWESI TENGGARA');
INSERT INTO "regional"."provinsi" VALUES (29, '75', 'GORONTALO');
INSERT INTO "regional"."provinsi" VALUES (30, '76', 'SULAWESI BARAT');
INSERT INTO "regional"."provinsi" VALUES (31, '81', 'MALUKU');
INSERT INTO "regional"."provinsi" VALUES (32, '82', 'MALUKU UTARA');
INSERT INTO "regional"."provinsi" VALUES (33, '92', 'PAPUA BARAT');
INSERT INTO "regional"."provinsi" VALUES (34, '91', 'PAPUA');
INSERT INTO "regional"."provinsi" VALUES (35, '99', 'Pusat');

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "regional"."kabupaten_id_seq"
OWNED BY "regional"."kabupaten"."id";
SELECT setval('"regional"."kabupaten_id_seq"', 517, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "regional"."provinsi_id_seq"
OWNED BY "regional"."provinsi"."id";
SELECT setval('"regional"."provinsi_id_seq"', 37, true);

-- ----------------------------
-- Primary Key structure for table kabupaten
-- ----------------------------
ALTER TABLE "regional"."kabupaten" ADD CONSTRAINT "kabupaten_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table provinsi
-- ----------------------------
ALTER TABLE "regional"."provinsi" ADD CONSTRAINT "provinsi_pkey" PRIMARY KEY ("id");
