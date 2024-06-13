<?php

namespace App\Services;

use App\DTO\Agenda\AgendaDTO;
use App\Repositories\AgendaRepositoryEloquentORM;
use App\Services\Abstracts\AbstractCrudService;

class AgendaService extends AbstractCrudService
{
    public function __construct(
        protected AgendaRepositoryEloquentORM $agendaRepository
    ) {

        $agendaCreateDTO = AgendaDTO::class;
        $agendaUpdateDTO = AgendaDTO::class;

        parent::__construct(
            $agendaRepository,
            $agendaCreateDTO,
            $agendaUpdateDTO
        );
    }

}
