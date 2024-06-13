<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstracts\AbstractCrudController;
use App\Http\Requests\AgendaRequest;
use App\Services\AgendaService;

class AgendaController extends AbstractCrudController
{

    public function __construct(
        protected AgendaService $agendaService,
        protected AgendaRequest $agendaRequest
    ) {
        parent::__construct(
            $agendaService,
            $agendaRequest
        );
    }

}
