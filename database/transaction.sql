/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : PostgreSQL
 Source Server Version : 120007
 Source Host           : localhost:5432
 Source Catalog        : phln
 Source Schema         : transaction

 Target Server Type    : PostgreSQL
 Target Server Version : 120007
 File Encoding         : 65001

 Date: 06/01/2022 12:45:16
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
COMMENT ON COLUMN "transaction"."kegiatan"."sektor_id" IS '1 = Air Minum
2 = PKP
3 = Sanitasi
4 = BPB
5 = Lintas Sektor';
COMMENT ON COLUMN "transaction"."kegiatan"."metode_pembayaran" IS '1 = PP
2 = PL
3 = LC
4 = RK';

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
-- Table structure for kegiatan_old
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."kegiatan_old";
CREATE TABLE "transaction"."kegiatan_old" (
  "id" int4 NOT NULL,
  "id_reg" varchar(255) COLLATE "pg_catalog"."default",
  "no_loan" varchar(255) COLLATE "pg_catalog"."default",
  "judul" varchar(255) COLLATE "pg_catalog"."default",
  "tujuan" text COLLATE "pg_catalog"."default",
  "executing_agency_id" int4,
  "implementing_agency_id" int4,
  "tipe_kegiatan" varchar(15) COLLATE "pg_catalog"."default",
  "dipa_pagu" float8,
  "dipa_anggaran" float8,
  "ta" varchar(4) COLLATE "pg_catalog"."default",
  "kinerja_serapan" varchar(255) COLLATE "pg_catalog"."default",
  "jumlah_penarikan" float8,
  "pmu_id" int4,
  "cpmu_id" int4,
  "piu_id" int4
)
;

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
COMMENT ON COLUMN "transaction"."paket"."st_tender" IS '0 = Belum
1 = Proses
2 = Kontrak';
COMMENT ON COLUMN "transaction"."paket"."jenis_paket" IS '1 = Kontraktual
2 = Swakelola
3 = Administrasi Umum';

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
  "alokasi" int8,
  "tanggal_revisi" date,
  "keterangan" text COLLATE "pg_catalog"."default"
)
;

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
COMMENT ON COLUMN "transaction"."paket_awp"."bulan" IS '1 = Q1
2 = Q2
3 = Q3
4 = Q4';

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
  "keterangan" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_revisi" date,
  "prognosis" int8
)
;

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
-- Table structure for paket_old
-- ----------------------------
DROP TABLE IF EXISTS "transaction"."paket_old";
CREATE TABLE "transaction"."paket_old" (
  "id" int4 NOT NULL,
  "id_paket" varchar(255) COLLATE "pg_catalog"."default",
  "nama" varchar(255) COLLATE "pg_catalog"."default",
  "lokasi" varchar(255) COLLATE "pg_catalog"."default",
  "status_tender" int2,
  "tahun_pelaksanaan" varchar(4) COLLATE "pg_catalog"."default",
  "penyedia_jasa" varchar(255) COLLATE "pg_catalog"."default",
  "nilai_kontrak" float8,
  "tanggal_kontrak" date,
  "tanggal_selesai" date,
  "kategori_masalah" varchar(255) COLLATE "pg_catalog"."default",
  "fisik" varchar(255) COLLATE "pg_catalog"."default",
  "keu" varchar(255) COLLATE "pg_catalog"."default",
  "dipa_thberjalan" varchar(4) COLLATE "pg_catalog"."default",
  "realisasi_kum" varchar(255) COLLATE "pg_catalog"."default",
  "owp_t1" varchar(255) COLLATE "pg_catalog"."default",
  "owp_t2" varchar(255) COLLATE "pg_catalog"."default",
  "owp_tn" varchar(255) COLLATE "pg_catalog"."default",
  "rencana_serapq1" varchar(255) COLLATE "pg_catalog"."default",
  "rencana_serapq2" varchar(255) COLLATE "pg_catalog"."default",
  "rencana_serapq3" varchar(255) COLLATE "pg_catalog"."default",
  "rencana_serapq4" varchar(255) COLLATE "pg_catalog"."default",
  "sisa_alokasi" float8,
  "kegiatan_id" int4
)
;
COMMENT ON COLUMN "transaction"."paket_old"."status_tender" IS '0 = Belum
1 = Proses
2 = Kontrak';

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
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."adendum_id_seq"
OWNED BY "transaction"."adendum"."id";
SELECT setval('"transaction"."adendum_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."hibah_langsung_id_seq"
OWNED BY "transaction"."hibah_langsung"."id";
SELECT setval('"transaction"."hibah_langsung_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_dipa_id_seq"
OWNED BY "transaction"."kegiatan_dipa"."id";
SELECT setval('"transaction"."kegiatan_dipa_id_seq"', 12, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_dokumen_id_seq"
OWNED BY "transaction"."kegiatan_dokumen"."id";
SELECT setval('"transaction"."kegiatan_dokumen_id_seq"', 9, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_exec_id_seq"
OWNED BY "transaction"."kegiatan_exec"."id";
SELECT setval('"transaction"."kegiatan_exec_id_seq"', 11, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_id_seq"
OWNED BY "transaction"."kegiatan"."id";
SELECT setval('"transaction"."kegiatan_id_seq"', 53, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_imp_id_seq"
OWNED BY "transaction"."kegiatan_imp"."id";
SELECT setval('"transaction"."kegiatan_imp_id_seq"', 10, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_kpi_detail_id_seq"
OWNED BY "transaction"."kegiatan_kpi_detail"."id";
SELECT setval('"transaction"."kegiatan_kpi_detail_id_seq"', 12, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_kpi_id_seq"
OWNED BY "transaction"."kegiatan_kpi"."id";
SELECT setval('"transaction"."kegiatan_kpi_id_seq"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."kegiatan_penyerapan_id_seq"
OWNED BY "transaction"."kegiatan_penyerapan"."id";
SELECT setval('"transaction"."kegiatan_penyerapan_id_seq"', 6, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."paket_alokasi_id_seq"
OWNED BY "transaction"."paket_alokasi"."id";
SELECT setval('"transaction"."paket_alokasi_id_seq"', 5, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."paket_awp_id_seq"
OWNED BY "transaction"."paket_awp"."id";
SELECT setval('"transaction"."paket_awp_id_seq"', 27, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."paket_dipa_id_seq"
OWNED BY "transaction"."paket_dipa"."id";
SELECT setval('"transaction"."paket_dipa_id_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."paket_foto_id_seq"
OWNED BY "transaction"."paket_foto"."id";
SELECT setval('"transaction"."paket_foto_id_seq"', 7, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."paket_id_seq"
OWNED BY "transaction"."paket"."id";
SELECT setval('"transaction"."paket_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "transaction"."paket_owp_id_seq"
OWNED BY "transaction"."paket_owp"."id";
SELECT setval('"transaction"."paket_owp_id_seq"', 3, true);

-- ----------------------------
-- Primary Key structure for table adendum
-- ----------------------------
ALTER TABLE "transaction"."adendum" ADD CONSTRAINT "adendum_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table hibah_langsung
-- ----------------------------
ALTER TABLE "transaction"."hibah_langsung" ADD CONSTRAINT "hibah_langsung_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan
-- ----------------------------
ALTER TABLE "transaction"."kegiatan" ADD CONSTRAINT "kegiatan_pkey1" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_dipa
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_dipa" ADD CONSTRAINT "kegiatan_dipa_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_dokumen
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_dokumen" ADD CONSTRAINT "kegiatan_dokumen_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_exec
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_exec" ADD CONSTRAINT "kegiatan_exec_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_imp
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_imp" ADD CONSTRAINT "kegiatan_imp_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_kpi
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_kpi" ADD CONSTRAINT "kegiatan_kpi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_kpi_detail
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_kpi_detail" ADD CONSTRAINT "kegiatan_kpi_detail_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_old
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_old" ADD CONSTRAINT "kegiatan_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table kegiatan_penyerapan
-- ----------------------------
ALTER TABLE "transaction"."kegiatan_penyerapan" ADD CONSTRAINT "kegiatan_penyerapan_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket
-- ----------------------------
ALTER TABLE "transaction"."paket" ADD CONSTRAINT "paket_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket_alokasi
-- ----------------------------
ALTER TABLE "transaction"."paket_alokasi" ADD CONSTRAINT "paket_alokasi_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket_awp
-- ----------------------------
ALTER TABLE "transaction"."paket_awp" ADD CONSTRAINT "paket_awp_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket_dipa
-- ----------------------------
ALTER TABLE "transaction"."paket_dipa" ADD CONSTRAINT "paket_dipa_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket_foto
-- ----------------------------
ALTER TABLE "transaction"."paket_foto" ADD CONSTRAINT "paket_foto_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table paket_owp
-- ----------------------------
ALTER TABLE "transaction"."paket_owp" ADD CONSTRAINT "paket_owp_pkey" PRIMARY KEY ("id");
