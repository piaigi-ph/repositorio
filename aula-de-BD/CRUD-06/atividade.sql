create Table alunos (
    id int primary key auto_increment,
    nome varchar(255) not null,
    idade int (100) not null,
    curso varchar(255) not null,
    nota DECIMAL (5,2) not null
)

insert into alunos (nome, idade, curso, nota,) 

values ('lucas', 20, 'matematica', 8.5);
VALUES ('mariana', 22, 'historia', 9.0);
VALUES ('pedro', , '', );
VALUES ('ana', 19, '', );
VALUES ('carlos', , 'fisica', );
VALUES ('fernanda', 21, '', 10.0);
VALUES ('roberto', 18, 'matematica', );
after table alunos auto increment = 100;
VALUES ('joao', 25, '', );
VALUES ('beatriz', , 'quimica', 7.5);
VALUES ('rafael', 30, 'artes', 6.0);

select * from alunos;
select nome from alunos;
select matematica from alunos where curso = 'matematica';
select * from alunos where idade > 20;
select * from alunos where nota > 7.0;
select * from alunos where id = 5;
select nome, nota from alunos where curso = 'historia';
SELECT idade from alunos where idade = 18;
SELECT nota from alunos where nota = 10;
select nome from alunos where nome = 'ana'

update nota from aluno id=1 set nota=9.5;
update curso from nome='mariana' set curso='geografia'
update idade from id = 3 set idade = 21;
update nota from curso = 'fisica' set nota = 8.0;
update nome from id = 4 set nome = 'ana carolina';
update curso from curso = 'artes' set curso = 'design';
update idade,nota from nome = 'lucas' set idade = 21, nota = 9.0;
update nota from id = 10 set nota = 5.0;
update curso from id=2 set curso='ciencias da computação';

