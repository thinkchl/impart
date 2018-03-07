drop database if exists project;
create database project charset utf8;
use project;

drop table if exists t_action;
drop table if exists t_company;
drop table if exists t_news;
drop table if exists t_user;
create table t_user(
	id int primary key auto_increment,
	username varchar(20),
	password varchar(20),
	email varchar(30)
);
insert into t_user values(null,'Think','think','314842311@qq.com');
insert into t_user values(null,'candy','candy','314842311@qq.com');
insert into t_user values(null,'allen','allen','314842311@qq.com');
insert into t_user values(null,'kevin','kevin','314842311@qq.com');


create table t_news(
	id int primary key auto_increment,
	title varchar(20),
	img varchar(40),
	content blob,
	createdate date,
	uid int,
	constraint news_fk_user foreign key(uid) references t_user(id)
);


create table t_company(
	id int primary key auto_increment,
	title varchar(20),
	img varchar(40),
	content blob,
	createdate date,
	uid int ,
	constraint company_fk_user foreign key(uid) references t_user(id)
);

create table t_action(
	id int primary key auto_increment,
	title varchar(20),
	img varchar(40),
	content blob,
	createdate date,
	uid int ,
	constraint action_fk_user foreign key(uid) references t_user(id)
);


