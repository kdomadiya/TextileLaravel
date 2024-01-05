<?php

namespace App\Repository;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class BaseRepository implements BaseRepositoryInterface
{
    public $search;
    public $page;
    public $limit;
    public $orderBy;
    public $with;
    public $successStatus = 200;
    public $minutes = 60;
    public $start_date;
    public $end_date;

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        try {

            return $this->model::all();
        } catch (Exception $exception) {
            Log::error("An error occurred: " . class_basename($this->model) . " Get All: " . $exception->getMessage());
            return null;
        }
    }

    /**
     * CompanyRepository constructor.
     *
     * @param Company $model
     * @return Collection
     */
    public function get($limit, $page, $search = '', $order_by = 'id', $order = 'asc', $columns,$start_date,$end_date)
    {
                // Parse the string into a Carbon instance
                $startDate = Carbon::parse($start_date);
                $endDate = Carbon::parse($end_date);
                // Format the date as per your requirement
                $StartDate = $startDate->format('Y-m-d');
                $EndDate = $endDate->format('Y-m-d');
                // dd($StartDate);
        try {
            $query = $this->model::query();
            ($columns) ? $query->select(explode(',', $columns)) : '';
            ($search) ? $query->where('name', 'like', '%' . $search . '%') : '';
            // ($startDate != null) ? $query->whereBetween('created_at',[$StartDate, $endDate]) : '';
            ($startDate != null) ? $query->whereBetween('created_at',['2024-01-05', '2024-01-05']) : '';
            ($order_by) ? $query->orderBy($order_by, $order) : $query->orderBy('id', 'asc');
            ($limit) ? $data = $query->paginate($limit) : $data = $query->toSql();
            // dd($data);
        } catch (QueryException $exception) {
            Log::error("An error occurred: " . class_basename($this->model) . " Get/Show: " . $exception->getMessage());
            return null;
        }

        return $data;
    }

    public function getById($id)
    {
        try {
            return $this->model::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            Log::error("An error occurred: " . class_basename($this->model) . " Get/Show: " . $exception->getMessage());
            return null;
        }
    }

    public function create(array $data)
    {
        try {
            return $this->model::create($data);
        } catch (Exception $exception) {
            Log::error("An error occurred: " . class_basename($this->model) . " Create: " . $exception->getMessage());
            return null;
        }
    }

    public function update(array $data, $id)
    {
        try {
            unset($data['id']);
            $this->model::find($id)->update($data);
            return $this->model::find($id);
        } catch (ModelNotFoundException $exception) {
            Log::error("An error occurred: " . class_basename($this->model) . " Update: " . $exception->getMessage());
            return null;
        }
    }

    public function delete($id)
    {
        try {
            // $this->model::find($id)->delete();
            $this->model::destroy($id);
        } catch (ModelNotFoundException $exception) {
            Log::error("An error occurred: " . class_basename($this->model) . " Delete: " . $exception->getMessage());
            return null;
        }
    }

    public function countTotal()
    {
        try {
            return Cache::remember('total_' . $this->model . '_count', $this->minutes, function () {
                return $this->model->count();
            });
        } catch (Exception $exception) {
            Log::error("An error occurred: Count Total " . class_basename($this->model) . ": " . $exception->getMessage());
            return null;
        }
    }

    public function countActive()
    {
        try {
            return Cache::remember('active' . $this->model . '_count', $this->minutes, function () {
                return $this->model->where('status', 1)->count();
            });
        } catch (Exception $exception) {
            Log::error("An error occurred: Count Active " . class_basename($this->model) . ": " . $exception->getMessage());
            return null;
        }
    }

    public function updateCache($key)
    {
        Cache::forget($key);
    }
}