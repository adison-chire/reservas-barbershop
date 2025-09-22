<?php

namespace Controllers;

use Model\Servicio;
use MVC\Router;

class ServicioController {
    // Método para mostrar todos los servicios
    public static function index(Router $router) {
        // Inicia la sesión si no está iniciada
        if(!isset($_SESSION)) {
            session_start();
        }

        // Verifica si el usuario es administrador
        isAdmin();

        // Obtiene todos los servicios
        $servicios = Servicio::all();

        // Renderiza la vista de servicios con los datos necesarios
        $router->render('servicios/index', [
            'nombre' => $_SESSION['nombre'],
            'servicios' => $servicios
        ]);
    }

    // Método para crear un nuevo servicio
    public static function crear(Router $router) {
        // Inicia la sesión si no está iniciada
        if(!isset($_SESSION)) {
            session_start();
        }

        // Verifica si el usuario es administrador
        isAdmin();
        
        // Crea una nueva instancia de Servicio
        $servicio = new Servicio;
        $alertas = [];

        // Verifica si el método de la solicitud es POST
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sincroniza los datos del POST con el objeto Servicio
            $servicio->sincronizar($_POST);
            
            // Valida los datos y almacena las alertas
            $alertas = $servicio->validar();

            // Si no hay alertas, guarda el servicio y redirige a la lista de servicios
            if(empty($alertas)) {
                $servicio->guardar();
                header('Location: /servicios');
            }
        }

        // Renderiza la vista de crear servicio con los datos necesarios
        $router->render('servicios/crear', [
            'nombre' => $_SESSION['nombre'],
            'servicio' => $servicio,
            'alertas' => $alertas
        ]);
    }

    // Método para actualizar un servicio existente
    public static function actualizar(Router $router) {
        // Inicia la sesión si no está iniciada
        if(!isset($_SESSION)) {
            session_start();
        }

        // Verifica si el usuario es administrador
        isAdmin();

        // Verifica si el id proporcionado es numérico
        if(!is_numeric($_GET['id'])) return;

        // Encuentra el servicio con el id proporcionado
        $servicio = Servicio::find($_GET['id']);
        $alertas = [];

        // Verifica si el método de la solicitud es POST
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sincroniza los datos del POST con el objeto Servicio
            $servicio->sincronizar($_POST);

            // Valida los datos y almacena las alertas
            $alertas = $servicio->validar();

            // Si no hay alertas, guarda el servicio y redirige a la lista de servicios
            if(empty($alertas)) {
                $servicio->guardar();
                header('Location: /servicios');
            }
        }

        // Renderiza la vista de actualizar servicio con los datos necesarios
        $router->render('servicios/actualizar', [
            'nombre' => $_SESSION['nombre'],
            'servicio' => $servicio,
            'alertas' => $alertas
        ]);
    }

    // Método para eliminar un servicio
    public static function eliminar() {
        // Inicia la sesión si no está iniciada
        if(!isset($_SESSION)) {
            session_start();
        }

        // Verifica si el usuario es administrador
        isAdmin();
        
        // Verifica si el método de la solicitud es POST
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtiene el id del servicio a eliminar
            $id = $_POST['id'];
            
            // Encuentra y elimina el servicio con el id proporcionado
            $servicio = Servicio::find($id);
            $servicio->eliminar();
            
            // Redirige a la lista de servicios
            header('Location: /servicios');
        }
    }
}
