use ejercicio_prueba;

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