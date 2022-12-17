/*Create Database*/
CREATE DATABASE [IF NOT EXISTS] web_systems_final

/*First table -- login */
CREATE TABLE login (
    Id INT(4) NOT NULL AUTO_INCREMENT,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO login (Username, Password) VALUES ('test', 'test');
INSERT INTO login (Username, Password) VALUES ('Username', 'Password');
INSERT INTO login (Username, Password) VALUES ('username', 'password');

/*Second table -- jobs*/
CREATE TABLE jobs (
    Id INT(4) NOT NULL AUTO_INCREMENT,
    Address VARCHAR(50) NOT NULL,
    Description VARCHAR(50) NOT NULL,
    Cost INTEGER NOT NULL,
    Payout INTEGER NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO jobs (Address, Description, Cost, Payout) VALUES ('1159 Mayfield Lane', 'Water Line Replacement', 1200, 2500);
INSERT INTO jobs (Address, Description, Cost, Payout) VALUES ('678 Garfield Ave', 'Water Line Replacement', 1035, 3000);
INSERT INTO jobs (Address, Description, Cost, Payout) VALUES ('1498 Newport Circle', 'Water Line Replacement', 1450, 2100);
