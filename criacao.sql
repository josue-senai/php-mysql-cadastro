/*create database bdform;*/
use bdform;

CREATE TABLE paciente (
    numero_identificacao INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    data_nasc DATE NOT NULL,
    genero CHAR(1) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    telefone VARCHAR(11),
    historico_med VARCHAR(100),
    PRIMARY KEY (numero_identificacao)
);

CREATE TABLE medico (
    id INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    especialidade VARCHAR(25) NOT NULL,
    telefone VARCHAR(11),
    email VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE enfermeiro (
    id INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    especializacao VARCHAR(25) NOT NULL,
    telefone VARCHAR(11),
    email VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE atendimento (
	id int auto_increment,
    data_atend date not null,
    hora time not null,
    diagnostico varchar(100) not null,
    tratamento varchar(100) not null,
    id_paciente INT NOT NULL,
    id_medico INT NOT NULL,
    id_enfermeiro INT NOT NULL,
    CONSTRAINT FK_atendimento_paciente FOREIGN KEY (id_paciente)
        REFERENCES paciente (numero_identificacao),
    CONSTRAINT FK_atendimento_medico FOREIGN KEY (id_medico)
        REFERENCES medico (id),
    CONSTRAINT FK_atendimento_enfermeiro FOREIGN KEY (id_enfermeiro)
        REFERENCES enfermeiro (id),
    PRIMARY KEY (id)
);

create table agendamento(
	id int auto_increment,
    data_agenda date not null,
    hora time not null,
    procedimento varchar(100) not null,
    id_paciente int not null,
    id_medico int not null,
    constraint FK_agendamento_paciente foreign key (id_paciente)
		REFERENCES paciente (numero_identificacao),
	CONSTRAINT FK_agendamento_medico FOREIGN KEY (id_medico)
        REFERENCES medico (id),
    primary key(id)
);

create table ala (
	id int auto_increment,
    nome varchar(50) not null,
    capacidade smallint not null,
    especializacao varchar(25) not null,
    primary key (id)
);

select * from medico;

