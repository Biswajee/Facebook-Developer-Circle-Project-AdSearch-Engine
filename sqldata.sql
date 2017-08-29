drop database phpconnect if exists;
create database phpconnect;
use phpconnect;
create table logname(id int auto_increment primary key,uname varchar(20) not null unique, password varchar(20) not null,init_login timestamp);
desc logname;
insert into logname values(1001,"Admin0","1111",now());
insert into logname values(0,"Admin1","1111",now());
insert into logname values(0,"Admin2","1111",now());
select * from logname;
