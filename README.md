# SenacytPrueba

Este proyecto es una aplicación web para la gestión de contactos, desarrollada en PHP y JavaScript, utilizando una base de datos MySQL. Permite registrar, listar y eliminar contactos a través de una interfaz sencilla.

## Estructura del Proyecto

- **index.php**: Página principal de la aplicación.
- **api/contactos/**: Endpoints para operaciones CRUD sobre contactos (registrar, listar, eliminar).
- **assets/**: Recursos estáticos (imágenes, estilos, etc.).
- **config/database.php**: Configuración de la conexión a la base de datos.
- **document/code.html**: Documentación o ejemplos de código.
- **js/validaciones.js**: Validaciones de formularios en JavaScript.
- **scripts/agenda_db.sql**: Script SQL para crear la base de datos y tablas necesarias.
- **view/**: Vistas de la aplicación (formularios, modales, navbar, etc.).

## Instalación y Configuración

1. Clona el repositorio en tu servidor local (por ejemplo, XAMPP).
2. Importa el archivo `scripts/agenda_db.sql` en tu servidor MySQL para crear la base de datos.
3. Configura los parámetros de conexión en `config/database.php` según tu entorno.
4. Accede a `index.php` desde tu navegador para comenzar a usar la aplicación.

## Funcionalidades

- Registrar nuevos contactos.
- Listar todos los contactos registrados.
- Eliminar contactos existentes.
- Validación de formularios en el frontend.

## Requisitos

- PHP 7.x o superior
- MySQL
- Servidor web (Apache recomendado)
- Navegador web moderno

## Créditos

Desarrollado por Gabriel Magallón Medina.

---

Para dudas o sugerencias, contacta al equipo de desarrollo.