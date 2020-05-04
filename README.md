# Parcial Bases de datos II
## Documetación
### Código
Este es el arbol del proyecto

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/arbol.PNG)

- Utilizamos en php metodos POST y Sesiones para mantener los usuarios
- Utilizamos Mysqli de php para acceder a las bases de datos
- Dividimos en vistas y controladores teniendo cada vista su propio controlador que es el que enruta las diferentes paginas. 
- Usamos sentencias INNER JOIN de SQL para poder determinar los roles y accedemos a los diferentes modulos. 

### Interfaz
Este es el formulario de acceso

- ![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/2.PNG)

Siendo administrador se puede ver esto:

![image](https://github.com/alejandromaselli/parcial/blob/master/imagenes/3.PNG)

Este es el formulario para poder crear un usuario

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master//imagenes/1.PNG)

Esta es la pantalla para consultar las bases de datos.

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/4.PNG)

### Base de datos

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/diagrama.PNG)

### - El archivo queries2.sql contiene la creación de la base de datos, tablas e inserts.

### - Partimos del fromulario para crear un usuario y de una almacenamos datos en la tabla persona y usuario.

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/tabla1.PNG)
 
### - Tenemos una tabla de Roles donde la llave foranea apunta al id de usuario

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/tabla2.PNG)

### - Esiste una tercera tabla que contiene los roles que se pueden asignar al usuario 

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/rabla3.PNG)

### - Luego como se tiene una relación de muchos a muchos en tipo_permiso que es el CRUD con la tabla de roles que en el script de ejemplo contiene CEO, Gerente, Supervisor o Agente 

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/tabla5.PNG)

### - Existe una tabla que contiene los modulos y mediante el rol y los permisos se despliega en la pagina lo que el usuario puede editar, ver o actualizar

![Image of Yaktocat](https://github.com/alejandromaselli/parcial/blob/master/imagenes/tabla6.PNG)
![image](https://github.com/FernandoG17/Calculator-C-/blob/master/calculadtor.png)
