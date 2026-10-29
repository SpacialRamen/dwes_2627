<?php

/*
    ejemplo 41
    crear la clase persona con los atributos nombre, edad y sexo, crear un metodo constructor que inicialice los atributos, crear un metodo que muestre los datos de la persona y otro metodo que permita cambiar el nombre de la persona.
*/

Class Persona {
    
    // propiedades
    public ?string $nombre;
    public ?int $edad;
    public ?string $sexo;

    public function __construct() {
        $this->nombre = null;
        $this->edad = null;
        $this->sexo = null;
    }
}