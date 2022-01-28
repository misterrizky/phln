/*
 Navicat Premium Data Transfer

 Source Server         : DPT ONLINE
 Source Server Type    : PostgreSQL
 Source Server Version : 100019
 Source Host           : 193.111.124.82:999
 Source Catalog        : si_phln
 Source Schema         : transaction

 Target Server Type    : PostgreSQL
 Target Server Version : 100019
 File Encoding         : 65001

 Date: 23/01/2022 18:05:34
*/


-- ----------------------------
-- Sequence structure for adendum_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."adendum_id_seq";
CREATE SEQUENCE "transaction"."adendum_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for hibah_langsung_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."hibah_langsung_id_seq";
CREATE SEQUENCE "transaction"."hibah_langsung_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_dipa_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_dipa_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_dipa_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_dokumen_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_dokumen_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_dokumen_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_exec_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_exec_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_exec_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_imp_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_imp_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_imp_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_kpi_detail_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_kpi_detail_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_kpi_detail_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_kpi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_kpi_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_kpi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for kegiatan_penyerapan_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."kegiatan_penyerapan_id_seq";
CREATE SEQUENCE "transaction"."kegiatan_penyerapan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for paket_alokasi_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."paket_alokasi_id_seq";
CREATE SEQUENCE "transaction"."paket_alokasi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for paket_awp_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."paket_awp_id_seq";
CREATE SEQUENCE "transaction"."paket_awp_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for paket_dipa_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."paket_dipa_id_seq";
CREATE SEQUENCE "transaction"."paket_dipa_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for paket_foto_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."paket_foto_id_seq";
CREATE SEQUENCE "transaction"."paket_foto_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for paket_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."paket_id_seq";
CREATE SEQUENCE "transaction"."paket_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for paket_owp_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "transaction"."paket_owp_id_seq";
CREATE SEQUENCE "transaction"."paket_owp_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for adendum
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."adendum";
CREATE TABLE "transaction"."adendum" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "paket_id" int8,
  "nilai_kontrak" float8,
  "tanggal_akhir_kontrak" date,
  "alasan" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Table structure for hibah_langsung
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."hibah_langsung";
CREATE TABLE "transaction"."hibah_langsung" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "sektor_id" int8,
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "singkatan" varchar(255) COLLATE "pg_catalog"."default",
  "donor_id" int8,
  "no_register" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_awal" date,
  "tanggal_akhir" date,
  "mata_uang_id" int8,
  "nilai" float8,
  "nilai_rp" float8,
  "real_nilai" float8,
  "real_rp" float8,
  "rate_mata_uang_id" int8
)
;

-- ----------------------------
-- Records of hibah_langsung
-- ----------------------------
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (1, 'JICA Partnership Program (Local Government Type) for Skills Support Regarding Leak Prevention Initiatives in Bandung City', NULL, 5, '2NTJXYVA', '2017-03-13', '2019-03-13', 3, 39000000, 5070000000, 32677213, 4248037690, 4);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (1, 'JICA Partnership Program (Local Government Type) The Project for Improvement of Implementation Capacity of Underground Leakage Countermeasure in Makassar City -Toward Effective Use of Water Resources', NULL, 5, '2BRAHEJA', '2019-09-26', '2022-10-31', 3, 60233800, 7830394000, 0, 0, 4);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (1, 'Improvement Of Tap Water Quality In Typical Peat Land Area Of Bengkalis', NULL, 5, '2SMGBPSA', '2016-03-29', '2019-02-28', 3, 26000000, 3380000000, 26777000, 3481010000, 4);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (2, 'The Technical Cooperation for Development Planning Project on Regional Solid Waste Management in Gerbangkertosusila Area', NULL, 5, '2MXRPJEA', '2018-03-01', '2022-09-30', 3, 299310000, 38910300000, 4873000, 665018310, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (2, 'Upscaling Wastewater Management and Treatment System for Supporting Water Quality Improvement in Bali', NULL, 5, '22Z7LYLA', '2019-08-30', '2020-07-31', 3, 41290700, 5367791000, 199000, 27157530, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (2, 'FORWARD (From Organic Waste to Recycling for Development)', NULL, 8, '73650201', '2013-07-01', '2020-12-31', 6, 1275000, 18232500000, 0, 0, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (3, 'Design and Construction for Public Spaces Development in Surabaya City', NULL, 10, '---', '2016-07-27', '2017-01-31', 1, 80000, 1120000000, 80000, 1120000000, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (4, 'Capacity building for high standard education and training programmes for the water supply sector in indonesia (NUFFIC)', NULL, 12, '73949501', '2013-06-01', '2017-05-31', 1, 2062000, 28868000000, 274508, 3968896200, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (5, 'The Project for Development of Low Carbon Affordable Apartments in the hot-humid climate of Indonesia towards Paris Agreement 2030 (SATREPS: Science and Technology', NULL, 5, '23XG12EA', '2020-01-24', '2025-01-24', 3, 350000000, 45500000000, 51856260, 6836209437, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (6, 'Indonesia-Australia Partnership for Infrastructure Facility (Fasilitas-Kemitraan Indonesia Australia untuk Infrastruktur (KIAT)', NULL, 9, '2FR4C6KA', '2017-02-13', '2022-06-30', 5, 10952024, 110461461081, 9099552, 91936741081, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (6, 'USAID UWASSH (Urban Water, Sanitation, Solid Waste and Hygiene)', NULL, 11, '000', '2020-10-01', '2022-02-22', 1, 21288173, 298034422000, 0, 0, 0);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (7, 'Project for Development of Regional Disaster Risk Resilience Plan (DR-DRRP)', NULL, 5, '27VDG2UA', '2018-12-12', '2021-11-01', 3, 577143, 74470000, 459071, 59235000, 4);
INSERT INTO "transaction"."hibah_langsung" ("sektor_id","nama","singkatan","donor_id","no_register","tanggal_awal","tanggal_akhir","mata_uang_id","nilai","nilai_rp","real_nilai","real_rp","rate_mata_uang_id") VALUES (2, 'FORWARD (From Organic Waste to Recycling for Development)', NULL, 8, '73650201', '2013-07-01', '2020-12-31', 4, 600000, 9600000000, 0, 0, 0);

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan";
CREATE TABLE "transaction"."kegiatan" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kode_register" varchar(255) COLLATE "pg_catalog"."default",
  "no_loan" varchar(255) COLLATE "pg_catalog"."default",
  "donor_id" int4,
  "mata_uang_id" int4,
  "judul" varchar(255) COLLATE "pg_catalog"."default",
  "tujuan" text COLLATE "pg_catalog"."default",
  "nilai" float8,
  "tanggal_efektif" date,
  "tanggal_closing" date,
  "tipe_kegiatan" varchar(15) COLLATE "pg_catalog"."default",
  "etr" float8,
  "dr" float8,
  "pv" float8,
  "penyerapan" float8,
  "st" varchar(30) COLLATE "pg_catalog"."default",
  "nilai_konversi" float8,
  "sasaran" text COLLATE "pg_catalog"."default",
  "komponen" text COLLATE "pg_catalog"."default",
  "lingkup_kegiatan" text COLLATE "pg_catalog"."default",
  "sektor_id" int2,
  "metode_pembayaran" int2,
  "mata_uang_2_id" int8,
  "nilai_2" float8
)
;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1NPB3NNA', 'IBRD 8578–ID', 1, 1, 'Wsslic III - PAMSIMAS III', '<p>Untuk Meningkatkan jumlah warga masyarakat kurang terlayani di wilayah perdesaan dan peri-urban yang dapat mengakses pelayanan air minum dan sanitasi yang berkelanjutan.<br></p>', 300000000, '2016-08-22', '2021-12-31', 'Pinjaman', 1.0066428206438, 0, 0, NULL, 'At Risk', 4200000, '<p>Warga Masyarakat berpenghasilan Rendah (MBR)<br></p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1.  Pemberdayaan masyarakat dan Pengembangan Kelembagaan Daerah.</p><p style="font-family: Poppins, Helvetica, sans-serif;">2. Meningkatkan Layanan dan Perilaku Kebersihan dan Sanitasi..</p><p style="font-family: Poppins, Helvetica, sans-serif;">3.  Infrastruktur Penyediaan Air Minum dan Sanitasi Umum.</p><p style="font-family: Poppins, Helvetica, sans-serif;">4.  Hibah Insentif Kabupaten dan Desa.</p><p style="font-family: Poppins, Helvetica, sans-serif;">5. Dukungan Implementasi dan Manajemen Proyek.</p>', NULL, 8, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1VFX57JA', 'IND-174', 3, 1, 'National Slum Upgrading Project (NSUP)', '<p>Meningkatkan akses terhadap infrastruktur dan pelayanan dasar di permukiman kumuh perkotaan untuk mendukung terwujudnya permukiman perkotaan yang layak huni, produktif dan berkelanjutan.<br></p>', 8000000, '2016-09-18', '2022-12-31', 'Pinjaman', 0.84662309368192, 0, 0, NULL, 'At Risk', 112000, '<p>1. Menurunnya luas permukiman kumuh.</p><p>2. Terbentuknya Pokja PKP kab./kota  yang berfungsi dengan baik.</p><p>3.  Tersusunnya RP2KPKP  dan RPLP  yang terintegrasi dalam RPJMD.</p><p>4. Meningkatnya penghasilan Masyarakat Berpenghasilan Rendah (MBR) melalui penyediaan infrastruktur dan livelihood.</p><div><span style="font-family: Poppins, Helvetica, sans-serif;">5. </span><font face="Poppins, Helvetica, sans-serif">Terlaksananya aturan bersama sebagai upaya perubahan PHBS masyarakat dan pencegahan kumuh.</font></div>', '<p>1. Blok Investasi untuk <span style="font-family: Poppins, Helvetica, sans-serif;">Penanggulangan dan  Pencegahan Kumuh</span>.</p><p>2. Membangun Kelembagaan Masyarakat dengan Pemerintah Daerah..</p><p>3. Menghasilkan pengetahuan dan keterkaitannya..</p><p>4. Darurat.</p>', NULL, 9, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1E2QGB5A', 'IP-581', 5, 3, 'Jakarta Sewerage Development Project (Zone 1)', '<p>Memperbaiki lingkungan air di DKI Jakarta dengan memperkenalkan sistem pembuangan limbah yang terdiri dari jaringan saluran pembuangan, Intstalasi Pengolahan Air Limbah (IPAL) sekaligus dengan operasi dan pemeliharaannya sehingga memberikan kontribusi untuk memperbaiki sanitasi perkotaan dan kesehatan warganya.<br></p>', 57061000000, '2020-09-28', '2027-09-28', 'Pinjaman', 0.18466353677621, 0, 0, NULL, 'At Risk', 7410, '<p style="font-family: Poppins, Helvetica, sans-serif;">1. Konsultan Pengawas Pekerjaan pada proyek Pengembangan Sewerage Jakarta Zone 1.</p><p style="font-family: Poppins, Helvetica, sans-serif;">2.&nbsp;Paket 1: Pembangunan WWTP.</p><p style="font-family: Poppins, Helvetica, sans-serif;">3.&nbsp;Paket 2: Pembangunan Selokan di Area 1-1.</p><p style="font-family: Poppins, Helvetica, sans-serif;">4.&nbsp;Paket 3: Pembangunan Selokan di Area 1-2.</p><p style="font-family: Poppins, Helvetica, sans-serif;">5.&nbsp;Paket 4: Pembangunan Selokan di Area percontohan.</p>', '<p>1. Konsultan Pengawas Pekerjaan pada proyek Pengembangan Sewerage Jakarta Zone 1.</p><p>2.&nbsp;Paket 1: Pembangunan WWTP.</p><p>3.&nbsp;Paket 2: Pembangunan Selokan di Area 1-1.</p><p>4.&nbsp;Paket 3: Pembangunan Selokan di Area 1-2.</p><p>5.&nbsp;Paket 4: Pembangunan Selokan di Area percontohan.</p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1. Konsultan Pengawas Pekerjaan pada proyek Pengembangan Sewerage Jakarta Zone 1.</p><p style="font-family: Poppins, Helvetica, sans-serif;">2.&nbsp;Paket 1: Pembangunan WWTP.</p><p style="font-family: Poppins, Helvetica, sans-serif;">3.&nbsp;Paket 2: Pembangunan Selokan di Area 1-1.</p><p style="font-family: Poppins, Helvetica, sans-serif;">4.&nbsp;Paket 3: Pembangunan Selokan di Area 1-2.</p><p style="font-family: Poppins, Helvetica, sans-serif;">5.&nbsp;Paket 4: Pembangunan Selokan di Area percontohan.</p>', 10, 2, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('73657101', '202060796', 6, 4, 'Emission Reduction In Cities - Solid Waste Management', '<p><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">Technical </span><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">Asistant</span><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;"> pada </span><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">program pengelolaan persampahan yang dilaksanakan di beberapa
kabupaten/kota terpilih di Indonesia&nbsp;</span><br></p>', 6980000, '2013-05-02', '2022-12-31', 'Hibah', 0.90028328611898, 0, 0, NULL, 'At Risk', 111680000000, '<p style="language:en-ID;line-height:normal;margin-top:0pt;margin-bottom:0pt;
margin-left:0in;margin-right:0in;text-indent:0in;text-align:justify;text-justify:
inter-ideograph;direction:ltr;unicode-bidi:embed;mso-vertical-align-alt:auto;
mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">Penguatan Kapasitas Kelembagaan Untuk Pemerintah Daerah Di Kota Jambi,
Kota Malang, Kabupaten Jombang, Kabupaten Sidoarjo.</span></p>', '<p style="line-height: 115%; margin-top: 0pt; margin-bottom: 10pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 9pt; font-family: Poppins; color: black;">Consulting
Services</span><span style="font-size: 9pt; font-family: Poppins; color: black;"> for
Accompanying Measures Consultant</span></p>', '<p><span style="font-size: 9pt; font-family: Poppins; color: black;">Consulting Services</span><span style="font-size: 9pt; font-family: Poppins; color: black;">&nbsp;for Accompanying Measures Consultant :</span></p><p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 14.6667px; text-align: justify;">Jambi City, </span></p><p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 14.6667px; text-align: justify;">Malang City, </span></p><p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 14.6667px; text-align: justify;">Jombang City,</span></p><p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 14.6667px; text-align: justify;">Sidoarjo City</span></p><p><br></p>', 10, 2, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('21683301', 'IP-565', 5, 3, 'Engineering Services For Sewerage System Development In DKI Jakarta Under Metropolitan Sanitation Management Investment Program', '<p>Memperbaiki lingkungan air di DKI Jakarta dengan memperkenalkan sistem pembuangan limbah yang terdiri dari jaringan saluran pembuangan, Intstalasi Pengolahan Air.<br></p>', 1236491991, '2014-06-23', '2021-06-23', 'Pinjaman', 1.0797809933516, 0, 0, NULL, 'At Risk', 160743958830, '<p>1.  Review studi sebelumnya untuk memberikan keputusan akhir pada semua cakupan dalam rangka pengembangan sistem pembuangan limbah di Zona 1. Proposal untuk pengembangan dan pengelolaan sumber daya IPAL mencakup skema pembiayaan.</p><p><span style="font-family: Poppins, Helvetica, sans-serif;">2.  Desain terperinci untuk jaringan saluran pembuangan di zona 1 termasuk batang utama, saluran pembuangan batang, dan pipa saluran pembuangan lain yang diperlukan untuk mengumpulkan limbah melalui drainase yang ada dan/atau melalui sistem terpisah dan stasiun pemompaan menengah jika diperlukan.</span><br></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">3. Asisten tender untuk jaringan saluran pembuangan di Zona 1.</span><br></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">4. Asisten tender untuk Instalasi Pengolahan Air Limbah (IPAL) di Zona 1.</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">5. </span><span style="font-family: Poppins, Helvetica, sans-serif;"> Memfasilitasi pelaksanaan upaya pengelolaan lingkungan hidup (UKL), Upaya pemantauan lingkungan hidup (UPL) dan Rencana Aksi Permukiman Kembali (RAP) untuk Zona 1 termasuk IPAL.</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">6. Transfer teknologi.</span><br></p>', '<p>Engineering Services for Sewerage System Development in DKI Jakarta Zone 1<br></p>', NULL, 10, 2, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('17D37YEA', '3793-INO', 4, 1, 'Emergency Assistance For Rehabilitation And Reconstruction In Central Sulawesi (EARR)', '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Pembangunan kembali infrastruktur yang hancur akibat peristiwa
bencana alam di Provinsi Sulawesi Tengah pada bulan September 2018. </span><br></p>', 380880.93, '2019-11-04', '2023-09-30', 'Pinjaman', 0.5617110799439, 0, 0, NULL, 'At Risk', 5320, '<div class="O0" style="line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 14.6667px; text-indent: 0px;">    Rehabilitasi dan rekonstruksi fasilitas pendidikan, fasilitas penyediaan air  minum, yang akan dibangun dengan standar ketahanan bencana yang lebih tinggi.</span><br></div>', '<p>1. Pekerjaan di Universitas Islam Negeri Palu.</p><p>2. Jasa Konsultansi: Manajemen Proyek dan Pengawasan Konstruksi Pembangunan Infrastruktur Penyediaan Air Minum Pusat Pengolahan Air Simoro (WTP) 300 lps.</p><p>3. Rehabilitation of Olobaju Water Treatment Plant (WTP) and Construction of Sidera Distribution Reservoir 2500 m3</p><p>4. Construction of Water Distribution Pipe and House Connection Zone 1 and Zone 2 in Sigi Regency.</p><p>5.  <span style="font-family: Poppins, Helvetica, sans-serif;">Construction of Water Distribution Pipe and House Connection Zone 3 and Zone 4 in Palu City.</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">6. Project Management and Supervision Consultant  (PMSC).</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">7. Implementing Unit PIU BPPW Sulawesi Tengah.</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">8. PMU Sekretariat Ditjen Cipta Karya.</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">9. Expert Panel.</span></p>', NULL, 12, 2, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('10884001', '8280 INO', 4, 1, 'Metropolitan Sanitation Management Investment Project (MSMIP)', '<p>1.  Dampak yang diharapkan dari kegiatan ini adalah pengurangan polusi lingkungan terhadap air permukaan dan air tanah dangkal.</p><p>2. Peningkatan akses ke layanan air limbah domestik yang lebih baik di Kota Pekanbaru, Jambi dan Makassar.</p>', 12000, '2014-07-09', '2023-12-31', 'Pinjaman', 0.79289428076256, 0, 0, 0, 'At Risk', 168, '<p>1. Pengerahan masyarakat untuk peningkatan kesehatan dan higyne (sanitasi berbasis masyarakat).</p><p>2. Pembangunan infrastruktur Sistem Pengelolaan Air Limbah Domestik Terpusat Skala Perkotaan (pekerjaan sipil dalam skala besar)</p><p>3. Dukungan implementasi proyek.</p>', '<p>1. PISC</p><p>2.1.  Pusat Pengolahan Air Limbah di Jambi.</p><p>2. 2. Pembangunan Selokan dan Penampungan Air Limbah termasuk Stasiun Pompa - Penangkap Bagian Timur.</p><p>3.1. <span style="font-family: Poppins, Helvetica, sans-serif;">Pusat Pengolahan Air Limbah di Pekanbaru</span>.</p><p>3.2. Paket Sistem Pemindahan dan Selokan di Pekanbaru- NC (AIF).</p><p>4.1. <span style="font-family: Poppins, Helvetica, sans-serif;">Pusat Pengolahan Air Limbah di Makassar</span>.</p><p>4.2. <span style="font-family: Poppins, Helvetica, sans-serif;">Paket Sistem Pemindahan dan Selokan di Makassar</span></p>', NULL, 10, 2, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('178292YA', '8979-ID', 1, 1, 'Central Sulawesi Rehabilitation And Reconstruction Project (CSRRP)', '<p>Membangun kembali dan menguatkan fasilitas fasilitas umum dan hunian yang lebih aman yang telah diseleksi didalam area terdampak bencana. <br></p>', 15000, '2020-06-30', '2024-06-30', 'Pinjaman', 0.38466803559206, 0, 0, NULL, 'At Risk', 210000000, '<p>Penduduk terkena dampak (WTB) tsunami dan gempa bumi pada tahun 2018 yang terjadi di Sulawesi Tengah <span style="font-family: Poppins, Helvetica, sans-serif;">sekitar 170.000 penduduk, namun hanya sekitar 7000 rumah tangga terkena bencana yang</span><span style="font-family: Poppins, Helvetica, sans-serif;">akan menerima manfaat dari unit hunian tetap yang aman. </span></p>', '<p>1. Pekerjaan, Jasa Konsultansi, Pelatihan dan Workshop, Jasa yang bukan konsultansi dan barang-barang yang berdasarkan Bagian 1.1, 2 and 3 pada proyek.</p><p>2. Hibah berdasarkan bagian 1.2 pada Project</p>', NULL, 12, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('COX001', 'A001', 1, 1, 'Peningkatan Kualitas Permukiman', '<p>Meningkatnya kualitas permukiman lingkungan</p>', 1000000, '2019-08-01', '2023-07-20', 'Pinjaman', 0.61904761904762, 1.60025, 2.5850192307692, 25604000000, 'Behind Schedule', 16000000000, '<p>Masyarakat Pesisir Pantai </p>', '<ol><li>Paket A.</li><li>Paket B.</li><li>Paket C</li></ol>', NULL, 9, 2, 2, 2000000000);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1HLVA6EA', 'IP-579', 5, 3, 'Jakarta Sewerage Development Project (Zone 6) ( Phase 1)', '<p>Memperbaiki lingkungan air di DKI Jakarta dengan memperkenalkan sistem pembuangan limbah yang terdiri dari jaringan saluran pembuangan, Intstalasi Pengolahan Air Limbah (IPAL) sekaligus dengan operasi dan pemeliharaannya sehingga memberikan kontribusi untuk memperbaiki sanitasi perkotaan dan kesehatan warganya.<br></p>', 30980000000, '2020-02-06', '2027-02-06', 'Pinjaman', 0.27649589362534, 0, 0, NULL, 'At Risk', 3900, '<p>1.&nbsp; Desain terperinci (DED) IPAL dan jaringan di zona 6 (fase 1) termasuk penentuan area layanan paket 1-4</p><p>2.&nbsp; Pendampingan lelang untuk paket 1-4</p><p>3.&nbsp; Pelaksanaan Konstruksi untuk paket 1-3</p><p>4.&nbsp; &nbsp;Supervisi pembangunan konstruksi untuk paket 1-4</p><p><span style="font-family: Poppins, Helvetica, sans-serif;">5.&nbsp; &nbsp;Fasilitasi dalam rangka implementasi Manajemen Lingkungan dan Pemantauan</span></p><p>6.&nbsp; Studi kelayakan untuk paket 2-4 (termasuk pengolahan lumpur)</p><p>7.&nbsp; Transfer teknologi</p><p>8.&nbsp; Sosialisasi kepada calon penerima manfaat (SR)</p>', '<p>Jasa Konsultansi untuk Desain dan Pengawasan.&nbsp;<br></p>', '<p>1.&nbsp;Desain terperinci (DED) IPAL dan jaringan di zona 6 (fase 1) termasuk penentuan area layanan paket 1-4.</p><p>2.&nbsp;Pendampingan lelang untuk paket 1-4</p><p>3.&nbsp;Pelaksanaan Konstruksi untuk paket 1-3.</p><p>4.&nbsp;Supervisi pembangunan konstruksi untuk paket 1-4.</p><p>5.&nbsp;Fasilitasi dalam rangka implementasi Manajemen Lingkungan dan Pemantauan.</p><p>6.&nbsp;Studi kelayakan untuk paket 2-4 (termasuk pengolahan lumpur.</p><p>7.&nbsp;Transfer teknologi.</p><p>8.&nbsp;Sosialisasi kepada calon penerima manfaat (SR)</p>', 10, 2, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1PTDQQAA', 'LN 004-IDN', 2, 1, 'National Slum Upgrading Project (NSUP)', '<p>1. Menyediakan infrastruktur permukiman.</p><p>2. Menurunnya luas permukiman kumuh perkotaan.</p><p>3. Mewujudkan kolaborasi penanganan permukiman kumuh dari berbagai stakeholder.</p><p>4. Meningkatkan kualitas permukiman yang layak huni dan berkelanjutan.</p>', 216500000, '2016-10-11', '2022-12-31', 'Pinjaman', 0.84507042253521, 0, 0, NULL, 'At Risk', 3024000, '<p>Meningkatkan akses infrastruktur masyarakat dan penguatan kapasitas pemerintah daerah dalam menyelenggarakan pencegahan. <br></p>', '<p>1. Hibah dan Sub Pinjaman berdasarkan bagian 3.2 dari proyek.</p><p>2. Barang, Pekerjaan, Jasa konsultansi, layanan non consl  dan pelatihan, beserta workshop berdasarkan bagian 1, 2, 3.1 dan 4 dari Proyek.</p><p>3.  Pengeluaran darurat berdasarkan bagian 5 dari Proyek.</p>', NULL, 9, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1ADPUNXA', 'BMZ No. 301000736', 6, 4, 'Spam Regional Wosusokas', '<p>Pembangunan IPA SPAM Regional Wosusokas, pipa jaringan distribusi utama, implementation consultant, dan kontingensi.<br></p>', 85700000, '2021-02-17', '2026-12-31', 'Pinjaman', 0.15398973401773, 0, 0, NULL, 'At Risk', 1371200000000, '<p>Peningkatan penyediaan air mium untuk Kab. Wonogiri, Kab. Sukoharjo, Kota Surakarta, dan Kab. Karanganyar.<br></p>', '<p>1.&nbsp;Pekerjaan Konstruksi (Construction Work).</p><p>2.&nbsp;Jasa Konsultansi (Implementation Consultant).</p><p>3.&nbsp;Kontingensi Teknis dan Finansial (Technical, Financial, and Exchange Rate Contingencies).</p>', '<p>1.&nbsp;Pekerjaan konstruksi untuk pembangunan IPA Kapasitas 750 liter/detik beserta bangunan pelengkap dan 4 paket pembangunan pipa jaringan distribusi utama.</p><p>2.&nbsp;Jasa konsultansi pembangunan SPAM Regional Wosusokas tahap 1.</p>', 8, 2, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('21667101', 'BMZ 2010 66 471', 6, 4, 'Emission Reduction In Cities: Solid Waste Management (ERIC)', '<p>Penyusunan DED TPA sampah, supervisi pembangunan TPA sampah, dan pembangunan TPA sampah, pengadaan alat berat dan kendaraan<br></p>', 7500, '2013-05-02', '2021-12-21', 'Pinjaman', 1.0072900158479, 0, 0, NULL, 'At Risk', 120000000, '<p><span style="font-family: Poppins, Helvetica, sans-serif;">Penigkatan pengelolaan sampah untuk Kota Jambi, Kota Malang, Kab. Jombang, serta Kab. Sidoarjo.</span><br></p>', '<p>1. Jasa Konsultansi</p><p>2. Pekerjaan Konstruksi</p><p>3. Alat Berat</p>', NULL, 10, NULL, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('16CJY14A', 'IP-580', 5, 3, 'Infrastructure Reconstruction Sector Loan For Central Sulawesi (IRSL)', '<p><span style="font-size: 12pt; font-family: Poppins; color: black;">Pembangunan
kembali infrastruktur yang hancur akibat bencana di Provinsi Sulawesi Tengah. </span><br></p>', 1773182700, '2020-04-22', '2026-04-22', 'Pinjaman', 0.28799634869922, 0, 0, NULL, 'At Risk', 130, '<p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 16px;">Rehabilitasi dan rekonstruksi fasilitas kesehatan yang akan dibangun dengan standar ketahanan bencana yang lebih tinggi.</span><br></p>', '<p><span style="font-family: Poppins;">1. </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Pembangunan </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Gedung</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> AMC </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Rumah</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Sakit</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Anutapura.</span></p><p><span style="font-size: 10pt; font-family: Poppins; color: black;">2. Jasa Konsultansi Internasional</span><span style="color: black; font-family: Poppins; font-size: 10pt;">.</span></p><p><span style="color: black; font-family: Poppins; font-size: 10pt;">3. </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Manajemen</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Konstruksi</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> Pembangunan </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Gedung</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> AMC </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Rumah</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Sakit</span><span style="font-size: 10pt; font-family: Poppins; color: black;"> </span><span style="font-size: 10pt; font-family: Poppins; color: black;">Anutapura.</span></p><p><span style="font-size: 10pt; font-family: Poppins; color: black;">4. Layanan Pendukung PMU.</span></p><p><span style="font-size: 10pt; font-family: "Calibri Light"; color: black;"> </span></p>', NULL, 12, 2, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('2B7K43PA', 'TF 0A6336', 1, 1, 'Dfat Support Trust Fund For Pamsimas Iii', '<p><span style="font-size: 12pt; font-family: Poppins; color: black;">Meningkatkan</span><span style="font-size: 12pt; font-family: Poppins; color: black;">
</span><span style="font-size: 12pt; font-family: Poppins; color: black;">jumlah</span><span style="font-size: 12pt; font-family: Poppins; color: black;"> </span><span style="font-size: 12pt; font-family: Poppins; color: black;">warga</span><span style="font-size: 12pt; font-family: Poppins; color: black;">
</span><span style="font-size: 12pt; font-family: Poppins; color: black;">masyarakat</span><span style="font-size: 12pt; font-family: Poppins; color: black;"> </span><span style="font-size: 12pt; font-family: Poppins; color: black;">kurang</span><span style="font-size: 12pt; font-family: Poppins; color: black;">
</span><span style="font-size: 12pt; font-family: Poppins; color: black;">terayani</span><span style="font-size: 12pt; font-family: Poppins; color: black;"> di wilayah </span><span style="font-size: 12pt; font-family: Poppins; color: black;">perdesaan</span><span style="font-size: 12pt; font-family: Poppins; color: black;">
dan peri-urban yang </span><span style="font-size: 12pt; font-family: Poppins; color: black;">dapat</span><span style="font-size: 12pt; font-family: Poppins; color: black;"> </span><span style="font-size: 12pt; font-family: Poppins; color: black;">mengakses</span><span style="font-size: 12pt; font-family: Poppins; color: black;">
</span><span style="font-size: 12pt; font-family: Poppins; color: black;">pelayanan</span><span style="font-size: 12pt; font-family: Poppins; color: black;"> air </span><span style="font-size: 12pt; font-family: Poppins; color: black;">minum</span><span style="font-size: 12pt; font-family: Poppins; color: black;">
dan </span><span style="font-size: 12pt; font-family: Poppins; color: black;">sanitasi</span><span style="font-size: 12pt; font-family: Poppins; color: black;"> yang </span><span style="font-size: 12pt; font-family: Poppins; color: black;">berkelanjutan</span><span style="font-size: 12pt; font-family: Poppins; color: black;">.
</span><br></p>', 26000000, '2019-01-29', '2021-12-31', 'Hibah', 1.0121836925961, 0, 0, NULL, 'At Risk', 364000000000, '<p><span style="font-size: 12pt; font-family: Poppins; color: black;">Warga</span><span style="font-size: 12pt; font-family: Poppins; color: black;">&nbsp;Masyarakat B</span><span style="font-size: 12pt; font-family: Poppins; color: black;">erpenghasilan</span><span style="font-size: 12pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 12pt; font-family: Poppins; color: black;">Rendah</span><span style="font-size: 12pt; font-family: Poppins; color: black;">&nbsp;(MBR).&nbsp;</span><br></p>', '<div class="O0" style="language:en-ID;line-height:normal;margin-top:0pt;
margin-bottom:0pt;margin-left:.19in;margin-right:0in;text-indent:-.19in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-vertical-align-alt:auto;mso-line-break-override:none;word-break:normal;
punctuation-wrap:hanging"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">1. Community Empowerment and Local Institutional Development</span></div><div class="O0" style="language:en-ID;line-height:normal;margin-top:0pt;
margin-bottom:0pt;margin-left:.19in;margin-right:0in;text-indent:-.19in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-vertical-align-alt:auto;mso-line-break-override:none;word-break:normal;
punctuation-wrap:hanging"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">2. Improving Hygiene and Sanitation Behavior and Services </span></div><div class="O0" style="language:en-ID;line-height:normal;margin-top:0pt;
margin-bottom:0pt;margin-left:.19in;margin-right:0in;text-indent:-.19in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-vertical-align-alt:auto;mso-line-break-override:none;word-break:normal;
punctuation-wrap:hanging"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">3. Water Supply and Public Sanitation Infrastructure</span></div><div class="O0" style="language:en-ID;line-height:normal;margin-top:0pt;
margin-bottom:0pt;margin-left:.19in;margin-right:0in;text-indent:-.19in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-vertical-align-alt:auto;mso-line-break-override:none;word-break:normal;
punctuation-wrap:hanging"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">4.&nbsp;</span><span style="color: black; font-family: Poppins; font-size: 11pt; letter-spacing: 0pt; text-indent: -0.19in;">District and Village Incentives Grants</span></div><div class="O0" style="language:en-ID;line-height:normal;margin-top:0pt;
margin-bottom:0pt;margin-left:.19in;margin-right:0in;text-indent:-.19in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-vertical-align-alt:auto;mso-line-break-override:none;word-break:normal;
punctuation-wrap:hanging"><span style="color: black; font-family: Poppins; font-size: 11pt; letter-spacing: 0pt; text-indent: -0.19in;">5.&nbsp;</span><span style="color: black; font-family: Poppins; font-size: 11pt; letter-spacing: 0pt; text-indent: -0.19in;">Implementation Support and Project Management&nbsp;</span></div>', '<div class="O0" style="language:en-ID;line-height:normal;margin-top:0pt;
margin-bottom:0pt;margin-left:.19in;margin-right:0in;text-indent:-.19in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-vertical-align-alt:auto;mso-line-break-override:none;word-break:normal;
punctuation-wrap:hanging"><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">1. Community Empowerment and Local Institutional Development</span></div><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">2. Improving Hygiene and Sanitation Behavior and Services</span></div><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">3. Water Supply and Public Sanitation Infrastructure</span></div><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; letter-spacing: 0pt; vertical-align: baseline;">4.&nbsp;</span><span style="color: black; font-family: Poppins; font-size: 11pt; letter-spacing: 0pt; text-indent: -0.19in;">District and Village Incentives Grants</span></div><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="color: black; font-family: Poppins; font-size: 11pt; letter-spacing: 0pt; text-indent: -0.19in;">5.&nbsp;</span><span style="color: black; font-family: Poppins; font-size: 11pt; letter-spacing: 0pt; text-indent: -0.19in;">Implementation Support and Project Management&nbsp;</span></div></div>', 10, 4, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('10883301', '3123-INO', 4, 1, 'Metropolitan Sanitation Management Investment Project (MSMIP) – OCR', '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Memenuhi</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">kebutuhan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">sanitasi</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">masyarakat</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">perkotaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> (</span><span style="font-size: 11pt; font-family: Poppins; color: black;">termasuk</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">rumah</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">tangga</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">berpenghasilan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">rendah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">) </span><span style="font-size: 11pt; font-family: Poppins; color: black;">dengan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">membangun</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Instalasi</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pengolahan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> Air </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Limbah</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Domestik</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> (IPALD) Skala </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Perkotaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">jaringan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">perpipaannya</span><span style="font-size: 11pt; font-family: Poppins; color: black;">.</span><br></p>', 24431849, '2014-07-09', '2023-12-31', 'Pinjaman', 0.79289428076256, 0, 0, NULL, 'At Risk', 342045886000, '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Kegiatan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">peningkatan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">pelayanan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> air </span><span style="font-size: 11pt; font-family: Poppins; color: black;">limbah</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">domestik</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">melalui</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">penyediaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Sistem</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pengelolaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> Air </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Limbah</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Domestik</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Terpusat</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> (SPALD-T) di </span><span style="font-size: 11pt; font-family: Poppins; color: black;">tiga</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">kota</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">besar</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> di Indonesia </span><span style="font-size: 11pt; font-family: Poppins; color: black;">yaitu</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> Jambi, Makassar, dan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pekanbaru</span><span style="font-size: 11pt; font-family: Poppins; color: black;">. </span><br></p>', '<p>1.</p>', NULL, 8, 2, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('73736401', '66387', 7, 5, 'Australia Indonesia Infrastructure Grants For Municipal Sanitation (Saiig)', '<p><font color="#000000" face="Tw Cen MT"><span style="font-size: 14.6667px; font-family: Poppins;">Untuk mempercepat pencapaian pembangunan di bidang sanitasi&nbsp;</span></font><br></p>', 13000000, '2012-07-01', '2021-12-31', 'Hibah', 1.0037463976945, 0, 0, NULL, 'At Risk', 130000000000, '<p>Permukiman penduduk minimal 200 KK<br></p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1.&nbsp;Pembangunan IPALD (+10 SR Pilot).</p><p style="font-family: Poppins, Helvetica, sans-serif;">2.&nbsp;Pembangunan SR&nbsp;</p>', '<p>1.&nbsp;Pembangunan IPALD (+10 SR Pilot).</p><p>2.&nbsp;Pembangunan SR&nbsp;</p>', 10, 4, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('2K6Q8TSA', '73826', 9, 5, 'The Palembang City Sewerage Project (Pcsp)', '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Tercapainya peningkatan derajat kesehatan dan produktivitas masyarakat Kota
Palembang yang terlayani pengelolaan air limbah domestik secara terpusat,
dengan target layanan air limbah domestik mencapai 21.700 SR</span><br></p>', 45000000, '2017-09-12', '2024-06-30', 'Hibah', 0.63793797825211, 0, 0, NULL, 'At Risk', 450000000000, '<p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 14.6667px;">Masyarakat Kota Palembang yang terlayani pengelolaan air limbah domestik secara terpusat, dengan target layanan air limbah domestik mencapai 21.700 SR</span><br></p>', '<div class="O0" style="line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp; &nbsp;1.&nbsp; Pekerjaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pematangan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Lahan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> IPALD</span></div><p><span style="font-family: Poppins;">

</span></p><div class="O0" style="line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp; &nbsp;2. Pembangunan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Instalasi</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pengolahan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> Air </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Limbah</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Domestik</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan
Pembangunan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Stasiun</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pompa</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">A.</span></div><div class="O0" style="line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp; &nbsp; (Pekerjaan</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">sistem</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">mekanikal</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;"> dan </span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">elektrikal</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;"> pada
unit air </span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">baku).</span><br></div>', '<div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="font-size: 11pt; font-family: Poppins; color: black;">1.&nbsp; Pekerjaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pematangan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Lahan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;IPALD</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span></div><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">2.Pembangunan&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">Instalasi</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">Pengolahan</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;Air&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">Limbah</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">Domestik</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;dan Pembangunan&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">Stasiun</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">Pompa</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">A.</span></div><div class="O0" style="font-family: Poppins, Helvetica, sans-serif; line-height: normal; margin: 0pt 0in 0pt 0.19in; text-indent: -0.19in; direction: ltr; unicode-bidi: embed; word-break: normal;"><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp; &nbsp; (Pekerjaan</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">sistem</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">mekanikal</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;dan&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">elektrikal</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">&nbsp;pada unit air&nbsp;</span><span style="text-indent: -0.19in; font-size: 11pt; font-family: Poppins; color: black;">baku).</span></div>', 10, 4, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1HFQ7GNA', 'WB 9024-ID', 1, 1, 'Improvement Of Solid Waste Management To Support Regional Area And Metropolitan Cities (ISWMP)', '<p>Meningkatkan  pelayanan pengelolaan sampah bagi penduduk perkotaan pada beberapa kota terpilih di wilayah Indonesia<br></p>', 100000000, '2020-04-03', '2025-11-30', 'Pinjaman', 0.31446540880503, 0, 0, NULL, 'At Risk', 1400000, '<p>1.  Meningkatnya akses masyarakat terhadap perumahan dan permukiman layak.</p><p>2.  Pengurangan sampah pelastik dan sampah laut lainnya.</p><p>3.   Mendorong kota/kabupaten mampu mengembangkan kebijakan dan strategi pengelolaan sampah terpadu.</p><p>4.  Pengendalian pencemaran dan kerusakan DAS Citarum dan meningkatkan partisipasi masyarakat dan pendanaannya.</p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1. Peningkatan Kapasitas Kelembagaan dan Pengembangan Kebijakan Pengelolaan Sampah.</p><p style="font-family: Poppins, Helvetica, sans-serif;">2.   Perencanaan Terpadu dan Peningkatan Kapasitas bagi Pemerintah Daerah dan Masyarakat.</p><p style="font-family: Poppins, Helvetica, sans-serif;">3. Peningkatan Infrastruktur Pengelolaan Sampah.</p><p style="font-family: Poppins, Helvetica, sans-serif;">4.  Dukungan Pelaksanaan Program, Bantuan Teknis, dan Monitoring dan Evaluasi.</p>', NULL, 10, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('2QBTP4WA', 'TF-0B3857', 1, 1, 'Dfat Support To The National Slum Upgrading Project (Nsup)', '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Mendukung</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
program </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Kotaku</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">dalam</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">peningkatan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">kualitas</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">permukiman</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">kumuh</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">perkotaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">,
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">khususnya</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">inovasi</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Infrastruktur</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">akses</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
air </span><span style="font-size: 11pt; font-family: Poppins; color: black;">minum</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">sanitasi</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
yang </span><span style="font-size: 11pt; font-family: Poppins; color: black;">memenuhi</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> target minimal </span><span style="font-size: 11pt; font-family: Poppins; color: black;">layanan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
80 </span><span style="font-size: 11pt; font-family: Poppins; color: black;">persen</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> di </span><span style="font-size: 11pt; font-family: Poppins; color: black;">lokasi</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">kumuh</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> yang </span><span style="font-size: 11pt; font-family: Poppins; color: black;">sudah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">ditangani</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">mendukung</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">pemulihan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">kondisi</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">sosial</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan </span><span style="font-size: 11pt; font-family: Poppins; color: black;">ekonomi</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">masyarakat</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">akibat</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">dampak</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">wabah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
Covid-19 </span><span style="font-size: 11pt; font-family: Poppins; color: black;">melalui</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">pola</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">padat</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">karya</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">dalam</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">perbaikan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan/</span><span style="font-size: 11pt; font-family: Poppins; color: black;">atau</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">pembangunan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">infrastruktur</span><span style="font-size: 11pt; font-family: Poppins; color: black;">
</span><span style="font-size: 11pt; font-family: Poppins; color: black;">permukiman</span><span style="font-size: 11pt; font-family: Poppins; color: black;">.</span><br></p>', 5500000, '2021-01-21', '2022-06-30', 'Hibah', 0.68, 0, 0, NULL, 'At Risk', 77000000000, '<p>Masyarakat di lokasi kumuh dan masyarakat terkena akibat dampak wabah Covid - 19.</p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1. Perjanjian.</p><p style="font-family: Poppins, Helvetica, sans-serif;">2. Paket BKM Infrastruktur Skala Lingkungan dan Cash for Work</p>', '<p>1. Perjanjian.</p><p>2. Paket BKM Infrastruktur Skala Lingkungan dan Cash for Work.</p>', 9, 2, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1NT81PXA', 'IND-176', 3, 1, 'National Slum Upgrading Project (NSUP)', '<p>Meningkatkan akses terhadap infrastruktur dan pelayanan dasar di permukiman kumuh perkotaan untuk mendukung terwujudnya permukiman perkotaan yang layak huni, produktif dan berkelanjutan.</p>', 10000000, '2016-09-18', '2022-12-31', 'Pinjaman', 0.84662309368192, 0, 0, NULL, 'At Risk', 140000, '<p>1. Meningkatnya kondisi infrastruktur baik secara fisik maupun sosial di daerah-daerah sasaran.</p><p>2. Meningkatnya perekonomian kelurahan dengan menyediakan akses kepada sektor Keuangan dan Pasar.</p><p>3. Terbangun Lembaga Masyarakat dengan Dukungan Pemerintah Daerah.</p>', '<p>1. Blok Investasi untuk <span style="font-family: Poppins, Helvetica, sans-serif;">Penanggulangan dan  Pencegahan Kumuh.</span></p><p>2. Darurat.</p>', NULL, 9, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1CPUK3GA', 'IBRD 8872-ID', 1, 1, 'National Urban Water Supply', '<p>Meningkatkan akses dan kualitas pelayanan air minum jaringan perpipaan bagi masyarakat di daerah perkotaan serta meningkatkan kapasitas dan kinerja Pemda dan PDAM dalam memberikan pelayanan air minum, melalui:</p><p>1.&nbsp; Perbaikan dan peningkatan akses masyarakat terhadap layanan air minum perpipaan di daerah perkotaan terpilih melalui penguatan kapasitas dan kinerja PDAM.</p><p>2.&nbsp; Peningkatan kapasitas dan sumber daya manusia dan mendorong peningkatan investasi di tingkat pemerintah daerah untuk air minum perkotaan.</p><p>3.&nbsp; Perbaikan/penyempurnaan kebijakan dan strategi pemerintah di sektor air minum perkotaan, pengembangan kapasitas sistem pemantauan dan evaluasi dalam rangka meningkatkan efektivitas dan efisiensi, serta investasi yang lebih tepat sasaran.</p><div><br></div>', 100000000, '2018-08-08', '2022-12-31', 'Pinjaman', 0.78082191780822, 0, 0, NULL, 'At Risk', 1400000, '<p>Peningkatan Kapasitas Pemerintah Daerah dan PDAM.<br></p>', '<p><span style="font-family: Poppins, Helvetica, sans-serif;">1.&nbsp; Dukungan Investasi untuk Pengembangan Infrastruktur.</span></p><p><font face="Poppins, Helvetica, sans-serif">2.&nbsp; Bantuan Teknis dan Peningkatan Kapasitas Bagi Pemda.</font></p><p><font face="Poppins, Helvetica, sans-serif">3.&nbsp; Dukungan Advisori dan Pengembangan Kebijakan.</font><span style="font-family: Poppins, Helvetica, sans-serif;">&nbsp; &nbsp;</span></p><p><span style="font-family: Poppins, Helvetica, sans-serif;">4.&nbsp;&nbsp;</span><font face="Poppins, Helvetica, sans-serif">Dukungan Manajemen dan Pelaksanaan Program.</font></p><p><br></p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1.&nbsp; Dukungan Investasi untuk Pengembangan Infrastruktur.</p><p style="font-family: Poppins, Helvetica, sans-serif;"><font face="Poppins, Helvetica, sans-serif">2.&nbsp; Bantuan Teknis dan Peningkatan Kapasitas Bagi Pemda.</font></p><p style="font-family: Poppins, Helvetica, sans-serif;"><font face="Poppins, Helvetica, sans-serif">3.&nbsp; Dukungan Advisori dan Pengembangan Kebijakan.</font>&nbsp; &nbsp;</p><p style="font-family: Poppins, Helvetica, sans-serif;">4.&nbsp;&nbsp;<font face="Poppins, Helvetica, sans-serif">Dukungan Manajemen dan Pelaksanaan Program.</font></p>', 8, 4, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('18K6ECNA', 'IBRD 8636-ID', 1, 1, 'National Slum Upgrading Project', '<p>1.&nbsp;Menyediakan infrastruktur permukiman.</p><p>2.Menurunnya luas permukiman kumuh perkotaan.</p><p>3.&nbsp;Mewujudkan kolaborasi penanganan permukiman kumuh dari berbagai stakeholder.</p><p>4.&nbsp;Meningkatkan kualitas permukiman yang layak huni dan berkelanjutan</p>', 216500000, '2016-10-11', '2022-12-31', 'Pinjaman', 0.84507042253521, 0, 0, NULL, 'At Risk', 3031000000000, '<p>Meningkatkan akses infrastruktur masyarakat dan penguatan kapasitas pemerintah daerah dalam menyelenggarakan pencegahan&nbsp;dan peningkatan kualitas permukiman.<br></p>', '<p>1.&nbsp;&nbsp;Kelurahan Grant under Parts 3.2.</p><p>2.&nbsp;Goods, works, Consultants'' serv, non consulting serv and training&nbsp;and workshop under Parts 1, 2, 3.1 and 4 of the Project.</p><p>3.Emergency Expenditures under Part 5 of the Project.</p>', '<p>1.&nbsp;Pembangunan/ rehabilitasi infrastruktur permukiman skala lingkungan&nbsp; (infrastruktur tersier).</p><p>2.&nbsp;Pembangunan/rehabilitasi infrastruktur permukiman skala kawasan/kota (infrastruktur primer dan sekunder).</p><p>3.&nbsp;Penguatan kapasitas masyarakat dan pemerintah daerah.</p><p>4.&nbsp;Bantuan Teknis (Technical Assitance).</p><p>5.&nbsp;Penanganan Pasca bencana Sulteng dan NTB.</p>', 9, 4, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1ENYRFPA', 'IND-175', 3, 1, 'National Slum Upgrading Project (NSUP)', '<p>Meningkatkan akses terhadap infrastruktur dan pelayanan dasar di permukiman kumuh perkotaan untuk mendukung terwujudnya permukiman perkotaan yang layak huni, produktif dan berkelanjutan.<br></p>', 311760000, '2016-09-18', '2022-12-31', 'Pinjaman', 0.84662309368192, 0, 0, NULL, 'At Risk', 4354000, '<p>1. Menurunnya luas permukiman kumuh.</p><p>2.  Terbentuknya Pokja PKP kab./kota  yang berfungsi dengan baik.</p><p>3. Tersusunnya RP2KPKP  dan RPLP  yang terintegrasi dalam RPJMD.</p><p>4. Meningkatnya penghasilan Masyarakat Berpenghasilan Rendah (MBR) melalui penyediaan infrastruktur dan livelihood.</p><div><span style="font-family: Poppins, Helvetica, sans-serif;">5. </span><font face="Poppins, Helvetica, sans-serif">Terlaksananya aturan bersama sebagai upaya perubahan PHBS masyarakat dan pencegahan kumuh.</font></div>', '<p> 1. Blok Investasi untuk Penanggulangan dan  Pencegahan Kumuh.</p><p>2.  Membangun Kelebagaan Masyarakat dengan pemerintah Daerah.</p><p>3. Konsultansi Manajemen, Desain dan Pengawasan..</p><p>4. Darurat</p>', NULL, 9, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('B1M1JWRAA', '8861-ID', 1, 1, 'Indonesia Tourism Development Project (ITDP)', '<p style="language:en-ID;margin-top:0pt;margin-bottom:0pt;margin-left:.1in;
text-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:
embed;mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging"><span style="font-size: 12pt; font-family: Poppins; color: black;">Meningkatkan
kualitas serta akses terhadap pelayanan infrastruktur dasar yang berkaitan
dengan pariwisata, meningkatkan perekonomian lokal, mendorong investasi swasta
di wilayah destinasi wisata prioritas. </span></p>', 155000000, '2018-11-28', '2023-12-31', 'Pinjaman', 0.61430876815492, 0, 0, NULL, 'At Risk', 2170000, '<p><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 16px; text-align: justify;">Meningkatkan Kualitas Jalan dan Akses Pelayanan Dasar yang terkait dengan Pariwisata dengan ruang lingkup kegiatan Peningkatan kualitas dan kondisi jalan dan jembatan; Infrastruktur khusus pendukung pariwisata/Penataan Kawasan; Penyediaan air minum, pengelolaan sampah, pengelolaan air limbah dan sanitasi.</span><br></p>', '<p><span style="font-family: Poppins;">1. Penataan Kawasan Tele dan Waterfront City Pangururan KSPN Danau Toba.   </span></p><table border="0" cellpadding="0" cellspacing="0" width="438" style="font-family: Poppins, Helvetica, sans-serif; width: 329pt;"><tbody><tr height="42" style="height: 31.18pt;"><td height="42" class="oa1" width="438" style="height: 31.18pt; width: 329pt;"><p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; vertical-align: top; word-break: normal;"><span style="font-family: Poppins;">2. </span><span style="font-size: 11pt; font-family: Poppins; color: black;">MK </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Penataan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="font-size: 11pt; font-family: Poppins; color: black;">kawasan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> Waterfront City </span><span style="font-size: 11pt; font-family: Poppins; color: black;">Pangururan</span><span style="font-size: 11pt; font-family: Poppins; color: black;"> dan Kawasan Tele KSPN Toba</span></p></td></tr><tr height="42" style="height: 31.18pt;"><td height="42" class="oa1" width="438" style="height: 31.18pt; width: 329pt;"></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="438" style="width: 329pt;">
 <colgroup><col width="438" style="mso-width-source:userset;width:329pt">
 </colgroup><tbody><tr height="42" style="mso-height-source:userset;height:31.18pt">
  <td height="42" class="oa1" width="438" style="height:31.18pt;width:329pt">
  <p style="margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; vertical-align: top; word-break: normal;"></p></td></tr><tr height="42" style="mso-height-source:userset;height:31.18pt"><td height="42" class="oa1" width="438" style="height:31.18pt;width:329pt"></td></tr></tbody></table><br>', NULL, 12, 4, NULL, 0);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('72599501', '62031', 7, 5, 'Water  Hibah And Sanitation Hibah Program (Watsan) Phase Ii', '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Meningkatkan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">akses</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">masyarakat</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">terhadap</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;SPALD-T.&nbsp;</span><br></p>', 93645646, '2012-07-01', '2022-06-02', 'Hibah', 0.96135799061551, 0, 0, NULL, 'At Risk', 936456460000, '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Pemerintah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;Daerah yang&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">telah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">memiliki</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;IPALD Skala&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Perkotaan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">,&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">dengan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Lingkup</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">pembangunan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Sambungan</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Rumah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">.&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Peserta</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Hibah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">adalah</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;Kota Bandung, Kota Surakarta, DKI Jakarta dan&nbsp;</span><span style="font-size: 11pt; font-family: Poppins; color: black;">Provinsi</span><span style="font-size: 11pt; font-family: Poppins; color: black;">&nbsp;Sumatera Utara.</span><br></p>', '<p>1. Water Hibah</p><p>2. Sanitation Hibah</p>', '<p style="font-family: Poppins, Helvetica, sans-serif;">1. Water Hibah</p><p style="font-family: Poppins, Helvetica, sans-serif;">2. Sanitation Hibah</p>', 10, 4, NULL, NULL);
INSERT INTO "transaction"."kegiatan" ("kode_register","no_loan","donor_id","mata_uang_id","judul","tujuan","nilai","tanggal_efektif","tanggal_closing","tipe_kegiatan","etr","dr","pv","penyerapan","st","nilai_konversi","sasaran","komponen","lingkup_kegiatan","sektor_id","metode_pembayaran","mata_uang_2_id","nilai_2") VALUES ('1F1NDHGA', '3455-INO', 4, 1, 'Accelerating Infrastructure Delivery Through Better (ESP)', '<p><span style="font-size: 11pt; font-family: Poppins; color: black;">Penyusunan
dokumen perencanaan yang berkualitas, dengan penjaminan mutu dokumen
perencanaan yang dilakukan oleh Aparatur Sipil Negara (ASN) Pusat maupun Daerah
untuk proyek-proyek di lingkungan Kementerian PUPR. </span><br></p>', 14210504, '2016-12-21', '2022-04-29', 'Pinjaman', 0.9457800511509, 0, 0, NULL, 'At Risk', 196000, '<p><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">Penguatan</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">kapasitas</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> ASN </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">dalam</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">pendampingan</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">penyusunan</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">dokumen</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">perencanaan</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">infrastruktur</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">sektor</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> air </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">minum</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;"> dan air </span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">limbah</span><span style="text-indent: -18.24px; font-size: 11pt; font-family: Poppins; color: black;">.</span><br></p>', '<p><span style="font-family: Poppins;">1. </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Sistem pengembangan Air Limbah di </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Kota
Bekasi.</span></p><p><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">2. </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Sistem pengembangan Air Limbah di </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Kota
Semarang.</span></p><p><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">3. </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Sistem pengembangan Air Limbah di Kota </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Pontianak.</span></p><p><font color="#000000" face="Tw Cen MT"><span style="font-size: 16px; font-family: Poppins;">4. </span></font><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Sistem pengembangan Air Limbah di </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Kota </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Mataram.</span></p><p><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">5. Sistem Penyediaan Air Minum Regional di</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;"> </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Benteng</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;"> </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Kobema</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">,  Bengkulu Tengah, Kota </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Bengkulu,Seluma.</span></p><p><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">6. </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; font-style: italic;"><span style="font-style: normal;">Sistem Penyediaan Air Minum Regional di</span> </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Polewali</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;"> Mandar – </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Majene</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">, Sulawesi Barat.</span></p><p><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">7. </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Sistem Penyediaan Air Minum Regional di </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;"> </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Palu</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">, Central Sulawes</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">i.</span></p><p><font color="#000000" face="Tw Cen MT"><span style="font-size: 16px; font-family: Poppins;">8. Pengembangan </span></font><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; font-style: italic;"><span style="font-style: normal;">Sistem Penyediaan Air Minum Regional di</span> </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Indonesia Wilayah Barat</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">:.</span></p><p><font color="#000000" face="Tw Cen MT" style=""><span style="font-size: 16px; font-family: Poppins;">9. </span></font><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;">Pengembangan </span><span style="color: rgb(0, 0, 0); font-family: Poppins; font-size: 16px;">Sistem Penyediaan Air Minum Regional di</span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black; font-style: italic;"> </span><span style="text-indent: 0in; font-size: 12pt; font-family: Poppins; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;"> Indonesia Wilayah Timur.</span></p><p><span style="text-indent: 0in; font-size: 12pt; font-family: "Tw Cen MT"; font-variant-numeric: normal; font-variant-east-asian: normal; color: black;"></span><span style="color: black; font-family: "Tw Cen MT"; font-size: 12pt; font-weight: bold; text-indent: 0in;"> </span></p>', NULL, 12, 2, NULL, 0);

-- ----------------------------
-- Table structure for kegiatan_dipa
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_dipa";
CREATE TABLE "transaction"."kegiatan_dipa" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "tahun" varchar(4) COLLATE "pg_catalog"."default",
  "dipa" float8,
  "dipa_real" float8
)
;

-- ----------------------------
-- Records of kegiatan_dipa
-- ----------------------------
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (2, '2021', 150000000000, 91549629000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (3, '2021', 753961701000, 690152678000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (4, '2021', 30000000000, 16345753000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (5, '2021', 891048813000, 844685542000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (6, '2021', 46000000000, 45510000000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (7, '2021', 18082057000, 17723722000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (8, '2021', 73678340000, 70383255000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (9, '2021', 1000000000, 0);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (10, '2021', 438165042000, 264617916000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (11, '2021', 798281407000, 737409143000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (12, '2021', 729322250000, 649317195000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (13, '2021', 77700000000, 27634646000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (14, '2021', 190386818000, 85689616000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (16, '2021', 6050000000, 5694168000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (17, '2021', 78000000000, 53673956000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (18, '2021', 45358855000, 684521000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (20, '2021', 146860000000, 84340000000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (21, '2021', 238710074000, 182784227000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (22, '2021', 235903000000, 210960905000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (23, '2021', 77000000000, 77000000000);
INSERT INTO "transaction"."kegiatan_dipa" ("kegiatan_id","tahun","dipa","dipa_real") VALUES (24, '2021', 16708000000, 14194111000);

-- ----------------------------
-- Table structure for kegiatan_dokumen
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_dokumen";
CREATE TABLE "transaction"."kegiatan_dokumen" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "judul_dokumen" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_terbit" date,
  "file" varchar(255) COLLATE "pg_catalog"."default",
  "deskripsi" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kegiatan_dokumen
-- ----------------------------
INSERT INTO "transaction"."kegiatan_dokumen" ("kegiatan_id","judul_dokumen","tanggal_terbit","file","deskripsi") VALUES (28, 'Loan Agreement', '2019-08-01', 'dokumen/GiV52lGQTAXlqBpUa2NqRbUKoRXAW3nm5DjZbWrb.pdf', 'Dokumen Loan Agreement');
INSERT INTO "transaction"."kegiatan_dokumen" ("kegiatan_id","judul_dokumen","tanggal_terbit","file","deskripsi") VALUES (2, 'tes', '2022-01-01', 'dokumen/dIqoAHg6598LYJ2VwGs2iEdHSCoFb78YABx8kjzk.pdf', 'tes');

-- ----------------------------
-- Table structure for kegiatan_exec
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_exec";
CREATE TABLE "transaction"."kegiatan_exec" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "department_code" varchar(255) COLLATE "pg_catalog"."default",
  "unor_code" varchar(255) COLLATE "pg_catalog"."default",
  "satker_code" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kegiatan_exec
-- ----------------------------
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (1, '033', '05', '420139');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (7, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (8, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (9, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (10, '033', '05', '466178');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '466178');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (14, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (15, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (16, '033', '05', '466178');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (21, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (22, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (23, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (24, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (25, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (26, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (27, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (19, '033', '09', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (17, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (18, '033', '04', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (20, '033', '02', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (28, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '005', '1', '0');
INSERT INTO "transaction"."kegiatan_exec" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '0');

-- ----------------------------
-- Table structure for kegiatan_imp
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_imp";
CREATE TABLE "transaction"."kegiatan_imp" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "department_code" varchar(255) COLLATE "pg_catalog"."default",
  "unor_code" varchar(255) COLLATE "pg_catalog"."default",
  "satker_code" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kegiatan_imp
-- ----------------------------
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (1, '033', '05', '631097');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '631114');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '05', '631140');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631126');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631128');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631147');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631131');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631132');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631134');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631135');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631139');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631148');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631149');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631152');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (3, '033', '05', '631151');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631109');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631110');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631112');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631114');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631115');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631117');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631118');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631119');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631120');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631121');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631124');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631130');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (4, '033', '05', '631133');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631109');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631110');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631112');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631114');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631115');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631117');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631118');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631119');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631120');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631121');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631124');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631130');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (5, '033', '05', '631133');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631109');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631110');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631112');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631114');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631115');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631117');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631118');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631119');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631120');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631121');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631124');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631130');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (6, '033', '05', '631133');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (7, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (8, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (8, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (9, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (9, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (10, '033', '05', '466178');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '466178');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505730');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631109');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505749');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631110');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505755');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631112');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505770');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505096');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631114');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505097');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631115');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505786');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631118');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505100');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631119');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505821');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631120');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505099');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631117');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505837');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631124');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505843');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631126');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505101');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631127');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505868');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631128');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505107');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631145');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505106');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631143');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505993');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631146');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505874');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631130');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631132');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631131');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505900');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631134');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505880');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505899');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '400740');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631133');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505102');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631135');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505103');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631136');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505940');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631139');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505104');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631141');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505931');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631137');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505105');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631142');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631148');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '505110');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631149');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '506022');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631151');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '506038');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (11, '033', '05', '631152');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631126');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631127');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631145');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631146');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631136');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631139');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631142');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631131');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631149');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (12, '033', '05', '631151');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631109');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631110');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631112');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631114');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631115');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631117');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631118');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631119');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631120');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631121');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631108');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631124');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631130');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (13, '033', '05', '631133');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (14, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (15, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (15, '033', '05', '631116');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (15, '033', '05', '631128');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (16, '033', '05', '466178');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (16, '033', '05', '631125');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (21, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (22, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (23, '033', '05', '452771');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (24, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (25, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (26, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (27, '033', '05', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (19, '033', '05', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (19, '033', '04', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (19, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (19, '033', '06', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (17, '033', '05', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (17, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (18, '033', '05', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (18, '033', '04', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (18, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (20, '033', '05', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (20, '033', '04', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (20, '033', '03', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (20, '033', '06', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (20, '033', '08', '0');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (2, '033', '03', '466190');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (28, '033', '05', '505106');
INSERT INTO "transaction"."kegiatan_imp" ("kegiatan_id","department_code","unor_code","satker_code") VALUES (28, '033', '05', '505840');

-- ----------------------------
-- Table structure for kegiatan_kpi
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_kpi";
CREATE TABLE "transaction"."kegiatan_kpi" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "indikator" varchar(255) COLLATE "pg_catalog"."default",
  "target" int8,
  "satuan" varchar(255) COLLATE "pg_catalog"."default",
  "ket" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of kegiatan_kpi
-- ----------------------------
INSERT INTO "transaction"."kegiatan_kpi" ("kegiatan_id","indikator","target","satuan","ket") VALUES (28, 'Peningkatan kualitas permukiman', 2000, 'Rumah Tangga', 'Kualitas Permukiman yang bersih');
INSERT INTO "transaction"."kegiatan_kpi" ("kegiatan_id","indikator","target","satuan","ket") VALUES (2, '1000', 2000, 'Rp', 'tes');

-- ----------------------------
-- Table structure for kegiatan_kpi_detail
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_kpi_detail";
CREATE TABLE "transaction"."kegiatan_kpi_detail" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kpi_id" int8,
  "tahun" varchar(4) COLLATE "pg_catalog"."default",
  "target" int8,
  "capaian" int8
)
;

-- ----------------------------
-- Records of kegiatan_kpi_detail
-- ----------------------------
INSERT INTO "transaction"."kegiatan_kpi_detail" VALUES (1, 2, '2022', 100, 200);
INSERT INTO "transaction"."kegiatan_kpi_detail" VALUES (2, 2, '2021', 10, 20);
INSERT INTO "transaction"."kegiatan_kpi_detail" VALUES (3, 2, '2023', 100, NULL);
INSERT INTO "transaction"."kegiatan_kpi_detail" VALUES (4, 1, '2021', 1000, 850);

-- ----------------------------
-- Table structure for kegiatan_penyerapan
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_penyerapan";
CREATE TABLE "transaction"."kegiatan_penyerapan" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "tanggal" date,
  "nilai" float8,
  "mata_uang_id" int4
)
;

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket";
CREATE TABLE "transaction"."paket" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "prov_id" int4,
  "kab_id" int4,
  "penarikan_id" int8,
  "kode_paket" varchar(255) COLLATE "pg_catalog"."default",
  "nama_paket" varchar(255) COLLATE "pg_catalog"."default",
  "alokasi_valas" float8,
  "nilai_kontrak_valas" float8,
  "tanggal_mkontrak" date,
  "tanggal_skontrak" date,
  "tanggal_mtender" date,
  "tanggal_stender" date,
  "st_tender" int2,
  "penyedia_jasa" varchar(255) COLLATE "pg_catalog"."default",
  "jenis_paket" int2,
  "mata_uang_alokasi" int8,
  "alokasi_rupiah" float8,
  "mata_uang_nilai_kontrak" int8,
  "nilai_kontrak_rupiah" float8
)
;

-- ----------------------------
-- Records of paket
-- ----------------------------
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 99, 515, NULL, '1211', 'Project Implementation Support Consultants (Pisc)', 222630498826, 222630498826, '2017-10-02', '2023-12-31', '2017-06-02', '2017-07-14', 2, 'SMEC International Pty Ltd,  Stantec Australia Pty Ltd, PT.Infratama Yakti, PT SMEC Denka Indonesia, PT Amurwa International,, PT.Widyagraha Asana', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 15, 97, NULL, '2111', 'Wastewater Treatment Plant In Jambi', 152777280000, 152777280000, '2020-10-26', '2023-12-15', '2020-09-15', '2020-10-23', 2, 'PT. Brantas Abipraya, PT. Memiontec Indonesia', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 15, 97, NULL, '2122', 'Jambi Sewerage Transfer System', 227392201000, 227392201000, '2020-10-09', '2023-01-27', '2020-09-01', '2020-10-01', 2, 'PT. Waskita Karya Persero', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 14, 86, NULL, '3111', 'Pekanbaru Wastewater Treatment Plant', 193231000000, 193231000000, '2020-11-25', '2024-02-10', '2020-10-01', '2020-11-20', 2, 'PT. PP, PT. Panca Jasa Lingkungan', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 14, 86, NULL, '3112', 'Pekanbaru Sewerage & Transfer System Package Nc (Aif)', 256272970000, 256272970000, '2020-09-08', '2023-01-10', '2020-08-03', '2020-09-04', 2, 'PT. Adhi Karya', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 73, 420, NULL, '4111', 'Makassar Wastewater Treatment Plant, Sewerage Transfer System (B1)', 218864994200, 218864994200, '2020-10-09', '2024-02-12', '2020-09-01', '2020-10-02', 2, 'PT.PP, PT. PT. Memiontec Indonesia', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 73, 420, NULL, '4112', 'Makassar Wastewater System C', 180727870000, 180727870000, '2019-11-14', '2022-05-02', '2019-10-01', '2019-11-08', 2, 'PT. Waskita Karya', 1, NULL, NULL, NULL, NULL);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (1, 11, 1, NULL, '123', 'tees', NULL, 100, '2022-01-01', '2022-01-02', '2022-01-01', '2022-01-02', 0, 'tes', 1, NULL, NULL, 1, 10000);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (27, 99, 515, NULL, '123', 'Paket A', 428500, 0, NULL, NULL, NULL, NULL, 0, NULL, 2, 1, 6000000, NULL, 0);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (27, 51, 277, NULL, 'A0011', 'Paket Peningkatan Kualitas Permukiman', 714000, 0, '2021-01-01', '2022-12-31', '2020-12-01', '2020-12-31', 2, 'PT. Wijaya Karya', 1, 2, 10000000000, 2, 10000000000);
INSERT INTO "transaction"."paket" ("kegiatan_id","prov_id","kab_id","penarikan_id","kode_paket","nama_paket","alokasi_valas","nilai_kontrak_valas","tanggal_mkontrak","tanggal_skontrak","tanggal_mtender","tanggal_stender","st_tender","penyedia_jasa","jenis_paket","mata_uang_alokasi","alokasi_rupiah","mata_uang_nilai_kontrak","nilai_kontrak_rupiah") VALUES (27, 36, 270, NULL, 'A0012', 'Peningkatan Kualitas Permukiman Kota Tangerang', 714000, 0, '2021-01-01', '2022-12-31', '2020-12-01', '2020-12-31', 2, 'PT. Waskita Karya', 1, 1, 10000000000, 2, 10000000000);

-- ----------------------------
-- Table structure for paket_alokasi
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket_alokasi";
CREATE TABLE "transaction"."paket_alokasi" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "paket_id" int8,
  "alokasi_valas" float8,
  "tanggal_revisi" date,
  "keterangan" text COLLATE "pg_catalog"."default",
  "alokasi_rupiah" float8,
  "mata_uang_alokasi" int8
)
;

-- ----------------------------
-- Records of paket_alokasi
-- ----------------------------
INSERT INTO "transaction"."paket_alokasi" VALUES (1, 10, 428500, '2019-08-01', 'paket konsultasi', 6000000, 1);
INSERT INTO "transaction"."paket_alokasi" VALUES (2, 11, 714000, '2021-01-01', 'Peningkatan Kualitas Permukiman Kabupaten Gianyar', 10000000000, 2);
INSERT INTO "transaction"."paket_alokasi" VALUES (3, 12, 714000, '2021-01-01', 'Peningkatan Kualitas Permukiman Kota Tangerang', 10000000000, 1);

-- ----------------------------
-- Table structure for paket_awp
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket_awp";
CREATE TABLE "transaction"."paket_awp" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "kegiatan_id" int8,
  "paket_id" int8,
  "ta" varchar(4) COLLATE "pg_catalog"."default",
  "bulan" int2,
  "target_dana" float8,
  "real_dana" float8,
  "target_fisik" float8,
  "real_fisik" float8,
  "masalah" text COLLATE "pg_catalog"."default",
  "tindak_lanjut" text COLLATE "pg_catalog"."default",
  "category_id" int8 DEFAULT 0,
  "target_penyelesaian" varchar(255) COLLATE "pg_catalog"."default",
  "subcategory_id" int8 DEFAULT 0
)
;

-- ----------------------------
-- Records of paket_awp
-- ----------------------------
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (2, 2, '2021', 1, 100, NULL, 0, NULL, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 1, 150000000, 150000000, 52, 52, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 2, 150000000, 150000000, 55, 55, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 1, 150000000, 150000000, 2, 2, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 2, 150000000, 150000000, 5, 5, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 3, 150000000, 150000000, 7, 7, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 4, 150000000, 150000000, 10, 10, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 5, 150000000, 80000000, 12, 12, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 6, 150000000, 70000000, 15, 15, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 7, 80000000, 80000000, 17, 16, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 8, 70000000, 70000000, 18, 18, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 9, 80000000, 150000000, 19, 20, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 10, 70000000, 150000000, 20, 22, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 11, 150000000, 150000000, 22, 24, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2020', 12, 150000000, 150000000, 25, 25, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 1, 150000000, 150000000, 27, 27, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 2, 150000000, 150000000, 30, 30, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 3, 150000000, 150000000, 32, 32, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 4, 150000000, 150000000, 35, 35, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 5, 80000000, 80000000, 36, 36, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 6, 70000000, 70000000, 37, 37, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 7, 80000000, 80000000, 38, 38, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 8, 70000000, 70000000, 40, 40, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 9, 150000000, 150000000, 42, 42, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 10, 150000000, 150000000, 45, 45, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 11, 150000000, 150000000, 48, 48, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2021', 12, 150000000, 150000000, 50, 50, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 3, 150000000, 150000000, 58, 57, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 4, 150000000, 150000000, 60, 60, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 5, 80000000, 80000000, 62, 61, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 6, 70000000, 70000000, 65, 62, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 7, 80000000, 80000000, 68, 64, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 8, 70000000, 70000000, 70, 65, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 9, 150000000, 150000000, 72, 67, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 7, 150000000, 150000000, 100, 100, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 10, 150000000, 1500000, 74, 70, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 11, 150000000, 150000000, 77, 72, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2022', 12, 150000000, 150000000, 80, 75, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 2, 250000000, 250000000, 86, 86, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 3, 250000000, 250000000, 88, 88, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 4, 250000000, 250000000, 90, 90, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 5, 200000000, 200000000, 95, 93, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 1, 250000000, 2500000, 83, 83, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 10, '2023', 6, 150000000, 150000000, 98, 98, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 1, 400000000, 400000000, 3, 3, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 2, 400000000, 400000000, 6, 6, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 3, 400000000, 400000000, 10, 10, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 4, 400000000, 400000000, 13, 13, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 5, 400000000, 400000000, 16, 16, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 6, 400000000, 400000000, 20, 18, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 7, 400000000, 400000000, 25, 21, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 8, 400000000, 400000000, 30, 25, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 9, 400000000, 400000000, 35, 30, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 10, 400000000, 400000000, 40, 35, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 11, 500000000, 500000000, 45, 40, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2021', 12, 500000000, 500000000, 50, 45, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 1, 400000000, 400000000, 53, 50, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 2, 400000000, 400000000, 56, 55, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 3, 400000000, 400000000, 60, 58, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 4, 400000000, 400000000, 63, 60, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 5, 400000000, 400000000, 66, 65, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 6, 400000000, 400000000, 70, 70, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 7, 400000000, 400000000, 75, 75, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 8, 400000000, 400000000, 80, 80, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 10, 400000000, 400000000, 90, 90, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 11, 500000000, 500000000, 95, 95, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 12, 500000000, 500000000, 100, 100, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 11, '2022', 9, 400000000, 400000000, 85, 85, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 1, 400000000, 400000000, 3, 3, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 2, 400000000, 400000000, 6, 6, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 3, 400000000, 400000000, 10, 10, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 4, 400000000, 400000000, 13, 13, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 5, 400000000, 400000000, 16, 15, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 6, 400000000, 400000000, 20, 18, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 7, 400000000, 400000000, 25, 22, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 8, 400000000, 400000000, 30, 25, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 9, 400000000, 400000000, 35, 28, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 10, 400000000, 400000000, 40, 32, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 11, 500000000, 500000000, 45, 35, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2021', 12, 500000000, 500000000, 50, 40, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 1, 400000000, 400000000, 53, 45, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 2, 400000000, 400000000, 56, 50, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 3, 400000000, 400000000, 60, 55, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 4, 400000000, 400000000, 63, 60, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 5, 400000000, 400000000, 66, 65, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 6, 400000000, 400000000, 70, 70, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 7, 400000000, 400000000, 75, 75, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 8, 400000000, 400000000, 80, 80, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 9, 400000000, 400000000, 85, 85, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 10, 400000000, 400000000, 90, 90, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 11, 500000000, 500000000, 95, 95, NULL, NULL, 0, NULL, 0);
INSERT INTO "transaction"."paket_awp" ("kegiatan_id","paket_id","ta","bulan","target_dana","real_dana","target_fisik","real_fisik","masalah","tindak_lanjut","category_id","target_penyelesaian","subcategory_id") VALUES (28, 12, '2022', 12, 500000000, 500000000, 100, 100, NULL, NULL, 0, NULL, 0);

-- ----------------------------
-- Table structure for paket_dipa
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket_dipa";
CREATE TABLE "transaction"."paket_dipa" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "paket_id" int8,
  "tahun" varchar(4) COLLATE "pg_catalog"."default",
  "dipa" int8,
  "alokasi" int8,
  "keterangan" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_revisi" date
)
;

-- ----------------------------
-- Records of paket_dipa
-- ----------------------------
INSERT INTO "transaction"."paket_dipa" VALUES (3, 2, '2022', 1000, 3000, 'tes', '2022-01-01');
INSERT INTO "transaction"."paket_dipa" VALUES (5, 3, '2022', 1000, 4000, 'tes', '2022-01-01');
INSERT INTO "transaction"."paket_dipa" VALUES (7, 4, '2022', 1000, 8000, 'tes', '2022-01-01');
INSERT INTO "transaction"."paket_dipa" VALUES (9, 5, '2022', 1000, 16000, 'tes', '2022-01-01');
INSERT INTO "transaction"."paket_dipa" VALUES (4, 2, '2022', 3000, 6000, 'tes', '2022-01-02');
INSERT INTO "transaction"."paket_dipa" VALUES (6, 3, '2022', 4000, 8000, 'tes', '2022-01-02');
INSERT INTO "transaction"."paket_dipa" VALUES (8, 4, '2022', 8000, 16000, 'tes', '2022-01-02');
INSERT INTO "transaction"."paket_dipa" VALUES (10, 5, '2022', 16000, 32000, 'tes', '2022-01-02');
INSERT INTO "transaction"."paket_dipa" VALUES (1, 6, '2022', 1000, 2000, 'tes', '2022-01-01');
INSERT INTO "transaction"."paket_dipa" VALUES (2, 6, '2022', 2000, 4000, 'tes', '2022-01-02');

-- ----------------------------
-- Table structure for paket_foto
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket_foto";
CREATE TABLE "transaction"."paket_foto" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "paket_id" int8,
  "foto" varchar(255) COLLATE "pg_catalog"."default",
  "lat" float8,
  "lng" float8,
  "keterangan" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal" date
)
;

-- ----------------------------
-- Records of paket_foto
-- ----------------------------
INSERT INTO "transaction"."paket_foto" VALUES (2, 9, 'foto_paket/btMpntZdZUI2SIia2e5iRD2LJqyEGJQkUuOXJgpQ.png', 123, 321, 'tes', '2022-01-01');
INSERT INTO "transaction"."paket_foto" VALUES (3, 2, 'foto_paket/zLqeeFSHRzlGMuRlrBnPKQaTDkztuYtPEaQUA18w.png', 123, 321, 'tess', '2022-01-01');
INSERT INTO "transaction"."paket_foto" VALUES (4, 10, 'foto_paket/mDFXlWIKSRDPbRvZ572gxCkSecPJKCdKiq2uEdf6.jpg', -8.895278, 116.305833, 'Kondisi yang sedang berjalan', '2020-01-01');

-- ----------------------------
-- Table structure for paket_owp
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket_owp";
CREATE TABLE "transaction"."paket_owp" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "paket_id" int8,
  "tahun" varchar(4) COLLATE "pg_catalog"."default",
  "nilai" float8
)
;

-- ----------------------------
-- Primary Key structure for table hibah_langsung
-- ----------------------------
ALTER TABLE "transaction"."hibah_langsung" ADD CONSTRAINT "hibah_langsung_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_exec
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_exec" ADD CONSTRAINT "kegiatan_exec_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_imp
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_imp" ADD CONSTRAINT "kegiatan_imp_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket_alokasi
-- ----------------------------
ALTER TABLE "transaction"."paket_alokasi" ADD CONSTRAINT "paket_alokasi_pkey" PRIMARY KEY ("id");
