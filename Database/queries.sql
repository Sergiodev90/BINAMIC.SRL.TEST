CREATE SCHEMA IF NOT EXISTS binamic_prova;


CREATE TABLE Destinatari(

    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    indirizzo VARCHAR(255) NOT NULL,
    cap VARCHAR(10) NOT NULL,
    provincia CHAR(2) NOT NULL,
    mitente VARCHAR(255) NOT NULL

);



INSERT INTO Destinatari (nome, cognome,indirizzo,cap,provincia,mitente)VALUES
('sergio','noriega','via barletta 8',"10136","TO","posta italia"),
('andrea', 'mascarpone','via frejus 89','10165','TO',"posta italia");

ALTER TABLE Destinatari ADD id INT PRIMARY KEY AUTO_INCREMENT;

ALTER COLUMN Destinatari
MODIFIY COLUMN ID