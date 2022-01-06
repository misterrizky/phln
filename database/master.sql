/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : PostgreSQL
 Source Server Version : 120007
 Source Host           : localhost:5432
 Source Catalog        : phln
 Source Schema         : master

 Target Server Type    : PostgreSQL
 Target Server Version : 120007
 File Encoding         : 65001

 Date: 06/01/2022 12:44:53
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
  "department_id" int8 DEFAULT 0,
  "unor_id" int8 DEFAULT 0,
  "afiliasi" varchar(255) COLLATE "pg_catalog"."default"
)
;

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
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."agency_id_seq"
OWNED BY "master"."agency"."id";
SELECT setval('"master"."agency_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."category_id_seq"
OWNED BY "master"."category"."id";
SELECT setval('"master"."category_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."department_id_seq"
OWNED BY "master"."department"."id";
SELECT setval('"master"."department_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."dokumen_id_seq"
OWNED BY "master"."dokumen"."id";
SELECT setval('"master"."dokumen_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."donor_id_seq"
OWNED BY "master"."donor"."id";
SELECT setval('"master"."donor_id_seq"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."jenis_satker_id_seq"
OWNED BY "master"."jenis_satker"."id";
SELECT setval('"master"."jenis_satker_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."kategori_kinerja_id_seq"
OWNED BY "master"."kategori_kinerja"."id";
SELECT setval('"master"."kategori_kinerja_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."kl_eksternal_id_seq"
OWNED BY "master"."kl_eksternal"."id";
SELECT setval('"master"."kl_eksternal_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."management_unit_id_seq"
OWNED BY "master"."management_unit"."id";
SELECT setval('"master"."management_unit_id_seq"', 11, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."mata_uang_id_seq"
OWNED BY "master"."mata_uang"."id";
SELECT setval('"master"."mata_uang_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."penarikan_id_seq"
OWNED BY "master"."penarikan"."id";
SELECT setval('"master"."penarikan_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."rate_mata_uang_id_seq"
OWNED BY "master"."rate_mata_uang"."id";
SELECT setval('"master"."rate_mata_uang_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."satker_id_seq"
OWNED BY "master"."satker"."id";
SELECT setval('"master"."satker_id_seq"', 97, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."sektor_id_seq"
OWNED BY "master"."sektor"."id";
SELECT setval('"master"."sektor_id_seq"', 13, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."unit_kerja_id_seq"
OWNED BY "master"."unit_kerja"."id";
SELECT setval('"master"."unit_kerja_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."unor_id_seq"
OWNED BY "master"."unor"."id";
SELECT setval('"master"."unor_id_seq"', 5, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "master"."workflow_id_seq"
OWNED BY "master"."workflow"."id";
SELECT setval('"master"."workflow_id_seq"', 10, true);

-- ----------------------------
-- Primary Key structure for table agency
-- ----------------------------
ALTER TABLE "master"."agency" ADD CONSTRAINT "agency_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table category
-- ----------------------------
ALTER TABLE "master"."category" ADD CONSTRAINT "category_pkey" PRIMARY KEY ("id");

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
