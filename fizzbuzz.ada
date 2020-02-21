procedure fizzbuzz is

begin

for i in 1..100 loop
    if i mod 3 = 0 then
        Put("fizz");
        New_Line;
    elsif i mod 5 = 0 then
        Put("buzz");
        New_Line;
    elsif i mod 3 = 0 and i mod 5 = 0 then
        Put("fizzbuzz");
        New_Line;
    else 
        Put(i);
        New_Line;
    end if;
end loop;

end fizzbuzz; 