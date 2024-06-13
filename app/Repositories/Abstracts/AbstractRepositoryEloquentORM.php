<?php

namespace App\Repositories\Abstracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class AbstractRepositoryEloquentORM
{
    public function __construct(
        protected Model $model
    ) {
    }

    public function save(mixed $dto): object
    {
        $model = $this->model->create((array) $dto);

        return $model;
    }

    public function getAll(): LengthAwarePaginator
    {
        return $this->model->paginate();
    }

    public function getById(string $id): object
    {
        $model = $this->model->findOrFail($id);
        return $model;
    }

    public function delete(string $id): void
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
    }


    public function update(mixed $dto): object
    {
        $model = $this->model->findOrFail($dto->id);
        $model->update((array) $dto);

        return $model;
    }

    public function getByIds(array $ids): object
    {
        return $this->model->whereIn('id', $ids)->get();
    }
}
