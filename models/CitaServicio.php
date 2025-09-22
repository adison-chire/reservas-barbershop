<?php

namespace Model;

class CitaServicio extends ActiveRecord {
    protected static $tabla = 'citas_servicios';
    protected static $columnasDB = ['id', 'id_citas', 'id_servicios'];

    public $id;
    public $id_citas;
    public $id_servicios;

    public function __construct($args = [])
    {
       $this->id = $args['id'] ?? null;
       $this->id_citas = $args['id_citas'] ?? '';
       $this->id_servicios = $args['id_servicios'] ?? ''; 
    }
}