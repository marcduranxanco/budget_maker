<?php

namespace App\EventSubscriber;

use App\Event\PresupuestoAprobadoEvent;
use App\Event\PresupuestoSolicitadoEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class PresupuestoEventSubscriber implements EventSubscriberInterface
{
    private $presupuesto;

    public function __construct()
    {
        $this->presupuesto = 'ObjetoPresupuesto';
        /* TODO: Cuando esté creada la entidad presupuesto,
         tendremos que añadirla y así trabajar con sus datos en el evento */
    }

    public static function getSubscribedEvents() : array
    {
        return [
            PresupuestoSolicitadoEvent::NAME => [
                ['onPresupuestoSolicitado', 10]
            ],
            PresupuestoAprobadoEvent::NAME => [
                ['onPresupuestoCreado', 10]
                // ['otrosMetodos', 10]
            ]
        ];
    }

    public function onPresupuestoSolicitado(PresupuestoSolicitadoEvent $event) : void
    {
        // ... Lógica de envío de correos
        $presupuesto = $event->getPresupuesto();
    }

    public function onPresupuestoCreado(PresupuestoSolicitadoEvent $event) : void
    {
        // ... Lógica de envío de correos
        $presupuesto = $event->getPresupuesto();
    }
}