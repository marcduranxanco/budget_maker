<?php

namespace App\Event;

use App\Event\PresupuestoEvent;

class PresupuestoSolicitadoEvent extends PresupuestoEvent
{
    public const NAME = 'presupuesto.solicitado';
}