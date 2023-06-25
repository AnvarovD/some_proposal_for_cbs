<?php

namespace App\Repositories\NewRepository\BaseEloquentRepository;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{
    /**
     * @param Builder $model
     * @return BaseRepositoryInterface
     */
    public function setModel(Builder $model): BaseRepositoryInterface;

    /**
     * @param array $relations
     * @return BaseRepositoryInterface
     */
    public function all(array $relations = []): BaseRepositoryInterface;

    /**
     * @param int $id
     * @param array $relations
     * @return BaseRepositoryInterface
     */
    public function show(int $id, array $relations = []): BaseRepositoryInterface;

    /**
     * @param array $data
     * @return bool
     */
    public function makeAndSave(array $data): bool;

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model;

    /**
     * @param array $data
     * @param $id
     * @return bool|int
     */
    public function update(array $data, $id): bool|int;

    /**
     * @return bool|int|null
     */
    public function delete(): bool|int|null;

    /**
     * @return Collection
     */
    public function get(): Collection;

    /**
     * @return Model|null
     */
    public function first(): Model|null;

    /**
     * @param int $perPage
     * @param int $page
     * @return LengthAwarePaginator
     */
    public function paginate(int $perPage = 15, int $page = 1): LengthAwarePaginator;

}
