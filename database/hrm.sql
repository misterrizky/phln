/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : PostgreSQL
 Source Server Version : 120007
 Source Host           : localhost:5432
 Source Catalog        : phln
 Source Schema         : hrm

 Target Server Type    : PostgreSQL
 Target Server Version : 120007
 File Encoding         : 65001

 Date: 06/01/2022 12:44:30
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
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "hrm"."users_id_seq"
OWNED BY "hrm"."users"."id";
SELECT setval('"hrm"."users_id_seq"', 9, true);

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "hrm"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");
