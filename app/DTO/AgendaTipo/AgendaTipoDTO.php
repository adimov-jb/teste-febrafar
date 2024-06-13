<?php

namespace App\DTO\AgendaTipo;

use App\DTO\Interfaces\InterfaceDTO;

class AgendaTipoDTO implements InterfaceDTO
{

    public function __construct(
        public string $nome
    ) {
    }

    public static function new(array $params)
    {
        $request = $params['request'];

        return new self(
            $request->nome
        );
    }
}
