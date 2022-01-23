/*
 Navicat Premium Data Transfer

 Source Server         : DPT ONLINE
 Source Server Type    : PostgreSQL
 Source Server Version : 100019
 Source Host           : 193.111.124.82:999
 Source Catalog        : si_phln
 Source Schema         : hrm

 Target Server Type    : PostgreSQL
 Target Server Version : 100019
 File Encoding         : 65001

 Date: 23/01/2022 18:03:58
*/


-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "hrm"."users_id_seq";
CREATE SEQUENCE "hrm"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "hrm"."users";
CREATE TABLE "hrm"."users" (
  "id" int8 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
),
  "username" varchar(30) COLLATE "pg_catalog"."default",
  "nama" varchar(100) COLLATE "pg_catalog"."default",
  "email" varchar(255) COLLATE "pg_catalog"."default",
  "sektor_id" int2,
  "jabatan" varchar(255) COLLATE "pg_catalog"."default",
  "tahapan_kegiatan" int2,
  "password" varchar(255) COLLATE "pg_catalog"."default",
  "role" int2,
  "st" varchar(50) COLLATE "pg_catalog"."default",
  "province_id" int8
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "hrm"."users" VALUES (1, 'admin', 'Administrator', 'admin@phln.com', 0, 'Admin', NULL, '$2y$10$N49OBPwWzkrkt9iPMKn3V.P1lJzAoc/k.hcwyveGC6evmNdWM6MvO', 1, 'aktif', 0);
INSERT INTO "hrm"."users" VALUES (2, 'aaa', 'ygyg', 'aaa@aaa.com', 0, 'aaa', NULL, '$2y$10$oncgZfwyV8jfDQfqXZMz7.u5.emFnkMBkblO2Jsiciy/s2T49Pjay', 2, 'aktif', 0);
INSERT INTO "hrm"."users" VALUES (5, 'ddd', 'werwer', 'asdasd@sdasd.com', 0, 'asdasd', NULL, '$2y$10$IsCNVPoYX5cWbe9Juk4SlOmWSr.Gc10iInZmJGOZv/yXlYRzj.PV.', 5, 'aktif', 32);
INSERT INTO "hrm"."users" VALUES (3, 'bbb', '2121', 'bbb@aaa.com', 0, 'aaa', NULL, '$2y$10$LjjwdxmPm0xR2pHWUluzTuycD5Dy8mRCDf2dJy0eaNfKNgUxgS6C6', 3, 'aktif', 0);
INSERT INTO "hrm"."users" VALUES (4, 'ccc', 'jhkjyuf', 'ccc@aaa.com', 10, 'aaa', NULL, '$2y$10$wlxBtWAAOHV0N4dZ6yDrPeEKf8ypEemwqRHD7mGF1t5GsKfvFw3zK', 4, 'aktif', 0);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "hrm"."users_id_seq"
OWNED BY "hrm"."users"."id";
SELECT setval('"hrm"."users_id_seq"', 6, true);

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "hrm"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");
