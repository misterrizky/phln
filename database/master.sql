/*
 Navicat Premium Data Transfer

 Source Server         : DPT ONLINE
 Source Server Type    : PostgreSQL
 Source Server Version : 100019
 Source Host           : 193.111.124.82:999
 Source Catalog        : si_phln
 Source Schema         : master

 Target Server Type    : PostgreSQL
 Target Server Version : 100019
 File Encoding         : 65001

 Date: 23/01/2022 18:04:25
*/


-- ----------------------------
-- Sequence structure for agency_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."agency_id_seq";
CREATE SEQUENCE "master"."agency_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for category_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."category_id_seq";
CREATE SEQUENCE "master"."category_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for department_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."department_id_seq";
CREATE SEQUENCE "master"."department_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for dokumen_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."dokumen_id_seq";
CREATE SEQUENCE "master"."dokumen_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for donor_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."donor_id_seq";
CREATE SEQUENCE "master"."donor_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for jenis_satker_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."jenis_satker_id_seq";
CREATE SEQUENCE "master"."jenis_satker_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kategori_kinerja_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."kategori_kinerja_id_seq";
CREATE SEQUENCE "master"."kategori_kinerja_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kl_eksternal_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."kl_eksternal_id_seq";
CREATE SEQUENCE "master"."kl_eksternal_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for management_unit_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."management_unit_id_seq";
CREATE SEQUENCE "master"."management_unit_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for mata_uang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."mata_uang_id_seq";
CREATE SEQUENCE "master"."mata_uang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for penarikan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."penarikan_id_seq";
CREATE SEQUENCE "master"."penarikan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for rate_mata_uang_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."rate_mata_uang_id_seq";
CREATE SEQUENCE "master"."rate_mata_uang_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for satker_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."satker_id_seq";
CREATE SEQUENCE "master"."satker_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for sektor_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."sektor_id_seq";
CREATE SEQUENCE "master"."sektor_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for unit_kerja_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."unit_kerja_id_seq";
CREATE SEQUENCE "master"."unit_kerja_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for unor_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."unor_id_seq";
CREATE SEQUENCE "master"."unor_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for workflow_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "master"."workflow_id_seq";
CREATE SEQUENCE "master"."workflow_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for agency
-- ----------------------------
DROP TABLE IF EXISTS "master"."agency";
CREATE TABLE "master"."agency" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "kl_id" int4,
  "unor_id" int4,
  "unit_kerja_id" int4,
  "type" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS "master"."category";
CREATE TABLE "master"."category" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "category_id" int8 DEFAULT 0
)
;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO "master"."category" VALUES (1, 'Lahan / Lokasi', 0);
INSERT INTO "master"."category" VALUES (2, 'Desain', 0);
INSERT INTO "master"."category" VALUES (3, 'Perencanaan Pendanaan', 0);
INSERT INTO "master"."category" VALUES (4, 'Penyiapan / Proses Lelang', 0);
INSERT INTO "master"."category" VALUES (5, 'Kinerja Pihak Eksternal', 0);
INSERT INTO "master"."category" VALUES (6, 'Pembebasan Lahan / Penetapan Lokasi Tidak Sesuai Rencana', 1);
INSERT INTO "master"."category" VALUES (7, 'Kondisi Tanah Yang Tidak Sesuai Perencanaan Awal', 1);
INSERT INTO "master"."category" VALUES (8, 'Dokumen Perencanaan Teknis Belum Sepenuhnya Siap', 2);

-- ----------------------------
-- Table structure for department
-- ----------------------------
DROP TABLE IF EXISTS "master"."department";
CREATE TABLE "master"."department" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "kode" varchar(5) COLLATE "pg_catalog"."default",
  "nama" varchar(150) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO "master"."department" VALUES (1, '033', 'Kementerian Pekerjaan Umum Dan Perumahan Rakyat');
INSERT INTO "master"."department" VALUES (2, '005', 'Kementerian Dalam Negeri');

-- ----------------------------
-- Table structure for dokumen
-- ----------------------------
DROP TABLE IF EXISTS "master"."dokumen";
CREATE TABLE "master"."dokumen" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "keterangan" text COLLATE "pg_catalog"."default",
  "file" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Table structure for donor
-- ----------------------------
DROP TABLE IF EXISTS "master"."donor";
CREATE TABLE "master"."donor" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "kategori" varchar(100) COLLATE "pg_catalog"."default",
  "singkatan" varchar(30) COLLATE "pg_catalog"."default",
  "no_register" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of donor
-- ----------------------------
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('World Bank', 'Multilateral', 'WB', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Asian Infrastructure Investment Bank', 'Multilateral', 'AIIB', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Islamic Development Bank', 'Multilateral', 'IsDB', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Asian Development Bank', 'Multilateral', 'ADB', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Japan International Cooperation Agency (Jepang)', 'Bilateral', 'JICA', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Kreditanstalt Für Wiederaufbau (Jerman)', 'Bilateral', 'KfW', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Australian Aid (Australia)', 'Bilateral', 'AusAID', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('State Secretariat For Economic Affairs', 'Bilateral', 'SECO', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Department Of Foreign Affairs And Trade', 'Bilateral', 'DFAT', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('The United Cities And Local Governments Asia Pacific', 'Multilateral', 'UCLG ASPAC', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('United States Agency For International Development', 'Bilateral', 'USAID', NULL);
INSERT INTO "master"."donor" ("nama","kategori","singkatan","no_register") VALUES ('Belanda', 'Bilateral', 'Belanda', NULL);

-- ----------------------------
-- Table structure for jenis_satker
-- ----------------------------
DROP TABLE IF EXISTS "master"."jenis_satker";
CREATE TABLE "master"."jenis_satker" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "kode" varchar(3) COLLATE "pg_catalog"."default",
  "nama" varchar(150) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of jenis_satker
-- ----------------------------
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('1', 'Permanen-Pusat');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('2', 'Vertikal-Upt');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('3', 'Khusus');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('4', 'Skpd');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('5', 'Non Vertikal Lainnya');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('6', 'Sementara');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('7', 'Bumn');
INSERT INTO "master"."jenis_satker" ("kode","nama") VALUES ('8', 'Badan Layanan Umum');

-- ----------------------------
-- Table structure for kategori_kinerja
-- ----------------------------
DROP TABLE IF EXISTS "master"."kategori_kinerja";
CREATE TABLE "master"."kategori_kinerja" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "kategori" varchar(20) COLLATE "pg_catalog"."default",
  "pv" text COLLATE "pg_catalog"."default",
  "etr" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kategori_kinerja
-- ----------------------------
INSERT INTO "master"."kategori_kinerja" ("kategori","pv","etr") VALUES ('At Risk', 'PV <= 0,3', '71%');
INSERT INTO "master"."kategori_kinerja" ("kategori","pv","etr") VALUES ('Behind Schedule', '0,3 < PV < 1', '70%');
INSERT INTO "master"."kategori_kinerja" ("kategori","pv","etr") VALUES ('On Schedule', 'PV >= 1', '-');

-- ----------------------------
-- Table structure for kl_eksternal
-- ----------------------------
DROP TABLE IF EXISTS "master"."kl_eksternal";
CREATE TABLE "master"."kl_eksternal" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kl_eksternal
-- ----------------------------
INSERT INTO "master"."kl_eksternal" ("nama") VALUES ('Kemendagri');
INSERT INTO "master"."kl_eksternal" ("nama") VALUES ('Kemenkes');
INSERT INTO "master"."kl_eksternal" ("nama") VALUES ('Bappenas');

-- ----------------------------
-- Table structure for management_unit
-- ----------------------------
DROP TABLE IF EXISTS "master"."management_unit";
CREATE TABLE "master"."management_unit" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "kegiatan_id" int8,
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "jabatan" varchar(255) COLLATE "pg_catalog"."default",
  "alamat" text COLLATE "pg_catalog"."default",
  "telp" varchar(20) COLLATE "pg_catalog"."default",
  "fax" varchar(20) COLLATE "pg_catalog"."default",
  "email" varchar(255) COLLATE "pg_catalog"."default",
  "type" varchar(4) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of management_unit
-- ----------------------------
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (1, 'Aaa', 'aaa', 'aaa', '123', '13', 'sd', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (1, 'Asdasd', 'asdasd', 'asdasd', '123', '123', 'email@coba.com', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (2, 'Asri Indiyani, St, Msc.', 'Kepala CPMU MSMIP', 'Jalan Pattimura No. 20, Jakarta Selatan', '021-72797175', '021-7261939', 'abcd@gmail.com', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (3, 'Ir. Johannes Wahju Kusumosusanto, Mum.', 'Direktur Pengembangan Kawasan Permukiman', 'Jl. Pattimura No. 20', '021 72796462', '021 72796462', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (3, 'Aswin G. Sukahar, St. Mbenv', 'Kepala PMU', 'Jl. Pattimura No. 20', '021 72796462', '021 72796462', 'agsukahar@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (3, 'Ir. Didiet A. Akhdiat, M.si', 'Kepala Satker Dir. PKP', 'Jl. Pattimura No. 20', '021 72796462', '021 72796462', 'didietakhdiat@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (3, 'Mokhamad Fakhrur Rifqie, S. Ip', 'PPK Pembinaan Manajemen II Dit. PKP', 'Jl. Cipaku V No.1 Kebayoran Baru', '021 72799234-8', '021 72799234-8', 'mokhamad_rifqie@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (4, 'Johannes Wahju Kusumosusanto, Ir., Mum.', 'Direktur Pengembangan Kawasan Permukiman', 'Jl. Pattimura No. 20', '021 72796158', '021 72796155', 'pkkp1.nsup@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (4, 'Aswin G. Sukahar, St. Mbenv', 'Kawasan Permukiman Wilayah III', 'Jl. Pattimura No. 20', '021 72796158', '021 72796155', 'agsukahar@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (4, 'Mokhamad Fakhrur Rifqie, S. Ip', 'PPK Pembinaan Manajemen II Dit. PKP', 'Jl. Cipaku V No.1 Kebayoran Baru', '021 72799234-8', '021 72799234-8', 'mokhamad_rifqie@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (5, 'Johannes Wahju Kusumosusanto, Ir., Mum.', 'Direktur Pengembangan Kawasan Permukiman', 'Jl. Pattimura No. 20', '021 72796158', '021 72796155', 'pkkp1.nsup@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (5, 'Aswin G. Sukahar, St. Mbenv', 'Kawasan Permukiman Wilayah III', 'Jl. Pattimura No. 20', '021 72796158', '021 72796155', 'agsukahar@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (5, 'Mokhamad Fakhrur Rifqie, S. Ip', 'PPK Pembinaan Manajemen II Dit. PKP', 'Jl. Cipaku V No.1 Kebayoran Baru', '021 72799234-8', '021 72799234-8', 'mokhamad_rifqie@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (6, 'Johannes Wahju Kusumosusanto, Ir., Mum.', 'Direktur Pengembangan Kawasan Permukiman', 'Jl. Pattimura No. 20', '021 72796158', '021 72796155', 'pkkp1.nsup@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (6, 'Aswin G. Sukahar, St. Mbenv', 'Kawasan Permukiman Wilayah III', 'Jl. Pattimura No. 20', '021 72796158', '021 72796155', 'agsukahar@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (6, 'Mokhamad Fakhrur Rifqie, S. Ip', 'PPK Pembinaan Manajemen II Dit. PKP', 'Jl. Cipaku V No.1 Kebayoran Baru', '021 72799234-8', '021 72799234-8', 'mokhamad_rifqie@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (7, 'Ir. Prasetyo, M.eng', 'Direktur Sanitasi', 'Jl. Pattimura No. 20, Kebayoran Baru, Jaksel', '021-72797175', '021-7261939', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (7, 'Rinaldy Pradana, St,m.sc', 'Kepala PMU SSDP DKI Jakarta', 'Jl. Pattimura No. 20, Kebayoran Baru, Jaksel', '021 72797168', '021 72797168', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (8, 'Ir. Prasetyo, M.eng', 'Direktur Sanitasi', 'Jl. Pattimura No. 20, Kebayoran Baru, Jaksel', '021 72797175', '021 7261939', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (8, 'Rinaldy Pradana, St,m.sc', 'Kepala PMU SSDP DKI Jakarta', 'Jl. Pattimura No. 20, Kebayoran Baru, Jaksel', '021 72797168', '021 72797168', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (9, 'Ir. Prasetyo, M.eng', 'Direktur Sanitasi', 'Jl. Pattimura No. 20, Kebayoran Baru, Jaksel', '021 72797175', '021 7261939', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (9, 'Rinaldy Pradana, St,m.sc', 'Kepala PMU SSDP DKI Jakarta', 'Jl. Pattimura No. 20, Kebayoran Baru, Jaksel', '021 72797168', '021 72797168', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (10, 'Zikra, St, Mt', 'Ketua CPMU NUWSP', 'Jl. Pattimura No. 20', '6281219858885', '---', 'cpmunuwsp@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (10, 'Wijayanto St, M.si', 'Kasubdit Wilayah I Direktorat Air Minum', 'Jl. Pattimura No. 20', '021 7279823', '021 7270823', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (10, 'Ichwina', 'Wakil Ketua CPMU NUWSP', 'Jl. Pattimura No. 20', '---', '081371223443', 'cpmunuwsp@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (10, 'Nitta Rosalin, S.e., M.a.', 'Kasubdit Perumahan dan Kawasan Permukiman', 'Jl. Medan Merdeka Utara No. 7, Jakarta', '021 3450038', '---', 'nittaperkim@gmail.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (11, 'Mince Halima, St, M.sc', 'Wakil Ketua 1', 'Jl. Pattimura No. 20', '021 72796907', '021 72796907', 'mincehalima@yahoo.com', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (11, 'Ely Setyawati, Skm., Mkm', 'Wakil Ketua 2', 'Ditjen. KesMas, Jl. HR. Rasuna Said Blok X-5 Kav 4-9', '021 5221225', '021 5221225', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (11, 'M. Rahayuningsih, S.ag, M.si', 'Wakil Ketua 3', 'Jl. Raya Pasar Minggu Km. 19', '021 79197109', '021 79197109', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (11, 'Nitta Rosalin, Se., Ma', 'Wakil Ketua 4', 'Jl. Taman Makam Kalibata No. 20', '021 7942653', '021 7942653', 'nittarosalin@yahoo.com', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (11, 'Dra. Anastutik Wiryaningsih, M.si', 'Wakil Ketua 5', 'Jl. Taman Makam Kalibata No. 17', '021 7994372', '021 7994372', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (11, 'Novi Rindani, St., Mt', 'Kepala PMU', 'Jl. Pattimura No. 20', '021 72796907', '021 72796907', 'novirindani@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (12, 'Ir. Johannes Wahju Kusumosusanto, Mum.', 'Direktur Pengembangan Kawasan Permukiman', 'Jl. Pattimura No. 20', '021 72796462', '021 72796462', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (12, 'Aswin G. Sukahar, St. Mbenv', 'Kepala PMU', 'Jl. Pattimura No. 20', '021 72796462', '021 72796462', 'agsukahar@gmail.com', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (12, 'Ir. Didiet A. Akhdiat, M.si', 'Kepala Satker Dir. PKP', 'Jl. Pattimura No. 20', '021 72796462', '021 72796462', 'didietakhdiat@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (12, 'Mokhamad Fakhrur Rifqie, S. Ip', 'PPK Pembinaan Manajemen II Dit. PKP', 'Jl. Cipaku V No.1 Kebayoran Baru', '021 72799234-8', '021 72799234-8', 'mokhamad_rifqie@yahoo.com', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (13, 'Ir. Prasetyo, M.eng', 'Direktur Sanitasi', 'JL. Patimura No 20', '021 2797175', '021 261939', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (13, 'Terra Prima Sari St., M.sc.', 'Wakil Ketua PMU', 'Jl. Patimura No. 20', '021 2797178', '021 2797178', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (13, 'Alvan Fuaddy Putra', 'Jafung Teknik Penyehatan Lingkungan', 'Jl. Patimura No. 20', '021 72797175', '021 7261939', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (13, 'Indra Maulana Syamsul Arief', 'Kasubdit Pekerjaan Umum, Direktorat Sinkronisasi Urusan Pemerintah Daerah II, Ditjen Bangda', 'Jl. Taman Makam Pahlawan No. 20 Kalibata', '021 7942653', '021 7942653', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Arie Setiadi Moerwanto, Msc', 'Ketua Satgas Penanggulangan Bencana Sulteng', 'Jl. Pattimura No. 20', '021 7397754', '021 7395226', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Edward Abdurrahman, M.sc', 'Anggota', 'Jl. Pattimura No. 20', '021 72796581', '021 72799232', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Johanes Wahyu Kusumosusanto, Mum', 'Ketua', 'Jl. Pattimura No. 20', '021 72797427', '021 72797427', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Boby Ali Azhari, S.t, M.sc.', 'Anggota', 'Jl. Pattimura No. 20', '---', '---', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Yudha Mediawan, M.dev. Plg.', 'Anggota', 'Jl. Pattimura No. 20', '021 7279823', '021 7270823', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Prasetyo, M.eng.', 'Anggota', 'Jl. Pattimura No. 20', '---', '---', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Iwan Suprijanto, St., M.t', 'Anggota', 'Jl. Pattimura No. 20', '---', '---', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Dedi Permadi, Ces.', 'Ketua', 'Jl. Pattimura No. 20', '021 7228497', '---', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Sahabudin, St. Mt.', 'Ketua', 'Gedung PIP2B, Jl Soekarno Hatta No. 30 Kota Palu', '---', '---', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (14, 'Ir. Suko Wiyono, M.si.', 'Ketua', '---', '---', '---', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (15, 'Ir. Prasetyo, M.eng.', 'Direktur', 'Jl. Pattimura No. 20', '021 72797175', '021 7261939', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (15, 'Terra Prima Sari St., M.sc.', 'Kepala', 'Jl. Pattimura No. 20', '021 72797178', '021 72797178', '---', 'PMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (15, 'Evry Biaktama Meliala St., M.se., Ma.', 'Kepala', 'JL. H. Agus Salim No. 2 Kotabaru Jambi', '0741 42521', '0741 42521', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (15, 'M. Reva Sastrodiningrat', 'Kepala', 'JL. Raya Menganti Wiyung. Surabaya', '031 7523721', '031 7523722', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (16, 'Ir. Anang Muchlis, Sp. Psda', 'Direktur Air Minum', 'Jl. Pattimura No. 20', '021 72796823', '021 72796905', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (16, 'Henny Wardhani Simarmata, St, M. Sc', 'Kepala', 'Jl. Pattimura No. 20', '021 72796823', '021 72796905', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (16, 'Cakra Nagara, S.t., M.e., M.t.', 'Kepala Balai PPW Jawa Tengah', 'Jl. Gajah Mungkur Selatan No. 14-16, Semarang', '024 8442050', '024-8411870', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (16, 'Anggoro Putro, S.t., M.sc.', 'Kepala Satker PPP Wilayah II Prov. Jawa Tengah', 'Jl. Gajah Mungkur Selatan No. 14-16, Semarang', '024 8442050', '024 8411870', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (16, 'Arif Nurjiyanto, S.t.', 'PPK Air Minum, PPP Wilayah II Prov. Jawa Tengah', 'Jl. Gajah Mungkur Selatan No. 14-16, Semarang', '024 8442050', '024 8411870', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (26, 'Prasetyo', 'Direktur Sanitasi', 'Jl. Pattimura No. 20', '---', '---', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (26, 'Mahardiani Kusumaningrum', 'Kepala CPMU', 'Jl. Pattimura No. 20', '081385800957', '---', 'mahardiani.k@gmail.com', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (27, 'Prasetyo', 'Direktur Sanitasi', 'Jl. Pattimura No. 20', '---', '---', '---', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (27, 'Mahardiani Kusumaningrum', 'Kepala CPMU', 'Jl. Pattimura No. 20', '081385800957', '---', 'mahardiani.k@gmail.com', 'CPMU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (27, 'Endah Sitaresmi Suryandari', 'Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Surakarta', 'Jl. Blimbing No.10, Purwodiningratan, Kec. Jebres, Kota Surakarta', '---', '---', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (27, 'Agus Slamet Firdaus', 'Kepala Badan Keuangan dan Aset Daerah Kota Bandung', 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung', '---', '---', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (27, 'Chairul Abidin', 'Kepala Bidang Cipta Karya, Dinas SDACKTR Provinsi Sumetera Utara', 'Jl. Sakti Lubis No.7, Siti Rejo I, Kec. Medan Kota, Kota Medan', '---', '---', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (27, 'Yusmada Faizal Samad', 'Kepala Dinas Sumber Daya Air Provinsi DKI Jakarta', 'Gedung Dinas Teknis Jatibaru, Pemerintah, Jl. Taman Jati Baru No.1, RT.17/RW.1, Cideng, Kecamatan Gambir, Kota Jakarta Pusat', '---', '---', '---', 'PIU');
INSERT INTO "master"."management_unit" ("kegiatan_id","nama","jabatan","alamat","telp","fax","email","type") VALUES (28, 'Adi', 'Ketua', 'Jl. Pattimura No 20', '021-10001', '---', '---', 'CPMU');

-- ----------------------------
-- Table structure for mata_uang
-- ----------------------------
DROP TABLE IF EXISTS "master"."mata_uang";
CREATE TABLE "master"."mata_uang" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "kode" varchar(4) COLLATE "pg_catalog"."default",
  "nama" varchar(100) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of mata_uang
-- ----------------------------
INSERT INTO "master"."mata_uang" ("kode","nama") VALUES ('USD', 'United Stated Of American Dollar');
INSERT INTO "master"."mata_uang" ("kode","nama") VALUES ('IDR', 'Indonesian Rupiah');
INSERT INTO "master"."mata_uang" ("kode","nama") VALUES ('YEN', 'Japanese Yen');
INSERT INTO "master"."mata_uang" ("kode","nama") VALUES ('EUR', 'Euro');
INSERT INTO "master"."mata_uang" ("kode","nama") VALUES ('AUD', 'Australian Dolar');
INSERT INTO "master"."mata_uang" ("kode","nama") VALUES ('CHF', 'Franc Swiss');

-- ----------------------------
-- Table structure for penarikan
-- ----------------------------
DROP TABLE IF EXISTS "master"."penarikan";
CREATE TABLE "master"."penarikan" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Table structure for rate_mata_uang
-- ----------------------------
DROP TABLE IF EXISTS "master"."rate_mata_uang";
CREATE TABLE "master"."rate_mata_uang" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "mata_uang_id" int4,
  "awal" date,
  "akhir" date,
  "rate" float8
)
;

-- ----------------------------
-- Records of rate_mata_uang
-- ----------------------------
INSERT INTO "master"."rate_mata_uang" ("mata_uang_id","awal","akhir","rate") VALUES (1, '2021-01-01', '2021-12-31', 14000);
INSERT INTO "master"."rate_mata_uang" ("mata_uang_id","awal","akhir","rate") VALUES (4, '2021-09-01', '2021-12-31', 16000);
INSERT INTO "master"."rate_mata_uang" ("mata_uang_id","awal","akhir","rate") VALUES (5, '2021-09-01', '2021-12-31', 10000);
INSERT INTO "master"."rate_mata_uang" ("mata_uang_id","awal","akhir","rate") VALUES (3, '2021-09-01', '2021-12-31', 130);

-- ----------------------------
-- Table structure for satker
-- ----------------------------
DROP TABLE IF EXISTS "master"."satker";
CREATE TABLE "master"."satker" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "kode" varchar(10) COLLATE "pg_catalog"."default",
  "nama" varchar(150) COLLATE "pg_catalog"."default",
  "department_id" int8,
  "unor_id" int8,
  "afiliasi" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of satker
-- ----------------------------
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('466190', 'DIREKTORAT SANITASI', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('420139', 'DIREKTORAT KEPATUHAN INTERN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('452771', 'DIREKTORAT PENGEMBANGAN KAWASAN PERMUKIMAN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631097', 'DIREKTORAT PRASARANA STRATEGIS', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('466162', 'DIREKTORAT SISTEM DAN STRATEGI PENYELENGGARAAN INFRASTRUKTUR PERMUKIMAN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('466178', 'DIREKTORAT AIR MINUM', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('420138', 'DIREKTORAT BINA TEKNIK PERMUKIMAN DAN PERUMAHAN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('420142', 'BALAI KAWASAN PERMUKIMAN DAN PERUMAHAN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('420140', 'BALAI BAHAN DAN STRUKTUR BANGUNAN GEDUNG', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('420141', 'BALAI SAINS BANGUNAN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('493197', 'BALAI TEKNOLOGI AIR MINUM', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('493189', 'BALAI TEKNOLOGI SANITASI', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631109', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI ACEH', 1, 1, 'ACEH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505730', 'BALAI PRASARANA PERMUKIMAN WILAYAH ACEH', 1, 1, 'ACEH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631143', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI BALI', 1, 1, 'BALI');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505106', 'BALAI PRASARANA PERMUKIMAN WILAYAH BALI', 1, 1, 'BALI');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505840', 'BALAI PRASARANA PERMUKIMAN WILAYAH BANTEN', 1, 1, 'BANTEN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631121', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI BANTEN', 1, 1, 'BANTEN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631117', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI BENGKULU', 1, 1, 'BENGKULU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505099', 'BALAI PRASARANA PERMUKIMAN WILAYAH BENGKULU', 1, 1, 'BENGKULU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505101', 'BALAI PRASARANA PERMUKIMAN WILAYAH DI YOGYAKARTA', 1, 1, 'DI YOGYAKARTA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631127', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI D.I. YOGYAKARTA', 1, 1, 'DI YOGYAKARTA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631136', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI GORONTALO', 1, 1, 'GORONTALO');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505103', 'BALAI PRASARANA PERMUKIMAN WILAYAH GORONTALO', 1, 1, 'GORONTALO');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631108', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH JAKARTA METROPOLITAN', 1, 1, 'JAKARTA METROPOLITAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631116', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI JAMBI', 1, 1, 'JAMBI');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505770', 'BALAI PRASARANA PERMUKIMAN WILAYAH JAMBI', 1, 1, 'JAMBI');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631123', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI JAWA BARAT', 1, 1, 'JAWA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631124', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI JAWA BARAT', 1, 1, 'JAWA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505837', 'BALAI PRASARANA PERMUKIMAN WILAYAH JAWA BARAT', 1, 1, 'JAWA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631126', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI JAWA TENGAH', 1, 1, 'JAWA TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('633073', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH III PROVINSI JAWA TENGAH', 1, 1, 'JAWA TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505843', 'BALAI PRASARANA PERMUKIMAN WILAYAH JAWA TENGAH', 1, 1, 'JAWA TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631125', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI JAWA TENGAH', 1, 1, 'JAWA TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631128', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI JAWA TIMUR', 1, 1, 'JAWA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631129', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI JAWA TIMUR', 1, 1, 'JAWA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505868', 'BALAI PRASARANA PERMUKIMAN WILAYAH JAWA TIMUR', 1, 1, 'JAWA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505874', 'BALAI PRASARANA PERMUKIMAN WILAYAH KALIMANTAN BARAT', 1, 1, 'KALIMANTAN BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631130', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI KALIMANTAN BARAT', 1, 1, 'KALIMANTAN BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('401042', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI KALIMANTAN BARAT', 1, 1, 'KALIMANTAN BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505899', 'BALAI PRASARANA PERMUKIMAN WILAYAH KALIMANTAN SELATAN', 1, 1, 'KALIMANTAN SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631131', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI KALIMANTAN SELATAN', 1, 1, 'KALIMANTAN SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631132', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI KALIMANTAN TENGAH', 1, 1, 'KALIMANTAN TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505880', 'BALAI PRASARANA PERMUKIMAN WILAYAH KALIMANTAN TENGAH', 1, 1, 'KALIMANTAN TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505900', 'BALAI PRASARANA PERMUKIMAN WILAYAH KALIMANTAN TIMUR', 1, 1, 'KALIMANTAN TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631134', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI KALIMANTAN TIMUR', 1, 1, 'KALIMANTAN TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631133', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI KALIMANTAN UTARA', 1, 1, 'KALIMANTAN UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('400740', 'BALAI PRASARANA PERMUKIMAN WILAYAH KALIMANTAN UTARA', 1, 1, 'KALIMANTAN UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505100', 'BALAI PRASARANA PERMUKIMAN WILAYAH KEPULAUAN BANGKA BELITUNG', 1, 1, 'KEPULAUAN BANGKA BELITUNG');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631119', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI KEPULAUAN BANGKA BELITUNG', 1, 1, 'KEPULAUAN BANGKA BELITUNG');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631115', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI KEPULAUAN RIAU', 1, 1, 'KEPULAUAN RIAU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505097', 'BALAI PRASARANA PERMUKIMAN WILAYAH KEPULAUAN RIAU', 1, 1, 'KEPULAUAN RIAU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631120', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI LAMPUNG', 1, 1, 'LAMPUNG');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505821', 'BALAI PRASARANA PERMUKIMAN WILAYAH LAMPUNG', 1, 1, 'LAMPUNG');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505108', 'BALAI PRASARANA PERMUKIMAN WILAYAH MALUKU', 1, 1, 'MALUKU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631148', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI MALUKU', 1, 1, 'MALUKU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505110', 'BALAI PRASARANA PERMUKIMAN WILAYAH MALUKU UTARA', 1, 1, 'MALUKU UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631145', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI NUSA TENGGARA BARAT', 1, 1, 'NUSA TENGGARA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505107', 'BALAI PRASARANA PERMUKIMAN WILAYAH NUSA TENGGARA BARAT', 1, 1, 'NUSA TENGGARA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631147', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI NUSA TENGGARA TIMUR', 1, 1, 'NUSA TENGGARA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('452780', 'DIREKTORAT BINA PENATAAN BANGUNAN', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('622213', 'SEKRETARIAT DIREKTORAT JENDERAL CIPTA KARYA', 1, 1, 'SATKER PUSAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('493183', 'BALAI PRASARANA PERMUKIMAN WILAYAH JAKARTA METROPOLITAN', 1, 1, 'JAKARTA METROPOLITAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631149', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI MALUKU UTARA', 1, 1, 'MALUKU UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('401043', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH III PROVINSI NUSA TENGGARA TIMUR', 1, 1, 'NUSA TENGGARA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631146', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI NUSA TENGGARA TIMUR', 1, 1, 'NUSA TENGGARA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505993', 'BALAI PRASARANA PERMUKIMAN WILAYAH NUSA TENGGARA TIMUR', 1, 1, 'NUSA TENGGARA TIMUR');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631151', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI PAPUA', 1, 1, 'PAPUA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631195', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI PAPUA', 1, 1, 'PAPUA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('506022', 'BALAI PRASARANA PERMUKIMAN WILAYAH PAPUA', 1, 1, 'PAPUA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631152', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI PAPUA BARAT', 1, 1, 'PAPUA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('506038', 'BALAI PRASARANA PERMUKIMAN WILAYAH PAPUA BARAT', 1, 1, 'PAPUA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631114', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI RIAU', 1, 1, 'RIAU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505096', 'BALAI PRASARANA PERMUKIMAN WILAYAH RIAU', 1, 1, 'RIAU');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631141', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI SULAWESI BARAT', 1, 1, 'SULAWESI BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505104', 'BALAI PRASARANA PERMUKIMAN WILAYAH SULAWESI BARAT', 1, 1, 'SULAWESI BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631139', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI SULAWESI SELATAN', 1, 1, 'SULAWESI SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631140', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI SULAWESI SELATAN', 1, 1, 'SULAWESI SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505940', 'BALAI PRASARANA PERMUKIMAN WILAYAH SULAWESI SELATAN', 1, 1, 'SULAWESI SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631137', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI SULAWESI TENGAH', 1, 1, 'SULAWESI TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505931', 'BALAI PRASARANA PERMUKIMAN WILAYAH SULAWESI TENGAH', 1, 1, 'SULAWESI TENGAH');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631142', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI SULAWESI TENGGARA', 1, 1, 'SULAWESI TENGGARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505105', 'BALAI PRASARANA PERMUKIMAN WILAYAH SULAWESI TENGGARA', 1, 1, 'SULAWESI TENGGARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631135', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI SULAWESI UTARA', 1, 1, 'SULAWESI UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505102', 'BALAI PRASARANA PERMUKIMAN WILAYAH SULAWESI UTARA', 1, 1, 'SULAWESI UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631112', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI SUMATERA BARAT', 1, 1, 'SUMATERA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505755', 'BALAI PRASARANA PERMUKIMAN WILAYAH SUMATERA BARAT', 1, 1, 'SUMATERA BARAT');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631118', 'PELAKSANAAN PRASARANA PERMUKIMAN PROVINSI SUMATERA SELATAN', 1, 1, 'SUMATERA SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505786', 'BALAI PRASARANA PERMUKIMAN WILAYAH SUMATERA SELATAN', 1, 1, 'SUMATERA SELATAN');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('505749', 'BALAI PRASARANA PERMUKIMAN WILAYAH SUMATERA UTARA', 1, 1, 'SUMATERA UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631111', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH II PROVINSI SUMATERA UTARA', 1, 1, 'SUMATERA UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('401041', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH III PROVINSI SUMATERA UTARA', 1, 1, 'SUMATERA UTARA');
INSERT INTO "master"."satker" ("kode","nama","department_id","unor_id","afiliasi") VALUES ('631110', 'PELAKSANAAN PRASARANA PERMUKIMAN WILAYAH I PROVINSI SUMATERA UTARA', 1, 1, 'SUMATERA UTARA');

-- ----------------------------
-- Table structure for sektor
-- ----------------------------
DROP TABLE IF EXISTS "master"."sektor";
CREATE TABLE "master"."sektor" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "tipe" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of sektor
-- ----------------------------
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Direktorat Air Minum', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Direktorat Sanitasi', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Direktorat Bina Penataan Bangunan', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Setditjen Cipta Karya', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Direktorat Bina Teknik Permukiman Dan Perumahan', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Lintas Sektor', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Balai PPW Sulteng', 'Hibah');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Air Minum', 'Pinjaman');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('PKP', 'Pinjaman');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Sanitasi', 'Pinjaman');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('BPB', 'Pinjaman');
INSERT INTO "master"."sektor" ("nama","tipe") VALUES ('Lintas Sektor', 'Pinjaman');

-- ----------------------------
-- Table structure for unit_kerja
-- ----------------------------
DROP TABLE IF EXISTS "master"."unit_kerja";
CREATE TABLE "master"."unit_kerja" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "nama" varchar(150) COLLATE "pg_catalog"."default",
  "kode_satker" varchar(10) COLLATE "pg_catalog"."default",
  "provinsi_id" int2,
  "kabupaten_id" int4,
  "st" varchar(50) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of unit_kerja
-- ----------------------------
INSERT INTO "master"."unit_kerja" ("nama","kode_satker","provinsi_id","kabupaten_id","st") VALUES ('Kementerian Pupr', '027050', 11, 1, 'aktif');
INSERT INTO "master"."unit_kerja" ("nama","kode_satker","provinsi_id","kabupaten_id","st") VALUES ('Direktorat Jenderal Cipta Karya', '02705001', 11, 1, 'aktif');

-- ----------------------------
-- Table structure for unor
-- ----------------------------
DROP TABLE IF EXISTS "master"."unor";
CREATE TABLE "master"."unor" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "id_unor" varchar(255) COLLATE "pg_catalog"."default",
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "department_id" int8
)
;

-- ----------------------------
-- Records of unor
-- ----------------------------
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('2', 'Inspektorat Jenderal', NULL);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('3', 'Ditjen Sda', NULL);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('05', 'Direktorat Jenderal Cipta Karya', 1);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('1', 'Tes', 2);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('03', 'Direktorat Jenderal Sumber Daya Air', 1);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('04', 'Direktorat Jenderal Bina Marga', 1);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('02', 'Sekretariat Jenderal Pupr', 1);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('09', 'Badan Pengembangan Infrastruktur Wilayah', 1);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('06', 'Direktorat Jenderal Perumahan', 1);
INSERT INTO "master"."unor" ("id_unor","nama","department_id") VALUES ('08', 'Direktorat Jenderal Pembiayaan Infrastruktur Pekerjaan Umum Dan Perumahan', 1);

-- ----------------------------
-- Table structure for workflow
-- ----------------------------
DROP TABLE IF EXISTS "master"."workflow";
CREATE TABLE "master"."workflow" (
  "id" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "urutan" varchar(4) COLLATE "pg_catalog"."default",
  "nama" varchar(150) COLLATE "pg_catalog"."default",
  "waktu" varchar(5) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of workflow
-- ----------------------------
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('1', 'Dipk', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('2', 'Usulan Bluebook', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('3', 'Blue Book', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('4', 'Usulan Greenbook', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('5', 'Greenbook', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('6', 'Negosiasi', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('7', 'Loan Agreement', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('8', 'Loan Efektif', '30');
INSERT INTO "master"."workflow" ("urutan","nama","waktu") VALUES ('9', 'Amandemen', '30');

-- ----------------------------
-- Primary Key structure for table agency
-- ----------------------------
ALTER TABLE "master"."agency" ADD CONSTRAINT "agency_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table department
-- ----------------------------
ALTER TABLE "master"."department" ADD CONSTRAINT "department_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table dokumen
-- ----------------------------
ALTER TABLE "master"."dokumen" ADD CONSTRAINT "dokumen_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table donor
-- ----------------------------
ALTER TABLE "master"."donor" ADD CONSTRAINT "donor_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table jenis_satker
-- ----------------------------
ALTER TABLE "master"."jenis_satker" ADD CONSTRAINT "jenis_satker_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kategori_kinerja
-- ----------------------------
ALTER TABLE "master"."kategori_kinerja" ADD CONSTRAINT "kategori_kinerja_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kl_eksternal
-- ----------------------------
ALTER TABLE "master"."kl_eksternal" ADD CONSTRAINT "kl_eksternal_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table management_unit
-- ----------------------------
ALTER TABLE "master"."management_unit" ADD CONSTRAINT "management_unit_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table mata_uang
-- ----------------------------
ALTER TABLE "master"."mata_uang" ADD CONSTRAINT "mata_uang_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table penarikan
-- ----------------------------
ALTER TABLE "master"."penarikan" ADD CONSTRAINT "penarikan_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table rate_mata_uang
-- ----------------------------
ALTER TABLE "master"."rate_mata_uang" ADD CONSTRAINT "rate_mata_uang_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table satker
-- ----------------------------
ALTER TABLE "master"."satker" ADD CONSTRAINT "satker_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table sektor
-- ----------------------------
ALTER TABLE "master"."sektor" ADD CONSTRAINT "sektor_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table unit_kerja
-- ----------------------------
ALTER TABLE "master"."unit_kerja" ADD CONSTRAINT "unit_kerja_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table unor
-- ----------------------------
ALTER TABLE "master"."unor" ADD CONSTRAINT "unor_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table workflow
-- ----------------------------
ALTER TABLE "master"."workflow" ADD CONSTRAINT "workflow_pkey" PRIMARY KEY ("id");
