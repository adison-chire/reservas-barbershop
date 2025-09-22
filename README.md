# 💈 Barbería TOSCO – Sistema de Reservas Web

Aplicación web desarrollada para gestionar reservas en **TOSCO Barber Shop**.
El sistema permite a los clientes registrarse, iniciar sesión y reservar citas, mientras que los administradores pueden gestionar servicios, controlar citas y mantener actualizada la información de la barbería.

El objetivo principal es **digitalizar el proceso de atención**, mejorando la organización y brindando una mejor experiencia a clientes y barberos.

<div align="center">
  <img src="/" alt="Sistema de reservas de la barbería" style="border: 2px solid #cdc8c8ff; border-radius: 15px;">
</div>

---

## ✨ Características Principales

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

## 🛠️ Tecnologías Utilizadas

* **Frontend:** HTML, CSS, JavaScript (MVC básico)
* **Backend:** PHP 8
* **Base de Datos:** MySQL (diseñada y gestionada en Workbench)
* **Herramientas:** Composer, npm, Git, VS Code

---

## ⚙️ Instalación y Uso

### 📌 Requisitos Previos

* Sistema Operativo: Windows 11 (o equivalente)
* Git
* Node.js y npm
* PHP 8
* Composer
* MySQL Server + MySQL Workbench
* Acceso a internet para dependencias

### 🔧 Pasos de Instalación

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

## 📊 Capturas de Pantalla

<div align="center">
    <img src="/assets/login.png" width="600" alt="Login de usuarios">
    <img src="/assets/registro.png" width="600" alt="Registro de clientes">
    <img src="/assets/citas.png" width="600" alt="Gestión de citas">
    <img src="/assets/servicios.png" width="600" alt="Gestión de servicios">
    <img src="/assets/admin.png" width="600" alt="Panel de administración">
</div>

---

## 📬 Contacto

Si deseas conocer más sobre este proyecto o colaborar:

* [🌐 Portfolio](TU_LINK_DE_PORTFOLIO_AQUI)
* [💼 LinkedIn](TU_LINK_DE_LINKEDIN_AQUI)
* 📧 adichidev03@gmail.com
