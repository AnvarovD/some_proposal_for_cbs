<?php

namespace App\Repositories\NewRepository\BaseEloquentRepository;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    protected Builder $model;
    public function setModel(Builder $model): BaseRepositoryInterface
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @param array $relations
     * @return BaseRepositoryInterface
     */
    public function all(array $relations = []): BaseRepositoryInterface
    {
        $this->model->with($relations);
        return $this;
    }

    /**
     * @param int $id
     * @param array $relations
     * @return BaseRepositoryInterface
     */
    public function show(int $id, array $relations = []): BaseRepositoryInterface
    {
        $this->model->with($relations)->where('id', $id);
        return $this;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function makeAndSave(array $data): bool
    {
        return $this->model->make($data)->save();
    }

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @return bool|int
     */
    public function update(array $data, $id): bool|int
    {
        $record = $this->model->findOrFail($id);
        return $record->update($data);
    }

    /**
     * @return bool|int|null
     */
    public function delete(): bool|int|null
    {
        return $this->model->delete();
    }

    /**
     * @return Collection
     */
    public function get(): Collection
    {
       return $this->model->get();
    }

    /**
     * @return Model|null
     */
    public function first(): Model|null
    {
       return $this->model->first();
    }

    /**
     * @param int $perPage
     * @param int $page
     * @return LengthAwarePaginator
     */
    public function paginate(int $perPage = 15, int $page = 1): LengthAwarePaginator
    {
       return $this->model->paginate($perPage, ['*'], $page);
    }
}
