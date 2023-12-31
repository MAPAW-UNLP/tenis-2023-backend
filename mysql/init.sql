CREATE TABLE cancha (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE alquiler (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) NOT NULL, apellido VARCHAR(50) NOT NULL, telefono VARCHAR(15) NOT NULL, reserva_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE cuenta (id INT AUTO_INCREMENT NOT NULL, persona_id INT NOT NULL, importe INT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE estado (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE grupo (id INT AUTO_INCREMENT NOT NULL, reserva_id INT NOT NULL, persona_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE persona (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) NOT NULL, apellido VARCHAR(50) NOT NULL, telefono VARCHAR(15) NOT NULL, fechanac DATE DEFAULT NULL, esalumno TINYINT(1) NOT NULL, visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE reserva (id INT AUTO_INCREMENT NOT NULL, cancha_id INT NOT NULL, fecha DATE NOT NULL, hora_ini TIME NOT NULL, hora_fin TIME NOT NULL, persona_id INT DEFAULT NULL, replica TINYINT(1) NOT NULL, estado_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE cancha ADD tipo VARCHAR(20) NOT NULL;
ALTER TABLE alquiler DROP apellido;
ALTER TABLE persona DROP apellido;
CREATE TABLE clases (id INT AUTO_INCREMENT NOT NULL, tipo VARCHAR(20) NOT NULL, importe INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
CREATE TABLE pagos (id INT AUTO_INCREMENT NOT NULL, id_persona INT NOT NULL, id_tipo_clase INT NOT NULL, cantidad INT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
ALTER TABLE reserva ADD id_tipo_clase INT DEFAULT NULL;
ALTER TABLE usuario ADD fechapagos DATE DEFAULT NULL, ADD fechareplica DATE DEFAULT NULL;
CREATE TABLE replicas (id INT AUTO_INCREMENT NOT NULL, id_reserva INT NOT NULL, ultimo_mes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

insert into usuario (username, password) values ('admin', 'admin');
insert into clases (tipo, importe) values ('INDIVIDUAL', 100);
insert into clases (tipo, importe) values ('GRUPAL', 50);
