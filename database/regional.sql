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
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '01', 'Kab. Aceh Selatan');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '02', 'KAB. ACEH TENGGARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '03', 'KAB. ACEH TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '04', 'KAB. ACEH TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '05', 'KAB. ACEH BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '06', 'KAB. ACEH BESAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '07', 'KAB. PIDIE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '08', 'KAB. ACEH UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '09', 'KAB. SIMEULUE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '10', 'KAB. ACEH SINGKIL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '11', 'KAB. BIREUEN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '12', 'KAB. ACEH BARAT DAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '13', 'KAB. GAYO LUES');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '14', 'KAB. ACEH JAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '15', 'KAB. NAGAN RAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '16', 'KAB. ACEH TAMIANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '17', 'KAB. BENER MERIAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '18', 'KAB. PIDIE JAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '71', 'KOTA BANDA ACEH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '72', 'KOTA SABANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '73', 'KOTA LHOKSEUMAWE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '74', 'KOTA LANGSA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('11', '75', 'KOTA SUBULUSSALAM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '01', 'KAB. TAPANULI TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '02', 'KAB. TAPANULI UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '03', 'KAB. TAPANULI SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '04', 'KAB. NIAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '05', 'KAB. LANGKAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '06', 'KAB. KARO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '07', 'KAB. DELI SERDANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '08', 'KAB. SIMALUNGUN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '09', 'KAB. ASAHAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '10', 'KAB. LABUHANBATU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '11', 'KAB. DAIRI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '12', 'KAB. TOBA SAMOSIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '13', 'KAB. MANDAILING NATAL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '14', 'KAB. NIAS SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '15', 'KAB. PAKPAK BHARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '16', 'KAB. HUMBANG HASUNDUTAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '17', 'KAB. SAMOSIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '18', 'KAB. SERDANG BEDAGAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '19', 'KAB. BATU BARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '20', 'KAB. PADANG LAWAS UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '21', 'KAB. PADANG LAWAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '22', 'KAB. LABUHANBATU SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '23', 'KAB. LABUHANBATU UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '24', 'KAB. NIAS UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '25', 'KAB. NIAS BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '71', 'KOTA MEDAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '72', 'KOTA PEMATANGSIANTAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '73', 'KOTA SIBOLGA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '74', 'KOTA TANJUNG BALAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '75', 'KOTA BINJAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '76', 'KOTA TEBING TINGGI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '77', 'KOTA PADANGSIDIMPUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('12', '78', 'KOTA GUNUNGSITOLI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '01', 'KAB. PESISIR SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '02', 'KAB. SOLOK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '03', 'KAB. SIJUNJUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '04', 'KAB. TANAH DATAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '05', 'KAB. PADANG PARIAMAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '06', 'KAB. AGAM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '07', 'KAB. LIMA PULUH KOTA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '08', 'KAB. PASAMAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '09', 'KAB. KEPULAUAN MENTAWAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '10', 'KAB. DHARMASRAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '11', 'KAB. SOLOK SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '12', 'KAB. PASAMAN BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '71', 'KOTA PADANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '72', 'KOTA SOLOK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '73', 'KOTA SAWAHLUNTO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '74', 'KOTA PADANG PANJANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '75', 'KOTA BUKITTINGGI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '76', 'KOTA PAYAKUMBUH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('13', '77', 'KOTA PARIAMAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '01', 'KAB. KAMPAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '02', 'KAB. INDRAGIRI HULU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '03', 'KAB. BENGKALIS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '04', 'KAB. INDRAGIRI HILIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '05', 'KAB. PELALAWAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '06', 'KAB. ROKAN HULU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '07', 'KAB. ROKAN HILIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '08', 'KAB. SIAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '09', 'KAB. KUANTAN SINGINGI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '10', 'KAB. KEPULAUAN MERANTI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '71', 'KOTA PEKANBARU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('14', '72', 'KOTA DUMAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '01', 'KAB. KERINCI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '02', 'KAB. MERANGIN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '03', 'KAB. SAROLANGUN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '04', 'KAB. BATANGHARI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '05', 'KAB. MUARO JAMBI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '06', 'KAB. TANJUNG JABUNG BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '07', 'KAB. TANJUNG JABUNG TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '08', 'KAB. BUNGO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '09', 'KAB. TEBO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '71', 'KOTA JAMBI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('15', '72', 'KOTA SUNGAI PENUH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '01', 'KAB. OGAN KOMERING ULU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '02', 'KAB. OGAN KOMERING ILIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '03', 'KAB. MUARA ENIM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '04', 'KAB. LAHAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '05', 'KAB. MUSI RAWAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '06', 'KAB. MUSI BANYUASIN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '07', 'KAB. BANYUASIN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '08', 'KAB. OGAN KOMERING ULU TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '09', 'KAB. OGAN KOMERING ULU SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '10', 'KAB. OGAN ILIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '11', 'KAB. EMPAT LAWANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '12', 'KAB. PENUKAL ABAB LEMATANG ILIR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '13', 'KAB. MUSI RAWAS UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '71', 'KOTA PALEMBANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '72', 'KOTA PAGAR ALAM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '73', 'KOTA LUBUK LINGGAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('16', '74', 'KOTA PRABUMULIH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '01', 'KAB. BENGKULU SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '02', 'KAB. REJANG LEBONG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '03', 'KAB. BENGKULU UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '04', 'KAB. KAUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '05', 'KAB. SELUMA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '06', 'KAB. MUKO MUKO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '07', 'KAB. LEBONG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '08', 'KAB. KEPAHIANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '09', 'KAB. BENGKULU TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('17', '71', 'KOTA BENGKULU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '01', 'KAB. LAMPUNG SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '02', 'KAB. LAMPUNG TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '03', 'KAB. LAMPUNG UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '04', 'KAB. LAMPUNG BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '05', 'KAB. TULANG BAWANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '06', 'KAB. TANGGAMUS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '07', 'KAB. LAMPUNG TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '08', 'KAB. WAY KANAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '09', 'KAB. PESAWARAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '10', 'KAB. PRINGSEWU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '11', 'KAB. MESUJI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '12', 'KAB. TULANG BAWANG BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '13', 'KAB. PESISIR BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '71', 'KOTA BANDAR LAMPUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('18', '72', 'KOTA METRO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '01', 'KAB. BANGKA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '02', 'KAB. BELITUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '03', 'KAB. BANGKA SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '04', 'KAB. BANGKA TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '05', 'KAB. BANGKA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '06', 'KAB. BELITUNG TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('19', '71', 'KOTA PANGKAL PINANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '01', 'KAB. BINTAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '02', 'KAB. KARIMUN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '03', 'KAB. NATUNA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '04', 'KAB. LINGGA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '05', 'KAB. KEPULAUAN ANAMBAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '71', 'KOTA BATAM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('21', '72', 'KOTA TANJUNG PINANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('31', '01', 'KAB. ADM. KEP. SERIBU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('31', '71', 'KOTA ADM. JAKARTA PUSAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('31', '72', 'KOTA ADM. JAKARTA UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('31', '73', 'KOTA ADM. JAKARTA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('31', '74', 'KOTA ADM. JAKARTA SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('31', '75', 'KOTA ADM. JAKARTA TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '01', 'KAB. BOGOR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '02', 'KAB. SUKABUMI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '03', 'KAB. CIANJUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '04', 'KAB. BANDUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '05', 'KAB. GARUT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '06', 'KAB. TASIKMALAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '07', 'KAB. CIAMIS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '08', 'KAB. KUNINGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '09', 'KAB. CIREBON');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '10', 'KAB. MAJALENGKA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '11', 'KAB. SUMEDANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '12', 'KAB. INDRAMAYU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '13', 'KAB. SUBANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '14', 'KAB. PURWAKARTA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '15', 'KAB. KARAWANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '16', 'KAB. BEKASI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '17', 'KAB. BANDUNG BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '18', 'KAB. PANGANDARAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '71', 'KOTA BOGOR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '72', 'KOTA SUKABUMI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '73', 'KOTA BANDUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '74', 'KOTA CIREBON');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '75', 'KOTA BEKASI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '76', 'KOTA DEPOK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '77', 'KOTA CIMAHI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '78', 'KOTA TASIKMALAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('32', '79', 'KOTA BANJAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '01', 'KAB. CILACAP');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '02', 'KAB. BANYUMAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '03', 'KAB. PURBALINGGA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '04', 'KAB. BANJARNEGARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '05', 'KAB. KEBUMEN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '06', 'KAB. PURWOREJO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '07', 'KAB. WONOSOBO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '08', 'KAB. MAGELANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '09', 'KAB. BOYOLALI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '10', 'KAB. KLATEN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '11', 'KAB. SUKOHARJO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '12', 'KAB. WONOGIRI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '13', 'KAB. KARANGANYAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '14', 'KAB. SRAGEN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '15', 'KAB. GROBOGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '16', 'KAB. BLORA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '17', 'KAB. REMBANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '18', 'KAB. PATI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '19', 'KAB. KUDUS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '20', 'KAB. JEPARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '21', 'KAB. DEMAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '22', 'KAB. SEMARANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '23', 'KAB. TEMANGGUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '24', 'KAB. KENDAL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '25', 'KAB. BATANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '26', 'KAB. PEKALONGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '27', 'KAB. PEMALANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '28', 'KAB. TEGAL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '29', 'KAB. BREBES');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '71', 'KOTA MAGELANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '72', 'KOTA SURAKARTA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '73', 'KOTA SALATIGA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '74', 'KOTA SEMARANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '75', 'KOTA PEKALONGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('33', '76', 'KOTA TEGAL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('34', '01', 'KAB. KULON PROGO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('34', '02', 'KAB. BANTUL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('34', '03', 'KAB. GUNUNGKIDUL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('34', '04', 'KAB. SLEMAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('34', '71', 'KOTA YOGYAKARTA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '01', 'KAB. PACITAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '02', 'KAB. PONOROGO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '03', 'KAB. TRENGGALEK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '04', 'KAB. TULUNGAGUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '05', 'KAB. BLITAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '06', 'KAB. KEDIRI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '07', 'KAB. MALANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '08', 'KAB. LUMAJANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '09', 'KAB. JEMBER');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '10', 'KAB. BANYUWANGI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '11', 'KAB. BONDOWOSO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '12', 'KAB. SITUBONDO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '13', 'KAB. PROBOLINGGO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '14', 'KAB. PASURUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '15', 'KAB. SIDOARJO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '16', 'KAB. MOJOKERTO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '17', 'KAB. JOMBANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '18', 'KAB. NGANJUK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '19', 'KAB. MADIUN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '20', 'KAB. MAGETAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '21', 'KAB. NGAWI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '22', 'KAB. BOJONEGORO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '23', 'KAB. TUBAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '24', 'KAB. LAMONGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '25', 'KAB. GRESIK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '26', 'KAB. BANGKALAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '27', 'KAB. SAMPANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '28', 'KAB. PAMEKASAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '29', 'KAB. SUMENEP');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '71', 'KOTA KEDIRI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '72', 'KOTA BLITAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '73', 'KOTA MALANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '74', 'KOTA PROBOLINGGO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '75', 'KOTA PASURUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '76', 'KOTA MOJOKERTO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '77', 'KOTA MADIUN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '78', 'KOTA SURABAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('35', '79', 'KOTA BATU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '01', 'KAB. PANDEGLANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '02', 'KAB. LEBAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '03', 'KAB. TANGERANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '04', 'KAB. SERANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '71', 'KOTA TANGERANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '72', 'KOTA CILEGON');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '73', 'KOTA SERANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('36', '74', 'KOTA TANGERANG SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '01', 'KAB. JEMBRANA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '02', 'KAB. TABANAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '03', 'KAB. BADUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '04', 'KAB. GIANYAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '05', 'KAB. KLUNGKUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '06', 'KAB. BANGLI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '07', 'KAB. KARANGASEM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '08', 'KAB. BULELENG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('51', '71', 'KOTA DENPASAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '01', 'KAB. LOMBOK BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '02', 'KAB. LOMBOK TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '03', 'KAB. LOMBOK TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '04', 'KAB. SUMBAWA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '05', 'KAB. DOMPU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '06', 'KAB. BIMA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '07', 'KAB. SUMBAWA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '08', 'KAB. LOMBOK UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '71', 'KOTA MATARAM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('52', '72', 'KOTA BIMA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '01', 'KAB. KUPANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '02', 'KAB TIMOR TENGAH SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '03', 'KAB. TIMOR TENGAH UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '04', 'KAB. BELU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '05', 'KAB. ALOR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '06', 'KAB. FLORES TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '07', 'KAB. SIKKA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '08', 'KAB. ENDE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '09', 'KAB. NGADA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '10', 'KAB. MANGGARAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '11', 'KAB. SUMBA TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '12', 'KAB. SUMBA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '13', 'KAB. LEMBATA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '14', 'KAB. ROTE NDAO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '15', 'KAB. MANGGARAI BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '16', 'KAB. NAGEKEO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '17', 'KAB. SUMBA TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '18', 'KAB. SUMBA BARAT DAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '19', 'KAB. MANGGARAI TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '20', 'KAB. SABU RAIJUA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '21', 'KAB. MALAKA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('53', '71', 'KOTA KUPANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '01', 'KAB. SAMBAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '02', 'KAB. MEMPAWAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '03', 'KAB. SANGGAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '04', 'KAB. KETAPANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '05', 'KAB. SINTANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '06', 'KAB. KAPUAS HULU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '07', 'KAB. BENGKAYANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '08', 'KAB. LANDAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '09', 'KAB. SEKADAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '10', 'KAB. MELAWI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '11', 'KAB. KAYONG UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '12', 'KAB. KUBU RAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '71', 'KOTA PONTIANAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('61', '72', 'KOTA SINGKAWANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '01', 'KAB. KOTAWARINGIN BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '02', 'KAB. KOTAWARINGIN TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '03', 'KAB. KAPUAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '04', 'KAB. BARITO SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '05', 'KAB. BARITO UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '06', 'KAB. KATINGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '07', 'KAB. SERUYAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '08', 'KAB. SUKAMARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '09', 'KAB. LAMANDAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '10', 'KAB. GUNUNG MAS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '11', 'KAB. PULANG PISAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '12', 'KAB. MURUNG RAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '13', 'KAB. BARITO TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('62', '71', 'KOTA PALANGKARAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '01', 'KAB. TANAH LAUT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '02', 'KAB. KOTABARU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '03', 'KAB. BANJAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '04', 'KAB. BARITO KUALA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '05', 'KAB. TAPIN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '06', 'KAB. HULU SUNGAI SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '07', 'KAB. HULU SUNGAI TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '08', 'KAB. HULU SUNGAI UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '09', 'KAB. TABALONG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '10', 'KAB. TANAH BUMBU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '11', 'KAB. BALANGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '71', 'KOTA BANJARMASIN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('63', '72', 'KOTA BANJARBARU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '01', 'KAB. PASER');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '02', 'KAB. KUTAI KARTANEGARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '03', 'KAB. BERAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '07', 'KAB. KUTAI BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '08', 'KAB. KUTAI TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '09', 'KAB. PENAJAM PASER UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '11', 'KAB. MAHAKAM ULU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '71', 'KOTA BALIKPAPAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '72', 'KOTA SAMARINDA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('64', '74', 'KOTA BONTANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('65', '01', 'KAB. BULUNGAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('65', '02', 'KAB. MALINAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('65', '03', 'KAB. NUNUKAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('65', '04', 'KAB. TANA TIDUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('65', '71', 'KOTA TARAKAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '01', 'KAB. BOLAANG MONGONDOW');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '02', 'KAB. MINAHASA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '03', 'KAB. KEPULAUAN SANGIHE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '04', 'KAB. KEPULAUAN TALAUD');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '05', 'KAB. MINAHASA SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '06', 'KAB. MINAHASA UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '07', 'KAB. MINAHASA TENGGARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '08', 'KAB. BOLAANG MONGONDOW UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '09', 'KAB. KEP. SIAU TAGULANDANG BIARO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '10', 'KAB. BOLAANG MONGONDOW TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '11', 'KAB. BOLAANG MONGONDOW SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '71', 'KOTA MANADO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '72', 'KOTA BITUNG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '73', 'KOTA TOMOHON');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('71', '74', 'KOTA KOTAMOBAGU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '01', 'KAB. BANGGAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '02', 'KAB. POSO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '03', 'KAB. DONGGALA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '04', 'KAB. TOLI TOLI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '05', 'KAB. BUOL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '06', 'KAB. MOROWALI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '07', 'KAB. BANGGAI KEPULAUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '08', 'KAB. PARIGI MOUTONG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '09', 'KAB. TOJO UNA UNA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '10', 'KAB. SIGI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '11', 'KAB. BANGGAI LAUT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '12', 'KAB. MOROWALI UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('72', '71', 'KOTA PALU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '01', 'KAB. KEPULAUAN SELAYAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '02', 'KAB. BULUKUMBA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '03', 'KAB. BANTAENG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '04', 'KAB. JENEPONTO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '05', 'KAB. TAKALAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '06', 'KAB. GOWA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '07', 'KAB. SINJAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '08', 'KAB. BONE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '09', 'KAB. MAROS');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '10', 'KAB. PANGKAJENE KEPULAUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '11', 'KAB. BARRU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '12', 'KAB. SOPPENG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '13', 'KAB. WAJO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '14', 'KAB. SIDENRENG RAPPANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '15', 'KAB. PINRANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '16', 'KAB. ENREKANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '17', 'KAB. LUWU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '18', 'KAB. TANA TORAJA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '22', 'KAB. LUWU UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '24', 'KAB. LUWU TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '26', 'KAB. TORAJA UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '71', 'KOTA MAKASSAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '72', 'KOTA PARE PARE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('73', '73', 'KOTA PALOPO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '01', 'KAB. KOLAKA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '02', 'KAB. KONAWE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '03', 'KAB. MUNA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '04', 'KAB. BUTON');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '05', 'KAB. KONAWE SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '06', 'KAB. BOMBANA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '07', 'KAB. WAKATOBI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '08', 'KAB. KOLAKA UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '09', 'KAB. KONAWE UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '10', 'KAB. BUTON UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '11', 'KAB. KOLAKA TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '12', 'KAB. KONAWE KEPULAUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '13', 'KAB. MUNA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '14', 'KAB. BUTON TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '15', 'KAB. BUTON SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '71', 'KOTA KENDARI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('74', '72', 'KOTA BAU BAU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('75', '01', 'KAB. GORONTALO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('75', '02', 'KAB. BOALEMO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('75', '03', 'KAB. BONE BOLANGO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('75', '04', 'KAB. PAHUWATO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('75', '05', 'KAB. GORONTALO UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('75', '71', 'KOTA GORONTALO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('76', '01', 'KAB. MAMUJU UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('76', '02', 'KAB. MAMUJU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('76', '03', 'KAB. MAMASA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('76', '04', 'KAB. POLEWALI MANDAR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('76', '05', 'KAB. MAJENE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('76', '06', 'KAB. MAMUJU TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '01', 'KAB. MALUKU TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '02', 'KAB. MALUKU TENGGARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '03', 'KAB. MALUKU TENGGARA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '04', 'KAB. BURU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '05', 'KAB. SERAM BAGIAN TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '06', 'KAB. SERAM BAGIAN BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '07', 'KAB. KEPULAUAN ARU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '08', 'KAB. MALUKU BARAT DAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '09', 'KAB. BURU SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '71', 'KOTA AMBON');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('81', '72', 'KOTA TUAL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '01', 'KAB. HALMAHERA BARAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '02', 'KAB. HALMAHERA TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '03', 'KAB. HALMAHERA UTARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '04', 'KAB. HALMAHERA SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '05', 'KAB. KEPULAUAN SULA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '06', 'KAB. HALMAHERA TIMUR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '07', 'KAB. PULAU MOROTAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '08', 'KAB. PULAU TALIABU');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '71', 'KOTA TERNATE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('82', '72', 'KOTA TIDORE KEPULAUAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '01', 'KAB. MERAUKE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '02', 'KAB. JAYAWIJAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '03', 'KAB. JAYAPURA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '04', 'KAB. NABIRE');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '05', 'KAB. KEPULAUAN YAPEN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '06', 'KAB. BIAK NUMFOR');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '07', 'KAB. PUNCAK JAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '08', 'KAB. PANIAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '09', 'KAB. MIMIKA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '10', 'KAB. SARMI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '11', 'KAB. KEEROM');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '12', 'KAB. PEGUNUNGAN BINTANG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '13', 'KAB. YAHUKIMO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '14', 'KAB. TOLIKARA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '15', 'KAB. WAROPEN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '16', 'KAB. BOVEN DIGOEL');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '17', 'KAB. MAPPI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '18', 'KAB. ASMAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '19', 'KAB. SUPIORI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '20', 'KAB. MAMBERAMO RAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '21', 'KAB. MAMBERAMO TENGAH');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '22', 'KAB. YALIMO');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '23', 'KAB. LANNY JAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '24', 'KAB. NDUGA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '25', 'KAB. PUNCAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '26', 'KAB. DOGIYAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '27', 'KAB. INTAN JAYA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '28', 'KAB. DEIYAI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('91', '71', 'KOTA JAYAPURA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '01', 'KAB. SORONG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '02', 'KAB. MANOKWARI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '03', 'KAB. FAK FAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '04', 'KAB. SORONG SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '05', 'KAB. RAJA AMPAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '06', 'KAB. TELUK BINTUNI');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '07', 'KAB. TELUK WONDAMA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '08', 'KAB. KAIMANA');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '09', 'KAB. TAMBRAUW');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '10', 'KAB. MAYBRAT');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '11', 'KAB. MANOKWARI SELATAN');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '12', 'KAB. PEGUNUNGAN ARFAK');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('92', '71', 'KOTA SORONG');
INSERT INTO "regional"."kabupaten" ("id_prov","id_kab","nm_kab") VALUES ('99', '01', 'Pusat');

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
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('11', 'Aceh');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('12', 'Sumatera Utara');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('13', 'SUMATERA BARAT');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('14', 'RIAU');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('15', 'JAMBI');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('16', 'SUMATERA SELATAN');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('17', 'BENGKULU');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('18', 'LAMPUNG');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('19', 'KEPULAUAN BANGKA BELITUNG');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('21', 'KEPULAUAN RIAU');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('31', 'DKI JAKARTA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('32', 'JAWA BARAT');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('33', 'JAWA TENGAH');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('34', 'DI YOGYAKARTA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('35', 'JAWA TIMUR');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('36', 'BANTEN');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('51', 'BALI');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('52', 'NUSA TENGGARA BARAT');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('53', 'NUSA TENGGARA TIMUR');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('61', 'KALIMANTAN BARAT');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('62', 'KALIMANTAN TENGAH');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('63', 'KALIMANTAN SELATAN');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('64', 'KALIMANTAN TIMUR');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('65', 'KALIMANTAN UTARA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('71', 'SULAWESI UTARA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('72', 'SULAWESI TENGAH');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('73', 'SULAWESI SELATAN');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('74', 'SULAWESI TENGGARA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('75', 'GORONTALO');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('76', 'SULAWESI BARAT');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('81', 'MALUKU');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('82', 'MALUKU UTARA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('92', 'PAPUA BARAT');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('91', 'PAPUA');
INSERT INTO "regional"."provinsi" ("id_prov","nm_prov") VALUES ('99', 'Pusat');

-- ----------------------------
-- Primary Key structure for table kabupaten
-- ----------------------------
ALTER TABLE "regional"."kabupaten" ADD CONSTRAINT "kabupaten_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table provinsi
-- ----------------------------
ALTER TABLE "regional"."provinsi" ADD CONSTRAINT "provinsi_pkey" PRIMARY KEY ("id");
