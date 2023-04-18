<?php

namespace App\Repositories\Contracts;

interface RepositoryEloquentContract
{
    /**
     * Retrieve all data of repository, paginated
     *
     * @param int|null $limit
     * @param array $columns
     * @param string $method
     *
     * @return mixed
     */
    public function paginate(?int $limit = null, array $columns = ['*'], string $method = "paginate"): mixed;
}
