DROP TABLE IF EXISTS Volontari CASCADE;

CREATE TABLE Volontari(
    nome VARCHAR(20) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    età INTEGER NOT NULL,
    email VARCHAR(30) PRIMARY KEY,
    città VARCHAR(20) NOT NULL,
    telefono BIGINT NOT NULL,
    disponibilità VARCHAR NOT NULL,
    descrizione VARCHAR(100) NOT NULL
);


INSERT INTO Volontari (nome, cognome, età, email, città, telefono, Disponibilità, descrizione)
VALUES
    ('Mario', 'Rossi', 25, 'mario.rossi@gmail.com', 'Roma', 1234567890, 'Lunedì', 'Descrizione volontario 1'),
    ('Giulia', 'Bianchi', 30, 'giulia.bianchi@gmail.com', 'Milano', 9876543210, 'Martedì', 'Descrizione volontario 2'),
    ('Luca', 'Verdi', 28, 'luca.verdi@gmail.com', 'Napoli', 4567890123, 'Mercoledì', 'Descrizione volontario 3');

-- Concedi tutti i privilegi all'utente www
GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO www; 
GRANT ALL PRIVILEGES ON ALL SEQUENCES IN SCHEMA public TO www;

--visualizzo la tabella 
SELECT * from Volontari;
