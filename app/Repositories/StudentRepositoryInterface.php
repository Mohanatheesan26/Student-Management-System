<?php namespace App\Repositories;

interface StudentRepositoryInterface{
	
	public function getAll();

	public function store($storeData);

	public function update($updateData, $id);

	public function getStudent($id);


}
