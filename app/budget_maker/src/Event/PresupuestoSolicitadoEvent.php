<?php

namespace App\Event;

use App\Event\PresupuestoEvent;

class PresupuestoSolicitadoEvent extends PresupuestoEvent
{
    public const NAME = 'presupuesto.solicitado';

    private $solicitudPresupuesto;

    public function __construct(SolicitudPresupuesto $solicitudPresupuesto) {
        $this->solicitudPresupuesto = $solicitudPresupuesto;
    }

    public function getPresupuesto(): SolicitudPresupuesto {
        return $this->solicitudPresupuesto;
    }
}