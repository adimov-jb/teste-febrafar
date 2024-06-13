<?php

namespace App\Enums;

enum StatusAgendaEnum
{
    const ABERTO      = 'ABERTO';
    const CONCLUIDO    = 'CONCLUIDO';

    public static function getAll(): array
    {
        return [
            self::ABERTO,
            self::CONCLUIDO
        ];
    }
}
