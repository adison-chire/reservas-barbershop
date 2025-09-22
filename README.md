# Barbería TOSCO – Sistema de Reservas Web

Aplicación web desarrollada para gestionar reservas en **TOSCO Barber Shop**.
El sistema permite a los clientes registrarse, iniciar sesión y reservar citas, mientras que los administradores pueden gestionar servicios, controlar citas y mantener actualizada la información de la barbería.

El objetivo principal es **digitalizar el proceso de atención**, mejorando la organización y brindando una mejor experiencia a clientes y barberos.

<div align="center">
  <img src="/assets/video_app_web_barberia.gif" alt="Sistema de reservas de la barbería" style="border: 2px solid #cdc8c8ff; border-radius: 15px;">
</div>
---

## Características Principales

* **Registro y Confirmación de Usuarios**
    * Sistema con validación de datos, seguridad en contraseñas y confirmación vía correo electrónico.
* **Recuperación de Contraseña**
    * Generación de token y restablecimiento seguro mediante enlace de recuperación.
* **Inicio de Sesión**
    * Acceso diferenciado para clientes y administradores, con control de permisos.
* **Gestión de Servicios**
    * Creación, edición y eliminación de servicios.
    * Visualización de catálogo con precios para clientes.
* **Gestión de Citas**
    * Reserva de citas con fecha, hora y servicios seleccionados.
    * Confirmación de reserva y registro automático en la base de datos.
    * Administración de citas con filtros por fecha, detalles de clientes y total a pagar.

---

## Tecnologías Utilizadas

* **Frontend:** HTML, CSS, JavaScript (MVC básico)
* **Backend:** PHP 8
* **Base de Datos:** MySQL (diseñada y gestionada en Workbench)
* **Herramientas:** Composer, npm, Git, VS Code

---

## Instalación y Uso

### Requisitos Previos

* Git
* Node.js y npm
* PHP 8
* Composer
* MySQL Server + MySQL Workbench

### Pasos de Instalación

1.  **Clonar el repositorio**
    ```bash
    git clone [https://github.com/adison-chire/tosco-barber-reservas.git](https://github.com/adison-chire/tosco-barber-reservas.git)
    cd tosco-barber-reservas
    ```

2.  **Configurar la Base de Datos**
    * Crear una base de datos en MySQL.
    * Importar el archivo `.sql` incluido en el proyecto.

3.  **Configurar el Backend**
    * Editar las credenciales de conexión en el archivo de configuración.
    * Instalar dependencias con Composer (si aplica).

4.  **Ejecutar el Proyecto**
    * Iniciar servidor local con PHP (`php -S localhost:8000`) o usar XAMPP/WAMP.
    * Abrir el navegador en `http://localhost:8000`.

---

## Capturas de Pantalla

<div align="center">
  <img src="/assets/bd.png" width="600" alt="">
  <img src="/assets/crea_cuenta.png" width="600" alt="">
  <img src="/assets/rec_cuenta.png" width="600" alt="">
  <img src="/assets/ini_sesion.png" width="600" alt="">
  <img src="/assets/panel_admin.png" width="600" alt="">
  <img src="/assets/ver_citas_admin.png" width="600" alt="">
  <img src="/assets/nue_serv.png" width="600" alt="">
  <img src="/assets/fecha_cita.png" width="600" alt="">
  <img src="/assets/registra_cita.png" width="600" alt="">
  <img src="/assets/servicios.png" width="600" alt="">
  <img src="/assets/reservar.png" width="600" alt="">
</div>

---

## Contacto

Si deseas conocer más sobre este proyecto o colaborar:

* [Portfolio](https://adison-chire.github.io/)
* [LinkedIn](https://www.linkedin.com/in/adison-chire-1603s/)
* adichidev03@gmail.com
