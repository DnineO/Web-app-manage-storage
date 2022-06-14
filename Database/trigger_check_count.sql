create or replace function count_zero()
returns trigger
as $$
declare
count int;
new_count int;
begin
IF (new.count < 0) then
	raise exception '% quantity cannot be negative', new.count;
end if;
return new;
end;
$$ language 'plpgsql';

CREATE TRIGGER count_check
    BEFORE INSERT OR UPDATE
    ON "Product"
    FOR EACH ROW
    EXECUTE PROCEDURE count_zero();