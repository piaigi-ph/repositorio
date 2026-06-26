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


INSERT INTO alunos (nome, idade, curso, nota, data_matricula, status_matricula)
VALUES
('Ana',18,'Matemática',8.5,'2026-05-26','Ativo'),
('Carlos',20,'Física',7.0,'2026-05-26','Ativo'),
('João',19,'Química',6.5,'2026-05-26','Ativo');


INSERT INTO alunos (nome, idade, curso, nota, data_matricula, status_matricula)
VALUES ('Pedro',18,'Desenvolvimento de Sistemas',9.0,CURRENT_DATE(),'Ativo');

INSERT INTO alunos (nome, curso)
VALUES ('Camila','Administração');


INSERT INTO alunos (nome, idade, curso, nota, data_matricula, status_matricula)
VALUES ('D''Angelo',19,'História',8.5,CURRENT_DATE(),'Ativo');


INSERT INTO alunos (nome, idade, curso, nota, data_matricula, status_matricula)
VALUES ('Larissa',(2026-2008),'Lógica de Programação',9.5,CURRENT_DATE(),'Ativo');


INSERT INTO alunos (nome, idade, curso, nota, data_matricula, status_matricula)
VALUES ('Marcos',21,'Banco de Dados',5.0,CURRENT_DATE(),'Trancado');


INSERT IGNORE INTO alunos (id,nome,idade,curso,nota,data_matricula,status_matricula)
VALUES (1,'Aluno Teste',18,'Artes',6.0,CURRENT_DATE(),'Ativo');


INSERT INTO alunos (nome,idade,curso,nota,data_matricula,status_matricula)
VALUES ('Sônia',22,'Geografia',7.0,'2024-02-15','Ativo');


INSERT INTO alunos (nome,idade,curso,nota,data_matricula,status_matricula)
VALUES ('Beto',20,'Matemática',(7.5+8.0)/2,CURRENT_DATE(),'Ativo');

INSERT INTO alunos (nome,idade,curso,nota,data_matricula,status_matricula)
VALUES (UPPER('Letícia'),18,'Português',9.5,CURRENT_DATE(),'Ativo');


SELECT * FROM alunos
WHERE nota BETWEEN 6.0 AND 8.5;


SELECT * FROM alunos
WHERE curso IN ('Matemática','Física','Química');

SELECT * FROM alunos
WHERE nome LIKE 'C%';


SELECT * FROM alunos
WHERE nome LIKE '%Silva%';


SELECT * FROM alunos
WHERE nota IS NULL;


SELECT COUNT(*) AS total_ativos
FROM alunos
WHERE status_matricula='Ativo';


SELECT *
FROM alunos
ORDER BY curso ASC, nota DESC;


SELECT *
FROM alunos
WHERE NOT curso='Artes';


SELECT AVG(nota) AS media_geral
FROM alunos;

SELECT DISTINCT curso
FROM alunos;


UPDATE alunos
SET nota=nota*1.10
WHERE curso='Banco de Dados';


UPDATE alunos
SET status_matricula='Trancado'
WHERE nota<4.0
AND idade>18;

UPDATE alunos
SET curso='Desenvolvimento Web',
nota=9.0
WHERE id=12;


UPDATE alunos
SET idade=20
WHERE id IN (2,5,7,10);


UPDATE alunos
SET nota=NULL
WHERE status_matricula='Trancado';


UPDATE alunos
SET nome=LOWER(nome)
WHERE curso='História';


UPDATE alunos
SET nota=nota-0.5
WHERE curso='Física'
OR curso='Química';


UPDATE alunos
SET status_matricula='Concluido'
WHERE data_matricula<'2025-01-01';


UPDATE alunos
SET nome=CONCAT(nome,' (Representante)')
WHERE id=3;


UPDATE alunos
SET nota=10
WHERE nota>10;


DELETE FROM alunos
WHERE nome LIKE '%Junior';


DELETE FROM alunos
WHERE id IN (4,8,15);

DELETE FROM alunos
WHERE curso IS NULL;


DELETE FROM alunos
WHERE idade BETWEEN 30 AND 40;


DELETE FROM alunos
WHERE curso='Geografia'
AND status_matricula='Trancado';


DELETE FROM alunos
ORDER BY nota ASC
LIMIT 3;


DELETE FROM alunos
WHERE nota<5
AND curso<>'Desenvolvimento de Sistemas';


DELETE FROM alunos
WHERE nome LIKE '%Teste%';


DELETE FROM alunos
WHERE idade<16
AND YEAR(data_matricula)=YEAR(CURRENT_DATE());


DELETE FROM alunos
WHERE nota=0
OR status_matricula IS NULL;

-- Pedro Henrique da Silva Bernardo
-- 25/06/2026
-- Banco de Dados II
-- ETEC


SELECT curso,
AVG(nota) AS media
FROM alunos
GROUP BY curso
HAVING AVG(nota)>7.0;


CREATE TABLE alunos_aprovados AS
SELECT *
FROM alunos
WHERE nota>=6.0;


UPDATE alunos
SET status_matricula=
CASE
WHEN nota>=6 THEN 'Concluido'
ELSE 'Retido'
END;


DELETE FROM alunos
WHERE nota IS NULL
AND curso=(
SELECT curso
FROM (
SELECT curso
FROM alunos
WHERE nome='João'
LIMIT 1
) AS temp
);