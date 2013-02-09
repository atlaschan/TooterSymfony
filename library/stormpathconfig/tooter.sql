
create procedure tooter()

Begin

	drop table if exists T_TOOT;
	drop table if exists T_ACCOUNT;
	
	create table T_TOOT (tootId bigint not null auto_increment primary key, tootMessage varchar(200), custId bigint);
	create table T_ACCOUNT (id bigint not null auto_increment primary key, userName varchar(50));
	
	alter table T_TOOT add foreign key (custId) references T_ACCOUNT(id);

End
