create table aluno (
	id integer not null,
	nome varchar(50),
	celular varchar(20),
	primary key (id)
);

insert into aluno (id, nome, celular)
values
(1,'FELIPE', '55(14)997605172'),
(2,'THIAGO', '55(14)991992166'),
(3, 'JOSIENE', '55(14)988100062'),
(4, 'LAURA', '55(14)991245624');

select * from aluno;