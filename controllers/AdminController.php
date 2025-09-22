<?php 

namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class AdminController {
    public static function index( Router $router ) {
        // Función para iniciar sesión si no ha sido iniciada
        function isSession() : void {
            if(!isset($_SESSION)) {
                session_start();
            }
        }

        // Iniciar sesión si no ha sido iniciada
        isSession();
        
        // Verificar si el usuario es administrador
        isAdmin();

        // Obtener la fecha desde la URL, si no está presente, usar la fecha actual
        $fecha = $_GET['fecha'] ?? date('Y-m-d');
        $fechas = explode('-', $fecha);

        // Verificar si la fecha es válida
        if( !checkdate( $fechas[1], $fechas[2], $fechas[0]) ) {
            header('Location: /404'); // Redirigir a una página de error si la fecha no es válida
            return;
        }

        // Consultar la base de datos para obtener las citas del día especificado
        $consulta = "SELECT citas.id, citas.hora, CONCAT( usuarios.nombre, ' ', usuarios.apellido) as cliente, ";
        $consulta .= " usuarios.email, usuarios.telefono, servicios.nombre as servicio, servicios.precio  ";
        $consulta .= " FROM citas  ";
        $consulta .= " LEFT OUTER JOIN usuarios ";
        $consulta .= " ON citas.id_usuarios=usuarios.id  ";
        $consulta .= " LEFT OUTER JOIN citas_servicios ";
        $consulta .= " ON citas_servicios.id_citas=citas.id ";
        $consulta .= " LEFT OUTER JOIN servicios ";
        $consulta .= " ON servicios.id=citas_servicios.id_servicios ";
        $consulta .= " WHERE fecha =  '${fecha}' ";

        // Ejecutar la consulta SQL y obtener los resultados
        $citas = AdminCita::SQL($consulta);

        // Renderizar la vista 'admin/index' pasando los datos necesarios
        $router->render('admin/index', [
            'nombre' => $_SESSION['nombre'], // Nombre del administrador desde la sesión
            'citas' => $citas, // Resultados de las citas
            'fecha' => $fecha // Fecha actual o la fecha pasada por la URL
        ]);
    }
}

