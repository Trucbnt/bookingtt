<?php

namespace App\Repositories;

use App\Models\Role;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Interfaces\Repositories\RoleRepositoryInterface;

class RoleRepositoryEloquent extends BaseRepository implements RoleRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return Role::class;
    }

    /**
     * Apply criteria in current Query Repository.
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Get a paginated list of Reviews with optional search functionality.
     *
     * @param array $filters
     * @param int $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getAllRoles(array $filters = [], $perPage = 5)
    {
        $query = $this->model->query();

        // Apply search filters
        if (!empty($filters['search'])) {
            $query->where(function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['search'] . '%');
            });
        }

        if (!empty($filters['start_date'])) {
            $query->whereDate('created_at', '>=', $filters['start_date']);
        }

        if (!empty($filters['end_date'])) {
            $query->whereDate('created_at', '<=', $filters['end_date']);
        }

        // Sort by creation date (latest first)
        $query->orderBy('id', 'desc');

        // Paginate results
        return $query->paginate($perPage);
    }

    /**
     * Get Role detail by ID.
     *
     * @param int $id
     * @return \App\Models\Role
     */
    public function getRoleDetail($id)
    {
        return $this->find($id);
    }

    /**
     * Update an Role by ID.
     *
     * @param int $id
     * @param array $params
     * @return bool
     */
    public function updateRole($id, $params)
    {
        return $this->update($params, $id);
    }

    /**
     * Create a new Role.
     *
     * @param array $params
     * @return \App\Models\Role
     */
    public function createRole($params)
    {
        return $this->create($params);
    }

    /**
     * Get Role detail by ID (same as getRoleDetail).
     *
     * @param int $id
     * @return \App\Models\Role
     */
    public function detailRole($id)
    {
        return $this->find($id);
    }

    /**
     * Delete an Role by ID.
     *
     * @param int $id
     * @return bool|null
     * @throws \Exception
     */
    public function deleteRole($id)
    {
        return $this->delete($id);
    }
}
