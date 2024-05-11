create table student(
sid int auto_increment PRIMARY KEY,
sname varchar(50),
saddress varchar(50),
sclass int(40),
sphone varchar(40)
);

create table studentclass (
cid int auto_increment primary key,
cname varchar(50)
);
