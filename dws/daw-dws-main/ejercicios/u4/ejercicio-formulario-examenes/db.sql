drop database if exists ejercicio_examenes;
-- ----------------------------------------------------------------
create database ejercicio_examenes default character set utf8 default collate utf8_general_ci;
use ejercicio_examenes;
-- ----------------------------------------------------------------
create table if not exists pregunta (
  id int auto_increment primary key,
  pregunta varchar(255) not null,
  respuesta varchar(255) not null,
  curso int(1) not null
);
create table if not exists resultado (
  id int auto_increment primary key,
  nombre_completo varchar(255) not null,
  preguntas_correctas int(1) not null,
  total_preguntas int(1) not null,
  curso int(2) not null
);
-- ----------------------------------------------------------------
insert into pregunta (pregunta, respuesta, curso)
values (
    '¿Qué animal tiene el cuello muy largo?',
    'Jirafa',
    1
  ),
  ('¿Raíz cuadrada de 16?', '4', 1),
  ('¿Cuántos colores tiene el arcoíris?', '7', 1),
  (
    '¿Cuántos centímetros contiene un metro?',
    '100',
    1
  ),
  (
    '¿Cómo se llama el villano de El Señor de los Anillos?',
    'Sauron',
    1
  ),
  ('¿Cuál es la capital de Italia?', 'Roma', 2),
  (
    '¿Cuál es el apellido del pintor de El Grito?',
    'Munch',
    2
  ),
  ('¿En qué año cayó el muro de Berlín?', '1989', 2),
  (
    '¿Cuál es el símbolo químico del potasio?',
    'K',
    2
  ),
  (
    '¿Qué país ganó el mundial de fútbol de 2010?',
    'España',
    2
  );