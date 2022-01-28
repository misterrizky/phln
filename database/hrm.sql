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