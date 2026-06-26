CREATE DATABASE IF NOT EXISTS escola;

USE escola;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    curso VARCHAR(100),
    nota DECIMAL(4,2),
    data_matricula DATE,
    status_matricula VARCHAR(20)
);


INSERT INTO alunos (nome, idade, curso, nota)
VALUES ('Lucas',20,'Matemática',8.5);

INSERT INTO alunos (nome, idade, curso, nota)
VALUES ('Mariana',22,'História',9.0);

INSERT INTO alunos (nome)
VALUES ('Pedro');

INSERT INTO alunos (nome, idade)
VALUES ('Ana',19);

INSERT INTO alunos (nome, curso)
VALUES ('Carlos','Física');

INSERT INTO alunos (nome, idade, nota)
VALUES ('Fernanda',21,10.0);

INSERT INTO alunos (nome, idade, curso)
VALUES ('Roberto',18,'Geografia');

INSERT INTO alunos (id, nome, idade)
VALUES (100,'João',25);

INSERT INTO alunos (nome, curso, nota)
VALUES ('Beatriz','Química',7.5);

INSERT INTO alunos (nome, idade, curso, nota)
VALUES ('Rafael',30,'Artes',6.0);


SELECT * FROM alunos;

SELECT nome FROM alunos;

SELECT * FROM alunos
WHERE curso='Matemática';

SELECT * FROM alunos
WHERE idade>20;

SELECT * FROM alunos
WHERE nota>=7.0;

SELECT * FROM alunos
WHERE id=5;

SELECT nome, nota
FROM alunos
WHERE curso='História';

SELECT * FROM alunos
WHERE idade=18;

SELECT * FROM alunos
WHERE nota=10.0;

SELECT * FROM alunos
WHERE nome='Ana';



UPDATE alunos
SET nota=9.5
WHERE id=1;

UPDATE alunos
SET curso='Geografia'
WHERE nome='Mariana';

UPDATE alunos
SET idade=21
WHERE id=3;

UPDATE alunos
SET nota=8.0
WHERE curso='Física';

UPDATE alunos
SET nome='Ana Carolina'
WHERE id=4;

UPDATE alunos
SET curso='Design'
WHERE curso='Artes';

UPDATE alunos
SET nota=8.5
WHERE nome='Beatriz';

UPDATE alunos
SET idade=21,
nota=9.0
WHERE nome='Lucas';

UPDATE alunos
SET nota=5.0
WHERE id=10;

UPDATE alunos
SET curso='Ciências da Computação'
WHERE id=2;



DELETE FROM alunos
WHERE id=10;

DELETE FROM alunos
WHERE nome='Fernanda';

DELETE FROM alunos
WHERE nota<5.0;

DELETE FROM alunos
WHERE curso='Química';

DELETE FROM alunos
WHERE id=7;

DELETE FROM alunos
WHERE idade<18;

DELETE FROM alunos
WHERE nome='Roberto';

DELETE FROM alunos
WHERE nota=0;

DELETE FROM alunos
WHERE id=15;

DELETE FROM alunos
WHERE curso='História'
AND nota<6.0;



UPDATE alunos
SET nota=nota+1.5
WHERE curso='Física'
AND nota<7.0;

DELETE FROM alunos
WHERE curso='Artes'
OR nota=0.0;

SELECT nome, idade
FROM alunos
ORDER BY idade DESC
LIMIT 3;