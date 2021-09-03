<?php namespace App\Repositories;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
	public function getAll(){
		return Student::all();
	}

	public function store($storeData){
		return Student::create($storeData);
	}

	public function update($updateData, $id){
		return Student::whereId($id)->update($updateData);
	}

	public function getStudent($id){
		return Student::findOrFail($id);
	}


}