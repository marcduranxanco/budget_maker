<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Clase abstracta de la que extenderán los eventos para evitar la duplicidad del código en las clases que hereden
 */
abstract class PresupuestoEvent extends Event
{
    protected $presupuesto;

    public function __construct($presupuesto)
    {
        $this->presupuesto = $presupuesto;
    }

    public function getPresupuesto()
    {
        return $this->presupuesto;
    }
}