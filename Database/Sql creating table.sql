DROP TABLE public."Product";
DROP TABLE public."Waybill";
DROP TABLE public."Provider";
DROP TABLE public."Agent";
DROP TABLE public."Branch";



--table branch
CREATE TABLE public."Branch"(
	
	id_branch serial not null,
	name_branch varchar, --название
	city_branch varchar, --город
	CONSTRAINT id_branch PRIMARY KEY (id_branch)

);


-- agent
CREATE TABLE public."Agent"(
	
	id_agent serial not null,
	surname varchar, --фамилия/логин
	firstname varchar, --имя
	date_birthday date, --др
	role_personal varchar, --роль
	pass varchar, --пароль
	id_branch_Branch integer NOT null, --№отделения
	CONSTRAINT id_agent PRIMARY KEY (id_agent),
	CONSTRAINT "date_of_birth" CHECK (date_birthday <= '2004-01-01')
	
);

ALTER TABLE public."Agent" ADD CONSTRAINT id_branch_FK FOREIGN KEY (id_branch_Branch)
REFERENCES public."Branch" (id_branch) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE IF EXISTS public."Agent"
    RENAME id_branch_branch TO "id_branch_FK";
	
	
--table provider
CREATE TABLE public."Provider"(

	id_provider serial not null,
	name_provider varchar, --имя поставщика
	mail varchar, --почта
	phone varchar, --телефон
	address varchar, --адрес
	CONSTRAINT id_provider PRIMARY KEY (id_provider)

);

CREATE TABLE public."Waybill"(

	id_waybill serial not null,
	operation varchar, --операция
	date_of_waybill date, --дата
	note text, --пояснение
	id_agent_FK integer NOT NULL, --кем
	id_provider_FK integer, --от кого
    customer varchar, --кому
	CONSTRAINT id_waybill PRIMARY KEY (id_waybill),
	CONSTRAINT "check_date" CHECK (date_of_waybill < now())

);

ALTER TABLE public."Waybill" ADD CONSTRAINT id_agent_FK FOREIGN KEY (id_agent_FK)
REFERENCES public."Agent" (id_agent) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE public."Waybill" ADD CONSTRAINT id_provider_FK FOREIGN KEY (id_provider_FK)
REFERENCES public."Provider" (id_provider) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;


CREATE TABLE public."Product"(

	id_product serial NOT NULL,
	name_product varchar, --наименование
	form varchar, --форма изделия
-- 	size varchar, --диаметр/периметр
    material varchar, --материал
    sizeA int, --сооств. А
    sizeB int, --В
    sizeC int, --С
    sizeD int, --D
    length int, --длина
	counter int, --количество
	price bigint, --цена за шт
	CONSTRAINT id_product PRIMARY KEY (id_product),
	--CONSTRAINT "count" CHECK (counter > '0')

)

create or replace function count_zero()
returns trigger
as $$
declare
count int;
new_count int;
begin
IF (new.'count' < 0) then
	raise exception '% quantity cannot be negative', new.'count';
end if;
return new;
end;
$$ language 'plpgsql';

CREATE TRIGGER count_check
    BEFORE INSERT OR UPDATE
    ON "Product"
    FOR EACH ROW
    EXECUTE PROCEDURE count_zero();
