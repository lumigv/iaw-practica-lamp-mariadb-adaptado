CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  surname1 VARCHAR(100) NOT NULL,
  surname2 VARCHAR(100),
  name VARCHAR(100) NOT NULL,
  age INT UNSIGNED NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO users (surname1, surname2, name, age, email) VALUES('Colmenar', 'Viejo', 'Bonifacia', 25, 'bonifacia@gmail.com');
INSERT INTO users (surname1, surname2, name, age, email) VALUES('Santa Lucia', 'Tirajana', 'Macario', 50, 'macario@gmail.com');

