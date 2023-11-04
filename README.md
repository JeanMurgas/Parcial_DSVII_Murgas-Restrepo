# Parcial_DSVII_Murgas-Restrepo

Problema N°4:
Desarrolla una aplicación donde los clientes puedan generar tickets de soporte técnico,
describiendo problemas o dudas que tengan. Cada ticket debe tener un título,
descripción, fecha de creación y estado (por ejemplo: abierto, en proceso, cerrado), solo
el usuario técnico puede cambiar el estado. Los usuarios deben poder registrarse e iniciar
sesión. Antes de guardar las contraseñas en la base de datos, asegúrate de cifrarlas
adecuadamente. Utiliza PDO para todas las operaciones CRUD de los tickets y sigue el
patrón MVC. Implementa sesiones para la autenticación y gestión de tickets por usuario.

Deberes a realizar:

1. Crear una pantalla para que el usuario coloque la info del ticket.
2. Crear una cuenta de usuario técnico(solo este puede cambiar los estados)
3. Crear una pantalla de login y de registro de usuarios.
4. Cifrar las contraseñas antes de guardarlas en la base de datos.
5. Usar PDO para manipular las acciones con la base de datos (query).
6. Verificar que un usuario existe en el sistema antes de procesar el ticket.

Pantallas: Login, CrearUsuario, LlenarTicket, ModificarEstadoTicket(solo la usa el usuarioTécnico)

Database: 
1. Tabla Usuario:
Pk = id_usuario
nombre
apellido
contrasena
email

2. Tabla UsuarioTecnico:
Pk = id_usertecnico
nombre
apellido
contrasena
email

3. Tabla Ticket
PK = id_ticket
FK = id_usuario
título->unique
descripción 
fecha de creación
estado
