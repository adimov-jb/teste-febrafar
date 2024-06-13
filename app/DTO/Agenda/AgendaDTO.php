<?php

namespace App\DTO\Agenda;

use App\DTO\Interfaces\InterfaceDTO;

class AgendaDTO implements InterfaceDTO
{

    public function __construct(
        public string $dataInicio,
        public string $dataPrazo,
        public string $dataConclusao,
        public string $titulo,
        public string $descricao,
        public string $status,
        public string $agendaTipoId
    ) {
    }


    public static function new(array $params)
    {
        $request = $params['request'];

        return new self(
            $request->dataInicio,
            $request->dataPrazo,
            $request->dataConclusao,
            $request->titulo,
            $request->descricao,
            $request->status,
            $request->agendaTipoId
        );
    }
}
