<?php

namespace App\Services;

use App\DTO\AgendaTipo\AgendaTipoDTO;
use App\Repositories\AgendaTipoRepositoryEloquentORM;
use App\Services\Abstracts\AbstractCrudService;

class AgendaTipoService extends AbstractCrudService
{
    public function __construct(
        protected AgendaTipoRepositoryEloquentORM $agendaTipoRepository
    ) {

        $agendaTipoCreateDTO = AgendaTipoDTO::class;
        $agendaTipoUpdateDTO = AgendaTipoDTO::class;

        parent::__construct(
            $agendaTipoRepository,
            $agendaTipoCreateDTO,
            $agendaTipoUpdateDTO
        );
    }

}
