/* Nueva Tabla */

CREATE TABLE registros (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
nombre TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
email TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
password VARCHAR(10) NOT NULL,
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


/* Insertar Datos */

INSERT INTO registros(nombre, email, password) VALUES ("mario", "mario@gmail.com", "mario123")
