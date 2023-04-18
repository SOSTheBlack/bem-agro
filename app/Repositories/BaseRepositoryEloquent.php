<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryEloquentContract;
use App\Repositories\Exceptions\RepositoryException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseRepositoryEloquent implements RepositoryEloquentContract
{
    protected Model $model;
    protected Application $app;
    protected Collection $criteria;

    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract public function model(): string;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->criteria = new Collection();
        $this->makeModel();
//        $this->makePresenter();
//        $this->makeValidator();
        $this->boot();
    }

    /**
     * @return Model
     */
    public function makeModel(): Model
    {
        return $this->model = app($this->model());
    }

    public function boot(): void
    {
        //
    }

    /**
     * Retrieve all data of repository, paginated
     *
     * @param null|int $limit
     * @param array $columns
     * @param string $method
     *
     * @return mixed
     */
    public function paginate(?int $limit = null, array $columns = ['*'], string $method = "paginate"): mixed
    {
//        $this->applyCriteria();
//        $this->applyScope();
        $limit = is_null($limit) ? 12 : $limit;
        $results = $this->model->{$method}($limit, $columns);
        $results->appends(app('request')->query());

        $this->resetModel();

        return $results;
    }

    public function resetModel(): void
    {
        $this->makeModel();
    }
}
