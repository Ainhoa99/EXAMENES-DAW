drop database if exists agenda;
-- ----------------------------------------------------------------
create database agenda default character set utf8 default collate utf8_general_ci;
use agenda;
-- ----------------------------------------------------------------
create table if not exists contacto (
  tel varchar(255) primary key,
  nombre varchar(255) not null,
  apellidos varchar(255) not null,
  dir varchar(255),
  cp varchar(255),
  tipo enum('Amigo', 'Trabajo', 'Familia', 'Otro') not null,
  foto varchar(255)
);
-- ----------------------------------------------------------------
insert into contacto (
    nombre,
    apellidos,
    dir,
    cp,
    tel,
    tipo,
    foto
  )
values (
    'Luka',
    'Carmona',
    'Su casa',
    '11111',
    '666666666',
    'amigo',
    'https://st3.depositphotos.com/5366154/13886/i/1600/depositphotos_138866652-stock-photo-fire-letter-l-of-burning.jpg'
  );