CREATE USER 'any'@'localhost' IDENTIFIED BY 'password'; /* for mysql verson 7 or less */
CREATE USER any@localhost IDENTIFIED WITH mysql_native_password BY 'password';  /* for mysql verson 8 */

CREATE DATABASE telecom;

GRANT ALL PRIVILEGES ON telecom.* To 'ongc'@'localhost';

CREATE TABLE IF NOT EXISTS teli_log(
  tel_no VARBINARY(255) not null,
  token VARBINARY(255) not null,
  time_id TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  actv VARBINARY(255) NULL,
    PRIMARY KEY(tel_no)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS log(
  id int AUTO_INCREMENT,
  cpf VARBINARY(255),
  pass VARBINARY(255),
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
