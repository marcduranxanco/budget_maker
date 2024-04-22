<?php

namespace App\Event;

use App\Event\PresupuestoEvent;

class PresupuestoAprobadoEvent extends PresupuestoEvent
{
    public const NAME = 'presupuesto.aprobado';
}