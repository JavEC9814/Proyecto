create table usuario
(id_usuario numeric(20)not null primary key,
tipo_usuario varchar(100)not null,
nombre_usuario varchar(255) not null,
contraseña varchar(255) not null );

create table paciente
(doc_paciente numeric (20) not null primary key,
nombre varchar (100) not null,
apellido varchar (100) not null,
genero varchar (50) not null,
fecha_nacimiento date not null,
edad numeric (10) not null,
telefono numeric (20) not null,
direccion varchar (100) not null,
EPS varchar (100) not null);

create table servicio
(id_servicio numeric(20)not null primary key,
tipo_servicio varchar(100)not null,
fecha_atencion date not null,
hora_atencion time not null);

create table historia_clinica
(id_hc numeric (20) not null primary key,
descripcion_servicio varchar (255) not null,
diagnostico varchar (255) not null,
examen_fisico_inicial varchar (255) not null,
id_servicio numeric (20) not null,
doc_paciente numeric (20) not null,
id_usuario numeric (20) not null,
foreign key (id_servicio) references servicio (id_servicio),
foreign key (doc_paciente) references paciente (doc_paciente),
foreign key (id_usuario) references usuario (id_usuario));

create table detalle_usuario
(id_usuario numeric(20)not null,
id_hc numeric(20)not null,
foreign key (id_usuario) references usuario (id_usuario),
foreign key (id_hc) references historia_clinica (id_hc));

create table detalle_servicio
(id_servicio numeric(20)not null,
id_hc numeric(20)not null,
foreign key (id_servicio) references servicio (id_servicio),
foreign key (id_hc) references historia_clinica (id_hc));