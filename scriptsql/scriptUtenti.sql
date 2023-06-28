DROP TABLE IF EXISTS Utente CASCADE;

CREATE TABLE Utente(
    nome VARCHAR(20) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    nascita DATE NOT NULL,
    sesso VARCHAR NOT NULL,
    email VARCHAR(50) PRIMARY KEY,
    password VARCHAR(50) NOT NULL
);



INSERT INTO Utente (nome, cognome,nascita, sesso, email, password)
	VALUES
		('Giovanni','Renzullo','2001-06-09','altro','giovannirenzullo@gmail.com','Fy$3r#p@ssW0rd'),
		('Ettore','Fumagalli','2003-01-02','M','ettorefumagalli@gmail.com','S#k8r@t3C0d3!'),
		('Marco','Rufo','2002-12-09','M','marcorufo@gmail.com','P@ssw0rd$tr0ng'),
		('Vincenzo','Petricchione','2004-04-25','M','vincenzopetricchione@gmail.com','P3r$3cR3tP@ss!');


-- Concedi tutti i privilegi all'utente www
GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO postgres; 
GRANT ALL PRIVILEGES ON ALL SEQUENCES IN SCHEMA public TO postgres;


--visualizzo la tabella 
SELECT * from utente;