<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstracts\AbstractCrudController;
use App\Http\Requests\AgendaTipoRequest;
use App\Services\AgendaTipoService;

class AgendaTipoController extends AbstractCrudController
{

    public function __construct(
        protected AgendaTipoService $agendaTipoService,
        protected AgendaTipoRequest $agendaTipoRequest
    ) {
        parent::__construct(
            $agendaTipoService,
            $agendaTipoRequest
        );
    }

}
