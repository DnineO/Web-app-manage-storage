-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- PostgreSQL version: 9.2
-- Project Site: pgmodeler.com.br
-- Model Author: ---

SET check_function_bodies = false;
-- ddl-end --


-- Database creation must be done outside an multicommand file.
-- These commands were put in this file only for convenience.
-- -- object: new_database | type: DATABASE --
-- CREATE DATABASE new_database
-- ;
-- -- ddl-end --
-- 

-- object: public."Branch" | type: TABLE --
CREATE TABLE public."Branch"(
	id_branch integer,
	name_branch text,
	region_branch text,
	city_branch text,
	address_branch text,
	address_number_branch text,
	CONSTRAINT id_branch PRIMARY KEY (id_branch)

);
-- ddl-end --
-- object: public."Agent" | type: TABLE --
CREATE TABLE public."Agent"(
	id_agent integer,
	surname text,
	name text,
	date_birtday date,
	phone_number bigint,
	role text,
	"id_branch_Branch" integer,
	CONSTRAINT id_agent PRIMARY KEY (id_agent)

);
-- ddl-end --

-- TODO: обновить вид таблицы, добавить по тз (готово)
-- object: public.product | type: TABLE --
CREATE TABLE public.product(
	id_product bigint,
	name text,
	manufacturer text,
	count bigint,
	price bigint,
	CONSTRAINT id_product PRIMARY KEY (id_product)

);
-- ddl-end --
COMMENT ON COLUMN public.product.manufacturer IS 'производитель';
-- ddl-end --
-- ddl-end --

-- object: public.waybill | type: TABLE --
CREATE TABLE public.waybill(
	id_waybill bigint,
	date_of_waybill date,
	operation text,
	note text,
	"id_agent_Agent" integer,
	id_provider_provider integer,
	CONSTRAINT id_waybill PRIMARY KEY (id_waybill)

);
-- ddl-end --
COMMENT ON TABLE public.waybill IS 'накладная';
-- ddl-end --
-- ddl-end --

-- object: public.provider | type: TABLE --
CREATE TABLE public.provider(
	id_provider integer,
	name text,
	mail text,
	phone text,
	CONSTRAINT id_provider PRIMARY KEY (id_provider)

);
-- ddl-end --
-- object: "Branch_fk" | type: CONSTRAINT --
ALTER TABLE public."Agent" ADD CONSTRAINT "Branch_fk" FOREIGN KEY ("id_branch_Branch")
REFERENCES public."Branch" (id_branch) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE NOT DEFERRABLE;
-- ddl-end --


-- object: "Agent_fk" | type: CONSTRAINT --
ALTER TABLE public.waybill ADD CONSTRAINT "Agent_fk" FOREIGN KEY ("id_agent_Agent")
REFERENCES public."Agent" (id_agent) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE NOT DEFERRABLE;
-- ddl-end --


-- object: provider_fk | type: CONSTRAINT --
ALTER TABLE public.waybill ADD CONSTRAINT provider_fk FOREIGN KEY (id_provider_provider)
REFERENCES public.provider (id_provider) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE NOT DEFERRABLE;
-- ddl-end --


-- object: public.many_product_has_many_waybill | type: TABLE --
CREATE TABLE public.many_product_has_many_waybill(
	id_product_product bigint,
	id_waybill_waybill bigint,
	CONSTRAINT many_product_has_many_waybill_pk PRIMARY KEY (id_product_product,id_waybill_waybill)

);
-- ddl-end --
-- object: product_fk | type: CONSTRAINT --
ALTER TABLE public.many_product_has_many_waybill ADD CONSTRAINT product_fk FOREIGN KEY (id_product_product)
REFERENCES public.product (id_product) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE NOT DEFERRABLE;
-- ddl-end --


-- object: waybill_fk | type: CONSTRAINT --
ALTER TABLE public.many_product_has_many_waybill ADD CONSTRAINT waybill_fk FOREIGN KEY (id_waybill_waybill)
REFERENCES public.waybill (id_waybill) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE NOT DEFERRABLE;
-- ddl-end --



