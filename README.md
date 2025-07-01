# Bienes Raíces

Proyecto web para la gestión de propiedades inmobiliarias, desarrollado en PHP.

## Características

- Gestión de propiedades (alta, baja, modificación, listado)
- Gestión de vendedores
- Autenticación de usuarios (login)
- Panel de administración
- Página pública con listado de propiedades
- Envío de mensajes de contacto
- Subida y procesamiento de imágenes
- Arquitectura MVC
- Uso de Composer para gestión de dependencias

## Estructura del Proyecto

```
BienesRaices/
│
├── controllers/      # Controladores de la aplicación
├── includes/         # Configuración, funciones y plantillas
├── models/           # Modelos de datos (ORM)
├── public/           # Punto de entrada y recursos públicos
├── vendor/           # Dependencias externas (Composer)
├── views/            # Vistas de la aplicación
├── composer.json     # Configuración de Composer
├── package.json      # Configuración de herramientas frontend
└── Router.php        # Clase Router para gestión de rutas
```

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/bienesraices.git
   ```

2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```

3. Configura la base de datos en `includes/config/database.php`.

4. Configura el entorno web (puedes usar XAMPP, MAMP, o un servidor Apache/Nginx apuntando a la carpeta `public/`).

5. (Opcional) Instala dependencias frontend:
   ```bash
   npm install
   ```

## Uso

- Accede a la aplicación desde tu navegador en la ruta configurada.
- Ingresa al panel de administración para gestionar propiedades y vendedores.
- Los usuarios pueden ver las propiedades y enviar mensajes desde la página pública.

## Tecnologías

- PHP 8+
- MySQL
- Composer
- HTML, CSS, JavaScript

## Créditos

Desarrollado por Daniel Ortiz Herrera.

---

¡Contribuciones y sugerencias son bienvenidas!
