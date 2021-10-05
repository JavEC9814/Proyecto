/*INSERT INTO `usuario` (`id_usuario`, `tipo_usuario`, `nombre_usuario`, `contraseña`) VALUES ('0001', 'Enfermera', 'Paula Ramirez', '123456');
SELECT * FROM `usuario`;*/

conexion = psycopg2.connect(database="Solmedi", user="Javier Cedeño", password="3144533398", host="127.0.0.1", port="5432")
print("BD conectada")

publicg