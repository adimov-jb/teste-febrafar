<?php

namespace App\Repositories;

use App\Models\AgendaTipo;
use App\Repositories\Abstracts\AbstractRepositoryEloquentORM;

class AgendaTipoRepositoryEloquentORM extends AbstractRepositoryEloquentORM
{
    public function __construct()
    {
        parent::__construct(new AgendaTipo());
    }

}
