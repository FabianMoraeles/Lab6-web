⚽ La Liga Tracker - Gestión de Partidos (Laravel + HTML)

Bienvenido a La Liga Tracker, una aplicación sencilla y poderosa para registrar, visualizar, actualizar y eliminar partidos de La Liga. Este proyecto está desarrollado con Laravel para el backend y un archivo HTML puro como frontend.

-----------------------------------------------------
🚀 ¿Qué hace esta aplicación?

- Lista de partidos con sus equipos y fecha.
- Crear nuevos partidos.
- Buscar partidos por ID.
- Editar partidos existentes.
- Eliminar partidos.
- Preparada para integraciones adicionales (goles, tarjetas, tiempo extra).

-----------------------------------------------------
🧰 Requisitos previos

- PHP 8.1 o superior
- Composer
- Navegador web moderno (Chrome, Edge, Firefox)
- XAMPP (recomendado para MySQL y Apache)

-----------------------------------------------------
🛠️ Instrucciones de instalación y ejecución

1️. Clona o descarga este repositorio

git clone https://github.com/FabianMoraeles/la-liga-tracker.git  
cd la-liga-tracker

2. Instala las dependencias de Laravel

composer install

También puedes configurar .env a partir de .env.example si es necesario:  
cp .env.example .env  
php artisan key:generate

3️. Levanta los servicios de XAMPP

- Abre el Panel de XAMPP
- Inicia:
  - Apache
  - MySQL

4️. Crea la base de datos

- Abre http://localhost/phpmyadmin
- Crea una nueva base de datos llamada:

ligatracker

- Ejecuta el script incluido: ligatracker.sql  
  Este archivo generará automáticamente la tabla 'games' con las columnas necesarias:
  - id
  - homeTeam
  - awayTeam
  - matchDate

5️. Levanta el backend en el puerto 8080

Ve a la carpeta donde está tu proyecto Laravel (por ejemplo: `firstwebsite`) y ejecuta en la terminal:

composer run serve8080

Esto levantará el backend en:
http://localhost:8080/api/games

6️. Abre el frontend en tu navegador

Abre el archivo:
public/LaLigaTracker.html

O simplemente visita:
http://localhost:8080/LaLigaTracker.html

-----------------------------------------------------
🧪 Endpoints disponibles

Método   Ruta                        Descripción  
GET      /api/games                  Obtener todos los partidos  
GET      /api/games/{id}             Obtener un partido por ID  
POST     /api/games                  Crear un nuevo partido  
PUT      /api/games/{id}             Actualizar un partido  
DELETE   /api/games/{id}             Eliminar un partido  

Todos devuelven o reciben JSON.

-----------------------------------------------------
🖼️ Captura del frontend funcionando

Prueba: LigaTracker.png

-----------------------------------------------------
🔧 Extensiones futuras

Este proyecto está listo para ampliar funcionalidades como:

- PATCH: registrar goles, tarjetas y tiempo extra.
- Integración con base de datos relacional para jugadores o estadísticas.
- Despliegue con Docker.

-----------------------------------------------------
🧑‍💻 Autor

Nombre: Fabián Morales  
GitHub: https://github.com/FabianMoraeles
