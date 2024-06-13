<?php

namespace App\Repositories;

use App\Models\Agenda;
use App\Repositories\Abstracts\AbstractRepositoryEloquentORM;

class AgendaRepositoryEloquentORM extends AbstractRepositoryEloquentORM
{

    public function __construct()
    {
        parent::__construct(new Agenda());
    }

}
