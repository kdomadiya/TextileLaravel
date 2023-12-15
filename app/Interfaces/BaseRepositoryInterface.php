<?php

namespace App\Interfaces;

interface BaseRepositoryInterface
{
   public function getAll();
   public function get($limit, $page, $search = '', $order_by = 'id', $order = 'asc', $columns);
   public function getById($id);
   public function create(array $data);
   public function update(array $data, $id);
   public function delete($data);
   public function countTotal();
   public function countActive();
   public function updateCache($key);
}